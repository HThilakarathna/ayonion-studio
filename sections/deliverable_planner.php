<!-- Deliverable Planner Section -->
<section id="deliverable-planner" class="py-32 bg-brand-darkest relative overflow-hidden" 
         x-data="{ 
            planCredits: 'custom',
            customCreditsInput: '',
            isCustomCredit: true,
            counts: {},
            services: [
                { id: 1, name: 'Static Post Graphic', credits: 1 },
                { id: 2, name: 'Cover Image + Profile Picture', credits: 1 },
                { id: 3, name: 'Loop Video (10s-15s)', credits: 2 },
                { id: 4, name: 'Short Video (Up to 3 min)', credits: 3 },
                { id: 5, name: 'Long Video (Up to 10 min)', credits: 5 },
                { id: 6, name: 'Carousel', credits: 2 },
                { id: 7, name: 'Video Script Writing', credits: 1 },
                { id: 8, name: 'Competitor Audit', credits: 5 },
                { id: 9, name: 'Complete Research', credits: 10 },
                { id: 10, name: 'Recording Day (Up to 4 hours)', credits: 8 },
                { id: 11, name: 'Logo Creation', credits: 5 },
                { id: 12, name: 'Influencer / Model Research', credits: 3 },
                { id: 13, name: 'Article Writing', credits: 2 },
                { id: 14, name: 'Blog Post', credits: 1 },
                { id: 15, name: 'Business Card Design', credits: 1 },
                { id: 16, name: 'Company Profile (Up to 30 pages)', credits: 5 },
                { id: 17, name: 'Brochure (Up to 8 pages)', credits: 3 },
                { id: 18, name: 'Leaflet', credits: 2 },
                { id: 19, name: 'Platform Consultation', credits: 0, tag: 'FREE' },
                { id: 20, name: 'Ad Campaign Setup', credits: 0, tag: 'FREE' },
                { id: 21, name: 'Social Media / Web Posting', credits: 0, tag: 'FREE' },
                { id: 22, name: 'Creative Copywriting', credits: 0, tag: 'FREE' },
                { id: 23, name: 'Ad Campaign Optimization', credits: 0, tag: 'FREE' },
                { id: 24, name: 'Monthly Content Planning', credits: 0, tag: 'FREE' }
            ],
            init() {
                this.services.forEach(s => this.counts[s.id] = 0);
                this.counts[1] = 6; // Static Post Graphic
                this.counts[4] = 4; // Short Video
                this.counts[6] = 1; // Carousel
            },
            get totalUsed() {
                return this.services.reduce((sum, s) => sum + (s.credits * this.counts[s.id]), 0);
            },
            get maxCredits() {
                if (this.isCustomCredit) {
                    return parseInt(this.customCreditsInput) || Infinity;
                }
                return this.planCredits;
            },
            get remaining() {
                let max = this.maxCredits;
                return max === Infinity ? 'Unlimited' : (max - this.totalUsed);
            },
            get selectedServices() {
                return this.services.filter(s => this.counts[s.id] > 0);
            },
            addService(serviceId) {
                let service = this.services.find(s => s.id === serviceId);
                if (this.maxCredits !== Infinity && (this.totalUsed + service.credits > this.maxCredits)) {
                    alert('Not enough credits remaining in your plan!');
                    return;
                }
                this.counts[serviceId]++;
            },
            removeService(serviceId) {
                if (this.counts[serviceId] > 0) {
                    this.counts[serviceId]--;
                }
            }
         }">
    
    <div class="container-custom relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20" data-aos="fade-up">
            <h2 class="text-5xl md:text-6xl font-black text-white mb-6 font-display leading-tight">
                Plan your monthly <br> <span class="text-brand-secondary">deliverables.</span>
            </h2>
            <p class="text-brand-tertiary font-medium text-lg">Select the services you need this month and track your credit usage in real-time.</p>
        </div>

        <div class="grid lg:grid-cols-[1.5fr_1fr] gap-12 items-start">
            
            <!-- Service Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 order-last lg:order-first">
                <template x-for="service in services" :key="service.id">
                    <div class="bg-brand-dark p-4 rounded-xl border border-brand-accent flex items-center justify-between group hover:shadow-2xl hover:border-brand-highlight transition-all">
                        <div class="flex flex-col">
                            <h4 class="font-bold text-white text-sm mb-1" x-text="service.name"></h4>
                            <template x-if="service.credits > 0">
                                <span class="text-[11px] font-black uppercase tracking-widest text-brand-tertiary" x-text="service.credits + (service.credits === 1 ? ' CREDIT' : ' CREDITS')"></span>
                            </template>
                            <template x-if="service.credits === 0">
                                <span class="text-[11px] font-black uppercase tracking-widest text-brand-highlight" x-text="service.tag"></span>
                            </template>
                        </div>
                        
                        <div class="flex items-center gap-3">
                            <!-- Minus Button -->
                            <button @click="removeService(service.id)" 
                                    x-show="counts[service.id] > 0"
                                    x-transition
                                    class="w-8 h-8 rounded-full border border-brand-accent flex items-center justify-center text-rose-400 hover:bg-rose-500/10 hover:border-rose-400 transition-all">
                                <i data-lucide="minus" class="w-4 h-4"></i>
                            </button>

                            <!-- Count Display -->
                            <span x-show="counts[service.id] > 0" x-text="counts[service.id]" class="text-sm font-black text-white w-4 text-center"></span>

                            <!-- Plus Button -->
                            <button @click="addService(service.id)"
                                    class="w-8 h-8 rounded-full border border-brand-accent flex items-center justify-center text-brand-tertiary group-hover:bg-brand-highlight/10 group-hover:border-brand-highlight group-hover:text-brand-highlight transition-all">
                                <i data-lucide="plus" class="w-5 h-5"></i>
                            </button>
                        </div>
                    </div>
                </template>


            </div>

            <!-- Summary Panel -->
            <div class="lg:sticky lg:top-32 space-y-6 order-first lg:order-last">
                
                <!-- Usage Summary Card -->
                <div class="bg-brand-dark p-8 rounded-[2rem] shadow-2xl border border-brand-accent relative overflow-hidden">
                    <?php if ($message_sent && $_POST['type'] == 'plan_checkout'): ?>
                        <div class="text-center py-12 relative z-10" data-aos="zoom-in">
                            <div class="w-20 h-20 bg-brand-highlight/10 border border-brand-highlight/20 text-brand-highlight rounded-2xl flex items-center justify-center mx-auto mb-6 rotate-3 shadow-xl shadow-brand-highlight/10">
                                <i data-lucide="package" class="w-10 h-10"></i>
                            </div>
                            <h3 class="text-2xl font-black text-white mb-4 font-display">Plan Received!</h3>
                            <p class="text-brand-tertiary text-sm font-medium leading-relaxed mb-8">Your package has been sent to our team! We will reach out to you shortly to finalize your setup.</p>
                            
                            <!-- Localhost Debug Preview -->
                            <?php if (($_SERVER['REMOTE_ADDR'] == '127.0.0.1' || $_SERVER['REMOTE_ADDR'] == '::1') && !empty($sent_content)): ?>
                                <div class="mt-4 p-4 bg-brand-darkest/50 rounded-xl border border-brand-accent text-left relative group/debug overflow-hidden">
                                    <span class="absolute top-0 right-4 -translate-y-1/2 bg-brand-dark border border-brand-accent px-2 py-0.5 rounded-full text-[9px] font-black uppercase tracking-widest text-brand-tertiary">Dev Preview</span>
                                    <p class="text-[9px] font-black uppercase tracking-widest text-brand-secondary mb-2 flex items-center gap-2">
                                        <i data-lucide="mail" class="w-3 h-3"></i> Plan Data for: info@ayonionstudios.com
                                    </p>
                                    <pre class="text-[10px] font-mono text-brand-tertiary leading-relaxed overflow-x-auto whitespace-pre-wrap"><?php echo htmlspecialchars($sent_content); ?></pre>
                                </div>
                            <?php endif; ?>

                            <button @click="window.location.reload()" class="mt-8 text-[0.65rem] font-black uppercase tracking-widest text-brand-highlight hover:text-white transition-colors flex items-center gap-2 mx-auto">
                                <i data-lucide="refresh-cw" class="w-3 h-3"></i> Create Another Plan
                            </button>
                        </div>
                    <?php else: ?>
                        <div class="mb-8">
                            <h3 class="text-xl font-black text-white font-display mb-4">Usage Summary</h3>
                            
                            <label class="block text-[0.65rem] font-black uppercase tracking-widest text-brand-tertiary mb-3">
                                Number of Credits in Your Plan
                            </label>
                            
                            <div class="grid grid-cols-3 gap-2">
                                <button type="button" @click="planCredits = 20; isCustomCredit = false"
                                        :class="(!isCustomCredit && planCredits === 20) ? 'bg-brand-secondary text-brand-darkest shadow-md border-transparent' : 'bg-brand-darkest text-white border border-brand-accent hover:border-brand-highlight/50'"
                                        class="py-2.5 rounded-lg text-xs font-black transition-all uppercase tracking-wider">
                                    20 Credits
                                </button>
                                <button type="button" @click="planCredits = 25; isCustomCredit = false"
                                        :class="(!isCustomCredit && planCredits === 25) ? 'bg-brand-secondary text-brand-darkest shadow-md border-transparent' : 'bg-brand-darkest text-white border border-brand-accent hover:border-brand-highlight/50'"
                                        class="py-2.5 rounded-lg text-xs font-black transition-all uppercase tracking-wider">
                                    25 Credits
                                </button>
                                <button type="button" @click="planCredits = 'custom'; isCustomCredit = true"
                                        :class="isCustomCredit ? 'bg-brand-highlight text-brand-darkest shadow-md border-transparent' : 'bg-brand-darkest text-white border border-brand-accent hover:border-brand-highlight/50'"
                                        class="py-2.5 rounded-lg text-xs font-black transition-all uppercase tracking-wider">
                                    Custom Amount
                                </button>
                            </div>

                            <div x-show="isCustomCredit" x-transition class="w-full mt-3">
                                <input type="number" x-model.number="customCreditsInput" placeholder="Enter your custom credits..." 
                                    class="w-full bg-brand-darkest text-white border border-brand-accent rounded-xl py-3 px-4 text-sm font-bold focus:outline-none focus:border-brand-highlight focus:ring-1 focus:ring-brand-highlight placeholder:text-brand-tertiary shadow-inner" />
                            </div>
                        </div>

                    <div class="mb-8">
                        <div class="flex items-baseline gap-2 mb-2">
                            <span class="text-5xl font-black text-white" x-text="totalUsed"></span>
                            <span class="text-brand-tertiary text-xl font-medium" x-text="'/ ' + (maxCredits === Infinity ? '∞' : maxCredits)"></span>
                        </div>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-[0.65rem] font-black uppercase tracking-widest text-brand-tertiary">Credits Consumed</span>
                            <span class="text-[0.65rem] font-black uppercase tracking-widest text-brand-highlight" x-text="remaining + (maxCredits === Infinity ? '' : ' REMAINING')"></span>
                        </div>
                        <!-- Progress Bar -->
                        <div class="h-2 bg-brand-darkest rounded-full overflow-hidden">
                            <div class="h-full bg-brand-secondary transition-all duration-500" 
                                 :style="'width: ' + (maxCredits === Infinity ? 100 : Math.min((totalUsed / maxCredits) * 100, 100)) + '%'"></div>
                        </div>
                    </div>

                    <!-- Form for Mailing functionality -->
                    <form action="#deliverable-planner" method="POST" class="space-y-6">
                        <input type="hidden" name="type" value="plan_checkout">
                        <input type="hidden" name="plan_credits" :value="planCredits">
                        <input type="hidden" name="total_used" :value="totalUsed">
                        <!-- Hidden input for JSON representation of selected services -->
                        <input type="hidden" name="selected_services_json" :value="JSON.stringify(selectedServices.map(s => ({ name: s.name, count: counts[s.id], credits: s.credits * counts[s.id] })))">

                        <!-- Selected Items List -->
                        <div class="space-y-2 mb-8 max-h-[300px] overflow-y-auto pr-2 custom-scrollbar">
                            <template x-if="selectedServices.length === 0 && !customCredits">
                                <p class="text-brand-tertiary text-xs italic text-center py-4">No services selected yet...</p>
                            </template>
                            <template x-for="s in selectedServices" :key="s.id">
                                <div class="flex items-center justify-between p-3 rounded-xl bg-brand-deep border border-brand-accent group/item transition-colors hover:border-brand-secondary/30">
                                    <div>
                                        <h5 class="text-xs font-bold text-white">
                                            <span x-text="counts[s.id] + 'x '"></span>
                                            <span x-text="s.name"></span>
                                        </h5>
                                    <span class="text-[0.6rem] font-black uppercase tracking-widest text-brand-secondary" x-text="s.credits > 0 ? (s.credits * counts[s.id]) + ' CR TOTAL' : 'Free'"></span>
                                    </div>
                                    <button type="button" @click="removeService(s.id)" class="text-brand-tertiary hover:text-rose-400 transition-colors">
                                        <i data-lucide="minus" class="w-4 h-4"></i>
                                    </button>
                                </div>
                            </template>
                        </div>


                    </form>
                    <?php endif; ?>
                </div>

                <!-- Custom Plan CTA -->
                <div class="bg-brand-dark border border-brand-accent p-10 rounded-[2.5rem] text-white relative overflow-hidden group shadow-2xl">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-brand-highlight/10 rounded-full -translate-y-1/2 translate-x-1/2 blur-2xl group-hover:scale-150 transition-transform duration-700"></div>
                    <h4 class="text-xl font-black mb-4">Need a custom plan?</h4>
                    <p class="text-brand-tertiary text-[0.85rem] font-medium leading-relaxed mb-8">Like rubber, we stretch to fit your needs. Count on us for the optimal solution.</p>
                    <a href="#contact" class="inline-flex items-center gap-3 font-black text-[0.75rem] uppercase tracking-widest text-brand-highlight hover:text-brand-secondary hover:gap-5 transition-all">
                        TALK TO OUR TEAM <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
    .custom-scrollbar::-webkit-scrollbar {
        width: 4px;
    }
    .custom-scrollbar::-webkit-scrollbar-track {
        background: transparent;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #2E404C;
        border-radius: 10px;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover {
        background: #618698;
    }
</style>
