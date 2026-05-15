<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIOYM Joint Venture | MIOYM</title>
    <meta name="description" content="MIOYM Joint Venture program: you find the deal, we fund the deal, we split the profit. Learn the key aspects of a real estate joint venture agreement.">
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
            .reveal { opacity: 1; transform: none; transition: none; }
        }
        .jv-card {
            background: rgba(45, 45, 45, 0.78);
            border: 1px solid rgba(255, 255, 255, 0.10);
            border-radius: 16px;
        }
        .jv-soft {
            background: rgba(120, 120, 120, 0.72);
            border: 1px solid rgba(255, 255, 255, 0.10);
            border-radius: 18px;
        }
        .jv-icon {
            width: 44px;
            height: 44px;
            border-radius: 999px;
            background: rgba(0, 0, 0, 0.35);
            border: 1px solid rgba(255, 255, 255, 0.10);
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .jv-num {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 800;
            letter-spacing: -0.03em;
            color: rgba(255, 255, 255, 0.85);
        }
    </style>
</head>
<body>
    @include('components.navigationHeader')

    <main class="pt-16 lg:pt-20">
        <section class="relative overflow-hidden">
            <div class="absolute inset-0 -z-10">
                <img src="{{ asset('img/imgAboutUs.png') }}" alt="" class="w-full h-full object-cover" data-fallback="{{ asset('img/bgAboutUs.webp') }}" onerror="this.onerror=null; this.src=this.dataset.fallback;">
            </div>
            <div class="absolute inset-0 bg-black/70 -z-10"></div>
            <div class="absolute inset-0 -z-10 opacity-35">
                <img src="{{ asset('img/investorbg.webp') }}" alt="" class="w-full h-full object-cover">
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-14">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white tracking-tight reveal" data-reveal style="--d: 0ms; font-family: 'Plus Jakarta Sans', sans-serif;">
                    MIOYM Joint<br>Venture
                </h1>

                <p class="mt-6 text-sm sm:text-base text-white/85 max-w-4xl reveal" data-reveal style="--d: 140ms;">
                    A real estate joint venture (JV) is a deal between multiple parties to work together and combine resources to develop a real estate project. Most large projects are financed and developed as a result of real estate joint ventures. A JV allows real estate operators and individuals with investors to finance and complete a large-scale real estate project without direct cash outlay by the operator.
                </p>
                <p class="mt-4 text-sm sm:text-base text-white/85 max-w-4xl reveal" data-reveal style="--d: 220ms;">
                    The basic principle surrounding a real estate joint venture can be illustrated through the following example: Company X owns a plot of land in the city of Los Angeles. However, Company X does not have the necessary funds to build on the plot of land. Company Y, on the other hand, has the funds but does not have the ability to develop the land. In this case, both Company X and Company Y benefit from a JV arrangement.
                </p>

                <div class="mt-10 grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="jv-card p-5 reveal" data-reveal style="--d: 0ms;">
                        <div class="flex items-center gap-3">
                            <span class="jv-icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="11" cy="11" r="7"></circle>
                                    <path d="M21 21l-4.3-4.3"></path>
                                </svg>
                            </span>
                            <p class="text-sm font-bold uppercase tracking-wider text-white">You Find the Deal</p>
                        </div>
                    </div>
                    <div class="jv-card p-5 reveal" data-reveal style="--d: 120ms;">
                        <div class="flex items-center gap-3">
                            <span class="jv-icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M12 1v22"></path>
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7H14a3.5 3.5 0 0 1 0 7H6"></path>
                                </svg>
                            </span>
                            <p class="text-sm font-bold uppercase tracking-wider text-white">We Fund the Deal</p>
                        </div>
                    </div>
                    <div class="jv-card p-5 reveal" data-reveal style="--d: 240ms;">
                        <div class="flex items-center gap-3">
                            <span class="jv-icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M3 17l6-6 4 4 7-7"></path>
                                    <path d="M21 7v6h-6"></path>
                                </svg>
                            </span>
                            <p class="text-sm font-bold uppercase tracking-wider text-white">We Split the Profit</p>
                        </div>
                    </div>
                </div>

                <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="jv-card p-2 reveal" data-reveal style="--d: 0ms;">
                        <div class="rounded-2xl overflow-hidden aspect-[16/10] bg-black/20">
                            <img src="{{ asset('img/house1.webp') }}" alt="Joint venture property" class="w-full h-full object-cover" data-fallback="{{ asset('img/house.webp') }}" onerror="this.onerror=null; this.src=this.dataset.fallback;">
                        </div>
                    </div>
                    <div class="jv-card p-2 reveal" data-reveal style="--d: 120ms;">
                        <div class="rounded-2xl overflow-hidden aspect-[16/10] bg-black/20">
                            <img src="{{ asset('img/houseB.webp') }}" alt="Joint venture property" class="w-full h-full object-cover" data-fallback="{{ asset('img/houseC.webp') }}" onerror="this.onerror=null; this.src=this.dataset.fallback;">
                        </div>
                    </div>
                </div>

                <div class="mt-10 jv-soft p-6 reveal" data-reveal style="--d: 0ms;">
                    <h2 class="text-center text-lg sm:text-xl font-bold text-white" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                        The Different Players in a Real Estate Joint Venture
                    </h2>
                    <p class="mt-4 text-sm sm:text-base text-white/85">
                        A real estate joint venture typically includes a real estate operator who sources the investment and oversees the project, and a capital partner who provides funding. The operator manages day-to-day execution while the capital partner supplies the majority of the equity or financing.
                    </p>
                    <p class="mt-3 text-sm sm:text-base text-white/85">
                        Most real estate joint ventures are structured through an LLC or similar entity. Ownership, responsibilities, and profit distributions are defined in the operating agreement to protect all parties and clarify expectations.
                    </p>
                </div>

                <div class="mt-14">
                    <h2 class="text-2xl sm:text-3xl font-bold text-white reveal" data-reveal style="--d: 0ms; font-family: 'Plus Jakarta Sans', sans-serif;">
                        Key Aspects of a Real Estate JV Agreement
                    </h2>
                    <p class="mt-3 text-sm sm:text-base text-white/80 reveal" data-reveal style="--d: 120ms;">
                        A real estate JV agreement involves the following factors:
                    </p>

                    <div class="mt-8 space-y-5">
                        <div class="grid grid-cols-1 md:grid-cols-[90px_1fr] gap-4 items-start reveal" data-reveal style="--d: 0ms;">
                            <div class="jv-num text-5xl md:text-6xl leading-none">01</div>
                            <div class="jv-card p-6">
                                <h3 class="text-lg font-bold text-white" style="font-family: 'Plus Jakarta Sans', sans-serif;">Distribution of Profits</h3>
                                <p class="mt-2 text-sm text-white/80">
                                    Profits are distributed based on the operating agreement. Common structures include preferred returns, promote splits, and waterfalls that align incentives between the operator and capital partner.
                                </p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-[90px_1fr] gap-4 items-start reveal" data-reveal style="--d: 120ms;">
                            <div class="jv-num text-5xl md:text-6xl leading-none">02</div>
                            <div class="jv-card p-6">
                                <h3 class="text-lg font-bold text-white" style="font-family: 'Plus Jakarta Sans', sans-serif;">Capital Contribution</h3>
                                <p class="mt-2 text-sm text-white/80">
                                    The agreement outlines how much capital each party contributes, when it is funded, and how additional capital calls are handled if the project needs more liquidity.
                                </p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-[90px_1fr] gap-4 items-start reveal" data-reveal style="--d: 240ms;">
                            <div class="jv-num text-5xl md:text-6xl leading-none">03</div>
                            <div class="jv-card p-6">
                                <h3 class="text-lg font-bold text-white" style="font-family: 'Plus Jakarta Sans', sans-serif;">Management and Control</h3>
                                <p class="mt-2 text-sm text-white/80">
                                    Defines who makes decisions and what approvals are required for major actions (budget changes, refinancing, sale). Clear roles reduce conflicts and keep execution efficient.
                                </p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-[90px_1fr] gap-4 items-start reveal" data-reveal style="--d: 360ms;">
                            <div class="jv-num text-5xl md:text-6xl leading-none">04</div>
                            <div class="jv-card p-6">
                                <h3 class="text-lg font-bold text-white" style="font-family: 'Plus Jakarta Sans', sans-serif;">Exit Mechanism</h3>
                                <p class="mt-2 text-sm text-white/80">
                                    Describes when and how the JV ends, including timelines, sale procedures, buyout options, and dispute resolution. A clear exit plan protects both parties.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-14 text-center reveal" data-reveal style="--d: 0ms;">
                    <h2 class="text-2xl sm:text-3xl font-bold uppercase tracking-widest text-white" style="font-family: 'Plus Jakarta Sans', sans-serif;">Our Partners</h2>
                    <div class="mt-6 grid grid-cols-1 sm:grid-cols-3 gap-4 max-w-3xl mx-auto">
                        <div class="jv-soft p-4 flex items-center justify-center">
                            <span class="text-white/90 font-semibold">Cardinal</span>
                        </div>
                        <div class="jv-soft p-4 flex items-center justify-center">
                            <span class="text-white/90 font-semibold">Credco</span>
                        </div>
                        <div class="jv-soft p-4 flex items-center justify-center">
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
