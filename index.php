<?php
/**
 * Ayonion Studios - Modular PHP Version
 *
 * This file assembles the page from modular components.
 */

// Turn off error reporting for a "clean" UI once fixed
// Temporarily enable error reporting to diagnose the blank screen
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Contact Form Logic
$message_sent = false;
$error = '';
$sent_content = '';

// Load mailer helper (uses PHPMailer when available)
require_once __DIR__ . '/includes/mailer.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient = getenv('INQUIRY_RECIPIENT') ?: (getenv('RECEIVER_EMAIL') ?: "info@ayonionstudios.com");

    $name = isset($_POST["name"]) ? strip_tags(trim($_POST["name"])) : "Guest";
    $email = isset($_POST["email"]) ? filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL) : "No Email";
    $phone = isset($_POST["phone"]) ? strip_tags(trim($_POST["phone"])) : "Not Provided";
    $service = isset($_POST["service"]) ? strip_tags(trim($_POST["service"])) : "Not specified";
    $message = isset($_POST["message"]) ? strip_tags(trim($_POST["message"])) : "";

    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please fill in all required fields correctly.";
    } else {
        $subject = "🚀 New Lead: $name - Ayonion Studios";

        $email_content = "🚀 New Lead from Ayonion Studios\n";
        $email_content .= "=================================\n\n";
        $email_content .= "👤 Name: $name\n";
        $email_content .= "📧 Email: $email\n";
        $email_content .= "📞 Phone: $phone\n";
        $email_content .= "💼 Interested In: $service\n\n";
        $email_content .= "📝 Message:\n$message\n\n";
        $email_content .= "=================================\n";
        $email_content .= "📅 Sent on: " . date("Y-m-d H:i:s");

        $sent_content = $email_content;

        if (sendAyonionEmail($recipient, $subject, $email_content, strip_tags($email_content))) {
            $message_sent = true;
        } else {
            $error = "Oops! We encountered an error while sending. Please try again or contact us directly.";
        }
    }
}

// Include the header
include 'includes/head.php';

// Include the navbar
include 'includes/navbar.php';

// Include all the sections
include 'sections/hero.php';
include 'sections/video.php';
include 'sections/services.php';
include 'sections/portfolio.php';
include 'sections/work.php';
include 'sections/clients.php';
include 'sections/trust.php';
include 'sections/testimonials.php';
include 'sections/pricing.php';
include 'sections/deliverable_planner.php';
include 'sections/contact.php';

// Include the footer
include 'includes/footer.php';
