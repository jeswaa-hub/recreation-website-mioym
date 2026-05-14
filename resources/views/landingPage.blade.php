<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MIOYM Equities - Leading distressed asset investment firm since 2008. Invest in Fix & Flip programs with 17.5% annual returns. Single-family, multi-family & commercial properties across 38 states.">
    <meta name="keywords" content="distressed asset investment, fix and flip real estate, MIOYM Equities, real estate equity firm, 17.5% returns investment, first-time homeowner program, foreclosure prevention, affordable housing investment, property management, rental property investment, commercial real estate, multi-family properties, single family residential, real estate investment firm">
    <meta name="author" content="MIOYM">
    <meta name="robots" content="index, follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" as="style">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>MIOYM Equities | Distressed Asset Investment Firm | Fix & Flip Real Estate</title>
    
    <!-- Schema.org Structured Data for Local Business -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "RealEstateAgent",
        "name": "MIOYM",
        "description": "Distressed Asset Equity Firm specializing in residential and commercial real estate investment with 17.5% annual returns.",
        "url": "https://mioym.com",
        "logo": "https://mioym.com/img/logo.png",
        "founder": {
            "@type": "Person",
            "name": "Marc Cox",
            "jobTitle": "Chief Executive Officer"
        },
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "2900 Westchester Ave., Ste. 302",
            "addressLocality": "Purchase",
            "addressRegion": "NY",
            "postalCode": "10577",
            "addressCountry": "US"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+1-914-566-9050",
            "contactType": "customer service",
            "email": "info@mioym.com"
        },
        "sameAs": [
            "https://facebook.com/mioym",
            "https://instagram.com/mioym",
            "https://linkedin.com/company/mioym"
        ],
        "priceRange": "$$$",
        "openingHours": "Mo-Fr 09:00-18:00"
    }
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @livewireStyles
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"></noscript>
    <style>
        *, *::before, *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: linear-gradient(to bottom, #000000 0%, #666666 88%);
            color: #ffffff;
            line-height: 1.6;
            overflow-x: hidden;
            min-height: 100vh;
        }
        
        .noise-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
            opacity: 0.05;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E");
        }
        
        input:focus, select:focus, textarea:focus, button:focus, a:focus {
            outline: none !important;
            outline-offset: 0 !important;
            box-shadow: none !important;
        }
        
        input, select, textarea {
            outline: none !important;
        }
        
        /* Fade In Animation Classes */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .fade-in-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        
        .fade-in-left.visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        .fade-in-right {
            opacity: 0;
            transform: translateX(50px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        
        .fade-in-right.visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        .fade-in-scale {
            opacity: 0;
            transform: scale(0.9);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        
        .fade-in-scale.visible {
            opacity: 1;
            transform: scale(1);
        }
        
        /* Hero Animations */
        .hero-title {
            opacity: 0;
            transform: translateY(40px);
            animation: heroTitleIn 0.8s ease-out 0.3s forwards;
        }
        
        .hero-subtitle {
            opacity: 0;
            transform: translateY(40px);
            animation: heroSubtitleIn 0.8s ease-out 0.5s forwards;
        }
        
        .hero-buttons {
            opacity: 0;
            transform: translateY(40px);
            animation: heroButtonsIn 0.8s ease-out 0.7s forwards;
        }
        
        .hero-image {
            opacity: 0;
            transform: translateX(50px);
            animation: heroImageIn 0.8s ease-out 0.6s forwards;
        }
        
        @keyframes heroTitleIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes heroSubtitleIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes heroButtonsIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes heroImageIn {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        /* Floating Stats Animation */
        .floating-stat {
            opacity: 0;
            animation: floatIn 0.6s ease-out forwards;
        }
        
        .floating-stat:nth-child(1) { animation-delay: 0.8s; }
        .floating-stat:nth-child(2) { animation-delay: 1s; }
        .floating-stat:nth-child(3) { animation-delay: 1.2s; }
        .floating-stat:nth-child(4) { animation-delay: 1.4s; }
        
        @keyframes floatIn {
            to {
                opacity: 1;
            }
        }
        
        /* Parallax Background */
        .parallax-bg {
            transition: transform 0.1s linear;
        }
        
        /* Button Hover Effects */
        .btn-primary {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.6s ease, height 0.6s ease;
        }
        
        .btn-primary:hover::before {
            width: 300px;
            height: 300px;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(102, 102, 102, 0.4);
        }
        
        .btn-secondary {
            transition: all 0.3s ease;
        }
        
        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(255, 255, 255, 0.1);
        }
        
        /* Card Hover Effects */
        .card-hover {
            transition: all 0.4s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }
        
        .card-hover:hover img {
            transform: scale(1.05);
        }
        
        /* Image Loading Animation */
        .img-loading {
            opacity: 0;
            transition: opacity 0.5s ease;
        }
        
        .img-loading.loaded {
            opacity: 1;
        }
        
        /* Background Glow Animation */
        .glow-pulse {
            animation: glowPulse 3s ease-in-out infinite;
        }
        
        @keyframes glowPulse {
            0%, 100% {
                opacity: 0.6;
                transform: scale(1);
            }
            50% {
                opacity: 0.9;
                transform: scale(1.05);
            }
        }
        
        /* Stagger Animation Delays */
        .stagger-1 { transition-delay: 0.1s; }
        .stagger-2 { transition-delay: 0.2s; }
        .stagger-3 { transition-delay: 0.3s; }
        .stagger-4 { transition-delay: 0.4s; }
        
        /* Reduced Motion Fallback */
        @media (prefers-reduced-motion: reduce) {
            .fade-in, .fade-in-left, .fade-in-right, .fade-in-scale,
            .hero-title, .hero-subtitle, .hero-buttons, .hero-image,
            .floating-stat, .parallax-bg, .glow-pulse {
                animation: none !important;
                transition: none !important;
                opacity: 1 !important;
                transform: none !important;
            }
        }
    </style>
</head>
<body>
    <div class="noise-overlay"></div>
    <x-navigationHeader />

    <!-- Hero Section -->
    <section class="min-h-screen flex items-center pt-20 px-0 relative overflow-hidden">
        <!-- Background Circle -->
        <div class="absolute top-[-10%] right-[-10%] sm:top-[-20%] sm:right-[0%]w-[500px] sm:w-[600px] lg:w-[700px] h-[500px] sm:h-[600px] lg:h-[700px] rounded-full opacity-80 blur-[100px] glow-pulse parallax-bg" data-speed="0.3" style="background-color: #8B7777;"></div>
        
        <!-- Bottom Left Image -->
        <div class="absolute bottom-[-250px] left-[0px] w-[400px] sm:w-[500px] lg:w-[500px] h-auto z-[-100]">
            <img src="{{ asset('img/bgImg.png') }}" alt="MIOYM Distressed Asset Real Estate - Investment Property Background" class="w-full h-auto object-contain" loading="lazy">
        </div>
        
        <div class="max-w-7xl mx-auto w-full relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6 hero-title" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                        Distressed Asset Investment with 17.5% Returns
                    </h1>
                    <p class="text-lg sm:text-xl text-gray-300 mb-8 leading-relaxed hero-subtitle">
                        Bridging the gap to home ownership and providing 17.5% per annum returns for investor
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 hero-buttons">
                        <a href="#" class="btn-primary inline-flex uppercase items-center justify-center px-8 py-4 bg-[#666666] text-white font-semibold rounded-lg hover:bg-gray-100 transition-colors duration-200" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            Find Home
                        </a>
                        <a href="#" class="btn-secondary inline-flex uppercase items-center justify-center px-8 py-4 border-2 border-white text-white font-semibold rounded-lg hover:bg-white/10 transition-colors duration-200" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            Invest With Us
                        </a>
                    </div>
                </div>
                
                <!-- Right Side - House Image + Stats -->
                <div class="relative hidden lg:block">
                    <!-- House Image -->
                    <img src="{{ asset('img/house.png') }}" alt="Affordable Residential Property for First-Time Homebuyers - MIOYM Investment" class="w-full max-w-lg mx-auto object-contain hero-image" loading="lazy">
                    
                    <!-- Floating Stats Container 1 - Top Left -->
                    <div class="absolute top-0 right-0 bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-4 text-center floating-stat">
                        <p class="text-2xl font-bold text-white" style="font-family: 'Plus Jakarta Sans', sans-serif;">100%</p>
                        <p class="text-xs text-gray-300 mt-1">Investors receiving quoted return</p>
                    </div>
                    
                    <!-- Floating Stats Container 2 - Top Right -->
                    <div class="absolute top-10 left-10 bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-4 text-center floating-stat">
                        <p class="text-2xl font-bold text-white" style="font-family: 'Plus Jakarta Sans', sans-serif;">98%</p>
                        <p class="text-xs text-gray-300 mt-1">Returning Investors</p>
                    </div>
                    
                    <!-- Floating Stats Container 3 - Bottom Left -->
                    <div class="absolute top-[250px] right-[40px] bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-4 text-center floating-stat">
                        <p class="text-2xl font-bold text-white" style="font-family: 'Plus Jakarta Sans', sans-serif;">1000+</p>
                        <p class="text-xs text-gray-300 mt-1">Transactions</p>
                    </div>
                    
                    <!-- Floating Stats Container 4 - Bottom Right -->
                    <div class="absolute bottom-20 left-0 bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-4 text-center floating-stat">
                        <p class="text-2xl font-bold text-white" style="font-family: 'Plus Jakarta Sans', sans-serif;">100%</p>
                        <p class="text-xs text-gray-300 mt-1">Happy first-time homeowners</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Search & Filter Section -->
    <section class="py-5 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
        <!-- Radial Gradient Background -->
        <div class="absolute inset-0" style="background: radial-gradient(circle at center, #c3c3c3 0%, #5d5d5d 52%);"></div>
            
        <!-- Glassmorphism Container -->
        <div class="max-w-4xl mx-auto relative z-10 fade-in">
            <div class="text-center mb-5">
                <h2 class="text-3xl sm:text-4xl lg:text-4xl font-bold text-white mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                    Find Your Perfect Investment Property
                </h2>
                <p class="sr-only">Search Properties for Sale and Rent</p>
                <p class="text-lg text-white max-w-2xl mx-auto">
                    Buy or sell high-value homes at a price range that fits your lifestyle
                </p>
            </div>
            <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-3xl p-4 sm:p-8 lg:p-12">
                <!-- Search Filter Elements - Responsive -->
                <div class="flex flex-col sm:flex-row items-stretch gap-3 sm:gap-4">
                    <!-- Buy or Rent Dropdown -->
                    <div class="flex-1 rounded-xl h-12 sm:h-14" style="background-color: #3A2C2C;">
                        <select class="w-full h-full px-3 sm:px-4 bg-transparent text-white focus:outline-none focus:ring-0 border-none text-sm sm:text-base">
                            <option value="buy" class="text-black">Buy</option>
                            <option value="rent" class="text-black">Rent</option>
                        </select>
                    </div>
                    
                    <!-- Location Input -->
                    <div class="flex-1 rounded-xl h-12 sm:h-14 flex items-center" style="background-color: #3A2C2C;">
                        <input type="text" placeholder="City, State, ZIP" class="w-full h-full px-3 sm:px-4 bg-transparent text-white placeholder-white text-sm sm:text-base focus:outline-none focus:ring-0 border-none">
                    </div>
                    
                    <!-- Price Dropdown -->
                    <div class="flex-1 rounded-xl h-12 sm:h-14" style="background-color: #3A2C2C;">
                        <select class="w-full h-full px-3 sm:px-4 bg-transparent text-white cursor-pointer appearance-none text-sm sm:text-base focus:outline-none focus:ring-0 border-none">
                            <option value="" class="text-black">Any Price</option>
                            <option value="100-300" class="text-black">$100k - $300k</option>
                            <option value="300-500" class="text-black">$300k - $500k</option>
                            <option value="500-1000" class="text-black">$500k - $1M</option>
                            <option value="1000+" class="text-black">$1M+</option>
                        </select>
                    </div>
                    
                    <!-- Search Button with Icon -->
                    <a href="#" class="btn-primary flex-none inline-flex items-center justify-center w-full sm:w-12 h-12 sm:h-14 rounded-xl transition-colors duration-200 text-sm sm:text-base cursor-pointer" style="background-color: #3A2C2C; color: white;">
                        <i class="fas fa-search"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About the Firm Section -->
    <section class="py-10 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Section Title -->
            <h2 class="text-4xl sm:text-5xl font-bold text-white text-center mb-16 fade-in" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                About MIOYM Equities - Real Estate Investment Firm
            </h2>
            
            <!-- Two Column Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-5">
                <!-- Left: Text Block -->
                <div class="space-y-10 lg:space-y-2">
                    <!-- Glassmorphism Card with bg2.png -->
                    <div class="rounded-2xl p-8 sm:p-10 border-t border-white/20 relative overflow-hidden fade-in-left" style="background-image: url('{{ asset('img/bg2.png') }}'); background-size: cover; background-position: center;">
                        <div class="absolute inset-0 bg-black/40"></div>
                        <div class="relative z-10 text-center">
                            <h3 class="text-4xl text-center lg:text-5xl sm:text-3xl font-bold text-white mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                About MIOYM
                            </h3>
                            <p class="text-white leading-relaxed mb-4 lg:text-xl">
                                Established in 2008 by our Chief Executive Officer, Marc Cox, MIOYM is a multi-faceted Distressed Asset Equity Firm headquartered in Purchase, New York. Our core focus lies in residential and commercial properties across the United States.
                            </p>
                            <p class="text-white leading-relaxed lg:text-xl">
                                We are guided by our unwavering commitment to "Giving back to the community with every project" and the "Altruism-Forging Wealth for First-Time Homeowners and Investors."
                            </p>
                        </div>
                    </div>
                    
                    <!-- Learn More Bar with Glassmorphism Effect -->
                    <a href="/about-us" class="flex items-center justify-between p-5 rounded-xl bg-white/10 backdrop-blur-md border border-white/20 hover:bg-white/20 transition-all duration-300 group card-hover cursor-pointer">
                        <span class="text-white text-sm sm:text-base" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            Learn more about the Firm's Legacy and Impact of the Founder and CEO Marc Cox
                        </span>
                        <i class="fas fa-arrow-right text-white transform translate-x-0 group-hover:translate-x-1 transition-transform duration-300"></i>
                    </a>
                </div>
                
                <!-- Right: Quote + Image -->
                <div class="flex flex-col gap-3">
                    <!-- Quote Block with bg1.png -->
                    <div class="rounded-2xl p-8 sm:p-10 border-t border-white/20 relative overflow-hidden fade-in-right" style="background-image: url('{{ asset('img/bg1.png') }}'); background-size: cover; background-position: center;">
                        <div class="absolute inset-0 bg-black/50"></div>
                        <div class="relative z-10">
                            <span class="absolute top-1 left-1 text-5xl text-white/30 font-serif">“</span>
                            <div class="mb-4">
                                <p class="text-lg text-white font-bold text-center uppercase tracking-wider">Our Mission</p>
                            </div>
                            <p class="text-white text-lg sm:text-xl italic leading-relaxed">
                                Cultivating wealth and value for homeowners, investors, and commercial partners.
                            </p>
                            <span class="absolute bottom-[-30px] right-3 text-5xl text-white/30 font-serif">“</span>
                        </div>
                    </div>
                    
                    <!-- Building Image -->
                    <div class="rounded-2xl overflow-hidden fade-in">
                        <img src="{{ asset('img/mioymbuilding.png') }}" alt="MIOYM Corporate Office - 2900 Westchester Avenue, Purchase, NY" class="w-full h-64 sm:h-80 object-cover" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MIOYM Equities Section -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 relative overflow-hidden" style="background-image: url('{{ asset('img/bgimg1.png') }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0" style="background: rgba(0, 0, 0, 0.7);"></div>
        
        <div class="max-w-7xl mx-auto relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-12 fade-in">
                <h2 class="text-4xl sm:text-5xl font-bold text-white mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                    MIOYM Equities
                </h2>
                <p class="text-gray-300 text-sm leading-relaxed max-w-4xl mx-auto mb-6">
                    MIOYM Equities, the investment division of MIOYM, is a leading nationwide private equity firm specializing in distressed real estate assets. Our primary focus lies in the acquisition and management of both single-family and multi-family residential properties across the United States. With our unique investment program, we offer individuals and institutions the opportunity to participate in our Fix & Flip segment. Leveraging our years of expertise and proven investment models, MIOYM is also venturing into commercial and development projects.
                </p>
                <p class="text-gray-300 text-sm leading-relaxed max-w-4xl mx-auto">
                    At MIOYM, our utmost dedication is to protect and enhance our investors' capital. Our mission is to empower investors to contribute to the broader economic growth, thus fostering a positive and lasting economic impact while delivering long-term value to our stakeholders.
                </p>
            </div>
            
            <!-- Four Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="rounded-2xl overflow-hidden flex flex-col backdrop-blur-md transition-all duration-300 group fade-in stagger-1 card-hover" style="background: rgba(22, 1, 1, 0.2); border: 1px solid rgba(255, 255, 255, 0.1);">
                    <div class="h-48 bg-gray-800 flex items-center justify-center overflow-hidden flex-shrink-0">
                        <img src="{{ asset('img/residential.jpg') }}" alt="Residential Properties Investment - Distressed Mortgages and REO Properties" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-white font-semibold text-lg mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Residential</h3>
                        <p class="text-gray-400 text-sm mt-5">MIOYM PROPERTIES acquires, and dispositions undervalued distressed mortgages and REO properties in 38 states.</p>
                        <a href="{{ route('singleFamilyResidential') }}" class="inline-flex items-center justify-between px-4 py-2 mt-4 sm:mt-auto text-sm text-white transition-colors cursor-pointer w-full" style="background-color: #3A2C2C;">
                            Explore More
                            <i class="fas fa-arrow-right text-xs ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div class="rounded-2xl overflow-hidden flex flex-col backdrop-blur-md transition-all duration-300 group fade-in stagger-2 card-hover" style="background: rgba(22, 1, 1, 0.2); border: 1px solid rgba(255, 255, 255, 0.1);">
                    <div class="h-48 bg-gray-800 flex items-center justify-center overflow-hidden flex-shrink-0">
                        <img src="{{ asset('img/sales_process.jpg') }}" alt="Fix and Flip Investment Process - 17.5% Annual Returns Program" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-white font-semibold text-lg mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Individual Investors</h3>
                        <p class="text-gray-400 text-sm mt-5">Time Tested Fix & Flip Program allowing individuals to invest and earn 17.5% per annum secured by R/E.</p>
                        <a href="{{ route('process') }}" class="inline-flex items-center justify-between px-4 py-2 mt-4 sm:mt-auto text-sm text-white transition-colors cursor-pointer w-full" style="background-color: #3A2C2C;">
                            Explore More
                            <i class="fas fa-arrow-right text-xs ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Card 3 -->
                <div class="rounded-2xl overflow-hidden flex flex-col backdrop-blur-md transition-all duration-300 group fade-in stagger-3 card-hover" style="background: rgba(22, 1, 1, 0.2); border: 1px solid rgba(255, 255, 255, 0.1);">
                    <div class="h-48 bg-gray-800 flex items-center justify-center overflow-hidden flex-shrink-0">
                        <img src="{{ asset('img/rent_to_own.jpg') }}" alt="MIOYM Rent To Own Program - First-Time Homebuyer Solution" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-white font-semibold text-lg mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">The MIOYM to Own Program</h3>
                        <p class="text-gray-400 text-sm mt-5">The MIOYM Rent To Own Program is designed to help individuals who aspire to own a home but need more means to do so immediately.</p>
                        <a href="{{ route('affordableHomeProgram') }}" class="inline-flex items-center justify-between px-4 py-2 mt-4 sm:mt-auto text-sm text-white transition-colors cursor-pointer w-full" style="background-color: #3A2C2C;">
                            Explore More
                            <i class="fas fa-arrow-right text-xs ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Card 4 -->
                <div class="rounded-2xl overflow-hidden flex flex-col backdrop-blur-md transition-all duration-300 group fade-in stagger-4 card-hover" style="background: rgba(22, 1, 1, 0.2); border: 1px solid rgba(255, 255, 255, 0.1);">
                    <div class="h-48 bg-gray-800 flex items-center justify-center overflow-hidden flex-shrink-0">
                        <img src="{{ asset('img/multifamliy.jpg') }}" alt="Multi-Family Properties Investment - Commercial Real Estate Ventures" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-white font-semibold text-lg mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Institutional Investors/ Commercial Ventures</h3>
                        <p class="text-gray-400 text-sm mt-5">MIOYM offers investors the chance to engage in diverse commercial ventures.</p>
                        <a href="{{ route('commercialProperties') }}" class="inline-flex items-center justify-between px-4 py-2 mt-4 sm:mt-auto text-sm text-white transition-colors cursor-pointer w-full" style="background-color: #3A2C2C;">
                            Explore More
                            <i class="fas fa-arrow-right text-xs ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Investors Section - Top Half (#000000 → #666666) -->
    <section class="relative overflow-hidden" style="background: linear-gradient(to bottom, #000000 0%, #666666 100%);">
        <div class="py-20 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto relative z-10">
                <!-- Section Header -->
                <div class="text-center mb-12 fade-in">
                    <h2 class="text-4xl sm:text-5xl font-bold text-white mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                        Investors
                    </h2>
                </div>
                
                <!-- Two Column Content -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-12 p-5 rounded-2xl fade-in" style="background: linear-gradient(235deg, #282525 0%, #574F4F 54%, #968181 100%);">
                    <!-- Left: Image with Gradient -->
                    <div class="rounded-lg overflow-hidden h-[400px] lg:h-[600px] fade-in-left" >
                        <img src="{{ asset('img/image_3.png') }}" alt="Individual Investors - MIOYM Investment Program" class="w-full h-full object-cover">
                    </div>
                    
                    <!-- Right: Text Content -->
                    <div class="text-left relative p-5">
                        <img src="{{ asset('img/buildings.png') }}" alt="MIOYM Buildings" class="absolute top-[207px] w-full h-full object-cover opacity-50 z-10 rounded-lg hidden lg:block">
                        <h3 class="text-center text-3xl sm:text-4xl font-bold text-white mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            Individual Investors
                        </h3>
                        <p class="text-gray-300 text-lg leading-relaxed mb-6 text-justify" >
                            MIOYM Equities is a Distressed Asset Private Equity firm in Westchester, New York, focusing on Single Family Residential across the United States. Time-tested Fix & Flip Program allowing individuals to invest and earn 17.5% per annum secured by R/E. MIOYM is a nationwide real estate investment company designed to preserve and grow your capital. We help individual investors contribute to overall economic growth, creating a positive economic impact with long-term value for our investors.
                        
                        </p>
                    </div>
                </div>
                
                <!-- Second Container - Image on Right, Text on Left -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 items-center p-5 rounded-2xl" style="background: linear-gradient(235deg, #968181  0%, #574F4F 54%, #282525 100%);">
                        <!-- Right: Image with Gradient (First on mobile, right on desktop) -->
                        <div class="rounded-lg overflow-hidden h-[250px] lg:h-[600px] order-1 lg:order-2 fade-in-scale">
                            <img src="{{ asset('img/image_4.png') }}" alt="Institutional Investors - MIOYM Investment Program" class="w-full h-full object-cover">
                        </div>
                        
                        <!-- Left: Text Content (Second on mobile, left on desktop) -->
                        <div class="text-left relative p-5 order-2 lg:order-1">
                            <img src="{{ asset('img/buildings.png') }}" alt="MIOYM Buildings" class="absolute top-[207px] inset-0 w-full h-full object-cover opacity-30 z-10 rounded-lg hidden lg:block">
                            <h3 class="text-center lg:text-left text-3xl sm:text-4xl font-bold text-white mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                Institutional Investors
                            </h3>
                            <p class="text-gray-300 text-lg leading-relaxed mb-6 lg:text-justify">
                                MIOYM offers institutional investors the chance to engage in diverse commercial ventures. Leveraging our targeted investment approach, MIOYM upholds its rich legacy and reputation. Through our proprietary technologies and resources, we identify undervalued assets that provide both current income and long-term growth potential. Our primary interests lie in multi-family properties, industrial spaces, adaptable industrial setups, small retail complexes, land procurement, and development prospects.
                            </p>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <!-- Our Partners Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden flex justify-center" style="background: #000000;">
        <div class="w-full max-w-7xl relative z-10 mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-12 fade-in">
                <h2 class="text-4xl sm:text-5xl font-bold text-white mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                    Our Partners
                </h2>
                <p class="text-gray-300 text-lg max-w-3xl mx-auto">
                    Trusted by leading organizations and institutions in the real estate industry
                </p>
            </div>
            
            <!-- Automatic Carousel with 3 Images and Fade Effect -->
            <div class="fade-in" x-data="{
                currentIndex: 0,
                images: [
                    '{{ asset('img/buildings.png') }}',
                    '{{ asset('img/image_3.png') }}',
                    '{{ asset('img/mioymbuilding.png') }}',
                    '{{ asset('img/residential.jpg') }}',
                    '{{ asset('img/sales_process.jpg') }}',
                    '{{ asset('img/multifamliy.jpg') }}'
                ],
                get visibleImages() {
                    let images = [];
                    for (let i = 0; i < 3; i++) {
                        images.push(this.images[(this.currentIndex + i) % this.images.length]);
                    }
                    return images;
                },
                init() {
                    setInterval(() => {
                        this.currentIndex = (this.currentIndex + 1) % this.images.length;
                    }, 4000);
                }
            }">
                <!-- Carousel Container with Fade Effect -->
                <div class="relative rounded-2xl overflow-hidden">
                    <!-- Left Fade -->
                    <div class="absolute left-0 top-0 bottom-0 w-20 lg:w-32 z-10 pointer-events-none" style="background: linear-gradient(to right, #666666, transparent);"></div>
                    
                    <!-- Right Fade -->
                    <div class="absolute right-0 top-0 bottom-0 w-20 lg:w-32 z-10 pointer-events-none" style="background: linear-gradient(to left, #000000, transparent);"></div>
                    
                    <!-- Images Container -->
                    <div class="flex gap-4">
                        <template x-for="(img, idx) in visibleImages" :key="idx">
                            <div class="flex-1 h-[100px] lg:h-[140px] rounded-xl overflow-hidden transition-all duration-500 flex items-center justify-center bg-white/5" :class="idx === 1 ? 'lg:scale-105' : ''">
                                <img :src="img" alt="Partner" class="w-full h-full object-contain object-center">
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden" style="background: linear-gradient(to bottom, #000000 0%, #1a1a1a 100%);">
        <div class="absolute inset-0 z-0" style="background-image: url('{{ asset('img/bgFeedback.png') }}'); background-size: cover; background-position: center;"></div>
        <div class="max-w-7xl mx-auto relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-12 fade-in">
                <h2 class="text-4xl sm:text-5xl font-bold text-white mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                    What They Are Saying About MIOYM
                </h2>
            </div>
            
            <!-- Testimonial Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 fade-in">
                <!-- Card 1 -->
                <div class="rounded-2xl p-6 border border-gray-700/50 hover:border-gray-600 transition-colors duration-300 cursor-pointer" style="background-color: #282525;">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-quote-left text-white text-xl mr-3"></i>
                    </div>
                    <p class="text-white text-sm leading-relaxed mb-6">
                        "Investing with MIOYM has been a life-changing experience. The returns have exceeded my expectations, and the team is incredibly transparent and supportive throughout the entire process."
                    </p>
                    <div class="border-t border-gray-700/50 pt-4">
                        <h4 class="text-white font-semibold">Michael Thompson</h4>
                        <span class="text-white text-xs uppercase tracking-wider">Investor</span>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div class="rounded-2xl p-6 border border-gray-700/50 hover:border-gray-600 transition-colors duration-300 cursor-pointer" style="background-color: #282525;">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-quote-left text-white text-xl mr-3"></i>
                    </div>
                    <p class="text-white text-sm leading-relaxed mb-6">
                        "Thanks to MIOYM's First-Time Homeowner Program, I was able to purchase my dream home despite past credit challenges. Their guidance made the impossible possible."
                    </p>
                    <div class="border-t border-gray-700/50 pt-4">
                        <h4 class="text-white font-semibold">Sarah Rodriguez</h4>
                        <span class="text-white text-xs uppercase tracking-wider">Homeowner</span>
                    </div>
                </div>
                
                <!-- Card 3 -->
                <div class="rounded-2xl p-6 border border-gray-700/50 hover:border-gray-600 transition-colors duration-300 cursor-pointer" style="background-color: #282525;">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-quote-left text-white text-xl mr-3"></i>
                    </div>
                    <p class="text-white text-sm leading-relaxed mb-6">
                        "The level of professionalism and communication from MIOYM is unmatched. I've invested in multiple properties and each experience has been seamless and profitable."
                    </p>
                    <div class="border-t border-gray-700/50 pt-4">
                        <h4 class="text-white font-semibold">David Chen</h4>
                        <span class="text-white text-xs uppercase tracking-wider">Investor</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Request More Info Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden" style="background: linear-gradient(to bottom, #1a1a1a 0%, #000000 100%);">
        <div class="absolute inset-0 z-0" style="background-image: url('{{ asset('img/bgContact.png') }}'); background-size: cover; background-position: center;"></div>
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Left Side - Text Content -->
                <div class="fade-in flex flex-col">
                    <h2 class="text-4xl sm:text-5xl font-bold text-white mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                        Let's Partner And Grow Together
                    </h2>
                    <p class="text-white text-lg leading-relaxed mb-6">
                        MIOYM is a vertically integrated real estate firm dedicated to creating value and delivering consistent returns to investors through a proven, conservative and disciplined investment and management strategy.<br>MIOYM's primary objectives are capital preservation and generating long-term total return with a strong emphasis on current income by investing in single-family communities in high-density suburban markets.
                    </p>
                    <div class="mt-4 absolute bottom-[-6%] left-0 right-0 -z-10 hidden lg:block">
                        <img src="{{ asset('img/houseB.png') }}" alt="MIOYM House" class="w-full max-w-2xl mx-auto lg:mx-0">
                    </div>
                </div>
                
                <!-- Right Side - Contact Form -->
                <div class="fade-in">
                    <form class="bg-white/5 backdrop-blur-xl rounded-2xl p-8 border border-white/10 shadow-2xl">
                        <div class="grid grid-cols-1 gap-4 mb-4">
                            <input type="text" placeholder="Name" class="w-full px-4 py-3 bg-white/10 backdrop-blur-sm border border-white/20 rounded-lg text-white placeholder-gray-400 focus:border-amber-500 focus:ring-1 focus:ring-amber-500 focus:bg-white/20 transition-all">
                            <input type="email" placeholder="Email Address" class="w-full px-4 py-3 bg-white/10 backdrop-blur-sm border border-white/20 rounded-lg text-white placeholder-gray-400 focus:border-amber-500 focus:ring-1 focus:ring-amber-500 focus:bg-white/20 transition-all">
                            <input type="tel" placeholder="Mobile Number" class="w-full px-4 py-3 bg-white/10 backdrop-blur-sm border border-white/20 rounded-lg text-white placeholder-gray-400 focus:border-amber-500 focus:ring-1 focus:ring-amber-500 focus:bg-white/20 transition-all">
                            <textarea placeholder="Message" rows="4" class="w-full px-4 py-3 bg-white/10 backdrop-blur-sm border border-white/20 rounded-lg text-white placeholder-gray-400 focus:border-amber-500 focus:ring-1 focus:ring-amber-500 focus:bg-white/20 transition-all resize-none"></textarea>
                        </div>
                        
                        <!-- Checkboxes -->
                        <div class="space-y-3 mb-6">
                            <label class="flex items-start gap-3 cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 mt-1 rounded border-white/30 bg-white/10 text-amber-500 focus:ring-amber-500 focus:ring-offset-0 cursor-pointer">
                                <span class="text-gray-300 text-xs leading-relaxed">By entering your telephone number and email you are providing consent to receive marketing communications including emails and phone calls from Mioym Commercial Capital. Consent is not a condition of purchase. Message and data rates may apply. Reply STOP to stop, HELP for help. Note: Messages will involve real estate investment opportunities and info regarding our affordable homes program.</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 rounded border-white/30 bg-white/10 text-amber-500 focus:ring-amber-500 focus:ring-offset-0 cursor-pointer">
                                <span class="text-gray-300 text-sm">I want to receive SMS texts about products & services.</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 rounded border-white/30 bg-white/10 text-amber-500 focus:ring-amber-500 focus:ring-offset-0 cursor-pointer">
                                <span class="text-gray-300 text-sm">I accept terms & conditions.</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 rounded border-white/30 bg-white/10 text-amber-500 focus:ring-amber-500 focus:ring-offset-0 cursor-pointer">
                                <span class="text-gray-300 text-sm">I want emails about products & services.</span>
                            </label>
                        </div>
                        
                        <!-- Submit Button -->
                        <button type="submit" class="w-full py-4 text-white font-semibold rounded-lg transition-all duration-300 flex items-center justify-center gap-2 cursor-pointer shadow-lg" style="background-color: #171313;">
                            <span>Send Message</span>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @livewireScripts
    <script>
        // Fade In on Scroll Animation
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const fadeObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all fade-in elements
        document.querySelectorAll('.fade-in, .fade-in-left, .fade-in-right, .fade-in-scale').forEach(el => {
            fadeObserver.observe(el);
        });

        // Parallax Effect for Background Elements
        let ticking = false;
        window.addEventListener('scroll', () => {
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    const scrolled = window.pageYOffset;
                    document.querySelectorAll('.parallax-bg').forEach(el => {
                        const speed = el.dataset.speed || 0.5;
                        el.style.transform = `translateY(${scrolled * speed}px)`;
                    });
                    ticking = false;
                });
                ticking = true;
            }
        });

        // Image Loading Animation
        document.querySelectorAll('img').forEach(img => {
            if (img.complete) {
                img.classList.add('loaded');
            } else {
                img.addEventListener('load', () => {
                    img.classList.add('loaded');
                });
                img.addEventListener('error', () => {
                    img.classList.add('loaded');
                });
            }
        });

        // Smooth hover effect for cards
        document.querySelectorAll('.card-hover').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transition = 'all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275)';
            });
            card.addEventListener('mouseleave', () => {
                card.style.transition = 'all 0.4s ease';
            });
        });
    </script>
    <x-footer />
</body>
</html>
