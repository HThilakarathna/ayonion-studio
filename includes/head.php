<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayonion Studios | Premium Digital Performance & Creative Agency</title>
    <meta name="description" content="Elevate your brand with Ayonion Studios. We craft high-end digital experiences, cinematic content, and data-driven marketing strategies for global industry leaders.">
    <meta name="keywords" content="Ayonion Studios, digital marketing agency, branding, content creation, performance marketing, social media management, creative studio, Sri Lanka digital agency">
    <meta name="author" content="Ayonion Studios">
    <meta name="robots" content="index, follow">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="image/ayonionlogo1.png">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://ayonionstudios.com/">
    <meta property="og:title" content="Ayonion Studios | Premium Digital Performance & Creative Agency">
    <meta property="og:description" content="Elevate your brand with high-end digital experiences and cinematic content.">
    <meta property="og:image" content="https://ayonionstudios.com/image/og_preview.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://ayonionstudios.com/">
    <meta property="twitter:title" content="Ayonion Studios | Premium Digital Performance & Creative Agency">
    <meta property="twitter:description" content="Elevate your brand with high-end digital experiences and cinematic content.">
    <meta property="twitter:image" content="https://ayonionstudios.com/image/og_preview.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600;9..144,700&family=Manrope:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine.js for Interactivity -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Lenis Smooth Scroll -->
    <script src="https://unpkg.com/lenis@1.1.20/dist/lenis.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.1.20/dist/lenis.css">

    <!-- AOS Animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            secondary: '#BDDFE8', // Light Blue
                            tertiary: '#618698',  // Muted Blue
                            deep: '#052C47',      // Deep Navy
                            dark: '#1A364A',      // Dark Blue
                            accent: '#2E404C',    // Charcoal
                            darkest: '#030B0D',   // Near Black
                            highlight: '#F7C935', // Yellow Gold
                            primary: '#ffffff',   // White
                        }
                    },
                    fontFamily: {
                        sans: ['Manrope', 'sans-serif'],
                        display: ['Fraunces', 'serif']
                    },
                    animation: {
                        'antigravity': 'antigravity 4s ease-in-out infinite',
                        'orbit-glow': 'orbit-glow 10s linear infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'float': 'float 6s ease-in-out infinite',
                        'shine': 'shine 3s infinite',
                    },
                    keyframes: {
                        antigravity: {
                            '0%, 100%': { transform: 'translateY(0) rotate(0deg)' },
                            '50%': { transform: 'translateY(-12px) rotate(2deg)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        shine: {
                            '0%': { left: '-100%' },
                            '20%, 100%': { left: '200%' },
                        },
                        'orbit-glow': {
                            '0%': { transform: 'rotate(0deg) scale(1)', opacity: '0.5' },
                            '50%': { transform: 'rotate(180deg) scale(1.1)', opacity: '0.8' },
                            '100%': { transform: 'rotate(360deg) scale(1)', opacity: '0.5' },
                        }
                    }
                }
            }
        }
    </script>

    <style type="text/tailwindcss">
        @layer components {
            .container-custom {
                @apply max-w-[1280px] mx-auto px-6;
            }
            .section-padding {
                @apply py-24;
            }
            .glass-card {
                @apply bg-brand-dark/40 backdrop-blur-xl border border-brand-tertiary/20 shadow-2xl;
            }
            .btn-primary {
                @apply inline-flex items-center justify-center gap-2.5 px-8 py-4 rounded-[1.25rem] font-bold text-[0.95rem] transition-all duration-300 bg-brand-highlight text-brand-darkest shadow-[0_8px_24px_rgba(247,201,53,0.3)] hover:-translate-y-1 hover:bg-white hover:text-brand-darkest hover:shadow-[0_12px_32px_rgba(247,201,53,0.4)];
            }
            .btn-secondary {
                @apply inline-flex items-center justify-center gap-2.5 px-8 py-4 rounded-[1.25rem] font-bold text-[0.95rem] transition-all duration-300 bg-brand-dark/60 text-brand-secondary border border-brand-tertiary/30 backdrop-blur-md hover:-translate-y-1 hover:bg-brand-accent/60 hover:border-brand-secondary hover:shadow-[0_12px_24px_rgba(0,0,0,0.2)];
            }
            .surface-card {
                @apply bg-brand-dark border border-brand-accent/30 shadow-xl transition-all duration-300 hover:border-brand-secondary/40 hover:shadow-2xl;
            }
            .text-gradient {
                @apply text-transparent bg-clip-text bg-gradient-to-r from-brand-highlight via-brand-secondary to-brand-tertiary;
            }
        }

        body {
            @apply font-sans bg-brand-darkest text-white/90;
            background-image: 
                radial-gradient(ellipse 80% 50% at 10% -10%, rgba(5,44,71,0.4) 0%, transparent 60%),
                radial-gradient(ellipse 60% 40% at 90% 90%, rgba(189,223,232,0.1) 0%, transparent 55%);
        }

        [x-cloak] { display: none !important; }

        .custom-scrollbar::-webkit-scrollbar { width: 6px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #2E404C; border-radius: 10px; }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: #618698; }
    </style>
</head>

<body x-data="{ mobileMenu: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 24)">
