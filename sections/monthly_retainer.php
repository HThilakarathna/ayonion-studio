<div id="pricing" class="scroll-mt-32"></div>
<!-- Monthly Retainer Section -->
<section id="monthly-retainer" class="py-32 bg-[#FFFFFF] relative overflow-hidden" x-data="{ 
            plans: {
                startup: { 
                    budget: 0, 
                    showInput: false, 
                    base: 90000,
                    platforms: ['fb'],
                    maxPlatforms: 1
                },
                enterprise: { 
                    budget: 0, 
                    showInput: false, 
                    base: 120000,
                    platforms: ['fb', 'ig'],
                    maxPlatforms: 2
                },
                custom: { 
                    budget: 0, 
                    showInput: false, 
                    credits: 30,
                    platforms: ['fb'],
                    pricePerCredit: 4000,
                    pricePerPlatform: 15000,
                    get base() { return (this.credits * this.pricePerCredit) + (this.platforms.length * this.pricePerPlatform) }
                }
            },
            availablePlatforms: [
                ['fb', 'Facebook', `<svg viewBox="0 0 24 24" class="w-5 h-5 fill-current">
    <path
        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
    </svg>`, '#1877F2', 'bg-[#1877F2] border-[#1877F2] text-white shadow-lg shadow-[#1877F2]/30', 'md:hover:border-slate-400'],
    ['ig', 'Instagram', `<svg viewBox="0 0 24 24" class="w-5 h-5 fill-current">
        <path
            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
    </svg>`, '#E4405F', 'bg-gradient-to-tr from-[#f09433] via-[#dc2743] to-[#bc1888] border-transparent text-white shadow-lg shadow-[#dc2743]/30', 'md:hover:border-slate-400'],
    ['yt', 'YouTube', `<svg viewBox="0 0 24 24" class="w-5 h-5 fill-current">
        <path
            d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.377.505 9.377.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
    </svg>`, '#FF0000', 'bg-[#FF0000] border-[#FF0000] text-white shadow-lg shadow-[#FF0000]/30', 'md:hover:border-slate-400'],
    ['li', 'LinkedIn', `<svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>`, '#0A66C2', 'bg-[#0A66C2] border-[#0A66C2] text-white shadow-lg shadow-[#0A66C2]/30', 'md:hover:border-slate-400'],
    ['go', 'Google', `<svg viewBox="0 0 24 24" class="w-5 h-5 fill-current">
        <path
            d="M12.48 10.92v3.28h7.84c-.24 1.84-2.21 5.4-7.84 5.4-4.81 0-8.68-4-8.68-8.92s3.87-8.92 8.68-8.92c2.73 0 4.56 1.16 5.6 2.16l2.59-2.5c-1.66-1.55-3.82-2.5-8.19-2.5-6.63 0-12 5.37-12 12s5.37 12 12 12c6.92 0 11.52-4.87 11.52-11.72 0-.78-.08-1.38-.24-1.97h-11.28z" />
    </svg>`, '#4285F4', 'bg-[#4285F4] border-[#4285F4] text-white shadow-lg shadow-[#4285F4]/30', 'md:hover:border-slate-400'],
    ['tt', 'TikTok', `<svg viewBox="0 0 24 24" class="w-5 h-5 fill-current">
        <path
            d="M12.525.02c1.31 0 2.591.214 3.794.608V7.22c-1.287-.878-2.831-1.413-4.492-1.413-.033 0-.066.001-.1.001v4.442c.033-.002.067-.003.1-.003 2.154 0 4.02 1.121 5.083 2.815V12c0 3.314-2.686 6-6 6s-6-2.686-6-6 2.686-6 6-6c.034 0 .067.001.1.001V1.521c-.033-.001-.066-.001-.1-.001C5.373 1.52 0 6.893 0 13.52s5.373 12 12 12 12-5.373 12-12c0-.129-.002-.258-.006-.386C23.616 10.516 21.406 8.489 18.8 8.01c.01-.2.016-.401.016-.604V0h-6.291z" />
    </svg>`, '#000000', 'bg-black border-black text-white shadow-lg shadow-black/30', 'md:hover:bg-black md:hover:border-black md:hover:text-white'],
    ['cu', 'Website', `<svg viewBox="0 0 24 24" class="w-5 h-5 fill-current">
        <path
            d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm0 22C6.486 22 2 17.514 2 12S6.486 2 12 2s10 4.486 10 10-4.486 10-10 10zm-1-18.914v17.828C6.914 20 4.086 17.086 4.086 12S6.914 4 11 3.086zm2 0C17.086 4 19.914 6.914 19.914 12S17.086 20 13 20.914V3.086zM4.34 7h15.32c-1.28-1.57-2.92-2.78-4.83-3.48-.96 1.4-1.81 3.04-2.51 4.88l-.32-1.4c-.7-1.84-1.55-3.48-2.51-4.88-1.91.7-3.55 1.91-4.83 3.48zM4.34 17h15.32c-1.28 1.57-2.92 2.78-4.83 3.48-.96-1.4-1.81-3.04-2.51-4.88l-.32 1.4c-.7 1.84-1.55-3.48-2.51 4.88-1.91-.7-3.55-1.91-4.83-3.48z" />
    </svg>`, '#618698', 'bg-[#618698] border-[#618698] text-white shadow-lg shadow-[#618698]/30', 'md:hover:border-slate-400']
            ],
    togglePlatform(planKey, platformId) {
    let plan = this.plans[planKey];
    if (plan.platforms.includes(platformId)) {
    if (plan.platforms.length > 1) {
    plan.platforms = plan.platforms.filter(p => p !== platformId);
    }
    } else {
    if (!plan.maxPlatforms || plan.platforms.length < plan.maxPlatforms) { plan.platforms.push(platformId); } else if
        (plan.maxPlatforms===1) { plan.platforms=[platformId]; } } // Re-trigger lucide icons after Alpine updates the
        DOM setTimeout(()=> lucide.createIcons(), 10);
        }
        }">

        <!-- Background Decor -->
        <div
            class="absolute top-0 right-0 w-[500px] h-[500px] bg-brand-secondary/5 rounded-full blur-[120px] pointer-events-none">
        </div>
        <div
            class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-brand-secondary/5 rounded-full blur-[100px] pointer-events-none">
        </div>

        <div class="container-custom relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-24" data-aos="fade-up">
                <h2 class="text-3xl md:text-5xl font-black text-brand-deep tracking-tighter mb-6 font-display">Start
                    your Monthly Retainer Now!</h2>
                <p class="text-lg md:text-xl text-slate-500 max-w-3xl mx-auto font-medium leading-relaxed">
                    Choose the plan that best fits your business needs. Select your preferred advertising platforms,
                    review
                    what’s included, and calculate your total cost instantly.
                </p>
            </div>

            <!-- Pricing Cards Grid -->
            <div class="grid lg:grid-cols-3 gap-8 items-stretch">

                <!-- Startup Plan -->
                <div class="flex flex-col" data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="bg-white p-5 md:p-6 rounded-[2rem] border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-500 flex-1 flex flex-col group text-center max-w-[340px] mx-auto w-full">
                        <div class="mb-4">
                            <h3 class="text-xl font-black text-brand-deep mb-3 font-display">Startup</h3>
                            <div class="space-y-1">
                                <div
                                    class="flex items-center justify-between text-sm font-black text-brand-darkest uppercase tracking-tighter bg-white shadow-sm px-3 py-2 rounded-lg border border-slate-200">
                                    <span>Credit :</span>
                                    <span class="text-brand-deep text-lg">20</span>
                                </div>
                                <div
                                    class="flex items-center justify-between text-sm font-black text-brand-darkest uppercase tracking-tighter bg-white shadow-sm px-3 py-2 rounded-lg border border-slate-200 mt-2">
                                    <span>Platform :</span>
                                    <span class="text-brand-deep text-lg">1</span>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 flex-1">
                            <span
                                class="text-[0.6rem] font-black uppercase tracking-widest text-brand-deep mb-3 block">Select
                                Platform</span>
                            <div class="grid grid-cols-2 gap-2">
                                <template x-for="p in availablePlatforms" :key="p[0]">
                                    <button @click="togglePlatform('startup', p[0])"
                                        :class="plans.startup.platforms.includes(p[0]) ? p[4] : 'bg-brand-dark border border-brand-accent/50 text-white/80 ' + p[5]"
                                        class="p-2.5 rounded-xl border transition-all flex flex-col items-center justify-center gap-1.5 group/btn overflow-hidden md:hover:scale-105 duration-300">
                                        <div class="transition-all duration-300"
                                            :class="plans.startup.platforms.includes(p[0]) ? 'scale-110' : 'opacity-80 md:group-hover/btn:opacity-100 md:group-hover/btn:scale-110'"
                                            x-html="p[2]">
                                        </div>
                                        <span
                                            class="text-[0.5rem] font-black uppercase tracking-widest leading-tight transition-colors"
                                            :class="plans.startup.platforms.includes(p[0]) ? 'text-white' : 'text-white/60 md:group-hover/btn:text-white'"
                                            x-text="p[1]"></span>
                                    </button>
                                </template>
                            </div>
                        </div>

                        <!-- Integrated Ad Budget -->
                        <div class="mb-4 p-4 rounded-2xl bg-slate-50 border border-dashed border-slate-200">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-[0.6rem] font-black text-brand-deep uppercase tracking-widest">Ad
                                    Budget</span>
                                <button @click="plans.startup.showInput = !plans.startup.showInput"
                                    class="text-brand-deep hover:scale-110 transition-transform">
                                    <i data-lucide="plus-circle" class="w-4 h-4"></i>
                                </button>
                            </div>
                            <div class="flex items-center gap-1.5 mb-1">
                                <span class="text-[0.65rem] font-black text-brand-deep">Rs.</span>
                                <span class="text-lg font-black text-brand-deep"
                                    x-text="plans.startup.budget.toLocaleString()"></span>
                            </div>
                            <div x-show="plans.startup.showInput" x-transition
                                class="mt-2 pt-2 border-t border-slate-200">
                                <input type="number" x-model.number="plans.startup.budget"
                                    class="w-full bg-white border border-slate-200 rounded-lg py-1.5 px-3 text-sm font-black focus:outline-none focus:border-brand-secondary"
                                    placeholder="0">
                            </div>
                        </div>

                        <div class="mb-4 pt-4 border-t border-slate-100">
                            <div class="flex items-baseline gap-1.5 justify-center">
                                <span class="text-xs font-black text-brand-deep uppercase">Rs.</span>
                                <span class="text-2xl font-black text-brand-deep tracking-tighter">90,000</span>
                            </div>
                            <span
                                class="text-[0.5rem] font-black text-brand-deep uppercase tracking-widest mt-0.5 block mb-4">Base
                                Retainer Fee</span>

                            <div class="flex items-center justify-between mb-4 px-2">
                                <span class="text-[0.55rem] font-black text-brand-deep uppercase tracking-widest">Total
                                    Price</span>
                                <span class="text-xl font-black text-emerald-600"
                                    x-text="'Rs. ' + (plans.startup.base + plans.startup.budget).toLocaleString()"></span>
                            </div>

                            <button @click="$dispatch('open-modal', 'startup')"
                                class="w-full py-3 rounded-xl bg-brand-deep text-white font-black uppercase text-[0.65rem] tracking-widest hover:bg-brand-dark transition-all shadow-lg mb-2">
                                Select Plan
                            </button>

                            <button @click="$dispatch('open-modal', 'startup')"
                                class="w-full py-2.5 rounded-xl bg-white border border-slate-200 text-brand-deep font-black uppercase text-[0.55rem] tracking-widest hover:bg-slate-50 transition-all">
                                What's Included
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Enterprise Plan -->
                <div class="flex flex-col" data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="bg-white p-5 md:p-6 rounded-[2rem] border-2 border-brand-secondary shadow-xl hover:shadow-brand-secondary/10 transition-all duration-500 flex-1 flex flex-col relative overflow-hidden text-center max-w-[340px] mx-auto w-full">
                        <div
                            class="absolute top-0 right-0 bg-brand-secondary text-brand-deep px-4 py-1.5 rounded-bl-2xl text-[0.5rem] font-black uppercase tracking-widest">
                            Most Popular</div>

                        <div class="mb-4">
                            <h3 class="text-xl font-black text-brand-deep mb-3 font-display">Enterprise</h3>
                            <div class="space-y-1">
                                <div
                                    class="flex items-center justify-between text-sm font-black text-brand-darkest uppercase tracking-tighter bg-white shadow-sm px-3 py-2 rounded-lg border border-slate-200">
                                    <span>Credit :</span>
                                    <span class="text-brand-deep text-lg">25</span>
                                </div>
                                <div
                                    class="flex items-center justify-between text-sm font-black text-brand-darkest uppercase tracking-tighter bg-white shadow-sm px-3 py-2 rounded-lg border border-slate-200 mt-2">
                                    <span>Platform :</span>
                                    <span class="text-brand-deep text-lg">2</span>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 flex-1">
                            <span
                                class="text-[0.6rem] font-black uppercase tracking-widest text-brand-deep mb-3 block">Select
                                Platforms (Max 2)</span>
                            <div class="grid grid-cols-2 gap-2">
                                <template x-for="p in availablePlatforms" :key="p[0]">
                                    <button @click="togglePlatform('enterprise', p[0])"
                                        :class="plans.enterprise.platforms.includes(p[0]) ? p[4] : 'bg-brand-dark border border-brand-accent/50 text-white/80 ' + p[5]"
                                        class="p-2.5 rounded-xl border transition-all flex flex-col items-center justify-center gap-1.5 group/btn overflow-hidden md:hover:scale-105 duration-300">
                                        <div class="transition-all duration-300"
                                            :class="plans.enterprise.platforms.includes(p[0]) ? 'scale-110' : 'opacity-80 md:group-hover/btn:opacity-100 md:group-hover/btn:scale-110'"
                                            x-html="p[2]">
                                        </div>
                                        <span
                                            class="text-[0.5rem] font-black uppercase tracking-widest leading-tight transition-colors"
                                            :class="plans.enterprise.platforms.includes(p[0]) ? 'text-white' : 'text-white/60 md:group-hover/btn:text-white'"
                                            x-text="p[1]"></span>
                                    </button>
                                </template>
                            </div>
                        </div>

                        <!-- Integrated Ad Budget -->
                        <div class="mb-4 p-4 rounded-2xl bg-slate-50 border border-dashed border-slate-200">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-[0.6rem] font-black text-brand-deep uppercase tracking-widest">Ad
                                    Budget</span>
                                <button @click="plans.enterprise.showInput = !plans.enterprise.showInput"
                                    class="text-brand-deep hover:scale-110 transition-transform">
                                    <i data-lucide="plus-circle" class="w-4 h-4"></i>
                                </button>
                            </div>
                            <div class="flex items-center gap-1.5 mb-1">
                                <span class="text-[0.65rem] font-black text-brand-deep uppercase">Rs.</span>
                                <span class="text-lg font-black text-brand-deep"
                                    x-text="plans.enterprise.budget.toLocaleString()"></span>
                            </div>
                            <div x-show="plans.enterprise.showInput" x-transition
                                class="mt-2 pt-2 border-t border-slate-200">
                                <input type="number" x-model.number="plans.enterprise.budget"
                                    class="w-full bg-white border border-slate-200 rounded-lg py-1.5 px-3 text-sm font-black focus:outline-none focus:border-brand-secondary"
                                    placeholder="0">
                            </div>
                        </div>

                        <div class="mb-4 pt-4 border-t border-slate-100">
                            <div class="flex items-baseline gap-1.5 justify-center">
                                <span class="text-xs font-black text-brand-deep uppercase">Rs.</span>
                                <span class="text-2xl font-black text-brand-deep tracking-tighter">120,000</span>
                            </div>
                            <span
                                class="text-[0.5rem] font-black text-brand-deep uppercase tracking-widest mt-0.5 block mb-4">Base
                                Retainer Fee</span>

                            <div class="flex items-center justify-between mb-4 px-2">
                                <span class="text-[0.55rem] font-black text-brand-deep uppercase tracking-widest">Total
                                    Price</span>
                                <span class="text-xl font-black text-emerald-600"
                                    x-text="'Rs. ' + (plans.enterprise.base + plans.enterprise.budget).toLocaleString()"></span>
                            </div>

                            <button @click="$dispatch('open-modal', 'enterprise')"
                                class="w-full py-3 rounded-xl bg-brand-deep text-white font-black uppercase text-[0.65rem] tracking-widest hover:bg-brand-dark transition-all shadow-lg mb-2">
                                Select Plan
                            </button>

                            <button @click="$dispatch('open-modal', 'enterprise')"
                                class="w-full py-2.5 rounded-xl bg-brand-secondary text-brand-deep font-black uppercase text-[0.55rem] tracking-widest hover:scale-[1.02] transition-all shadow-md">
                                What's Included
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Custom Calculator Card -->
                <div class="flex flex-col" data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="bg-white p-5 md:p-6 rounded-[2rem] border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-500 flex-1 flex flex-col group text-brand-deep relative overflow-hidden text-center max-w-[340px] mx-auto w-full">

                        <div class="mb-4 relative z-10">
                            <h3 class="text-xl font-black text-brand-deep mb-3 font-display">Custom</h3>
                            <p
                                class="text-brand-deep text-[0.65rem] font-black leading-relaxed mb-4 uppercase tracking-tight">
                                Build your own plan by
                                adjusting units and platforms below.</p>
                        </div>

                        <div class="space-y-4 relative z-10 flex-1">
                            <!-- Mini Slider -->
                            <div>
                                <div class="flex justify-between items-center mb-1.5">
                                    <span
                                        class="text-[0.55rem] font-black uppercase tracking-widest text-brand-deep">Credits</span>
                                    <span class="text-brand-deep font-black text-base"
                                        x-text="plans.custom.credits"></span>
                                </div>
                                <input type="range" min="10" max="300" step="5" x-model="plans.custom.credits"
                                    class="w-full h-1 bg-slate-100 rounded-full appearance-none cursor-pointer accent-brand-secondary">
                            </div>

                            <!-- Mini Platform Selection -->
                            <div>
                                <span
                                    class="text-[0.6rem] font-black uppercase tracking-widest text-brand-deep mb-3 block">Select
                                    Platforms</span>
                                <div class="grid grid-cols-2 gap-2">
                                    <template x-for="p in availablePlatforms" :key="p[0]">
                                        <button @click="togglePlatform('custom', p[0])"
                                            :class="plans.custom.platforms.includes(p[0]) ? p[4] : 'bg-brand-dark border border-brand-accent/50 text-white/80 ' + p[5]"
                                            class="p-2.5 rounded-xl border transition-all flex flex-col items-center justify-center gap-1.5 group/btn overflow-hidden md:hover:scale-105 duration-300">
                                            <div class="transition-all duration-300"
                                                :class="plans.custom.platforms.includes(p[0]) ? 'scale-110' : 'opacity-80 md:group-hover/btn:opacity-100 md:group-hover/btn:scale-110'"
                                                x-html="p[2]">
                                            </div>
                                            <span
                                                class="text-[0.5rem] font-black uppercase tracking-widest leading-tight transition-colors"
                                                :class="plans.custom.platforms.includes(p[0]) ? 'text-white' : 'text-white/60 md:group-hover/btn:text-white'"
                                                x-text="p[1]"></span>
                                        </button>
                                    </template>
                                </div>
                            </div>

                            <!-- Integrated Ad Budget -->
                            <div class="p-4 rounded-2xl bg-slate-50 border border-dashed border-slate-200 text-left">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-[0.6rem] font-black text-brand-deep uppercase tracking-widest">Ad
                                        Budget</span>
                                    <button @click="plans.custom.showInput = !plans.custom.showInput"
                                        class="text-brand-deep hover:scale-110 transition-transform">
                                        <i data-lucide="plus-circle" class="w-4 h-4"></i>
                                    </button>
                                </div>
                                <div class="flex items-center gap-1.5 mb-1">
                                    <span class="text-[0.65rem] font-black text-brand-deep uppercase">Rs.</span>
                                    <span class="text-lg font-black text-brand-deep"
                                        x-text="plans.custom.budget.toLocaleString()"></span>
                                </div>
                                <div x-show="plans.custom.showInput" x-transition
                                    class="mt-2 pt-2 border-t border-slate-200">
                                    <input type="number" x-model.number="plans.custom.budget"
                                        class="w-full bg-white border border-slate-200 rounded-lg py-1.5 px-3 text-sm font-black focus:outline-none focus:border-brand-secondary"
                                        placeholder="0">
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 pt-4 border-t border-slate-100 relative z-10">
                            <div class="flex items-baseline gap-1.5 justify-center mb-1.5">
                                <span class="text-xs font-black text-brand-deep uppercase">Rs.</span>
                                <span class="text-2xl font-black text-brand-deep tracking-tighter"
                                    x-text="plans.custom.base.toLocaleString()"></span>
                            </div>
                            <span
                                class="text-[0.5rem] font-black text-brand-deep uppercase tracking-widest block mb-4">Base
                                Retainer Fee</span>

                            <div class="flex items-center justify-between mb-4 px-2">
                                <span class="text-[0.55rem] font-black text-brand-deep uppercase tracking-widest">Total
                                    Price</span>
                                <span class="text-xl font-black text-emerald-600"
                                    x-text="'Rs. ' + (plans.custom.base + plans.custom.budget).toLocaleString()"></span>
                            </div>

                            <button @click="$dispatch('open-modal', 'custom')"
                                class="w-full py-3 rounded-xl bg-brand-deep text-white font-black uppercase text-[0.65rem] tracking-widest hover:bg-brand-dark transition-all shadow-lg mb-2">
                                Select Plan
                            </button>

                            <button @click="$dispatch('open-modal', 'custom')"
                                class="w-full py-2.5 rounded-xl bg-white border border-slate-200 text-brand-deep font-black uppercase text-[0.55rem] tracking-widest hover:bg-slate-50 transition-all">
                                What's Included
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Network Ecosystem (subtle footer) -->
            <div class="mt-32 pt-24 border-t border-[#2E404C]/60" x-data="{
            activePlatform: null,
            platforms: [
                {
                    id: 'fb',
                    name: 'Facebook Ads',
                    logo: `<svg viewBox=" 0 0 24 24" class="w-8 h-8 fill-current">
                <path
                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                </svg>`,
                color: '#1877F2',
                badge: 'Hyper-Targeted Scaling',
                gradient: 'from-[#1877F2]/15 via-[#1877F2]/2 to-transparent',
                glowClass: 'shadow-[#1877F2]/40',
                borderClass: 'hover:border-[#1877F2]/40',
                textCol: 'text-[#1877F2]',
                tagline: 'Dominating feeds with high-converting social campaigns.',
                desc: 'Leverage Meta\'s massive demographic database. We build customized, full-funnel advertising
                architectures that turn cold traffic into hyper-loyal recurring customers.',
                stats: '3.4x Avg. ROAS',
                features: ['Meta Conversions API Setup', 'Lookalike Audience Modeling', 'Dynamic Creative A/B Testing',
                'DPA Retargeting Funnels']
                },
                {
                id: 'ig',
                name: 'Instagram Ads',
                logo: `<svg viewBox="0 0 24 24" class="w-8 h-8 fill-current">
                    <path
                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                </svg>`,
                color: '#E4405F',
                badge: 'High-Impact Aesthetics',
                gradient: 'from-[#E4405F]/15 via-[#E4405F]/2 to-transparent',
                glowClass: 'shadow-[#E4405F]/40',
                borderClass: 'hover:border-[#E4405F]/40',
                textCol: 'text-[#E4405F]',
                tagline: 'Aesthetic storytelling that turns scrollers into customers.',
                desc: 'Instagram is a visual powerhouse. We combine high-end aesthetic design with modern short-form
                Reels and Stories layouts to create premium, scroll-stopping campaigns.',
                stats: '+140% Engagement',
                features: ['Reels & Story Custom Formats', 'Creator Partner Whitelisting', 'Shopping Catalog
                Integration', 'Aesthetic Visual Curation']
                },
                {
                id: 'yt',
                name: 'YouTube Ads',
                logo: `<svg viewBox="0 0 24 24" class="w-8 h-8 fill-current">
                    <path
                        d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.377.505 9.377.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                </svg>`,
                color: '#FF0000',
                badge: 'Cinematic Storytelling',
                gradient: 'from-[#FF0000]/15 via-[#FF0000]/2 to-transparent',
                glowClass: 'shadow-[#FF0000]/40',
                borderClass: 'hover:border-[#FF0000]/40',
                textCol: 'text-[#FF0000]',
                tagline: 'Cinematic video campaigns that capture active attention.',
                desc: 'Position your brand as an industry leader. From short 6-second bumpers to immersive
                high-production storytelling, we script, edit, and optimize premium YouTube campaigns.',
                stats: '85% Completion Rate',
                features: ['In-Stream Skippable Ads', 'Short-form Bumper Ads (6s)', 'Scriptwriting & Filming', 'Topic &
                Placement Targeting']
                },
                {
                id: 'li',
                name: 'LinkedIn Ads',
                logo: `<svg viewBox="0 0 24 24" class="w-8 h-8 fill-current">
                    <path
                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                </svg>`,
                color: '#0A66C2',
                badge: 'B2B Authority',
                gradient: 'from-[#0A66C2]/15 via-[#0A66C2]/2 to-transparent',
                glowClass: 'shadow-[#0A66C2]/40',
                borderClass: 'hover:border-[#0A66C2]/40',
                textCol: 'text-[#0A66C2]',
                tagline: 'High-intent B2B targeting that secures enterprise leads.',
                desc: 'Directly target decision-makers, senior executives, and enterprise accounts. We craft
                content-first campaign plans that position your brand as a professional authority.',
                stats: '45% Lower CPL',
                features: ['InMail & Message Sequences', 'Integrated Lead Gen Forms', 'Company & Title Targeting',
                'Thought Leader Ad Sponsor']
                },
                {
                id: 'go',
                name: 'Google Ads',
                logo: `<svg viewBox="0 0 24 24" class="w-8 h-8 fill-current">
                    <path
                        d="M12.48 10.92v3.28h7.84c-.24 1.84-2.21 5.4-7.84 5.4-4.81 0-8.68-4-8.68-8.92s3.87-8.92 8.68-8.92c2.73 0 4.56 1.16 5.6 2.16l2.59-2.5c-1.66-1.55-3.82-2.5-8.19-2.5-6.63 0-12 5.37-12 12s5.37 12 12 12c6.92 0 11.52-4.87 11.52-11.72 0-.78-.08-1.38-.24-1.97h-11.28z" />
                </svg>`,
                color: '#4285F4',
                badge: 'Search Intent Mastery',
                gradient: 'from-[#4285F4]/15 via-[#4285F4]/2 to-transparent',
                glowClass: 'shadow-[#4285F4]/40',
                borderClass: 'hover:border-[#4285F4]/40',
                textCol: 'text-[#4285F4]',
                tagline: 'Capturing active search intent at the exact moment of purchase.',
                desc: 'Dominate Google Search, Shopping, and Display. We optimize campaign structure, keywords, and
                landing page flows to ensure you capture high-intent buyers efficiently.',
                stats: '5.8% Conversion Rate',
                features: ['Performance Max (PMax)', 'High-Intent Search Funnels', 'Merchant Center Optimization',
                'Smart Bidding Management']
                },
                {
                id: 'tt',
                name: 'TikTok Ads',
                logo: `<svg viewBox="0 0 24 24" class="w-8 h-8 fill-current">
                    <path
                        d="M12.525.02c1.31 0 2.591.214 3.794.608V7.22c-1.287-.878-2.831-1.413-4.492-1.413-.033 0-.066.001-.1.001v4.442c.033-.002.067-.003.1-.003 2.154 0 4.02 1.121 5.083 2.815V12c0 3.314-2.686 6-6 6s-6-2.686-6-6 2.686-6 6-6c.034 0 .067.001.1.001V1.521c-.033-.001-.066-.001-.1-.001C5.373 1.52 0 6.893 0 13.52s5.373 12 12 12 12-5.373 12-12c0-.129-.002-.258-.006-.386C23.616 10.516 21.406 8.489 18.8 8.01c.01-.2.016-.401.016-.604V0h-6.291z" />
                </svg>`,
                color: '#000000',
                badge: 'Viral Native Content',
                gradient: 'from-slate-700/15 via-slate-800/2 to-transparent',
                glowClass: 'shadow-slate-800/40',
                borderClass: 'hover:border-slate-800/40',
                textCol: 'text-slate-900',
                tagline: 'Viral hook-driven content designed for the digital native.',
                desc: 'Don\'t make ads, make TikToks. We create fast-paced, high-engagement content leveraging creator
                trends and custom UGC concepts that feel completely native and non-intrusive.',
                stats: '+310% Brand Recall',
                features: ['Spark Ads & Partnerships', 'UGC Concept Scripting', 'Trending Audio Strategies',
                'Interactive Video Add-Ons']
                },
                {
                id: 'cu',
                name: 'Custom Platform',
                logo: `<svg viewBox="0 0 24 24" class="w-8 h-8 fill-current">
                    <path
                        d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm0 22C6.486 22 2 17.514 2 12S6.486 2 12 2s10 4.486 10 10-4.486 10-10 10zm-1-18.914v17.828C6.914 20 4.086 17.086 4.086 12S6.914 4 11 3.086zm2 0C17.086 4 19.914 6.914 19.914 12S17.086 20 13 20.914V3.086zM4.34 7h15.32c-1.28-1.57-2.92-2.78-4.83-3.48-.96 1.4-1.81 3.04-2.51 4.88l-.32-1.4c-.7-1.84-1.55-3.48-2.51-4.88-1.91.7-3.55 1.91-4.83 3.48zM4.34 17h15.32c-1.28 1.57-2.92 2.78-4.83 3.48-.96-1.4-1.81-3.04-2.51-4.88l-.32 1.4c-.7 1.84-1.55-3.48-2.51 4.88-1.91-.7-3.55-1.91-4.83-3.48z" />
                </svg>`,
                color: '#618698',
                badge: 'Omnichannel Strategy',
                gradient: 'from-[#618698]/15 via-[#618698]/2 to-transparent',
                glowClass: 'shadow-[#618698]/40',
                borderClass: 'hover:border-[#618698]/40',
                textCol: 'text-[#618698]',
                tagline: 'Omnichannel approach tailored to your niche digital networks.',
                desc: 'Unleash growth in unique channels. We plan, execute, and optimize ad campaigns on alternative
                platforms like Reddit, Pinterest, or audio networks like Spotify.',
                stats: 'Niche Domination',
                features: ['Pinterest Visual Funnels', 'Reddit Interest Targeting', 'Spotify Audio Ad Production',
                'Programmatic Native Ads']
                }
                ]
                }" data-aos="fade-up">
                <div class="text-center mb-16">
                    <span class="text-xs font-black uppercase tracking-[0.3em] text-brand-tertiary mb-3 block">Platform
                        Coverage</span>
                    <h3 class="text-3xl md:text-4xl font-black text-brand-deep tracking-tight font-display">Network
                        Ecosystem</h3>
                    <p class="text-[#BDDFE8]/60 max-w-xl mx-auto mt-3 text-sm md:text-base font-medium">
                        Unlock explosive multi-channel growth. Click on any platform to explore our expert strategies
                        and performance metrics.
                    </p>
                </div>

                <!-- Platform Interactive Grid -->
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-6">
                    <template x-for="p in platforms" :key="p.id">
                        <button @click="activePlatform = p" :class="p.borderClass"
                            class="group relative bg-[#1A364A]/60 backdrop-blur-md border border-[#2E404C]/60 p-6 rounded-[2rem] shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-500 flex flex-col items-center justify-center gap-4 text-center overflow-hidden">

                            <!-- Hover colored background glow -->
                            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 bg-gradient-to-b"
                                :class="p.gradient"></div>

                            <!-- Brand Ring decoration -->
                            <div class="relative w-16 h-16 rounded-full bg-[#FFFFFF] border border-[#2E404C]/80 flex items-center justify-center group-hover:scale-110 transition-all duration-500 z-10"
                                :class="`group-hover:shadow-lg group-hover:${p.glowClass}`">
                                <div x-html="p.logo"
                                    class="w-8 h-8 transition-all duration-500 group-hover:scale-110 flex items-center justify-center"
                                    :style="`color: ${p.color}`"></div>
                            </div>

                            <!-- Platform Name -->
                            <div class="relative z-10">
                                <span
                                    class="text-xs font-black text-slate-700 tracking-tight block group-hover:text-brand-deep transition-colors"
                                    x-text="p.name"></span>
                                <span
                                    class="text-[0.55rem] font-bold text-[#618698] uppercase tracking-widest mt-1 block group-hover:text-[#BDDFE8]/60 transition-colors"
                                    x-text="p.id === 'cu' ? 'Any Niche' : 'Channel'"></span>
                            </div>

                            <!-- Pulsing Indicator Dot -->
                            <div class="absolute top-4 right-4 w-1.5 h-1.5 rounded-full bg-slate-200 group-hover:scale-125 transition-all duration-300 animate-pulse"
                                :style="`background-color: ${p.color}; box-shadow: 0 0 8px ${p.color};`"></div>
                        </button>
                    </template>
                </div>

                <!-- Creative Ecosystem Detail Modal -->
                <div class="fixed inset-0 z-[1000] flex items-center justify-center p-4 md:p-6" x-show="activePlatform"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:leave="transition ease-in duration-200" x-cloak>

                    <!-- Backdrop -->
                    <div @click="activePlatform = null"
                        class="absolute inset-0 bg-brand-deep/75 backdrop-blur-xl transition-all"
                        x-show="activePlatform" x-transition:enter="ease-out duration-300"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"></div>

                    <!-- Modal Content -->
                    <div class="bg-[#1A364A] rounded-[3rem] max-w-2xl w-full relative z-10 shadow-[0_25px_60px_-15px_rgba(0,0,0,0.3)] overflow-hidden transition-all border border-[#2E404C]"
                        x-show="activePlatform" x-transition:enter="ease-out duration-500"
                        x-transition:enter-start="opacity-0 scale-95 translate-y-8"
                        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                        x-transition:leave="ease-in duration-300"
                        x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                        x-transition:leave-end="opacity-0 scale-95 translate-y-8">

                        <!-- Close button -->
                        <button @click="activePlatform = null"
                            class="absolute top-6 right-6 text-[#618698] hover:text-slate-800 z-30 p-2 hover:bg-slate-100 rounded-full transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>

                        <template x-if="activePlatform">
                            <div class="flex flex-col">
                                <!-- Header Banner (themed) -->
                                <div class="p-8 md:p-12 pb-6 relative overflow-hidden bg-gradient-to-br"
                                    :class="activePlatform.gradient">
                                    <!-- Top branding decoration -->
                                    <div class="absolute top-0 right-0 w-64 h-64 rounded-full blur-[80px] -translate-y-1/3 translate-x-1/3 opacity-30"
                                        :style="`background-color: ${activePlatform.color}`"></div>

                                    <div class="flex items-center gap-5 relative z-10 mb-6">
                                        <div
                                            class="w-16 h-16 rounded-2xl bg-[#1A364A] flex items-center justify-center shadow-md overflow-hidden">
                                            <div x-html="activePlatform.logo"
                                                class="w-10 h-10 flex items-center justify-center"
                                                :style="`color: ${activePlatform.color}`"></div>
                                        </div>
                                        <div>
                                            <span
                                                class="px-3 py-1 rounded-full text-[0.6rem] font-black uppercase tracking-widest text-brand-deep inline-block"
                                                :style="`background-color: ${activePlatform.color}`"
                                                x-text="activePlatform.badge"></span>
                                            <h4 class="text-2xl md:text-3xl font-black text-brand-deep tracking-tight font-display mt-1"
                                                x-text="activePlatform.name"></h4>
                                        </div>
                                    </div>
                                    <p class="text-sm md:text-base font-bold text-slate-700 leading-relaxed max-w-xl relative z-10"
                                        x-text="activePlatform.tagline"></p>
                                </div>

                                <!-- Detail Body -->
                                <div class="px-8 md:px-12 pb-10 pt-6">
                                    <p class="text-xs md:text-sm text-[#BDDFE8]/60 font-medium leading-relaxed mb-8"
                                        x-text="activePlatform.desc"></p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                                        <!-- Stats Card -->
                                        <div
                                            class="bg-[#FFFFFF] border border-[#2E404C] p-5 rounded-2xl flex flex-col justify-center">
                                            <span
                                                class="text-[0.6rem] font-black text-[#618698] uppercase tracking-widest block mb-1">PROVEN
                                                IMPACT</span>
                                            <span class="text-2xl md:text-3xl font-black tracking-tight"
                                                :class="activePlatform.textCol" x-text="activePlatform.stats"></span>
                                            <span class="text-[0.65rem] font-medium text-[#BDDFE8]/60 mt-1">Average
                                                campaign return metrics achieved for clients.</span>
                                        </div>

                                        <!-- Specialty Deliverables -->
                                        <div>
                                            <span
                                                class="text-[0.6rem] font-black text-[#618698] uppercase tracking-widest block mb-4">PLATFORM
                                                FOCUS</span>
                                            <ul class="space-y-3">
                                                <template x-for="feat in activePlatform.features" :key="feat">
                                                    <li class="flex items-center gap-3">
                                                        <div class="w-4 h-4 rounded-full flex items-center justify-center shrink-0"
                                                            :style="`background-color: ${activePlatform.color}15`">
                                                            <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor"
                                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                                :style="`color: ${activePlatform.color}`">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="3" d="M5 13l4 4L19 7"></path>
                                                            </svg>
                                                        </div>
                                                        <span class="text-xs font-bold text-slate-700"
                                                            x-text="feat"></span>
                                                    </li>
                                                </template>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="flex items-center gap-4 border-t border-[#2E404C] pt-6">
                                        <button
                                            @click="activePlatform = null; document.getElementById('monthly-retainer').scrollIntoView({behavior: 'smooth'})"
                                            class="flex-1 py-4 px-6 rounded-2xl text-center text-xs font-black uppercase tracking-widest text-brand-deep hover:shadow-lg transition-all"
                                            :style="`background-color: ${activePlatform.color}`">
                                            Select in Calculator
                                        </button>
                                        <button @click="activePlatform = null"
                                            class="px-6 py-4 rounded-2xl border border-[#2E404C] hover:border-slate-300 text-xs font-black uppercase tracking-widest text-[#BDDFE8]/60 hover:text-slate-700 transition-colors">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals for "What's Included" -->
        <div x-data="{ 
            open: false, 
            plan: '', 
            details: {
                startup: {
                    title: 'Startup Plan Inclusions',
                    items: [
                        'Platform setup and campaign configuration',
                        'Audience research and targeting',
                        'Ad creative strategy guidance',
                        'Campaign monitoring and optimization',
                        'Monthly performance tracking',
                        'Lead and engagement analysis',
                        'Budget allocation support',
                        'Basic monthly report'
                    ]
                },
                enterprise: {
                    title: 'Enterprise Plan Inclusions',
                    items: [
                        'Multi-platform campaign setup',
                        'Advanced audience targeting',
                        'Competitor and market research',
                        'Ad creative strategy and planning',
                        'Campaign monitoring and optimization',
                        'Performance analysis across platforms',
                        'Budget split and allocation strategy',
                        'Detailed monthly performance report'
                    ]
                },
                custom: {
                    title: 'Custom Plan Inclusions',
                    items: [
                        'Custom platform selection',
                        'Tailored campaign strategy',
                        'Audience and competitor research',
                        'Creative planning and consultation',
                        'Full campaign setup and management',
                        'Ongoing optimization and scaling',
                        'Custom budget planning',
                        'Personalized monthly reporting'
                    ]
                }
            } 
         }" @open-modal.window="open = true; plan = $event.detail"
            class="fixed inset-0 z-[1000] flex items-center justify-center p-6" x-show="open" x-cloak>

            <div @click="open = false" x-show="open" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                class="absolute inset-0 bg-brand-deep/90 backdrop-blur-md"></div>

            <div x-show="open" x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0 scale-90 translate-y-10"
                x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                class="bg-[#1A364A] rounded-[3rem] p-10 md:p-16 max-w-2xl w-full relative z-10 shadow-2xl">
                <button @click="open = false" class="absolute top-8 right-8 text-[#618698] hover:text-brand-deep">
                    <i data-lucide="x" class="w-8 h-8"></i>
                </button>

                <template x-if="plan">
                    <div>
                        <h5 class="text-3xl font-black text-brand-deep mb-10 font-display" x-text="details[plan].title">
                        </h5>
                        <ul class="space-y-6">
                            <template x-for="item in details[plan].items" :key="item">
                                <li class="flex items-start gap-4">
                                    <div
                                        class="w-6 h-6 rounded-full bg-emerald-100 flex items-center justify-center shrink-0 mt-1">
                                        <i data-lucide="check" class="text-emerald-600 w-3.5 h-3.5"></i>
                                    </div>
                                    <span class="text-slate-600 font-bold leading-relaxed" x-text="item"></span>
                                </li>
                            </template>
                        </ul>
                        <button @click="open = false"
                            class="mt-12 w-full py-5 rounded-2xl bg-brand-deep text-brand-deep font-black uppercase tracking-widest hover:bg-brand-deep transition-all">Close
                            Inclusions</button>
                    </div>
                </template>
            </div>
        </div>
</section>

<style>
    #monthly-retainer [x-cloak] {
        display: none !important;
    }
</style>
