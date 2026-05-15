<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Family Residential | Institutional Real Estate | MIOYM Equities</title>
    <meta name="description" content="Explore MIOYM Equities' Single Family Residential real estate portfolio. We revitalize neighborhoods and deliver strong returns for our investors.">
    <meta name="keywords" content="Single Family Residential, Real Estate, MIOYM Equities, Property Investment, Institutional Real Estate">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.webp') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"></noscript>
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: linear-gradient(to bottom, #000000 0%, #1a1a1a 100%);
            color: #ffffff;
            line-height: 1.6;
            overflow-x: hidden;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
        }
        
        /* Respect prefers-reduced-motion for accessibility */
        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
                scroll-behavior: auto !important;
            }
            [data-aos] {
                opacity: 1 !important;
                transform: none !important;
            }
        }
    </style>
</head>
<body>
    @include('components.navigationHeader')
    
    <main class="pt-16 lg:pt-20">
        <!-- Hero Banner Section -->
        <section class="relative w-full overflow-hidden bg-black flex items-center min-h-[300px] lg:min-h-[300px]">
            <!-- Abstract Background Image -->
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('img/bgResidential.webp') }}" alt="Background Texture" class="w-full h-full object-cover">
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full py-12  lg:py-0">
                <div class="flex flex-col lg:flex-row items-center justify-between gap-8 lg:gap-12">
                    <!-- Left: Typography -->
                    <div class="w-full lg:w-1/2 text-center lg:text-left" data-aos="fade-right" data-aos-duration="1000">
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight tracking-wide" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            Single Family<br>Residential
                        </h1>
                    </div>

                    <!-- Right: 3D House Model Image -->
                    <div class="w-full lg:w-1/2 relative flex justify-center lg:justify-end hidden lg:flex" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                        <img src="{{ asset('img/house1.webp') }}" alt="Single Family Residential Property by MIOYM Equities" class="w-full max-w-[500px] lg:max-w-[750px] h-auto object-contain drop-shadow-2xl">
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Key Principles Section -->
        <section class="py-10 px-0 bg-[#0f0f11]">
            <div class="max-w-7xl mx-auto relative z-10 px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white text-center mb-16" style="font-family: 'Plus Jakarta Sans', sans-serif;" data-aos="fade-up">
                    Our Key Principles: Dive Deeper into the MIOYM Approach
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-3 md:divide-x md:divide-white/20 items-stretch">
                    <!-- Principle 1 -->
                    <div class="flex flex-col h-full px-4 md:px-8 lg:px-12 mb-12 md:mb-0 items-start text-left" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex flex-col h-full w-full">
                            <!-- Image Placeholder -->
                            <div class="w-full aspect-[4/3] bg-[#2a2a2a] rounded-[24px] mb-8 flex items-center justify-center border border-white/10 shadow-lg relative overflow-hidden flex-shrink-0">
                                <div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent"></div>
                                <img src="{{ asset('img/residentialImg1.webp') }}" alt="Principle 1" class="w-full h-full object-cover">
                            </div>
                            
                            <!-- Number & Title -->
                            <div class="flex items-start gap-5 mb-6 flex-shrink-0">
                                <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center flex-shrink-0 shadow-md">
                                    <span class="text-black text-2xl font-extrabold" style="font-family: 'Plus Jakarta Sans', sans-serif;">01</span>
                                </div>
                                <div class="flex-grow pt-1">
                                    <h3 class="text-xl lg:text-2xl font-bold text-white leading-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                        Identifying Value in Distressed Properties
                                    </h3>
                                </div>
                            </div>
                            
                            <!-- Description -->
                            <div class="flex-grow">
                                <p class="text-gray-300 text-justify text-sm sm:text-base leading-relaxed font-light opacity-90">
                                    Though vast, the real estate market often overlooks the hidden gems within distressed properties. At MIOYM Properties, we've revolutionized this aspect with our state-of-the-art technology, ingeniously crafted by Marc Cox. Our mission? To unearth these undervalued homes across diverse markets. Our groundbreaking techniques enable us to secure these properties at a staggering 60% off their prevailing market rates. This not only assures an advantageous starting point for our investments but also promises lucrative returns for our esteemed clientele.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Principle 2 -->
                    <div class="flex flex-col h-full px-4 md:px-8 lg:px-12 mb-12 md:mb-0 items-start text-left" data-aos="fade-up" data-aos-delay="200">
                        <div class="flex flex-col h-full w-full">
                            <!-- Image Placeholder -->
                            <div class="w-full aspect-[4/3] bg-[#2a2a2a] rounded-[24px] mb-8 flex items-center justify-center border border-white/10 shadow-lg relative overflow-hidden flex-shrink-0">
                                <div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent"></div>
                                <img src="{{ asset('img/residentialImg2.webp') }}" alt="Principle 2" class="w-full h-full object-cover">
                            </div>
                            
                            <!-- Number & Title -->
                            <div class="flex items-start gap-5 mb-6 flex-shrink-0">
                                <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center flex-shrink-0 shadow-md">
                                    <span class="text-black text-2xl font-extrabold" style="font-family: 'Plus Jakarta Sans', sans-serif;">02</span>
                                </div>
                                <div class="flex-grow pt-1">
                                    <h3 class="text-xl lg:text-2xl font-bold text-white leading-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                        Adding Value Through Renovation
                                    </h3>
                                </div>
                            </div>
                            
                            <!-- Description -->
                            <div class="flex-grow">
                                <p class="text-gray-300 text-justify text-sm sm:text-base leading-relaxed font-light opacity-90">
                                    A house is not just bricks and mortar; it's a vision, a dream. At MIOYM Properties, we are passionate about breathing life into these structures. With a team of seasoned experts, we undertake meticulous renovation projects, elevating the intrinsic value of each property. By amalgamating aesthetic charm with quality enhancements, we ensure that our investments morph into coveted homes, amplifying our investors' ROI.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Principle 3 -->
                    <div class="flex flex-col h-full px-4 md:px-8 lg:px-12 items-start text-left" data-aos="fade-up" data-aos-delay="300">
                        <div class="flex flex-col h-full w-full">
                            <!-- Image Placeholder -->
                            <div class="w-full aspect-[4/3] bg-[#2a2a2a] rounded-[24px] mb-8 flex items-center justify-center border border-white/10 shadow-lg relative overflow-hidden flex-shrink-0">
                                <div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent"></div>
                                <img src="{{ asset('img/residentialImg3.webp') }}" alt="Principle 3" class="w-full h-full object-cover">
                            </div>
                            
                            <!-- Number & Title -->
                            <div class="flex items-start gap-5 mb-6 flex-shrink-0">
                                <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center flex-shrink-0 shadow-md">
                                    <span class="text-black text-2xl font-extrabold" style="font-family: 'Plus Jakarta Sans', sans-serif;">03</span>
                                </div>
                                <div class="flex-grow pt-1">
                                    <h3 class="text-xl lg:text-2xl font-bold text-white leading-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                        Empowering MIOYM Affordable Homes
                                    </h3>
                                </div>
                            </div>
                            
                            <!-- Description -->
                            <div class="flex-grow">
                                <p class="text-gray-300 text-justify text-sm sm:text-base leading-relaxed font-light opacity-90">
                                    At the heart of MIOYM Equities is an unwavering commitment to community upliftment. Inspired by our founder's ground-breaking work in underserved communities, we have pledged to hand over the keys of every property we acquire to a first-time homebuyer within a year. This noble strategy is twofold: while we guarantee commendable returns for our investors, we also infuse new life into the communities, creating cohesive neighborhoods that thrive and flourish. Are you ready to embark on a revolutionary real estate investment journey? With MIOYM Equities, you're investing in properties, potential, value, and communities. Join us in reshaping the future of single-family homes across America
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        <!-- Our Partners Section -->
        <section class="mt-10 py-20 px-0 relative overflow-hidden" style="background: #000000;">
            <div class="max-w-7xl mx-auto relative z-10 px-4 sm:px-6 lg:px-8">
                <!-- Section Header -->
                <div class="text-center mb-12" data-aos="fade-up">
                    <h2 class="text-4xl sm:text-5xl font-bold text-white mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                        Our Partners
                    </h2>
                </div>
                
                <!-- Automatic Carousel with 3 Images and Fade Effect -->
                <div data-aos="fade-up" data-aos-delay="200" x-data="{
                    currentIndex: 0,
                    images: [
                        '{{ asset('img/buildings.webp') }}',
                        '{{ asset('img/image_3.webp') }}',
                        '{{ asset('img/mioymbuilding.webp') }}',
                        '{{ asset('img/residential.webp') }}',
                        '{{ asset('img/sales_process.webp') }}',
                        '{{ asset('img/multifamliy.webp') }}'
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
                        <div class="absolute left-0 top-0 bottom-0 w-20 lg:w-32 z-10 pointer-events-none" style="background: linear-gradient(to right, #000000, transparent);"></div>
                        
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

        <!-- Featured Properties Section -->
        <section class="py-24 px-0">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                        Featured Residential Properties
                    </h2>
                    <p class="text-gray-400 text-lg max-w-2xl mx-auto font-light">
                        Explore our hand-picked selection of high-potential single-family homes across premium markets.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-16 max-w-5xl mx-auto">
                    <!-- Property Card 1 -->
                    <div class="bg-[#141414] rounded-[32px] p-4 lg:p-5 flex flex-col items-center border border-white/5 shadow-2xl transition-transform duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                        <div class="w-full aspect-[4/3] sm:aspect-[16/10] lg:aspect-[16/9] rounded-[24px] overflow-hidden mb-6 bg-[#2a2a2a] flex items-center justify-center relative border border-white/10">
                            <div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent"></div>
                            <img src="{{ asset('img/residentialImg4.webp') }}" alt="Principle 4" class="w-full h-full object-cover">
                        </div>
                        <div class="text-center px-4 mb-6 flex-grow flex items-center">
                            <h3 class="text-white text-lg lg:text-xl font-bold leading-snug" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                1401 S Williams St, Westmont, IL 60559
                            </h3>
                        </div>
                        <button type="button" onclick="openModal('modal-1')" class="w-full max-w-[200px] py-3 lg:py-3.5 bg-[#e0e0e0] hover:bg-white text-black text-sm font-extrabold rounded-xl transition-colors duration-300 text-center uppercase tracking-wider mb-2 focus:outline-none" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            View Details
                        </button>
                    </div>

                    <!-- Property Card 2 -->
                    <div class="bg-[#141414] rounded-[32px] p-4 lg:p-5 flex flex-col items-center border border-white/5 shadow-2xl transition-transform duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                        <div class="w-full aspect-[4/3] sm:aspect-[16/10] lg:aspect-[16/9] rounded-[24px] overflow-hidden mb-6 bg-[#2a2a2a] flex items-center justify-center relative border border-white/10">
                            <div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent"></div>
                            <img src="{{ asset('img/residentialImg5.webp') }}" alt="Principle 5" class="w-full h-full object-cover">
                        </div>
                        <div class="text-center px-4 mb-6 flex-grow flex items-center">
                            <h3 class="text-white text-lg lg:text-xl font-bold leading-snug" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                2403 W Rogers Ave, Baltimore, MD 21209
                            </h3>
                        </div>
                        <button type="button" onclick="openModal('modal-2')" class="w-full max-w-[200px] py-3 lg:py-3.5 bg-[#e0e0e0] hover:bg-white text-black text-sm font-extrabold rounded-xl transition-colors duration-300 text-center uppercase tracking-wider mb-2 focus:outline-none" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            View Details
                        </button>
                    </div>

                    <!-- Property Card 3 -->
                    <div class="bg-[#141414] rounded-[32px] p-4 lg:p-5 flex flex-col items-center border border-white/5 shadow-2xl transition-transform duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="300">
                        <div class="w-full aspect-[4/3] sm:aspect-[16/10] lg:aspect-[16/9] rounded-[24px] overflow-hidden mb-6 bg-[#2a2a2a] flex items-center justify-center relative border border-white/10">
                            <div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent"></div>
                            <img src="{{ asset('img/residentialImg6.webp') }}" alt="Principle 6" class="w-full h-full object-cover">
                        </div>
                        <div class="text-center px-4 mb-6 flex-grow flex items-center">
                            <h3 class="text-white text-lg lg:text-xl font-bold leading-snug" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                6 Shawnee Dr, Wenonah, NJ 08090
                            </h3>
                        </div>
                        <button type="button" onclick="openModal('modal-3')" class="w-full max-w-[200px] py-3 lg:py-3.5 bg-[#e0e0e0] hover:bg-white text-black text-sm font-extrabold rounded-xl transition-colors duration-300 text-center uppercase tracking-wider mb-2 focus:outline-none" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            View Details
                        </button>
                    </div>

                    <!-- Property Card 4 -->
                    <div class="bg-[#141414] rounded-[32px] p-4 lg:p-5 flex flex-col items-center border border-white/5 shadow-2xl transition-transform duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="400">
                        <div class="w-full aspect-[4/3] sm:aspect-[16/10] lg:aspect-[16/9] rounded-[24px] overflow-hidden mb-6 bg-[#2a2a2a] flex items-center justify-center relative border border-white/10">
                            <div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent"></div>
                            <img src="{{ asset('img/residentialImg7.webp') }}" alt="Principle 7" class="w-full h-full object-cover">
                        </div>
                        <div class="text-center px-4 mb-6 flex-grow flex items-center">
                            <h3 class="text-white text-lg lg:text-xl font-bold leading-snug" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                               1333 Beecher Ln, Norfolk, VA 23509
                            </h3>
                        </div>
                        <button type="button" onclick="openModal('modal-4')" class="w-full max-w-[200px] py-3 lg:py-3.5 bg-[#e0e0e0] hover:bg-white text-black text-sm font-extrabold rounded-xl transition-colors duration-300 text-center uppercase tracking-wider mb-2 focus:outline-none" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            View Details
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Request More Info Section -->
        <section class="py-24 px-0 relative overflow-hidden">
            <div class="max-w-4xl mx-auto relative z-10" data-aos="fade-up" data-aos-duration="1000">
                <!-- Glassmorphism Container -->
                <div class="rounded-[32px] p-8 sm:p-12 shadow-2xl relative" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); border: 1px solid rgba(255, 255, 255, 0.1);">
                    <h2 class="text-3xl md:text-4xl font-bold text-white text-center mb-10 tracking-wide uppercase" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                        Request More Info
                    </h2>
                    
                    <!-- Display Success Message if any -->
                    @if(session('success'))
                        <div class="mb-6 p-4 bg-green-500/20 border border-green-500/50 rounded-lg text-green-200 text-center">
                            {{ session('success') }}
                        </div>
                    @endif
                    <!-- Display Validation Errors -->
                    @if($errors->any())
                        <div class="mb-6 p-4 bg-red-500/20 border border-red-500/50 rounded-lg text-red-200">
                            <ul class="list-disc list-inside">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf
                        <!-- HONEYPOT FIELD: Hidden from real users, bots will fill this out -->
                        <input type="text" name="website_url" class="hidden" style="display:none !important" autocomplete="off" tabindex="-1">
                        
                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-white text-sm font-bold tracking-wider mb-2 uppercase" style="font-family: 'Plus Jakarta Sans', sans-serif;">Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="John Doe" class="w-full bg-[#d9d9d9] border-none rounded-xl px-4 py-4 text-black focus:ring-2 focus:ring-white/50 outline-none transition-shadow" required>
                        </div>
                        
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-white text-sm font-bold tracking-wider mb-2 uppercase" style="font-family: 'Plus Jakarta Sans', sans-serif;">Email Address</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="example@example.com" class="w-full bg-[#d9d9d9] border-none rounded-xl px-4 py-4 text-black focus:ring-2 focus:ring-white/50 outline-none transition-shadow" required>
                        </div>
                        
                        <!-- Mobile Number -->
                        <div>
                            <label for="phone" class="block text-white text-sm font-bold tracking-wider mb-2 uppercase" style="font-family: 'Plus Jakarta Sans', sans-serif;">Mobile Number</label>
                            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="+1 (xxx) xxx-xxxx" maxlength="17" oninput="formatUSPhone(this)" class="w-full bg-[#d9d9d9] border-none rounded-xl px-4 py-4 text-black focus:ring-2 focus:ring-white/50 outline-none transition-shadow" required>
                        </div>
                        
                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-white text-sm font-bold tracking-wider mb-2 uppercase" style="font-family: 'Plus Jakarta Sans', sans-serif;">Message</label>
                            <textarea id="message" name="message" rows="6" class="w-full bg-[#d9d9d9] border-none rounded-xl px-4 py-4 text-black focus:ring-2 focus:ring-white/50 outline-none transition-shadow resize-none" required>{{ old('message') }}</textarea>
                        </div>
                        
                        <!-- Disclaimers & Checkboxes -->
                        <div class="mt-8 space-y-6">
                            <div class="flex items-start gap-4">
                                <div class="flex items-center h-6 mt-1">
                                    <input id="consent_marketing" name="consent_marketing" type="checkbox" class="w-5 h-5 rounded-sm bg-[#d9d9d9] border-none text-black focus:ring-0 cursor-pointer" required {{ old('consent_marketing') ? 'checked' : '' }}>
                                </div>
                                <div class="text-sm text-gray-300 font-light leading-relaxed">
                                    <p class="mb-2">By entering your telephone number and email you are providing consent to receive marketing communications including emails and phone calls from Mioym Commercial Capital. Consent is not a condition of purchase. Message and data rates may apply. Reply STOP to stop, HELP for help.</p>
                                    <p>Note: Messages will involve real estate investment opportunities and info regarding our affordable homes program.</p>
                                </div>
                            </div>
                            
                            <div class="space-y-3 pt-2">
                                <label class="flex items-center gap-4 cursor-pointer">
                                    <input type="checkbox" name="sms_consent" class="w-5 h-5 rounded-sm bg-[#d9d9d9] border-none text-black focus:ring-0 cursor-pointer" required {{ old('sms_consent') ? 'checked' : '' }}>
                                    <span class="text-sm text-gray-300 font-light">I want to receive SMS texts about products & services</span>
                                </label>
                                <label class="flex items-center gap-4 cursor-pointer">
                                    <input type="checkbox" name="terms" class="w-5 h-5 rounded-sm bg-[#d9d9d9] border-none text-black focus:ring-0 cursor-pointer" required {{ old('terms') ? 'checked' : '' }}>
                                    <span class="text-sm text-gray-300 font-light">I accept terms & conditions</span>
                                </label>
                                <label class="flex items-center gap-4 cursor-pointer">
                                    <input type="checkbox" name="email_consent" class="w-5 h-5 rounded-sm bg-[#d9d9d9] border-none text-black focus:ring-0 cursor-pointer" required {{ old('email_consent') ? 'checked' : '' }}>
                                    <span class="text-sm text-gray-300 font-light">I want emails about products & services</span>
                                </label>
                            </div>
                        </div>

                        <!-- Google reCAPTCHA v2 Widget -->
                        <div class="mt-8 flex justify-start">
                            <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY', 'your-site-key-here') }}"></div>
                        </div>
                        
                        <!-- Submit Button -->
                        <div class="flex pt-6">
                            <button type="submit" class="w-full flex items-center justify-center gap-3 bg-[#141414] hover:bg-black text-white px-8 py-4 rounded-xl font-bold transition-colors border border-white/10 focus:outline-none focus:ring-2 focus:ring-white/50" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                <svg class="w-5 h-5 transform rotate-90 -mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                                SEND MESSAGE
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        
        <!-- Modals Container -->
        <div id="modal-container" class="fixed inset-0 z-50 flex items-center justify-center hidden opacity-0 transition-opacity duration-300" style="background-color: rgba(0, 0, 0, 0.85); backdrop-filter: blur(5px);">
            <!-- Modal 1 -->
            <div id="modal-1" class="modal-content hidden w-full max-w-6xl mx-4 bg-[#d9d9d9] rounded-[32px] overflow-hidden shadow-2xl relative transform scale-95 transition-transform duration-300">
                <button onclick="closeModal()" class="absolute top-6 right-6 z-10 w-12 h-12 bg-black/20 hover:bg-black/40 rounded-full flex items-center justify-center transition-colors">
                    <svg class="w-7 h-7 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
                <div class="flex flex-col md:flex-row p-8 lg:p-12 gap-10 items-center">
                    <div class="w-full md:w-3/5">
                        <div class="w-full aspect-[16/10] rounded-[24px] overflow-hidden bg-[#2a2a2a] flex items-center justify-center relative border border-black/10">
                            <img src="{{ asset('img/residentialImg4.webp') }}" alt="Principle 1" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-black text-xl lg:text-2xl font-bold leading-snug mt-8 text-center" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            1401 S Williams St, Westmont, IL 60559
                        </h3>
                    </div>
                    <div class="w-full md:w-2/5 text-black text-xl lg:text-2xl font-medium" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                        <div class="flex justify-between border-b border-black/10 py-4">
                            <span>Purchase</span>
                            <span>$470,000</span>
                        </div>
                        <div class="flex justify-between border-b border-black/10 py-3">
                            <span>Reno & Add't Costs</span>
                            <span>$25,000</span>
                        </div>
                        <div class="flex justify-between border-b border-black/10 py-3">
                            <span>Total Cost</span>
                            <span>$495,000</span>
                        </div>
                        <div class="flex justify-between border-b border-black/10 py-3">
                            <span>Sale Price</span>
                            <span>$650,000</span>
                        </div>
                        <div class="flex justify-between py-3 font-bold">
                            <span>Total Profit</span>
                            <span>$155,000</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 2 -->
            <div id="modal-2" class="modal-content hidden w-full max-w-6xl mx-4 bg-[#d9d9d9] rounded-[32px] overflow-hidden shadow-2xl relative transform scale-95 transition-transform duration-300">
                <button onclick="closeModal()" class="absolute top-6 right-6 z-10 w-12 h-12 bg-black/20 hover:bg-black/40 rounded-full flex items-center justify-center transition-colors">
                    <svg class="w-7 h-7 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
                <div class="flex flex-col md:flex-row p-8 lg:p-12 gap-10 items-center">
                    <div class="w-full md:w-3/5">
                        <div class="w-full aspect-[16/10] rounded-[24px] overflow-hidden bg-[#2a2a2a] flex items-center justify-center relative border border-black/10">
                            <img src="{{ asset('img/residentialImg5.webp') }}" alt="Principle 5" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-black text-xl lg:text-2xl font-bold leading-snug mt-8 text-center" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            2403 W Rogers Ave, Baltimore, MD 21209
                        </h3>
                    </div>
                    <div class="w-full md:w-2/5 text-black text-xl lg:text-2xl font-medium" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                        <div class="flex justify-between border-b border-black/10 py-4">
                            <span>Purchase</span>
                            <span>$240,000</span>
                        </div>
                        <div class="flex justify-between border-b border-black/10 py-3">
                            <span>Reno & Add't Costs</span>
                            <span>$94,000</span>
                        </div>
                        <div class="flex justify-between border-b border-black/10 py-3">
                            <span>Total Cost</span>
                            <span>$334,000</span>
                        </div>
                        <div class="flex justify-between border-b border-black/10 py-3">
                            <span>Sale Price</span>
                            <span>$508,000</span>
                        </div>
                        <div class="flex justify-between py-3 font-bold">
                            <span>Total Profit</span>
                            <span>$174,000</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 3 -->
            <div id="modal-3" class="modal-content hidden w-full max-w-6xl mx-4 bg-[#d9d9d9] rounded-[32px] overflow-hidden shadow-2xl relative transform scale-95 transition-transform duration-300">
                <button onclick="closeModal()" class="absolute top-6 right-6 z-10 w-12 h-12 bg-black/20 hover:bg-black/40 rounded-full flex items-center justify-center transition-colors">
                    <svg class="w-7 h-7 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
                <div class="flex flex-col md:flex-row p-8 lg:p-12 gap-10 items-center">
                    <div class="w-full md:w-3/5">
                        <div class="w-full aspect-[16/10] rounded-[24px] overflow-hidden bg-[#2a2a2a] flex items-center justify-center relative border border-black/10">
                            <img src="{{ asset('img/residentialImg6.webp') }}" alt="Principle 6" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-black text-xl lg:text-2xl font-bold leading-snug mt-8 text-center" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            6 Shawnee Dr, Wenonah, NJ 08090
                        </h3>
                    </div>
                    <div class="w-full md:w-2/5 text-black text-xl lg:text-2xl font-medium" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                        <div class="flex justify-between border-b border-black/10 py-4">
                            <span>Purchase</span>
                            <span>$214,723</span>
                        </div>
                        <div class="flex justify-between border-b border-black/10 py-3">
                            <span>Reno & Add't Costs</span>
                            <span>$77,018</span>
                        </div>
                        <div class="flex justify-between border-b border-black/10 py-3">
                            <span>Total Cost</span>
                            <span>$291,746</span>
                        </div>
                        <div class="flex justify-between border-b border-black/10 py-3">
                            <span>Sale Price</span>
                            <span>$578,471</span>
                        </div>
                        <div class="flex justify-between py-3 font-bold">
                            <span>Total Profit</span>
                            <span>$286,731</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 4 -->
            <div id="modal-4" class="modal-content hidden w-full max-w-6xl mx-4 bg-[#d9d9d9] rounded-[32px] overflow-hidden shadow-2xl relative transform scale-95 transition-transform duration-300">
                <button onclick="closeModal()" class="absolute top-6 right-6 z-10 w-12 h-12 bg-black/20 hover:bg-black/40 rounded-full flex items-center justify-center transition-colors">
                    <svg class="w-7 h-7 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
                <div class="flex flex-col md:flex-row p-8 lg:p-12 gap-10 items-center">
                    <div class="w-full md:w-3/5">
                        <div class="w-full aspect-[16/10] rounded-[24px] overflow-hidden bg-[#2a2a2a] flex items-center justify-center relative border border-black/10">
                            <img src="{{ asset('img/residentialImg7.webp') }}" alt="Principle 2" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-black text-xl lg:text-2xl font-bold leading-snug mt-8 text-center" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                           1333 Beecher Ln, Norfolk, VA 23509
                        </h3>
                    </div>
                    <div class="w-full md:w-2/5 text-black text-xl lg:text-2xl font-medium" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                        <div class="flex justify-between border-b border-black/10 py-4">
                            <span>Purchase</span>
                            <span>$300,000</span>
                        </div>
                        <div class="flex justify-between border-b border-black/10 py-3">
                            <span>Reno & Add't Costs</span>
                            <span>$50,000</span>
                        </div>
                        <div class="flex justify-between border-b border-black/10 py-3">
                            <span>Total Cost</span>
                            <span>$350,000</span>
                        </div>
                        <div class="flex justify-between border-b border-black/10 py-3">
                            <span>Sale Price</span>
                            <span>$600,000</span>
                        </div>
                        <div class="flex justify-between py-3 font-bold">
                            <span>Total Profit</span>
                            <span>$250,000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('components.footer')
    

    <!-- AOS JS for scroll animations -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Google reCAPTCHA v2 Script -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        // US Phone Number Formatter
        function formatUSPhone(input) {
            let value = input.value.replace(/\D/g, ''); // Remove non-digits
            
            // Normalize: If user pastes number starting with 1, remove the 1 temporarily
            if (value.startsWith('1')) {
                value = value.substring(1);
            }
            
            let formatted = '+1 ';
            
            // Ensure the first digit (area code) is between 2 and 9
            if (value.length > 0) {
                if (value[0] === '0' || value[0] === '1') {
                    value = value.substring(1); // Drop invalid first digit
                }
            }

            if (value.length > 0) {
                formatted += '(' + value.substring(0, 3);
            }
            if (value.length >= 4) {
                formatted += ') ' + value.substring(3, 6);
            }
            if (value.length >= 7) {
                formatted += '-' + value.substring(6, 10);
            }
            
            // Allow backspacing properly by not prepending +1 if input is empty
            input.value = value.length === 0 ? '' : formatted;
        }

        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                once: true,
                offset: 50,
                duration: 800,
                easing: 'ease-out-cubic',
            });
        });

        // Modal Logic
        const modalContainer = document.getElementById('modal-container');
        let currentModal = null;

        function openModal(modalId) {
            currentModal = document.getElementById(modalId);
            if (!currentModal) return;

            // Show container
            modalContainer.classList.remove('hidden');
            // Trigger reflow
            void modalContainer.offsetWidth;
            
            // Fade in container
            modalContainer.classList.remove('opacity-0');
            modalContainer.classList.add('opacity-100');

            // Show and scale up specific modal
            currentModal.classList.remove('hidden');
            setTimeout(() => {
                currentModal.classList.remove('scale-95');
                currentModal.classList.add('scale-100');
            }, 50);

            // Prevent body scroll
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            if (!currentModal) return;

            // Scale down specific modal
            currentModal.classList.remove('scale-100');
            currentModal.classList.add('scale-95');

            // Fade out container
            modalContainer.classList.remove('opacity-100');
            modalContainer.classList.add('opacity-0');

            // Hide everything after transition
            setTimeout(() => {
                currentModal.classList.add('hidden');
                modalContainer.classList.add('hidden');
                currentModal = null;
                // Restore body scroll
                document.body.style.overflow = '';
            }, 300);
        }

        // Close on background click
        modalContainer.addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Close on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !modalContainer.classList.contains('hidden')) {
                closeModal();
            }
        });
    </script>
</body>
</html>
