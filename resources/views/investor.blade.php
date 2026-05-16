<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institutional Real Estate Investors | 15% Annual Returns | MIOYM</title>
    <meta name="description" content="Join MIOYM Equities as an institutional real estate investor. Explore our unique investment fund offering preferred 15% annual returns and zero management fees.">
    <meta name="keywords" content="Institutional Real Estate, 15% Annual Returns, Real Estate Investment Fund, Self-Directed IRA, MIOYM Equities, High Yield Real Estate">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
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

        .placeholder-surface {
            background:
                linear-gradient(135deg, rgba(255, 255, 255, 0.18), rgba(255, 255, 255, 0.04)),
                rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.14);
        }

        .placeholder-label {
            letter-spacing: 0.18em;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    @include('components.navigationHeader')

    <main class="pt-16 lg:pt-20">
        <section class="py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden min-h-[300px] flex items-center justify-center">
            <div class="absolute inset-0" style="background-image: url('{{ asset('img/bgAboutUs.webp') }}'); background-size: cover; background-position: center;"></div>
            <div class="max-w-7xl mx-auto text-center relative z-10">
                <h1 class="uppercase text-4xl sm:text-5xl lg:text-6xl font-bold text-white tracking-wider" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                    INVESTORS
                </h1>
            </div>
        </section>

        <section class="px-4 sm:px-6 lg:px-8 py-16 lg:py-20" style="background: linear-gradient(to bottom, #0b0b0c 0%, #18181b 100%);">
            <div class="max-w-6xl mx-auto">
                <!-- Slideshow Container -->
                <div x-data="{ 
                        currentSlide: 1, 
                        totalSlides: 9,
                        interval: null,
                        startInterval() {
                            if (this.interval) clearInterval(this.interval);
                            this.interval = setInterval(() => {
                                this.currentSlide = this.currentSlide === this.totalSlides ? 1 : this.currentSlide + 1;
                            }, 5000);
                        },
                        init() {
                            this.startInterval();
                        }
                    }" 
                    @mouseenter="if(interval) clearInterval(interval)"
                    @mouseleave="startInterval()"
                    class="relative w-full aspect-video bg-[#1a1a1a] rounded-lg overflow-hidden shadow-2xl group">
                    
                    <!-- Slides -->
                    <div class="relative w-full h-full">
                        <!-- Slide 1 (Active) -->
                        <div x-show="currentSlide === 1" 
                             x-transition:enter="transition ease-out duration-500"
                             x-transition:enter-start="opacity-0"
                             x-transition:enter-end="opacity-100"
                             x-transition:leave="transition ease-in duration-300"
                             x-transition:leave-start="opacity-100"
                             x-transition:leave-end="opacity-0"
                             class="absolute inset-0 w-full h-full">
                            <!-- Image Background Placeholder -->
                            <div class="absolute inset-0 placeholder-surface flex items-center justify-center">
                                <img src="{{ asset('img/investorimg1.webp') }}" alt="Investor 1" class="w-full h-full object-contain rounded-lg">
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div x-show="currentSlide === 2" 
                             x-transition:enter="transition ease-out duration-500"
                             x-transition:enter-start="opacity-0"
                             x-transition:enter-end="opacity-100"
                             x-transition:leave="transition ease-in duration-300"
                             x-transition:leave-start="opacity-100"
                             x-transition:leave-end="opacity-0"
                             style="display: none;" class="absolute inset-0 w-full h-full bg-[#2a2a2a] flex items-center justify-center">
                            <img src="{{ asset('img/investorimg2.webp') }}" alt="Investor 2" class="w-full h-full object-contain rounded-lg">
                        </div>

                        <!-- Slide 3 -->
                        <div x-show="currentSlide === 3" 
                             x-transition:enter="transition ease-out duration-500"
                             x-transition:enter-start="opacity-0"
                             x-transition:enter-end="opacity-100"
                             x-transition:leave="transition ease-in duration-300"
                             x-transition:leave-start="opacity-100"
                             x-transition:leave-end="opacity-0"
                             style="display: none;" class="absolute inset-0 w-full h-full bg-[#1a1a1a] flex items-center justify-center">
                            <img src="{{ asset('img/investorimg3.webp') }}" alt="Investor 3" class="w-full h-full object-contain rounded-lg">
                        </div>
                        
                        <!-- Slide 4 -->
                        <div x-show="currentSlide === 4" 
                             x-transition:enter="transition ease-out duration-500"
                             x-transition:enter-start="opacity-0"
                             x-transition:enter-end="opacity-100"
                             x-transition:leave="transition ease-in duration-300"
                             x-transition:leave-start="opacity-100"
                             x-transition:leave-end="opacity-0"
                             style="display: none;" class="absolute inset-0 w-full h-full bg-[#2a2a2a] flex items-center justify-center">
                            <img src="{{ asset('img/investorimg4.webp') }}" alt="Investor 4" class="w-full h-full object-contain rounded-lg">
                        </div>
                        
                        <!-- Slide 5 -->
                        <div x-show="currentSlide === 5" 
                             x-transition:enter="transition ease-out duration-500"
                             x-transition:enter-start="opacity-0"
                             x-transition:enter-end="opacity-100"
                             x-transition:leave="transition ease-in duration-300"
                             x-transition:leave-start="opacity-100"
                             x-transition:leave-end="opacity-0"
                             style="display: none;" class="absolute inset-0 w-full h-full bg-[#1a1a1a] flex items-center justify-center">
                            <img src="{{ asset('img/investorimg5.webp') }}" alt="Investor 5" class="w-full h-full object-contain rounded-lg">
                        </div>
                        
                        <!-- Slide 6 -->
                        <div x-show="currentSlide === 6" 
                             x-transition:enter="transition ease-out duration-500"
                             x-transition:enter-start="opacity-0"
                             x-transition:enter-end="opacity-100"
                             x-transition:leave="transition ease-in duration-300"
                             x-transition:leave-start="opacity-100"
                             x-transition:leave-end="opacity-0"
                             style="display: none;" class="absolute inset-0 w-full h-full bg-[#2a2a2a] flex items-center justify-center">
                            <img src="{{ asset('img/investorimg6.webp') }}" alt="Investor 6" class="w-full h-full object-contain rounded-lg">
                        </div>
                        
                        <!-- Slide 7 -->
                        <div x-show="currentSlide === 7" 
                             x-transition:enter="transition ease-out duration-500"
                             x-transition:enter-start="opacity-0"
                             x-transition:enter-end="opacity-100"
                             x-transition:leave="transition ease-in duration-300"
                             x-transition:leave-start="opacity-100"
                             x-transition:leave-end="opacity-0"
                             style="display: none;" class="absolute inset-0 w-full h-full bg-[#1a1a1a] flex items-center justify-center">
                            <img src="{{ asset('img/investorimg7.webp') }}" alt="Investor 7" class="w-full h-full object-contain rounded-lg">
                        </div>
                        
                        <!-- Slide 8 -->
                        <div x-show="currentSlide === 8" 
                             x-transition:enter="transition ease-out duration-500"
                             x-transition:enter-start="opacity-0"
                             x-transition:enter-end="opacity-100"
                             x-transition:leave="transition ease-in duration-300"
                             x-transition:leave-start="opacity-100"
                             x-transition:leave-end="opacity-0"
                             style="display: none;" class="absolute inset-0 w-full h-full bg-[#2a2a2a] flex items-center justify-center">
                            <img src="{{ asset('img/investorimg8.webp') }}" alt="Investor 8" class="w-full h-full object-contain rounded-lg">
                        </div>
                        
                        <!-- Slide 9 -->
                        <div x-show="currentSlide === 9" 
                             x-transition:enter="transition ease-out duration-500"
                             x-transition:enter-start="opacity-0"
                             x-transition:enter-end="opacity-100"
                             x-transition:leave="transition ease-in duration-300"
                             x-transition:leave-start="opacity-100"
                             x-transition:leave-end="opacity-0"
                             style="display: none;" class="absolute inset-0 w-full h-full bg-[#1a1a1a] flex items-center justify-center">
                            <img src="{{ asset('img/investorimg9.webp') }}" alt="Investor 9" class="w-full h-full object-contain rounded-lg">
                        </div>
                    </div>

                    <!-- Left Arrow -->
                    <button @click="currentSlide = currentSlide === 1 ? totalSlides : currentSlide - 1; startInterval();" 
                            class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/60 hover:bg-[#d9663b] text-white p-3 rounded-full transition-all duration-300 z-20 focus:outline-none shadow-lg opacity-80 hover:opacity-100">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path></svg>
                    </button>

                    <!-- Right Arrow -->
                    <button @click="currentSlide = currentSlide === totalSlides ? 1 : currentSlide + 1; startInterval();" 
                            class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/60 hover:bg-[#d9663b] text-white p-3 rounded-full transition-all duration-300 z-20 focus:outline-none shadow-lg opacity-80 hover:opacity-100">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                    
                    <!-- Slide Indicators -->
                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2 z-20">
                        <template x-for="i in totalSlides" :key="i">
                            <button @click="currentSlide = i; startInterval();" 
                                    :class="{'w-6 bg-[#d9663b]': currentSlide === i, 'w-2 bg-white/50 hover:bg-white/80': currentSlide !== i}"
                                    class="h-2 rounded-full transition-all duration-300 focus:outline-none"></button>
                        </template>
                    </div>
                </div>
            </div>
        </section>

        <section class="px-4 sm:px-6 lg:px-8 py-16 lg:py-24 relative overflow-hidden" style="background: linear-gradient(180deg, #1a1a1d 0%, #4a4a4d 100%);">
            <div class="max-w-6xl mx-auto relative z-10">
                <div class="text-center max-w-4xl mx-auto mb-12 lg:mb-14">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                        What Truly Sets MIOYM Apart in Institutional Real Estate?
                    </h2>
                    <p class="text-base sm:text-lg text-gray-200 mb-5" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                        Unraveling the Uniqueness of Our Organization.
                    </p>
                    <p class="text-sm sm:text-base text-gray-200/90 leading-relaxed max-w-5xl mx-auto">
                        When you come across countless real estate investment firms, have you ever wondered what truly distinguishes one from another? At MIOYM, our unique value proposition is not merely about offering products or services - crafting experiences and transforming communities.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-10">
                    <article class="relative px-3 pt-3 pb-0 flex flex-col">
                        <div class="aspect-[11/13] flex items-center justify-center overflow-hidden" style="clip-path: polygon(0 0, 100% 0, 100% 65%, 0 100%);">
                            <img src="{{ asset('img/investor3.webp') }}" alt="Vertically Integrated Approach in Institutional Real Estate" class="w-full h-full object-cover">
                        </div>
                        <div class="relative -mt-[45%] ml-10 z-10 flex-1 flex flex-col">
                            <div class="absolute -top-8 right-4 w-20 h-20 rounded-full bg-[#e7e1dc] border-[5px] border-[#221d20] flex items-center justify-center shadow-lg z-20">
                                <i class="fas fa-hand-holding-usd text-3xl text-black"></i>
                            </div>
                            <div class="bg-[#2B1A1A] rounded-[24px] px-6 pt-10 pb-8 flex-1 flex flex-col relative z-10">
                                <h3 class="text-2xl lg:text-[1.7rem] leading-tight font-semibold text-white mb-5 pr-14 min-h-[4.5rem] lg:min-h-[5.5rem]" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                    Vertically Integrated Approach:
                                </h3>
                                <p class="text-base text-gray-200 leading-snug text-justify">
                                    Unlike many other organizations, we're a vertically integrated RE investment firm. This means that we oversee every step of the process - from the seed of an investment idea to the fruition of its final product. Having a hand in every phase ensures consistency, transparency, and quality in what we deliver.
                                </p>
                            </div>
                        </div>
                    </article>

                    <article class="relative px-3 pt-3 pb-0 flex flex-col">
                        <div class="aspect-[11/13] flex items-center justify-center overflow-hidden" style="clip-path: polygon(0 0, 100% 0, 100% 65%, 0 100%);">
                            <img src="{{ asset('img/investor2.webp') }}" alt="Tailored Investment Solutions for 15% Annual Returns" class="w-full h-full object-cover">
                        </div>
                        <div class="relative -mt-[45%] ml-10 z-10 flex-1 flex flex-col">
                            <div class="absolute -top-8 right-4 w-20 h-20 rounded-full bg-[#e7e1dc] border-[5px] border-[#221d20] flex items-center justify-center shadow-lg z-20">
                                <i class="fas fa-puzzle-piece text-3xl text-black"></i>
                            </div>
                            <div class="bg-[#2B1A1A] rounded-[24px] px-6 pt-10 pb-8 flex-1 flex flex-col relative z-10">
                                <h3 class="text-2xl lg:text-[1.7rem] leading-tight font-semibold text-white mb-5 pr-14 min-h-[4.5rem] lg:min-h-[5.5rem]" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                    Tailored Solutions:
                                </h3>
                                <p class="text-base text-gray-200 leading-snug text-justify">
                                    We recognize that every investor has unique needs and aspirations. With this understanding, we have developed the ability to tailor our products, ensuring a personalized fit for those with distinct requirements.
                                </p>
                            </div>
                        </div>
                    </article>

                    <article class="relative px-3 pt-3 pb-0 flex flex-col">
                        <div class="aspect-[11/13] flex items-center justify-center overflow-hidden" style="clip-path: polygon(0 0, 100% 0, 100% 65%, 0 100%);">
                            <img src="{{ asset('img/investor1.webp') }}" alt="Rebuilding Communities through Real Estate Investment" class="w-full h-full object-cover">
                        </div>
                        <div class="relative -mt-[45%] ml-10 z-10 flex-1 flex flex-col">
                            <div class="absolute -top-8 right-4 w-20 h-20 rounded-full bg-[#e7e1dc] border-[5px] border-[#221d20] flex items-center justify-center shadow-lg z-20">
                                <i class="far fa-building text-3xl text-black"></i>
                            </div>
                            <div class="bg-[#2B1A1A] rounded-[24px] px-6 pt-10 pb-8 flex-1 flex flex-col relative z-10">
                                <h3 class="text-2xl lg:text-[1.7rem] leading-tight font-semibold text-white mb-5 pr-14 min-h-[4.5rem] lg:min-h-[5.5rem]" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                    Beyond Investments - Rebuilding Communities:
                                </h3>
                                <p class="text-base text-gray-200 leading-snug text-justify">
                                    Our mission becomes even more special here. Beyond providing returns, we actively reestablish neighborhoods by breathing life into distressed areas, reviving communities, and uplifting hope through value-driven reinvestment.
                                </p>
                            </div>
                        </div>
                    </article>

                    <article class="relative px-3 pt-3 pb-0 flex flex-col">
                        <div class="aspect-[11/13] flex items-center justify-center overflow-hidden" style="clip-path: polygon(0 0, 100% 0, 100% 65%, 0 100%);">
                            <img src="{{ asset('img/investor4.webp') }}" alt="First-time Homebuyers" class="w-full h-full object-cover">
                        </div>
                        <div class="relative -mt-[45%] ml-10 z-10 flex-1 flex flex-col">
                            <div class="absolute -top-8 right-4 w-20 h-20 rounded-full bg-[#e7e1dc] border-[5px] border-[#221d20] flex items-center justify-center shadow-lg z-20">
                                <i class="fas fa-home text-3xl text-black"></i>
                            </div>
                            <div class="bg-[#2B1A1A] rounded-[24px] px-6 pt-10 pb-8 flex-1 flex flex-col relative z-10">
                                <h3 class="text-2xl lg:text-[1.7rem] leading-tight font-semibold text-white mb-5 pr-14 min-h-[4.5rem] lg:min-h-[5.5rem]" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                    Empowering First-time Homebuyers:
                                </h3>
                                <p class="text-base text-gray-200 leading-snug text-justify">
                                    Everyone dreams of owning their own home, whether a family or an individual. However, challenges like unfavorable credit scores can pose significant hurdles. At MIOYM, we believe in making dreams a reality by creating access to homeownership and building stronger communities.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="text-center max-w-5xl mx-auto mt-12 lg:mt-14">
                    <p class="text-sm sm:text-base text-gray-100 leading-relaxed">
                        In essence, MIOYM isn't just about real estate or investment returns. We're about touching lives, restoring communities, and ensuring financial barriers don't curtail dreams. Let's connect if you resonate with our mission or are keen on understanding how we can assist you. Together, we can craft legacies and uplift communities.
                    </p>
                </div>
            </div>
        </section>

        <!-- IRA Investment Section -->
        <section class="py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden bg-[#1c1c1c]">
            <div class="max-w-7xl mx-auto relative z-10">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white text-center mb-16" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                    Invest With MIOYM In Your IRA
                </h2>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">
                    <!-- Left Column: Text and Benefits -->
                    <div class="space-y-8">
                        <div>
                            <h3 class="text-2xl sm:text-3xl font-bold text-white mb-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                What is a self-directed IRA?
                            </h3>
                            <p class="text-gray-200 text-base sm:text-lg leading-relaxed font-light text-justify" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                A Self-Directed IRA (SDIRA) is more than a retirement savings account; it's a vehicle that empowers investors to manage and diversify their portfolio with various asset classes, transcending the limitations of traditional retirement accounts.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-2xl sm:text-3xl font-bold text-white mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                Benefits of Investing in Real Estate within an IRA/SDIRA
                            </h3>
                            
                            <ul class="space-y-6">
                                <li class="flex items-start gap-4">
                                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-[#2a2a2a] flex items-center justify-center mt-1">
                                        <i class="fas fa-chart-pie text-white text-lg"></i>
                                    </div>
                                    <p class="text-gray-200 text-base sm:text-lg leading-relaxed font-light text-justify" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                        <strong class="font-bold text-white">Asset Diversification:</strong> One of the most enticing features of investing in real estate through an SDIRA is the ability to diversify your portfolio. This tangible asset provides a hedge against the often unpredictable nature of the stock market, imparting stability and balance to your retirement savings.
                                    </p>
                                </li>
                                <li class="flex items-start gap-4">
                                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-[#2a2a2a] flex items-center justify-center mt-1">
                                        <i class="fas fa-chart-line text-white text-lg"></i>
                                    </div>
                                    <p class="text-gray-200 text-base sm:text-lg leading-relaxed font-light text-justify" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                        <strong class="font-bold text-white">Tax Advantages:</strong> Investors can also benefit from tax-deferred or tax-free growth, subject to the type of IRA. This feature accentuates the appeal of real estate as an investment option within a Self-Directed IRA, optimizing the potential for returns while minimizing tax liabilities.
                                    </p>
                                </li>
                                <li class="flex items-start gap-4">
                                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-[#2a2a2a] flex items-center justify-center mt-1">
                                        <i class="fas fa-check-circle text-white text-lg"></i>
                                    </div>
                                    <p class="text-gray-200 text-base sm:text-lg leading-relaxed font-light text-justify" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                        <strong class="font-bold text-white">Potential for Higher Returns:</strong> With its historical track record of appreciative growth, real estate emerges as a compelling avenue for enhancing the value of your IRA, promising not just security but also the prospect of significant returns.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Right Column: Image and Text Block -->
                    <div class="bg-[#242424] rounded-[24px] p-6 sm:p-8">
                        <div class="rounded-[16px] overflow-hidden mb-6">
                            <!-- Placeholder for the couple using laptop image -->
                            <div class="placeholder-surface w-full aspect-[4/3] flex items-center justify-center">
                                <img src="{{ asset('img/investor5.webp') }}" alt="Investors managing Self-Directed IRA for Institutional Real Estate" class="w-full h-full object-cover">
                            </div>
                        </div>
                        
                        <div class="space-y-6">
                            <p class="text-gray-200 text-base sm:text-lg leading-relaxed font-light text-justify" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                MIOYM has partnered with the Entrust Group, a premier provider of self-directed IRAs. For a comprehensive understanding of the intricacies involved in Self-Directed IRAs and real estate investments within them, consider exploring the resources of The Entrust Group. Their expertise and insights can offer novice and experienced investors valuable guidance. Please explore <a href="#" class="text-white underline hover:text-gray-300 transition-colors">The Entrust Group</a>. With MIOYM and Entrust, your self-directed IRA investment is one click away!
                            </p>
                            <p class="text-gray-200 text-base sm:text-lg leading-relaxed font-light text-justify" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                Step into the world of empowered retirement savings where diversity, control, and enhanced growth potential converge to transform your financial future. The Self-Directed IRA awaits your exploration.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-16 text-center flex flex-col items-center">
                     <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white italic" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                         We can work with your existing SDIRA & existing company.
                     </h3>
                     <div class="w-[85%] sm:w-[75%] lg:w-[60%] h-px bg-white mt-10"></div>
                 </div>
             </div>
         </section>

         <!-- Why Investors Choose MIOYM Stats Banner -->
         <section class="py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
             <!-- Background Image for the wavy texture -->
             <div class="absolute inset-0 z-0" style="background-image: url('{{ asset('img/investorbg.webp') }}'); background-size: cover; background-position: center;"></div>
             <div class="absolute inset-0 bg-gradient-to-b from-transparent to-[#2b2b2b]/90 z-0"></div>
             
             <div class="max-w-7xl mx-auto relative z-10">
                 <div class="text-center max-w-4xl mx-auto mb-16">
                     <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                         Why Investors Choose MIOYM
                     </h2>
                     <p class="text-base sm:text-lg text-gray-200 leading-relaxed font-light" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                         We pride ourselves on offering investment opportunities that outshine typical mortgage funds. Our fund structure is carefully crafted to provide investors with a competitive edge—offering superior returns and benefits without any management fees.
                     </p>
                 </div>

                 <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-6 lg:gap-12 items-center justify-center text-white">
                     <!-- Stat 1 -->
                     <div class="flex items-center justify-center gap-4">
                         <span class="text-5xl lg:text-6xl font-bold" style="font-family: 'Plus Jakarta Sans', sans-serif;">15%</span>
                         <span class="text-xl lg:text-2xl font-semibold leading-tight max-w-[8rem]" style="font-family: 'Plus Jakarta Sans', sans-serif;">Preffered<br>Returns</span>
                     </div>
                     <!-- Stat 2 -->
                     <div class="flex items-center justify-center gap-4">
                         <span class="text-5xl lg:text-6xl font-bold" style="font-family: 'Plus Jakarta Sans', sans-serif;">0%</span>
                         <span class="text-xl lg:text-2xl font-semibold leading-tight max-w-[8rem]" style="font-family: 'Plus Jakarta Sans', sans-serif;">Management<br>Fees</span>
                     </div>
                     <!-- Stat 3 -->
                     <div class="flex items-center justify-center gap-4">
                         <span class="text-2xl lg:text-3xl font-bold leading-tight text-center" style="font-family: 'Plus Jakarta Sans', sans-serif;">12-Months Minimum<br>Lock-up Period</span>
                     </div>
                 </div>
             </div>
         </section>

         <!-- Advantages of Investing in MIOYM's Fund -->
         <section class="py-20 px-4 sm:px-6 lg:px-8 bg-[#3d3d3d]">
             <div class="max-w-7xl mx-auto">
                 <div class="text-center mb-16">
                     <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                         Advantages of Investing in MIOYM's Fund
                     </h2>
                 </div>

                 <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 mb-16">
                     <!-- Advantage Card 1 -->
                     <div class="rounded-[24px] p-8 lg:p-10 flex flex-col h-full shadow-2xl border border-white/5" style="background: linear-gradient(180deg, #5c5c5c 0%, #1a1a1a 100%);">
                         <div class="w-16 h-16 rounded-2xl border-2 border-white flex items-center justify-center mb-8">
                             <i class="fas fa-shield-alt text-3xl text-white"></i>
                         </div>
                         <h3 class="text-2xl font-bold text-white mb-6 leading-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                             Security of Real<br>Estate
                         </h3>
                         <p class="text-gray-200 text-base leading-relaxed font-light mt-auto">
                             Capitalize on the secure and tangible nature of real estate investments, providing stability and reliable returns for smart investors.
                         </p>
                     </div>

                     <!-- Advantage Card 2 -->
                     <div class="rounded-[24px] p-8 lg:p-10 flex flex-col h-full shadow-2xl border border-white/5" style="background: linear-gradient(180deg, #5c5c5c 0%, #1a1a1a 100%);">
                         <div class="w-16 h-16 rounded-2xl border-2 border-white flex items-center justify-center mb-8">
                             <i class="fas fa-chart-line text-3xl text-white"></i>
                         </div>
                         <h3 class="text-2xl font-bold text-white mb-6 leading-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                             Maximize Returns with<br>High Yield and Fixed<br>Income
                         </h3>
                         <p class="text-gray-200 text-base leading-relaxed font-light mt-auto">
                             We generate attractive returns through carefully selected real estate projects, offering investors consistent cash flow and long-term growth.
                         </p>
                     </div>

                     <!-- Advantage Card 3 -->
                     <div class="rounded-[24px] p-8 lg:p-10 flex flex-col h-full shadow-2xl border border-white/5" style="background: linear-gradient(180deg, #5c5c5c 0%, #1a1a1a 100%);">
                         <div class="w-16 h-16 rounded-2xl border-2 border-white flex items-center justify-center mb-8">
                             <i class="fas fa-lock text-3xl text-white"></i>
                         </div>
                         <h3 class="text-2xl font-bold text-white mb-6 leading-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                             Low-Risk Operating<br>Model
                         </h3>
                         <p class="text-gray-200 text-base leading-relaxed font-light mt-auto">
                             MIOYM retains no liability if the loan doesn't perform, providing investors with enhanced protection and peace of mind.
                         </p>
                     </div>
                 </div>

                 <!-- Trusted By Banner -->
                 <div class="max-w-4xl mx-auto">
                     <div class="rounded-[16px] py-4 px-8 text-center shadow-lg border border-white/10" style="background: linear-gradient(90deg, rgba(82,82,82,0.8) 0%, rgba(61,61,61,0.8) 100%);">
                         <h3 class="text-2xl sm:text-3xl font-bold text-white italic" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                             Trusted by Over 2,000+ Happy Clients
                         </h3>
                     </div>
                 </div>
             </div>
         </section>
     </main>

    @include('components.footer')

</body>
</html>

