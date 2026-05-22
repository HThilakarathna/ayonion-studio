<!-- Testimonials Section -->
<section class="py-24 bg-brand-darkest overflow-hidden relative">
    <!-- Subtle Background Elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-brand-secondary/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="container-custom relative z-10">
        <div class="text-center mb-20" data-aos="fade-down">
            <span
                class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-secondary/10 border border-brand-secondary/20 text-brand-secondary text-[0.65rem] font-black uppercase tracking-[0.4em] mb-6 shadow-sm">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-secondary animate-pulse"></span>
                Testimonials
            </span>
            <h2 class="text-4xl md:text-7xl font-black text-white tracking-tighter mb-4 font-display">Client <span
                    class="text-white/20">Voices.</span></h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <?php
            $testimonials = [
                ['Mr Dasun Bucks', 'Director - Herbal Crown Nature', 'I want to take a moment to appreciate the great work you all have been doing. Your dedication, creativity, and consistent effort have been clearly reflected in our progress. Thank you for working together so effectively and for always giving your best. Let’s continue this strong momentum forward. Keep up the excellent work!'],
                ['Mr Chathushka Soosage', 'Client', 'Ayonion Studios is the company that handled a significant amount of the marketing work for my tuition business. They successfully developed all of my social media platforms to a very high standard. Every request I made was delivered better than I expected. Crucially, some of the projects they carried out had a direct positive impact, leading to a significant increase in student attendance in our classes. Ayonion is a great team that I highly recommend!!!'],
                ['Mr Priyadarshana Bandara', 'Managing Director - YaaluMalu', 'Ayonion studios has done an outstanding job in managing my social media page. Their creativity and dedication have significantly increased engagement and visibility for my business. I highly recommend.']
            ];
            foreach ($testimonials as $t): ?>
                <div class="p-10 rounded-[2.5rem] bg-brand-dark/40 backdrop-blur-3xl border border-brand-accent/50 relative shadow-2xl group hover:border-brand-secondary/50 transition-all duration-500 hover:-translate-y-2"
                    data-aos="fade-up">
                    <div class="flex gap-1 text-brand-secondary mb-8">
                        <?php for ($i = 0; $i < 5; $i++): ?><i data-lucide="star"
                                class="w-4 h-4 fill-current"></i><?php endfor; ?>
                    </div>
                    <p class="text-brand-tertiary font-medium leading-relaxed mb-10 italic text-lg">"<?php echo $t[2]; ?>"
                    </p>
                    <div class="flex items-center gap-5">
                        <div
                            class="h-14 w-14 rounded-2xl bg-brand-secondary/10 border border-brand-secondary/20 flex items-center justify-center font-black text-brand-secondary text-xl group-hover:bg-brand-secondary group-hover:text-brand-darkest transition-all duration-500">
                            <?php echo substr($t[0], 0, 1); ?></div>
                        <div>
                            <div class="font-black text-white text-lg tracking-tight"><?php echo $t[0]; ?></div>
                            <div class="text-[0.65rem] text-brand-tertiary font-black uppercase tracking-widest">
                                <?php echo $t[1]; ?></div>
                        </div>
                    </div>
                    <!-- Quote Icon Decor -->
                    <div class="absolute top-8 right-10 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i data-lucide="quote" class="w-12 h-12 text-white"></i>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>