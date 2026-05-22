<!-- Blog Section -->
<section id="blog" class="py-24 bg-white relative overflow-hidden">
    <!-- Subtle Background Glow -->
    <div
        class="absolute inset-0 bg-gradient-to-tr from-brand-secondary/5 via-transparent to-transparent pointer-events-none z-0">
    </div>

    <div class="container-custom relative z-10">
        <div class="text-center mb-10">
            <span class="text-brand-tertiary text-sm font-black uppercase tracking-[0.3em] mb-4 block">Our Blog</span>
            <h2 class="text-4xl md:text-6xl font-black text-brand-darkest tracking-tighter mb-4 font-display">Insights &
                Perspectives</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            <?php
            $posts = [
                'wattawala-campaign' => [
                    'title' => 'රටම කතා කරන අළුත් වටවල Ad Campaign එක ගැන ඔයගේ අදහස මොකක්ද? Why is it getting Boo-ed?',
                    'date' => 'May 15, 2026',
                    'image' => 'image/blog/blog1.jpg',
                    'short_desc' => 'Sensitive topic එකක් campaign එකකට use කරන එක හොදයිද නරකයිද? Understanding your audience is Marketing 101. වටවල\'s campaign serves as a stark lesson.'
                ],
                'creative-fatigue' => [
                    'title' => "Creative fatigue Do's and Don'ts",
                    'date' => 'May 18, 2026',
                    'image' => 'image/blog2.jpg',
                    'short_desc' => 'To prevent ad fatigue, continuously test new creatives, angles, and formats to keep your audience engaged and maintain high performance.'
                ],
                'tiktok-sri-lanka' => [
                    'title' => 'TikTok Updates in Sri Lanka 🇱🇰',
                    'date' => 'May 18, 2026',
                    'image' => 'image/blog3.jpg',
                    'short_desc' => 'Massive Video Removal, No TikTok Shop Yet, and Global Ban Worries. Here is what you need to know about TikTok in Sri Lanka.'
                ]
            ];
            foreach ($posts as $id => $p): ?>
                <a href="blog-single.php?id=<?php echo $id; ?>"
                    class="rounded-[2rem] overflow-hidden bg-white border border-slate-100 shadow-[0_15px_40px_rgba(0,0,0,0.02)] relative group cursor-pointer flex flex-col h-full transform transition-transform duration-500 hover:-translate-y-2">

                    <!-- Image Section -->
                    <div class="overflow-hidden bg-[#030B0D] relative z-10 shrink-0">
                        <img src="<?php echo $p['image']; ?>"
                            class="w-full h-auto max-h-[400px] object-contain transition-transform duration-700 group-hover:scale-105">
                        <!-- Floating Badge -->
                        <div
                            class="absolute top-4 left-4 bg-white/20 backdrop-blur-md text-white border border-white/20 px-3 py-1 text-xs font-bold rounded-full shadow-sm">
                            <?php echo $p['date']; ?>
                        </div>
                    </div>

                    <!-- Default Text Section -->
                    <div
                        class="p-8 md:p-10 flex-1 flex flex-col relative z-10 bg-white group-hover:opacity-0 transition-opacity duration-300">
                        <h3 class="text-xl md:text-2xl font-black text-brand-darkest leading-tight">
                            <?php echo $p['title']; ?>
                        </h3>
                    </div>

                    <!-- Immersive Hover Overlay Panel -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-20 flex flex-col justify-end p-8 md:p-10 pointer-events-none">
                        <div
                            class="translate-y-8 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 delay-100 flex flex-col pointer-events-auto">
                            <h3 class="text-xl md:text-2xl font-black text-white leading-tight mb-4 drop-shadow-lg">
                                <?php echo $p['title']; ?></h3>
                            <?php if (isset($p['short_desc'])): ?>
                                <p class="text-sm text-slate-300 mb-8 line-clamp-3 leading-relaxed drop-shadow-md">
                                    <?php echo htmlspecialchars($p['short_desc']); ?></p>
                            <?php endif; ?>
                            <span
                                class="inline-flex w-fit items-center gap-2 text-xs font-black text-brand-darkest bg-brand-highlight px-6 py-3 rounded-full uppercase tracking-widest shadow-[0_0_20px_rgba(247,201,53,0.4)] hover:bg-white hover:shadow-white/40 transition-all">
                                Read Full Case
                            </span>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>