<div id="work" class="scroll-mt-32"></div>

<!-- Video Case Studies / Delivered Ads (Premium Full-Height Slider Component) -->
<section id="portfolio" class="py-24 md:py-32 bg-white overflow-hidden relative">

    <div class="pl-6 lg:pl-16 pr-0 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

            <!-- Left Content Column -->
            <div class="lg:col-span-4 pr-6 lg:pr-0" data-aos="fade-right">
                <div
                    class="bg-[#F8FAFC] rounded-[3rem] p-10 md:p-14 border border-slate-100/80 shadow-sm relative overflow-hidden">
                    <!-- Subtle brand background accent -->
                    <div
                        class="absolute -top-24 -left-24 w-48 h-48 rounded-full bg-[#BDDFE8]/10 blur-3xl pointer-events-none">
                    </div>

                    <div class="relative z-10">
                        <!-- Headline -->
                        <h2 class="font-black text-5xl md:text-6xl text-[#030B0D] tracking-tight leading-[0.95] mb-6">
                            Ads That <br>Delivered.
                        </h2>

                        <!-- Subtitle Badge & Divider -->
                        <div class="mb-6">
                            <span
                                class="text-[#1A364A] text-[10px] md:text-xs font-black tracking-widest uppercase block mb-3 leading-snug">
                                Performance-Driven Campaigns: Real Results for Sri Lankan Businesses.
                            </span>
                            <div class="h-1 w-16 bg-[#BDDFE8] rounded-full"></div>
                        </div>

                        <!-- Description -->
                        <p class="text-[#618698] text-base md:text-lg font-medium leading-relaxed mb-8">
                            Our digital campaigns are designed to stop the scroll and drive tangible results. We don't
                            just create ads; we build powerful engines for growth, focusing on key metrics like CTR,
                            ROI, CPR and conversion rates to ensure your investment yields maximum returns. Slide left
                            and see how we've helped brands achieve significant growth across various industries.
                        </p>

                        <!-- Interactive Slider Controls -->
                        <div class="flex items-center gap-4">
                            <button id="slide-prev" aria-label="Previous Slide"
                                class="w-12 h-12 rounded-full border border-slate-200 bg-white hover:bg-slate-50 flex items-center justify-center transition-all shadow-sm hover:shadow-md cursor-pointer active:scale-95">
                                <i data-lucide="arrow-left" class="w-5 h-5 text-[#1A364A]"></i>
                            </button>
                            <button id="slide-next" aria-label="Next Slide"
                                class="w-12 h-12 rounded-full border border-slate-200 bg-white hover:bg-slate-50 flex items-center justify-center transition-all shadow-sm hover:shadow-md cursor-pointer active:scale-95">
                                <i data-lucide="arrow-right" class="w-5 h-5 text-[#1A364A]"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Interactive Video Cards Column -->
            <div class="lg:col-span-8 overflow-hidden relative" data-aos="fade-left">
                <!-- Fade mask on the right edge for a premium slider feel -->
                <div
                    class="hidden lg:block absolute top-0 right-0 bottom-0 w-32 bg-gradient-to-l from-white to-transparent z-30 pointer-events-none">
                </div>

                <div id="delivered-ads-slider"
                    class="flex flex-row gap-6 overflow-x-auto snap-x no-scrollbar py-6 scroll-smooth pr-6 lg:pr-24">

                    <?php
                    $ads_data = [
                        [
                            'title' => 'Kipperkids',
                            'video' => 'assets/vedios/1.mp4',
                            'stat1' => '1.6M Views',
                            'stat2' => '7K Link Clicks'
                        ],
                        [
                            'title' => 'Study In China',
                            'video' => 'assets/vedios/2.mp4',
                            'stat1' => '710K Views',
                            'stat2' => '4.8% CTR'
                        ],
                        [
                            'title' => 'Suliko Super',
                            'video' => 'assets/vedios/3.mp4',
                            'stat1' => '432K Views',
                            'stat2' => '5.7% CTR'
                        ],
                        [
                            'title' => 'Solomon Products',
                            'video' => 'assets/vedios/4.mp4',
                            'stat1' => '2.1M Views',
                            'stat2' => '9.2% CTR'
                        ],
                        [
                            'title' => 'TouchMe',
                            'video' => 'assets/vedios/5.mp4',
                            'stat1' => '35K Views',
                            'stat2' => '0.14 USD CPM'
                        ],
                        [
                            'title' => 'KipperKids',
                            'video' => 'assets/vedios/6.mp4',
                            'stat1' => '1.1M Impressions',
                            'stat2' => '0.13 USD CPR'
                        ],
                        [
                            'title' => 'Future International',
                            'video' => 'assets/vedios/7.mp4',
                            'stat1' => '206K Views',
                            'stat2' => '0.21 USD CPR'
                        ],
                        [
                            'title' => 'Mctern Cosmetics',
                            'video' => 'assets/vedios/8.mp4',
                            'stat1' => '0.22 USD Cost Per Lead',
                            'stat2' => '10.57% CTR'
                        ]
                    ];

                    foreach ($ads_data as $ad):
                    ?>
                    <div
                        class="w-[280px] sm:w-[320px] h-[500px] sm:h-[560px] shrink-0 rounded-[3rem] overflow-hidden relative group bg-black snap-start shadow-[0_20px_50px_rgba(0,0,0,0.12)] border border-slate-100/50">
                        <!-- GPU Hardware-Accelerated Video Wrapper -->
                        <div class="w-full h-full overflow-hidden absolute inset-0"
                            style="clip-path: inset(0 round 3rem); -webkit-clip-path: inset(0 round 3rem);">
                            <video
                                class="w-full h-full object-cover opacity-85 group-hover:scale-105 transition-transform duration-[1.2s] ease-out lazy-video"
                                loop muted playsinline preload="metadata"
                                data-src="<?php echo $ad['video']; ?>"></video>
                        </div>

                        <!-- Central Play Button (Glassmorphism Overlay) -->
                        <div class="absolute inset-0 flex items-center justify-center pointer-events-none z-10">
                            <div
                                class="w-16 h-16 rounded-full bg-white/20 backdrop-blur-md border border-white/30 flex items-center justify-center shadow-lg group-hover:scale-110 group-hover:bg-white/35 transition-all duration-500">
                                <i data-lucide="play" class="w-6 h-6 text-white fill-white ml-0.5"></i>
                            </div>
                        </div>

                        <!-- Bottom Metrics Banner -->
                        <div
                            class="absolute bottom-6 left-6 right-6 z-20 bg-black/60 backdrop-blur-md border border-white/10 rounded-[2rem] p-5 flex items-center justify-between shadow-lg">
                            <div>
                                <h4 class="text-white font-black text-sm tracking-tight mb-1"><?php echo $ad['title']; ?></h4>
                                <div class="flex items-center gap-1.5">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                                    <span class="text-white/60 text-[10px] font-black tracking-widest uppercase"><?php echo $ad['stat1']; ?></span>
                                </div>
                            </div>
                            <div
                                class="flex items-center gap-1 px-3.5 py-1.5 rounded-full bg-white border border-white/20 backdrop-blur-sm shadow-sm">
                                <span class="text-[#2E6083] font-black text-[10px] tracking-wider uppercase">↗ <?php echo $ad['stat2']; ?></span>
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
    /* Premium utilities for hiding scrollbars and securing custom snap rules */
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .no-scrollbar {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slider = document.getElementById('delivered-ads-slider');
        const prevBtn = document.getElementById('slide-prev');
        const nextBtn = document.getElementById('slide-next');

        if (slider && prevBtn && nextBtn) {
            prevBtn.addEventListener('click', () => {
                slider.scrollBy({ left: -340, behavior: 'smooth' });
            });
            nextBtn.addEventListener('click', () => {
                slider.scrollBy({ left: 340, behavior: 'smooth' });
            });
        }

        // Lazy load videos using IntersectionObserver
        const lazyVideos = document.querySelectorAll("video.lazy-video");
        if ("IntersectionObserver" in window) {
            const lazyVideoObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach((video) => {
                    if (video.isIntersecting) {
                        const target = video.target;
                        if (target.dataset.src) {
                            target.src = target.dataset.src;
                        }
                        target.load();
                        // Only play if it was intended to autoplay (like in portfolio)
                        target.play().catch(e => console.log('Autoplay prevented:', e));
                        lazyVideoObserver.unobserve(target);
                    }
                });
            }, { rootMargin: "0px 0px 1500px 0px" });

            lazyVideos.forEach((lazyVideo) => {
                lazyVideoObserver.observe(lazyVideo);
            });
        } else {
            // Fallback for older browsers
            lazyVideos.forEach((video) => {
                if (video.dataset.src) {
                    video.src = video.dataset.src;
                }
                video.load();
                video.play().catch(e => console.log('Autoplay prevented:', e));
            });
        }
    });
</script>
