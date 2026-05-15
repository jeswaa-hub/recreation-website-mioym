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
            <div class="absolute inset-0 -z-10 opacity-40">
                <img src="{{ asset('img/investorbg.webp') }}" alt="" class="w-full h-full object-cover">
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-14">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white tracking-tight reveal" data-reveal style="--d: 0ms; font-family: 'Plus Jakarta Sans', sans-serif;">
                    National Foreclosure<br>Prevention
                </h1>

                <div class="mt-10 text-center reveal" data-reveal style="--d: 140ms;">
                    <h2 class="text-2xl sm:text-3xl font-bold uppercase tracking-widest" style="font-family: 'Plus Jakarta Sans', sans-serif;">About Us</h2>
                    <p class="mt-4 text-sm sm:text-base text-white/85 max-w-4xl mx-auto">
                        At the National Foreclosure Prevention Group, we believe that everyone deserves a second chance. Contact us today to learn more about how we can help you navigate through foreclosure and embark on a path towards financial recovery.
                    </p>
                </div>

                <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="nf-card p-6 reveal" data-reveal style="--d: 0ms;">
                        <div class="flex items-start gap-4">
                            <span class="nf-pill">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M12 21s-6-4.35-6-10a6 6 0 0 1 12 0c0 5.65-6 10-6 10z"></path>
                                    <path d="M9.5 11.5l1.5 1.5 3.5-3.5"></path>
                                </svg>
                            </span>
                            <div>
                                <h3 class="text-lg font-bold text-white" style="font-family: 'Plus Jakarta Sans', sans-serif;">Our Vision</h3>
                                <p class="mt-2 text-sm text-white/75">
                                    At the National Foreclosure Prevention Group, we are dedicated to helping individuals restore their credit and regain control. Our mission is to provide homeowners with a seamless, empowering and supportive service through financial difficulties with dignity and resilience.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="nf-card p-6 reveal" data-reveal style="--d: 120ms;">
                        <div class="flex items-start gap-4">
                            <span class="nf-pill">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M12 2v3"></path>
                                    <path d="M19.78 5.22l-2.12 2.12"></path>
                                    <path d="M22 12h-3"></path>
                                    <path d="M19.78 18.78l-2.12-2.12"></path>
                                    <path d="M12 22v-3"></path>
                                    <path d="M6.34 18.78l2.12-2.12"></path>
                                    <path d="M2 12h3"></path>
                                    <path d="M6.34 5.22l2.12 2.12"></path>
                                </svg>
                            </span>
                            <div>
                                <h3 class="text-lg font-bold text-white" style="font-family: 'Plus Jakarta Sans', sans-serif;">Our Approach</h3>
                                <p class="mt-2 text-sm text-white/75">
                                    If you’re feeling overwhelmed and considering selling your home to avoid foreclosure, our team is here to support you every step of the way. We offer unique programs that allow homeowners to start anew and receive relocation funds instead of facing eviction.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="nf-card p-6 reveal" data-reveal style="--d: 240ms;">
                        <div class="flex items-start gap-4">
                            <span class="nf-pill">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M12 21c4.97 0 9-4.03 9-9s-4.03-9-9-9-9 4.03-9 9 4.03 9 9 9z"></path>
                                    <path d="M12 7v5l3 3"></path>
                                </svg>
                            </span>
                            <div>
                                <h3 class="text-lg font-bold text-white" style="font-family: 'Plus Jakarta Sans', sans-serif;">Our Commitment</h3>
                                <p class="mt-2 text-sm text-white/75">
                                    Transparency, documentation, and legal compliance are paramount in our process. Every step is meticulously documented and verified by legal counsel to ensure integrity and peace of mind throughout the journey.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="nf-card p-6 reveal" data-reveal style="--d: 360ms;">
                        <div class="flex items-start gap-4">
                            <span class="nf-pill">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M3 12h18"></path>
                                    <path d="M3 6h18"></path>
                                    <path d="M3 18h18"></path>
                                </svg>
                            </span>
                            <div>
                                <h3 class="text-lg font-bold text-white" style="font-family: 'Plus Jakarta Sans', sans-serif;">How We Operate</h3>
                                <p class="mt-2 text-sm text-white/75">
                                    We generate revenue by negotiating with banks to facilitate short sales, allowing you to repurchase your home for an amount that’s aligned with current market value. This process helps you succeed and gives you a renewed sense of stability.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-12 grid grid-cols-1 lg:grid-cols-[1fr_1.3fr_1fr] gap-6 lg:gap-8 items-stretch">
                    <div class="space-y-6">
                        <div class="nf-card-soft p-6 reveal" data-reveal style="--d: 0ms;">
                            <h3 class="text-lg font-bold text-white" style="font-family: 'Plus Jakarta Sans', sans-serif;">Engage with a Realtor</h3>
                            <p class="mt-2 text-sm text-white/80">
                                We will connect you with a trusted realtor who will initiate the process by putting a contract of sale on your property and sending it to your bank. This action automatically stops the auction date, giving you breathing room to explore your options.
                            </p>
                        </div>
                        <div class="nf-card-soft p-6 reveal" data-reveal style="--d: 120ms;">
                            <h3 class="text-lg font-bold text-white" style="font-family: 'Plus Jakarta Sans', sans-serif;">Property Inspection and Short Sale</h3>
                            <p class="mt-2 text-sm text-white/80">
                                Our team conducts a thorough inspection of your home to assess its condition and determine a fair short sale price. We then work closely with your bank to offer them a short sale solution based on your financial circumstances.
                            </p>
                        </div>
                    </div>

                    <div class="nf-card-soft p-4 reveal" data-reveal style="--d: 180ms;">
                        <div class="rounded-2xl overflow-hidden aspect-[4/5] bg-black/20">
                            <img src="{{ asset('img/image_4.webp') }}" alt="National Foreclosure Prevention" class="w-full h-full object-cover" data-fallback="{{ asset('img/house1.webp') }}" onerror="this.onerror=null; this.src=this.dataset.fallback;">
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="nf-card-soft p-6 reveal" data-reveal style="--d: 240ms;">
                            <h3 class="text-lg font-bold text-white" style="font-family: 'Plus Jakarta Sans', sans-serif;">Transition to Rental</h3>
                            <p class="mt-2 text-sm text-white/80">
                                Upon obtaining the short sale approval from your bank, we schedule your move, allowing you to remain in the property as a renter. Our rental agreement will not exceed the amount you were paying prior to your mortgage.
                            </p>
                        </div>
                        <div class="nf-card-soft p-6 reveal" data-reveal style="--d: 360ms;">
                            <h3 class="text-lg font-bold text-white" style="font-family: 'Plus Jakarta Sans', sans-serif;">Credit Repair and Repurchase</h3>
                            <p class="mt-2 text-sm text-white/80">
                                As you continue to reside in your home, we embark on repairing your credit, helping you avoid foreclosure. With improved credit and stable income, you’ll have the opportunity to repurchase your home at its current market value.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-14 text-center reveal" data-reveal style="--d: 0ms;">
                    <h2 class="text-2xl sm:text-3xl font-bold uppercase tracking-widest text-white" style="font-family: 'Plus Jakarta Sans', sans-serif;">Our Partners</h2>
                    <div class="mt-6 grid grid-cols-1 sm:grid-cols-3 gap-4 max-w-3xl mx-auto">
                        <div class="nf-card-soft p-4 flex items-center justify-center">
                            <span class="text-white/90 font-semibold">Cardinal</span>
                        </div>
                        <div class="nf-card-soft p-4 flex items-center justify-center">
                            <span class="text-white/90 font-semibold">Credco</span>
                        </div>
                        <div class="nf-card-soft p-4 flex items-center justify-center">
                            <span class="text-white/90 font-semibold">Xome</span>
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
