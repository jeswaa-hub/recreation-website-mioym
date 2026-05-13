<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Institutional Real Estate Investment Firm | MIOYM Equities</title>
    <meta name="description" content="Discover MIOYM Equities, a leading institutional real estate firm. We rebuild communities while targeting 15% annual returns for our investors.">
    <meta name="keywords" content="Institutional Real Estate, 15% Annual Returns, Real Estate Investment Firm, Distressed Assets, Property Investment, MIOYM Equities">
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
            background: linear-gradient(to bottom, #000000 0%, #666666 88%);
            color: #ffffff;
            line-height: 1.6;
            overflow-x: hidden;
            min-height: 100vh;
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
    
    <!-- Main Content -->
    <main class="pt-16 lg:pt-20">
        <!-- Hero Section -->
        <section class="py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
            <div class="absolute inset-0 " style="background-image: url('{{ asset('img/bgAboutUs.png') }}'); background-size: cover; background-position: center; z-index: -1;"></div>
            <div class="max-w-7xl mx-auto text-center relative z-10" data-aos="fade-down" data-aos-duration="1000">
                <h1 class="uppercase text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                    About Us
                </h1>
            </div>
        </section>
        
        <!-- About Content Section -->
        <section class="py-40 px-5 sm:px-6 lg:px-8 relative overflow-hidden" style="background: linear-gradient(to bottom, #0D0D0E 0%, #666666 200%);">
            <!-- Decorative Circles -->
            <div class="absolute top-[-100px] left-[-100px] w-[300px] h-[300px] rounded-full pointer-events-none" style="background-color: #777777; filter: blur(40px);">
                <div class="absolute inset-0 rounded-full" style="background-image: url(\"data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E\"); opacity: 0.15;"></div>
            </div>
            <div class="absolute bottom-[-100px] right-[-100px] w-[300px] h-[300px] rounded-full pointer-events-none" style="background-color: #777777; filter: blur(40px);">
                <div class="absolute inset-0 rounded-full" style="background-image: url(\"data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E\"); opacity: 0.15;"></div>
            </div>
            
            <div class="max-w-7xl mx-auto relative">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center relative z-10">
                    <!-- Left: Text Content -->
                    <div data-aos="fade-right" data-aos-duration="800">
                        <p class="text-gray-300 text-2xl leading-relaxed" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            Established in 2008 by our Chief Executive Officer, Marc Cox, MIOYM Group is a multifaceted distressed asset opportunistic private equity firm headquartered in Purchase, New York. Our core focus lies in residential and commercial properties across the United States.We are guided by our unwavering commitment to "Giving back to the community with every project."
                        </p>
                    </div>
                </div>
                
                <!-- Right: Floating Image -->
                <div class="hidden lg:block absolute right-[-30%] top-[-150%]" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
                    <img src="{{ asset('img/houseC.png') }}" alt="MIOYM Equities Institutional Real Estate Property Portfolio" class="w-[70%] h-[50%]" style="z-index: 10;">
                </div>
            </div>
        </section>
        
        <!-- Next Section with Background Image -->
        <section class="py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden" style="background: linear-gradient(to bottom, #000000 0%, #1a1a1a 100%);">
            <div class="absolute inset-0 z-0" style="background-image: url('{{ asset('img/bgaboutUs1.png') }}'); background-size: cover; background-position: center; opacity: 0.15;"></div>
            <div class="max-w-7xl mx-auto relative z-10">
                <div class="flex flex-col lg:flex-row items-center gap-12">
                    <!-- Left: Marc Cox Image -->
                    <div class="w-full lg:w-1/2 rounded-3xl overflow-hidden shadow-xl" data-aos="fade-up" data-aos-duration="800">
                        <img src="{{ asset('img/MarcCox.png') }}" alt="Marc Cox - CEO of MIOYM Equities Institutional Real Estate Investment Firm" class="w-full h-auto object-cover">
                    </div>
                    
                    <!-- Right: Glassmorphism Container -->
                    <div class="w-full lg:w-1/2 rounded-3xl p-8 lg:p-12" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(20px); border: 1px solid rgba(255, 255, 255, 0.2);" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                        <h3 class="italic font-extrabold text-3xl sm:text-4xl text-white mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            Legacy and Impact with Marc
                        </h3>
                        <p class="text-gray-300 text-justify text-xl leading-relaxed" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            Marc Cox, the CEO of MIOYM Group, is fervently committed to his vision of leaving the Earth in a better state than when he found it. Central to his mission is our dedication to helping families realize their dream of homeownership, empowering investors to thrive, and uplifting the contractors we collaborate with. At MIOYM, we wholeheartedly share Marc's sentiments. For us, it's not merely a matter of buying low and selling high; it's about creating tangible, enduring improvements in the lives of the individuals we touch. Much like Marc, we believe in constructing homes and building enduring legacies.
                        </p>
                    </div>
                </div>
            </div>
                <div class="py-10">
                <p class="text-white text-lg text-center justify-center mb-8" data-aos="fade-in" data-aos-duration="800">We invite you to listen to Marc's heartfelt words and join us on our journey.</p>
                <!-- Video Here! -->
                <div class="max-w-4xl mx-auto" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="150">
                    <div class="rounded-3xl overflow-hidden shadow-2xl" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1);">
                        <video src="{{ asset('img/MarcCox.mp4') }}" controls class="w-full h-auto object-cover" style="max-height: 500px;"></video>
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
                once: true, // whether animation should happen only once - while scrolling down
                offset: 50, // offset (in px) from the original trigger point
                duration: 800, // values from 0 to 3000, with step 50ms
                easing: 'ease-out-cubic', // default easing for AOS animations
            });
        });
    </script>
</body>
</html>
