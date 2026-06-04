<?php
/**
 * Multi-layer contact form spam protection.
 * Honeypots alone fail when bots skip hidden fields or POST without loading the page.
 */

function spamGuardSecret(): string
{
    $secret = getenv('FORM_SPAM_SECRET');
    if ($secret !== false && $secret !== '') {
        return $secret;
    }
    return hash('sha256', dirname(__DIR__) . '|ayonion-form-guard');
}

function spamGuardIssueTimingToken(string $formId): string
{
    $issued = time();
    $sig = hash_hmac('sha256', $formId . '|' . $issued, spamGuardSecret());
    return base64_encode($issued . '.' . $sig);
}

function spamGuardVerifyTimingToken(string $token, string $formId, int $minSeconds = 3, int $maxSeconds = 7200): bool
{
    $decoded = base64_decode($token, true);
    if ($decoded === false || !str_contains($decoded, '.')) {
        return false;
    }
    [$issued, $sig] = explode('.', $decoded, 2);
    if (!ctype_digit($issued)) {
        return false;
    }
    $expected = hash_hmac('sha256', $formId . '|' . $issued, spamGuardSecret());
    if (!hash_equals($expected, $sig)) {
        return false;
    }
    $elapsed = time() - (int) $issued;
    return $elapsed >= $minSeconds && $elapsed <= $maxSeconds;
}

function spamGuardJsToken(string $formId): string
{
    return substr(hash_hmac('sha256', 'js|' . $formId, spamGuardSecret()), 0, 24);
}

function spamGuardVerifyJsToken(?string $value, string $formId): bool
{
    return hash_equals(spamGuardJsToken($formId), (string) $value);
}

function spamGuardClientIp(): string
{
    if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
        return trim($_SERVER['HTTP_CF_CONNECTING_IP']);
    }
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return trim(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0]);
    }
    return $_SERVER['REMOTE_ADDR'] ?? 'unknown';
}

function spamGuardRateLimitExceeded(string $formId, int $maxPerHour = 5): bool
{
    $dir = dirname(__DIR__) . '/logs';
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
    $safeId = preg_replace('/[^a-z0-9_-]/i', '', $formId) ?: 'form';
    $file = $dir . '/form_rate_' . $safeId . '.json';
    $ip = spamGuardClientIp();
    $now = time();
    $window = 3600;

    $data = [];
    if (is_file($file)) {
        $data = json_decode((string) file_get_contents($file), true) ?: [];
    }

    foreach ($data as $key => $entries) {
        $data[$key] = array_values(array_filter(
            (array) $entries,
            static fn($t) => (int) $t > $now - $window
        ));
    }

    $entries = $data[$ip] ?? [];
    if (count($entries) >= $maxPerHour) {
        return true;
    }

    $entries[] = $now;
    $data[$ip] = $entries;
    @file_put_contents($file, json_encode($data), LOCK_EX);

    return false;
}

function spamGuardLooksLikeSpamContent(array $fields): ?string
{
    $text = strtolower(implode(' ', array_filter([
        $fields['name'] ?? '',
        $fields['email'] ?? '',
        $fields['message'] ?? '',
        $fields['service'] ?? '',
    ])));

    if (preg_match_all('#https?://#i', $text) >= 3) {
        return 'too_many_links';
    }

    $keywords = [
        'viagra', 'cialis', 'casino', 'crypto investment', 'guest post',
        'link building', 'buy backlinks', 'seo services cheap', 'loan approved',
        'telegram:', 'whatsapp me', 'binary option',
    ];
    foreach ($keywords as $kw) {
        if (str_contains($text, $kw)) {
            return 'blocked_keyword';
        }
    }

    $msg = (string) ($fields['message'] ?? '');
    if (strlen($msg) > 200 && substr_count($msg, ' ') < 3) {
        return 'gibberish';
    }

    return null;
}

function spamGuardBlockReason(string $formId): ?string
{
    if (!empty($_POST['website_url']) || !empty($_POST['company_fax'])) {
        return 'honeypot';
    }

    if (!spamGuardVerifyTimingToken((string) ($_POST['_form_timing'] ?? ''), $formId)) {
        return 'timing';
    }

    if (!spamGuardVerifyJsToken($_POST['_form_js'] ?? null, $formId)) {
        return 'js_token';
    }

    if (spamGuardRateLimitExceeded($formId)) {
        return 'rate_limit';
    }

    return spamGuardLooksLikeSpamContent([
        'name' => $_POST['name'] ?? '',
        'email' => $_POST['email'] ?? '',
        'message' => $_POST['message'] ?? '',
        'service' => $_POST['service'] ?? '',
    ]);
}

function spamGuardLog(string $formId, string $reason): void
{
    $dir = dirname(__DIR__) . '/logs';
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
    $line = date('Y-m-d H:i:s') . " | {$formId} | {$reason} | IP: " . spamGuardClientIp() . "\n";
    @file_put_contents($dir . '/spam_blocked.log', $line, FILE_APPEND | LOCK_EX);
}

/** Returns true when the submission should be silently rejected (fake success). */
function spamGuardIsBlocked(string $formId): bool
{
    $reason = spamGuardBlockReason($formId);
    if ($reason !== null) {
        spamGuardLog($formId, $reason);
        return true;
    }
    return false;
}

function spamGuardRenderStyles(): void
{
    static $done = false;
    if ($done) {
        return;
    }
    $done = true;
    echo '<style>.ay-spam-trap{position:absolute;left:-10000px;width:1px;height:1px;overflow:hidden;opacity:0;pointer-events:none;}</style>';
}

function spamGuardRenderFields(string $formId): void
{
    $timing = spamGuardIssueTimingToken($formId);
    $jsToken = spamGuardJsToken($formId);
    $trapId = 'company_fax_' . preg_replace('/[^a-z0-9_-]/i', '', $formId);
    ?>
    <div class="ay-spam-trap" aria-hidden="true">
        <label for="<?php echo htmlspecialchars($trapId); ?>">Company fax</label>
        <input type="text" name="company_fax" id="<?php echo htmlspecialchars($trapId); ?>" tabindex="-1" autocomplete="off" value="">
    </div>
    <input type="hidden" name="_form_timing" value="<?php echo htmlspecialchars($timing); ?>">
    <input type="hidden" name="_form_js" value="" data-spam-js="<?php echo htmlspecialchars($jsToken); ?>">
    <?php
}

function spamGuardRenderScript(): void
{
    static $done = false;
    if ($done) {
        return;
    }
    $done = true;
    ?>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('input[data-spam-js]').forEach(function (el) {
            el.value = el.getAttribute('data-spam-js') || '';
        });
    });
    </script>
    <?php
}
