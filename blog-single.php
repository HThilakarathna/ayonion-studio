<?php
/**
 * Ayonion Studios - Single Blog Post View
 */

// Fallback dynamic data structure mimicking a database fetch
$posts = [
    'wattawala-campaign' => [
        'title' => 'රටම කතා කරන අළුත් වටවල Ad Campaign එක ගැන ඔයගේ අදහස මොකක්ද? Why is it getting Boo-ed?',
        'date' => 'May 15, 2026',
        'image' => 'image/blog/blog1.jpg',
        'author' => 'Ghost',
        'full_content' => "Sensitive topic එකක් campaign එකකට use කරන එක හොදයිද නරකයිද?\n\nMy Opinion is:\nThe LGBTQ+ community deserves respect, not promotion. This is why understanding your audience is Marketing 101. වටවල's campaign serves as a stark lesson: leveraging a sensitive social topic as a marketing lever, without genuine brand integration or deep audience understanding, is a high-risk gamble.\n\nThe backlash wasn't necessarily about the ideology itself, but about the perception of a brand 'riding a trend' for attention. When the motive feels commercial rather than authentic, the audience feels used, not understood.\n\nA true brand purpose can't be bolted on for a campaign; it has to be built in from the start."
    ],
    'creative-fatigue' => [
        'title' => 'Creative fatigue Do\'s and Don\'ts',
        'date' => 'May 18, 2026',
        'image' => 'image/blog2.jpg',
        'author' => 'Ayonion Team',
        'full_content' => "Do:\n✅ Leverage different formats\n✅ Diversify visuals\n✅ Modify text\n\nDon't:\n❌ Only use the same format\n❌ Rely on a single photoshoot\n❌ Keep post text consistent\n\nTo prevent ad fatigue, continuously test new creatives, angles, and formats to keep your audience engaged and maintain high performance across your digital campaigns."
    ],
    'tiktok-sri-lanka' => [
        'title' => 'TikTok Updates in Sri Lanka 🇱🇰',
        'date' => 'May 18, 2026',
        'image' => 'image/blog3.jpg',
        'author' => 'Ayonion Team',
        'full_content' => "1. Content Control and Removals\nMassive Video Removal: TikTok is actively enforcing its rules in Sri Lanka. In the first quarter of 2025 (January to March), TikTok removed over 4.5 million videos from Sri Lankan accounts for violating community guidelines.\n\nSpeedy Action: Nearly all of the removed videos (99.9%) were taken down proactively (by TikTok's systems, not just user complaints), and most were removed within 24 hours of being posted (92.9%).\n\n2. No TikTok Shop Yet\nE-Commerce is Global, but Not Local: While TikTok is aggressively expanding its direct shopping platform, TikTok Shop, across Southeast Asia (like Indonesia, Malaysia, Thailand, and the Philippines), Sri Lanka is currently not one of the official launch markets for this feature.\n\nImpact on Local Commerce: Sri Lankan businesses and creators cannot yet use the official in-app shopping features like Live Shopping or Product Showcases that are available in other major markets.\n\n3. The Global Ban Worries\nUS Ban Doesn't Directly Affect Sri Lanka (Yet): News about the US Supreme Court upholding a potential ban or forced sale of TikTok in the US raised questions for Sri Lankan users about the future of the app globally.\n\nThe App is Still Available: Despite these global concerns, there is no current ban or restriction on TikTok use in Sri Lanka.\n\nData-Only Packages: Some local mobile providers offer special internet packages specifically for TikTok access, showing its continued popularity and demand in the country."
    ]
];

// Get the requested ID from URL query parameters
$id = isset($_GET['id']) ? $_GET['id'] : null;
$post = ($id !== null && isset($posts[$id])) ? $posts[$id] : null;

// Include the header and navbar
include 'includes/head.php';
include 'includes/navbar.php';
?>

<main class="pt-28 md:pt-36 pb-24 bg-white min-h-screen relative">
    <div class="container-custom relative z-10">

        <!-- Floating Top Back Button -->
        <div class="mb-10 lg:sticky lg:top-28 z-20">
            <a href="blog.php"
                class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-slate-50 border border-slate-200 text-xs font-black uppercase tracking-widest text-slate-500 hover:text-brand-darkest hover:bg-slate-100 hover:-translate-x-1 transition-all shadow-sm">
                <i data-lucide="arrow-left" class="w-4 h-4"></i> Back to Blog
            </a>
        </div>

        <?php if ($post): ?>
            <!-- Massive Hero Image -->
            <div class="w-full mb-12">
                <img src="<?php echo htmlspecialchars($post['image']); ?>"
                    alt="<?php echo htmlspecialchars($post['title']); ?>"
                    class="w-full h-auto object-contain max-w-3xl mx-auto rounded-[2rem] shadow-2xl">
            </div>

            <!-- Centered Typography Block -->
            <article class="max-w-3xl mx-auto px-4 py-12">

                <!-- Article Meta -->
                <div class="flex items-center gap-4 mb-8">
                    <span
                        class="text-brand-secondary text-[10px] md:text-xs font-black uppercase tracking-widest bg-brand-secondary/10 px-4 py-1.5 rounded-full border border-brand-secondary/20">
                        <?php echo htmlspecialchars($post['date']); ?>
                    </span>
                    <span class="text-slate-400 text-[10px] md:text-xs font-bold uppercase tracking-widest">
                        By <span class="text-slate-700"><?php echo htmlspecialchars($post['author']); ?></span>
                    </span>
                </div>

                <!-- Article Title -->
                <h1
                    class="text-4xl md:text-5xl lg:text-6xl font-black text-brand-darkest mb-12 tracking-tight font-display leading-[1.1]">
                    <?php echo htmlspecialchars($post['title']); ?>
                </h1>

                <!-- Rich Text Block -->
                <div class="space-y-8 text-base md:text-lg text-slate-600 font-medium leading-relaxed">
                    <?php
                    // Break the content by double newlines into clean paragraph elements
                    $paragraphs = explode("\n\n", $post['full_content']);
                    foreach ($paragraphs as $paragraph):
                        if (trim($paragraph)) {
                            echo '<p>' . nl2br(htmlspecialchars(trim($paragraph))) . '</p>';
                        }
                    endforeach;
                    ?>
                </div>

            </article>
        <?php else: ?>
            <!-- Premium 404 / Missing State -->
            <div class="text-center py-32 max-w-xl mx-auto">
                <div
                    class="w-24 h-24 bg-rose-50 border border-rose-100 text-rose-500 rounded-[2rem] flex items-center justify-center mx-auto mb-8 shadow-xl rotate-3">
                    <i data-lucide="file-question" class="w-12 h-12"></i>
                </div>
                <h1 class="text-4xl font-black text-brand-darkest mb-4 font-display">Post Not Found</h1>
                <p class="text-slate-500 text-lg font-medium leading-relaxed mb-10">The article you're looking for doesn't
                    exist or has been removed from our archives.</p>
                <a href="blog.php"
                    class="inline-flex items-center gap-3 px-10 py-5 rounded-2xl bg-brand-highlight text-brand-darkest font-black uppercase tracking-widest text-xs hover:scale-105 transition-all shadow-xl shadow-brand-highlight/20">
                    <i data-lucide="home" class="w-4 h-4"></i> Return to Archive
                </a>
            </div>
        <?php endif; ?>

    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    });
</script>

<?php include 'includes/footer.php'; ?>