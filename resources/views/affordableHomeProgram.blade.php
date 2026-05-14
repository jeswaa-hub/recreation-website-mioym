<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affordable Home Program | MIOYM Equities</title>
    <meta name="description" content="Unlock Your Dream Home with MIOYM Affordable Homes. Nationwide down payment and closing costs provided.">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"></noscript>
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: linear-gradient(to bottom, #000000 0%, #1a1a1a 65%, #3a3a3a 100%);
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
        .feature-card {
            background: #D9D9D9;
            color: #000000;
            border-radius: 28px;
            padding: 0;
            overflow: hidden;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            box-shadow: 0 30px 70px rgba(0, 0, 0, 0.35);
            transition: transform 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-5px);
        }
        .feature-icon-wrapper {
            background: #4A4545;
            width: 58px;
            height: 58px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: -26px;
            margin-bottom: 18px;
            color: white;
            font-size: 1.35rem;
            box-shadow: 0 18px 35px rgba(0, 0, 0, 0.35);
        }
        .feature-media {
            width: 100%;
            padding: 18px 18px 0;
        }
        .feature-media-inner {
            width: 100%;
            border-radius: 18px;
            overflow: hidden;
            background: rgba(0, 0, 0, 0.08);
        }
        .feature-content {
            width: 100%;
            padding: 18px 26px 28px;
        }
        .action-card {
            background: rgba(45, 45, 45, 0.85);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 16px;
            padding: 14px 18px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1.5rem;
            transition: background 0.3s ease;
        }
        .action-card:hover {
            background: rgba(61, 61, 61, 0.9);
        }
        .hero-surface {
            position: relative;
            background:
                radial-gradient(520px 520px at 96% 14%, rgba(217, 217, 217, 0.16) 0 34%, transparent 35%),
                radial-gradient(520px 520px at 12% 92%, rgba(217, 217, 217, 0.12) 0 32%, transparent 33%),
                radial-gradient(900px 420px at 72% 18%, rgba(217, 217, 217, 0.12), transparent 62%),
                linear-gradient(180deg, #0b0a0a 0%, #151212 100%);
            overflow: hidden;
        }
        .hero-surface::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, rgba(217, 217, 217, 0.22) 0%, rgba(217, 217, 217, 0.10) 12%, transparent 26%);
            clip-path: polygon(0 0, 8% 0, 0 55%);
            opacity: 0.65;
        }
        .hero-surface::after {
            content: '';
            position: absolute;
            inset: 0;
            background:
                radial-gradient(800px 320px at 64% 12%, rgba(0, 0, 0, 0.55), transparent 70%),
                radial-gradient(780px 340px at 86% 22%, rgba(0, 0, 0, 0.35), transparent 72%);
            pointer-events: none;
        }
        .hero-art {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            opacity: 0.85;
            pointer-events: none;
        }
    </style>
</head>
<body>
    @include('components.navigationHeader')
    
    <main class="pt-16 lg:pt-20">
        <section class="hero-surface">
            <svg class="hero-art" viewBox="0 0 1200 520" preserveAspectRatio="none" aria-hidden="true">
                <path d="M0 0H1200V520H0V0Z" fill="transparent"/>
                <path d="M740 0H1200V520H670C815 420 965 450 1065 360C1165 270 1185 140 1200 0Z" fill="#2C2727" opacity="0.95"/>
                <path d="M810 0H1200V520H720C860 440 980 455 1075 390C1165 325 1188 205 1200 90Z" fill="#3A3434" opacity="0.75"/>
                <circle cx="1045" cy="95" r="160" fill="#D9D9D9" opacity="0.06"/>
                <circle cx="210" cy="420" r="210" fill="#D9D9D9" opacity="0.05"/>
            </svg>
            <div class="absolute -left-40 top-36 h-[420px] w-[420px] rounded-full bg-[#D9D9D9]/10 blur-3xl"></div>
            <div class="absolute -right-56 -top-40 h-[520px] w-[520px] rounded-full bg-[#D9D9D9]/10 blur-3xl"></div>
            <div class="absolute -right-20 bottom-24 h-[360px] w-[360px] rounded-full bg-[#D9D9D9]/10 blur-3xl"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-14">
                <div class="relative z-10">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white tracking-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                        Affordable Home<br>Program
                    </h1>
                    <div class="mt-10 flex justify-center">
                        <h2 class="text-lg sm:text-xl lg:text-2xl font-semibold text-white/90 text-center leading-snug" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            Unlock Your Dream Home with MIOYM
                            <span class="block">Affordable Homes.</span>
                        </h2>
                    </div>
                </div>

                <div class="relative z-10 grid grid-cols-1 md:grid-cols-3 gap-8 mt-12 mb-24">
                    <!-- Feature 1 -->
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-media-inner aspect-video">
                                <img src="{{ asset('img/ahp1.jpg') }}" alt="Nationwide Down Payment Provided" class="w-full h-full object-cover" data-fallback="{{ asset('img/residential.jpg') }}" onerror="this.onerror=null; this.src=this.dataset.fallback;">
                            </div>
                        </div>
                        <div class="feature-icon-wrapper">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="feature-content">
                            <h3 class="text-xl font-bold mb-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">Nationwide Down Payment Provided</h3>
                            <p class="text-sm leading-relaxed text-gray-800">
                                At MIOYM Affordable Homes, we make homeownership possible as we provide your Down Payment — helping first-time and working families move from renting to owning faster than ever.
                            </p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-media-inner aspect-video">
                                <img src="{{ asset('img/ahp2.jpg') }}" alt="Closing Costs Provided!" class="w-full h-full object-cover" data-fallback="{{ asset('img/residential.jpg') }}" onerror="this.onerror=null; this.src=this.dataset.fallback;">
                            </div>
                        </div>
                        <div class="feature-icon-wrapper">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <div class="feature-content">
                            <h3 class="text-xl font-bold mb-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">Closing Costs Provided!</h3>
                            <p class="text-sm leading-relaxed text-gray-800">
                                For FHA loans, sellers can contribute up to 6% of the home's sale price towards a buyer's closing costs, also known as seller concessions. These concessions can help cover expenses like title insurance, recording fees, property taxes, and mortgage fees.
                            </p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-media-inner aspect-video">
                                <img src="{{ asset('img/ahp3.jpg') }}" alt="Credit Qualification" class="w-full h-full object-cover" data-fallback="{{ asset('img/residential.jpg') }}" onerror="this.onerror=null; this.src=this.dataset.fallback;">
                            </div>
                        </div>
                        <div class="feature-icon-wrapper">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <div class="feature-content">
                            <h3 class="text-xl font-bold mb-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">Credit Qualification</h3>
                            <p class="text-sm leading-relaxed text-gray-800">
                                A 600+ credit score is required to qualify for our Affordable Homes Program. This standard ensures access to the best financing options, down payment assistance, and closing cost programs available — helping buyers secure sustainable, affordable homeownership with confidence.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Properties & Call Section -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-24">
                    <div class="bg-[#2D2D2D]/55 rounded-[44px] p-4 shadow-2xl">
                        <div class="rounded-[34px] overflow-hidden aspect-[16/10]">
                            <img src="{{ asset('img/house.png') }}" alt="Available Properties" class="w-full h-full object-cover" data-fallback="{{ asset('img/house1.png') }}" onerror="this.onerror=null; this.src=this.dataset.fallback;">
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="action-card">
                            <div class="flex items-center gap-4 flex-1 min-w-0">
                                <div class="w-12 h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-2xl leading-none text-white">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="min-w-0">
                                    <p class="text-sm sm:text-base font-semibold text-white/90 leading-snug">Browse our Available Properties</p>
                                </div>
                            </div>
                            <a href="{{ route('singleFamilyResidential') }}" class="bg-[#D9D9D9] text-[#201B1B] px-4 py-2 rounded-md font-bold text-xs sm:text-sm uppercase whitespace-nowrap hover:bg-white transition-colors">
                                View Properties
                            </a>
                        </div>

                        <div class="action-card">
                            <div class="flex items-center gap-4 flex-1 min-w-0">
                                <div class="w-12 h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-2xl leading-none text-white">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="min-w-0">
                                    <p class="text-sm sm:text-base font-semibold text-white/90 leading-snug">Book a Call today to discuss your options.</p>
                                </div>
                            </div>
                            <a href="tel:9145669050" class="bg-[#D9D9D9] text-[#201B1B] px-4 py-2 rounded-md font-bold text-xs sm:text-sm whitespace-nowrap hover:bg-white transition-colors">
                                Book a Call with us
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Meet Our Team Section -->
                <div class="text-center mt-32 mb-16">
                    <h2 class="text-4xl font-bold uppercase tracking-widest mb-12" style="font-family: 'Plus Jakarta Sans', sans-serif;">MEET OUR TEAM</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @php
                            $teamMembers = [
                                ['name' => 'KEITH VANNAH PONGOT', 'role' => 'OPERATION MANAGER', 'img' => 'keith.jpg'],
                                ['name' => 'BEVERLY CABANAS', 'role' => 'LEASING AGENT', 'img' => 'beverly.jpg'],
                                ['name' => 'ZEE BACSID', 'role' => 'LEASING AGENT', 'img' => 'beverly.jpg'],
                                ['name' => 'SUZETTA PATIÑO', 'role' => 'LEASING AGENT', 'img' => 'suzette.jpg'],
                                ['name' => 'JACE SAN PEDRO', 'role' => 'LEASING AGENT', 'img' => 'jace.jpg'],
                                ['name' => 'JOSIE DISCAYA', 'role' => 'LEASING AGENT', 'img' => 'josie.jpg'],
                            ];
                        @endphp

                        @foreach($teamMembers as $member)
                        <div class="group relative rounded-2xl overflow-hidden bg-black aspect-[3/4] shadow-2xl transition-transform duration-300 hover:-translate-y-2">
                            <div class="absolute inset-0 flex items-center justify-center bg-black">
                                <div class="w-full h-full" style="background: radial-gradient(circle at center, #2a2a2a 0%, #000000 100%);"></div>
                                <img src="{{ asset('img/' . $member['img']) }}" alt="{{ $member['name'] }}" class="w-full h-full object-cover grayscale transition-all duration-500 group-hover:grayscale-0">
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6 text-left">
                                <h3 class="text-white text-xl font-bold tracking-wide mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">{{ $member['name'] }}</h3>
                                <p class="text-gray-400 text-xs font-medium tracking-wider uppercase">{{ $member['role'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('components.footer')
</body>
</html>
