<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mioym Realty Partners | Institutional Real Estate | MIOYM Equities</title>
    <meta name="description" content="Collaborate with Mioym Realty Partners. We build enduring legacies and strong community impacts through strategic real estate partnerships.">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
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
        <section class="relative w-full overflow-hidden bg-black flex items-center min-h-[300px] lg:min-h-[400px]">
            <!-- Abstract Background Image -->
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('img/bgAboutUs.png') }}" alt="Background Texture" class="w-full h-full object-cover opacity-60">
            </div>

            <!-- Right: Handshake Image (Full Height) -->
            <div class="absolute top-0 right-0 h-full w-full lg:w-1/2 hidden lg:flex z-10" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <img src="{{ asset('img/mioymRealtyimg2.png') }}" alt="Mioym Realty Partners Handshake" class="w-full h-full object-cover drop-shadow-2xl">
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 w-full py-12 lg:py-0">
                <div class="flex flex-col lg:flex-row items-center justify-between gap-8 lg:gap-12">
                    <!-- Left: Typography -->
                    <div class="w-full lg:w-1/2 text-center lg:text-left" data-aos="fade-right" data-aos-duration="1000">
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight tracking-wide" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            Mioym Realty<br>Partners
                        </h1>
                    </div>

                    <!-- Placeholder for alignment on large screens -->
                    <div class="hidden lg:block lg:w-1/2"></div>
                </div>
            </div>
        </section>
        <!-- Services Section -->
        <section class="py-24 px-4 sm:px-6 lg:px-8 bg-[#0a0a0a]">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">
                    
                    <!-- Left: Featured Image -->
                    <div class="w-full lg:w-1/2" data-aos="fade-right" data-aos-duration="1000">
                        <div class="rounded-[2rem] overflow-hidden shadow-2xl h-full">
                            <img src="{{ asset('img/mioymRealtyImg1.png') }}" alt="Mioym Realty Services" class="w-full h-full object-cover">
                        </div>
                    </div>

                    <!-- Right: Service Cards -->
                    <div class="w-full lg:w-1/2 flex flex-col gap-6" data-aos="fade-left" data-aos-duration="1000">
                        
                        <!-- Voucher Leasing Services Card -->
                        <div class="bg-[#1a1a1a] rounded-[2rem] p-8 lg:p-10 border border-white/5 shadow-xl flex flex-col justify-between h-full group hover:bg-[#222] transition-colors duration-300">
                            <div>
                                <h3 class="text-2xl lg:text-3xl font-bold text-white mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                    Voucher Leasing Services
                                </h3>
                                <p class="text-gray-400 text-lg leading-relaxed mb-10 font-light">
                                    We work tirelessly to match voucher holders with quality apartments—leveraging our agents' expertise to secure stable housing for clients using HCV, CityFHEPS, FHEPS, Section 8, SOTA, and other approved rental assistance programs.
                                </p>
                            </div>
                            <div class="flex justify-end">
                                <a href="#" class="inline-flex items-center gap-3 px-6 py-3 bg-[#2a1a1a] hover:bg-[#3a2a2a] text-white rounded-xl transition-all duration-300 group">
                                    <span class="font-bold text-sm tracking-wide">Explore Leasing Service</span>
                                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- Broker Division Card -->
                        <div class="bg-[#1a1a1a] rounded-[2rem] p-8 lg:p-10 border border-white/5 shadow-xl flex flex-col justify-between h-full group hover:bg-[#222] transition-colors duration-300">
                            <div>
                                <h3 class="text-2xl lg:text-3xl font-bold text-white mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                    Broker Division
                                </h3>
                                <p class="text-gray-400 text-lg leading-relaxed mb-10 font-light">
                                    We hire and train high-quality agents, providing hands-on support, lead flow, and an institutional platform to help them build long-term careers while making a real impact in NYC housing.
                                </p>
                            </div>
                            <div class="flex justify-end">
                                <a href="#" class="inline-flex items-center gap-3 px-6 py-3 bg-[#2a1a1a] hover:bg-[#3a2a2a] text-white rounded-xl transition-all duration-300 group">
                                    <span class="font-bold text-sm tracking-wide">Join our brokerage</span>
                                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Section -->
        <section class="py-24 px-4 sm:px-6 lg:px-8 relative overflow-hidden min-h-screen flex items-center" style="background-image: url('{{ asset('img/mioymRealtyBG.png') }}'); background-size: cover; background-position: center;">
            <div class="max-w-7xl mx-auto relative z-10">
                <!-- Header -->
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-4xl sm:text-5xl font-bold text-white mb-8 uppercase tracking-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                        Why Choose Mioym Realty?
                    </h2>
                    <p class="text-gray-300 text-lg max-w-5xl mx-auto leading-relaxed font-light">
                        At Mioym Realty Partners, we serve New York City with a focused mission: helping families secure stable homes and supporting agents as they build meaningful, lasting careers. Grounded in professionalism, trust, and consistent results, we offer a thoughtful, client-centered approach to every placement and every partnership.
                    </p>
                </div>

                <!-- 4 Column Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-28 items-start">
                    <!-- Column 1 -->
                    <div class="bg-[#999999] rounded-tr-[100px] rounded-bl-[100px] p-8 min-h-[400px] flex flex-col items-center text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="text-white mb-6">
                            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                        </div>
                        <h3 class="text-white text-xl font-bold mb-2 uppercase" style="font-family: 'Plus Jakarta Sans', sans-serif;">Personalized Approach</h3>
                        <p class="text-white/70 text-sm font-bold mb-4 uppercase">Tailored Solutions</p>
                        <p class="text-white text-sm leading-relaxed">
                            We take the time to understand your goals, voucher details, preferred neighborhoods, and lifestyle needs. By tailoring our search and recommendations specifically to you, we ensure every option aligns with what truly matters.
                        </p>
                    </div>

                    <!-- Column 2 -->
                    <div class="bg-[#999999] rounded-tl-[100px] rounded-br-[100px] p-8 min-h-[400px] flex flex-col items-center text-center sm:mt-[60px] text-white" data-aos="fade-up" data-aos-delay="200">
                        <div class="text-white mb-6">
                            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2 uppercase" style="font-family: 'Plus Jakarta Sans', sans-serif;">Trusted Community Partnerships</h3>
                        <p class="text-white/70 text-sm font-bold mb-4 uppercase">Trusted Network</p>
                        <p class="text-sm leading-relaxed">
                            We work closely with landlords, housing authorities, shelters, caseworkers, and community organizations to open more doors for our clients. These partnerships allow us to expand quality housing options and create stronger, more supportive communities.
                        </p>
                    </div>

                    <!-- Column 3 -->
                    <div class="bg-[#999999] rounded-tr-[100px] rounded-bl-[100px] p-8 min-h-[400px] flex flex-col items-center text-center" data-aos="fade-up" data-aos-delay="300">
                        <div class="text-white mb-6">
                            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                        </div>
                        <h3 class="text-white text-xl font-bold mb-2 uppercase" style="font-family: 'Plus Jakarta Sans', sans-serif;">Dedicated Support</h3>
                        <p class="text-white/70 text-sm font-bold mb-4 uppercase">Exclusivity</p>
                        <p class="text-white text-sm leading-relaxed">
                            Our team supports you through every stage of the process—answering questions, preparing documents, coordinating appointments, and keeping you informed. You'll never feel like you're navigating housing alone.
                        </p>
                    </div>

                    <!-- Column 4 -->
                    <div class="bg-[#999999] rounded-tl-[100px] rounded-br-[100px] p-8 min-h-[400px] flex flex-col items-center text-center sm:mt-[60px] text-white" data-aos="fade-up" data-aos-delay="400">
                        <div class="text-white mb-6">
                            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2 uppercase" style="font-family: 'Plus Jakarta Sans', sans-serif;">Client Satisfaction</h3>
                        <p class="text-white/70 text-sm font-bold mb-4 mt-2uppercase">Your Contentment Matters</p>
                        <p class="text-sm leading-relaxed">
                            Your success is our measure of success. We are dedicated to helping you secure stable, comfortable housing and ensuring the entire experience feels supportive and positive.
                        </p>
                    </div>
                </div>

                <!-- Info Bar -->
                <div class="bg-[#999999] rounded-tl-[100px] rounded-br-[100px] p-8 flex flex-col lg:flex-row items-center justify-between gap-8" data-aos="fade-up">
                    <div class="text-white ml-5">
                        <h4 class="text-2xl font font-white uppercase leading-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">MIOYM REALTY<br>PARTNERS</h4>
                    </div>
                    <div class="flex flex-col mr-5 sm:flex-row gap-8 lg:gap-16 text-white text-sm font-bold">
                        <div>
                            <p>914-566-9050</p>
                            <p>info@mioym.com</p>
                        </div>
                        <div>
                            <p>2900 Westchester Avenue</p>
                            <p>Purchase, NY 10577</p>
                        </div>
                        <div>
                            <p class="uppercase">Privacy Policy</p>
                            <p class="uppercase">Accessibility Statement</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('components.footer')
    
    @livewire('chat-widget')

    <!-- AOS JS for scroll animations -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                once: true,
                offset: 50,
                duration: 800,
                easing: 'ease-out-cubic',
            });
        });
    </script>
</body>
</html>