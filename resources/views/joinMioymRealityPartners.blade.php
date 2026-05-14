<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join MIOYM Realty Partners | Real Estate Agent Careers</title>
    <meta name="description" content="Start a rewarding real estate career with MIOYM Realty Partners. We offer quality leads, comprehensive support, and growth opportunities for dedicated agents. Apply today!">
    <meta name="keywords" content="Real Estate Agent Career, Join MIOYM Realty Partners, Real Estate Jobs, Real Estate Leads, Institutional Real Estate Careers">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
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
    </style>
</head>
<body>
    @include('components.navigationHeader')
    
    <!-- Main Content -->
    <main class="pt-16 lg:pt-20">
        <!-- Hero Section -->
        <section class="py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden min-h-[300px] flex items-center justify-center">
            <div class="absolute inset-0" style="background-image: url('{{ asset('img/bgAboutUs.png') }}'); background-size: cover; background-position: center;"></div>
            <div class="max-w-7xl mx-auto text-center relative z-10">
                <h1 class="uppercase text-4xl sm:text-5xl lg:text-6xl font-bold text-white tracking-wider" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                    JOIN MIOYM REALTY PARTNERS
                </h1>
            </div>
        </section>

        <img src="{{ asset('img/mioymrealtypartnerbg1.png') }}" alt="MIOYM Realty Partners Abstract Background Design" class="absolute lg:top-[70%] lg:left-[-20%] w-64 md:w-96 lg:w-[1000px] object-contain opacity-50 z-9999 pointer-events-none">

        <!-- New Section -->
        <section class="py-10 px-10 overflow-hidden">
            <div class="max-w-6xl mx-auto relative">
                <!-- Top Description Box -->
                <div class="bg-[#242424] rounded-xl border border-gray-700/50 p-6 md:p-8 mb-16 shadow-lg">
                    <p class="text-gray-200 text-semibold lg:text-justify text-md lg:text-2xl md:text-xl leading-relaxed text-left" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                        Discover the benefits of being part of Mioym Realty Partners. We offer a range of services to support our team, ensuring success and growth in the real estate industry. We provide leads.
                    </p>
                </div>

                <!-- Content Grid with Image and Text -->
                <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-16">
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <div class="rounded-xl overflow-hidden shadow-2xl">
                            <img src="{{ asset('img/mioymrealtypartnerimg1.png') }}" alt="Agents collaborating and smiling together" class="w-full h-auto object-cover">
                        </div>
                    </div>

                    <!-- Text Content -->
                    <div class="w-full lg:w-1/2">
                        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            Agents who Shine
                        </h2>
                        <p class="text-gray-300 text-base md:text-lg leading-relaxed text-justify" style="font-family: 'Inter', sans-serif;">
                            We're looking for dedicated, reliable agents who communicate well and take pride in helping families secure stable housing. Experience with voucher programs is a major plus, as our clients depend on agents who understand CityFHEPS, FHEPS, Section 8, SOTA, and similar programs. If you're professional, motivated, and ready to grow, you'll be a great fit for our team!
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Become an Agent Section -->
        <section class="py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
            <!-- Background Decorative Images -->
            <img src="{{ asset('img/mioymrealtypartnersbg2.png') }}" alt="MIOYM Real Estate Agent Career Abstract Background" class="absolute bottom-[-80%] right-[-30%] w-64 md:w-96 lg:w-[1200px] object-contain opacity-50 z-0 pointer-events-none">

            <div class="max-w-6xl mx-auto relative z-10">
                <div class="flex flex-col lg:flex-row  gap-12 lg:gap-20">
                    
                    <!-- Left Content -->
                    <div class="w-full lg:w-1/2 space-y-6">
                        <h2 class="lg:text-6xl sm:text-5xl font-bold text-white leading-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            Become an<br>Agent in MIOYM
                        </h2>
                        <p class="lg:text-xl sm:text-2xl text-gray-200 leading-relaxed font-light" style="font-family: 'Inter', sans-serif;">
                            Start a rewarding career<br>where your growth and<br>success matter.
                        </p>
                    </div>

                    <!-- Right Form -->
                    <div class="w-full lg:w-1/2">
                        <div class="bg-[#5c5655]/30 backdrop-blur-xl rounded-[20px] p-8 md:p-10 shadow-2xl relative z-10 border border-white/20">
                            <form action="#" method="POST" class="space-y-6" id="joinMioymForm">
                                @csrf
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                    <div class="space-y-2">
                                        <label for="first_name" class="block text-sm text-gray-200" style="font-family: 'Inter', sans-serif;">First Name:</label>
                                        <input type="text" id="first_name" name="first_name" placeholder="John" required class="w-full bg-transparent border border-white/30 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-white transition-colors">
                                    </div>
                                    <div class="space-y-2">
                                        <label for="last_name" class="block text-sm text-gray-200" style="font-family: 'Inter', sans-serif;">Last Name:</label>
                                        <input type="text" id="last_name" name="last_name" placeholder="Doe" required class="w-full bg-transparent border border-white/30 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-white transition-colors">
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <label for="email" class="block text-sm text-gray-200" style="font-family: 'Inter', sans-serif;">Email:</label>
                                    <input type="email" id="email" name="email" placeholder="johndoe@example.com" required class="w-full bg-transparent border border-white/30 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-white transition-colors">
                                </div>

                                <div class="space-y-2">
                                    <label for="phone" class="block text-sm text-gray-200" style="font-family: 'Inter', sans-serif;">Phone:</label>
                                    <input type="tel" id="phone" name="phone" required 
                                           placeholder="(XXX) XXX-XXXX" 
                                           pattern="\(\d{3}\) \d{3}-\d{4}" 
                                           maxlength="14"
                                           oninput="let x = this.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/); this.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');"
                                           title="Please enter a valid US phone number: (XXX) XXX-XXXX"
                                           class="w-full bg-transparent border border-white/30 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-white transition-colors">
                                </div>

                                <div class="space-y-2">
                                    <label for="cover_letter" class="block text-sm text-gray-200" style="font-family: 'Inter', sans-serif;">Cover Letter:(optional)</label>
                                    <textarea id="cover_letter" name="cover_letter" rows="4" placeholder="Add any additional information or context here..." class="w-full bg-transparent border border-white/30 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-white transition-colors resize-none"></textarea>
                                </div>

                                <!-- Google reCAPTCHA -->
                                <div class="pt-2 flex justify-center sm:justify-start">
                                    <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY', 'your-site-key-here') }}"></div>
                                </div>

                                <div class="pt-4 flex justify-center">
                                    <button type="submit" id="submitBtnJoin" class="bg-[#3e2c2b] hover:bg-[#2c1f1e] text-white font-semibold uppercase tracking-wide px-8 py-3.5 rounded-lg transition-colors duration-300 w-full sm:w-auto min-w-[200px] disabled:opacity-50 disabled:cursor-not-allowed" style="font-family: 'Inter', sans-serif;">
                                        SEND MESSAGE
                                    </button>
                                </div>
                            </form>

                            <!-- Form Scripts: reCAPTCHA & Rate Limiter -->
                            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                            <script>
                                document.getElementById('joinMioymForm').addEventListener('submit', function(e) {
                                    const btn = document.getElementById('submitBtnJoin');
                                    
                                    // Rate Limiting (Prevent Double Submission)
                                    if (btn.disabled) {
                                        e.preventDefault();
                                        return;
                                    }
                                    
                                    // Validate reCAPTCHA
                                    const recaptchaResponse = grecaptcha.getResponse();
                                    if(recaptchaResponse.length === 0) {
                                        e.preventDefault();
                                        alert('Please complete the reCAPTCHA verification before submitting.');
                                        return;
                                    }

                                    // Disable button & change text
                                    btn.disabled = true;
                                    btn.innerHTML = 'SENDING...';
                                    
                                    // Re-enable after 5 seconds just in case validation fails server-side
                                    setTimeout(() => {
                                        btn.disabled = false;
                                        btn.innerHTML = 'SEND MESSAGE';
                                    }, 5000);
                                });
                            </script>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    @include('components.footer')
</body>
</html>