<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commercial Properties | Institutional Real Estate | MIOYM Equities</title>
    <meta name="description" content="Explore MIOYM Equities' Commercial Properties portfolio. We identify undervalued commercial assets with income and long-term growth potential.">
    <meta name="keywords" content="Commercial Properties, Real Estate, MIOYM Equities, Property Investment, Institutional Real Estate">
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
                <img src="{{ asset('img/bgAboutUs.png') }}" alt="Background Texture" class="w-full h-full object-cover">
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full py-12 lg:py-0">
                <div class="flex flex-col lg:flex-row items-center justify-between gap-8 lg:gap-12">
                    <!-- Left: Typography -->
                    <div class="w-full lg:w-1/2 text-center lg:text-left" data-aos="fade-right" data-aos-duration="1000">
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight tracking-wide" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            Commercial<br>Properties
                        </h1>
                    </div>

                    <!-- Right: 3D Commercial Model Image -->
                    <div class="w-full lg:w-1/2 relative flex justify-center lg:justify-end hidden lg:flex" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                        <img src="{{ asset('img/commercialprop.png') }}" alt="Commercial Property by MIOYM Equities" class="w-full max-w-[500px] lg:max-w-[750px] h-auto object-contain drop-shadow-2xl">
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Investment Strategy & Collage Section -->
        <section class="py-24 px-4 sm:px-6 lg:px-8 relative overflow-hidden" style="background: linear-gradient(to bottom, #1c1c1c 0%, #2a2a2a 100%);">
            <div class="max-w-7xl mx-auto relative z-10">
                <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
                    
                    <!-- Left: Image Collage -->
                    <div class="w-full lg:w-1/2 relative h-[500px] sm:h-[650px]" data-aos="fade-right" data-aos-duration="1000">
                        <!-- Top Left Image -->
                        <div class="absolute top-0 lg:top-[-10%] left-0 lg:left-0 w-[85%] lg:w-[65%] h-[40%] lg:h-[50%] rounded-2xl overflow-hidden shadow-2xl z-0 bg-[#2a2a2a]">
                            <img src="{{ asset('img/commercialpropimg1.png') }}" alt="Commercial Property by MIOYM Equities" class="w-full h-full object-cover">
                        </div>
                        
                        <!-- Bottom Left Image -->
                        <div class="absolute bottom-0 lg:bottom-0 left-0 lg:left-[-7%] w-[85%] lg:w-[65%] h-[40%] lg:h-[45%] rounded-2xl overflow-hidden shadow-2xl z-10 bg-[#3a3a3a]">
                            <img src="{{ asset('img/commercialpropimg3.png') }}" alt="Commercial Property by MIOYM Equities" class="w-full h-full object-cover">
                        </div>
                        
                        <!-- Middle Right Image (Overlapping) -->
                        <div class="absolute top-[30%] lg:top-[25%] right-0 lg:right-[-7%] w-[85%] lg:w-[70%] h-[40%] lg:h-[45%] rounded-2xl overflow-hidden shadow-2xl z-20 bg-[#1a1a1a]">
                            <img src="{{ asset('img/commercialpropimg2.png') }}" alt="Commercial Property by MIOYM Equities" class="w-full h-full object-cover">
                        </div>
                    </div>

                    <!-- Right: Text Content -->
                    <div class="w-full lg:w-1/2 flex flex-col justify-center" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                        <p class="text-gray-300 text-sm sm:text-base leading-relaxed text-justify font-light opacity-90 mb-6" style="font-family: 'Inter', sans-serif;">
                            MIOYM offers investors diverse opportunities to engage in commercial ventures while upholding its esteemed legacy through a focused investment strategy. We identify undervalued assets with income and long-term growth potential using proprietary technologies and resources.
                        </p>
                        
                        <p class="text-gray-300 text-sm sm:text-base leading-relaxed text-justify font-light opacity-90 mb-10" style="font-family: 'Inter', sans-serif;">
                            Positioning itself as a comprehensive real estate investment firm, MIOYM actively participates in various phases of an asset's lifecycle, including sourcing, acquisition, construction, asset management, financial reporting, property management, and eventual disposition. The company strongly emphasizes rigorous compliance standards and operational efficiency as integral components of its business strategy.
                        </p>
                        
                        <h3 class="text-white text-xl sm:text-2xl font-bold leading-snug" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            Let's explore how we can collaborate and partner together!
                        </h3>
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