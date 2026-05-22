<!-- What We Do (Immersive Video Section) -->
<section class="relative min-h-screen py-24 flex items-center justify-center bg-brand-darkest overflow-hidden">
    <!-- Ambient Background Glows -->
    <div
        class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full bg-[radial-gradient(circle_at_center,_rgba(189,223,232,0.05)_0%,_transparent_70%)] pointer-events-none">
    </div>

    <div class="container-custom relative z-20 w-full">
        <!-- Section Header -->
        <div class="flex flex-col items-center mb-16" data-aos="fade-down">
            <div
                class="inline-flex items-center gap-3 px-5 py-2 rounded-full bg-brand-dark/30 border border-brand-accent/30 backdrop-blur-md mb-8">
                <span class="relative flex h-2 w-2">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-secondary opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-brand-secondary"></span>
                </span>
                <span class="text-brand-tertiary font-black text-[0.65rem] uppercase tracking-[0.4em]">Watch the video
                    before you decide</span>
            </div>

            <h2
                class="text-3xl md:text-5xl lg:text-6xl font-black text-white text-center tracking-tighter leading-[1.1] font-display">
                Visualizing <br>
                <span
                    class="bg-clip-text text-transparent bg-gradient-to-r from-brand-secondary via-brand-tertiary to-white mt-2 inline-block">Why
                    Should You Choose Us?</span>
            </h2>
        </div>

        <!-- The Immersive Video Portal -->
        <div class="relative max-w-7xl mx-auto group" data-aos="zoom-in-up" data-aos-duration="1000">
            <!-- Decorative Outer Frame -->
            <div
                class="absolute -inset-4 bg-gradient-to-tr from-brand-secondary/20 via-white/5 to-brand-deep/20 rounded-[4.5rem] blur-2xl opacity-50 group-hover:opacity-100 transition-opacity duration-1000">
            </div>

            <!-- Video Container -->
            <div
                class="relative aspect-video rounded-[4rem] overflow-hidden border border-brand-accent/50 shadow-2xl bg-brand-darkest">
                <!-- Video Source -->
                <video muted loop playsinline preload="metadata"
                    class="h-full w-full object-cover opacity-80 group-hover:opacity-100 transition-opacity duration-700 lazy-video-hero">
                    <source
                        data-src="https://assets.mixkit.co/videos/preview/mixkit-digital-animation-of-a-world-map-1055-large.mp4"
                        type="video/mp4">
                </video>

                <!-- Cinematic Overlays -->
                <div
                    class="absolute inset-0 bg-gradient-to-t from-brand-darkest via-transparent to-transparent opacity-60">
                </div>

                <!-- Interaction Overlay -->
                <div
                    class="absolute inset-0 flex items-center justify-center bg-brand-darkest/20 group-hover:bg-transparent transition-all duration-500">
                    <!-- Modern Play Controller -->
                    <div class="relative cursor-pointer">
                        <!-- Ripple Rings -->
                        <div class="absolute inset-0 rounded-full bg-white/20 animate-ping"></div>
                        <div class="absolute inset-0 rounded-full bg-brand-secondary/30 animate-ping"
                            style="animation-delay: 0.5s"></div>

                        <!-- Main Button -->
                        <button
                            class="relative h-24 w-24 md:h-32 md:w-32 rounded-full bg-brand-darkest/40 backdrop-blur-2xl border border-white/30 flex items-center justify-center group-hover:scale-110 group-hover:border-brand-secondary transition-all duration-500 shadow-[0_0_50px_rgba(0,0,0,0.5)]">
                            <i data-lucide="play"
                                class="w-8 h-8 md:w-12 md:h-12 text-white fill-white transition-transform group-hover:translate-x-1"></i>
                        </button>
                    </div>
                </div>

                <!-- Live HUD Elements (Upper Left) -->
                <div
                    class="absolute top-8 left-8 flex items-center gap-4 pointer-events-none opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">
                    <div class="px-3 py-1 rounded bg-black/40 border border-white/10 backdrop-blur-md">
                        <span class="text-[10px] text-white/50 font-mono tracking-widest uppercase">REC</span>
                    </div>
                    <div class="h-[1px] w-12 bg-white/20"></div>
                    <span class="text-[10px] text-white/50 font-mono">00:42:12:04</span>
                </div>
            </div>

            <!-- Impact Labels (Floating outside) -->
            <div
                class="absolute -bottom-6 -right-6 md:right-12 bg-brand-highlight px-8 py-6 rounded-3xl shadow-2xl hidden md:block animate-float">
                <p class="text-brand-darkest font-black text-sm uppercase tracking-tighter">Global Engagement</p>
                <div class="flex items-center gap-2 mt-1">
                    <div class="h-2 w-2 rounded-full bg-brand-deep animate-pulse"></div>
                    <span class="text-xs text-brand-deep font-bold tracking-tight">+240% Growth Rate</span>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes float {

        0%,
        100% {
            transform: translateY(0px) rotate(0deg);
        }

        50% {
            transform: translateY(-15px) rotate(2deg);
        }
    }

    .animate-float {
        animation: float 5s ease-in-out infinite;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Lazy load hero video using IntersectionObserver
        const lazyHeroVideos = document.querySelectorAll("video.lazy-video-hero");
        if ("IntersectionObserver" in window) {
            const lazyVideoObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach((video) => {
                    if (video.isIntersecting) {
                        const target = video.target;
                        const source = target.querySelector('source');
                        if (source && source.dataset.src) {
                            source.src = source.dataset.src;
                        }
                        target.load();
                        target.play().catch(e => console.log('Autoplay prevented:', e));
                        lazyVideoObserver.unobserve(target);
                    }
                });
            }, { rootMargin: "0px 0px 1500px 0px" });

            lazyHeroVideos.forEach((lazyVideo) => {
                lazyVideoObserver.observe(lazyVideo);
            });
        } else {
            lazyHeroVideos.forEach((video) => {
                const source = video.querySelector('source');
                if (source && source.dataset.src) {
                    source.src = source.dataset.src;
                }
                video.load();
                video.play().catch(e => console.log('Autoplay prevented:', e));
            });
        }
    });
</script>
