<?php
/**
 * Ayonion Studios - Pricing Page
 */

// Turn off error reporting for a "clean" UI once fixed
// Temporarily enable error reporting to diagnose the blank screen
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Plan Checkout Form Logic
$message_sent = false;
$error = '';
$sent_content = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Honeypot check for bot spam
    if (!empty($_POST['website_url'])) {
        $message_sent = true;
        // Log the blocked spam attempt so we know it's working
        file_put_contents(__DIR__ . '/spam_log.txt', date("Y-m-d H:i:s") . " - Blocked bot submission on planner form from IP: " . $_SERVER['REMOTE_ADDR'] . "\n", FILE_APPEND);
    } else {
        $recipient = "info@ayonionstudios.com";

        if (isset($_POST["type"]) && $_POST["type"] == "plan_checkout") {
            $plan_credits = isset($_POST["plan_credits"]) ? $_POST["plan_credits"] : "";
            $total_used = isset($_POST["total_used"]) ? $_POST["total_used"] : "";
            $services = isset($_POST["selected_services_json"]) ? json_decode($_POST["selected_services_json"], true) : [];

            $subject = "📦 New Deliverable Plan Created - Ayonion Studios";

            $email_content = "📦 New Deliverable Plan Created\n";
            $email_content .= "=================================\n\n";
            $email_content .= "📊 Plan Type: " . ucfirst($plan_credits) . " Credits\n";
            $email_content .= "✅ Total Used: $total_used Credits\n\n";
            $email_content .= "🛠️ Selected Services:\n";

            if (!empty($services)) {
                foreach ($services as $s) {
                    $email_content .= "- " . $s['count'] . "x " . $s['name'] . " (" . $s['credits'] . " CR)\n";
                }
            }

            $email_content .= "\n=================================\n";
            $email_content .= "📅 Sent on: " . date("Y-m-d H:i:s");

            $sent_content = $email_content;

            // Simple mail with localhost success override
            if (@mail($recipient, $subject, $email_content) || $_SERVER['REMOTE_ADDR'] == '127.0.0.1' || $_SERVER['REMOTE_ADDR'] == '::1') {
                $message_sent = true;
            } else {
                $error = "Mail error. Please try again.";
            }
        }
    }
}

// Include the header
include 'includes/head.php';

// Include the navbar
include 'includes/navbar.php';
?>
<main class="pt-28 lg:pt-20 bg-white">
    <?php
    include 'sections/pricing.php';
    include 'sections/deliverable_planner.php';
    ?>
</main>
<?php
// Include the footer
include 'includes/footer.php';
?>