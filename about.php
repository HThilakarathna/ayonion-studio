<?php
/**
 * Ayonion Studios - About Page
 */

// Include the header
include 'includes/head.php';

// Include the navbar
include 'includes/navbar.php';
?>

<main class="pt-28 lg:pt-20 bg-brand-darkest">
    <section id="about" class="section-padding relative overflow-hidden">
        <!-- Background Accents -->
        <div class="absolute inset-0 z-0 opacity-30 pointer-events-none">
            <div
                class="absolute top-0 right-0 w-[50%] h-[50%] bg-brand-secondary blur-[150px] -translate-y-1/2 translate-x-1/2 rounded-full">
            </div>
            <div
                class="absolute bottom-0 left-0 w-[50%] h-[50%] bg-brand-deep blur-[150px] translate-y-1/2 -translate-x-1/2 rounded-full">
            </div>
        </div>

        <div class="container-custom relative z-10">
            <!-- Our Story Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mt-12 md:mt-0">
                <div data-aos="fade-right" data-aos-duration="700">
                    <div
                        class="inline-block px-6 py-2 rounded-full bg-brand-secondary/10 border border-brand-secondary/20 text-brand-secondary text-sm font-black uppercase tracking-widest mb-8">
                        Our Story
                    </div>
                    <h2
                        class="text-5xl md:text-7xl font-black text-white mb-8 tracking-tighter leading-tight font-sans">
                        Born from a Passion for <span class="text-brand-secondary">Creative Excellence</span>
                    </h2>
                    <div class="space-y-6 text-slate-400 leading-relaxed text-lg font-medium">
                        <p>
                            Ayonion Studios bridges the gap between stunning creative work and real brand performance. Founded in 2020, we bring together deep expertise in digital marketing, branding, and content production under one roof.
                        </p>
                        <p>
                            We are data-driven at our core. Every decision is guided by continuous research, testing, and strategic insights, so your brand not only looks premium but also scales efficiently.
                        </p>
                        <p>
                            We've redefined the agency relationship. We don't just deliver services; we become your valued partner. Recognized as the "Digital Marketing Innovation Lead of the Year – 2025", Ayonion Studios is an award-winning force in Sri Lanka's marketing landscape.
                        </p>
                        <p>
                            With AI-powered insights, creative strategy, and full responsibility for your digital platforms, we drive measurable growth. We think like entrepreneurs, personally invested in your success. Because your success is our success.
                        </p>
                        <p>
                            That's our promise: service beyond expectation.
                        </p>
                    </div>
                </div>

                <div class="relative group cursor-pointer" data-aos="zoom-in-up" data-aos-duration="1000">
                    <div class="relative z-10 animate-float transition-transform duration-500 group-hover:scale-[1.03]">
                        <div
                            class="rounded-[3rem] overflow-hidden border-8 border-brand-secondary/20 shadow-[0_20px_50px_rgba(189,223,232,0.15)] bg-white/5 backdrop-blur-sm">
                            <img src="about.png" alt="Ayonion Studios 3D Illustration"
                                class="w-full h-auto object-cover mix-blend-screen" />
                        </div>
                    </div>

                    <!-- Decorative Badges -->
                    <div
                        class="absolute -right-8 -bottom-8 z-20 p-8 rounded-3xl bg-white/10 backdrop-blur-xl border border-white/20 shadow-2xl hidden md:block">
                        <div class="text-4xl font-black text-white">100%</div>
                        <div class="text-xs font-bold text-brand-secondary uppercase tracking-widest">Quality Driven
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Gallery Section -->
            <div class="mt-32 border-t border-white/5 pt-24">
                <div class="text-center mb-16" data-aos="fade-up">
                    <div
                        class="inline-block px-6 py-2 rounded-full bg-brand-secondary/10 border border-brand-secondary/20 text-brand-secondary text-sm font-black uppercase tracking-widest mb-6">
                        The Collective
                    </div>
                    <h3 class="text-4xl md:text-5xl font-black text-white tracking-tighter mb-4">Behind the Scenes
                    </h3>
                    <p class="text-slate-400 text-lg font-medium max-w-2xl mx-auto">A creative powerhouse of
                        strategists, designers, and developers working together to elevate your brand.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Image 1: Team Photo -->
                    <div class="group relative overflow-hidden rounded-[2.5rem] border border-white/5 bg-white/5 min-h-[280px] md:min-h-[360px]"
                        data-aos="fade-up">
                        <div class="absolute inset-0 bg-brand-secondary/10 group-hover:bg-transparent transition-colors duration-500 z-10 pointer-events-none"></div>
                        <img src="image/about1.jpg" alt="Ayonion Core Team"
                            class="w-full h-full object-cover object-center grayscale-[40%] group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105" />
                        <div class="absolute bottom-5 left-5 z-20">
                            <div class="px-4 py-2 bg-black/50 backdrop-blur-md rounded-xl border border-white/10">
                                <span class="text-white font-bold text-sm">Our Team</span>
                            </div>
                        </div>
                    </div>

                    <!-- Image 2: Studio Recording -->
                    <div class="group relative overflow-hidden rounded-[2.5rem] border border-white/5 bg-white/5 min-h-[280px] md:min-h-[360px]"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="absolute inset-0 bg-brand-secondary/10 group-hover:bg-transparent transition-colors duration-500 z-10 pointer-events-none"></div>
                        <img src="image/about2.jpg" alt="Studio Recording Session"
                            class="w-full h-full object-cover object-center grayscale-[40%] group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105" />
                        <div class="absolute bottom-5 left-5 z-20">
                            <div class="px-4 py-2 bg-black/50 backdrop-blur-md rounded-xl border border-white/10">
                                <span class="text-white font-bold text-sm">Studio Sessions</span>
                            </div>
                        </div>
                    </div>

                    <!-- Image 3: Green Screen -->
                    <div class="group relative overflow-hidden rounded-[2.5rem] border border-white/5 bg-white/5 min-h-[280px] md:min-h-[360px]"
                        data-aos="fade-up" data-aos-delay="200">
                        <div class="absolute inset-0 bg-brand-secondary/10 group-hover:bg-transparent transition-colors duration-500 z-10 pointer-events-none"></div>
                        <img src="image/about3.jpg" alt="Green Screen Production"
                            class="w-full h-full object-cover object-center grayscale-[40%] group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105" />
                        <div class="absolute bottom-5 left-5 z-20">
                            <div class="px-4 py-2 bg-black/50 backdrop-blur-md rounded-xl border border-white/10">
                                <span class="text-white font-bold text-sm">Content Production</span>
                            </div>
                        </div>
                    </div>

                    <!-- Image 4: Event / Exhibition -->
                    <div class="group relative overflow-hidden rounded-[2.5rem] border border-white/5 bg-white/5 min-h-[280px] md:min-h-[360px]"
                        data-aos="fade-up" data-aos-delay="300">
                        <div class="absolute inset-0 bg-brand-secondary/10 group-hover:bg-transparent transition-colors duration-500 z-10 pointer-events-none"></div>
                        <img src="image/about4.jpg" alt="Ayonion Studios Event"
                            class="w-full h-full object-cover object-center grayscale-[40%] group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105" />
                        <div class="absolute bottom-5 left-5 z-20">
                            <div class="px-4 py-2 bg-black/50 backdrop-blur-md rounded-xl border border-white/10">
                                <span class="text-white font-bold text-sm">Events & Exhibitions</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vision and Mission -->
            <div class="mt-32">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    <?php
                    $visionMission = [
                        [
                            'icon' => 'eye',
                            'title' => 'Our Vision',
                            'desc' => 'To be the most trusted creative-growth partner in Sri Lanka and beyond, where data intelligence and artistic excellence unite to redefine what brands can achieve.'
                        ],
                        [
                            'icon' => 'target',
                            'title' => 'Our Mission',
                            'desc' => 'To empower brands with data-driven creativity, AI-powered insights, and full-funnel digital strategies that deliver measurable growth. We take ownership of your success, transforming ideas into high-performance outcomes, because your growth is our purpose.'
                        ]
                    ];

                    foreach ($visionMission as $i => $item): ?>
                        <div data-aos="fade-up" data-aos-delay="<?php echo $i * 200; ?>"
                            class="bg-white/5 backdrop-blur-md border border-white/10 rounded-[2.5rem] p-10 hover:bg-white/10 transition-colors">
                            <div class="h-14 w-14 rounded-2xl bg-brand-secondary/20 flex items-center justify-center mb-6">
                                <i data-lucide="<?php echo $item['icon']; ?>" class="text-brand-secondary w-7 h-7"></i>
                            </div>
                            <h3 class="text-3xl font-black text-white mb-4 tracking-tight"><?php echo $item['title']; ?>
                            </h3>
                            <p class="text-slate-400 font-medium leading-relaxed"><?php echo $item['desc']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Core Values -->
            <div class="mt-32">
                <div class="text-center mb-20" data-aos="fade-up">
                    <h3 class="text-4xl md:text-6xl font-black text-white tracking-tighter mb-4">Our Core Values</h3>
                    <p class="text-slate-400 text-lg font-medium max-w-2xl mx-auto">The principles that guide every
                        creative decision we make.</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php
                    $coreValues = [
                        ['icon' => 'lightbulb', 'title' => 'Creativity & Innovation', 'desc' => 'We challenge conventions and bring fresh ideas to every project, making your brand stand out in a crowded market.'],
                        ['icon' => 'heart', 'title' => 'Client Satisfaction', 'desc' => 'Your success is the only measure of ours. We stay committed until results exceed your expectations.'],
                        ['icon' => 'star', 'title' => 'Quality-Driven Work', 'desc' => 'Every deliverable — from a single social post to a full brand identity — is crafted to the highest standard.'],
                        ['icon' => 'shield', 'title' => 'Consistency & Reliability', 'desc' => 'Deadlines met. Promises kept. Quality delivered — every single time, without exception.'],
                        ['icon' => 'trending-up', 'title' => 'Modern Digital Thinking', 'desc' => 'We stay ahead of industry trends so your brand is always speaking the language of tomorrow.'],
                        ['icon' => 'zap', 'title' => 'Performance Focused', 'desc' => 'Beautiful content backed by data. We measure what matters and optimize continuously for growth.'],
                    ];

                    foreach ($coreValues as $i => $value): ?>
                        <div data-aos="zoom-in" data-aos-delay="<?php echo ($i % 3) * 100; ?>"
                            class="group bg-white/5 border border-white/5 p-8 rounded-[2rem] hover:bg-white/10 transition-all duration-500">
                            <div
                                class="h-12 w-12 rounded-xl bg-brand-deep flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                                <i data-lucide="<?php echo $value['icon']; ?>" class="text-brand-secondary w-5 h-5"></i>
                            </div>
                            <h4 class="text-xl font-black text-white mb-3 tracking-tight"><?php echo $value['title']; ?>
                            </h4>
                            <p class="text-slate-400 text-sm font-medium leading-relaxed"><?php echo $value['desc']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Why Ayonion -->
            <div class="mt-32 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center border-t border-white/5 pt-24">
                <div data-aos="fade-right" class="space-y-6">
                    <h3 class="text-4xl font-black text-white tracking-tighter">Why Ayonion?</h3>
                    <div class="grid gap-4">
                        <?php
                        $points = [
                            'Flexible and Innovative workflow',
                            'Clean aesthetic combined with data',
                            'Dedicated coordination for every client',
                            'Modern tech stack for lightning fast delivery',
                            'Data-Driven approach for scaling',
                            'Continuous research and testing to validate every move',
                        ];
                        foreach ($points as $point): ?>
                            <div class="flex items-center gap-4 text-slate-300 font-medium">
                                <i data-lucide="check-circle-2" class="text-brand-secondary w-5 h-5 flex-shrink-0"></i>
                                <?php echo $point; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div data-aos="fade-left" class="text-right lg:text-left flex flex-col items-end lg:items-end">
                    <p class="text-slate-400 font-medium leading-relaxed mb-8 text-lg max-w-md ml-auto">
                        Clean creativity, data-driven decisions, relentless testing, and a modern tech stack—delivered with flexibility and dedicated coordination.
                    </p>
                    <a href="index.php#contact"
                        class="inline-flex items-center gap-4 rounded-full bg-brand-secondary px-10 py-5 text-brand-deep font-black uppercase tracking-widest transition-all hover:scale-105 hover:bg-white shadow-[0_0_30px_rgba(189,223,232,0.3)]">
                        Partner With Us
                        <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>


        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    });
</script>

<?php
// Include the footer
include 'includes/footer.php';
?>