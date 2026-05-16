<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>National Foreclosure Prevention | MIOYM</title>
    <meta name="description" content="National Foreclosure Prevention by MIOYM. Learn how we can help you navigate foreclosure and take steps toward financial recovery.">
    <link rel="icon" type="image/webp" href="{{ asset('img/logo.webp') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"></noscript>
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: linear-gradient(to bottom, #000000 0%, #1a1a1a 70%, #3a3a3a 100%);
            color: #ffffff;
            line-height: 1.6;
            overflow-x: hidden;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        main { flex: 1; }
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
        .nf-card {
            background: rgba(45, 45, 45, 0.78);
            border: 1px solid rgba(255, 255, 255, 0.10);
            border-radius: 18px;
        }
        .nf-card-soft {
            background: rgba(120, 120, 120, 0.72);
            border: 1px solid rgba(255, 255, 255, 0.10);
            border-radius: 18px;
        }
        .nf-pill {
            width: 44px;
            height: 44px;
            border-radius: 999px;
            background: rgba(0, 0, 0, 0.35);
            border: 1px solid rgba(255, 255, 255, 0.10);
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    @include('components.navigationHeader')

    <main class="pt-16 lg:pt-20">
        <section class="relative overflow-hidden">
            <div class="absolute inset-0 -z-10">
                <img src="{{ asset('img/bgAboutUs.webp') }}" alt="" class="w-full h-full object-cover">
            </div>
            <div class="absolute inset-0 bg-black/70 -z-10"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-14">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white tracking-tight text-center reveal" data-reveal style="--d: 0ms; font-family: 'Plus Jakarta Sans', sans-serif;">
                    National Foreclosure<br>Prevention
                </h1>
            </div>
        </section>

        <section class="relative overflow-hidden">
            <div class="absolute inset-0 -z-10">
                <img src="{{ asset('img/bgNFPaboutus.webp') }}" alt="" class="w-full h-full object-cover object-center">
            </div>
            <div class="absolute inset-0 bg-black/65 -z-10"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-14">
                <div class="text-center reveal" data-reveal style="--d: 140ms;">
                    <h2 class="text-2xl sm:text-3xl font-bold uppercase tracking-widest" style="font-family: 'Plus Jakarta Sans', sans-serif;">About Us</h2>
                    <p class="mt-4 text-sm sm:text-base text-white/85 max-w-4xl mx-auto">
                        At the National Foreclosure Prevention Group, we believe that everyone deserves a second chance. Contact us today to learn more about how we can help you navigate through foreclosure and embark on a path towards financial recovery.
                    </p>
                </div>

                <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-8 items-start max-w-5xl mx-auto">
                    <div class="rounded-2xl overflow-hidden bg-black/10 border border-white/10 reveal shadow-lg" data-reveal style="--d: 0ms;">
                        <img src="{{ asset('img/left.webp') }}" alt="About Us - Left" class="w-full h-auto object-contain" loading="lazy">
                    </div>
                    <div class="rounded-2xl overflow-hidden bg-black/10 border border-white/10 reveal shadow-lg" data-reveal style="--d: 120ms;">
                        <img src="{{ asset('img/right.webp') }}" alt="About Us - Right" class="w-full h-auto object-contain" loading="lazy">
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-[#1a1a1a] relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-b from-black/20 to-transparent pointer-events-none"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-24 relative">
                <div class="grid grid-cols-1 lg:grid-cols-[1.3fr_0.5fr_1.3fr] gap-8 lg:gap-12 items-center relative">
                    <!-- Left Column -->
                    <div class="space-y-8 z-10 relative">
                        <div class="reveal bg-[#2a2a2a] p-10 rounded-2xl shadow-xl border border-white/5" data-reveal style="--d: 0ms;">
                            <h3 class="text-2xl font-bold text-white mb-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">Engage with a Realtor</h3>
                            <p class="text-base text-white/80 leading-relaxed">
                                We will connect you with a trusted realtor who will initiate the process by putting a contract of sale on your property and sending it to your bank. This action automatically stops the auction date, giving you breathing room to explore your options.
                            </p>
                        </div>
                        <div class="reveal bg-[#2a2a2a] p-10 rounded-2xl shadow-xl border border-white/5" data-reveal style="--d: 120ms;">
                            <h3 class="text-2xl font-bold text-white mb-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">Property Inspection and Short Sale</h3>
                            <p class="text-base text-white/80 leading-relaxed">
                                Our team conducts a thorough inspection of your home to assess its condition and determine a fair short sale price. We then work closely with your bank to offer them a short sale solution based on your financial circumstances.
                            </p>
                        </div>
                    </div>

                    <!-- Center Featured Image (Foreground) -->
                    <div class="relative z-30 lg:scale-[1.90]">
                        <div class="reveal animate-float" data-reveal style="--d: 180ms;">
                            <div class="rounded-[1.5rem] overflow-hidden shadow-[0_50px_100px_-20px_rgba(0,0,0,0.8)] aspect-[2/3] bg-black/20 border border-white/5">
                                <img src="{{ asset('img/nfpcenter.webp') }}" alt="National Foreclosure Prevention" class="w-full h-full object-cover" loading="lazy">
                                <div class="absolute inset-0 bg-gradient-to-tr from-white/10 via-transparent to-black/10 pointer-events-none"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="space-y-8 z-10 relative">
                        <div class="reveal bg-[#2a2a2a] p-10 rounded-2xl shadow-xl border border-white/5" data-reveal style="--d: 240ms;">
                            <h3 class="text-2xl font-bold text-white mb-4 text-right" style="font-family: 'Plus Jakarta Sans', sans-serif;">Transition to Rental</h3>
                            <p class="text-base text-white/80 leading-relaxed text-right">
                                Upon obtaining the short sale approval from your bank, we purchase your home, allowing you to remain in the property as a renter. Your rental payment will not exceed the amount you were paying prior to your mortgage.
                            </p>
                        </div>
                        <div class="reveal bg-[#2a2a2a] p-10 rounded-2xl shadow-xl border border-white/5" data-reveal style="--d: 360ms;">
                            <h3 class="text-2xl font-bold text-white mb-4 text-right" style="font-family: 'Plus Jakarta Sans', sans-serif;">Credit Repair and Repurchase</h3>
                            <p class="text-base text-white/80 leading-relaxed text-right">
                                As you continue to reside in your home, we embark on repairing your credit, helping you avoid the detrimental effects of foreclosure. With improved credit and stable income, you’ll have the opportunity to repurchase your home at its current market value.
                            </p>
                        </div>
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
