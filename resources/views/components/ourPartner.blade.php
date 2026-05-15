<!-- Our Partners Component -->
<style>
    @keyframes infinite-scroll {
        from { transform: translateX(0); }
        to { transform: translateX(calc(-100% - 1.5rem)); } /* 1.5rem matches the gap-6 class */
    }
    .animate-infinite-scroll {
        animation: infinite-scroll 35s linear infinite;
    }
    /* I-pause ang animation kapag nai-hover ng mouse ang carousel para makita ng maayos ang logo */
    .pause-animation:hover .animate-infinite-scroll {
        animation-play-state: paused;
    }
</style>

<section class="py-10 px-4 sm:px-6 lg:px-8 relative overflow-hidden flex justify-center" style="background: #000000;">
    <div class="w-full max-w-[1400px] relative z-10 mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl sm:text-5xl font-bold text-white mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                Our Partners
            </h2>
            <p class="text-gray-300 text-lg max-w-3xl mx-auto">
                Trusted by leading organizations and institutions in the real estate industry
            </p>
        </div>
        
        <!-- Infinite Smooth CSS Marquee Slideshow -->
        <div class="relative flex overflow-hidden pause-animation rounded-2xl">
            
            <!-- Pinagandang Left Fade Effect -->
            <div class="absolute left-0 top-0 bottom-0 w-28 md:w-48 lg:w-72 z-20 pointer-events-none" 
                 style="background: linear-gradient(to right, #000000 10%, rgba(0,0,0,0.8) 40%, transparent 100%);">
            </div>
            
            <!-- Pinagandang Right Fade Effect -->
            <div class="absolute right-0 top-0 bottom-0 w-28 md:w-48 lg:w-72 z-20 pointer-events-none" 
                 style="background: linear-gradient(to left, #000000 10%, rgba(0,0,0,0.8) 40%, transparent 100%);">
            </div>
            
            @php
                $partners = [
                    asset('img/logo/TDBank.webp'),
                    asset('img/logo/cardinal.webp'),
                    asset('img/logo/credco.webp'),
                    asset('img/logo/entrustGroup.webp'),
                    asset('img/logo/krissLaw.webp'),
                    asset('img/logo/richerValues.webp'),
                    asset('img/logo/rkf.webp'),
                    asset('img/logo/rocketMorgage.webp'),
                    asset('img/logo/valley.webp'),
                    asset('img/logo/xome.webp'),
                ];
            @endphp

            <!-- Scrolling Content Container -->
            <div class="flex gap-6 z-10">
                <!-- First Set ng Logos -->
                <div class="flex gap-6 shrink-0 animate-infinite-scroll items-center">
                    @foreach($partners as $img)
                        <div class="w-[160px] md:w-[220px] lg:w-[280px] h-[100px] md:h-[130px] lg:h-[160px] rounded-xl overflow-hidden flex-shrink-0 flex items-center justify-center bg-white shadow-xl transition-transform hover:scale-105 duration-300 cursor-pointer border border-gray-100">
                            <img src="{{ $img }}" alt="Partner Logo" class="w-full h-full object-contain object-center p-3 md:p-4">
                        </div>
                    @endforeach
                </div>
                
                <!-- Second Set (Klon para sa walang patid/seamless na pag-loop) -->
                <div class="flex gap-6 shrink-0 animate-infinite-scroll items-center" aria-hidden="true">
                    @foreach($partners as $img)
                        <div class="w-[160px] md:w-[220px] lg:w-[280px] h-[100px] md:h-[130px] lg:h-[160px] rounded-xl overflow-hidden flex-shrink-0 flex items-center justify-center bg-white shadow-xl transition-transform hover:scale-105 duration-300 cursor-pointer border border-gray-100">
                            <img src="{{ $img }}" alt="Partner Logo" class="w-full h-full object-contain object-center p-3 md:p-4">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>