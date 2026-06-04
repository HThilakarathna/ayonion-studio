<?php

/**
 * Ayonion Studios - Configuration & Form Handler
 */

// Load environment variables and mailer
require_once __DIR__ . '/includes/env_loader.php';
require_once __DIR__ . '/includes/mailer.php';
require_once __DIR__ . '/includes/spam_guard.php';

// Turn off error reporting for a "clean" UI once fixed
error_reporting(0);

// Contact Form Logic
$message_sent = false;
$error = '';
$sent_content = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (spamGuardIsBlocked('contact')) {
        $message_sent = true;
    } else {
    $name = isset($_POST['name']) ? strip_tags(trim($_POST['name'])) : "Guest";
    $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : "No Email";
    $phone = isset($_POST['phone']) ? strip_tags(trim($_POST['phone'])) : "Not Provided";
    $service = isset($_POST['service']) ? strip_tags(trim($_POST['service'])) : "Not specified";
    $message = isset($_POST['message']) ? strip_tags(trim($_POST['message'])) : "";

    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please fill in all required fields correctly.";
    } else {
        // Get recipient from env or use default
        $recipient = getenv('INQUIRY_RECIPIENT') ?: (getenv('RECEIVER_EMAIL') ?: "info@ayonionstudios.com");
        $subject = "New Inquiry from $name - Ayonion Studios";

        // Build professional HTML email content
        $email_content = "<html><body style='font-family: Arial, sans-serif; line-height: 1.6; color: #333;'>";
        $email_content .= "<div style='max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px;'>";
        $email_content .= "<h2 style='color: #1a1a1a; border-bottom: 3px solid #F7C935; padding-bottom: 10px;'>New Website Inquiry</h2>";
        
        $email_content .= "<div style='background: #f9f9f9; padding: 15px; border-radius: 5px; margin: 15px 0;'>";
        $email_content .= "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>";
        $email_content .= "<p><strong>Email:</strong> <a href='mailto:" . htmlspecialchars($email) . "'>" . htmlspecialchars($email) . "</a></p>";
        $email_content .= "<p><strong>Phone:</strong> " . htmlspecialchars($phone) . "</p>";
        $email_content .= "<p><strong>Service Interest:</strong> " . htmlspecialchars($service) . "</p>";
        $email_content .= "</div>";
        
        $email_content .= "<h3 style='color: #1a1a1a;'>Message:</h3>";
        $email_content .= "<p style='background: #f0f0f0; padding: 15px; border-left: 4px solid #F7C935; border-radius: 3px;'>" . nl2br(htmlspecialchars($message)) . "</p>";
        
        $email_content .= "<hr style='border: none; border-top: 1px solid #ddd; margin: 20px 0;'>";
        $email_content .= "<p style='font-size: 12px; color: #666;'><em>Received: " . date('Y-m-d H:i:s') . "</em></p>";
        $email_content .= "</div></body></html>";

        // Plain text version for email clients that don't support HTML
        $plain_text = "New Website Inquiry\n\n";
        $plain_text .= "Name: $name\n";
        $plain_text .= "Email: $email\n";
        $plain_text .= "Phone: $phone\n";
        $plain_text .= "Service Interest: $service\n\n";
        $plain_text .= "Message:\n$message\n\n";
        $plain_text .= "---\n";
        $plain_text .= "Received: " . date('Y-m-d H:i:s');

        // Store for debug display
        $sent_content = htmlspecialchars($plain_text);

        // Send email using mailer function
        if (sendAyonionEmail($recipient, $subject, $email_content, $plain_text)) {
            $message_sent = true;
            
            // Log successful inquiry (optional: send confirmation to customer)
            // sendAyonionEmail($email, "We received your inquiry - Ayonion Studios", "Thank you for reaching out! We'll get back to you soon.");
        } else {
            $error = "Oops! Something went wrong and we couldn't send your message. Please try again later.";
        }
    }
    }
}

// Data Arrays
$services_data = [
    ['id' => 'dm', 'title' => 'Digital Marketing', 'desc' => 'Driving Performance & Creativity in Sri Lanka', 'icon' => 'megaphone'],
    ['id' => 'cc', 'title' => 'Content Creation (Video/Graphics)', 'desc' => 'Original, Engaging Content with high Click Through Rates, Visual Storytelling that Captivates Audiences.', 'icon' => 'clapperboard'],
    ['id' => 'rf', 'title' => 'Recording Facilities', 'desc' => 'Recorded with premium, optimized quality', 'icon' => 'mic'],
    ['id' => 'ds', 'title' => 'Data Driven Strategy', 'desc' => 'Data-Driven Strategies for Measurable ROI, ROAS', 'icon' => 'bar-chart-2'],
    ['id' => 'sm', 'title' => 'Social Media Management', 'desc' => 'Optimized, Responsible & Well Organized Management', 'icon' => 'share-2'],
];

$portfolio_imgs = [
    'image/A1.jpg',
    'image/A2.jpg',
    'image/A3.jpg',
    'image/A4.jpg',
    'image/A5.jpg',
    'image/A6.jpg'
];

$ads = [
    ['v' => 'https://assets.mixkit.co/videos/preview/mixkit-girl-in-neon-lighting-dancing-to-music-40051-large.mp4', 's' => '1.2M Views', 'm' => '25% CTR'],
    ['v' => 'https://assets.mixkit.co/videos/preview/mixkit-young-man-dancing-in-a-park-40050-large.mp4', 's' => '850K Views', 'm' => '18% ROI'],
    ['v' => 'https://assets.mixkit.co/videos/preview/mixkit-woman-dancing-in-front-of-a-wall-40052-large.mp4', 's' => '2.4M Views', 'm' => '30% Conv.'],
];

$work = [
    [
        'cat' => 'Social Media Marketing',
        'title' => 'Social Growth From 0 to 50K Followers',
        'desc' => 'We crafted a full-funnel social media strategy spanning Instagram and Facebook.',
        'img' => '/work/Social.png',
        'stats' => [['+340%', 'Growth'], ['5x', 'Traffic'], ['3 Mo', 'Duration']]
    ],
    [
        'cat' => 'Brand Identity',
        'title' => 'A Complete Brand Overhaul for SaaS',
        'desc' => 'From logo design to a comprehensive brand guidelines document.',
        'img' => '/work/Brand.png',
        'stats' => [['60+', 'Assets'], ['12', 'Touchpoints'], ['4 Wk', 'Turnaround']]
    ]
];

$testimonials = [
    ['Mr Dasun Bucks', 'Director - Herbal Crown Nature', 'I want to take a moment to appreciate the great work you all have been doing. Your dedication, creativity, and consistent effort have been clearly reflected in our progress. Thank you for working together so effectively and for always giving your best. Let’s continue this strong momentum forward. Keep up the excellent work!'],
    ['Mr Chathushka Soosage', 'Client', 'Ayonion Studios is the company that handled a significant amount of the marketing work for my tuition business. They successfully developed all of my social media platforms to a very high standard. Every request I made was delivered better than I expected. Crucially, some of the projects they carried out had a direct positive impact, leading to a significant increase in student attendance in our classes. Ayonion is a great team that I highly recommend!!!'],
    ['Mr Priyadarshana Bandara', 'Managing Director - YaaluMalu', 'Ayonion studios has done an outstanding job in managing my social media page. Their creativity and dedication have significantly increased engagement and visibility for my business. I highly recommend.']
];

$posts = [
    ['රටම කතා කරන අළුත් වටවල Ad Campaign එක ගැන ඔයගේ අදහස මොකක්ද? Why is it getting Boo-ed?', 'May 15, 2026', 'image/blog/blog1.jpg', "Sensitive topic එකක් campaign එකකට use කරන එක හොදයිද නරකයිද?\n\nMy Opinion is:\nThe LGBTQ+ community deserves respect, not promotion. This is why understanding your audience is Marketing 101. වටවල's campaign serves as a stark lesson: leveraging a sensitive social topic as a marketing lever, without genuine brand integration or deep audience understanding, is a high-risk gamble. The backlash wasn't necessarily about the ideology itself, but about the perception of a brand 'riding a trend' for attention. When the motive feels commercial rather than authentic, the audience feels used, not understood. A true brand purpose can't be bolted on for a campaign; it has to be built in from the start. -Ghost-", 'https://www.linkedin.com/posts/ayonion-studios_ghost-marketingspirit-digitalmarketing-activity-7384300835985563648-kTNW?utm_source=share&utm_medium=member_desktop&rcm=ACoAAD49eYwBe2D2a2pFv5hnuBhelmKOkaVJptw'],
    ['Creative fatigue Do\'s and Don\'ts', 'May 18, 2026', 'image/blog2.jpg', "Do\n✅ Leverage different formats\n✅ Diversify visuals\n✅ Modify text\n\nDon't\n❌ Only use the same format\n❌ Rely on a single photoshoot\n❌ Keep post text consistent"],
    ['TikTok Updates in Sri Lanka 🇱🇰', 'May 18, 2026', 'image/blog3.jpg', "1. Content Control and Removals\nMassive Video Removal: TikTok is actively enforcing its rules in Sri Lanka. In the first quarter of 2025 (January to March), TikTok removed over 4.5 million videos from Sri Lankan accounts for violating community guidelines.\n\nSpeedy Action: Nearly all of the removed videos (99.9%) were taken down proactively (by TikTok's systems, not just user complaints), and most were removed within 24 hours of being posted (92.9%).\n\n2. No TikTok Shop Yet\nE-Commerce is Global, but Not Local: While TikTok is aggressively expanding its direct shopping platform, TikTok Shop, across Southeast Asia (like Indonesia, Malaysia, Thailand, and the Philippines), Sri Lanka is currently not one of the official launch markets for this feature.\n\nImpact on Local Commerce: Sri Lankan businesses and creators cannot yet use the official in-app shopping features like Live Shopping or Product Showcases that are available in other major markets.\n\n3. The Global Ban Worries\nUS Ban Doesn't Directly Affect Sri Lanka (Yet): News about the US Supreme Court upholding a potential ban or forced sale of TikTok in the US raised questions for Sri Lankan users about the future of the app globally.\n\nThe App is Still Available: Despite these global concerns, there is no current ban or restriction on TikTok use in Sri Lanka.\n\nData-Only Packages: Some local mobile providers offer special internet packages specifically for TikTok access, showing its continued popularity and demand in the country.", 'https://www.linkedin.com/posts/ayonion-studios_ghost-marketingspirit-digitalmarketing-activity-7381954259300524032-lbmg?utm_source=share&utm_medium=member_desktop&rcm=ACoAAD49eYwBe2D2a2pFv5hnuBhelmKOkaVJptw']
];

$phases = [
    ['01', 'Research', 'Rs. 50,000', '3 Weeks', ['Market Analysis', 'Brand Strategy']],
    ['02', 'Testing', 'Rs. 50,000 + Ad Budget', '5 Weeks', ['20 Credits', 'Performance Research']],
    ['03', 'Retainer', 'From Rs. 85,000', 'Monthly', ['25 Monthly Credits', 'Growth Plan']]
];

$metrics = [['Impressions', '150M+'], ['Avg. CPM', '$2.40'], ['Avg. CTR', '4.8%'], ['Avg. ROI', '300%']];

$capabilities = ['Data-Driven', 'Multi-Platform', 'Community', 'Visual Systems', 'Cinematic', 'Growth Hacking'];
