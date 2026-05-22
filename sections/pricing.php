<!-- Service Selector Section -->
<section id="pricing" class="py-24 bg-white relative overflow-hidden transition-all duration-300"
    :class="(modalOpen || checkoutModalOpen) ? '!z-[9999]' : 'z-10'"
    x-effect="document.body.style.overflow = (modalOpen || checkoutModalOpen) ? 'hidden' : ''"
    x-data="{ 
            activePath: 'retainer',
            modalOpen: false,
            calculatorItems: [
                { id: 'static', name: 'Static Post Graphic', cost: 1, count: 6 },
                { id: 'cover', name: 'Cover Image + Profile Picture', cost: 1, count: 0 },
                { id: 'loop', name: 'Loop Video (10s-15s)', cost: 2, count: 0 },
                { id: 'short', name: 'Short Video (Up to 3 min)', cost: 3, count: 4 },
                { id: 'carousel', name: 'Carousel', cost: 2, count: 1 },
                { id: 'brochure', name: 'Brochure (Up to 8 pages)', cost: 2, count: 0 },
                { id: 'script', name: 'Video Script Writing', cost: 1, count: 0 },
                { id: 'audit', name: 'Competitor Audit', cost: 5, count: 0 },
                { id: 'research', name: 'Complete Research', cost: 10, count: 0 },
                { id: 'recording', name: 'Recording Day (Up to 4 hours)', cost: 8, count: 0 }
            ],
            get totalConsumed() {
                return this.calculatorItems.reduce((acc, item) => acc + (item.cost * item.count), 0);
            },
            checkoutModalOpen: false,
            checkoutForm: {
                clientName: '',
                contactNumber: '',
                brandName: ''
            },
            planTitle: '',
            planFeatures: [],
            planDesc: '',
            detailedPlans: [],
            performanceReports: [],
            /* Retainer State */
            plans: {
                project: { budget: 50000, minBudget: 50000, base: 130000, showInput: true },
                startup: { 
                    budget: 0, 
                    showInput: false, showFeatures: false, 
                    base: 70000, 
                    platforms: ['fb'], 
                    maxPlatforms: 1,
                    features: [
                        { title: 'Management', desc: 'Full-stack listing optimization and basic OTA management.' },
                        { title: 'Content', desc: 'AI-driven promotional imagery and social media content creation.' },
                        { title: 'Technical', desc: 'Monthly technical auditing and performance troubleshooting reports.' },
                        { title: 'Support', desc: 'Dedicated technical and promotional support for hospitality brands.' }
                    ]
                },
                enterprise: { 
                    budget: 0, 
                    showInput: false, showFeatures: false, 
                    base: 95000, 
                    platforms: ['fb', 'ig'], 
                    maxPlatforms: 2,
                    features: [
                        { title: 'Management', desc: 'Multi-platform synchronization and advanced rate management.' },
                        { title: 'Content', desc: 'AI-driven promotional imagery and social media content creation.' },
                        { title: 'Technical', desc: 'Monthly technical auditing and performance troubleshooting reports.' },
                        { title: 'Support', desc: 'Dedicated technical and promotional support for hospitality brands.' }
                    ]
                },
                custom: { 
                    budget: 0, 
                    showInput: false, showFeatures: false, 
                    credits: 30,
                    platforms: ['fb'], 
                    pricePerCredit: 3000, 
                    pricePerPlatform: 10000,
                    get base() { return (this.credits * this.pricePerCredit) + (this.platforms.length * this.pricePerPlatform) },
                    features: [
                        { title: 'Management', desc: 'Full-stack digital operations and high-volume listing management.' },
                        { title: 'Content', desc: 'AI-driven promotional imagery and social media content creation.' },
                        { title: 'Technical', desc: 'Monthly technical auditing and performance troubleshooting reports.' },
                        { title: 'Support', desc: 'Dedicated technical and promotional support for hospitality brands.' }
                    ]
                }
            },
            selectedPlan: 'custom',
            checkoutSuccess: false,
            submitCheckout() {
                if (!this.selectedPlan) return;
                this.checkoutModalOpen = true;
            },
            processCheckout() {
                this.checkoutModalOpen = false;
                this.checkoutSuccess = true;
                setTimeout(() => {
                    document.getElementById('pricing').scrollIntoView({ behavior: 'smooth' });
                }, 100);
            },
            availablePlatforms: [
                ['fb', 'Facebook', 'fblogo.png'],
                ['ig', 'Instagram', 'https://cdn.simpleicons.org/instagram/E4405F'],
                ['tt', 'TikTok', 'tiktoklogo.png'],
                ['li', 'LinkedIn', 'image/link.png'],
                ['yt', 'YouTube', 'image/youtubelogo.webp'],
                ['wb', 'Website', 'image/website.avif']
            ],
            togglePlatform(planKey, platformId) {
                let plan = this.plans[planKey];
                if (plan.platforms.includes(platformId)) {
                    if (plan.platforms.length > 1) plan.platforms = plan.platforms.filter(p => p !== platformId);
                } else {
                    if (!plan.maxPlatforms || plan.platforms.length < plan.maxPlatforms) {
                        plan.platforms.push(platformId);
                    } else if (plan.maxPlatforms === 1) {
                        plan.platforms = [platformId];
                    }
                }
            }
         }">

    <!-- Background Accents -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <div class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-brand-deep/20 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-0 right-1/4 w-[400px] h-[400px] bg-brand-highlight/5 rounded-full blur-[100px]">
        </div>
    </div>

    <div class="container-custom relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-flex items-center gap-3 px-5 py-2 rounded-full bg-[#2E6083]/10 border border-[#2E6083]/20 mb-6 shadow-sm backdrop-blur-md">
                <span class="w-2 h-2 rounded-full bg-[#2E6083] animate-pulse"></span>
                <span class="text-[#102a43] font-black uppercase tracking-[0.2em] text-[10px] md:text-xs">Flexible Pricing | Option to test before you get onboard</span>
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-brand-darkest tracking-tight font-display mb-6">
                Discover the Plan <span class="text-brand-tertiary">that suits you!</span>
            </h2>
            <p class="text-slate-600 max-w-3xl mx-auto text-base md:text-lg font-medium leading-relaxed">
                Ayonion Studios is a data-driven digital marketing agency built for flexibility. Test your market with a one-time deep dive before you invest, or partner with us monthly through our adaptable Credit System. Either way, every strategy is powered by real campaign data — so you grow with clarity, not risk.
            </p>
        </div>

        <!-- Flowchart Selector -->
        <div class="relative max-w-4xl mx-auto mb-20" data-aos="fade-up" data-aos-delay="100">

            <div class="relative w-full flex flex-col items-center py-12">
                <button class="bg-[#112240] text-white px-6 py-2 rounded-full font-bold z-10 shadow-md relative">
                    CHOOSE YOUR PATH
                </button>

                <div class="hidden md:block absolute top-[54px] w-full h-[95px] z-0">
                    <svg class="w-full h-full" viewBox="0 0 1000 95" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <marker id="perfect-arrow" viewBox="0 0 10 10" refX="5" refY="5" markerWidth="6"
                                markerHeight="6" orient="auto-start-reverse">
                                <path d="M0 0 L5 5 L0 10 z" fill="#052C47" />
                            </marker>
                        </defs>

                        <!-- Left Path: Starts at center (50%), goes down, horizontally to the left card center (25%), and down with an arrow -->
                        <path d="M500 0 V30 H250 V90" stroke="#052C47" stroke-width="2.5" stroke-linecap="round"
                            stroke-linejoin="round" marker-end="url(#perfect-arrow)" />

                        <!-- Right Path: Starts at center (50%), goes down, horizontally to the right card center (75%), and down with an arrow -->
                        <path d="M500 0 V30 H750 V90" stroke="#052C47" stroke-width="2.5" stroke-linecap="round"
                            stroke-linejoin="round" marker-end="url(#perfect-arrow)" />
                    </svg>
                </div>
            </div>

            <div class="md:hidden h-8"></div>

            <!-- Service Paths -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 relative z-20">
                <!-- Tile A: Research & Testing -->
                <button @click="activePath = 'project'"
                    :class="activePath === 'project' ? 'border-brand-secondary bg-white shadow-[0_20px_40px_rgba(0,0,0,0.05)]' : 'border-slate-200 bg-slate-50 opacity-60 hover:opacity-100'"
                    class="p-8 rounded-[2.5rem] border-2 transition-all duration-500 flex flex-col items-center text-center group backdrop-blur-sm">
                    <span
                        class="inline-block px-3 py-1 mb-3 rounded-full bg-[#2E6083]/10 border border-[#2E6083]/20 text-[#2E6083] text-[0.65rem] font-black uppercase tracking-widest">Option
                        01</span>
                    <h4 class="text-xl font-black text-brand-darkest uppercase tracking-widest mb-3">Research & Testing
                    </h4>
                    <p class="text-xs font-medium text-slate-500 leading-relaxed max-w-sm">One-time payment. No monthly
                        contract. Ideal for brands that want to test your current digital marketing status, get
                        professional insight before committing or to continue in-house with a clear roadmap.</p>
                </button>

                <!-- Tile B: Monthly Retainer -->
                <button @click="activePath = 'retainer'"
                    :class="activePath === 'retainer' ? 'border-brand-secondary bg-white shadow-[0_20px_40px_rgba(0,0,0,0.05)]' : 'border-slate-200 bg-slate-50 opacity-60 hover:opacity-100'"
                    class="p-8 rounded-[2.5rem] border-2 transition-all duration-500 flex flex-col items-center text-center group backdrop-blur-sm">
                    <span
                        class="inline-block px-3 py-1 mb-3 rounded-full bg-[#2E6083]/10 border border-[#2E6083]/20 text-[#2E6083] text-[0.65rem] font-black uppercase tracking-widest">Option
                        02</span>
                    <h4 class="text-xl font-black text-brand-darkest uppercase tracking-widest mb-3">Monthly Retainer
                    </h4>
                    <p class="text-xs font-medium text-slate-500 leading-relaxed max-w-sm">Ongoing digital marketing
                        with a dedicated team. Choose a preset package or build your own.</p>
                </button>
            </div>
        </div>

        <!-- Content Area -->
        <div class="relative">

            <!-- Option 1: Research & Testing View -->
            <div x-show="activePath === 'project'" x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0"
                class="grid lg:grid-cols-[1fr_1.2fr] gap-10 items-start text-left max-w-6xl mx-auto">

                <!-- Left Side: Pricing Cards -->
                <div class="space-y-4">
                    <!-- Research & Testing Card -->
                    <div
                        class="bg-white p-6 rounded-[2rem] border border-slate-200 shadow-xl shadow-slate-100 relative overflow-hidden">
                        <div class="flex items-center gap-3 mb-4">
                            <div
                                class="w-10 h-10 rounded-full bg-brand-secondary/10 flex items-center justify-center border border-brand-secondary/20">
                                <i data-lucide="microscope" class="w-5 h-5 text-brand-highlight"></i>
                            </div>
                            <h4 class="text-lg font-black text-brand-darkest tracking-widest uppercase font-display">
                                Research & Testing</h4>
                        </div>
                        <div class="flex items-baseline gap-2">
                            <span class="text-xl font-bold text-slate-500">Rs.</span>
                            <span class="text-3xl md:text-4xl font-black tracking-tight text-brand-darkest"
                                x-text="plans.project.base.toLocaleString()"></span>
                        </div>

                        <div class="mt-5 pt-4 border-t border-slate-100 relative z-10">
                            <button @click="
                                modalOpen = true; 
                                planTitle = 'RESEARCH & TESTING'; 
                                planDesc = 'With the Research & Testing option, you get a complete deep dive into your market and ad strategy without any monthly commitment. We gather your data, understand your customer pain points, analyze your competitors, then conduct thorough market research and run live test campaigns with real-time monitoring. You walk away with a full suite of deliverables everything you need to either continue on your own or make an informed decision about a monthly package.';
                                detailedPlans = ['Research Report', 'Brand Guidelines', 'Creative Strategy Guideline', 'Test Campaign Plan'];
                                performanceReports = ['Test Campaign Report', 'Content Report', 'Credit Usage Report', 'Fully Optimized Ad Account'];
                            "
                                class="w-full flex items-center justify-between px-3 py-2.5 bg-white rounded-xl text-[0.65rem] font-black text-slate-800 uppercase tracking-wider md:hover:bg-slate-50 transition-colors border border-slate-200 shadow-sm cursor-pointer">
                                <span class="flex items-center gap-2"><i data-lucide="list-checks"
                                        class="w-3.5 h-3.5 text-[#2E6083]"></i> What You Get</span>

                            </button>
                        </div>
                    </div>

                    <!-- Ad Budget Box -->
                    <div
                        class="bg-white p-6 rounded-[2rem] border border-slate-200 shadow-xl shadow-slate-100 relative overflow-hidden">
                        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-3">
                            <div class="flex flex-col">
                                <span class="text-base font-black text-brand-darkest uppercase tracking-wider">Ad
                                    Budget</span>
                                <div class="flex items-center gap-2 mt-1">
                                    <span class="text-sm font-bold text-slate-500">Rs.</span>
                                    <span class="text-2xl font-black text-brand-secondary"
                                        x-text="(plans.project.budget || 0).toLocaleString()"></span>
                                </div>
                            </div>
                            <button @click="plans.project.showInput = !plans.project.showInput"
                                class="w-10 h-10 rounded-full border-2 border-slate-200 flex items-center justify-center text-brand-secondary md:hover:bg-brand-secondary md:hover:border-brand-secondary md:hover:text-brand-darkest transition-all">
                                <i data-lucide="plus" class="w-5 h-5"></i>
                            </button>
                        </div>
                        <div x-show="plans.project.showInput" x-transition class="pt-5 border-t border-slate-100 mt-4">
                            <label
                                class="block text-[0.65rem] font-black uppercase tracking-[0.2em] text-slate-500 mb-3">Specify
                                your test ad budget (Min: Rs. 50,000)</label>
                            <input type="number" :min="plans.project.minBudget" x-model.number="plans.project.budget"
                                @blur="if(plans.project.budget < plans.project.minBudget || !plans.project.budget) plans.project.budget = plans.project.minBudget"
                                class="w-full bg-slate-50 border border-slate-200 rounded-xl py-3 px-4 text-lg font-black text-brand-darkest focus:outline-none focus:border-brand-secondary"
                                placeholder="50000">

                            <input type="range" :min="plans.project.minBudget" max="500000" step="5000"
                                x-model.number="plans.project.budget"
                                class="w-full h-1 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-brand-secondary mt-5">
                        </div>
                    </div>

                    <!-- Total Project Investment -->
                    <div
                        class="bg-brand-deep p-6 rounded-[2rem] text-white shadow-2xl border border-brand-secondary/10 relative overflow-hidden group">
                        <div
                            class="absolute top-0 right-0 w-40 h-40 bg-brand-secondary/5 rounded-full blur-3xl group-md:hover:scale-150 transition-transform duration-1000">
                        </div>
                        <div class="relative z-10">
                            <div class="flex items-center gap-2 mb-5">
                                <i data-lucide="calculator" class="w-4 h-4 text-brand-highlight"></i>
                                <span
                                    class="text-[0.65rem] font-black uppercase tracking-[0.3em] text-brand-secondary">Total
                                    Investment</span>
                            </div>
                            <div class="flex items-baseline gap-3 border-b border-white/10 pb-5 mb-5">
                                <span class="text-xl font-bold text-white/60">Rs.</span>
                                <span class="text-3xl md:text-4xl font-black tracking-tight"
                                    x-text="(plans.project.base + (plans.project.budget || 0)).toLocaleString()"></span>
                            </div>
                            <p
                                class="text-[0.65rem] text-white/80 font-medium uppercase tracking-wider flex items-center gap-2">
                                <i data-lucide="check-circle-2" class="w-3.5 h-3.5 text-brand-highlight"></i> Includes
                                Research, Testing & Ad Budget
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Side: What You Get -->
                <div class="flex flex-col justify-center h-full py-6">
                    <h4
                        class="text-3xl md:text-4xl font-black text-brand-darkest mb-6 font-display uppercase tracking-wider">
                        What You <span class="text-brand-highlight">Get</span></h4>
                    <p class="text-slate-600 text-lg font-medium leading-relaxed mb-10">
                        With the Research & Testing option, you get a complete deep dive into your market and ad
                        strategy without any monthly commitment. We gather your data, understand your customer pain
                        points, analyze your competitors, then conduct thorough market research and run live test
                        campaigns with real-time monitoring. You walk away with a full suite of deliverables everything
                        you need to either continue on your own or make an informed decision about a monthly package.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-10">
                        <!-- Detailed Plans -->
                        <div
                            class="p-6 rounded-2xl border border-[#2E6083]/10 bg-gradient-to-br from-[#f8fafc] to-[#e2e8f0]/50 shadow-[inset_0_0_20px_rgba(30,64,175,0.03)] md:hover:shadow-lg md:hover:-translate-y-1 transition-all group relative overflow-hidden">
                            <div class="flex items-center gap-3 mb-4 border-b border-slate-200/60 pb-4">
                                <div
                                    class="w-12 h-12 rounded-xl bg-white shadow-sm flex items-center justify-center group-md:hover:scale-110 transition-transform">
                                    <i data-lucide="file-check" class="w-6 h-6 text-[#2E6083]"></i>
                                </div>
                                <h5 class="text-base font-black text-brand-darkest uppercase tracking-wide">Detailed
                                    Plans</h5>
                            </div>
                            <p class="text-slate-500 text-sm leading-relaxed font-medium mb-5">
                                Strategic roadmaps specifically tailored to elevate your brand's digital identity.
                            </p>
                            <div class="flex flex-col gap-3">
                                <template
                                    x-for="item in ['Research Report', 'Brand Guidelines', 'Creative Strategy Guideline', 'Test Campaign Plan']">
                                    <div
                                        class="flex items-center gap-3 p-3.5 rounded-xl bg-white border border-slate-100 shadow-sm md:hover:border-[#2E6083]/30 md:hover:shadow-md transition-all group/item">
                                        <div
                                            class="w-7 h-7 rounded-full bg-[#2E6083]/5 flex items-center justify-center shrink-0 group-hover/item:bg-[#2E6083] transition-colors">
                                            <svg class="w-4 h-4 text-[#2E6083] group-hover/item:text-white transition-colors"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <span class="text-slate-700 text-sm font-bold leading-relaxed"
                                            x-text="item"></span>
                                    </div>
                                </template>
                            </div>
                        </div>

                        <!-- Performance Reports -->
                        <div
                            class="p-6 rounded-2xl border border-[#2E6083]/10 bg-gradient-to-br from-[#f8fafc] to-[#e2e8f0]/50 shadow-[inset_0_0_20px_rgba(30,64,175,0.03)] md:hover:shadow-lg md:hover:-translate-y-1 transition-all group relative overflow-hidden">
                            <div class="flex items-center gap-3 mb-4 border-b border-slate-200/60 pb-4">
                                <div
                                    class="w-12 h-12 rounded-xl bg-white shadow-sm flex items-center justify-center group-md:hover:scale-110 transition-transform">
                                    <i data-lucide="bar-chart-3" class="w-6 h-6 text-[#2E6083]"></i>
                                </div>
                                <h5 class="text-base font-black text-brand-darkest uppercase tracking-wide">Performance
                                    Reports</h5>
                            </div>
                            <p class="text-slate-500 text-sm leading-relaxed font-medium mb-5">
                                Actionable, data-backed insights derived from real-world market testing.
                            </p>
                            <div class="flex flex-col gap-3">
                                <template
                                    x-for="item in ['Test Campaign Report', 'Content Report', 'Credit Usage Report', 'Fully Optimized Ad Account']">
                                    <div
                                        class="flex items-center gap-3 p-3.5 rounded-xl bg-white border border-slate-100 shadow-sm md:hover:border-[#2E6083]/30 md:hover:shadow-md transition-all group/item">
                                        <div
                                            class="w-7 h-7 rounded-full bg-[#2E6083]/5 flex items-center justify-center shrink-0 group-hover/item:bg-[#2E6083] transition-colors">
                                            <svg class="w-4 h-4 text-[#2E6083] group-hover/item:text-white transition-colors"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <span class="text-slate-700 text-sm font-bold leading-relaxed"
                                            x-text="item"></span>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>

                    <a href="#contact"
                        class="w-full sm:w-auto px-10 py-5 rounded-full bg-brand-highlight text-brand-darkest font-black uppercase tracking-widest md:hover:scale-105 transition-all shadow-xl shadow-brand-highlight/20 flex items-center justify-center gap-3 group">
                        <span>Research & Test Your Brand</span>
                        <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>

            <!-- Option 2: Monthly Retainer View -->
            <div x-show="activePath === 'retainer'" x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0"
                class="w-full">

                <div x-show="!checkoutSuccess" x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-8">
                    <div class="grid lg:grid-cols-3 gap-8 items-start">

                        <!-- Startup Plan -->
                        <div
                            class="bg-slate-50 p-4 md:p-5 rounded-[2rem] border border-slate-200 shadow-lg flex flex-col group text-center relative transition-all duration-500 md:hover:shadow-2xl md:hover:shadow-slate-300 md:hover:border-slate-300 md:hover:-translate-y-1 self-start h-auto">


                            <div class="mb-4 flex-1 flex flex-col">
                                <h3
                                    class="text-lg font-black text-brand-darkest mb-3 font-display uppercase tracking-widest">
                                    Startup</h3>
                                <div
                                    class="flex items-center justify-between bg-white rounded-2xl px-5 py-3.5 border border-slate-200/80 shadow-md">
                                    <div class="flex items-center gap-2.5">
                                        <div class="w-7 h-7 rounded-lg bg-[#2E6083]/10 flex items-center justify-center flex-shrink-0">
                                            <svg class="w-3.5 h-3.5 text-[#2E6083]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                <rect x="2" y="4" width="20" height="16" rx="2"/>
                                                <line x1="2" y1="10" x2="22" y2="10"/>
                                            </svg>
                                        </div>
                                        <div class="flex items-baseline gap-1.5 leading-none">
                                            <span class="text-[0.7rem] font-black text-brand-darkest uppercase tracking-widest">Credits</span>
                                            <span class="text-xl font-black text-brand-darkest">20</span>
                                        </div>
                                    </div>
                                    <div class="w-px h-8 bg-slate-100 flex-shrink-0"></div>
                                    <div class="flex items-center gap-2.5">
                                        <div class="w-7 h-7 rounded-lg bg-[#2E6083]/10 flex items-center justify-center flex-shrink-0">
                                            <svg class="w-3.5 h-3.5 text-[#2E6083]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="10"/>
                                                <line x1="2" y1="12" x2="22" y2="12"/>
                                                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                                            </svg>
                                        </div>
                                        <div class="flex items-baseline gap-1.5 leading-none">
                                            <span class="text-[0.7rem] font-black text-brand-darkest uppercase tracking-widest">Platforms</span>
                                            <span class="text-xl font-black text-brand-darkest">1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Platform Selector -->
                            <div class="mb-4">
                                <span class="text-[11px] font-medium text-slate-400 block text-center mb-2">Select the platforms you want us to manage.</span>
                                <div class="grid grid-cols-3 gap-2">
                                    <!-- Facebook -->
                                    <button @click="togglePlatform('startup', 'fb')"
                                        :class="plans.startup.platforms.includes('fb') 
                                            ? 'border-[#1877F2] bg-[#1877F2]/10 text-[#1877F2] shadow-sm scale-[1.03]' 
                                            : 'border-slate-200 bg-slate-50 text-slate-400 md:hover:scale-105'"
                                        class="py-3 w-full rounded-xl border flex items-center justify-center transition-all duration-300 group/btn"
                                        aria-label="Facebook">
                                        <svg class="w-5 h-5 fill-current transition-transform duration-300 md:group-hover/btn:scale-110" viewBox="0 0 24 24">
                                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                        </svg>
                                    </button>
                                    <!-- Instagram -->
                                    <button @click="togglePlatform('startup', 'ig')"
                                        :class="plans.startup.platforms.includes('ig') 
                                            ? 'border-[#dc2743] bg-gradient-to-tr from-[#f09433]/10 via-[#dc2743]/10 to-[#bc1888]/10 text-[#dc2743] shadow-sm scale-[1.03]' 
                                            : 'border-slate-200 bg-slate-50 text-slate-400 md:hover:scale-105'"
                                        class="py-3 w-full rounded-xl border flex items-center justify-center transition-all duration-300 group/btn"
                                        aria-label="Instagram">
                                        <svg class="w-5 h-5 fill-current transition-transform duration-300 md:group-hover/btn:scale-110" viewBox="0 0 24 24">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                                        </svg>
                                    </button>
                                    <!-- TikTok -->
                                    <button @click="togglePlatform('startup', 'tt')"
                                        :class="plans.startup.platforms.includes('tt') 
                                            ? 'border-brand-darkest bg-brand-darkest/10 text-brand-darkest shadow-sm scale-[1.03]' 
                                            : 'border-slate-200 bg-slate-50 text-slate-400 md:hover:scale-105'"
                                        class="py-3 w-full rounded-xl border flex items-center justify-center transition-all duration-300 group/btn"
                                        aria-label="TikTok">
                                        <img src="tiktoklogo.png" alt="TikTok" class="w-5 h-5 rounded-md object-contain transition-transform duration-300 md:group-hover/btn:scale-110">
                                    </button>
                                    <!-- LinkedIn -->
                                    <button @click="togglePlatform('startup', 'li')"
                                        :class="plans.startup.platforms.includes('li') 
                                            ? 'border-[#0A66C2] bg-[#0A66C2]/10 text-[#0A66C2] shadow-sm scale-[1.03]' 
                                            : 'border-slate-200 bg-slate-50 text-slate-400 md:hover:scale-105'"
                                        class="py-3 w-full rounded-xl border flex items-center justify-center transition-all duration-300 group/btn"
                                        aria-label="LinkedIn">
                                        <svg class="w-5 h-5 fill-current transition-transform duration-300 md:group-hover/btn:scale-110" viewBox="0 0 24 24">
                                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                        </svg>
                                    </button>
                                    <!-- YouTube -->
                                    <button @click="togglePlatform('startup', 'yt')"
                                        :class="plans.startup.platforms.includes('yt') 
                                            ? 'border-[#FF0000] bg-[#FF0000]/10 text-[#FF0000] shadow-sm scale-[1.03]' 
                                            : 'border-slate-200 bg-slate-50 text-slate-400 md:hover:scale-105'"
                                        class="py-3 w-full rounded-xl border flex items-center justify-center transition-all duration-300 group/btn"
                                        aria-label="YouTube">
                                        <svg class="w-5 h-5 fill-current transition-transform duration-300 md:group-hover/btn:scale-110" viewBox="0 0 24 24">
                                            <path d="M23.498 6.163a3.003 3.003 0 0 0-2.11-2.107C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.388.511a3.002 3.002 0 0 0-2.11 2.107C0 8.053 0 12 0 12s0 3.947.502 5.837a3.003 3.003 0 0 0 2.11 2.107C4.495 20.455 12 20.455 12 20.455s7.505 0 9.388-.511a3.003 3.003 0 0 0 2.11-2.107C24 15.947 24 12 24 12s0-3.947-.502-5.837zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                        </svg>
                                    </button>
                                    <!-- Website -->
                                    <button @click="togglePlatform('startup', 'wb')"
                                        :class="plans.startup.platforms.includes('wb') 
                                            ? 'border-[#2E6083] bg-[#2E6083]/10 text-[#2E6083] shadow-sm scale-[1.03]' 
                                            : 'border-slate-200 bg-slate-50 text-slate-400 md:hover:scale-105'"
                                        class="py-3 w-full rounded-xl border flex items-center justify-center transition-all duration-300 group/btn"
                                        aria-label="Website">
                                        <svg class="w-5 h-5 stroke-current fill-none transition-transform duration-300 md:group-hover/btn:scale-110" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"/>
                                            <line x1="2" y1="12" x2="22" y2="12"/>
                                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <!-- What's Included Button -->
                            <div class="mb-4 mt-auto relative z-10">
                                <button
                                    @click="plans.startup.showFeatures = !plans.startup.showFeatures"
                                    class="w-full flex items-center justify-between px-5 py-3.5 bg-white rounded-full text-xs font-black text-slate-800 uppercase tracking-widest md:hover:bg-slate-50 transition-all border border-slate-200 shadow-md">
                                    <span class="flex items-center gap-2"><i data-lucide="list-checks"
                                            class="w-4 h-4 text-[#2E6083]"></i> What's Included</span>
                                    <svg class="w-4 h-4 text-slate-500 transition-transform duration-300" :class="plans.startup.showFeatures ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                
                                <div class="overflow-hidden transition-all duration-500 ease-in-out" 
                                     x-show="plans.startup.showFeatures"
                                     x-transition:enter="transition ease-out duration-300"
                                     x-transition:enter-start="opacity-0 max-h-0"
                                     x-transition:enter-end="opacity-100 max-h-[1000px]"
                                     x-transition:leave="transition ease-in duration-200"
                                     x-transition:leave-start="opacity-100 max-h-[1000px]"
                                     x-transition:leave-end="opacity-0 max-h-0">
                                     <div class="mt-3 text-left bg-white border border-slate-200/80 shadow-inner rounded-2xl p-4 space-y-4">
                                         <!-- Title Block -->
                                         <div class="pb-2 border-b border-slate-100">
                                             <span class="text-xs font-black text-[#2E6083] uppercase tracking-widest flex items-center gap-1.5">
                                                 <span class="w-1.5 h-1.5 rounded-full bg-[#2E6083]"></span>
                                                 What's Included Every Month
                                             </span>
                                         </div>
                                         
                                         <!-- Credits & Platforms -->
                                         <div class="flex flex-col gap-2 p-3 rounded-xl bg-slate-50 border border-slate-100/60 mb-4 mt-2">
                                             <div class="flex items-center justify-between">
                                                 <span class="text-xs font-bold text-slate-700">Number of Credits:</span>
                                                 <span class="text-xs font-black text-[#2E6083]">20</span>
                                             </div>
                                             <div class="flex items-center justify-between">
                                                 <span class="text-xs font-bold text-slate-700">Number of Platforms we manage:</span>
                                                 <span class="text-xs font-black text-[#2E6083]">1</span>
                                             </div>
                                         </div>
                                         
                                         <!-- Inclusions Grid -->
                                         <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                                             <template x-for="item in ['Dedicated Marketing Coordinator', 'Platform Management', 'Content Creation', 'Monthly Reporting', 'Strategizing', 'Unlimited Ad Campaigns', 'Unlimited Postings', 'SEO']">
                                                 <div class="flex items-center gap-2 p-2 rounded-xl bg-slate-50 border border-slate-100/60">
                                                     <span class="flex h-4 w-4 shrink-0 items-center justify-center rounded-full bg-emerald-50 text-emerald-500">
                                                         <svg class="h-2.5 w-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4">
                                                             <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                         </svg>
                                                     </span>
                                                     <span class="text-xs font-bold text-slate-700 leading-tight" x-text="item"></span>
                                                 </div>
                                             </template>
                                         </div>
                                         
                                         <!-- Deliverables Subcard -->
                                         <div class="p-4 rounded-2xl bg-gradient-to-br from-[#f8fafc] to-[#e2e8f0]/50 border border-[#2E6083]/10 shadow-[inset_0_0_20px_rgba(30,64,175,0.03)] space-y-3">
                                             <h4 class="text-xs font-black uppercase tracking-widest text-[#102a43] flex items-center gap-1.5">
                                                 <span class="h-1.5 w-1.5 rounded-full bg-[#2E6083] animate-pulse"></span>
                                                 Tangible Monthly Deliverables
                                             </h4>
                                             <div class="space-y-2">
                                                 <div class="flex items-center gap-2 text-xs font-bold text-slate-700">
                                                     <span class="text-[#2E6083]">✦</span>
                                                     <span>Monthly Content Plan</span>
                                                 </div>
                                                 <div class="flex items-center gap-2 text-xs font-bold text-slate-700">
                                                     <span class="text-[#2E6083]">✦</span>
                                                     <span>Monthly Ad Plan</span>
                                                 </div>
                                                 <div class="flex flex-col gap-2">
                                                     <div class="flex items-center gap-2 text-xs font-black text-[#102a43]">
                                                         <span class="text-[#2E6083]">✦</span>
                                                         <span>Monthly Performance & Insight Report</span>
                                                     </div>
                                                     <!-- Tag pills -->
                                                     <div class="flex flex-wrap gap-1.5 pl-3.5">
                                                         <template x-for="sub in ['Ad Campaign Metrics', 'Ad Performance Breakdown', 'Credit Usage Report', 'KPI Report', 'Platform Performance Metrics', 'Platform Performance Breakdown']">
                                                             <span class="px-2 py-0.5 rounded bg-white border border-[#2E6083]/20 text-[#2E6083] text-[11px] font-bold shadow-sm" x-text="sub"></span>
                                                         </template>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                </div>

                            </div>

                            <!-- Integrated Ad Budget -->
                            <div class="mb-4 p-3.5 rounded-xl bg-slate-50 border border-slate-200 flex flex-col">
                                <div class="flex items-center justify-between">
                                    <div class="flex flex-col items-start text-left gap-0.5">
                                         <div class="flex items-center gap-2">
                                        <span class="text-[10px] font-bold text-slate-500 uppercase tracking-wider">Ad
                                            Budget</span>
                                        <button @click="plans.startup.showInput = !plans.startup.showInput"
                                            class="text-brand-secondary md:hover:text-brand-highlight transition-colors"><i
                                                data-lucide="plus-circle" class="w-3.5 h-3.5"></i></button>
                                    </div>
                                         <span class="text-[11px] font-medium text-slate-400 capitalize">Specify your monthly ad budget</span>
                                     </div>
                                    <div class="flex items-center gap-1 text-right">
                                        <span class="text-[10px] font-bold text-slate-400">Rs.</span>
                                        <span class="text-base font-black text-brand-secondary leading-none"
                                            x-text="plans.startup.budget.toLocaleString()"></span>
                                    </div>
                                </div>
                                <div class="overflow-hidden transition-all duration-500 ease-in-out"
                                    :class="plans.startup.showInput ? 'max-h-[100px] opacity-100 mt-3' : 'max-h-0 opacity-0 mt-0'">
                                    <input type="number" x-model.number="plans.startup.budget"
                                        class="w-full bg-white border border-slate-200 rounded-md py-1.5 px-3 text-xs font-black focus:border-brand-secondary outline-none text-brand-darkest"
                                        placeholder="0">
                                </div>
                            </div>

                            <div class="mt-auto pt-4 border-t border-slate-200 transition-all duration-500">
                                <div class="flex items-center justify-between mb-4">
                                    <span
                                        class="text-[0.65rem] font-bold text-slate-500 uppercase tracking-widest">Total
                                        Price</span>
                                    <span class="text-xl font-black text-brand-darkest"
                                        x-text="'Rs. ' + (plans.startup.base + plans.startup.budget).toLocaleString()"></span>
                                </div>
                                <button @click="selectedPlan = selectedPlan === 'startup' ? null : 'startup'"
                                    :class="selectedPlan === 'startup' ? 'bg-brand-secondary text-brand-darkest shadow-md shadow-brand-secondary/30' : 'bg-slate-100 text-slate-600 md:hover:bg-slate-200 md:hover:text-slate-800'"
                                    class="w-full py-3.5 rounded-xl font-black uppercase text-xs tracking-widest transition-all">
                                    <span x-text="selectedPlan === 'startup' ? 'Selected' : 'Select Plan'"></span>
                                </button>
                            </div>
                        </div>

                        <!-- Enterprise Plan -->
                        <div
                            class="bg-gradient-to-b from-sky-50/50 to-white p-4 md:p-5 rounded-[2rem] border-2 border-brand-secondary shadow-xl shadow-brand-secondary/20 flex flex-col group text-center relative overflow-hidden transition-all duration-500 md:hover:shadow-2xl md:hover:shadow-brand-secondary/40 md:hover:-translate-y-1 self-start h-auto">
                            <div
                                class="absolute top-0 right-0 bg-brand-secondary text-brand-darkest px-3 py-1 rounded-bl-xl text-[9px] font-black uppercase tracking-widest z-10">
                                Popular</div>

                            <div class="mb-4 flex-1 flex flex-col">
                                <h3
                                    class="text-lg font-black text-brand-darkest mb-3 font-display uppercase tracking-widest">
                                    Enterprise</h3>
                                <div
                                    class="flex items-center justify-between bg-white rounded-2xl px-5 py-3.5 border border-slate-200/80 shadow-md">
                                    <div class="flex items-center gap-2.5">
                                        <div class="w-7 h-7 rounded-lg bg-[#2E6083]/10 flex items-center justify-center flex-shrink-0">
                                            <svg class="w-3.5 h-3.5 text-[#2E6083]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                <rect x="2" y="4" width="20" height="16" rx="2"/>
                                                <line x1="2" y1="10" x2="22" y2="10"/>
                                            </svg>
                                        </div>
                                        <div class="flex items-baseline gap-1.5 leading-none">
                                            <span class="text-[0.7rem] font-black text-brand-darkest uppercase tracking-widest">Credits</span>
                                            <span class="text-xl font-black text-brand-darkest">25</span>
                                        </div>
                                    </div>
                                    <div class="w-px h-8 bg-slate-100 flex-shrink-0"></div>
                                    <div class="flex items-center gap-2.5">
                                        <div class="w-7 h-7 rounded-lg bg-[#2E6083]/10 flex items-center justify-center flex-shrink-0">
                                            <svg class="w-3.5 h-3.5 text-[#2E6083]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="10"/>
                                                <line x1="2" y1="12" x2="22" y2="12"/>
                                                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                                            </svg>
                                        </div>
                                        <div class="flex items-baseline gap-1.5 leading-none">
                                            <span class="text-[0.7rem] font-black text-brand-darkest uppercase tracking-widest">Platforms</span>
                                            <span class="text-xl font-black text-brand-darkest">2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Platform Selector -->
                            <div class="mb-4">
                                <span class="text-[11px] font-medium text-slate-400 block text-center mb-2">Select the platforms you want us to manage.</span>
                                <div class="grid grid-cols-3 gap-2">
                                    <!-- Facebook -->
                                    <button @click="togglePlatform('enterprise', 'fb')"
                                        :class="plans.enterprise.platforms.includes('fb') 
                                            ? 'border-[#1877F2] bg-[#1877F2]/10 text-[#1877F2] shadow-sm scale-[1.03]' 
                                            : 'border-slate-200 bg-slate-50 text-slate-400 md:hover:scale-105'"
                                        class="py-3 w-full rounded-xl border flex items-center justify-center transition-all duration-300 group/btn"
                                        aria-label="Facebook">
                                        <svg class="w-5 h-5 fill-current transition-transform duration-300 md:group-hover/btn:scale-110" viewBox="0 0 24 24">
                                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                        </svg>
                                    </button>
                                    <!-- Instagram -->
                                    <button @click="togglePlatform('enterprise', 'ig')"
                                        :class="plans.enterprise.platforms.includes('ig') 
                                            ? 'border-[#dc2743] bg-gradient-to-tr from-[#f09433]/10 via-[#dc2743]/10 to-[#bc1888]/10 text-[#dc2743] shadow-sm scale-[1.03]' 
                                            : 'border-slate-200 bg-slate-50 text-slate-400 md:hover:scale-105'"
                                        class="py-3 w-full rounded-xl border flex items-center justify-center transition-all duration-300 group/btn"
                                        aria-label="Instagram">
                                        <svg class="w-5 h-5 fill-current transition-transform duration-300 md:group-hover/btn:scale-110" viewBox="0 0 24 24">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                                        </svg>
                                    </button>
                                    <!-- TikTok -->
                                    <button @click="togglePlatform('enterprise', 'tt')"
                                        :class="plans.enterprise.platforms.includes('tt') 
                                            ? 'border-brand-darkest bg-brand-darkest/10 text-brand-darkest shadow-sm scale-[1.03]' 
                                            : 'border-slate-200 bg-slate-50 text-slate-400 md:hover:scale-105'"
                                        class="py-3 w-full rounded-xl border flex items-center justify-center transition-all duration-300 group/btn"
                                        aria-label="TikTok">
                                        <img src="tiktoklogo.png" alt="TikTok" class="w-5 h-5 rounded-md object-contain transition-transform duration-300 md:group-hover/btn:scale-110">
                                    </button>
                                    <!-- LinkedIn -->
                                    <button @click="togglePlatform('enterprise', 'li')"
                                        :class="plans.enterprise.platforms.includes('li') 
                                            ? 'border-[#0A66C2] bg-[#0A66C2]/10 text-[#0A66C2] shadow-sm scale-[1.03]' 
                                            : 'border-slate-200 bg-slate-50 text-slate-400 md:hover:scale-105'"
                                        class="py-3 w-full rounded-xl border flex items-center justify-center transition-all duration-300 group/btn"
                                        aria-label="LinkedIn">
                                        <svg class="w-5 h-5 fill-current transition-transform duration-300 md:group-hover/btn:scale-110" viewBox="0 0 24 24">
                                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                        </svg>
                                    </button>
                                    <!-- YouTube -->
                                    <button @click="togglePlatform('enterprise', 'yt')"
                                        :class="plans.enterprise.platforms.includes('yt') 
                                            ? 'border-[#FF0000] bg-[#FF0000]/10 text-[#FF0000] shadow-sm scale-[1.03]' 
                                            : 'border-slate-200 bg-slate-50 text-slate-400 md:hover:scale-105'"
                                        class="py-3 w-full rounded-xl border flex items-center justify-center transition-all duration-300 group/btn"
                                        aria-label="YouTube">
                                        <svg class="w-5 h-5 fill-current transition-transform duration-300 md:group-hover/btn:scale-110" viewBox="0 0 24 24">
                                            <path d="M23.498 6.163a3.003 3.003 0 0 0-2.11-2.107C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.388.511a3.002 3.002 0 0 0-2.11 2.107C0 8.053 0 12 0 12s0 3.947.502 5.837a3.003 3.003 0 0 0 2.11 2.107C4.495 20.455 12 20.455 12 20.455s7.505 0 9.388-.511a3.003 3.003 0 0 0 2.11-2.107C24 15.947 24 12 24 12s0-3.947-.502-5.837zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                        </svg>
                                    </button>
                                    <!-- Website -->
                                    <button @click="togglePlatform('enterprise', 'wb')"
                                        :class="plans.enterprise.platforms.includes('wb') 
                                            ? 'border-[#2E6083] bg-[#2E6083]/10 text-[#2E6083] shadow-sm scale-[1.03]' 
                                            : 'border-slate-200 bg-slate-50 text-slate-400 md:hover:scale-105'"
                                        class="py-3 w-full rounded-xl border flex items-center justify-center transition-all duration-300 group/btn"
                                        aria-label="Website">
                                        <svg class="w-5 h-5 stroke-current fill-none transition-transform duration-300 md:group-hover/btn:scale-110" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"/>
                                            <line x1="2" y1="12" x2="22" y2="12"/>
                                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <!-- What's Included Button -->
                            <div class="mb-4 mt-auto relative z-10">
                                <button
                                    @click="plans.enterprise.showFeatures = !plans.enterprise.showFeatures"
                                    class="w-full flex items-center justify-between px-5 py-3.5 bg-white rounded-full text-xs font-black text-slate-800 uppercase tracking-widest md:hover:bg-slate-50 transition-all border border-slate-200 shadow-md">
                                    <span class="flex items-center gap-2"><i data-lucide="list-checks"
                                            class="w-4 h-4 text-[#2E6083]"></i> What's Included</span>
                                    <svg class="w-4 h-4 text-slate-500 transition-transform duration-300" :class="plans.enterprise.showFeatures ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                
                                <div class="overflow-hidden transition-all duration-500 ease-in-out" 
                                     x-show="plans.enterprise.showFeatures"
                                     x-transition:enter="transition ease-out duration-300"
                                     x-transition:enter-start="opacity-0 max-h-0"
                                     x-transition:enter-end="opacity-100 max-h-[1000px]"
                                     x-transition:leave="transition ease-in duration-200"
                                     x-transition:leave-start="opacity-100 max-h-[1000px]"
                                     x-transition:leave-end="opacity-0 max-h-0">
                                     <div class="mt-3 text-left bg-white border border-slate-200/80 shadow-inner rounded-2xl p-4 space-y-4">
                                         <!-- Title Block -->
                                         <div class="pb-2 border-b border-slate-100">
                                             <span class="text-xs font-black text-[#2E6083] uppercase tracking-widest flex items-center gap-1.5">
                                                 <span class="w-1.5 h-1.5 rounded-full bg-[#2E6083]"></span>
                                                 What's Included Every Month
                                             </span>
                                         </div>
                                         
                                         <!-- Credits & Platforms -->
                                         <div class="flex flex-col gap-2 p-3 rounded-xl bg-slate-50 border border-slate-100/60 mb-4 mt-2">
                                             <div class="flex items-center justify-between">
                                                 <span class="text-xs font-bold text-slate-700">Number of Credits:</span>
                                                 <span class="text-xs font-black text-[#2E6083]">25</span>
                                             </div>
                                             <div class="flex items-center justify-between">
                                                 <span class="text-xs font-bold text-slate-700">Number of Platforms we manage:</span>
                                                 <span class="text-xs font-black text-[#2E6083]">2</span>
                                             </div>
                                         </div>
                                         
                                         <!-- Inclusions Grid -->
                                         <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                                             <template x-for="item in ['Dedicated Marketing Coordinator', 'Platform Management', 'Content Creation', 'Monthly Reporting', 'Strategizing', 'Unlimited Ad Campaigns', 'Unlimited Postings', 'SEO']">
                                                 <div class="flex items-center gap-2 p-2 rounded-xl bg-slate-50 border border-slate-100/60">
                                                     <span class="flex h-4 w-4 shrink-0 items-center justify-center rounded-full bg-emerald-50 text-emerald-500">
                                                         <svg class="h-2.5 w-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4">
                                                             <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                         </svg>
                                                     </span>
                                                     <span class="text-xs font-bold text-slate-700 leading-tight" x-text="item"></span>
                                                 </div>
                                             </template>
                                         </div>
                                         
                                         <!-- Deliverables Subcard -->
                                         <div class="p-4 rounded-2xl bg-gradient-to-br from-[#f8fafc] to-[#e2e8f0]/50 border border-[#2E6083]/10 shadow-[inset_0_0_20px_rgba(30,64,175,0.03)] space-y-3">
                                             <h4 class="text-xs font-black uppercase tracking-widest text-[#102a43] flex items-center gap-1.5">
                                                 <span class="h-1.5 w-1.5 rounded-full bg-[#2E6083] animate-pulse"></span>
                                                 Tangible Monthly Deliverables
                                             </h4>
                                             <div class="space-y-2">
                                                 <div class="flex items-center gap-2 text-xs font-bold text-slate-700">
                                                     <span class="text-[#2E6083]">✦</span>
                                                     <span>Monthly Content Plan</span>
                                                 </div>
                                                 <div class="flex items-center gap-2 text-xs font-bold text-slate-700">
                                                     <span class="text-[#2E6083]">✦</span>
                                                     <span>Monthly Ad Plan</span>
                                                 </div>
                                                 <div class="flex flex-col gap-2">
                                                     <div class="flex items-center gap-2 text-xs font-black text-[#102a43]">
                                                         <span class="text-[#2E6083]">✦</span>
                                                         <span>Monthly Performance & Insight Report</span>
                                                     </div>
                                                     <!-- Tag pills -->
                                                     <div class="flex flex-wrap gap-1.5 pl-3.5">
                                                         <template x-for="sub in ['Ad Campaign Metrics', 'Ad Performance Breakdown', 'Credit Usage Report', 'KPI Report', 'Platform Performance Metrics', 'Platform Performance Breakdown']">
                                                             <span class="px-2 py-0.5 rounded bg-white border border-[#2E6083]/20 text-[#2E6083] text-[11px] font-bold shadow-sm" x-text="sub"></span>
                                                         </template>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                </div>

                            </div>

                            <!-- Integrated Ad Budget -->
                            <div class="mb-4 p-3.5 rounded-xl bg-slate-50 border border-slate-200 flex flex-col">
                                <div class="flex items-center justify-between">
                                    <div class="flex flex-col items-start text-left gap-0.5">
                                         <div class="flex items-center gap-2">
                                        <span class="text-[10px] font-bold text-slate-500 uppercase tracking-wider">Ad
                                            Budget</span>
                                        <button @click="plans.enterprise.showInput = !plans.enterprise.showInput"
                                            class="text-brand-secondary md:hover:text-brand-highlight transition-colors"><i
                                                data-lucide="plus-circle" class="w-3.5 h-3.5"></i></button>
                                    </div>
                                         <span class="text-[11px] font-medium text-slate-400 capitalize">Specify your monthly ad budget</span>
                                     </div>
                                    <div class="flex items-center gap-1 text-right">
                                        <span class="text-[10px] font-bold text-slate-400">Rs.</span>
                                        <span class="text-base font-black text-brand-secondary leading-none"
                                            x-text="plans.enterprise.budget.toLocaleString()"></span>
                                    </div>
                                </div>
                                <div class="overflow-hidden transition-all duration-500 ease-in-out"
                                    :class="plans.enterprise.showInput ? 'max-h-[100px] opacity-100 mt-3' : 'max-h-0 opacity-0 mt-0'">
                                    <input type="number" x-model.number="plans.enterprise.budget"
                                        class="w-full bg-white border border-slate-200 rounded-md py-1.5 px-3 text-xs font-black focus:border-brand-secondary outline-none text-brand-darkest"
                                        placeholder="0">
                                </div>
                            </div>

                            <div class="mt-auto pt-4 border-t border-slate-200 transition-all duration-500">
                                <div class="flex items-center justify-between mb-4">
                                    <span
                                        class="text-[0.65rem] font-bold text-slate-500 uppercase tracking-widest">Total
                                        Price</span>
                                    <span class="text-xl font-black text-brand-darkest"
                                        x-text="'Rs. ' + (plans.enterprise.base + plans.enterprise.budget).toLocaleString()"></span>
                                </div>
                                <button @click="selectedPlan = selectedPlan === 'enterprise' ? null : 'enterprise'"
                                    :class="selectedPlan === 'enterprise' ? 'bg-brand-secondary text-brand-darkest shadow-md shadow-brand-secondary/30' : 'bg-slate-100 text-slate-600 md:hover:bg-slate-200 md:hover:text-slate-800'"
                                    class="w-full py-3.5 rounded-xl font-black uppercase text-xs tracking-widest transition-all">
                                    <span x-text="selectedPlan === 'enterprise' ? 'Selected' : 'Select Plan'"></span>
                                </button>
                            </div>
                        </div>

                        <!-- Custom Plan -->
                        <div
                            class="bg-brand-dark p-4 md:p-5 rounded-[2rem] border border-brand-accent shadow-2xl flex flex-col group text-center relative lg:scale-[1.03] lg:-translate-y-4 transition-all duration-500 md:hover:shadow-[0_25px_60px_rgba(247,201,53,0.15)] md:hover:border-brand-highlight/50 self-start h-auto">

                            <div class="mb-4 relative z-10 flex-1 flex flex-col">
                                <h3 class="text-lg font-black text-white mb-3 font-display uppercase tracking-widest">
                                    Custom</h3>
                                <!-- Integrated Credits Slider -->
                                <div class="bg-white/5 rounded-2xl border border-white/10 p-5 mt-4 mb-6 backdrop-blur-sm shadow-[inset_0_0_20px_rgba(255,255,255,0.02)]">
                                    <div class="flex justify-between items-center mb-5 px-1">
                                        <span class="text-[11px] font-bold text-slate-300 uppercase tracking-widest flex items-center gap-2">CREDIT : <span class="text-white text-xl font-black" x-text="plans.custom.credits"></span></span>
                                        <span class="text-slate-500 font-light">|</span>
                                        <span class="text-[11px] font-bold text-slate-300 uppercase tracking-widest flex items-center gap-2">PLATFORM : <span class="text-white text-xl font-black" x-text="plans.custom.platforms.length || 1"></span></span>
                                    </div>
                                    <p class="text-[10px] font-medium text-slate-400 text-center mb-3 flex items-center justify-center gap-1.5">
                                        <svg class="w-3 h-3 opacity-60" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 9l4-4 4 4m0 6l-4 4-4-4"/></svg>
                                        Slide the toggle to choose your credit amount.
                                    </p>
                                    <div class="relative px-1">
                                        <input type="range" min="20" max="100" step="1" x-model.number="plans.custom.credits" class="w-full accent-[#F7C935] h-1.5 bg-white/10 rounded-lg appearance-none cursor-pointer hover:accent-[#F7C935]/80 transition-all" />
                                    </div>
                                </div>

                                <!-- Platform Selector (Square Grid) -->
                                <div class="mb-6 relative z-10">
                                    <span class="text-[11px] font-medium text-slate-400 block text-center mb-2">Select the platforms you want us to manage.</span>
                                    <div class="grid grid-cols-3 gap-3">
                                        <!-- Facebook -->
                                        <button @click="togglePlatform('custom', 'fb')"
                                            :class="plans.custom.platforms.includes('fb') 
                                                ? 'border-[#F7C935] text-[#F7C935] bg-[#F7C935]/5 shadow-sm scale-[1.03]' 
                                                : 'border-white/10 bg-white/5 text-slate-400 md:hover:scale-105'"
                                            class="py-3 w-full rounded-xl border flex items-center justify-center transition-all duration-300 group/btn"
                                            aria-label="Facebook">
                                            <svg class="w-5 h-5 fill-current transition-transform duration-300 md:group-hover/btn:scale-110" viewBox="0 0 24 24">
                                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                            </svg>
                                        </button>
                                        <!-- Instagram -->
                                        <button @click="togglePlatform('custom', 'ig')"
                                            :class="plans.custom.platforms.includes('ig') 
                                                ? 'border-[#F7C935] text-[#F7C935] bg-[#F7C935]/5 shadow-sm scale-[1.03]' 
                                                : 'border-white/10 bg-white/5 text-slate-400 md:hover:scale-105'"
                                            class="py-3 w-full rounded-xl border flex items-center justify-center transition-all duration-300 group/btn"
                                            aria-label="Instagram">
                                            <svg class="w-5 h-5 fill-current transition-transform duration-300 md:group-hover/btn:scale-110" viewBox="0 0 24 24">
                                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                                            </svg>
                                        </button>
                                        <!-- TikTok -->
                                        <button @click="togglePlatform('custom', 'tt')"
                                            :class="plans.custom.platforms.includes('tt') 
                                                ? 'border-[#F7C935] text-[#F7C935] bg-[#F7C935]/5 shadow-sm scale-[1.03]' 
                                                : 'border-white/10 bg-white/5 text-slate-400 md:hover:scale-105'"
                                            class="py-3 w-full rounded-xl border flex items-center justify-center transition-all duration-300 group/btn"
                                            aria-label="TikTok">
                                            <img src="tiktoklogo.png" alt="TikTok" class="w-5 h-5 rounded-md object-contain transition-transform duration-300 md:group-hover/btn:scale-110">
                                        </button>
                                        <!-- LinkedIn -->
                                        <button @click="togglePlatform('custom', 'li')"
                                            :class="plans.custom.platforms.includes('li') 
                                                ? 'border-[#F7C935] text-[#F7C935] bg-[#F7C935]/5 shadow-sm scale-[1.03]' 
                                                : 'border-white/10 bg-white/5 text-slate-400 md:hover:scale-105'"
                                            class="py-3 w-full rounded-xl border flex items-center justify-center transition-all duration-300 group/btn"
                                            aria-label="LinkedIn">
                                            <svg class="w-5 h-5 fill-current transition-transform duration-300 md:group-hover/btn:scale-110" viewBox="0 0 24 24">
                                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                            </svg>
                                        </button>
                                        <!-- YouTube -->
                                        <button @click="togglePlatform('custom', 'yt')"
                                            :class="plans.custom.platforms.includes('yt') 
                                                ? 'border-[#F7C935] text-[#F7C935] bg-[#F7C935]/5 shadow-sm scale-[1.03]' 
                                                : 'border-white/10 bg-white/5 text-slate-400 md:hover:scale-105'"
                                            class="py-3 w-full rounded-xl border flex items-center justify-center transition-all duration-300 group/btn"
                                            aria-label="YouTube">
                                            <svg class="w-5 h-5 fill-current transition-transform duration-300 md:group-hover/btn:scale-110" viewBox="0 0 24 24">
                                                <path d="M23.498 6.163a3.003 3.003 0 0 0-2.11-2.107C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.388.511a3.002 3.002 0 0 0-2.11 2.107C0 8.053 0 12 0 12s0 3.947.502 5.837a3.003 3.003 0 0 0 2.11 2.107C4.495 20.455 12 20.455 12 20.455s7.505 0 9.388-.511a3.003 3.003 0 0 0 2.11-2.107C24 15.947 24 12 24 12s0-3.947-.502-5.837zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                            </svg>
                                        </button>
                                        <!-- Website -->
                                        <button @click="togglePlatform('custom', 'wb')"
                                            :class="plans.custom.platforms.includes('wb') 
                                                ? 'border-[#F7C935] text-[#F7C935] bg-[#F7C935]/5 shadow-sm scale-[1.03]' 
                                                : 'border-white/10 bg-white/5 text-slate-400 md:hover:scale-105'"
                                            class="py-3 w-full rounded-xl border flex items-center justify-center transition-all duration-300 group/btn"
                                            aria-label="Website">
                                            <svg class="w-5 h-5 stroke-current fill-none transition-transform duration-300 md:group-hover/btn:scale-110" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="10"/>
                                                <line x1="2" y1="12" x2="22" y2="12"/>
                                                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                                        <!-- What's Included Button -->
                            <div class="mb-4 mt-auto relative z-10">
                                <button
                                    @click="plans.custom.showFeatures = !plans.custom.showFeatures"
                                    class="w-full flex items-center justify-between px-5 py-3.5 bg-white rounded-full text-xs font-black text-slate-800 uppercase tracking-widest md:hover:bg-slate-50 transition-all border border-slate-200 shadow-md">
                                    <span class="flex items-center gap-2"><i data-lucide="list-checks"
                                            class="w-4 h-4 text-[#2E6083]"></i> What's Included</span>
                                    <svg class="w-4 h-4 text-slate-500 transition-transform duration-300" :class="plans.custom.showFeatures ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                
                                <div class="overflow-hidden transition-all duration-500 ease-in-out" 
                                     x-show="plans.custom.showFeatures"
                                     x-transition:enter="transition ease-out duration-300"
                                     x-transition:enter-start="opacity-0 max-h-0"
                                     x-transition:enter-end="opacity-100 max-h-[1000px]"
                                     x-transition:leave="transition ease-in duration-200"
                                     x-transition:leave-start="opacity-100 max-h-[1000px]"
                                     x-transition:leave-end="opacity-0 max-h-0">
                                     <div class="mt-3 text-left bg-white border border-slate-200/80 shadow-inner rounded-2xl p-4 space-y-4">
                                         <!-- Title Block -->
                                         <div class="pb-2 border-b border-slate-100">
                                             <span class="text-xs font-black text-[#2E6083] uppercase tracking-widest flex items-center gap-1.5">
                                                 <span class="w-1.5 h-1.5 rounded-full bg-[#2E6083]"></span>
                                                 What's Included Every Month
                                             </span>
                                         </div>
                                         
                                         <!-- Credits & Platforms -->
                                         <div class="flex flex-col gap-2 p-3 rounded-xl bg-slate-50 border border-slate-100/60 mb-4 mt-2">
                                             <div class="flex items-center justify-between">
                                                 <span class="text-xs font-bold text-slate-700">Number of Credits:</span>
                                                 <span class="text-xs font-black text-[#2E6083]" x-text="plans.custom.credits"></span>
                                             </div>
                                             <div class="flex items-center justify-between">
                                                 <span class="text-xs font-bold text-slate-700">Number of Platforms we manage:</span>
                                                 <span class="text-xs font-black text-[#2E6083]" x-text="plans.custom.platforms.length || 0"></span>
                                             </div>
                                         </div>
                                         
                                         <!-- Inclusions Grid -->
                                         <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                                             <template x-for="item in ['Dedicated Marketing Coordinator', 'Platform Management', 'Content Creation', 'Monthly Reporting', 'Strategizing', 'Unlimited Ad Campaigns', 'Unlimited Postings', 'SEO']">
                                                 <div class="flex items-center gap-2 p-2 rounded-xl bg-slate-50 border border-slate-100/60">
                                                     <span class="flex h-4 w-4 shrink-0 items-center justify-center rounded-full bg-emerald-50 text-emerald-500">
                                                         <svg class="h-2.5 w-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4">
                                                             <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                         </svg>
                                                     </span>
                                                     <span class="text-xs font-bold text-slate-700 leading-tight" x-text="item"></span>
                                                 </div>
                                             </template>
                                         </div>
                                         
                                         <!-- Deliverables Subcard -->
                                         <div class="p-4 rounded-2xl bg-gradient-to-br from-[#f8fafc] to-[#e2e8f0]/50 border border-[#2E6083]/10 shadow-[inset_0_0_20px_rgba(30,64,175,0.03)] space-y-3">
                                             <h4 class="text-xs font-black uppercase tracking-widest text-[#102a43] flex items-center gap-1.5">
                                                 <span class="h-1.5 w-1.5 rounded-full bg-[#2E6083] animate-pulse"></span>
                                                 Tangible Monthly Deliverables
                                             </h4>
                                             <div class="space-y-2">
                                                 <div class="flex items-center gap-2 text-xs font-bold text-slate-700">
                                                     <span class="text-[#2E6083]">✦</span>
                                                     <span>Monthly Content Plan</span>
                                                 </div>
                                                 <div class="flex items-center gap-2 text-xs font-bold text-slate-700">
                                                     <span class="text-[#2E6083]">✦</span>
                                                     <span>Monthly Ad Plan</span>
                                                 </div>
                                                 <div class="flex flex-col gap-2">
                                                     <div class="flex items-center gap-2 text-xs font-black text-[#102a43]">
                                                         <span class="text-[#2E6083]">✦</span>
                                                         <span>Monthly Performance & Insight Report</span>
                                                     </div>
                                                     <!-- Tag pills -->
                                                     <div class="flex flex-wrap gap-1.5 pl-3.5">
                                                         <template x-for="sub in ['Ad Campaign Metrics', 'Ad Performance Breakdown', 'Credit Usage Report', 'KPI Report', 'Platform Performance Metrics', 'Platform Performance Breakdown']">
                                                             <span class="px-2 py-0.5 rounded bg-white border border-[#2E6083]/20 text-[#2E6083] text-[11px] font-bold shadow-sm" x-text="sub"></span>
                                                         </template>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                </div>

                            </div>

                            <!-- Integrated Ad Budget -->
                            <div class="mb-4 p-3.5 rounded-xl bg-slate-50 border border-slate-200 flex flex-col">
                                <div class="flex items-center justify-between">
                                    <div class="flex flex-col items-start text-left gap-0.5">
                                         <div class="flex items-center gap-2">
                                        <span class="text-[10px] font-bold text-slate-500 uppercase tracking-wider">Ad
                                            Budget</span>
                                        <button @click="plans.custom.showInput = !plans.custom.showInput"
                                            class="text-brand-secondary md:hover:text-brand-highlight transition-colors"><i
                                                data-lucide="plus-circle" class="w-3.5 h-3.5"></i></button>
                                    </div>
                                         <span class="text-[11px] font-medium text-slate-400 capitalize">Specify your monthly ad budget</span>
                                     </div>
                                    <div class="flex items-center gap-1 text-right">
                                        <span class="text-[10px] font-bold text-slate-400">Rs.</span>
                                        <span class="text-base font-black text-brand-secondary leading-none"
                                            x-text="plans.custom.budget.toLocaleString()"></span>
                                    </div>
                                </div>
                                <div class="overflow-hidden transition-all duration-500 ease-in-out"
                                    :class="plans.custom.showInput ? 'max-h-[100px] opacity-100 mt-3' : 'max-h-0 opacity-0 mt-0'">
                                    <input type="number" x-model.number="plans.custom.budget"
                                        class="w-full bg-white border border-slate-200 rounded-md py-1.5 px-3 text-xs font-black focus:border-brand-secondary outline-none text-brand-darkest"
                                        placeholder="0">
                                </div>
                            </div>

                            <div class="mt-auto pt-4 border-t border-slate-200 transition-all duration-500">
                                <div class="flex items-center justify-between mb-4">
                                    <span
                                        class="text-[0.65rem] font-bold text-white uppercase tracking-widest">Total
                                        Price</span>
                                    <span class="text-xl font-black text-white"
                                        x-text="'Rs. ' + (plans.custom.base + plans.custom.budget).toLocaleString()"></span>
                                </div>
                                <button @click="selectedPlan = selectedPlan === 'custom' ? null : 'custom'"
                                    :class="selectedPlan === 'custom' ? 'bg-brand-secondary text-brand-darkest shadow-md shadow-brand-secondary/30' : 'bg-slate-100 text-slate-600 md:hover:bg-slate-200 md:hover:text-slate-800'"
                                    class="w-full py-3.5 rounded-xl font-black uppercase text-xs tracking-widest transition-all">
                                    <span x-text="selectedPlan === 'custom' ? 'Selected' : 'Select Plan'"></span>
                                </button>
                            </div>
                        </div>
                    </div>

                                        <!-- Checkout Section -->
                    <div class="mt-16 text-center w-full">
                        <button @click="submitCheckout()" :disabled="!selectedPlan"
                            :class="selectedPlan ? 'bg-brand-highlight text-brand-darkest shadow-xl shadow-brand-highlight/20 md:hover:scale-105' : 'bg-slate-100 text-slate-400 cursor-not-allowed border border-slate-200'"
                            class="px-12 py-5 rounded-2xl font-black uppercase tracking-widest text-lg transition-all duration-300 flex items-center justify-center gap-3 mx-auto">
                            <span>Complete Checkout</span>
                            <i data-lucide="arrow-right" class="w-5 h-5"></i>
                        </button>
                        <p x-show="!selectedPlan" class="text-sm font-bold text-slate-500 mt-4">Please select a
                            plan above to continue.</p>
                    </div>
                </div>

                <!-- Success State -->
                <div x-show="checkoutSuccess" x-transition:enter="transition ease-out duration-500 delay-300"
                    x-transition:enter-start="opacity-0 translate-y-8"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="mt-8 bg-white rounded-[2rem] border border-slate-200 shadow-2xl p-12 text-center max-w-2xl mx-auto flex flex-col items-center justify-center">
                    <div
                        class="w-20 h-20 bg-brand-secondary/10 border border-brand-secondary/20 rounded-full flex items-center justify-center mb-6 shadow-[0_0_20px_rgba(189,223,232,0.2)]">
                        <i data-lucide="check" class="w-10 h-10 text-brand-secondary"></i>
                    </div>
                    <h3 class="text-2xl md:text-3xl font-black text-brand-darkest mb-4 font-display">Your package has
                        been sent
                        to our team!</h3>
                    <p class="text-base md:text-lg font-medium text-slate-600 mb-8">We will reach out to you
                        shortly to finalize your setup.</p>
                    <button @click="checkoutSuccess = false; selectedPlan = null"
                        class="text-brand-highlight font-bold uppercase tracking-widest text-xs md:hover:text-brand-darkest transition-colors">Return
                        to Plans</button>
                </div>
            </div>

        </div>

        
        <!-- Checkout Form Modal -->
        <div x-show="checkoutModalOpen"
            class="fixed inset-0 z-[1000] flex items-center justify-center p-4 overflow-hidden"
            x-cloak>

            <!-- Backdrop -->
            <div class="fixed inset-0 bg-slate-950/60 backdrop-blur-md transition-opacity" @click="checkoutModalOpen = false"
                x-show="checkoutModalOpen" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"></div>

            <!-- Modal Content -->
            <div x-show="checkoutModalOpen" x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-8 scale-95" x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 scale-100" x-transition:leave-end="opacity-0 translate-y-8 scale-95"
                class="relative bg-white rounded-3xl p-6 md:p-8 max-w-lg w-full shadow-2xl z-10 border border-slate-100 max-h-[90vh] overflow-y-auto">
                
                <!-- Close Button -->
                <button @click="checkoutModalOpen = false"
                    class="absolute top-5 right-5 text-slate-400 md:hover:text-slate-600 transition-colors bg-slate-50 md:hover:bg-slate-100 p-2 rounded-full">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Header -->
                <div class="text-center mb-6">
                    <div class="w-12 h-12 bg-[#2E6083]/10 text-[#2E6083] rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black text-slate-800 tracking-tight uppercase font-display">Complete Your Order</h3>
                    <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mt-2">Almost there! Fill in your details below.</p>
                </div>

                <!-- Package Summary -->
                <div class="bg-slate-50 border border-slate-200 rounded-2xl p-4 mb-6">
                    <h4 class="text-[10px] font-black uppercase tracking-widest text-slate-400 mb-3 text-center">Package Summary</h4>
                    <div class="mb-4 bg-white p-3 rounded-xl border border-slate-200/60 shadow-sm">
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2 text-center">Number of credits in your plan</label>
                        <div class="grid grid-cols-3 gap-2">
                            <button type="button" @click="selectedPlan = 'startup'" 
                                :class="selectedPlan === 'startup' ? 'bg-[#2E6083] text-white shadow-md border-transparent' : 'bg-slate-50 text-slate-600 border border-slate-200 md:hover:bg-slate-100'" 
                                class="py-2.5 rounded-lg font-black text-sm transition-all uppercase tracking-wider">20</button>
                            <button type="button" @click="selectedPlan = 'enterprise'" 
                                :class="selectedPlan === 'enterprise' ? 'bg-[#2E6083] text-white shadow-md border-transparent' : 'bg-slate-50 text-slate-600 border border-slate-200 md:hover:bg-slate-100'" 
                                class="py-2.5 rounded-lg font-black text-sm transition-all uppercase tracking-wider">25</button>
                            <button type="button" @click="selectedPlan = 'custom'" 
                                :class="selectedPlan === 'custom' ? 'bg-brand-highlight text-brand-darkest shadow-md border-transparent' : 'bg-slate-50 text-slate-600 border border-slate-200 md:hover:bg-slate-100'" 
                                class="py-2.5 rounded-lg font-black text-sm transition-all uppercase tracking-wider">Custom</button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between mb-2" x-show="selectedPlan === 'custom'">
                        <span class="text-sm font-bold text-slate-600">Calculated Credits:</span>
                        <span class="text-sm font-black text-brand-highlight px-2 py-0.5 rounded bg-brand-darkest" x-text="(plans.custom || {}).credits"></span>
                    </div>
                    <div class="flex items-center justify-between mb-1.5">
                        <span class="text-sm font-bold text-slate-600">Platforms Selected:</span>
                        <span class="text-sm font-black text-slate-800" x-text="selectedPlan ? (plans[selectedPlan] || {platforms: []}).platforms.length : ''"></span>
                    </div>
                    <div class="flex flex-wrap gap-1.5 mb-4 justify-end">
                        <template x-for="p in (selectedPlan ? (plans[selectedPlan] || {platforms: []}).platforms : [])">
                            <span class="px-2 py-0.5 rounded bg-white border border-[#2E6083]/20 text-[10px] font-bold text-[#2E6083] uppercase shadow-sm" x-text="
                                p === 'fb' ? 'Facebook' :
                                p === 'ig' ? 'Instagram' :
                                p === 'tt' ? 'TikTok' :
                                p === 'li' ? 'LinkedIn' :
                                p === 'yt' ? 'YouTube' :
                                p === 'wb' ? 'Website' : p
                            "></span>
                        </template>
                    </div>
                    <div class="pt-3 mt-2 border-t border-slate-200/60">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-bold text-slate-600">Package Cost:</span>
                            <span class="text-sm font-black text-slate-800" x-text="selectedPlan ? 'Rs. ' + (plans[selectedPlan] || {}).base.toLocaleString() : ''"></span>
                        </div>
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-sm font-bold text-slate-600">Ad Budget:</span>
                            <span class="text-sm font-black text-slate-800" x-text="selectedPlan ? 'Rs. ' + (plans[selectedPlan] || {}).budget.toLocaleString() : ''"></span>
                        </div>
                        <div class="pt-3 border-t border-slate-200 flex items-center justify-between">
                            <span class="text-sm font-black text-slate-800 uppercase">Total:</span>
                            <span class="text-lg font-black text-brand-highlight" x-text="selectedPlan ? 'Rs. ' + ((plans[selectedPlan] || {}).base + (plans[selectedPlan] || {}).budget).toLocaleString() : ''"></span>
                        </div>
                    </div>
                </div>

                <!-- Form Fields -->
                <form @submit.prevent="processCheckout" class="space-y-4">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Client Name</label>
                        <input type="text" x-model="checkoutForm.clientName" required
                            class="w-full px-4 py-3 rounded-xl bg-white border border-slate-200 text-sm font-bold text-slate-800 focus:border-[#2E6083] focus:ring-2 focus:ring-[#2E6083]/20 transition-all outline-none"
                            placeholder="John Doe">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Contact Number</label>
                        <input type="tel" x-model="checkoutForm.contactNumber" required
                            class="w-full px-4 py-3 rounded-xl bg-white border border-slate-200 text-sm font-bold text-slate-800 focus:border-[#2E6083] focus:ring-2 focus:ring-[#2E6083]/20 transition-all outline-none"
                            placeholder="+94 77 123 4567">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Brand Name</label>
                        <input type="text" x-model="checkoutForm.brandName" required
                            class="w-full px-4 py-3 rounded-xl bg-white border border-slate-200 text-sm font-bold text-slate-800 focus:border-[#2E6083] focus:ring-2 focus:ring-[#2E6083]/20 transition-all outline-none"
                            placeholder="Your Brand LLC">
                    </div>

                    <button type="submit"
                        class="w-full mt-4 py-4 rounded-xl bg-brand-highlight text-brand-darkest font-black uppercase text-sm tracking-widest md:hover:scale-[1.02] transition-all shadow-lg shadow-brand-highlight/20 flex items-center justify-center gap-2">
                        <span>Submit Package Request</span>
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>

        <!-- Global What's Included Modal -->
        <div x-show="modalOpen"
            class="fixed inset-0 z-[1000] flex items-end md:items-center justify-center p-0 md:p-4 overflow-hidden"
            x-cloak>

            <div class="fixed inset-0 bg-slate-950/40 backdrop-blur-md transition-opacity" @click="modalOpen = false"
                x-show="modalOpen" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"></div>

            <div x-show="modalOpen" x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-full md:translate-y-0 md:scale-95" x-transition:enter-end="opacity-100 translate-y-0 md:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 md:scale-100" x-transition:leave-end="opacity-0 translate-y-full md:translate-y-0 md:scale-95"
                class="relative bg-white rounded-t-[2rem] md:rounded-[2rem] p-6 md:p-8 max-w-2xl w-full shadow-2xl z-10 border-t md:border border-slate-100 max-h-[92vh] md:max-h-[85vh] overflow-y-auto transition-all duration-300">

                <!-- Mobile Bottom Sheet Handlebar -->
                <div class="md:hidden flex justify-center mb-5 -mt-1">
                    <div class="w-12 h-1.5 bg-slate-200 rounded-full"></div>
                </div>

                <button @click="modalOpen = false"
                    class="absolute top-5 right-5 text-slate-400 md:hover:text-slate-600 transition-colors">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <div class="mb-6 pb-4 border-b border-slate-100">
                    <h3 class="text-xl md:text-2xl font-black text-slate-800 tracking-tight font-display uppercase"
                        x-text="planTitle === 'RESEARCH & TESTING' ? planTitle : planTitle + ' INCLUSIONS'"></h3>
                    <p class="text-xs text-slate-400 font-bold uppercase tracking-wider mt-1"
                        x-text="planTitle === 'RESEARCH & TESTING' ? 'What You Get' : 'What\'s Included Every Month'">
                    </p>
                </div>

                <!-- Retainer Inclusions (Startup / Enterprise / Custom) -->
                <div x-show="planTitle !== 'RESEARCH & TESTING'" class="space-y-6">

                    <div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
                            <template
                                x-for="item in ['Dedicated Marketing Coordinator', 'Platform Management', 'Content Creation', 'Monthly Reporting', 'Strategizing', 'Unlimited Ad Campaigns', 'Unlimited Postings', 'SEO']">
                                <div
                                    class="flex items-center gap-2.5 p-2.5 rounded-xl bg-slate-50 border border-slate-100/60">
                                    <span
                                        class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-emerald-50 text-emerald-500">
                                        <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="3.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </span>
                                    <span class="text-xs font-bold text-slate-700" x-text="item"></span>
                                </div>
                            </template>
                        </div>
                    </div>

                    <div
                        class="p-6 rounded-2xl bg-gradient-to-br from-[#f8fafc] to-[#e2e8f0]/50 border border-[#2E6083]/10 shadow-[inset_0_0_20px_rgba(30,64,175,0.03)]">
                        <h4
                            class="text-xs font-black uppercase tracking-widest text-[#102a43] mb-4 flex items-center gap-2.5 drop-shadow-sm">
                            <span
                                class="h-2 w-2 rounded-full bg-[#2E6083] shadow-[0_0_8px_rgba(30,64,175,0.6)] animate-pulse"></span>
                            Tangible Monthly Deliverables
                        </h4>

                        <div class="space-y-3.5">
                            <div class="flex items-center gap-2.5 text-xs font-bold text-slate-700">
                                <span class="text-[#2E6083] drop-shadow-sm">✦</span> Monthly Content Plan
                            </div>
                            <div class="flex items-center gap-2.5 text-xs font-bold text-slate-700">
                                <span class="text-[#2E6083] drop-shadow-sm">✦</span> Monthly Ad Plan
                            </div>
                            <div class="flex items-start gap-2.5">
                                <span class="text-[#2E6083] mt-0.5 drop-shadow-sm">✦</span>
                                <div class="space-y-2.5">
                                    <p class="text-xs font-black text-[#102a43]">Monthly Performance & Insight Report
                                    </p>
                                    <div class="flex flex-wrap gap-2 pl-1">
                                        <template
                                            x-for="sub in ['Ad Campaign Metrics', 'Ad Performance Breakdown', 'Credit Usage Report', 'KPI Report', 'Platform Performance Metrics', 'Platform Performance Breakdown']">
                                            <span
                                                class="inline-block px-2.5 py-1 rounded-md bg-white border border-[#2E6083]/20 text-[10px] font-bold text-[#2E6083] shadow-sm"
                                                x-text="sub"></span>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Research & Testing Inclusions -->
                <div x-show="planTitle === 'RESEARCH & TESTING'" class="space-y-6">
                    <p class="text-sm font-medium text-slate-600 leading-relaxed bg-slate-50 p-5 rounded-2xl border border-slate-100/60"
                        x-text="planDesc"></p>

                    <div
                        class="p-6 rounded-2xl bg-gradient-to-br from-[#f8fafc] to-[#e2e8f0]/50 border border-[#2E6083]/10 shadow-[inset_0_0_20px_rgba(30,64,175,0.03)]">
                        <h4
                            class="text-xs font-black uppercase tracking-widest text-[#102a43] mb-3 flex items-center gap-2.5 drop-shadow-sm">
                            <span
                                class="h-2 w-2 rounded-full bg-[#2E6083] shadow-[0_0_8px_rgba(30,64,175,0.6)] animate-pulse"></span>
                            Detailed Plans
                        </h4>
                        <p class="text-slate-500 text-xs leading-relaxed font-medium mb-4 pl-[18px]">
                            Strategic roadmaps specifically tailored to elevate your brand's digital identity.
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                            <template x-for="item in detailedPlans">
                                <div
                                    class="flex items-start gap-3 p-3.5 rounded-xl bg-white border border-slate-100 shadow-sm md:hover:border-[#2E6083]/30 md:hover:shadow-md transition-all group/item">
                                    <div
                                        class="w-7 h-7 rounded-full bg-[#2E6083]/5 flex items-center justify-center shrink-0 mt-0.5 group-hover/item:bg-[#2E6083] transition-colors">
                                        <svg class="w-4 h-4 text-[#2E6083] group-hover/item:text-white transition-colors"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <span class="text-slate-700 text-sm font-bold leading-relaxed" x-text="item"></span>
                                </div>
                            </template>
                        </div>

                        <h4
                            class="text-xs font-black uppercase tracking-widest text-[#102a43] mb-3 flex items-center gap-2.5 drop-shadow-sm border-t border-[#2E6083]/10 pt-6">
                            <span
                                class="h-2 w-2 rounded-full bg-[#2E6083] shadow-[0_0_8px_rgba(30,64,175,0.6)] animate-pulse"></span>
                            Performance Reports
                        </h4>
                        <p class="text-slate-500 text-xs leading-relaxed font-medium mb-4 pl-[18px]">
                            Actionable, data-backed insights derived from real-world market testing.
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <template x-for="item in performanceReports">
                                <div
                                    class="flex items-start gap-3 p-3.5 rounded-xl bg-white border border-slate-100 shadow-sm md:hover:border-[#2E6083]/30 md:hover:shadow-md transition-all group/item">
                                    <div
                                        class="w-7 h-7 rounded-full bg-[#2E6083]/5 flex items-center justify-center shrink-0 mt-0.5 group-hover/item:bg-[#2E6083] transition-colors">
                                        <svg class="w-4 h-4 text-[#2E6083] group-hover/item:text-white transition-colors"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <span class="text-slate-700 text-sm font-bold leading-relaxed" x-text="item"></span>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>

                <div class="mt-6 pt-4 border-t border-slate-100">
                    <button @click="modalOpen = false"
                        class="w-full py-3 bg-[#102a43] md:hover:bg-[#2E6083] text-white rounded-xl font-bold text-xs uppercase tracking-widest transition-all duration-300">
                        Close Details
                    </button>
                </div>

            </div>
        </div>
    </div>
</section>



