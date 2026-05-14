<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voucher Assistance Program | MIOYM Equities</title>
    <meta name="description" content="Learn more about our Voucher Assistance Program and how we help families secure stable housing.">
    <meta name="keywords" content="Voucher Assistance Program, MIOYM Equities, Real Estate, Housing Assistance">
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
                    VOUCHER ASSISTANCE PROGRAM
                </h1>
            </div>
        </section>

        <!-- About Us Section -->
        <section class="py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden bg-[#151515]">
            <div class="max-w-7xl mx-auto relative z-10">
                <!-- Flex Container for Layout -->
                <div class="flex flex-col lg:flex-row items-center">
                    
                    <!-- Left: Image Box -->
                    <div class="w-full lg:w-5/12 z-20 mb-8 lg:mb-0 lg:-mr-12">
                        <div class="overflow-hidden shadow-2xl relative">
                            <img src="{{ asset('img/voucherAssistimg1.png') }}" alt="MIOYM Team Assisting Clients with Vouchers" class="w-full h-auto object-cover">
                        </div>
                    </div>

                    <!-- Right: Text Content inside a bordered box -->
                    <div class="w-full lg:w-8/12 border border-white/20 p-8 md:p-12 lg:pl-20 relative z-10" style="background-color: transparent;">
                        <h2 class="text-4xl md:text-5xl font-bold text-white mb-8" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            ABOUT US
                        </h2>
                        
                        <div class="space-y-6">
                            <p class="text-gray-200 text-lg md:text-xl font-light leading-relaxed" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                We connect individuals and families experiencing homelessness with safe, stable housing.
                            </p>
                            
                            <p class="text-gray-200 text-lg md:text-xl font-light leading-relaxed" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                Our team supports clients with vouchers by helping them find suitable units, coordinating with landlords, and meeting housing agency requirements.
                            </p>

                            <p class="text-gray-200 text-lg md:text-xl font-light leading-relaxed" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                We assist with CityFHEPS, FHEPS, Section 8, SOTA, and more—making the housing process smoother and more accessible for every client.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- The Difference we Bring Section -->
        <section class="py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden bg-[#1c1c1c]">
            <div class="max-w-7xl mx-auto relative z-10">
                <!-- Main Heading -->
                <div class="text-center mb-16 lg:mb-24">
                    <h2 class="text-4xl md:text-5xl font-bold text-white" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                        The Difference we Bring
                    </h2>
                </div>

                <!-- Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
                    
                    <!-- Card 1 -->
                    <div class="lg:mt-16 bg-gradient-to-b from-[#4a4444] to-[#2a2a2a] rounded-2xl p-8 shadow-2xl border border-white/5 flex flex-col items-center text-center">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-6 shadow-inner">
                            <i class="fas fa-hand-holding-heart text-[#2a2a2a] text-3xl"></i>
                        </div>
                        <h3 class="text-white text-xl font-bold mb-4 leading-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            Specialized Support for Voucher Holders
                        </h3>
                        <p class="text-gray-300 text-sm leading-relaxed" style="font-family: 'Inter', sans-serif;">
                            We focus exclusively on clients using CityFHEPS, FHEPS, Section 8, SOTA, and similar vouchers—offering expertise in requirements, documentation, and program guidelines that most realty don't provide.
                        </p>
                    </div>

                    <!-- Card 2 (Higher than 1 & 3) -->
                    <div class="bg-gradient-to-b from-[#4a4444] to-[#2a2a2a] rounded-2xl p-8 shadow-2xl border border-white/5 flex flex-col items-center text-center">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-6 shadow-inner">
                            <i class="fas fa-home-user text-[#2a2a2a] text-3xl"></i>
                        </div>
                        <h3 class="text-white text-xl font-bold mb-4 leading-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            Direct Coordination With Landlords and Housing Agencies
                        </h3>
                        <p class="text-gray-300 text-sm leading-relaxed" style="font-family: 'Inter', sans-serif;">
                            We bridge the communication gap by working directly with property owners, management companies, and housing agencies. This helps speed up approvals, resolve issues quickly, and make the entire process smoother for our clients.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div class="lg:mt-16 bg-gradient-to-b from-[#4a4444] to-[#2a2a2a] rounded-2xl p-8 shadow-2xl border border-white/5 flex flex-col items-center text-center">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-6 shadow-inner">
                            <i class="fas fa-handshake text-[#2a2a2a] text-3xl"></i>
                        </div>
                        <h3 class="text-white text-xl font-bold mb-4 leading-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            Compassion-Driven, Client-Centered Approach
                        </h3>
                        <p class="text-gray-200 text-sm leading-relaxed" style="font-family: 'Inter', sans-serif;">
                            Our service is designed specifically for individuals and families experiencing homelessness. We prioritize dignity, respect, and personalized guidance—ensuring every client feels supported from first contact to move-in.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <!-- Contact Form Section -->
        <section class="py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden bg-[#2a2a2a]">
            <div class="max-w-7xl mx-auto relative z-10">
                <div class="flex flex-col lg:flex-row gap-12 lg:gap-20">
                    
                    <!-- Left Content -->
                    <div class="w-full lg:w-5/12">
                        <p class="text-white text-lg md:text-xl lg:text-2xl leading-relaxed text-justify lg:text-left" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            We're here to help you find a safe, stable place to call home. If you are currently experiencing homelessness and have a housing voucher, please complete the form below. One of our dedicated housing agents will reach out to you as soon as possible to guide you through available apartment options and next steps.
                        </p>
                    </div>

                    <!-- Right Form -->
                    <div class="w-full lg:w-7/12">
                        <div class="bg-[#5c5655] rounded-[20px] p-8 md:p-10 shadow-2xl relative z-10 border border-white/5">
                            <form action="#" method="POST" class="space-y-6" id="voucherContactForm">
                                @csrf
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                    <div class="space-y-2">
                                        <label for="first_name_alt" class="block text-sm text-white" style="font-family: 'Inter', sans-serif;">First Name:</label>
                                        <input type="text" id="first_name_alt" name="first_name" placeholder="John" required class="w-full bg-[#d1d1d1] border-none rounded-xl px-4 py-3 text-[#2a2a2a] focus:ring-2 focus:ring-white/50 transition-all">
                                    </div>
                                    <div class="space-y-2">
                                        <label for="last_name_alt" class="block text-sm text-white" style="font-family: 'Inter', sans-serif;">Last Name:</label>
                                        <input type="text" id="last_name_alt" name="last_name" placeholder="Doe" required class="w-full bg-[#d1d1d1] border-none rounded-xl px-4 py-3 text-[#2a2a2a] focus:ring-2 focus:ring-white/50 transition-all">
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <label for="email_alt" class="block text-sm text-white" style="font-family: 'Inter', sans-serif;">Email:</label>
                                    <input type="email" id="email_alt" name="email" placeholder="johndoe@example.com" required class="w-full bg-[#d1d1d1] border-none rounded-xl px-4 py-3 text-[#2a2a2a] focus:ring-2 focus:ring-white/50 transition-all">
                                </div>

                                <div class="space-y-2">
                                    <label for="phone_alt" class="block text-sm text-white" style="font-family: 'Inter', sans-serif;">Phone:</label>
                                    <input type="tel" id="phone_alt" name="phone" required 
                                           placeholder="(XXX) XXX-XXXX" 
                                           pattern="\(\d{3}\) \d{3}-\d{4}" 
                                           maxlength="14"
                                           oninput="let x = this.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/); this.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');"
                                           title="Please enter a valid US phone number: (XXX) XXX-XXXX"
                                           class="w-full bg-[#d1d1d1] border-none rounded-xl px-4 py-3 text-[#2a2a2a] focus:ring-2 focus:ring-white/50 transition-all">
                                </div>

                                <div class="space-y-2">
                                    <label for="cover_letter_alt" class="block text-sm text-white" style="font-family: 'Inter', sans-serif;">Cover Letter: (optional)</label>
                                    <textarea id="cover_letter_alt" name="cover_letter" rows="4" placeholder="Add any additional information or context here..." class="w-full bg-[#d1d1d1] border-none rounded-xl px-4 py-3 text-[#2a2a2a] focus:ring-2 focus:ring-white/50 transition-all resize-none"></textarea>
                                </div>

                                <!-- Google reCAPTCHA -->
                                <div class="pt-2 flex justify-center sm:justify-start">
                                    <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY', 'your-site-key-here') }}"></div>
                                </div>

                                <div class="pt-4 flex justify-center">
                                    <button type="submit" id="submitBtn" class="bg-[#3e2c2b] hover:bg-[#2c1f1e] text-white font-semibold uppercase tracking-wide px-10 py-3.5 rounded-lg transition-colors duration-300 w-full sm:w-auto min-w-[220px] disabled:opacity-50 disabled:cursor-not-allowed" style="font-family: 'Inter', sans-serif;">
                                        SEND MESSAGE
                                    </button>
                                </div>
                            </form>

                            <!-- Form Scripts: reCAPTCHA & Rate Limiter -->
                            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                            <script>
                                document.getElementById('voucherContactForm').addEventListener('submit', function(e) {
                                    const btn = document.getElementById('submitBtn');
                                    
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
                            </script></div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    @include('components.footer')
</body>
</html>