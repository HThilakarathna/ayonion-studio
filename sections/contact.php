<!-- Contact Section -->
<section id="contact" class="section-padding bg-white relative overflow-hidden">
    <!-- Subtle Background Glow -->
    <div class="absolute top-0 left-0 w-full h-full pointer-events-none overflow-hidden">
        <div class="absolute top-[-10%] right-[-10%] w-[40vw] h-[40vw] rounded-full bg-brand-secondary/5 blur-[120px]">
        </div>
    </div>

    <div class="container-custom relative z-10">
        <div class="grid lg:grid-cols-[1fr_1.2fr] gap-16 items-center mb-24">
            <div>
                <span
                    class="inline-flex items-center gap-2 rounded-full bg-brand-tertiary/10 px-4 py-1.5 text-[0.75rem] font-black uppercase tracking-[0.3em] text-brand-tertiary mb-8 border border-brand-tertiary/20">
                    <span class="h-1.5 w-1.5 rounded-full bg-brand-tertiary animate-pulse"></span>
                    Get in Touch
                </span>
                <h2
                    class="text-5xl md:text-8xl font-black text-brand-darkest mb-8 tracking-tighter leading-tight font-display">
                    Let's Start a <br> <span class="text-brand-tertiary">Conversation.</span>
                </h2>
                <p class="text-xl text-slate-600 mb-10 leading-relaxed font-medium">Want to Partner up? Reach out and let’s talk about how we can elevate your brand.</p>

                <div class="space-y-4">
                    <div
                        class="flex items-center gap-5 p-6 bg-slate-50 rounded-2xl border border-slate-100 shadow-sm group hover:border-brand-tertiary transition-all">
                        <div
                            class="w-12 h-12 rounded-xl bg-white border border-slate-100 flex items-center justify-center group-hover:bg-brand-tertiary/10 transition-all shadow-sm">
                            <i data-lucide="phone" class="text-brand-tertiary w-5 h-5"></i>
                        </div>
                        <div>
                            <p class="text-[0.65rem] font-black text-slate-400 uppercase tracking-widest">Phone</p>
                            <p class="font-black text-brand-darkest text-lg">+94 70 610 1035</p>
                        </div>
                    </div>
                    <div
                        class="flex items-center gap-5 p-6 bg-slate-50 rounded-2xl border border-slate-100 shadow-sm group hover:border-brand-tertiary transition-all">
                        <div
                            class="w-12 h-12 rounded-xl bg-white border border-slate-100 flex items-center justify-center group-hover:bg-brand-tertiary/10 transition-all shadow-sm">
                            <i data-lucide="mail" class="text-brand-tertiary w-5 h-5"></i>
                        </div>
                        <div>
                            <p class="text-[0.65rem] font-black text-slate-400 uppercase tracking-widest">Email</p>
                            <p class="font-black text-brand-darkest text-lg">info@ayonionstudios.com</p>
                        </div>
                    </div>
                    <a href="https://web.facebook.com/ayonionstudios" target="_blank" rel="noopener noreferrer"
                        class="flex items-center gap-5 p-6 bg-slate-50 rounded-2xl border border-slate-100 shadow-sm hover:border-brand-tertiary transition-all group">
                        <div
                            class="w-12 h-12 rounded-xl bg-white border border-slate-100 flex items-center justify-center group-hover:bg-brand-tertiary/10 transition-colors shadow-sm">
                            <svg class="w-5 h-5 fill-current text-brand-tertiary" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-[0.65rem] font-black text-slate-400 uppercase tracking-widest">Facebook</p>
                            <p
                                class="font-black text-brand-darkest text-lg group-hover:text-brand-tertiary transition-colors">
                                Ayonion
                                Studios</p>
                        </div>
                    </a>
                </div>
            </div>

            <div
                class="bg-white rounded-[3rem] p-8 md:p-14 shadow-[0_30px_100px_rgba(0,0,0,0.08)] border border-slate-100 relative overflow-hidden group">
                <div
                    class="absolute top-0 right-0 w-64 h-64 bg-brand-secondary/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 group-hover:scale-110 transition-transform duration-1000">
                </div>

                <?php if ($message_sent): ?>
                    <div class="text-center py-16 relative z-10">
                        <div
                            class="w-24 h-24 bg-emerald-50 border border-emerald-100 text-emerald-500 rounded-3xl flex items-center justify-center mx-auto mb-8 shadow-xl shadow-emerald-500/10 rotate-3">
                            <i data-lucide="check-circle" class="w-12 h-12"></i>
                        </div>
                        <h3 class="text-4xl font-black text-brand-darkest mb-4 font-display">Success!</h3>
                        <p class="text-slate-500 text-lg font-medium leading-relaxed max-w-sm mx-auto">Your message has been
                            delivered to our team. We'll be in touch within 24 hours.</p>

                        <!-- Localhost Debug Preview -->
                        <?php if (($_SERVER['REMOTE_ADDR'] == '127.0.0.1' || $_SERVER['REMOTE_ADDR'] == '::1') && !empty($sent_content)): ?>
                            <div
                                class="mt-8 p-6 bg-slate-50 rounded-2xl border border-slate-100 text-left relative group/debug">
                                <span
                                    class="absolute top-0 right-6 -translate-y-1/2 bg-white border border-slate-100 px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest text-slate-400">Developer
                                    Preview</span>
                                <p
                                    class="text-[11px] font-black uppercase tracking-widest text-slate-400 mb-3 flex items-center gap-2">
                                    <i data-lucide="mail" class="w-3 h-3"></i> Draft Sent to: info@ayonionstudios.com
                                </p>
                                <pre
                                    class="text-[12px] font-mono text-slate-600 leading-relaxed overflow-x-auto whitespace-pre-wrap"><?php echo htmlspecialchars($sent_content); ?></pre>
                            </div>
                        <?php endif; ?>

                        <button @click="window.location.reload()"
                            class="mt-12 inline-flex items-center gap-3 px-10 py-5 rounded-2xl bg-[#F7C935] text-brand-darkest font-black uppercase tracking-widest text-xs hover:scale-105 transition-all shadow-xl shadow-[#F7C935]/20">
                            <i data-lucide="refresh-cw" class="w-4 h-4"></i>
                            Send Another
                        </button>
                    </div>
                <?php else: ?>
                    <?php if ($error): ?>
                        <div
                            class="bg-rose-50 border border-rose-100 text-rose-500 p-6 rounded-2xl mb-10 font-black text-sm uppercase tracking-wider flex items-center gap-4">
                            <i data-lucide="alert-circle" class="w-5 h-5 flex-shrink-0"></i>
                            <span><?php echo $error; ?></span>
                        </div>
                    <?php endif; ?>
                    <form action="#contact" method="POST" class="space-y-10 relative z-10">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                            <div class="space-y-4">
                                <label class="block text-[0.7rem] font-black uppercase tracking-[0.2em] text-slate-400">Your
                                    Name
                                    *</label>
                                <input type="text" name="name" required
                                    class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-7 py-5 text-brand-darkest outline-none focus:border-brand-secondary focus:bg-white transition-all placeholder:text-slate-300 font-bold"
                                    placeholder="Hasitha Perera">
                            </div>
                            <div class="space-y-4">
                                <label
                                    class="block text-[0.7rem] font-black uppercase tracking-[0.2em] text-slate-400">Email
                                    Address
                                    *</label>
                                <input type="email" name="email" required
                                    class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-7 py-5 text-brand-darkest outline-none focus:border-brand-secondary focus:bg-white transition-all placeholder:text-slate-300 font-bold"
                                    placeholder="you@example.com">
                            </div>
                        </div>
                        <div class="space-y-4">
                            <label class="block text-[0.7rem] font-black uppercase tracking-[0.2em] text-slate-400">Service
                                Interest</label>
                            <div class="relative">
                                <select name="service"
                                    class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-7 py-5 text-brand-darkest outline-none focus:border-brand-secondary focus:bg-white transition-all appearance-none cursor-pointer font-bold">
                                    <option value="Digital Marketing Monthly Retainer (Partnership)">Digital Marketing Monthly Retainer (Partnership)</option>
                                    <option value="Digital Marketing Research & Testing">Digital Marketing Research & Testing</option>
                                    <option value="Other">Other</option>
                                </select>
                                <div class="absolute right-7 top-1/2 -translate-y-1/2 pointer-events-none">
                                    <i data-lucide="chevron-down" class="w-5 h-5 text-slate-400"></i>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <label class="block text-[0.7rem] font-black uppercase tracking-[0.2em] text-slate-400">Requirement
                                Brief
                                *</label>
                            <textarea name="message" required rows="5"
                                class="w-full bg-slate-50 border border-slate-100 rounded-2xl px-7 py-5 text-brand-darkest outline-none focus:border-brand-secondary focus:bg-white transition-all resize-none placeholder:text-slate-300 font-bold"
                                placeholder="Tell us about your project goals..."></textarea>
                        </div>
                        <button type="submit"
                            class="w-full py-6 rounded-2xl bg-[#F7C935] text-brand-darkest font-black uppercase tracking-[0.2em] text-sm flex items-center justify-center gap-4 hover:scale-[1.02] transition-all shadow-2xl shadow-[#F7C935]/30 group">
                            <span>Send Message</span>
                            <i data-lucide="send"
                                class="w-5 h-5 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                        </button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>