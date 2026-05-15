<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Process | Institutional Real Estate | MIOYM Equities</title>
    <meta name="description" content="Discover MIOYM Equities' proven real estate investment and development process. We ensure maximum value creation through strategic acquisition and renovation.">
    <meta name="keywords" content="Real Estate Process, Property Development, MIOYM Equities, Investment Strategy, Institutional Real Estate">
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
        <section class="relative w-full overflow-hidden bg-black flex items-center justify-center min-h-[250px] lg:min-h-[300px]">
            <!-- Background Image -->
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('img/bgAboutUs.webp') }}" alt="MIOYM Process Background" class="w-full h-full object-cover">
            </div>

            <!-- Title -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full text-center" data-aos="fade-down" data-aos-duration="1000">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight tracking-wider uppercase" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                    Process
                </h1>
            </div>
        </section>
        
        <!-- Process Steps Section -->
        <section class="py-24 px-4 sm:px-6 lg:px-8 relative overflow-hidden bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/processbg.webp') }}');">
            <!-- Dark Overlay for better contrast if needed -->
            <div class="absolute inset-0 bg-black/60 z-0"></div>
            
            <div class="max-w-7xl mx-auto relative z-10">
                <!-- Top Row: 3 Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-10 mb-6 lg:mb-10">
                    <!-- Step 1 -->
                    <div class="relative bg-[#5a5a5a] rounded-xl p-4 sm:p-6 shadow-2xl flex flex-col items-center border-2 border-transparent hover:border-white transition-colors duration-300 cursor-pointer" data-aos="fade-up" data-aos-delay="100">
                        <div class="w-full aspect-video rounded-lg overflow-hidden mb-6 bg-gray-800 flex items-center justify-center">
                            <img src="{{ asset('img/processimg1.webp') }}" alt="Process 1" class="w-full h-full object-cover">
                        </div>
                        <p class="text-white text-center text-sm sm:text-base font-light leading-relaxed px-2">
                            Our Proprietary technology identifies distressed properties throughout 42 different states selling for 60% discounts.
                        </p>
                        <!-- Bottom Pointer Triangle -->
                        <div class="absolute -bottom-6 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-[15px] border-r-[15px] border-t-[25px] border-l-transparent border-r-transparent border-t-[#5a5a5a]"></div>
                    </div>

                    <!-- Step 2 -->
                    <div class="relative bg-[#5a5a5a] rounded-xl p-4 sm:p-6 shadow-2xl flex flex-col items-center border-2 border-transparent hover:border-white transition-colors duration-300 cursor-pointer" data-aos="fade-up" data-aos-delay="200">
                        <div class="w-full aspect-video rounded-lg overflow-hidden mb-6 bg-gray-800 flex items-center justify-center">
                            <img src="{{ asset('img/processimg2.webp') }}" alt="Process 2" class="w-full h-full object-cover">
                        </div>
                        <p class="text-white text-center text-sm sm:text-base font-light leading-relaxed px-2">
                            We determine the potential ARV and avoid overpaying for the house.
                        </p>
                        <!-- Bottom Pointer Triangle -->
                        <div class="absolute -bottom-6 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-[15px] border-r-[15px] border-t-[25px] border-l-transparent border-r-transparent border-t-[#5a5a5a]"></div>
                    </div>

                    <!-- Step 3 -->
                    <div class="relative bg-[#5a5a5a] rounded-xl p-4 sm:p-6 shadow-2xl flex flex-col items-center border-2 border-transparent hover:border-white transition-colors duration-300 cursor-pointer" data-aos="fade-up" data-aos-delay="300">
                        <div class="w-full aspect-video rounded-lg overflow-hidden mb-6 bg-gray-800 flex items-center justify-center">
                            <img src="{{ asset('img/processimg3.webp') }}" alt="Process 3" class="w-full h-full object-cover">
                        </div>
                        <p class="text-white text-center text-sm sm:text-base font-light leading-relaxed px-2">
                            We add value by renovating the property increasing its market value.
                        </p>
                        <!-- Bottom Pointer Triangle -->
                        <div class="absolute -bottom-6 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-[15px] border-r-[15px] border-t-[25px] border-l-transparent border-r-transparent border-t-[#5a5a5a]"></div>
                    </div>
                </div>

                <!-- Bottom Row: 2 Cards (Centered) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-10 max-w-4xl mx-auto mt-12 lg:mt-16">
                    <!-- Step 4 -->
                    <div class="relative bg-[#5a5a5a] rounded-xl p-4 sm:p-6 shadow-2xl flex flex-col items-center border-2 border-transparent hover:border-white transition-colors duration-300 cursor-pointer" data-aos="fade-up" data-aos-delay="400">
                        <!-- Top Pointer Triangle -->
                        <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-[15px] border-r-[15px] border-b-[25px] border-l-transparent border-r-transparent border-b-[#5a5a5a]"></div>
                        
                        <div class="w-full aspect-video rounded-lg overflow-hidden mb-6 bg-gray-800 flex items-center justify-center">
                            <img src="{{ asset('img/processimg4.webp') }}" alt="Process 4" class="w-full h-full object-cover">
                        </div>
                        <p class="text-white text-center text-sm sm:text-base font-light leading-relaxed px-2">
                            Upon completion of rehab, we list the property with local realtor.
                        </p>
                    </div>

                    <!-- Step 5 -->
                    <div class="relative bg-[#5a5a5a] rounded-xl p-4 sm:p-6 shadow-2xl flex flex-col items-center border-2 border-transparent hover:border-white transition-colors duration-300 cursor-pointer" data-aos="fade-up" data-aos-delay="500">
                        <!-- Top Pointer Triangle -->
                        <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-[15px] border-r-[15px] border-b-[25px] border-l-transparent border-r-transparent border-b-[#5a5a5a]"></div>
                        
                        <div class="w-full aspect-video rounded-lg overflow-hidden mb-6 bg-gray-800 flex items-center justify-center">
                            <img src="{{ asset('img/processimg5.webp') }}" alt="Process 5" class="w-full h-full object-cover">
                        </div>
                        <p class="text-white text-center text-sm sm:text-base font-light leading-relaxed px-2">
                            We look to sell the property to a first-time home buyer within a year of purchasing the property.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Value Proposition Section -->
        <section class="py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden bg-[#1c1c1c]">
            <div class="max-w-7xl mx-auto relative z-10">
                <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
                    <!-- Left: Text -->
                    <div class="w-full lg:w-1/4 text-center lg:text-left" data-aos="fade-right" data-aos-duration="1000">
                        <h2 class="text-3xl sm:text-4xl font-bold text-white leading-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            You Earn a<br>
                            Passive<br>
                            Return,<br>
                            While We Do<br>
                            All the Work
                        </h2>
                    </div>

                    <!-- Right: Stats Cards -->
                    <div class="w-full lg:w-3/4 grid grid-cols-1 sm:grid-cols-3 gap-6">
                        <!-- Stat Card 1 -->
                        <div class="bg-[#999999] rounded-tl-[100px] rounded-br-[100px] rounded-tr-none rounded-bl-none p-8 relative flex flex-col justify-end min-h-[200px]" data-aos="fade-up" data-aos-delay="100">
                            <div class="absolute top-6 right-6 text-white">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <span class="text-6xl font-black text-black block leading-none tracking-tighter" style="font-family: 'Plus Jakarta Sans', sans-serif;">12</span>
                                <span class="text-black text-xl font-bold mt-2 block" style="font-family: 'Plus Jakarta Sans', sans-serif;">Month Hold</span>
                            </div>
                        </div>

                        <!-- Stat Card 2 -->
                        <div class="bg-[#999999] rounded-tl-[100px] rounded-br-[100px] rounded-tr-none rounded-bl-none p-8 relative flex flex-col justify-end min-h-[200px]" data-aos="fade-up" data-aos-delay="200">
                            <div class="absolute top-6 right-6 text-white">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                            </div>
                            <div>
                                <span class="text-6xl font-black text-black block leading-none tracking-tighter" style="font-family: 'Plus Jakarta Sans', sans-serif;">15%</span>
                                <span class="text-black text-xl font-bold mt-2 block" style="font-family: 'Plus Jakarta Sans', sans-serif;">Return</span>
                            </div>
                        </div>

                        <!-- Stat Card 3 -->
                        <div class="bg-[#999999] rounded-tl-[100px] rounded-br-[100px] rounded-tr-none rounded-bl-none p-8 relative flex flex-col justify-end min-h-[200px]" data-aos="fade-up" data-aos-delay="300">
                            <div class="absolute top-6 right-6 text-white">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path></svg>
                            </div>
                            <div>
                                <span class="text-6xl font-black text-black block leading-none tracking-tighter" style="font-family: 'Plus Jakarta Sans', sans-serif;">0</span>
                                <span class="text-black text-xl font-bold mt-2 block" style="font-family: 'Plus Jakarta Sans', sans-serif;">Fees</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Video Section -->
        <section class="py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden bg-[#2a2a2a]">
            <div class="max-w-5xl mx-auto relative z-10" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="w-full aspect-video bg-black rounded-2xl overflow-hidden shadow-2xl relative border-4 border-white">
                    <!-- YouTube iframe -->
                    <iframe class="absolute top-0 left-0 w-full h-full"
                        src="https://www.youtube.com/embed/D-BrVcxWSb0" 
                        title="MIOYM - What we do?" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </section>

    </main>

    @include('components.footer')
    

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

