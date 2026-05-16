<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="icon" type="image/png" href="{{ asset('img/logo.webp') }}">
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
                            <a href="#" class="inline-block bg-[#17a2b8] hover:bg-[#138496] text-white font-medium px-8 py-3 rounded transition-colors" style="font-family: 'Inter', sans-serif;">
                                Read More
                            </a>
                            <a href="#" class="inline-block bg-[#17a2b8] hover:bg-[#138496] text-white font-medium px-8 py-3 rounded transition-colors" style="font-family: 'Inter', sans-serif;">
                                View Source
                            </a>
                        </div>
                    </div>
                    
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <div class="relative rounded-2xl overflow-hidden bg-white/5 p-8 shadow-2xl border border-white/10 flex items-center justify-center">
                            <!-- Soft glow effect -->
                            <div class="absolute inset-0 bg-[#17a2b8] opacity-5 blur-3xl"></div>
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
                            <a href="#" class="inline-block bg-[#17a2b8] hover:bg-[#138496] text-white font-medium px-8 py-3 rounded transition-colors" style="font-family: 'Inter', sans-serif;">
                                Read More
                            </a>
                        </div>
                    </div>
                    
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-white/10">
                            <!-- Soft glow effect -->
                            <div class="absolute inset-0 bg-[#17a2b8] opacity-5 blur-3xl"></div>
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
                        <div>
                            <a href="#" class="inline-block bg-[#17a2b8] hover:bg-[#138496] text-white font-medium px-8 py-3 rounded transition-colors" style="font-family: 'Inter', sans-serif;">
                                Read More
                            </a>
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
                            <a href="#" class="inline-block bg-[#17a2b8] hover:bg-[#138496] text-white font-medium px-8 py-3 rounded transition-colors" style="font-family: 'Inter', sans-serif;">
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
                    <p class="text-black text-lg md:text-xl italic leading-relaxed text-center" style="font-family: 'Inter', sans-serif;">
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