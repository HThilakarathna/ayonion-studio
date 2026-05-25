<?php
/**
 * Ayonion Studios - Email Mailer
 * Handles email sending via cPanel SMTP using PHPMailer
 */

// Check if PHPMailer exists before requiring
$phpmailer_path = dirname(__DIR__) . '/vendor/phpmailer/phpmailer/src/';
if (file_exists($phpmailer_path . 'PHPMailer.php')) {
    require $phpmailer_path . 'Exception.php';
    require $phpmailer_path . 'PHPMailer.php';
    require $phpmailer_path . 'SMTP.php';
    $has_phpmailer = true;
} else {
    $has_phpmailer = false;
}

require_once __DIR__ . '/env_loader.php';

function logAyonionMailerError($message, $context = []) {
    $logsDir = dirname(__DIR__) . '/logs';
    $logFile = $logsDir . '/mailer.log';

    if (!is_dir($logsDir)) {
        @mkdir($logsDir, 0755, true);
    }

    $safeContext = [];
    foreach ($context as $key => $value) {
        if ($value === null || $value === '') {
            continue;
        }

        if (is_scalar($value)) {
            $safeContext[$key] = (string) $value;
        }
    }

    $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
    $payload = '[' . date('Y-m-d H:i:s') . '] ' . $message;
    $payload .= ' | ip=' . $ip;

    if (!empty($safeContext)) {
        $payload .= ' | context=' . json_encode($safeContext, JSON_UNESCAPED_SLASHES);
    }

    $payload .= PHP_EOL;

    if (@file_put_contents($logFile, $payload, FILE_APPEND) === false) {
        error_log(trim($payload));
    }
}

function sendAyonionFallbackMail($to, $subject, $body, $fromEmail, $fromName, $replyTo = '') {
    if (!function_exists('mail')) {
        logAyonionMailerError('Fallback mail unavailable: mail() is disabled', [
            'to' => $to,
            'subject' => $subject
        ]);
        return false;
    }

    $plainBody = strip_tags($body);
    $headers = [];
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-Type: text/plain; charset=UTF-8';
    $headers[] = 'From: ' . $fromName . ' <' . $fromEmail . '>';

    if (!empty($replyTo) && filter_var($replyTo, FILTER_VALIDATE_EMAIL)) {
        $headers[] = 'Reply-To: ' . $replyTo;
    }

    $result = @mail($to, $subject, $plainBody, implode("\r\n", $headers));

    if (!$result) {
        logAyonionMailerError('Fallback mail() failed', [
            'to' => $to,
            'subject' => $subject,
            'from' => $fromEmail
        ]);
    }

    return $result;
}

function sendAyonionEmail($to, $subject, $body, $plainText = '') {
    global $has_phpmailer;

    $smtpHost = getenv('SMTP_HOST') ?: '';
    $smtpUser = getenv('SMTP_USER') ?: '';
    $smtpPass = getenv('SMTP_PASS') ?: '';
    $smtpPort = (int) (getenv('SMTP_PORT') ?: 587);
    $smtpSecure = getenv('SMTP_SECURE') ?: 'tls';
    $fromName = getenv('FROM_NAME') ?: 'Ayonion Studios';

    $serverHost = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $defaultFrom = 'noreply@' . preg_replace('/:\\d+$/', '', $serverHost);
    $fromEmail = filter_var($smtpUser, FILTER_VALIDATE_EMAIL) ? $smtpUser : $defaultFrom;

    if (!$has_phpmailer) {
        logAyonionMailerError('PHPMailer not found, attempting fallback mail()', [
            'to' => $to,
            'subject' => $subject
        ]);
        return sendAyonionFallbackMail($to, $subject, $plainText ?: $body, $fromEmail, $fromName);
    }

    if (empty($smtpHost) || empty($smtpUser) || empty($smtpPass)) {
        logAyonionMailerError('SMTP credentials missing, attempting fallback mail()', [
            'to' => $to,
            'subject' => $subject,
            'smtp_host_set' => !empty($smtpHost) ? 'yes' : 'no',
            'smtp_user_set' => !empty($smtpUser) ? 'yes' : 'no',
            'smtp_pass_set' => !empty($smtpPass) ? 'yes' : 'no'
        ]);
        return sendAyonionFallbackMail($to, $subject, $plainText ?: $body, $fromEmail, $fromName);
    }

    $sendViaSmtp = function ($host) use ($smtpUser, $smtpPass, $smtpSecure, $smtpPort, $fromEmail, $fromName, $to, $subject, $body, $plainText) {
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);

        $mail->isSMTP();
        $mail->Host       = $host;
        $mail->SMTPAuth   = true;
        $mail->Username   = $smtpUser;
        $mail->Password   = $smtpPass;
        $mail->SMTPSecure = $smtpSecure;
        $mail->Port       = $smtpPort;
        $mail->CharSet    = 'UTF-8';

        $mail->setFrom($fromEmail, $fromName);
        $mail->addAddress($to);
        $mail->addReplyTo($fromEmail, $fromName);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->AltBody = $plainText ?: strip_tags($body);

        return $mail->send();
    };

    try {
        return $sendViaSmtp($smtpHost);
    } catch (\Throwable $e) {
        $serverHost = $_SERVER['HTTP_HOST'] ?? '';
        $domainHost = preg_replace('/:\\d+$/', '', $serverHost);
        $cpanelHost = !empty($domainHost) ? 'mail.' . $domainHost : '';

        logAyonionMailerError('SMTP send failed on primary host', [
            'to' => $to,
            'subject' => $subject,
            'smtp_host' => $smtpHost,
            'smtp_port' => (string) $smtpPort,
            'smtp_secure' => $smtpSecure,
            'error' => $e->getMessage()
        ]);

        if (!empty($cpanelHost) && strtolower($cpanelHost) !== strtolower($smtpHost)) {
            try {
                logAyonionMailerError('Retrying SMTP with cPanel host', [
                    'to' => $to,
                    'subject' => $subject,
                    'retry_host' => $cpanelHost
                ]);
                return $sendViaSmtp($cpanelHost);
            } catch (\Throwable $retryError) {
                logAyonionMailerError('SMTP retry failed on cPanel host, attempting fallback mail()', [
                    'to' => $to,
                    'subject' => $subject,
                    'retry_host' => $cpanelHost,
                    'error' => $retryError->getMessage()
                ]);
            }
        }

        return sendAyonionFallbackMail($to, $subject, $plainText ?: $body, $fromEmail, $fromName);
    }
}
