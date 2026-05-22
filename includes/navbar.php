<!-- Navbar -->
<header class="fixed inset-x-0 top-0 z-[100] transition-all duration-500">
    <div class="container-custom pt-4">
        <div :class="scrolled ? 'bg-white/95 border-slate-200 shadow-lg' : 'bg-white/90 border-slate-100 shadow-md'"
            class="flex items-center justify-between rounded-full px-6 py-2.5 md:px-10 border transition-all duration-500">

            <!-- Logo -->
            <a href="index.php#hero" class="flex items-center group">
                <img src="image/ayonionlogo.png" alt="Ayonion Studios"
                    class="h-7 md:h-8 w-auto transition-transform group-hover:scale-105">
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden lg:flex items-center gap-2">
                <a href="index.php#hero"
                    class="px-5 py-2.5 text-[0.95rem] font-bold text-slate-700 hover:text-brand-deep transition-colors flex items-center">Home</a>
                <a href="about.php"
                    class="px-5 py-2.5 text-[0.95rem] font-bold text-slate-700 hover:text-brand-deep transition-colors flex items-center">About</a>
                <a href="pricing.php"
                    class="px-5 py-2.5 text-[0.95rem] font-bold text-slate-700 hover:text-brand-deep transition-colors flex items-center">Pricing</a>
                <a href="blog.php"
                    class="px-5 py-2.5 text-[0.95rem] font-bold text-slate-700 hover:text-brand-deep transition-colors flex items-center">Blog</a>
            </nav>

            <!-- Desktop CTA -->
            <div class="hidden lg:flex items-center">
                <a href="index.php#contact"
                    class="inline-flex items-center justify-center rounded-full bg-[#102a43] hover:bg-[#2E6083] px-8 py-2.5 text-[0.95rem] font-black text-white shadow-lg transition-all duration-300 hover:-translate-y-0.5">
                    Let's Talk
                </a>
            </div>

            <!-- Mobile Toggle -->
            <button @click="mobileMenu = true"
                class="lg:hidden p-2 text-brand-deep hover:scale-110 transition-transform">
                <i data-lucide="menu" class="w-7 h-7"></i>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Menu -->
<template x-if="mobileMenu">
    <div class="fixed inset-0 z-[110] lg:hidden">
        <div @click="mobileMenu = false" class="absolute inset-0 bg-slate-900/40 backdrop-blur-md"></div>
        <div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="translate-x-full"
            x-transition:enter-end="translate-x-0"
            class="absolute inset-y-0 right-0 w-80 max-w-[85vw] bg-white shadow-2xl flex flex-col overflow-hidden">

            <div class="flex items-center justify-between border-b border-slate-50 px-6 py-6">
                <img src="image/ayonionlogo.png" alt="Logo" class="h-8 w-auto">
                <button @click="mobileMenu = false"
                    class="p-2.5 bg-slate-50 text-slate-400 rounded-full hover:bg-slate-100 hover:text-slate-900 transition-colors">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>

            <nav class="flex-1 px-6 py-8 space-y-3 overflow-y-auto">
                <a @click="mobileMenu = false" href="index.php#hero"
                    class="flex items-center px-5 py-4 bg-slate-50 rounded-2xl font-bold text-slate-700 hover:bg-slate-100 hover:text-brand-deep transition-all">Home</a>
                <a @click="mobileMenu = false" href="about.php"
                    class="flex items-center px-5 py-4 bg-slate-50 rounded-2xl font-bold text-slate-700 hover:bg-slate-100 hover:text-brand-deep transition-all">About</a>
                <a @click="mobileMenu = false" href="pricing.php"
                    class="flex items-center px-5 py-4 bg-slate-50 rounded-2xl font-bold text-slate-700 hover:bg-slate-100 hover:text-brand-deep transition-all">Pricing</a>
                <a @click="mobileMenu = false" href="blog.php"
                    class="flex items-center px-5 py-4 bg-slate-50 rounded-2xl font-bold text-slate-700 hover:bg-slate-100 hover:text-brand-deep transition-all">Blog</a>
            </nav>

            <div class="p-6 border-t border-slate-100 bg-white">
                <a @click="mobileMenu = false" href="index.php#contact"
                    class="flex w-full items-center justify-center gap-2 rounded-full bg-[#102a43] hover:bg-[#2E6083] py-3.5 text-[0.95rem] font-black text-white shadow-lg transition-all duration-300">
                    Let's Talk
                </a>
            </div>
        </div>
    </div>
</template>