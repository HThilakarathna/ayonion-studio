<div id="work" class="scroll-mt-32"></div>
<!-- Content Portfolio (Modern Masonry) -->
<section id="content-portfolio" class="py-32 bg-brand-darkest overflow-hidden relative">

    <div class="container-custom relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">

            <!-- Left Sidebar: Sticky Info -->
            <div class="lg:col-span-4 lg:sticky lg:top-32" data-aos="fade-right">
                <div class="relative">
                    <!-- Modern Typography -->
                    <div
                        class="inline-block px-4 py-1.5 mb-6 rounded-full bg-brand-secondary/10 border border-brand-secondary/20">
                        <span class="text-brand-secondary text-[10px] font-black uppercase tracking-[0.3em]">Our
                            Archive</span>
                    </div>

                    <h2 class="text-6xl md:text-7xl font-black text-white tracking-tighter leading-none mb-8">
                        Content <br> <span class="text-white/20">Portfolio</span>
                    </h2>

                    <p class="text-brand-tertiary text-lg font-medium leading-relaxed mb-8 max-w-sm">
                        Explore our creative portfolio featuring social media designs, branding, and digital marketing content created for Sri Lankan businesses and brands.
                    </p>

                    <!-- Counter Badge -->
                    <div class="flex items-center gap-4 mb-12">
                        <div class="h-[1px] w-12 bg-brand-accent"></div>
                        <p class="text-brand-tertiary font-bold uppercase tracking-widest text-xs">
                            1000+ Assets Delivered
                        </p>
                    </div>

                    <!-- Modern CTA Button -->
                    <a href="https://www.pinterest.com/ayonions/ayonion-studios-portfolio/" target="_blank"
                        class="group relative inline-flex items-center justify-center px-10 py-5 font-black tracking-widest uppercase text-xs text-brand-darkest bg-brand-highlight rounded-full overflow-hidden transition-all hover:pr-14 shadow-xl shadow-brand-highlight/20">
                        <span class="relative z-10">View More Designs</span>
                        <div class="absolute right-6 opacity-0 group-hover:opacity-100 transition-all">
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Right: Dynamic Masonry Grid -->
            <div class="lg:col-span-8">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-6 items-start">
                    <?php
                    $portfolio_items = [
                        ['url' => 'image/long1.jpeg', 'cls' => '', 'delay' => '0'],
                        ['url' => 'image/long2.jpeg', 'cls' => 'md:mt-12', 'delay' => '100'],
                        ['url' => 'image/long3.jpeg', 'cls' => '', 'delay' => '200'],
                        ['url' => 'image/big1.jpeg', 'cls' => 'md:-mt-12', 'delay' => '300'],
                        ['url' => 'image/big2.jpeg', 'cls' => '', 'delay' => '400'],
                        ['url' => 'image/big3.jpeg', 'cls' => 'md:-mt-12', 'delay' => '500'],
                    ];

                    foreach ($portfolio_items as $item): ?>
                        <div data-aos="fade-up" data-aos-delay="<?= $item['delay'] ?>"
                            class="relative group overflow-hidden rounded-[2rem] bg-brand-darkest <?= $item['cls'] ?> cursor-pointer shadow-sm hover:shadow-2xl transition-all duration-700 border border-brand-accent/50 hover:border-brand-secondary/50">
                            <!-- Image -->
                            <img src="<?= $item['url'] ?>" alt="Ayonion Studios Portfolio"
                                class="w-full h-auto block transition-transform duration-1000 group-hover:scale-110 group-hover:rotate-2 opacity-80 group-hover:opacity-100">

                            <!-- Modern Glass Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-brand-darkest/90 via-brand-darkest/40 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex flex-col justify-end p-8">
                                <div class="translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                    <p class="text-brand-secondary font-black uppercase tracking-widest text-[10px] mb-2">
                                        Campaign
                                        2024</p>
                                    <h4 class="text-white text-xl font-bold tracking-tight">Digital Fusion</h4>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .lg\:sticky {
        position: -webkit-sticky;
        position: sticky;
    }
</style>