<!-- Research & Testing Section -->
<section id="research-testing" class="py-10 bg-[#030B0D] relative overflow-hidden" x-data="{ 
            activeStep: 'brand',
            showModal: false,
            modalTitle: '',
            modalPoints: [],
            budget: 130000,
            adBudget: 50000,
            minAdBudget: 50000,
            showBudgetInput: true,
            steps: [
                { 
                    id: 'brand', 
                    title: 'Your Brand', 
                    icon: 'fingerprint',
                    type: 'circle'
                },
                { 
                    id: 'research', 
                    title: 'Research', 
                    icon: 'search',
                    type: 'rect',
                    details: [
                        'Market trends & competitor benchmarking',
                        'Consumer behavior studies & data profiling',
                        'Keyword & SEO opportunity mapping',
                        'Psychographic audience segmentation'
                    ]
                },
                { 
                    id: 'testing', 
                    title: 'Testing', 
                    icon: 'flask-conical',
                    type: 'rect',
                    details: [
                        'A/B testing of messaging & creatives',
                        'UX/UI feedback loops & usability testing',
                        'Performance validation on pilot channels',
                        'Conversion rate optimization (CRO) audits'
                    ]
                },
                { 
                    id: 'retainer', 
                    title: 'Monthly Retainer', 
                    icon: 'refresh-ccw',
                    type: 'rect',
                    details: [
                        'Ongoing strategy management & execution',
                        'Dedicated creative & technical team access',
                        'Real-time performance monitoring & reporting',
                        'Scalable growth & continuous optimization'
                    ]
                }
            ],
            openModal(step) {
                this.modalTitle = step.title;
                this.modalPoints = step.details;
                this.showModal = true;
            }
         }">

    <!-- Background Elements -->
    <div class="absolute inset-0 z-0 pointer-events-none overflow-hidden bg-[#030B0D]">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/stardust.png')] opacity-10">
        </div>
        <div
            class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-brand-deep/10 rounded-full blur-[120px] mix-blend-screen">
        </div>
        <div
            class="absolute bottom-0 right-1/4 w-[600px] h-[600px] bg-brand-secondary/5 rounded-full blur-[150px] mix-blend-screen">
        </div>
    </div>

    <div class="container-custom relative z-10">
        <!-- Top Section -->
        <div class="text-center mb-8 md:mb-10" data-aos="fade-up">
            <div
                class="inline-flex items-center gap-3 px-5 py-2 rounded-full bg-brand-secondary/10 border border-brand-secondary/20 mb-6 shadow-[0_0_15px_rgba(34,211,238,0.15)] backdrop-blur-md">
                <span
                    class="w-2 h-2 rounded-full bg-brand-secondary animate-pulse shadow-[0_0_10px_rgba(34,211,238,0.8)]"></span>
                <span class="text-white font-black uppercase tracking-[0.2em] text-[10px] md:text-xs">Flexible Pricing |
                    Option to test before you get onboard</span>
            </div>

            <h2
                class="text-3xl md:text-4xl font-black text-white font-display tracking-tight mb-3 drop-shadow-[0_0_20px_rgba(255,255,255,0.1)]">
                Discover the Plan <span class="text-white">that suits you!</span>
            </h2>
            <p class="text-base md:text-xl text-[#E0E0E0] max-w-3xl mx-auto font-medium leading-relaxed">
                Ayonion Studios is a data-driven digital marketing agency built for flexibility. Test your market with a
                one-time deep dive before you invest, or partner with us monthly through our adaptable Credit System.
                Either way, every strategy is powered by real campaign data so you grow with clarity, not risk.
            </p>
        </div>

        <!-- Graphical Flow Section -->
        <div class="relative mb-10 md:mb-12 px-4 md:px-0"
            x-init="setTimeout(() => { if(window.lucide) lucide.createIcons(); }, 150)">
            <!-- Modern Connection Line -->
            <div
                class="hidden md:block absolute top-1/2 left-[10%] right-[10%] h-1 bg-[#052C47] -translate-y-1/2 z-0 rounded-full overflow-hidden shadow-[inset_0_0_10px_rgba(0,0,0,0.5)]">
                <div class="absolute top-0 left-0 h-full w-1/3 bg-gradient-to-r from-transparent via-brand-secondary to-transparent opacity-80 animate-[flow_3s_infinite_linear]"
                    style="animation-name: flow; animation-duration: 3s; animation-iteration-count: infinite; animation-timing-function: linear;">
                </div>
            </div>

            <div class="flex flex-col md:flex-row items-center justify-between relative z-10 gap-8 md:gap-4 lg:px-10">
                <template x-for="(step, index) in steps" :key="step.id">
                    <div class="flex flex-col items-center group w-full md:w-1/3 relative" data-aos="fade-up"
                        :data-aos-delay="index * 150">

                        <!-- Connecting Line for Mobile -->
                        <div x-show="index > 0"
                            class="md:hidden w-[2px] h-12 bg-gradient-to-b from-transparent via-brand-secondary/50 to-transparent -mt-4 mb-4">
                        </div>

                        <!-- Step Card -->
                        <div @click="activeStep = step.id; if(step.id !== 'brand') openModal(step)"
                            class="relative w-full max-w-[280px] cursor-pointer transition-all duration-500"
                            :class="activeStep === step.id ? 'scale-105 md:scale-110 z-20' : 'scale-100 hover:scale-105 z-10 opacity-70 hover:opacity-100'">

                            <!-- Glow Effect behind active step -->
                            <div x-show="activeStep === step.id" x-transition.opacity.duration.500ms
                                class="absolute inset-0 bg-brand-secondary/20 rounded-[2rem] blur-2xl -z-10"></div>

                            <div class="bg-[#1A364A]/80 backdrop-blur-xl border border-[#2E404C] rounded-[2rem] p-6 flex flex-col items-center text-center shadow-[0_20px_40px_rgba(0,0,0,0.5)] transition-all duration-500 overflow-hidden relative group-hover:border-brand-secondary/50"
                                :class="activeStep === step.id ? 'border-brand-secondary/80 shadow-[0_0_30px_rgba(34,211,238,0.15)] bg-[#052C47]/90' : ''">

                                <!-- Inner Background Gradient (Active) -->
                                <div class="absolute inset-0 bg-gradient-to-br from-brand-secondary/5 to-transparent opacity-0 transition-opacity duration-500"
                                    :class="activeStep === step.id ? 'opacity-100' : 'group-hover:opacity-50'"></div>

                                <!-- Icon Container -->
                                <div class="w-16 h-16 rounded-2xl flex items-center justify-center mb-4 transition-all duration-500 relative z-10 shadow-inner"
                                    :class="activeStep === step.id ? 'bg-gradient-to-br from-brand-secondary to-brand-deep text-black shadow-[0_0_20px_rgba(34,211,238,0.4)] -translate-y-2' : 'bg-[#052C47] border border-[#2E404C] text-[#618698] group-hover:text-brand-deep group-hover:border-brand-secondary/30'">
                                    <i :data-lucide="step.icon" class="w-10 h-10 transition-transform duration-500"
                                        :class="activeStep === step.id ? 'scale-110' : ''"></i>

                                    <!-- Active Ping -->
                                    <span x-show="activeStep === step.id"
                                        class="absolute -top-1.5 -right-1.5 flex h-4 w-4">
                                        <span
                                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-secondary opacity-75"></span>
                                        <span
                                            class="relative inline-flex rounded-full h-4 w-4 bg-brand-secondary shadow-sm shadow-brand-secondary/50"></span>
                                    </span>
                                </div>

                                <h3 class="font-black text-xl md:text-2xl tracking-wide transition-colors duration-300 relative z-10 uppercase text-white"
                                    :class="activeStep === step.id ? 'drop-shadow-md' : 'text-slate-300'"
                                    x-text="step.title"></h3>

                                <!-- Select Your Package Button (Only for Retainer) -->
                                <a href="#pricing" @click.stop x-show="step.id === 'retainer'"
                                    class="mt-4 px-4 py-2 rounded-full bg-brand-secondary text-brand-deep font-black uppercase text-[0.6rem] tracking-widest hover:scale-105 transition-all shadow-[0_0_15px_rgba(34,211,238,0.3)] relative z-20">
                                    Select Your Package
                                </a>

                                <!-- Small helper text -->
                                <span x-show="step.id !== 'brand' && step.id !== 'retainer'"
                                    class="text-[10px] text-brand-secondary uppercase tracking-[0.2em] font-bold mt-3 relative z-10 flex items-center gap-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                    :class="activeStep === step.id ? 'opacity-100' : ''">Click to view <i
                                        data-lucide="arrow-right" class="w-3 h-3"></i></span>

                                <!-- Step Number -->
                                <div class="absolute -top-4 -right-4 text-[6rem] font-black leading-none text-white/10 pointer-events-none transition-transform duration-500 font-display"
                                    :class="activeStep === step.id ? 'scale-110 translate-y-4 text-white/20' : ''"
                                    x-text="'0' + (index + 1)"></div>
                            </div>
                        </div>

                    </div>
                </template>
            </div>
        </div>

        <!-- Bottom Section (Reversed columns as per new image) -->
        <div class="grid lg:grid-cols-[1fr_1.2fr] gap-4 items-start">

            <!-- Left Side: Card Section (Research & Testing) -->
            <div class="space-y-6" data-aos="fade-right">
                <!-- Main Card -->
                <div
                    class="bg-[#1A364A]/80 backdrop-blur-md p-6 rounded-[1.5rem] border border-[#2E404C] shadow-[0_20px_50px_rgba(0,0,0,0.5)] relative overflow-hidden group hover:border-brand-secondary/30 transition-colors">
                    <div
                        class="absolute top-0 right-0 w-64 h-64 bg-brand-deep/10 rounded-full blur-[80px] pointer-events-none">
                    </div>
                    <div class="relative z-10">
                        <div class="flex items-center gap-3 mb-4">
                            <div
                                class="w-10 h-10 rounded-full bg-[#00D1FF]/20 flex items-center justify-center border border-[#00D1FF]/30">
                                <i data-lucide="microscope" class="w-5 h-5 text-[#00D1FF]"></i>
                            </div>
                            <h4
                                class="text-lg font-black text-white tracking-widest uppercase font-display drop-shadow-md">
                                Research & Testing</h4>
                        </div>

                        <div class="flex items-baseline gap-2 mb-2">
                            <span class="text-xl font-bold text-[#00D1FF]">Rs.</span>
                            <span
                                class="text-2xl md:text-3xl font-black tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-[#00D1FF] to-white drop-shadow-[0_0_15px_rgba(0,209,255,0.3)]"
                                x-text="budget.toLocaleString()"></span>
                        </div>
                    </div>
                </div>

                <!-- Ad Budget Box -->
                <div
                    class="bg-[#052C47]/80 backdrop-blur-md p-6 rounded-[1.5rem] border border-[#2E404C] shadow-[0_15px_30px_rgba(0,0,0,0.3)] hover:border-[#00D1FF]/30 transition-colors">
                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-4">
                        <div class="flex flex-col">
                            <span class="text-base font-black text-white uppercase tracking-wider">Ad Budget</span>
                            <div class="flex items-center gap-2 mt-1">
                                <span class="text-sm font-bold text-[#00D1FF]">Rs.</span>
                                <span
                                    class="text-xl font-black text-transparent bg-clip-text bg-gradient-to-r from-[#00D1FF] to-white drop-shadow-[0_0_10px_rgba(0,209,255,0.3)]"
                                    x-text="adBudget.toLocaleString()"></span>
                            </div>
                        </div>

                        <button @click="showBudgetInput = !showBudgetInput"
                            :class="showBudgetInput ? 'bg-[#00D1FF] text-black rotate-45 border-[#00D1FF] shadow-[0_0_15px_rgba(0,209,255,0.4)]' : 'text-[#00D1FF] border-[#00D1FF]/30 hover:bg-[#00D1FF]/10 hover:border-[#00D1FF]'"
                            class="w-12 h-12 shrink-0 rounded-full border-2 flex items-center justify-center transition-all duration-300">
                            <i data-lucide="plus" class="w-6 h-6"></i>
                        </button>
                    </div>

                    <!-- Custom Input Area -->
                    <div x-show="showBudgetInput" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 -translate-y-4"
                        x-transition:enter-end="opacity-100 translate-y-0" class="pt-6 border-t border-[#2E404C]">
                        <label
                            class="block text-[0.65rem] font-black uppercase tracking-[0.2em] text-[#E0E0E0] mb-3">Specify
                            your test ad budget (Min: Rs. 50,000)</label>
                        <div class="relative">
                            <span class="absolute left-6 top-1/2 -translate-y-1/2 text-[#00D1FF] font-bold">Rs.</span>
                            <input type="number" :min="minAdBudget" x-model.number="adBudget"
                                @blur="if(adBudget < minAdBudget || !adBudget) adBudget = minAdBudget"
                                class="w-full bg-[#1A364A] border border-[#2E404C] rounded-2xl py-4 pl-16 pr-8 text-xl font-black text-white focus:outline-none focus:border-brand-secondary focus:ring-4 focus:ring-brand-secondary/10 transition-all placeholder:text-[#2E404C]"
                                placeholder="50000">
                        </div>

                        <!-- Quick Select Buttons -->
                        <div class="flex flex-wrap gap-3 mt-5">
                            <template x-for="amount in [50000, 100000, 150000]" :key="amount">
                                <button @click="adBudget = amount"
                                    :class="adBudget === amount ? 'bg-[#00D1FF] text-black border-[#00D1FF] shadow-[0_0_10px_rgba(0,209,255,0.3)]' : 'bg-[#1A364A] text-[#00D1FF] border-[#2E404C] hover:border-[#00D1FF]/50 hover:text-white'"
                                    class="px-4 py-2 rounded-xl border text-xs font-bold transition-all uppercase tracking-wider"
                                    x-text="'+ ' + (amount/1000) + 'k'"></button>
                            </template>
                            <button @click="adBudget = minAdBudget"
                                class="px-4 py-2 rounded-xl border border-[#2E404C] bg-[#1A364A] text-[10px] font-black uppercase tracking-[0.1em] text-highlight hover:bg-rose-500/10 hover:border-rose-500/30 transition-all ml-auto">Reset</button>
                        </div>
                    </div>
                </div>

                <!-- Total Investment Summary -->
                <div
                    class="bg-gradient-to-br from-brand-deep to-brand-secondary p-6 rounded-[1.5rem] text-white shadow-[0_20px_50px_rgba(34,211,238,0.2)] relative overflow-hidden group">
                    <div
                        class="absolute top-0 right-0 w-48 h-48 bg-white/20 rounded-full blur-3xl group-hover:scale-150 transition-transform duration-1000">
                    </div>
                    <div class="absolute -bottom-8 -left-8 w-32 h-32 bg-black/20 rounded-full blur-2xl"></div>
                    <div class="relative z-10">
                        <div class="flex items-center gap-2 mb-4">
                            <i data-lucide="calculator" class="w-4 h-4 text-white"></i>
                            <span class="text-[0.65rem] font-black uppercase tracking-[0.3em] text-white">Total
                                Investment</span>
                        </div>
                        <div class="flex items-baseline gap-3 border-b border-white/20 pb-4 mb-4">
                            <span class="text-2xl font-bold text-white/80">Rs.</span>
                            <span class="text-2xl md:text-3xl font-black tracking-tight drop-shadow-md"
                                x-text="(budget + adBudget).toLocaleString()"></span>
                        </div>
                        <p
                            class="text-[0.7rem] text-white leading-relaxed font-medium uppercase tracking-wider flex items-center gap-2">
                            <i data-lucide="check-circle-2" class="w-4 h-4 text-white"></i> Includes Research, Testing &
                            Ad Budget
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Side: Description Section -->
            <div class="py-4 md:py-10 flex flex-col justify-center h-full" data-aos="fade-left">
                <h4
                    class="text-xl md:text-2xl font-black text-white mb-3 font-display uppercase tracking-wider drop-shadow-[0_0_15px_rgba(255,255,255,0.1)]">
                    What You <span class="text-white">Get</span></h4>
                <p class="text-sm md:text-base text-[#F5F5F5] font-medium leading-relaxed mb-6 max-w-xl">
                    With the Research & Testing option, you get a complete deep dive into your market and ad strategy
                    without any monthly commitment. We gather your data, understand your customer pain points, analyze
                    your competitors, then conduct thorough market research and run live test campaigns with real-time
                    monitoring. You walk away with a full suite of deliverables everything you need to either continue
                    on your own or make an informed decision about a monthly package.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                    <!-- Detailed Plans -->
                    <div
                        class="p-5 rounded-2xl border border-[#00D1FF]/20 bg-gradient-to-br from-[#052C47]/80 to-[#1A364A]/50 shadow-[0_10px_30px_rgba(0,0,0,0.3)] backdrop-blur-md relative overflow-hidden group hover:-translate-y-1 transition-all">
                        <div
                            class="absolute inset-0 bg-[#00D1FF]/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                        </div>
                        <div class="flex items-center gap-3 mb-3 border-b border-[#2E404C] pb-3">
                            <div
                                class="w-10 h-10 rounded-xl bg-[#00D1FF]/10 flex items-center justify-center shadow-inner group-hover:scale-110 transition-transform">
                                <i data-lucide="file-check" class="w-5 h-5 text-[#00D1FF]"></i>
                            </div>
                            <h5 class="text-sm md:text-base font-black text-white uppercase tracking-wider">Detailed
                                Plans</h5>
                        </div>
                        <p class="text-[#F5F5F5]/80 text-xs leading-relaxed font-medium mb-4">
                            Strategic roadmaps specifically tailored to elevate your brand's digital identity.
                        </p>
                        <ul class="space-y-3">
                            <template
                                x-for="item in ['Research Report', 'Brand Guidelines', 'Creative Strategy Guideline', 'Test Campaign Plan']">
                                <li class="flex items-start gap-2.5">
                                    <span class="text-[#00D1FF] drop-shadow-sm mt-0.5">✦</span>
                                    <span class="text-[#F5F5F5] text-xs font-bold leading-relaxed" x-text="item"></span>
                                </li>
                            </template>
                        </ul>
                    </div>

                    <!-- Performance Reports -->
                    <div
                        class="p-5 rounded-2xl border border-[#00D1FF]/20 bg-gradient-to-br from-[#052C47]/80 to-[#1A364A]/50 shadow-[0_10px_30px_rgba(0,0,0,0.3)] backdrop-blur-md relative overflow-hidden group hover:-translate-y-1 transition-all">
                        <div
                            class="absolute inset-0 bg-[#00D1FF]/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                        </div>
                        <div class="flex items-center gap-3 mb-3 border-b border-[#2E404C] pb-3">
                            <div
                                class="w-10 h-10 rounded-xl bg-[#00D1FF]/10 flex items-center justify-center shadow-inner group-hover:scale-110 transition-transform">
                                <i data-lucide="bar-chart-3" class="w-5 h-5 text-[#00D1FF]"></i>
                            </div>
                            <h5 class="text-sm md:text-base font-black text-white uppercase tracking-wider">Performance
                                Reports</h5>
                        </div>
                        <p class="text-[#F5F5F5]/80 text-xs leading-relaxed font-medium mb-4">
                            Actionable, data-backed insights derived from real-world market testing.
                        </p>
                        <ul class="space-y-3">
                            <template
                                x-for="item in ['Test Campaign Report', 'Content Report', 'Credit Usage Report', 'Fully Optimized Ad Account']">
                                <li class="flex items-start gap-2.5">
                                    <span class="text-[#00D1FF] drop-shadow-sm mt-0.5">✦</span>
                                    <span class="text-[#F5F5F5] text-xs font-bold leading-relaxed" x-text="item"></span>
                                </li>
                            </template>
                        </ul>
                    </div>
                </div>

                <div class="mt-4">
                    <button
                        class="w-full sm:w-auto px-10 py-5 rounded-2xl bg-gradient-to-r from-[#FFFFFF] to-[#E0E0E0] text-[#000000] font-black uppercase tracking-widest hover:scale-105 transition-all shadow-[0_0_20px_rgba(255,255,255,0.3)] hover:shadow-[0_0_40px_rgba(255,255,255,0.5)] flex items-center justify-center gap-3 group">
                        <span>Research & Test Your Brand</span>
                        <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!-- Interactive Dashboard Modal (Apple/Stripe Style) -->
    <div x-show="showModal" class="fixed inset-0 z-[1000] flex items-center justify-center p-4 md:p-8" x-cloak>

        <!-- Dark Glass Background Blur -->
        <div @click="showModal = false" x-show="showModal" x-transition:enter="transition ease-out duration-500"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="absolute inset-0 bg-[#0a0a0a]/60 backdrop-blur-xl"></div>

        <!-- Premium Infographic Modal -->
        <div x-show="showModal" x-transition:enter="transition cubic-bezier(0.16, 1, 0.3, 1) duration-500 delay-75"
            x-transition:enter-start="opacity-0 scale-95 translate-y-8"
            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
            x-transition:leave-end="opacity-0 scale-95 translate-y-4"
            class="bg-[#1A364A] border border-[#2E404C] rounded-2xl shadow-[0_30px_80px_rgba(0,0,0,0.8)] max-w-6xl w-full relative z-10 overflow-hidden flex flex-col max-h-[90vh]"
            x-init="setTimeout(() => { if(window.lucide) lucide.createIcons(); }, 150)">

            <!-- Universal Close Button -->
            <button @click="showModal = false"
                class="absolute top-6 right-6 w-10 h-10 rounded-full bg-[#052C47] border border-[#2E404C] flex items-center justify-center text-[#618698] hover:text-brand-darkest hover:bg-[#2E404C] hover:rotate-90 transition-all duration-300 z-50 shadow-lg">
                <i data-lucide="x" class="w-5 h-5"></i>
            </button>

            <!-- PHASE 1 CONTENT (Research) -->
            <div x-show="activeStep === 'research'" class="flex flex-col h-full overflow-hidden">

                <!-- HEADER -->
                <div
                    class="relative bg-gradient-to-b from-[#052C47] to-[#1A364A] border-b border-[#2E404C] p-8 text-center flex flex-col items-center justify-center shrink-0">

                    <h2 class="text-3xl md:text-5xl font-black text-white tracking-widest uppercase mb-3 font-display">
                        PHASE
                        1: RESEARCH</h2>
                    <p class="text-slate-300 text-xs md:text-sm uppercase tracking-[0.3em] mb-6">Duration: 3 Weeks</p>
                    <div
                        class="bg-gradient-to-r from-[#2E6083] to-[#102a43] text-white px-8 py-3 rounded-full shadow-[0_0_20px_rgba(30,64,175,0.3)] inline-block">
                        <span class="text-xl md:text-2xl font-black tracking-tight">Rs. 50,000</span>
                    </div>
                </div>

                <!-- CONTENT AREA -->
                <div class="p-6 md:p-10 overflow-y-auto flex-1 custom-scrollbar">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12 mb-16">

                        <!-- Column 1 -->
                        <div class="flex flex-col relative group">
                            <div class="flex items-center gap-3 mb-4 border-b border-[#2E404C] pb-4">
                                <div
                                    class="w-8 h-8 rounded-full bg-[#052C47] border border-[#2E404C] flex items-center justify-center shrink-0 group-hover:border-[#2E6083] transition-colors">
                                    <i data-lucide="file-search"
                                        class="w-4 h-4 text-[#C0C0C0] group-hover:text-[#2E6083] transition-colors"></i>
                                </div>
                                <h3 class="text-lg font-bold text-white uppercase tracking-wider">Research Report</h3>
                            </div>
                            <p class="text-slate-300 text-[0.65rem] uppercase tracking-widest mb-6 leading-relaxed">
                                Detailed
                                Market & Competitor Landscape Analysis</p>
                            <ul class="space-y-3 flex-1">
                                <template
                                    x-for="item in ['Brand Overview', 'Hashtag & Keyword Research', 'Competitor & References', 'Competitor Audit', 'Audience Analysis', 'Ad Strategies', 'Content Strategies', 'Platform Specific Data', 'Customer Pain Points', 'Industry Ad Standards', 'Previous Ad Performance Breakdown', 'KPI\'s', 'Market Value & Expectations', 'Doi\'s & Don\'ts']"
                                    :key="item">
                                    <li class="flex items-start gap-3">
                                        <span
                                            class="w-1.5 h-1.5 rounded-full bg-[#C0C0C0] mt-1.5 shrink-0 shadow-[0_0_5px_rgba(192,192,192,0.5)]"></span>
                                        <span class="text-[#BDDFE8] text-sm font-medium leading-snug"
                                            x-text="item"></span>
                                    </li>
                                </template>
                            </ul>
                        </div>

                        <!-- Column 2 -->
                        <div class="flex flex-col relative group">
                            <div class="flex items-center gap-3 mb-4 border-b border-[#2E404C] pb-4">
                                <div
                                    class="w-8 h-8 rounded-full bg-[#052C47] border border-[#2E404C] flex items-center justify-center shrink-0 group-hover:border-[#2E6083] transition-colors">
                                    <i data-lucide="palette"
                                        class="w-4 h-4 text-[#C0C0C0] group-hover:text-[#2E6083] transition-colors"></i>
                                </div>
                                <h3 class="text-lg font-bold text-white uppercase tracking-wider">Brand Guidelines</h3>
                            </div>
                            <p class="text-slate-300 text-[0.65rem] uppercase tracking-widest mb-6 leading-relaxed">
                                Comprehensive visual identity standards</p>
                            <ul class="space-y-3 flex-1">
                                <template
                                    x-for="item in ['Logo Standards', 'Color Palette', 'Slogan, Vision & Mission', 'Typography', 'Visual Direction', 'Mockups']"
                                    :key="item">
                                    <li class="flex items-start gap-3">
                                        <span
                                            class="w-1.5 h-1.5 rounded-full bg-[#C0C0C0] mt-1.5 shrink-0 shadow-[0_0_5px_rgba(192,192,192,0.5)]"></span>
                                        <span class="text-[#BDDFE8] text-sm font-medium leading-snug"
                                            x-text="item"></span>
                                    </li>
                                </template>
                            </ul>
                        </div>

                        <!-- Column 3 -->
                        <div class="flex flex-col relative group">
                            <div class="flex items-center gap-3 mb-4 border-b border-[#2E404C] pb-4">
                                <div
                                    class="w-8 h-8 rounded-full bg-[#052C47] border border-[#2E404C] flex items-center justify-center shrink-0 group-hover:border-[#2E6083] transition-colors">
                                    <i data-lucide="target"
                                        class="w-4 h-4 text-[#C0C0C0] group-hover:text-[#2E6083] transition-colors"></i>
                                </div>
                                <h3 class="text-lg font-bold text-white uppercase tracking-wider">Test Campaign Plan
                                </h3>
                            </div>
                            <p class="text-slate-300 text-[0.65rem] uppercase tracking-widest mb-6 leading-relaxed">
                                Strategy
                                for initial market testing</p>
                            <ul class="space-y-3 flex-1">
                                <template
                                    x-for="item in ['Target Audience Segmentation', 'Ad Campaign Plan', 'Content Plan', 'Budget Allocation Breakdown', 'Execution Timeline', 'Expected Outcomes']"
                                    :key="item">
                                    <li class="flex items-start gap-3">
                                        <span
                                            class="w-1.5 h-1.5 rounded-full bg-[#C0C0C0] mt-1.5 shrink-0 shadow-[0_0_5px_rgba(192,192,192,0.5)]"></span>
                                        <span class="text-[#BDDFE8] text-sm font-medium leading-snug"
                                            x-text="item"></span>
                                    </li>
                                </template>
                            </ul>
                        </div>

                        <!-- Column 4 -->
                        <div class="flex flex-col relative group">
                            <div class="flex items-center gap-3 mb-4 border-b border-[#2E404C] pb-4">
                                <div
                                    class="w-8 h-8 rounded-full bg-[#052C47] border border-[#2E404C] flex items-center justify-center shrink-0 group-hover:border-[#2E6083] transition-colors">
                                    <i data-lucide="lightbulb"
                                        class="w-4 h-4 text-[#C0C0C0] group-hover:text-[#2E6083] transition-colors"></i>
                                </div>
                                <h3 class="text-lg font-bold text-white uppercase tracking-wider">Creative Strategy</h3>
                            </div>
                            <p class="text-slate-300 text-[0.65rem] uppercase tracking-widest mb-6 leading-relaxed">
                                Foundations for all future content initiatives</p>
                            <ul class="space-y-3 flex-1">
                                <template
                                    x-for="item in ['Creative Concepts Overview', 'Creative Hooks & Ideas', 'Creative Production Guide', 'Creative Testing Methodology']"
                                    :key="item">
                                    <li class="flex items-start gap-3">
                                        <span
                                            class="w-1.5 h-1.5 rounded-full bg-[#C0C0C0] mt-1.5 shrink-0 shadow-[0_0_5px_rgba(192,192,192,0.5)]"></span>
                                        <span class="text-[#BDDFE8] text-sm font-medium leading-snug"
                                            x-text="item"></span>
                                    </li>
                                </template>
                            </ul>
                        </div>

                    </div>

                    <!-- PROCESS SECTION -->
                    <div
                        class="bg-[#052C47] rounded-2xl p-6 md:p-8 border border-[#2E404C] relative overflow-hidden group/process mt-auto">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-transparent via-[#2E6083]/10 to-transparent pointer-events-none opacity-50 group-hover/process:opacity-100 transition-opacity duration-700">
                        </div>
                        <div class="flex flex-col lg:flex-row items-center gap-8 md:gap-12 relative z-10">

                            <div class="lg:w-1/4 text-center lg:text-left">
                                <h3 class="text-xl md:text-2xl font-black text-white uppercase tracking-widest mb-2">
                                    PROCESS
                                </h3>
                                <p class="text-slate-300 text-xs md:text-sm">Research Timeline & Execution</p>
                            </div>

                            <div class="lg:w-3/4 w-full">
                                <div
                                    class="flex flex-col md:flex-row items-center justify-between relative gap-6 md:gap-0">
                                    <!-- Connecting Line -->
                                    <div
                                        class="hidden md:block absolute top-1/2 left-0 w-full h-[2px] bg-[#2E404C] -translate-y-1/2 z-0">
                                        <div
                                            class="h-full w-full bg-gradient-to-r from-[#C0C0C0] via-[#2E6083] to-[#C0C0C0] opacity-50">
                                        </div>
                                    </div>

                                    <!-- Step 1 -->
                                    <div
                                        class="relative z-10 flex flex-col items-center bg-[#052C47] p-4 rounded-xl border border-[#2E404C] md:border-none shadow-lg md:shadow-none min-w-[140px]">
                                        <div
                                            class="w-12 h-12 rounded-full bg-[#1A364A] border-2 border-[#C0C0C0] flex items-center justify-center mb-3 shadow-[0_0_15px_rgba(192,192,192,0.2)]">
                                            <i data-lucide="clock" class="w-5 h-5 text-[#C0C0C0]"></i>
                                        </div>
                                        <span class="text-white font-bold text-sm tracking-wide">Day 1-3</span>
                                        <span class="text-slate-300 text-xs uppercase tracking-wider mt-1">Onboarding &
                                            Audit</span>
                                    </div>

                                    <!-- Step 2 -->
                                    <div
                                        class="relative z-10 flex flex-col items-center bg-[#052C47] p-4 rounded-xl border border-[#2E404C] md:border-none shadow-lg md:shadow-none min-w-[140px]">
                                        <div
                                            class="w-12 h-12 rounded-full bg-[#1A364A] border-2 border-[#2E6083] flex items-center justify-center mb-3 shadow-[0_0_15px_rgba(30,64,175,0.3)]">
                                            <i data-lucide="microscope" class="w-5 h-5 text-[#2E6083]"></i>
                                        </div>
                                        <span class="text-white font-bold text-sm tracking-wide">Day 4-18</span>
                                        <span class="text-slate-300 text-xs uppercase tracking-wider mt-1">Deep
                                            Research</span>
                                    </div>

                                    <!-- Step 3 -->
                                    <div
                                        class="relative z-10 flex flex-col items-center bg-[#052C47] p-4 rounded-xl border border-[#2E404C] md:border-none shadow-lg md:shadow-none min-w-[140px]">
                                        <div
                                            class="w-12 h-12 rounded-full bg-[#1A364A] border-2 border-[#C0C0C0] flex items-center justify-center mb-3 shadow-[0_0_15px_rgba(192,192,192,0.2)]">
                                            <i data-lucide="layout-dashboard" class="w-5 h-5 text-[#C0C0C0]"></i>
                                        </div>
                                        <span class="text-white font-bold text-sm tracking-wide">Day 19-21</span>
                                        <span class="text-slate-300 text-xs uppercase tracking-wider mt-1">Strategy
                                            Delivery</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- PHASE 2 CONTENT (Testing) -->
            <div x-show="activeStep === 'testing'"
                class="flex flex-col h-full overflow-y-auto custom-scrollbar relative bg-[#1A364A]">
                <!-- Deep space background with subtle stars & glowing vapor plume -->
                <div class="absolute inset-0 z-0 pointer-events-none overflow-hidden">
                    <div
                        class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/stardust.png')] opacity-20">
                    </div>
                    <!-- Elegant swirling glowing vapor plume (gold and blue) rising up right side -->
                    <div
                        class="absolute top-0 right-0 w-[500px] h-[150%] bg-gradient-to-b from-[#2E6083]/20 via-brand-deep/10 to-transparent blur-[80px] mix-blend-screen">
                    </div>
                    <div
                        class="absolute top-1/4 -right-20 w-[400px] h-[600px] bg-brand-deep/20 blur-[100px] rounded-full mix-blend-screen rotate-12">
                    </div>
                </div>

                <div class="relative z-10 flex flex-col w-full">
                    <!-- HEADER / METRICS SECTION -->
                    <div class="p-8 md:p-10 border-b border-[#2E404C] flex flex-col lg:flex-row gap-10 items-start">

                        <!-- Left Side: Title & Description -->
                        <div class="flex-1 flex flex-col gap-6">
                            <h2
                                class="text-3xl md:text-5xl font-black text-white tracking-widest uppercase font-display">
                                PHASE 2: TESTING</h2>

                            <div
                                class="bg-brand-tertiary/90 backdrop-blur-md px-6 py-4 rounded-xl shadow-[0_0_25px_rgba(13,148,136,0.3)] self-start border border-brand-tertiary/50">
                                <span
                                    class="text-brand-darkest font-black text-xl md:text-2xl uppercase tracking-wider block">Testing</span>
                                <span
                                    class="text-brand-deep text-xs font-bold uppercase tracking-[0.2em] mt-1 block">Duration:
                                    3 Weeks</span>
                            </div>

                            <p class="text-slate-200 text-sm md:text-base leading-relaxed max-w-xl font-medium mt-2">
                                Strategy meets reality in the testing phase. We execute a controlled campaign to gather
                                real-world data, allowing us to test & refine our approach before scaling.
                            </p>
                        </div>

                        <!-- Right Side: Price & Ad Budget Box -->
                        <div class="flex-1 flex flex-col sm:flex-row gap-6 w-full lg:justify-end mt-4 lg:mt-0">
                            <!-- Metrics Bar -->
                            <div class="border-l-4 border-[#2E6083] pl-6 py-2 flex flex-col justify-center">
                                <div
                                    class="text-4xl md:text-5xl font-black text-white tracking-tight mb-4 drop-shadow-[0_0_10px_rgba(30,64,175,0.4)]">
                                    Rs. 80,000</div>
                                <ul class="space-y-2.5">
                                    <li class="flex items-center gap-3"><i data-lucide="arrow-right"
                                            class="w-4 h-4 text-[#2E6083]"></i><span
                                            class="text-[#BDDFE8] font-bold text-sm">Test Campaign Report</span></li>
                                    <li class="flex items-center gap-3"><i data-lucide="arrow-right"
                                            class="w-4 h-4 text-[#2E6083]"></i><span
                                            class="text-[#BDDFE8] font-bold text-sm">Content Report</span></li>
                                    <li class="flex items-center gap-3"><i data-lucide="arrow-right"
                                            class="w-4 h-4 text-[#2E6083]"></i><span
                                            class="text-[#BDDFE8] font-bold text-sm">Future Campaign Plan</span></li>
                                    <li class="flex items-center gap-3"><i data-lucide="arrow-right"
                                            class="w-4 h-4 text-[#2E6083]"></i><span
                                            class="text-[#BDDFE8] font-bold text-sm">Optimized Ad Account</span></li>
                                </ul>
                            </div>

                            <!-- Ad Budget Box -->
                            <div
                                class="bg-white rounded-3xl p-6 md:p-8 flex flex-col items-center justify-center shadow-[0_20px_40px_rgba(0,0,0,0.4)] min-w-[200px] border border-white/20">
                                <span
                                    class="text-[#1A364A] font-black text-xl md:text-2xl uppercase tracking-tight mb-1 text-center leading-none">Rs.
                                    50,000 <br><span class="text-sm">AD BUDGET</span></span>
                                <div
                                    class="w-16 h-16 rounded-full bg-[#052C47]/5 border border-[#052C47]/10 flex items-center justify-center mb-3 mt-4">
                                    <i data-lucide="coins" class="w-8 h-8 text-[#1A364A]"></i>
                                </div>
                                <span class="text-[#1A364A] font-black text-sm uppercase tracking-wider">20
                                    Credits</span>
                            </div>
                        </div>
                    </div>

                    <!-- DELIVERABLES SECTION -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-10 p-8 md:p-10">
                        <!-- Col 1 -->
                        <div
                            class="flex flex-col group bg-[#052C47]/40 p-6 rounded-2xl border border-[#2E404C] hover:border-[#2E6083]/50 transition-colors shadow-lg">
                            <h3
                                class="text-lg font-bold text-white mb-4 uppercase tracking-wider border-b border-[#2E404C] pb-4">
                                Test Campaign Report</h3>
                            <p
                                class="text-brand-tertiary text-xs uppercase tracking-wider font-bold mb-5 flex items-start gap-2 leading-relaxed">
                                <span
                                    class="mt-1.5 w-2 h-2 rounded-full bg-brand-tertiary shrink-0 shadow-[0_0_8px_rgba(45,212,191,0.8)]"></span>Performance
                                analysis of the actual data including:
                            </p>
                            <ul class="space-y-3.5 flex-1">
                                <template
                                    x-for="item in ['Ad Campaign Report', 'KPI Report', 'Ad Performance Breakdown', 'Calculated ROAS']"
                                    :key="item">
                                    <li class="flex items-start gap-3">
                                        <i data-lucide="arrow-right" class="w-4 h-4 text-[#2E6083] mt-0.5 shrink-0"></i>
                                        <span class="text-[#BDDFE8] text-sm font-medium leading-snug"
                                            x-text="item"></span>
                                    </li>
                                </template>
                            </ul>
                        </div>

                        <!-- Col 2 -->
                        <div
                            class="flex flex-col group bg-[#052C47]/40 p-6 rounded-2xl border border-[#2E404C] hover:border-[#2E6083]/50 transition-colors shadow-lg">
                            <h3
                                class="text-lg font-bold text-white mb-4 uppercase tracking-wider border-b border-[#2E404C] pb-4">
                                Content Report</h3>
                            <p
                                class="text-brand-tertiary text-xs uppercase tracking-wider font-bold mb-5 flex items-start gap-2 leading-relaxed">
                                <span
                                    class="mt-1.5 w-2 h-2 rounded-full bg-brand-tertiary shrink-0 shadow-[0_0_8px_rgba(45,212,191,0.8)]"></span>Insights
                                into which creative styles performed best including:
                            </p>
                            <ul class="space-y-3.5 flex-1">
                                <template
                                    x-for="item in ['Content Performance Metrics', 'Content Performance Breakdown', 'Credit Usage Breakdown', 'Doi\'s & Don\'ts']"
                                    :key="item">
                                    <li class="flex items-start gap-3">
                                        <i data-lucide="arrow-right" class="w-4 h-4 text-[#2E6083] mt-0.5 shrink-0"></i>
                                        <span class="text-[#BDDFE8] text-sm font-medium leading-snug"
                                            x-text="item"></span>
                                    </li>
                                </template>
                            </ul>
                        </div>

                        <!-- Col 3 -->
                        <div
                            class="flex flex-col group bg-[#052C47]/40 p-6 rounded-2xl border border-[#2E404C] hover:border-[#2E6083]/50 transition-colors shadow-lg">
                            <h3
                                class="text-lg font-bold text-white mb-4 uppercase tracking-wider border-b border-[#2E404C] pb-4">
                                Future Campaign Plan</h3>
                            <p
                                class="text-brand-tertiary text-xs uppercase tracking-wider font-bold mb-5 flex items-start gap-2 leading-relaxed">
                                <span
                                    class="mt-1.5 w-2 h-2 rounded-full bg-brand-tertiary shrink-0 shadow-[0_0_8px_rgba(45,212,191,0.8)]"></span>A
                                refined strategy for future full-scale launch including:
                            </p>
                            <ul class="space-y-3.5 flex-1">
                                <template
                                    x-for="item in ['Ad Campaign Plan', 'Content Plan', 'Mastering Tips', 'Doi\'s & Don\'ts']"
                                    :key="item">
                                    <li class="flex items-start gap-3">
                                        <i data-lucide="arrow-right" class="w-4 h-4 text-[#2E6083] mt-0.5 shrink-0"></i>
                                        <span class="text-[#BDDFE8] text-sm font-medium leading-snug"
                                            x-text="item"></span>
                                    </li>
                                </template>
                            </ul>
                        </div>

                        <!-- Col 4 -->
                        <div
                            class="flex flex-col group bg-[#052C47]/40 p-6 rounded-2xl border border-[#2E404C] hover:border-[#2E6083]/50 transition-colors shadow-lg">
                            <h3
                                class="text-lg font-bold text-white mb-4 uppercase tracking-wider border-b border-[#2E404C] pb-4">
                                Credit Usage Report</h3>
                            <div
                                class="mt-4 bg-gradient-to-b from-[#052C47] to-[#1A364A] border border-[#2E404C] rounded-xl p-6 text-center group-hover:border-[#2E6083]/50 transition-colors shadow-inner flex-1 flex flex-col justify-center relative overflow-hidden">
                                <!-- Inner glow -->
                                <div class="absolute inset-0 bg-brand-tertiary/5 blur-xl pointer-events-none"></div>
                                <div
                                    class="w-14 h-14 mx-auto rounded-full bg-[#052C47] border border-[#2E404C] flex items-center justify-center mb-4 relative z-10 shadow-lg">
                                    <i data-lucide="arrow-right" class="w-6 h-6 text-[#2E6083]"></i>
                                </div>
                                <h4
                                    class="text-lg md:text-xl font-black text-white uppercase tracking-wider mb-3 relative z-10">
                                    Optimized Ad Account</h4>
                                <p class="text-slate-300 text-xs leading-relaxed font-medium relative z-10">A dedicated
                                    Ad account populated with valuable test data.</p>
                            </div>
                        </div>
                    </div>

                    <!-- PROCESS AND TIMELINE SECTION -->
                    <div
                        class="bg-[#052C47]/80 backdrop-blur-md rounded-2xl p-8 md:p-10 mx-8 md:mx-10 mb-10 border border-[#2E404C] shadow-2xl relative overflow-hidden group/process">
                        <!-- Accent Line -->
                        <div
                            class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-brand-tertiary via-[#2E6083] to-brand-deep opacity-50">
                        </div>

                        <div class="flex flex-col lg:flex-row gap-10 md:gap-12 items-center">

                            <div class="lg:w-1/3 flex flex-col items-start text-left">
                                <div
                                    class="bg-white px-8 py-2.5 rounded-xl inline-block mb-6 shadow-[0_0_20px_rgba(255,255,255,0.15)]">
                                    <span
                                        class="text-[#1A364A] font-black uppercase tracking-[0.2em] text-xl">Process</span>
                                </div>
                                <p class="text-slate-300 text-sm leading-relaxed font-medium">
                                    We kick-off with a Physical Mockup for plan finalization and KPI setting. Our team
                                    then moves into Content Creation and Ad Account Setup. During the Test Campaign Run,
                                    we monitor performance in real-time. The phase concludes with a Reporting Meetup,
                                    where we present data-backed insights and a plan for long-term growth.
                                </p>
                            </div>

                            <div class="lg:w-2/3 w-full relative pt-6 md:pt-0">
                                <div
                                    class="flex flex-col md:flex-row items-center justify-between relative gap-6 md:gap-0 z-10">
                                    <!-- Connecting Line -->
                                    <div
                                        class="hidden md:block absolute top-6 left-6 right-6 h-[2px] bg-[#2E404C] -translate-y-1/2 z-0">
                                        <div
                                            class="h-full w-full bg-gradient-to-r from-brand-tertiary via-[#2E6083] to-brand-tertiary opacity-30 group-hover/process:opacity-100 transition-opacity duration-700">
                                        </div>
                                    </div>

                                    <!-- Timeline Steps -->
                                    <div class="flex flex-col items-center w-full md:w-auto z-10 group/step">
                                        <div
                                            class="w-12 h-12 rounded-full bg-[#1A364A] border-2 border-brand-tertiary flex items-center justify-center mb-4 shadow-[0_0_15px_rgba(20,184,166,0.3)] group-hover/step:scale-110 transition-transform">
                                            <div class="w-3 h-3 rounded-full bg-brand-tertiary animate-pulse"></div>
                                        </div>
                                        <span class="text-white font-bold text-sm tracking-wide mb-1">Day 1-3</span>
                                        <span
                                            class="text-slate-400 text-[10px] uppercase tracking-widest font-bold">Kick-off</span>
                                    </div>

                                    <div class="flex flex-col items-center w-full md:w-auto z-10 group/step">
                                        <div
                                            class="w-12 h-12 rounded-full bg-[#1A364A] border-2 border-[#2E6083] flex items-center justify-center mb-4 shadow-[0_0_15px_rgba(30,64,175,0.4)] group-hover/step:scale-110 transition-transform delay-75">
                                            <div class="w-3 h-3 rounded-full bg-[#2E6083]"></div>
                                        </div>
                                        <span class="text-white font-bold text-sm tracking-wide mb-1">Day 3-13</span>
                                        <span
                                            class="text-slate-400 text-[10px] uppercase tracking-widest font-bold">Setup</span>
                                    </div>

                                    <div class="flex flex-col items-center w-full md:w-auto z-10 group/step">
                                        <div
                                            class="w-12 h-12 rounded-full bg-[#1A364A] border-2 border-brand-secondary flex items-center justify-center mb-4 shadow-[0_0_15px_rgba(96,165,250,0.3)] group-hover/step:scale-110 transition-transform delay-150">
                                            <div class="w-3 h-3 rounded-full bg-brand-secondary"></div>
                                        </div>
                                        <span class="text-white font-bold text-sm tracking-wide mb-1">Day 14-33</span>
                                        <span
                                            class="text-slate-400 text-[10px] uppercase tracking-widest font-bold">Campaign</span>
                                    </div>

                                    <div class="flex flex-col items-center w-full md:w-auto z-10 group/step">
                                        <div
                                            class="w-12 h-12 rounded-full bg-[#1A364A] border-2 border-brand-accent flex items-center justify-center mb-4 shadow-[0_0_15px_rgba(192,132,252,0.3)] group-hover/step:scale-110 transition-transform delay-200">
                                            <div class="w-3 h-3 rounded-full bg-brand-accent"></div>
                                        </div>
                                        <span class="text-white font-bold text-sm tracking-wide mb-1">Day 33-35</span>
                                        <span
                                            class="text-slate-400 text-[10px] uppercase tracking-widest font-bold">Reporting</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PHASE 3 CONTENT (Retainer) -->
            <div x-show="activeStep === 'retainer'"
                class="flex flex-col h-full overflow-y-auto custom-scrollbar relative bg-[#1A364A]">
                <!-- Background -->
                <div class="absolute inset-0 z-0 pointer-events-none overflow-hidden">
                    <div
                        class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/stardust.png')] opacity-20">
                    </div>
                    <!-- Teal glow -->
                    <div
                        class="absolute top-0 right-0 w-[500px] h-[150%] bg-gradient-to-b from-brand-tertiary/10 via-brand-deep/10 to-transparent blur-[80px] mix-blend-screen">
                    </div>
                </div>

                <div class="relative z-10 flex flex-col w-full">
                    <!-- HEADER SECTION -->
                    <div class="p-8 md:p-10 border-b border-[#2E404C] flex flex-col lg:flex-row gap-10 items-start">
                        <div class="flex-1 flex flex-col gap-4">
                            <h2
                                class="text-3xl md:text-5xl font-black text-brand-tertiary tracking-widest uppercase font-display drop-shadow-[0_0_15px_rgba(45,212,191,0.2)]">
                                PHASE 3 <br><span class="text-white">RETAINER</span></h2>

                            <p class="text-slate-200 text-sm md:text-base leading-relaxed max-w-3xl font-medium mt-2">
                                Our monthly retainer packages provide consistent, high-quality management to ensure your
                                brand
                                stays ahead of the competition.
                            </p>
                        </div>
                    </div>

                    <!-- PRICING/PLAN SECTION -->
                    <div class="p-8 md:p-10">
                        <!-- Top Box -->
                        <div
                            class="bg-white rounded-[2rem] flex flex-col md:flex-row items-stretch shadow-[0_20px_40px_rgba(0,0,0,0.4)] border border-white/20 relative overflow-hidden mb-12">
                            <!-- Left teal box -->
                            <div
                                class="bg-brand-tertiary/95 rounded-r-[3rem] p-8 md:p-10 flex flex-col justify-center min-w-[280px] relative z-10 shadow-[10px_0_20px_rgba(0,0,0,0.1)]">
                                <h3 class="text-brand-darkest font-black text-3xl md:text-4xl mb-1">Retainer</h3>
                                <p class="text-brand-deep font-bold uppercase tracking-wider text-sm">Per Month</p>
                            </div>
                            <!-- Right content -->
                            <div class="flex-1 p-6 md:p-8 flex flex-col justify-center relative -ml-4 pl-8">
                                <div
                                    class="flex flex-col xl:flex-row items-start xl:items-center justify-between gap-8">
                                    <div class="flex flex-col">
                                        <span class="text-brand-tertiary/80 font-bold text-lg mb-1">Starting From</span>
                                        <div class="flex flex-wrap items-center gap-4">
                                            <span
                                                class="text-5xl md:text-6xl font-black text-brand-tertiary tracking-tight">Rs.85,000</span>
                                            <span
                                                class="bg-[#052C47] text-brand-darkest px-5 py-2.5 rounded-full text-xs font-black uppercase tracking-widest shadow-lg">+
                                                AD BUDGET</span>
                                        </div>
                                    </div>
                                    <!-- Credits & Platform -->
                                    <div
                                        class="flex flex-col sm:flex-row items-center gap-6 md:gap-14 mt-6 xl:mt-0 bg-slate-50 p-6 md:p-8 rounded-[2rem] border border-slate-100 shadow-sm w-full md:w-auto">
                                        <!-- Credits Column -->
                                        <div class="flex items-center gap-5">
                                            <div
                                                class="w-13 h-13 rounded-full bg-gradient-to-br from-[#FFD700] to-[#FDB931] flex items-center justify-center shadow-[0_4px_15px_rgba(255,215,0,0.4)] border-2 border-white transform transition-transform hover:scale-105 duration-300">
                                                <i data-lucide="coins" stroke-width="1.5" class="w-6 h-6 text-[#1A364A]"></i>
                                            </div>
                                            <div class="flex flex-col">
                                                <span class="text-4xl md:text-5xl font-black text-[#1A364A] leading-none">20</span>
                                                <span
                                                    class="text-sm font-black uppercase tracking-widest text-[#1A364A] mt-1.5">Credits</span>
                                            </div>
                                        </div>
                                        
                                        <!-- Separation Line -->
                                        <div class="hidden md:block w-px h-20 bg-slate-200"></div>
                                        
                                        <!-- Platform Column -->
                                        <div class="flex items-center gap-5">
                                            <div class="w-13 h-13 flex items-center justify-center text-slate-400 hover:text-[#1A364A] transition-colors duration-300">
                                                <!-- Stack icon representing layers/platforms -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-layers">
                                                    <polygon points="12 2 2 7 12 12 22 7 12 2" />
                                                    <polyline points="2 12 12 17 22 12" />
                                                    <polyline points="2 17 12 22 22 17" />
                                                </svg>
                                            </div>
                                            <div class="flex flex-col">
                                                <div class="flex items-baseline gap-2">
                                                    <span class="text-4xl md:text-5xl font-black text-[#1A364A] leading-none">1</span>
                                                    <span class="text-sm font-black uppercase tracking-widest text-[#1A364A]">Platform</span>
                                                </div>
                                                <div class="flex gap-2.5 mt-3">
                                                    <!-- Social Platforms Matching Footer Logos & Brand Hovers -->
                                                    <!-- Facebook -->
                                                    <a href="https://facebook.com/ayonionstudios" target="_blank" aria-label="Facebook"
                                                        class="w-10 h-10 rounded-xl bg-[#1A364A] flex items-center justify-center text-white transition-all duration-300 hover:bg-brand-highlight hover:text-brand-darkest hover:scale-110 shadow-md hover:shadow-brand-highlight/20">
                                                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                                        </svg>
                                                    </a>
                                                    <!-- Instagram -->
                                                    <a href="https://instagram.com/ayonionstudios" target="_blank" aria-label="Instagram"
                                                        class="w-10 h-10 rounded-xl bg-[#1A364A] flex items-center justify-center text-white transition-all duration-300 hover:bg-gradient-to-tr hover:from-[#f09433] hover:via-[#dc2743] hover:to-[#bc1888] hover:scale-110 shadow-md hover:shadow-[#dc2743]/20">
                                                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                                                        </svg>
                                                    </a>
                                                    <!-- LinkedIn -->
                                                    <a href="https://www.linkedin.com/company/ayonion-studios/posts/?feedView=all" target="_blank" aria-label="LinkedIn"
                                                        class="w-10 h-10 rounded-xl bg-[#1A364A] flex items-center justify-center text-white transition-all duration-300 hover:bg-[#0A66C2] hover:scale-110 shadow-md hover:shadow-[#0A66C2]/20">
                                                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.225 0h.003z" />
                                                        </svg>
                                                    </a>
                                                    <!-- Pinterest -->
                                                    <a href="https://www.pinterest.com/ayonions/ayonion-studios-portfolio/" target="_blank" aria-label="Pinterest"
                                                        class="w-10 h-10 rounded-xl bg-[#1A364A] flex items-center justify-center text-white transition-all duration-300 hover:bg-[#E60023] hover:scale-110 shadow-md hover:shadow-[#E60023]/20">
                                                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                                            <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.719-.359-1.781c0-1.663.967-2.906 2.17-2.906 1.023 0 1.517.769 1.517 1.686 0 1.027-.653 2.567-.991 3.993-.283 1.195.597 2.17 1.777 2.17 2.133 0 3.771-2.249 3.771-5.495 0-2.872-2.064-4.881-5.011-4.881-3.414 0-5.419 2.561-5.419 5.207 0 1.031.397 2.138.893 2.738.098.119.112.224.083.345-.091.378-.293 1.189-.332 1.348-.052.21-.173.254-.398.15-1.486-.689-2.414-2.855-2.414-4.594 0-3.74 2.718-7.177 7.842-7.177 4.116 0 7.313 2.933 7.313 6.85 0 4.09-2.576 7.382-6.149 7.382-1.202 0-2.334-.625-2.721-1.363l-.74 2.828c-.267 1.023-.992 2.302-1.478 3.086 1.125.347 2.316.535 3.551.535 6.621 0 11.985-5.367 11.985-11.987C23.97 5.39 18.592.022 12.017.022z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Inclusions & Deliverables -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-16 mb-16">
                            <!-- Inclusions -->
                            <div class="flex flex-col">
                                <div
                                    class="bg-brand-tertiary/90 rounded-full px-8 py-2.5 inline-block self-center md:self-start mb-8 shadow-lg">
                                    <span
                                        class="text-brand-darkest font-bold tracking-widest uppercase text-sm">Inclusions</span>
                                </div>
                                <ul class="space-y-4">
                                    <template
                                        x-for="item in ['A Separate Digital Marketing Coordinator', 'Platform Management', 'Content Creation', 'Strategizing', 'Monthly Reporting', 'Unlimited Ad Campaigns', 'Unlimited Postings', 'SEO']"
                                        :key="item">
                                        <li class="flex items-start gap-4 group">
                                            <i data-lucide="chevron-right"
                                                class="w-5 h-5 text-brand-tertiary shrink-0 group-hover:translate-x-1 transition-transform mt-0.5"></i>
                                            <span class="text-white font-medium text-lg leading-snug"
                                                x-text="item"></span>
                                        </li>
                                    </template>
                                </ul>
                            </div>

                            <!-- Deliverables -->
                            <div class="flex flex-col">
                                <div
                                    class="bg-[#052C47] border border-[#2E404C] rounded-full px-8 py-2.5 inline-block self-center md:self-start mb-8 shadow-lg">
                                    <span
                                        class="text-brand-darkest font-bold tracking-widest uppercase text-sm">Deliverables</span>
                                </div>
                                <ul class="space-y-4">
                                    <li class="flex items-start gap-4 group">
                                        <i data-lucide="chevron-right"
                                            class="w-5 h-5 text-brand-tertiary shrink-0 group-hover:translate-x-1 transition-transform mt-0.5"></i>
                                        <span class="text-white font-medium text-lg leading-snug">Monthly Content
                                            Plan</span>
                                    </li>
                                    <li class="flex items-start gap-4 group">
                                        <i data-lucide="chevron-right"
                                            class="w-5 h-5 text-brand-tertiary shrink-0 group-hover:translate-x-1 transition-transform mt-0.5"></i>
                                        <span class="text-white font-medium text-lg leading-snug">Monthly Ad Plan</span>
                                    </li>
                                    <li class="flex items-start gap-4 group">
                                        <i data-lucide="chevron-right"
                                            class="w-5 h-5 text-brand-tertiary shrink-0 group-hover:translate-x-1 transition-transform mt-0.5"></i>
                                        <div class="flex flex-col w-full">
                                            <span class="text-white font-medium text-lg leading-snug mb-3">Monthly
                                                Report :</span>
                                            <ul class="space-y-3 pl-2">
                                                <template
                                                    x-for="subitem in ['Ad Campaign Report', 'Ad Performance Breakdown', 'Credit Usage Report', 'KPI Report', 'Platform Performance Metrics', 'Platform Performance Breakdown']"
                                                    :key="subitem">
                                                    <li class="flex items-center gap-3">
                                                        <span
                                                            class="w-1.5 h-1.5 rounded-full border border-brand-tertiary shrink-0 shadow-[0_0_5px_rgba(45,212,191,0.5)]"></span>
                                                        <span class="text-[#BDDFE8] text-[0.95rem]"
                                                            x-text="subitem"></span>
                                                    </li>
                                                </template>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    #research-testing [x-cloak] {
        display: none !important;
    }

    @import url('https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,900&display=swap');

    #research-testing .font-display {
        font-family: 'Fraunces', serif;
    }

    /* Modern Digital Tech Animations */
    @keyframes tech-slide {
        0% {
            opacity: 0;
            transform: translateX(15px);
            filter: blur(5px);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
            filter: blur(0);
        }
    }

    .tech-slide-item {
        opacity: 0;
        animation: tech-slide 0.5s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    @keyframes flow {
        0% {
            transform: translateX(-100%);
        }

        100% {
            transform: translateX(200%);
        }
    }
</style>
