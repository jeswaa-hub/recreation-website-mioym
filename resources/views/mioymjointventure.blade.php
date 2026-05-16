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
        <!-- Section 1: Hero -->
        <section class="relative overflow-hidden">
            <div class="absolute inset-0 bg-black/65 -z-10"></div>
            <div class="absolute inset-0 -z-10">
                <img src="{{ asset('img/bgAboutUs.webp') }}" alt="" class="w-full h-full object-cover">
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-24">
                <h1 class="text-4xl sm:text-5xl lg:text-7xl font-extrabold text-white tracking-tight reveal" data-reveal style="--d: 0ms; font-family: 'Plus Jakarta Sans', sans-serif;">
                    MIOYM Joint<br>Venture
                </h1>
            </div>
        </section>

        <!-- Global Gradient Background for Sections 2-5 -->
        <div class="bg-gradient-to-b from-[#000000] via-[#333333] to-[#4a4a4a]">
            <!-- Section 2: Description -->
            <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">
                <div class="text-left">
                    <p class="text-lg sm:text-xl lg:text-2xl text-white/85 max-w-5xl reveal" data-reveal style="--d: 140ms;">
                        A real estate joint venture (JV) is a deal between multiple parties to work together and combine resources to develop a real estate project. Most large projects are financed and developed as a result of real estate joint ventures. A JV allows real estate operators and individuals with investors to finance and complete a large-scale real estate project without direct cash outlay by the operator.
                    </p>
                    <p class="mt-8 text-lg sm:text-xl lg:text-2xl text-white/85 max-w-5xl reveal" data-reveal style="--d: 220ms;">
                        The basic principle surrounding a real estate joint venture can be illustrated through the following example: Company X owns a plot of land in the city of Los Angeles. However, Company X does not have the necessary funds to build on the plot of land. Company Y, on the other hand, has the funds but does not have the ability to develop the land. In this case, both Company X and Company Y benefit from a JV arrangement.
                    </p>
                </div>
            </section>

            <!-- Section 3: Visual Concept -->
            <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="reveal" data-reveal style="--d: 0ms;">
                    <img src="{{ asset('img/mjv.webp') }}" alt="Joint Venture Process" class="w-full h-auto rounded-3xl shadow-2xl">
                </div>
            </section>

            <!-- Section 4: Players -->
            <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20">
                <div class="jv-soft p-10 sm:p-14 reveal text-center" data-reveal style="--d: 0ms;">
                    <h2 class="text-2xl sm:text-4xl font-extrabold text-white mb-8" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                        The Different Players in a Real Estate Joint Venture
                    </h2>
                    <div class="space-y-8 max-w-5xl mx-auto">
                        <p class="text-lg sm:text-xl text-white/90 leading-relaxed">
                            As mentioned above, most real estate joint ventures are comprised of two separate parties: the operating member and the capital member. The operating member is usually an expert on real estate projects and is responsible for the daily operations and management of the real estate project. A typical operating member is usually a highly experienced professional from the real estate industry with the ability to source, acquire, manage, and develop a real estate project. The capital member usually finances a large part of the project or even the entire project.
                        </p>
                        <p class="text-lg sm:text-xl text-white/90 leading-relaxed">
                            In a Real Estate Joint Venture, each member is liable for profits and losses relating to the joint venture. However, this liability only extends as far as the particular project that the joint venture was created for. Aside from this, the joint venture is separate from the members’ other business interests.
                        </p>
                        <p class="text-lg sm:text-xl text-white/90 leading-relaxed">
                            In most cases, the operating member and the capital member of the real estate joint venture set up the Real Estate project as an independent limited liability company (LLC). The parties sign the joint venture agreement, which details the conditions of the joint venture, such as its objective, the contribution of the capital member, how profits will be split, delegation of management responsibilities for the project, ownership rights of the project, etc.
                        </p>
                        <p class="text-lg sm:text-xl text-white/90 leading-relaxed">
                            However, a real estate joint venture is not limited to an LLC. Corporations, partnerships, and several other business arrangements can all be used to set up a joint venture. The exact structure of the JV determines the relationship between the operator and the capital provider.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Section 5: Key Aspects (Custom Design) -->
            <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
                <div class="text-center mb-16 reveal" data-reveal style="--d: 0ms;">
                    <h2 class="text-3xl sm:text-5xl font-extrabold text-white mb-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                        Key Aspects of a Real Estate JV Agreement
                    </h2>
                    <p class="text-lg text-white/70">A real estate JV agreement involves the following factors:</p>
                </div>
                
                <div class="max-w-6xl mx-auto space-y-12 lg:space-y-16">
                    <!-- Aspect 01 -->
                    <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12 reveal max-w-5xl" data-reveal style="--d: 100ms;">
                        <div class="jv-num text-7xl md:text-9xl text-white font-bold leading-none min-w-[140px] text-left">01</div>
                        <div class="bg-[#8b8585] p-8 md:p-12 rounded-[1.1rem] shadow-2xl w-full min-h-[280px] flex flex-col justify-center">
                            <h3 class="text-2xl sm:text-3xl font-bold text-white mb-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">Distribution of Profits</h3>
                            <p class="text-base sm:text-lg text-white leading-relaxed">
                                An important distinction to make when drafting the terms for a joint venture is how the members will distribute profits generated from the project. Compensation may not necessarily be equally distributed. For example, more active members, or members that have invested more into the project may be compensated better than passive members.
                            </p>
                        </div>
                    </div>

                    <!-- Aspect 02 -->
                    <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12 reveal max-w-5xl md:ml-auto" data-reveal style="--d: 200ms;">
                        <div class="jv-num text-7xl md:text-9xl text-white font-bold leading-none min-w-[140px] text-left">02</div>
                        <div class="bg-[#8b8585] p-8 md:p-12 rounded-[1.1rem] shadow-2xl w-full min-h-[280px] flex flex-col justify-center">
                            <h3 class="text-2xl sm:text-3xl font-bold text-white mb-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">Capital Contribution</h3>
                            <p class="text-base sm:text-lg text-white leading-relaxed">
                                The JV agreement needs to specify the exact amount of capital contribution expected from each member. In addition, it must also specify when this capital is due. For example, a capital owner may agree to contribute 25% of the required capital but only if this contribution is made at the last stage of the development process (last money in).
                            </p>
                        </div>
                    </div>

                    <!-- Aspect 03 -->
                    <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12 reveal max-w-5xl" data-reveal style="--d: 300ms;">
                        <div class="jv-num text-7xl md:text-9xl text-white font-bold leading-none min-w-[140px] text-left">03</div>
                        <div class="bg-[#8b8585] p-8 md:p-12 rounded-[1.1rem] shadow-2xl w-full min-h-[280px] flex flex-col justify-center">
                            <h3 class="text-2xl sm:text-3xl font-bold text-white mb-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">Management and control</h3>
                            <p class="text-base sm:text-lg text-white leading-relaxed">
                                The JV agreement is expected to specify in detail the exact structure of the JV and the responsibilities of both parties regarding the management of the Real Estate JV project.
                            </p>
                        </div>
                    </div>

                    <!-- Aspect 04 -->
                    <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12 reveal max-w-5xl md:ml-auto" data-reveal style="--d: 400ms;">
                        <div class="jv-num text-7xl md:text-9xl text-white font-bold leading-none min-w-[140px] text-left">04</div>
                        <div class="bg-[#8b8585] p-8 md:p-12 rounded-[1.1rem] shadow-2xl w-full min-h-[280px] flex flex-col justify-center">
                            <h3 class="text-2xl sm:text-3xl font-bold text-white mb-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">Exit Mechanism</h3>
                            <p class="text-base sm:text-lg text-white leading-relaxed">
                                It is essential for a JV agreement to detail how and when the JV will end. Usually, it is in the best interest of both parties to make the dissolution of the JV as economical as possible (i.e., avoid legal fees, etc.). In addition, the JV agreement must also list out all the events that might allow one or both parties to trigger a premature dissolution of the JV.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
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
