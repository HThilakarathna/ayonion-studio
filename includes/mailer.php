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

require_once 'env_loader.php';

function sendAyonionEmail($to, $subject, $body, $plainText = '') {
    global $has_phpmailer;

    if (!$has_phpmailer) {
        // Fallback to mail() if PHPMailer is missing
        return @mail($to, $subject, strip_tags($body));
    }

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = getenv('SMTP_HOST') ?: 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = getenv('SMTP_USER');
        $mail->Password   = getenv('SMTP_PASS');
        $mail->SMTPSecure = getenv('SMTP_SECURE') ?: 'tls';
        $mail->Port       = getenv('SMTP_PORT') ?: 587;

        // Recipients
        $mail->setFrom(getenv('SMTP_USER'), getenv('FROM_NAME') ?: 'Ayonion Studios');
        $mail->addAddress($to);
        $mail->addReplyTo(getenv('SMTP_USER'), getenv('FROM_NAME'));

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = nl2br($body);
        $mail->AltBody = $plainText ?: strip_tags($body);

        return $mail->send();
    } catch (Exception $e) {
        // Fallback to mail() for localhost testing if SMTP fails
        if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1' || $_SERVER['REMOTE_ADDR'] == '::1') {
            return @mail($to, $subject, $body);
        }
        return false;
    }
}
