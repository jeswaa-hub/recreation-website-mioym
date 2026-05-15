<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Executive Team | MIOYM Equities Institutional Real Estate</title>
    <meta name="description" content="Meet the expert executive team at MIOYM Equities. We are an institutional real estate investment firm driving 15% annual returns and rebuilding communities.">
    <meta name="keywords" content="Executive Team, Institutional Real Estate, Real Estate Experts, MIOYM Equities, Investment Professionals">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.webp') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"></noscript>
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: linear-gradient(to bottom, #000000 0%, #666666 88%);
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
    </style>
</head>
<body>
    @include('components.navigationHeader')
    
    <!-- Main Content -->
    <main class="pt-16 lg:pt-20">
        <!-- Hero Section -->
        <section class="py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden min-h-[300px] flex items-center justify-center">
            <div class="absolute inset-0" style="background-image: url('{{ asset('img/bgAboutUs.webp') }}'); background-size: cover; background-position: center;"></div>
            <div class="max-w-7xl mx-auto text-center relative z-10">
                <h1 class="uppercase text-4xl sm:text-5xl lg:text-6xl font-bold text-white tracking-wider" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                    OUR EXECUTIVE TEAM
                </h1>
            </div>
        </section>

        <!-- Team Intro Section -->
        <section class="py-24 px-4 sm:px-6 lg:px-8 relative overflow-hidden bg-[#1c1c1c]">
            <!-- Decorative Background Elements -->
            <div class="absolute left-[-100px] top-0  z-0 opacity-40  hidden lg:block">
                <img src="{{ asset('img/imgteam3.webp') }}" alt="" class="h-[800px] w-auto object-contain transform">
            </div>
            <div class="absolute right-0 top-0 z-0 opacity-40 pointer-events-none hidden lg:block">
                <img src="{{ asset('img/imgteam2.webp') }}" alt="" class="h-[800px] w-auto object-contain">
            </div>

            <div class="max-w-7xl mx-auto relative z-10 sm:px-5 lg:px-8">
                <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
                    <!-- Left: Team Image -->
                    <div class="w-full lg:w-1/2 relative">
                        <img src="{{ asset('img/imgteam1.webp') }}" alt="MIOYM Equities Institutional Real Estate Investment Experts Collaborating" class="w-full h-auto object-contain drop-shadow-2xl relative z-10">
                    </div>
                    
                    <!-- Right: Text Content -->
                    <div class="w-full lg:w-1/2 space-y-8">
                        <p class="text-gray-200 text-justify text-lg md:text-xl leading-relaxed font-light" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            We believe that intellectual capital is critical to providing innovative solutions and, ultimately, having a positive economic impact. Over the years, we have been fortunate to attract some of the most talented professionals in our industry.
                        </p>
                        <br>
                        <p class="text-gray-200 text-justify text-lg md:text-xl leading-relaxed font-light" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            They stay to build rewarding careers because of our entrepreneurial spirit, a commitment to our people and the high expectation for excellence. Our people are our most valuable asset &ndash; they are skilled problem solvers that believe in what they do. We focus on attracting exceptionally talented people and rewarding initiative, independent thinking and integrity.
                        </p>
                        <br>
                        <p class="text-gray-200 text-justify text-lg md:text-xl leading-relaxed font-light" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            Our team's breadth of skills and deep expertise are a critical source of intellectual capital where challenges can be opportunities.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Members Grid Section -->
        <section class="py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden" style="background: linear-gradient(to bottom, #1c1c1c 0%, #3a3a3a 100%);">
            <div class="max-w-7xl mx-auto relative z-10">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
                    
                    <!-- Team Member 1 - Marc Cox -->
                    <div class="group relative rounded-2xl overflow-hidden bg-black aspect-[3/4] shadow-2xl transition-transform duration-300 hover:-translate-y-2">
                        <div class="absolute inset-0 flex items-center justify-center bg-black">
                            <div class="w-full h-full" style="background: radial-gradient(circle at center, #2a2a2a 0%, #000000 100%);"></div>
                            <img src="{{ asset('img/team/marc.webp') }}" alt="MARC COX" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 lg:p-8">
                            <h3 class="text-white text-xl lg:text-2xl font-bold tracking-wide mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">MARC COX</h3>
                            <p class="text-gray-300 text-xs lg:text-sm font-medium tracking-wider uppercase">CEO & FOUNDER MIOYM GROUP</p>
                        </div>
                    </div>

                    <!-- Team Member 2 - Robert Costomiris -->
                    <div class="group relative rounded-2xl overflow-hidden bg-black aspect-[3/4] shadow-2xl transition-transform duration-300 hover:-translate-y-2">
                        <div class="absolute inset-0 flex items-center justify-center bg-black">
                            <div class="w-full h-full" style="background: radial-gradient(circle at center, #2a2a2a 0%, #000000 100%);"></div>
                            <img src="{{ asset('img/team/rob.webp') }}" alt="ROBERT COSTOMIRIS" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 lg:p-8">
                            <h3 class="text-white text-xl lg:text-2xl font-bold tracking-wide mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">ROBERT COSTOMIRIS</h3>
                            <p class="text-gray-300 text-xs lg:text-sm font-medium tracking-wider uppercase">PRESIDENT MIOYM EQUITIES</p>
                        </div>
                    </div>

                    <!-- Team Member 3 - EA Kratzman -->
                    <div class="group relative rounded-2xl overflow-hidden bg-black aspect-[3/4] shadow-2xl transition-transform duration-300 hover:-translate-y-2">
                        <div class="absolute inset-0 flex items-center justify-center bg-black">
                            <div class="w-full h-full" style="background: radial-gradient(circle at center, #2a2a2a 0%, #000000 100%);"></div>
                            <img src="{{ asset('img/team/kratzman.webp') }}" alt="EA KRATZMAN" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 lg:p-8">
                            <h3 class="text-white text-xl lg:text-2xl font-bold tracking-wide mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">EA KRATZMAN</h3>
                            <p class="text-gray-300 text-xs lg:text-sm font-medium tracking-wider uppercase">VP INVESTOR RELATIONS</p>
                        </div>
                    </div>

                    <!-- Team Member 4 - Marcos Lofredo -->
                    <div class="group relative rounded-2xl overflow-hidden bg-black aspect-[3/4] shadow-2xl transition-transform duration-300 hover:-translate-y-2">
                        <div class="absolute inset-0 flex items-center justify-center bg-black">
                            <div class="w-full h-full" style="background: radial-gradient(circle at center, #2a2a2a 0%, #000000 100%);"></div>
                            <img src="{{ asset('img/team/lofredo.webp') }}" alt="MARCOS LOFREDO" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 lg:p-8">
                            <h3 class="text-white text-xl lg:text-2xl font-bold tracking-wide mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">MARCOS LOFfREDO</h3>
                            <p class="text-gray-300 text-xs lg:text-sm font-medium tracking-wider uppercase">DIRECTOR OF CONSTRUCTION</p>
                        </div>
                    </div>

                    <!-- Team Member 5 - LUIS Blanco -->
                    <div class="group relative rounded-2xl overflow-hidden bg-black aspect-[3/4] shadow-2xl transition-transform duration-300 hover:-translate-y-2">
                        <div class="absolute inset-0 flex items-center justify-center bg-black">
                            <div class="w-full h-full" style="background: radial-gradient(circle at center, #2a2a2a 0%, #000000 100%);"></div>
                            <img src="{{ asset('img/team/blanco.webp') }}" alt="LUIS BLANCO" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 lg:p-8">
                            <h3 class="text-white text-xl lg:text-2xl font-bold tracking-wide mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">LUIS BLANCO</h3>
                            <p class="text-gray-300 text-xs lg:text-sm font-medium tracking-wider uppercase">VENDOR MANAGEMENT</p>
                        </div>
                    </div>

                    <!-- Team Member 6 - PAUL Carter -->
                    <div class="group relative rounded-2xl overflow-hidden bg-black aspect-[3/4] shadow-2xl transition-transform duration-300 hover:-translate-y-2">
                        <div class="absolute inset-0 flex items-center justify-center bg-black">
                            <div class="w-full h-full" style="background: radial-gradient(circle at center, #2a2a2a 0%, #000000 100%);"></div>
                            <img src="{{ asset('img/team/carter.webp') }}" alt="PAUL CARTER" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 lg:p-8">
                            <h3 class="text-white text-xl lg:text-2xl font-bold tracking-wide mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">PAUL CARTER</h3>
                            <p class="text-gray-300 text-xs lg:text-sm font-medium tracking-wider uppercase">GROUND UP DEVELOPMENT</p>
                        </div>
                    </div>

                    <!-- Team Member 7 - Jason StrohlI -->
                    <div class="group relative rounded-2xl overflow-hidden bg-black aspect-[3/4] shadow-2xl transition-transform duration-300 hover:-translate-y-2">
                        <div class="absolute inset-0 flex items-center justify-center bg-black">
                            <div class="w-full h-full" style="background: radial-gradient(circle at center, #2a2a2a 0%, #000000 100%);"></div>
                            <img src="{{ asset('img/team/jason.webp') }}" alt="JASON STROHLI" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 lg:p-8">
                            <h3 class="text-white text-xl lg:text-2xl font-bold tracking-wide mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">JASON STROHLI</h3>
                            <p class="text-gray-300 text-xs lg:text-sm font-medium tracking-wider uppercase">MIOYM REALTY PARTNERS</p>
                        </div>
                    </div>

                    <!-- Team Member 8 - Steve ANASTAS -->
                    <div class="group relative rounded-2xl overflow-hidden bg-black aspect-[3/4] shadow-2xl transition-transform duration-300 hover:-translate-y-2">
                        <div class="absolute inset-0 flex items-center justify-center bg-black">
                            <div class="w-full h-full" style="background: radial-gradient(circle at center, #2a2a2a 0%, #000000 100%);"></div>
                            <img src="{{ asset('img/team/steve.webp') }}" alt="STEVE ANASTAS" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 lg:p-8">
                            <h3 class="text-white text-xl lg:text-2xl font-bold tracking-wide mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">STEVE ANASTAS</h3>
                            <p class="text-gray-300 text-xs lg:text-sm font-medium tracking-wider uppercase">VP BUSINESS DEVELOMENT</p>
                        </div>
                    </div>

                    <!-- Team Member 9 - Dariusz Corbey -->
                    <div class="group relative rounded-2xl overflow-hidden bg-black aspect-[3/4] shadow-2xl transition-transform duration-300 hover:-translate-y-2">
                        <div class="absolute inset-0 flex items-center justify-center bg-black">
                            <div class="w-full h-full" style="background: radial-gradient(circle at center, #2a2a2a 0%, #000000 100%);"></div>
                            <img src="{{ asset('img/team/corbey.webp') }}" alt="DARIUSZ CORBEY" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 lg:p-8">
                            <h3 class="text-white text-xl lg:text-2xl font-bold tracking-wide mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">DARIUSZ CORBEY</h3>
                            <p class="text-gray-300 text-xs lg:text-sm font-medium tracking-wider uppercase">Investments Business Development</p>
                        </div>
                    </div>

                    <!-- Team Member 10 - Nicole Williams -->
                    <div class="group relative rounded-2xl overflow-hidden bg-black aspect-[3/4] shadow-2xl transition-transform duration-300 hover:-translate-y-2">
                        <div class="absolute inset-0 flex items-center justify-center bg-black">
                            <div class="w-full h-full" style="background: radial-gradient(circle at center, #2a2a2a 0%, #000000 100%);"></div>
                            <img src="{{ asset('img/team/nicole.webp') }}" alt="NICOLE WILLIAMS" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 lg:p-8">
                            <h3 class="text-white text-xl lg:text-2xl font-bold tracking-wide mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">NICOLE WILLIAMS</h3>
                            <p class="text-gray-300 text-xs lg:text-sm font-medium tracking-wider uppercase">ASSET MANAGER</p>
                        </div>
                    </div>

                    <!-- Team Member 11 - Kimberly Williams -->
                    <div class="group relative rounded-2xl overflow-hidden bg-black aspect-[3/4] shadow-2xl transition-transform duration-300 hover:-translate-y-2">
                        <div class="absolute inset-0 flex items-center justify-center bg-black">
                            <div class="w-full h-full" style="background: radial-gradient(circle at center, #2a2a2a 0%, #000000 100%);"></div>
                            <img src="{{ asset('img/team/kimberly.webp') }}" alt="KIMBERLY WILLIAMS" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 lg:p-8">
                            <h3 class="text-white text-xl lg:text-2xl font-bold tracking-wide mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">KIMBERLY WILLIAMS</h3>
                            <p class="text-gray-300 text-xs lg:text-sm font-medium tracking-wider uppercase">Single Family Acquisition Manager</p>
                        </div>
                    </div>

                    <!-- Team Member 12 - Connie Biaggi -->
                    <div class="group relative rounded-2xl overflow-hidden bg-black aspect-[3/4] shadow-2xl transition-transform duration-300 hover:-translate-y-2">
                        <div class="absolute inset-0 flex items-center justify-center bg-black">
                            <div class="w-full h-full" style="background: radial-gradient(circle at center, #2a2a2a 0%, #000000 100%);"></div>
                            <img src="{{ asset('img/team/connie.webp') }}" alt="CONNIE BIAGGI" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 lg:p-8">
                            <h3 class="text-white text-xl lg:text-2xl font-bold tracking-wide mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">CONNIE BIAGGI</h3>
                            <p class="text-gray-300 text-xs lg:text-sm font-medium tracking-wider uppercase">EXECUTIVE ADMINISTRATOR</p>
                        </div>
                    </div>

                    <!-- Team Member 13 - Thomas Gage -->
                    <div class="group relative rounded-2xl overflow-hidden bg-black aspect-[3/4] shadow-2xl transition-transform duration-300 hover:-translate-y-2">
                        <div class="absolute inset-0 flex items-center justify-center bg-black">
                            <div class="w-full h-full" style="background: radial-gradient(circle at center, #2a2a2a 0%, #000000 100%);"></div>
                            <img src="{{ asset('img/team/thomas.webp') }}" alt="THOMAS GAGE" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 lg:p-8">
                            <h3 class="text-white text-xl lg:text-2xl font-bold tracking-wide mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">THOMAS GAGE</h3>
                            <p class="text-gray-300 text-xs lg:text-sm font-medium tracking-wider uppercase">COMPLIANCE OFFICER</p>
                        </div>
                    </div>

                    <!-- Team Member 14 - Apoorv Bansal -->
                    <div class="group relative rounded-2xl overflow-hidden bg-black aspect-[3/4] shadow-2xl transition-transform duration-300 hover:-translate-y-2">
                        <div class="absolute inset-0 flex items-center justify-center bg-black">
                            <div class="w-full h-full" style="background: radial-gradient(circle at center, #2a2a2a 0%, #000000 100%);"></div>
                            <img src="{{ asset('img/team/bansal.webp') }}" alt="APOORV BANSAL" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 lg:p-8">
                            <h3 class="text-white text-xl lg:text-2xl font-bold tracking-wide mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">APOORV BANSAL</h3>
                            <p class="text-gray-300 text-xs lg:text-sm font-medium tracking-wider uppercase">ANALYST/ CAPITAL MARKETS</p>
                        </div>
                    </div>

                    <!-- Team Member 15 - Irwin Boris -->
                    <div class="group relative rounded-2xl overflow-hidden bg-black aspect-[3/4] shadow-2xl transition-transform duration-300 hover:-translate-y-2">
                        <div class="absolute inset-0 flex items-center justify-center bg-black">
                            <div class="w-full h-full" style="background: radial-gradient(circle at center, #2a2a2a 0%, #000000 100%);"></div>
                            <img src="{{ asset('img/team/boris.webp') }}" alt="IRWIN BORIS" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 lg:p-8">
                            <h3 class="text-white text-xl lg:text-2xl font-bold tracking-wide mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">IRWIN BORIS</h3>
                            <p class="text-gray-300 text-xs lg:text-sm font-medium tracking-wider uppercase">CHIEF INVESTMENT OFFICER MULTIFAMILY</p>
                        </div>
                    </div>

                    <!-- Team Member 16 - Remi Okoli -->
                    <div class="group relative rounded-2xl overflow-hidden bg-black aspect-[3/4] shadow-2xl transition-transform duration-300 hover:-translate-y-2">
                        <div class="absolute inset-0 flex items-center justify-center bg-black">
                            <div class="w-full h-full" style="background: radial-gradient(circle at center, #2a2a2a 0%, #000000 100%);"></div>
                            <img src="{{ asset('img/team/remi.webp') }}" alt="REMI OKOLI" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 lg:p-8">
                            <h3 class="text-white text-xl lg:text-2xl font-bold tracking-wide mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">REMI OKOLI</h3>
                            <p class="text-gray-300 text-xs lg:text-sm font-medium tracking-wider uppercase">DIRECTOR OF MARKETING</p>
                        </div>
                    </div>

                    <!-- Team Member 17 - Tyevon Jefferson -->
                    <div class="group relative rounded-2xl overflow-hidden bg-black aspect-[3/4] shadow-2xl transition-transform duration-300 hover:-translate-y-2">
                        <div class="absolute inset-0 flex items-center justify-center bg-black">
                            <div class="w-full h-full" style="background: radial-gradient(circle at center, #2a2a2a 0%, #000000 100%);"></div>
                            <img src="{{ asset('img/team/jeff.webp') }}" alt="TYEVON JEFFERSON" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 lg:p-8">
                            <h3 class="text-white text-xl lg:text-2xl font-bold tracking-wide mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">TYEVON JEFFERSON</h3>
                            <p class="text-gray-300 text-xs lg:text-sm font-medium tracking-wider uppercase">TRADE DESK</p>
                        </div>
                    </div>

                    <!-- Team Member 18 - Gabriel Barragan -->
                    <div class="group relative rounded-2xl overflow-hidden bg-black aspect-[3/4] shadow-2xl transition-transform duration-300 hover:-translate-y-2">
                        <div class="absolute inset-0 flex items-center justify-center bg-black">
                            <div class="w-full h-full" style="background: radial-gradient(circle at center, #2a2a2a 0%, #000000 100%);"></div>
                            <img src="{{ asset('img/team/gab.webp') }}" alt="GABRIEL BARRAGAN" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 lg:p-8">
                            <h3 class="text-white text-xl lg:text-2xl font-bold tracking-wide mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">GABRIEL BARRAGAN</h3>
                            <p class="text-gray-300 text-xs lg:text-sm font-medium tracking-wider uppercase">MIOYM COMMERCIAL CAPITAL</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    @include('components.footer')
</body>
</html>

