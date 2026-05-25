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

function sendAyonionFallbackMail($to, $subject, $body, $fromEmail, $fromName, $replyTo = '') {
    $plainBody = strip_tags($body);
    $headers = [];
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-Type: text/plain; charset=UTF-8';
    $headers[] = 'From: ' . $fromName . ' <' . $fromEmail . '>';

    if (!empty($replyTo) && filter_var($replyTo, FILTER_VALIDATE_EMAIL)) {
        $headers[] = 'Reply-To: ' . $replyTo;
    }

    return @mail($to, $subject, $plainBody, implode("\r\n", $headers));
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
        return sendAyonionFallbackMail($to, $subject, $plainText ?: $body, $fromEmail, $fromName);
    }

    if (empty($smtpHost) || empty($smtpUser) || empty($smtpPass)) {
        return sendAyonionFallbackMail($to, $subject, $plainText ?: $body, $fromEmail, $fromName);
    }

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = $smtpHost;
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
    } catch (\Throwable $e) {
        return sendAyonionFallbackMail($to, $subject, $plainText ?: $body, $fromEmail, $fromName);
    }
}
