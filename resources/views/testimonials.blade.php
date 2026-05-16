<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials | MIOYM Equities</title>
    <meta name="description" content="Read what our clients and partners have to say about MIOYM Equities and our real estate investment strategies.">
    <meta name="keywords" content="Testimonials, MIOYM Equities, Real Estate Investment, Client Reviews, Success Stories">
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
                    TESTIMONIALS
                </h1>
            </div>
        </section>
        
        <!-- Testimonials Section -->
        <section class="py-20 px-4 sm:px-6 lg:px-8 relative bg-[#151515]" x-data="{
            currentSlide: 0,
            slides: [
                {
                    investor: {
                        title: 'A VERY HAPPY INVESTOR',
                        content: 'I was introduced to MIOYM a few months ago. Initially, I found it hard to believe that I could achieve a 17.5% annual return on my investment within 12 months, especially in today\'s volatile market. Jeff guided me through the entire process, making it a straightforward decision. Knowing that my investment was backed by actual property and that the company consistently delivered 100% to its investors sealed the deal for me. Like 98% of MIOYM\'s investors before me, I plan to reinvest my capital and returns.',
                        author: 'Rob Winters'
                    },
                    homeowner: {
                        title: 'HOMEOWNER',
                        content: 'We are delighted with our new home. Thanks so much, guys, for the help. With our first home',
                        author: 'Marlyene Alves Araujo'
                    }
                },
                {
                    investor: {
                        title: 'INVESTOR THRU THE YEARS',
                        content: 'I have known Marc Cox for over eight years. I initially met Marc when he handled every aspect of a distressed home development. Marc\'s presentation was impressive in every aspect. He spoke persuasively with presentation materials. Marc does his homework with detailed data to support every investment opportunity. Marc was always straightforward and would always pivot to the realities of the current market conditions. Since Marc always knew the basics, he possessed the knowledge to maximize the return on our investments and pivot when necessary. He understood buying cleverly, managing construction, and delivering stated returns on every investment. Our group will continue to work with Marc as he pursues new ventures. Marc is a total go-getter, and his integrity is beyond approach.',
                        author: 'Respectfully Armitell'
                    },
                    homeowner: {
                        title: 'HOMEOWNER',
                        content: 'Marc and Diaisha, thanks for all your help getting us into our new home. It wouldn\'t have been possible without you. There were a few road bumps along the way, but somehow, Marc managed to keep things going forward when others turned us away. We couldn\'t be more appreciative. We will always be your best friends from Troy, NY, and we recommend your services to anyone looking for a home to call their own.',
                        author: 'David Miller'
                    }
                },
                {
                    investor: {
                        title: 'INVESTOR',
                        content: 'In today\'s ever-changing economy, deciding how to invest for your future can be overwhelming. What to believe, who to trust, and how does it work were questions I asked myself. This was my future and my parent\'s hard-earned wages that I was entrusting to MIOYM. They provided an overview of their investment strategy in a no-pressure conversation. They encouraged questions and welcomed my taking the contract for legal review. I know it seems too good to have a dependable, high-rate return annually, but I am living proof! Along the way, MIOYM\'s account managers provided regular updates on my investment and answered my concerns in real time. Real estate investment remains one of the safest and most lucrative strategies for growing your personal wealth story.',
                        author: 'Lorrie, Cincinnati, OH'
                    },
                    homeowner: {
                        title: 'HOMEOWNER',
                        content: 'I took a leap of faith three years ago today and entrusted Marc Cox and his team to make our dreams come true. He has since become my brother for all eternity and after. We fought, bickered, and fought some more, but he kept his word and helped us get a home. Today, we are so grateful to this angel of ours and love him deeply!!! All the struggles, losses, pain, sweat, and tears were worth what we have today. Our Home!! We love you, Guardian Angel, and forever will. Here\'s to more years of memories in our humble home.',
                        author: 'Jennifer Silva'
                    }
                },
                {
                    investor: {
                        title: 'INVESTOR',
                        content: 'Utilizing my IRA funds for investment became a reality, thanks to the expert guidance provided by the MIYOM Equities team through the Entrust platform. The entire process unfolded smoothly and effortlessly. I take immense satisfaction in both contributing to the creation of new homes and enjoying returns that exceed the market average.',
                        author: 'Rachel Goodman'
                    },
                    homeowner: {
                        title: 'HOMEOWNER',
                        content: 'My experience with MIOYM was THE BEST! With everybody involved, Marc Cox and Regina Jones were the most helpful in every way. Everyone went above and beyond the call of duty. My wife and I entered a RENT TO BUY program. Our credit could have been better, so they had a credit repair guy named Alex, who was very helpful. However, there were many bumps in the road that were our own fault. Marc and Regina could\'ve dropped us at any point during our program, but they didn\'t. THEY BUSTED THEMSELVES TO GET US THE HOUSE!!!!! We are forever grateful and will NEVER forget what they did for us. YOU ARE THE BEST!!!!!',
                        author: 'Anthony Jacobs'
                    }
                },
                {
                    investor: {
                        title: 'INVESTOR',
                        content: 'I was filled with a sense of both enthusiasm and awe when I embarked on my investment journey with MIOYM. Right from the very beginning, I was warmly introduced to my property located in Pittsburgh. It was an incredible experience as I was taken through the process of rehabilitating a new home, making me feel like a true contributor to its development.\n\nIn just 12 months, I not only received my initial capital back but also enjoyed a satisfying annual return on my investment. What made this investment even more special was knowing that I was actively contributing to the creation of a new community for a deserving homeowner. MIOYM is not just a secure investment option; it\'s an investment with a compassionate heart at its core.',
                        author: 'Carol Lerner'
                    },
                    homeowner: {
                        title: 'HOMEOWNER',
                        content: 'We are delighted with our new home. Thanks so much, guys, for the help. With our first home',
                        author: 'Marlyene Alves Araujo'
                    }
                }
            ],
            next() {
                this.currentSlide = (this.currentSlide + 1) % this.slides.length;
            },
            prev() {
                this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
            },
            init() {
                setInterval(() => {
                    this.next();
                }, 8000);
            }
        }">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold text-white text-center mb-16" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                    What They're Saying About MIOYM
                </h2>
                
                <div class="relative min-h-[600px] lg:min-h-[500px]">
                    <template x-for="(slide, index) in slides" :key="index">
                        <div x-show="currentSlide === index"
                             x-transition:enter="transition ease-out duration-700"
                             x-transition:enter-start="opacity-0 translate-x-8"
                             x-transition:enter-end="opacity-100 translate-x-0"
                             x-transition:leave="transition ease-in duration-500 absolute top-0 left-0 w-full"
                             x-transition:leave-start="opacity-100 translate-x-0"
                             x-transition:leave-end="opacity-0 -translate-x-8"
                             class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 w-full">
                             
                            <!-- Investor Card -->
                            <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-8 md:p-10 relative shadow-[0_8px_32px_0_rgba(0,0,0,0.36)] flex flex-col h-full overflow-hidden group hover:bg-white/15 transition-all duration-300">
                                <!-- Subtle Gradient Background inside card -->
                                <div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent pointer-events-none"></div>
                                
                                <!-- Background Design -->
                                <div class="absolute bottom-0 right-0 opacity-20 pointer-events-none transform group-hover:scale-110 transition-transform duration-500">
                                    <svg width="300" height="200" viewBox="0 0 300 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 200C50 150 150 150 200 100C250 50 280 20 300 0V200H0Z" fill="url(#grad1)"/>
                                        <path d="M50 200C100 160 180 160 230 120C270 80 290 50 300 30V200H50Z" fill="url(#grad2)"/>
                                        <defs>
                                            <linearGradient id="grad1" x1="0%" y1="100%" x2="100%" y2="0%">
                                                <stop offset="0%" stop-color="rgba(255,255,255,0.1)" />
                                                <stop offset="100%" stop-color="rgba(255,255,255,0)" />
                                            </linearGradient>
                                            <linearGradient id="grad2" x1="0%" y1="100%" x2="100%" y2="0%">
                                                <stop offset="0%" stop-color="rgba(255,255,255,0.05)" />
                                                <stop offset="100%" stop-color="rgba(255,255,255,0)" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                
                                <!-- Quote Icon -->
                                <div class="absolute top-8 right-8 text-white/20">
                                    <i class="fa-solid fa-quote-right text-5xl"></i>
                                </div>
                                
                                <!-- Stars -->
                                <div class="flex text-yellow-400 text-sm mb-6 gap-1 drop-shadow-md">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                
                                <h3 class="text-xl font-bold text-white mb-6 uppercase tracking-wider" style="font-family: 'Plus Jakarta Sans', sans-serif;" x-text="slide.investor.title"></h3>
                                
                                <div class="text-gray-200 leading-relaxed mb-12 flex-grow whitespace-pre-wrap relative z-10 font-light" style="font-family: 'Inter', sans-serif;" x-text="slide.investor.content"></div>
                                
                                <div class="mt-auto pt-6 border-t border-white/20 relative z-10">
                                    <p class="text-xl font-medium text-white tracking-wide" style="font-family: 'Plus Jakarta Sans', sans-serif;" x-text="slide.investor.author"></p>
                                </div>
                            </div>

                            <!-- Homeowner Card -->
                            <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-8 md:p-10 relative shadow-[0_8px_32px_0_rgba(0,0,0,0.36)] flex flex-col h-full overflow-hidden group hover:bg-white/15 transition-all duration-300">
                                <!-- Subtle Gradient Background inside card -->
                                <div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent pointer-events-none"></div>
                                
                                <!-- Background Design -->
                                <div class="absolute bottom-0 right-0 opacity-20 pointer-events-none transform group-hover:scale-110 transition-transform duration-500">
                                    <svg width="300" height="200" viewBox="0 0 300 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 200C50 150 150 150 200 100C250 50 280 20 300 0V200H0Z" fill="url(#grad3)"/>
                                        <path d="M50 200C100 160 180 160 230 120C270 80 290 50 300 30V200H50Z" fill="url(#grad4)"/>
                                        <defs>
                                            <linearGradient id="grad3" x1="0%" y1="100%" x2="100%" y2="0%">
                                                <stop offset="0%" stop-color="rgba(255,255,255,0.1)" />
                                                <stop offset="100%" stop-color="rgba(255,255,255,0)" />
                                            </linearGradient>
                                            <linearGradient id="grad4" x1="0%" y1="100%" x2="100%" y2="0%">
                                                <stop offset="0%" stop-color="rgba(255,255,255,0.05)" />
                                                <stop offset="100%" stop-color="rgba(255,255,255,0)" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                
                                <!-- Quote Icon -->
                                <div class="absolute top-8 right-8 text-white/20">
                                    <i class="fa-solid fa-quote-right text-5xl"></i>
                                </div>
                                
                                <!-- Stars -->
                                <div class="flex text-yellow-400 text-sm mb-6 gap-1 drop-shadow-md">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                
                                <h3 class="text-xl font-bold text-white mb-6 uppercase tracking-wider" style="font-family: 'Plus Jakarta Sans', sans-serif;" x-text="slide.homeowner.title"></h3>
                                
                                <div class="text-gray-200 leading-relaxed mb-12 flex-grow whitespace-pre-wrap relative z-10 font-light" style="font-family: 'Inter', sans-serif;" x-text="slide.homeowner.content"></div>
                                
                                <div class="mt-auto pt-6 border-t border-white/20 relative z-10">
                                    <p class="text-xl font-medium text-white tracking-wide" style="font-family: 'Plus Jakarta Sans', sans-serif;" x-text="slide.homeowner.author"></p>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
                
                <!-- Pagination Dots -->
                <div class="flex justify-center gap-3 mt-12">
                    <template x-for="(slide, index) in slides" :key="index">
                        <button @click="currentSlide = index"
                                class="w-3 h-3 rounded-full transition-all duration-300"
                                :class="currentSlide === index ? 'bg-[#ffffff] w-8' : 'bg-gray-500 hover:bg-gray-400'"
                                :aria-label="'Go to slide ' + (index + 1)"></button>
                    </template>
                </div>
            </div>
        </section>
    </main>

    @include('components.footer')
</body>
</html>