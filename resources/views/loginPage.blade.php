<!DOCTYPE html>
<html lang="en" class="antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Secure Login to MIOYM Portal">
    <title>Sign In | MIOYM</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <link rel="icon" type="image/png" href="{{ asset('img/logo.webp') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .input-transition { transition: all 0.2s ease; }
        .fade-in { animation: fadeIn 0.6s ease-out forwards; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateX(-10px); }
            to { opacity: 1; transform: translateX(0); }
        }
    </style>
    <script>
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.classList.add('dark');
        }
    </script>
</head>
<body class="min-h-screen flex bg-white text-gray-900 transition-colors duration-300">
    
    <x-skeleton type="login" />

    <!-- Left Column: Form -->
    <main class="w-full md:w-1/2 lg:w-[45%] flex flex-col min-h-screen px-6 py-8 md:px-12 lg:px-16 xl:px-24 relative z-10 fade-in bg-white">
        
        <!-- Top Nav (Back & Register) -->
        <header class="flex justify-between items-center w-full">
            <a href="{{ route('landing') ?? '/' }}" class="p-2 -ml-2 text-gray-500 hover:text-gray-900 rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500" aria-label="Go back to landing page">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <a href="#" class="text-sm font-bold text-gray-600 hover:text-gray-900 transition-colors focus:outline-none focus:underline">
                Register
            </a>
        </header>

        <!-- Form Container -->
        <div class="flex-grow flex flex-col justify-center max-w-md w-full mx-auto">
            
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Welcome back!</h1>
            <p class="text-sm text-gray-500 mb-10 leading-relaxed pr-4">
                Please enter your email and password to sign in to your account.
            </p>

            <!-- Session Status -->
            @if (session('status'))
                <div role="alert" aria-live="polite" class="mb-6 p-4 bg-green-50 text-green-700 text-sm rounded-lg flex items-center">
                    <svg class="w-5 h-5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') ?? '/login' }}" id="loginForm" novalidate>
                @csrf

                <!-- Email Input -->
                <div class="mb-5">
                    <label for="email" class=" text-gray-900">Email</label>
                    <input 
                        type="email" 
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        autocomplete="username"
                        placeholder="Type your email"
                        aria-invalid="{{ $errors->has('email') ? 'true' : 'false' }}"
                        aria-describedby="email-error"
                        class="input-transition block w-full px-5 py-4 bg-white border border-gray-300 rounded-md text-gray-900 placeholder-gray-400 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 sm:text-sm @error('email') border-red-500 focus:ring-red-500 @enderror"
                    >
                    @error('email')
                        <p class="mt-2 text-sm text-red-600 flex items-center" id="email-error" role="alert">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                            {{ $message }}
                        </p>
                    @enderror
                    <p class="mt-2 text-sm text-red-600 hidden flex items-center" id="client-email-error" role="alert">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        Please enter a valid email address.
                    </p>
                </div>

                <!-- Password Input -->
                <div class="mb-3">
                    <label for="password" class="mb-2 block text-gray-900">Password</label>
                    <div class="relative">
                        <input 
                            type="password" 
                            id="password"
                            name="password"
                            required
                            autocomplete="current-password"
                            placeholder="Type your password"
                            aria-invalid="{{ $errors->has('password') ? 'true' : 'false' }}"
                            aria-describedby="password-error"
                            class="input-transition block w-full px-5 py-4 bg-white border border-gray-300 rounded-md text-gray-900 placeholder-gray-400 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 sm:text-sm pr-12 @error('password') border-red-500 focus:ring-red-500 @enderror"
                        >
                        <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-gray-600 focus:outline-none focus:text-blue-500" aria-label="Toggle password visibility">
                            <!-- Eye Icon -->
                            <svg id="eyeIcon" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <!-- Eye Slash -->
                            <svg id="eyeSlashIcon" class="h-5 w-5 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                            </svg>
                        </button>
                    </div>
                </div>
                @error('password')
                    <p class="mt-2 text-sm text-red-600 flex items-center mb-2" id="password-error" role="alert">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        {{ $message }}
                    </p>
                @enderror

                <!-- Forgot Password Link -->
                <div class="flex justify-end mb-8">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm font-semibold text-gray-600 hover:text-gray-900 transition-colors focus:outline-none focus:underline">
                            Forgot your password?
                        </a>
                    @endif
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    id="submitBtn"
                    class="w-full flex justify-center py-4 px-4 border border-transparent text-sm font-bold rounded-full text-white bg-[#4a9b9c] hover:bg-[#3d8283] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#4a9b9c] transition-all duration-200 shadow-lg shadow-[#4a9b9c]/30 disabled:opacity-70 disabled:cursor-not-allowed"
                >
                    Login Now
                </button>
            </form>
        </div>
    </main>

    <!-- Right Column: Real Estate Image Showcase -->
    <aside class="hidden md:block md:w-1/2 lg:w-[55%] relative bg-gray-900 overflow-hidden">
        <!-- High-quality luxury real estate background -->
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80');"></div>
        
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent"></div>
        
        <!-- Showcase Content -->
        <div class="absolute bottom-20 left-16 right-16 pr-12 fade-in" style="animation-delay: 0.2s; opacity: 0;">
            <div class="w-12 h-[3px] bg-white mb-6 opacity-80 rounded-full"></div>
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4 leading-tight tracking-tight">Start your journey now</h2>
            <p class="text-gray-200 text-lg leading-relaxed max-w-lg">
                Discover premium real estate investment opportunities with MIOYM. Login to your account to explore and manage your distressed asset equity portfolio.
            </p>
        </div>
    </aside>

    <!-- Client-Side Interactions Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Password Visibility Toggle Logic
            const togglePasswordBtn = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            const eyeSlashIcon = document.getElementById('eyeSlashIcon');

            if (togglePasswordBtn && passwordInput) {
                togglePasswordBtn.addEventListener('click', () => {
                    const isPassword = passwordInput.type === 'password';
                    passwordInput.type = isPassword ? 'text' : 'password';
                    eyeIcon.classList.toggle('hidden', isPassword);
                    eyeSlashIcon.classList.toggle('hidden', !isPassword);
                    togglePasswordBtn.setAttribute('aria-label', isPassword ? 'Hide password' : 'Show password');
                });
            }

            // Real-time Client-Side Validation Logic
            const emailInput = document.getElementById('email');
            const clientEmailError = document.getElementById('client-email-error');
            const loginForm = document.getElementById('loginForm');
            const submitBtn = document.getElementById('submitBtn');

            const validateEmail = (email) => {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(String(email).toLowerCase());
            };

            if (emailInput && clientEmailError) {
                emailInput.addEventListener('input', () => {
                    emailInput.classList.remove('border-red-500', 'dark:border-red-500', 'focus:ring-red-500');
                    const serverError = document.getElementById('email-error');
                    if (serverError) serverError.style.display = 'none';

                    if (emailInput.value.trim() === '') {
                        clientEmailError.classList.add('hidden');
                        emailInput.setAttribute('aria-invalid', 'false');
                        submitBtn.disabled = false;
                        return;
                    }

                    if (!validateEmail(emailInput.value)) {
                        clientEmailError.classList.remove('hidden');
                        emailInput.classList.add('border-red-500', 'dark:border-red-500', 'focus:ring-red-500');
                        emailInput.setAttribute('aria-invalid', 'true');
                        submitBtn.disabled = true;
                    } else {
                        clientEmailError.classList.add('hidden');
                        emailInput.classList.remove('border-red-500', 'dark:border-red-500', 'focus:ring-red-500');
                        emailInput.setAttribute('aria-invalid', 'false');
                        submitBtn.disabled = false;
                    }
                });
            }
            
            if (loginForm) {
                loginForm.addEventListener('submit', (e) => {
                    if (emailInput && emailInput.value && !validateEmail(emailInput.value)) {
                        e.preventDefault();
                        emailInput.focus();
                    }
                });
            }
        });
    </script>

    @livewireScripts
</body>
</html>

