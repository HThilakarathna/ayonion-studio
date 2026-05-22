<div id="about" class="scroll-mt-32"></div>
<!-- Services Section -->
<section id="services" class="relative py-32 bg-brand-darkest overflow-hidden">
    <!-- Background Decorative Glow -->
    <div
        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[500px] bg-brand-secondary/5 blur-[120px] rounded-full pointer-events-none">
    </div>

    <div class="container-custom relative z-10">
        <!-- Section Header -->
        <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-8">
            <div data-aos="fade-right">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-brand-secondary/10 border border-brand-secondary/20 mb-6">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand-secondary animate-pulse"></span>
                    <span class="text-brand-secondary text-[10px] font-black uppercase tracking-[0.4em]">Service
                        Beyond Expectation</span>
                </div>
                <h2
                    class="text-4xl md:text-6xl lg:text-7xl font-black text-white tracking-tighter leading-[1.1] font-display">
                    Core <span class="text-white/20">Services</span>
                </h2>
            </div>
            <div class="max-w-md text-right md:text-right" data-aos="fade-left">
                <p class="text-brand-tertiary text-sm font-medium leading-relaxed">
                    Sri Lanka's most innovative data-driven digital marketing agency, combining technical precision and creative strategy to build high-performance digital experiences that grow brands and deliver measurable results.
                </p>
            </div>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $services_data = [
                ['id' => 'digital-marketing', 'title' => 'Digital Marketing', 'desc' => 'Performance-focused digital marketing: increase visibility, attract targeted audiences, generate quality leads with data-driven strategies & creative campaigns.', 'icon' => 'megaphone', 'delay' => '100'],
                ['id' => 'content-creation', 'title' => 'Content Creation (Video/Graphics)', 'desc' => 'Engaging video & professional graphic design that boosts brand awareness, CTR, and visual storytelling for social media & digital platforms.', 'icon' => 'clapperboard', 'delay' => '200'],
                ['id' => 'recording-facilities', 'title' => 'Recording Facilities', 'desc' => 'High-quality video, audio & photography with industry-standard equipment – delivering professional-grade content.', 'icon' => 'mic', 'delay' => '300'],
                ['id' => 'data-strategy', 'title' => 'Data-Driven Strategy', 'desc' => 'Strategic, data-driven marketing plans focused on measurable ROI and ROAS for smarter, performance-based decisions.', 'icon' => 'bar-chart-2', 'delay' => '400'],
                ['id' => 'social-media', 'title' => 'Social Media Management', 'desc' => 'Complete social media management: content planning, posting, optimization & engagement to grow brand presence and audience interaction.', 'icon' => 'share-2', 'delay' => '500'],
                ['id' => 'personal-branding', 'title' => 'Personal Branding', 'desc' => 'Build a powerful personal brand with authentic storytelling, strategic content, and data-backed positioning – establishing you as a trusted leader in your field.', 'icon' => 'star', 'delay' => '600'],
            ];

            foreach ($services_data as $s): ?>
                <div id="<?php echo $s['id']; ?>" data-aos="fade-up" data-aos-delay="<?= $s['delay'] ?>"
                    class="group relative bg-brand-dark/20 hover:bg-brand-dark/40 backdrop-blur-3xl border border-brand-accent/50 rounded-[2rem] p-5 md:p-6 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(0,0,0,0.4)] flex flex-col items-center text-center scroll-mt-32">


                    <!-- Center Icon Container -->
                    <div
                        class="relative h-16 w-16 mb-5 mt-2 rounded-2xl bg-brand-darkest/50 border border-brand-accent/30 flex items-center justify-center group-hover:bg-brand-secondary group-hover:border-brand-secondary transition-all duration-500 shadow-inner">
                        <i data-lucide="<?php echo $s['icon']; ?>"
                            class="w-8 h-8 text-brand-secondary group-hover:text-brand-darkest transition-colors duration-500"></i>
                    </div>

                    <!-- Content -->
                    <div class="relative z-10 w-full">
                        <h3
                            class="text-base md:text-lg font-black text-white mb-2 tracking-tight leading-tight group-hover:text-brand-secondary transition-colors">
                            <?php echo $s['title']; ?>
                        </h3>
                        <p class="text-brand-tertiary text-[9px] font-bold uppercase tracking-widest leading-relaxed">
                            <?php echo $s['desc']; ?>
                        </p>
                    </div>

                    <!-- Modern Border Glow Effect (Hover) -->
                    <div
                        class="absolute inset-0 rounded-[2rem] border border-brand-secondary/0 group-hover:border-brand-secondary/30 transition-all duration-500 pointer-events-none">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>