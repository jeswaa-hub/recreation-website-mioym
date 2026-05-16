<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs | MIOYM Equities Real Estate News & Insights</title>
    <meta name="description" content="Read the latest news, insights, and updates from MIOYM Equities regarding real estate investments, market trends, and property preservation.">
    <meta name="keywords" content="Real Estate Blogs, MIOYM Equities News, Property Investment Insights, Real Estate Market Trends">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/webp" href="{{ asset('img/logo.webp') }}">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" as="style">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"></noscript>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
                    BLOGS
                </h1>
            </div>
        </section>

        <!-- Blog Posts Section -->
        <section class="py-20 px-4 sm:px-6 lg:px-8 relative bg-[#151515]">
            <div class="max-w-7xl mx-auto space-y-24">
                
                <!-- Blog Post 1 -->
                <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
                    <!-- Text Content -->
                    <div class="w-full lg:w-1/2">
                        <h2 class="text-3xl md:text-4xl font-bold text-white leading-tight mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            MIOYM Announces Strategic Partnership With Equity Trust Pioneers Of Self Directed IRA To Empower Real Estate Investment
                        </h2>
                        <p class="text-gray-300 text-lg leading-relaxed mb-8" style="font-family: 'Inter', sans-serif;">
                            MIOYM teams up with Equity Trust, leaders in Self Directed IRA, to revolutionize real estate investment opportunities. "We are thrilled to partner with Equity Trust to offer our clients unparalleled opportunities in real estate investment" — <strong class="text-white">Robert Costomiris</strong>
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a href="https://mioym.com/wp-content/uploads/2024/05/MIOYM-Press-Release.pdf" class="inline-block bg-[#1a1a1a] hover:bg-[#2a2a2a] text-white border border-white/20 font-medium px-8 py-3 rounded-lg transition-colors" style="font-family: 'Inter', sans-serif;">
                                Read More
                            </a>
                            <a href="https://apnews.com/press-release/ein-presswire-newsmatics/real-estate-290241748f6b0828e4974a73ce5ecca3" class="inline-block bg-[#1a1a1a] hover:bg-[#2a2a2a] text-white border border-white/20 font-medium px-8 py-3 rounded-lg transition-colors" style="font-family: 'Inter', sans-serif;">
                                View Source
                            </a>
                        </div>
                    </div>
                    
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <div class="relative rounded-2xl overflow-hidden bg-white p-8 shadow-2xl border border-white/10 flex items-center justify-center">
                            <!-- Soft glow effect -->
                            <div class="absolute inset-0 bg-[#ffffff] opacity-5 blur-3xl"></div>
                            <img src="{{ asset('img/blogsImg1.webp') }}" alt="Equity Trust Logo" class="relative z-10 w-full h-auto object-contain max-h-[300px]">
                        </div>
                    </div>
                </div>

                <!-- Blog Post 2 -->
                <div class="flex flex-col lg:flex-row-reverse items-center gap-12 lg:gap-16">
                    <!-- Text Content -->
                    <div class="w-full lg:w-1/2">
                        <h2 class="text-3xl md:text-4xl font-bold text-white leading-tight mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            Robert Costomiris & Marc Cox on Breaking the Mold in Distressed Asset RE Investing with MIOYM Group
                        </h2>
                        <p class="text-gray-300 text-lg leading-relaxed mb-8" style="font-family: 'Inter', sans-serif;">
                            In a world where the real estate industry is constantly evolving, it's essential to have innovative minds that can disrupt the status quo. Marc Cox and Robert Costomiris, two dynamic partners, have done just that with their firm, MIOYM Group.
                        </p>
                        <div>
                            <a href="https://nyweekly.com/business/robert-costomiris-marc-cox-mioym-group/" class="inline-block bg-[#1a1a1a] hover:bg-[#2a2a2a] text-white border border-white/20 font-medium px-8 py-3 rounded-lg shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300" style="font-family: 'Inter', sans-serif;">
                                Read More
                            </a>
                        </div>
                    </div>
                    
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-white/10">
                            <!-- Soft glow effect -->
                            <div class="absolute inset-0 bg-[#ffffff] opacity-5 blur-3xl"></div>
                            <img src="{{ asset('img/blogsImg2.webp') }}" alt="Robert Costomiris & Marc Cox" class="relative z-10 w-full h-auto object-cover">
                        </div>
                    </div>
                </div>

                <!-- Blog Post 3 -->
                <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
                    <!-- Text Content -->
                    <div class="w-full lg:w-1/2">
                        <h2 class="text-3xl md:text-4xl font-bold text-white leading-tight mb-6 uppercase" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            National Entrepreneurship Month
                        </h2>
                        <p class="text-gray-300 text-lg leading-relaxed mb-8" style="font-family: 'Inter', sans-serif;">
                            MIOYM is a residential asset management company that focuses on single family residential through 38 states within the continental US. We also offer services like commercial lending, private lending, non-performing loans and redevelopment. At MIOYM, our unique value proposition is not merely about offering products or services - it's about crafting experiences and transforming.
                        </p>
                        <div x-data="{ modalOpen: false }">
                            <button @click="modalOpen = true" class="inline-block bg-[#1a1a1a] hover:bg-[#2a2a2a] text-white border border-white/20 font-medium px-8 py-3 rounded-lg shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300" style="font-family: 'Inter', sans-serif;">
                                Read More
                            </button>
                            
                            <!-- Modal -->
                            <div x-show="modalOpen" 
                                 class="fixed inset-0 z-[100] overflow-y-auto" 
                                 aria-labelledby="modal-title" 
                                 role="dialog" 
                                 aria-modal="true"
                                 style="display: none;">
                                 
                                <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:p-0">
                                    <!-- Background overlay with dark blur -->
                                    <div x-show="modalOpen" 
                                         x-transition:enter="ease-out duration-300" 
                                         x-transition:enter-start="opacity-0" 
                                         x-transition:enter-end="opacity-100" 
                                         x-transition:leave="ease-in duration-200" 
                                         x-transition:leave-start="opacity-100" 
                                         x-transition:leave-end="opacity-0" 
                                         class="fixed inset-0 transition-opacity bg-black/90 backdrop-blur-md" 
                                         @click="modalOpen = false" 
                                         aria-hidden="true"></div>

                                    <!-- Modal panel -->
                                    <div x-show="modalOpen" 
                                         x-transition:enter="ease-out duration-400" 
                                         x-transition:enter-start="opacity-0 translate-y-8 scale-95" 
                                         x-transition:enter-end="opacity-100 translate-y-0 scale-100" 
                                         x-transition:leave="ease-in duration-300" 
                                         x-transition:leave-start="opacity-100 translate-y-0 scale-100" 
                                         x-transition:leave-end="opacity-0 translate-y-8 scale-95" 
                                         class="relative inline-block w-full max-w-5xl overflow-hidden text-left align-middle transition-all transform bg-[#151515] border border-white/10 shadow-[0_0_50px_-12px_rgba(255,255,255,0.5)] rounded-2xl sm:my-8">
                                         
                                        <!-- Close button -->
                                        <button @click="modalOpen = false" class="absolute top-4 right-4 text-gray-400 hover:text-white focus:outline-none z-50 bg-[#1a1a1a] hover:bg-[#2a2a2a] rounded-full w-10 h-10 flex items-center justify-center transition-all duration-300 backdrop-blur-sm border border-white/20 shadow-lg">
                                            <i class="fas fa-times text-xl"></i>
                                        </button>

                                        <div class="flex flex-col md:flex-row h-full">
                                            <!-- Left Content Area (Dark Theme with Orange/Red accents) -->
                                            <div class="w-full md:w-2/3 p-8 md:p-12 text-white relative">
                                                <!-- Decorative background elements -->
                                                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-[#8d8d8d] to-[#353535]"></div>
                                                <div class="absolute -top-24 -left-24 w-48 h-48 bg-[#ffffff] rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
                                                <div class="absolute -bottom-24 -right-24 w-48 h-48 bg-[#5e5e5e] rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
                                                
                                                <div class="relative z-10">
                                                    <div class="inline-block px-3 py-1 mb-4 text-xs font-semibold tracking-wider text-[#ffffff] uppercase bg-[#ffffff]/10 border border-[#ffffff]/20 rounded-full">
                                                        Special Feature
                                                    </div>
                                                    
                                                    <h2 class="text-3xl md:text-4xl font-bold mb-8 text-white uppercase leading-tight tracking-wide" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                                        National<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-[#ffffff] to-white">Entrepreneurship Month</span>
                                                    </h2>
                                                    
                                                    <div class="space-y-6 text-gray-300 text-sm md:text-base leading-relaxed" style="font-family: 'Inter', sans-serif;">
                                                        <p class="text-white font-medium border-l-4 border-[#ffffff] pl-4">
                                                            MIOYM is a residential asset management company that focuses on single family residential through 38 states within the continental US. We also offer services like commercial lending, private lending, non-performing loans and redevelopment. At MIOYM, our unique value proposition is not merely about offering products or services - it's about crafting experiences and transforming.
                                                        </p>
                                                        
                                                        <p>
                                                            In essence, MIOYM isn't just about real estate or investment returns. We're about touching lives, restoring communities, and ensuring that dreams aren't curtailed by financial barriers.
                                                        </p>
                                                        
                                                        <div class="bg-white/5 border border-white/10 rounded-xl p-6 mt-8 mb-6 relative overflow-hidden group hover:border-[#ffffff]/50 transition-colors duration-300">
                                                            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#ffffff]/20 to-transparent transform rotate-45 translate-x-8 -translate-y-8"></div>
                                                            <h3 class="text-lg font-bold text-white uppercase mb-4 flex items-center gap-2">
                                                                <i class="fas fa-building text-[#e6e6e6]"></i> Why Westchester?
                                                            </h3>
                                                            
                                                            <div class="space-y-4 text-sm">
                                                                <p>
                                                                    MIOYM found its humble beginnings in Westchester County in 2008, and it's been a meaningful journey ever since. The proximity to the bustling heart of New York City has allowed us to draw inspiration from its energy while maintaining our unique identity. Westchester County, in its own right, is like a small, welcoming city within itself.
                                                                </p>
                                                                <p>
                                                                    This community not only offers a home for our company but also the perfect backdrop for our meetings. With some of the best restaurants in town, lunch and dinner meetings become effortless opportunities to connect and collaborate. Westchester's charm and accessibility have played a pivotal role in shaping our story.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="flex items-start gap-4 mt-6">
                                                            <i class="fas fa-quote-left text-[#ffffff] text-2xl opacity-50 mt-1"></i>
                                                            <p class="italic text-gray-400">
                                                                Despite its size, Westchester fosters a unique sense of community that makes it feel like a close-knit family. It's this welcoming embrace and the genuine connections we've forged here that make Westchester the perfect place for MIOYM to call home.
                                                                <span class="block mt-2 font-semibold text-[#ffffff] not-italic">- Marc Cox, Managing Member</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Right Sidebar Area (Glassmorphism Dark) -->
                                            <div class="w-full md:w-1/3 bg-black/40 backdrop-blur-md p-8 flex flex-col justify-between gap-8 relative border-l border-white/5">
                                                <!-- Top Images -->
                                                <div class="space-y-8 mt-4">
                                                    <div class="bg-white/5 border border-white/10 p-6 rounded-xl flex items-center justify-center group hover:bg-white/10 transition-colors duration-300">
                                                        <img src="{{ asset('img/logo.webp') }}" alt="MIOYM Logo" class="w-full max-w-[160px] object-contain filter drop-shadow-[0_0_15px_rgba(255,255,255,0.2)] group-hover:scale-105 transition-transform duration-500">
                                                    </div>
                                                    
                                                    <div class="flex items-center justify-center">
                                                        <img src="{{ asset('img/inc5000-badge.webp') }}" alt="Inc 5000 Badge" class="w-full max-w-[140px] object-contain filter drop-shadow-[0_0_20px_rgba(23,162,184,0.3)] hover:rotate-3 transition-transform duration-500">
                                                    </div>
                                                </div>
                                                
                                                <!-- Bottom Image (Marc) -->
                                                <div class="relative rounded-xl overflow-hidden border border-white/10 group">
                                                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent z-10 opacity-80 group-hover:opacity-60 transition-opacity duration-300"></div>
                                                    <img src="{{ asset('img/team/marc.webp') }}" alt="Marc Cox" class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700">
                                                    <div class="absolute bottom-0 left-0 w-full p-4 z-20">
                                                        <p class="text-white font-bold text-sm uppercase tracking-wider" style="font-family: 'Plus Jakarta Sans', sans-serif;">Marc Cox</p>
                                                        <p class="text-[#c7c7c7] text-xs">Managing Member</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Bottom Footer Area -->
                                        <div class="w-full bg-gradient-to-r from-[#151515] via-[#1a1a1a] to-[#151515] border-t border-white/10 py-4 px-8 flex justify-between items-center text-sm">
                                            <span class="text-gray-500" style="font-family: 'Inter', sans-serif;">MIOYM Equities © 2024</span>
                                            <a href="https://www.mioym.com" class="text-gray-300 hover:text-[#ffffff] flex items-center gap-2 transition-colors font-medium tracking-wider" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                                VISIT WEBSITE <i class="fas fa-arrow-right text-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <div class="relative rounded-2xl overflow-hidden bg-white p-8 shadow-2xl border border-white/10 flex items-center justify-center">
                            <!-- Soft glow effect -->
                            <div class="absolute inset-0 bg-[#17a2b8] opacity-5 blur-3xl"></div>
                            <img src="{{ asset('img/team/marc.webp') }}" alt="Marc Cox - National Entrepreneurship Month" class="relative z-10 w-full max-w-sm h-auto object-cover rounded shadow-lg">
                        </div>
                    </div>
                </div>

                <!-- Blog Post 4 -->
                <div class="flex flex-col lg:flex-row-reverse items-center gap-12 lg:gap-16">
                    <!-- Text Content -->
                    <div class="w-full lg:w-1/2">
                        <h2 class="text-3xl md:text-4xl font-bold text-white leading-tight mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            MIOYM Ranks No. 1,522 on the 2023 Inc. 5000
                        </h2>
                        <p class="text-white text-xl font-medium leading-relaxed mb-4" style="font-family: 'Inter', sans-serif;">
                            With Three-Year Revenue Growth of 377 Percent, MIOYM Ranks No. 1,522 Among America's Fastest-Growing Private Companies.
                        </p>
                        <p class="text-gray-300 text-base leading-relaxed mb-8" style="font-family: 'Inter', sans-serif;">
                            NEW YORK, August 15, 2023 - Inc. revealed today that MIOYM ranks No. 1,522 on the 2023 Inc. 5000, its annual list of the fastest-growing private companies in America.
                        </p>
                        <div>
                            <a href="https://mioym.com/wp-content/uploads/2023/12/Inc.-5000-2023-Press-Release-Template.pdf" class="inline-block bg-[#1a1a1a] hover:bg-[#2a2a2a] text-white border border-white/20 font-medium px-8 py-3 rounded-lg shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300" style="font-family: 'Inter', sans-serif;">
                                Read More
                            </a>
                        </div>
                    </div>
                    
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <div class="relative rounded-2xl overflow-hidden bg-white p-8 shadow-2xl border border-white/10 flex items-center justify-center">
                            <!-- Soft glow effect -->
                            <div class="absolute inset-0 bg-[#17a2b8] opacity-5 blur-3xl"></div>
                            <img src="{{ asset('img/inc5000-badge.webp') }}" alt="Inc. 5000 Badge 2023" class="relative z-10 w-full max-w-sm h-auto object-contain">
                        </div>
                    </div>
                </div>

                <!-- Blog Post 5 / Webinar Feature -->
                <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
                    <!-- Text Content -->
                    <div class="w-full lg:w-1/2">
                        <h2 class="text-3xl md:text-5xl font-bold text-white leading-tight mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            Hidden Capital: <span class="text-gray-300 font-semibold block text-2xl md:text-3xl mt-2 uppercase tracking-wide">How To Unlock Retirement Wealth For Real Estate</span>
                        </h2>
                        <p class="text-gray-300 text-lg leading-relaxed mb-8" style="font-family: 'Inter', sans-serif;">
                            Most investors don't realize their retirement account could be the key to building real estate wealth right now. Join Joel Landon (Director of Revenue & Partnership Growth, Heritage IRA) and Robert Costomiris (President, The MIOYM Group) for this exclusive live session.
                        </p>
                    </div>
                    
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-white/10 group">
                            <!-- Soft glow effect -->
                            <div class="absolute inset-0 bg-[#d4af37] opacity-10 blur-3xl transition-opacity duration-500 group-hover:opacity-20"></div>
                            <img src="{{ asset('img/webinarFeature.webp') }}" alt="Live Webinar: Hidden Capital - How to unlock retirement wealth for real estate" class="relative z-10 w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105">
                        </div>
                    </div>
                </div>

        <!-- Our Videos Section -->
        <section class="py-20 px-4 sm:px-6 lg:px-8 relative bg-[#1c1c1c]">
            <div class="max-w-[1400px] mx-auto">
                
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="text-4xl sm:text-5xl font-bold text-white uppercase tracking-wider" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                        OUR VIDEOS
                    </h2>
                </div>

                <!-- Notification Box -->
                <div class="bg-white rounded-lg border border-red-600 p-6 mb-16 shadow-xl relative z-10 max-w-6xl mx-auto">
                    <p class="text-black text-md md:text-xl lg:text-sm italic leading-relaxed text-center" style="font-family: 'Inter', sans-serif;">
                        This MIOYM Equities website may occasionally feature content from external sources for informational purposes. The views and opinions expressed in these articles belong solely to the respective authors and do not necessarily represent the views of MIOYM Equities.
                    </p>
                </div>

                <!-- Videos Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <!-- Video 1 -->
                    <div class="w-full aspect-video rounded-2xl overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.5)] border border-white/10 bg-black transition-transform duration-300 hover:scale-105">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/GFGRU1asvJo" title="Residential Redevelopment" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                    <!-- Video 2 -->
                    <div class="w-full aspect-video rounded-2xl overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.5)] border border-white/10 bg-black transition-transform duration-300 hover:scale-105">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/2XTaxeTWatw" title="Unlocking Profits: MIOYM Equities' Process for Investing in Distressed US Properties Explained" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                    <!-- Video 3 -->
                    <div class="w-full aspect-video rounded-2xl overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.5)] border border-white/10 bg-black transition-transform duration-300 hover:scale-105">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/XSSD_N8SUJk" title="Marc Cox CEO of MIOYM Group talks about who he is and what he does" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                    <!-- Video 4 -->
                    <div class="w-full aspect-video rounded-2xl overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.5)] border border-white/10 bg-black transition-transform duration-300 hover:scale-105">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/kF1YqQi1PGo" title="MIOYM reviving 1920s Detroit gem at 819 E Grand Ave! 5BD/3BA home transformation underway. #MIOYM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                    <!-- Video 5 -->
                    <div class="w-full aspect-video rounded-2xl overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.5)] border border-white/10 bg-black transition-transform duration-300 hover:scale-105">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/v6MHuLgMHWc" title="What sets MIOYM apart?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                    <!-- Video 6 -->
                    <div class="w-full aspect-video rounded-2xl overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.5)] border border-white/10 bg-black transition-transform duration-300 hover:scale-105">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/dBEMq9Z4g0I" title="MIOYM Equities What We do and Who We Are" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                    <!-- Video 7 -->
                    <div class="w-full aspect-video rounded-2xl overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.5)] border border-white/10 bg-black transition-transform duration-300 hover:scale-105">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/Xd7lyS3XOk4" title="MIOYM's new gem: 330 Winchester St, Detroit. Restoring a 1912 historic home! #DetroitRevival 🛠️🌟" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                    <!-- Video 8 -->
                    <div class="w-full aspect-video rounded-2xl overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.5)] border border-white/10 bg-black transition-transform duration-300 hover:scale-105">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/Q_rftT2pW5U" title="MIOYM Equites closes on it’s most recent acquisition 1229 Benton Ave Pittsburgh" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                    <!-- Video 9 -->
                    <div class="w-full aspect-video rounded-2xl overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.5)] border border-white/10 bg-black transition-transform duration-300 hover:scale-105">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/JsqWvmvSIwk" title="Robert Costomiris of MIOYM explains their proprietary technology." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </section>

    </main>

    @include('components.footer')
</body>
</html>