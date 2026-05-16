<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affordable Home Program | MIOYM Equities</title>
    <meta name="description" content="Unlock Your Dream Home with MIOYM Affordable Homes. Nationwide down payment and closing costs provided.">
    <meta name="keywords" content="Affordable Home Program, Down Payment Assistance, MIOYM Equities, Home Ownership, Real Estate">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/webp" href="{{ asset('img/logo.webp') }}">
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
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.22) 0%, rgba(255, 255, 255, 0.06) 100%);
            border: 1px solid rgba(255, 255, 255, 0.10);
            border-radius: 20px;
            padding: 18px 24px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            justify-content: space-between;
            gap: 1.5rem;
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.45);
            transition: transform 0.25s ease, background 0.25s ease;
        }
        @media (min-width: 640px) {
            .action-card {
                flex-direction: row;
                align-items: stretch;
                text-align: left;
            }
        }
        .action-card:hover {
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.28) 0%, rgba(255, 255, 255, 0.08) 100%);
            transform: translateY(-1px);
        }
        .action-icon {
            width: 76px;
            height: 72px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            flex: 0 0 auto;
            margin: 0 auto;
        }
        @media (min-width: 640px) {
            .action-icon {
                margin: 0;
            }
        }
        .action-icon svg {
            width: 58px;
            height: 58px;
            display: block;
            overflow: visible;
            filter: drop-shadow(0 10px 18px rgba(0, 0, 0, 0.45));
        }
        .action-main {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            flex: 1 1 auto;
            min-width: 0;
        }
        @media (min-width: 640px) {
            .action-main {
                flex-direction: row;
                align-items: flex-start;
            }
        }
        .action-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-width: 0;
            padding-top: 6px;
        }
        .action-cta {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }
        @media (min-width: 640px) {
            .action-cta {
                align-items: flex-end;
                justify-content: flex-end;
                width: auto;
            }
        }
        .action-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 700;
            letter-spacing: -0.01em;
        }
        .action-btn {
            background: #D9D9D9;
            color: #201B1B;
            padding: 12px 18px;
            border-radius: 9px;
            font-weight: 800;
            font-size: 0.85rem;
            letter-spacing: 0.02em;
            box-shadow: 0 10px 22px rgba(0, 0, 0, 0.25);
            transition: background 0.2s ease;
            white-space: normal;
            width: 100%;
            text-align: center;
        }
        @media (min-width: 640px) {
            .action-btn {
                width: auto;
                padding: 9px 18px;
                font-size: 0.75rem;
                white-space: nowrap;
            }
        }
        .action-btn:hover {
            background: #ffffff;
        }
        .action-btn--caps {
            text-transform: uppercase;
            letter-spacing: 0.06em;
        }
        .hero-surface {
            position: relative;
            background: linear-gradient(180deg, #000000 0%, #171717 60%, #5a5a5a 100%);
            overflow: hidden;
        }
        .hero-surface::before {
            content: '';
            position: absolute;
            inset: 0;
            background: none;
            opacity: 0;
        }
        .hero-surface::after {
            content: '';
            position: absolute;
            inset: 0;
            background: none;
            opacity: 0;
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
        .reveal {
            opacity: 0;
            transform: translateY(18px);
            transition: opacity 700ms cubic-bezier(0.2, 0.65, 0.2, 1), transform 700ms cubic-bezier(0.2, 0.65, 0.2, 1);
            transition-delay: var(--d, 0ms);
            will-change: opacity, transform;
        }
        .reveal.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
        @media (prefers-reduced-motion: reduce) {
            .reveal {
                opacity: 1;
                transform: none;
                transition: none;
            }
        }
    </style>
</head>
<body>
    @include('components.navigationHeader')
    
    <main class="pt-16 lg:pt-20">
        <section class="relative overflow-hidden">
            <div class="absolute inset-0 -z-10">
                <img src="{{ asset('img/bgAboutUs.webp') }}" alt="" class="w-full h-full object-cover object-center">
            </div>
            <div class="absolute inset-0 bg-black/70 -z-10"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-12">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white tracking-tight text-center" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                    Affordable Home<br>Program
                </h1>
            </div>
        </section>

        <section class="hero-surface relative overflow-hidden">
            <div class="absolute inset-0 pointer-events-none z-0">
                <img src="{{ asset('img/Rectangle.webp') }}" alt="" class="absolute left-[-140px] top-[-100px] w-[280px] sm:w-[380px] lg:w-[520px] max-w-none opacity-55">
                <img src="{{ asset('img/Rectangle.webp') }}" alt="" class="absolute right-[-140px] top-[600px] w-[280px] sm:w-[380px] lg:w-[520px] max-w-none opacity-55">
            </div>
            </div>
            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-14">
                <div class="relative z-10">
                    <div class="mt-6 flex justify-center">
                        <h2 class="text-lg sm:text-xl lg:text-2xl font-semibold text-white/90 text-center leading-snug" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            Unlock Your Dream Home with MIOYM
                            <span class="block">Affordable Homes.</span>
                        </h2>
                    </div>
                </div>

                <div class="relative z-10 grid grid-cols-1 md:grid-cols-3 gap-8 mt-12 mb-24">
                    <!-- Feature 1 -->
                    <div class="feature-card reveal" data-reveal style="--d: 0ms;">
                        <div class="feature-media">
                            <div class="feature-media-inner aspect-video">
                                <img src="{{ asset('img/ahp1.webp') }}" alt="Nationwide Down Payment Provided" class="w-full h-full object-cover" data-fallback="{{ asset('img/residential.webp') }}" onerror="this.onerror=null; this.src=this.dataset.fallback;">
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
                    <div class="feature-card reveal" data-reveal style="--d: 120ms;">
                        <div class="feature-media">
                            <div class="feature-media-inner aspect-video">
                                <img src="{{ asset('img/ahp2.webp') }}" alt="Closing Costs Provided!" class="w-full h-full object-cover" data-fallback="{{ asset('img/residential.webp') }}" onerror="this.onerror=null; this.src=this.dataset.fallback;">
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
                    <div class="feature-card reveal" data-reveal style="--d: 240ms;">
                        <div class="feature-media">
                            <div class="feature-media-inner aspect-video">
                                <img src="{{ asset('img/ahp3.webp') }}" alt="Credit Qualification" class="w-full h-full object-cover" data-fallback="{{ asset('img/residential.webp') }}" onerror="this.onerror=null; this.src=this.dataset.fallback;">
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
                    <div class="rounded-[44px] overflow-hidden shadow-2xl reveal" data-reveal style="--d: 0ms;">
                        <div class="aspect-[16/10] bg-black/20">
                            <img src="{{ asset('img/ahp4.webp') }}" alt="Available Properties" class="w-full h-full object-contain" data-fallback="{{ asset('img/house.webp') }}" onerror="this.onerror=null; this.src=this.dataset.fallback;">
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="action-card reveal" data-reveal style="--d: 120ms;">
                            <div class="action-main">
                                <div class="action-icon" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M3 11.5L12 4l9 7.5"></path>
                                        <path d="M5.5 10.8V20h13V10.8"></path>
                                        <path d="M9.5 20v-6h5v6"></path>
                                    </svg>
                                </div>
                                <div class="action-text">
                                    <p class="action-title text-base sm:text-lg text-white leading-snug">Browse our Available Properties</p>
                                </div>
                            </div>
                            <div class="action-cta">
                                <a href="https://mioymaffordablehomes.info/properties/" class="action-btn action-btn--caps">
                                    View Properties
                                </a>
                            </div>
                        </div>

                        <div class="action-card reveal" data-reveal style="--d: 240ms;">
                            <div class="action-main">
                                <div class="action-icon" aria-hidden="true">
                                    <svg viewBox="-1 -1 26 26" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M22 16.9v3a2 2 0 0 1-2.18 2A19.8 19.8 0 0 1 3.1 5.18 2 2 0 0 1 5.1 3h3a2 2 0 0 1 2 1.72c.12.86.3 1.7.54 2.5a2 2 0 0 1-.45 2.11L9.1 10.9a16 16 0 0 0 4 4l1.57-1.1a2 2 0 0 1 2.11-.45c.8.24 1.64.42 2.5.54A2 2 0 0 1 22 16.9z"></path>
                                    </svg>
                                </div>
                                <div class="action-text">
                                    <p class="action-title text-base sm:text-lg text-white leading-snug">Book a Call today to discuss your options.</p>
                                </div>
                            </div>
                            <div class="action-cta">
                                <a href="https://calendly.com/mioymleasing/schedule-a-call-about-the-property?month=2026-03" class="action-btn">
                                    Book a Call with us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Meet Our Team Section -->
                <div class="text-center mt-32 mb-16">
                    <h2 class="text-4xl font-bold uppercase tracking-widest mb-12" style="font-family: 'Plus Jakarta Sans', sans-serif;">MEET OUR TEAM</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @php
                            $teamMembers = [
                                ['name' => 'KEITH VANNAH PONGOT', 'role' => 'OPERATION MANAGER', 'img' => 'keith.webp'],
                                ['name' => 'BEVERLY CABANAS', 'role' => 'LEASING AGENT', 'img' => 'beverly.webp'],
                                ['name' => 'ZEE BACSID', 'role' => 'LEASING AGENT', 'img' => 'zee.webp'],
                                ['name' => 'SUZETTA PATIÑO', 'role' => 'LEASING AGENT', 'img' => 'suzette.webp'],
                                ['name' => 'JACE SAN PEDRO', 'role' => 'LEASING AGENT', 'img' => 'jace.webp'],
                                ['name' => 'JOSIE DISCAYA', 'role' => 'LEASING AGENT', 'img' => 'josie.webp'],
                            ];
                        @endphp

                        @foreach($teamMembers as $member)
                        <div class="relative rounded-2xl overflow-hidden bg-black aspect-[3/4] shadow-2xl reveal" data-reveal style="--d: {{ $loop->index * 90 }}ms;">
                            <div class="absolute inset-0 flex items-center justify-center bg-black">
                                <div class="w-full h-full" style="background: radial-gradient(circle at center, #2a2a2a 0%, #000000 100%);"></div>
                                <img src="{{ asset('img/' . $member['img']) }}" alt="{{ $member['name'] }}" class="w-full h-full object-cover">
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

    <script>
        (function () {
            const elements = Array.from(document.querySelectorAll('[data-reveal]'));
            if (!('IntersectionObserver' in window)) {
                elements.forEach((el) => el.classList.add('is-visible'));
                return;
            }
            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            observer.unobserve(entry.target);
                        }
                    });
                },
                { threshold: 0.12 }
            );
            elements.forEach((el) => observer.observe(el));
        })();
    </script>

    @include('components.footer')
</body>
</html>
