<!-- Trust / Client Logos - Compact Grid -->
<section id="partners" class="py-24 bg-white relative overflow-hidden border-y border-slate-100"
    x-data="{ showAll: false, isMobile: window.innerWidth < 640 }"
    @resize.window="isMobile = window.innerWidth < 640">

    <div class="container-custom relative z-10 mb-16 flex flex-col items-center text-center">
        <!-- Elegant Badge -->
        <div data-aos="fade-down"
            class="animate-float inline-flex items-center gap-2.5 px-6 py-2.5 rounded-full bg-slate-50 border border-slate-100 mb-8 shadow-sm">
            <span class="flex h-2 w-2 rounded-full bg-brand-tertiary animate-pulse"></span>
            <span class="text-[10px] md:text-xs font-black uppercase tracking-[0.4em] text-brand-tertiary">Trusted by Leading
                Brands</span>
        </div>

        <h3 data-aos="fade-up"
            class="text-4xl md:text-5xl lg:text-6xl font-black text-brand-darkest tracking-tight max-w-4xl leading-[1.1] font-display">
            Our Collaborative Journey to <br> <span class="text-brand-tertiary">Digital Excellence</span>
        </h3>
    </div>

    <!-- Creative Color Logo Grid -->
    <div class="container-custom relative z-10 max-w-6xl">
        <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-8 xl:grid-cols-10 gap-4 md:gap-5">
            <?php
            $ordered_logos = [
                1 => 16,
                2 => 19,
                3 => 7,
                4 => 9,
                5 => 'newlogo5',
                6 => 'newlogo6',
                7 => 20,
                8 => 15,
                9 => 13,
                10 => 21,
                11 => 11,
                12 => 17,
                13 => 18,
                14 => 36,
                15 => 35,
                16 => 28,
                17 => 'newlogo17',
                18 => 41,
                19 => 44,
                20 => 31,
                21 => 33,
                22 => 14,
                23 => 4,
                24 => 24,
                25 => 3,
                26 => 8,
                27 => 10,
                28 => 1,
                29 => 43,
                30 => 50,
                31 => 'newlogo31',
                32 => 49,
                33 => 29,
                34 => 30,
                35 => 27,
                36 => 26,
                37 => 23,
                38 => 42,
                39 => 32,
                40 => 'newlogo40',
                41 => 6,
                42 => 5,
                43 => 25,
                44 => 2,
                45 => 12,
                47 => 'newlogo47',
                48 => 34,
                49 => 'newlogo49',
                50 => 'logo50new'
            ];
            ksort($ordered_logos);

            $index = 1;
            foreach ($ordered_logos as $pos => $logo_id):
                $delay = (($index - 1) % 10) * 50;
                ?>
                <div data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>"
                    x-show="showAll || (isMobile ? <?php echo $index; ?> <= 12 : <?php echo $index; ?> <= 30)" x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 scale-90 translate-y-4"
                    x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                    class="rounded-2xl p-4 md:p-3.5 flex items-center justify-center border border-slate-100 aspect-[1.6/1] sm:aspect-square group shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md bg-white hover:border-brand-secondary/50">
                    <?php
                    // Robust check for multiple extensions using absolute path
                    $exts = ['png', 'jpg', 'jpeg', 'webp', 'svg'];
                    $file_prefix = is_string($logo_id) ? $logo_id : "logo{$logo_id}";
                    $found_logo = "{$file_prefix}.png"; // default fallback
                    foreach ($exts as $ext) {
                        $check_path = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'image' . DIRECTORY_SEPARATOR . "{$file_prefix}.{$ext}";
                        if (file_exists($check_path)) {
                            $found_logo = "{$file_prefix}.{$ext}";
                            break;
                        }
                    }
                    ?>
                    <img src="image/<?php echo $found_logo; ?>" alt="Partner Logo <?php echo htmlspecialchars($logo_id); ?>"
                        class="max-h-16 sm:max-h-16 max-w-[85%] w-auto object-contain transition-all duration-300 transform group-hover:scale-105"
                        onerror="this.src='https://via.placeholder.com/150/ffffff/052c47?text=Logo+<?php echo htmlspecialchars($logo_id); ?>'">
                </div>
                <?php
                $index++;
            endforeach;
            ?>
        </div>

        <!-- See More Button -->
        <div class="mt-12 text-center" x-show="!showAll">
            <button @click="showAll = true"
                class="inline-flex items-center gap-3 px-8 py-3.5 rounded-xl bg-white border border-slate-200 text-slate-600 font-bold uppercase tracking-widest text-xs hover:bg-slate-50 hover:text-brand-darkest hover:border-slate-300 transition-all duration-300 shadow-sm group">
                <span>View More Partners</span>
                <i data-lucide="chevron-down" class="w-4 h-4 group-hover:translate-y-1 transition-transform"></i>
            </button>
        </div>
    </div>

    <!-- Decorative background elements -->
    <div class="absolute top-1/4 -left-20 w-64 h-64 bg-brand-secondary/5 rounded-full blur-3xl pointer-events-none">
    </div>
    <div class="absolute bottom-1/4 -right-20 w-80 h-80 bg-brand-highlight/5 rounded-full blur-3xl pointer-events-none">
    </div>
</section>