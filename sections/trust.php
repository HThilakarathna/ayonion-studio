<!-- Trust / Metrics Section -->
<section class="py-24 bg-brand-darkest relative overflow-hidden">
    <!-- Subtle Gradient Background -->
    <div
        class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,_rgba(189,223,232,0.03)_0%,_transparent_50%)] pointer-events-none">
    </div>

    <div class="container-custom relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <h2 class="text-4xl md:text-5xl font-black text-white tracking-tighter mb-8 font-display">
                    Our Performance <br> <span class="text-brand-highlight">Metrics</span>
                </h2>
                <div class="flex flex-col gap-6">
                    <div
                        class="bg-brand-dark p-6 rounded-[2rem] border border-brand-accent/50 flex flex-col md:flex-row items-center text-center md:text-left gap-4 md:gap-6 w-full md:w-fit shadow-2xl">
                        <div class="flex -space-x-3">
                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                <img src="https://i.pravatar.cc/150?u=<?php echo $i; ?>"
                                    class="h-12 w-12 rounded-full border-2 border-brand-accent/50 object-cover">
                            <?php endfor; ?>
                            <div
                                class="h-12 w-12 rounded-full border-2 border-brand-accent/50 bg-brand-secondary flex items-center justify-center text-[0.7rem] font-black text-brand-darkest">
                                +50</div>
                        </div>
                        <div>
                            <p class="text-sm font-black text-white">50+ Businesses trusted us</p>
                            <p class="text-xs text-brand-tertiary font-bold tracking-tight">Growing Community Worldwide
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-6" data-aos="fade-left">
                <?php
                $metrics = [['Impressions', '150M+'], ['Avg CPM', 'Rs.350'], ['Avg. CTR', '4.8%'], ['Avg. ROI', '300%']];
                foreach ($metrics as $m): ?>
                    <div
                        class="bg-brand-dark p-8 rounded-[2rem] shadow-sm border border-brand-accent/30 transition-all hover:border-brand-secondary/50 hover:shadow-2xl group">
                        <p
                            class="text-[0.65rem] font-black uppercase tracking-[0.2em] text-brand-tertiary mb-2 group-hover:text-brand-secondary transition-colors">
                            <?php echo $m[0]; ?></p>
                        <p class="text-3xl font-black text-white"><?php echo $m[1]; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>