<!-- Navigation Header -->
<nav x-data="{ mobileMenuOpen: false }" class="fixed top-0 left-0 right-0 z-50 bg-[#201B1B] border-b border-white/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">
            <!-- Logo -->
            <a href="/" class="flex-shrink-0">
                <span class="text-2xl font-bold text-white tracking-wider" style="font-family: 'Plus Jakarta Sans', sans-serif;">MIOYM</span>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center justify-center flex-1 px-8">
                <div class="flex items-center gap-6">
                    <!-- Home -->
                    <a href="{{ route('landingPage') }}" 
                       class="text-sm font-medium {{ request()->is('/') ? 'text-white border-b-2 border-white pb-1' : 'text-gray-300 hover:text-white' }} transition-colors duration-200"
                       style="font-family: 'Inter', sans-serif;">
                        Home
                    </a>
                    
                    <!-- The Firm Dropdown -->
                    <div x-data="{ open: false, leaveTimeout: null, clicked: false }" 
                         @mouseenter="clearTimeout(leaveTimeout); open = true" 
                         @mouseleave="if(!clicked) leaveTimeout = setTimeout(() => open = false, 150)" 
                         class="relative">
                        <span class="text-sm font-medium {{ request()->is('the-firm/*') ? 'text-white border-b-2 border-white pb-1' : 'text-gray-300 hover:text-white' }} transition-colors duration-200 flex items-center gap-1 cursor-pointer"
                              style="font-family: 'Inter', sans-serif;">
                            The Firm
                            <i class="fas fa-chevron-down text-xs transition-transform duration-200" :class="open ? 'rotate-180' : ''"></i>
                        </span>
                        <div x-show="open" 
                             @click="clicked = true; setTimeout(() => { clicked = false; open = false; }, 2000)"
                             x-transition
                             style="display: none;"
                             class="absolute top-full left-0 mt-2 w-48 bg-[#2a2424] rounded-lg shadow-xl border border-white/10 py-2">
                            <a href="{{ route('aboutUs') }}" class="block px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-colors" style="font-family: 'Inter', sans-serif;">About Us</a>
                            <a href="{{ route('team') }}" class="block px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-colors" style="font-family: 'Inter', sans-serif;">Team</a>
                            <a href="{{ route('investor') }}" class="block px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-colors" style="font-family: 'Inter', sans-serif;">Investors</a>
                        </div>
                    </div>
                    
                    <!-- Solutions Dropdown -->
                    <div x-data="{ open: false, leaveTimeout: null, clicked: false }" 
                         @mouseenter="clearTimeout(leaveTimeout); open = true" 
                         @mouseleave="if(!clicked) leaveTimeout = setTimeout(() => open = false, 150)" 
                         class="relative">
                        <span class="text-sm font-medium {{ request()->is('solutions/*') ? 'text-white border-b-2 border-white pb-1' : 'text-gray-300 hover:text-white' }} transition-colors duration-200 flex items-center gap-1 cursor-pointer"
                              style="font-family: 'Inter', sans-serif;">
                            Solutions
                            <i class="fas fa-chevron-down text-xs transition-transform duration-200" :class="open ? 'rotate-180' : ''"></i>
                        </span>
                        <div x-show="open" 
                             @click="clicked = true; setTimeout(() => { clicked = false; open = false; }, 2000)"
                             x-transition
                             style="display: none;"
                             class="absolute top-full left-0 mt-2 w-56 bg-[#2a2424] rounded-lg shadow-xl border border-white/10 py-2">
                            <a href="{{ route('singleFamilyResidential') }}" class="block px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-colors" style="font-family: 'Inter', sans-serif;">Single Family Residential</a>
                            <a href="https://deal-finder-lake.vercel.app/login" class="block px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-colors" style="font-family: 'Inter', sans-serif;">Deal Finder</a>
                            <a href="{{ route('process') }}" class="block px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-colors" style="font-family: 'Inter', sans-serif;">Process</a>
                            <a href="{{ route('commercialProperties') }}" class="block px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-colors" style="font-family: 'Inter', sans-serif;">Commercial Properties</a>
                            <a href="{{ route('mioymRealtyPartners') }}" class="block px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-colors" style="font-family: 'Inter', sans-serif;">MIOYM Reality Partners</a>
                        </div>
                    </div>
                    
                    <!-- Asset Management Dropdown -->
                    <div x-data="{ open: false, leaveTimeout: null, clicked: false }" 
                         @mouseenter="clearTimeout(leaveTimeout); open = true" 
                         @mouseleave="if(!clicked) leaveTimeout = setTimeout(() => open = false, 150)" 
                         class="relative">
                        <span class="text-sm font-medium {{ request()->is('asset-management/*') ? 'text-white border-b-2 border-white pb-1' : 'text-gray-300 hover:text-white' }} transition-colors duration-200 flex items-center gap-1 cursor-pointer"
                              style="font-family: 'Inter', sans-serif;">
                            Asset Management
                            <i class="fas fa-chevron-down text-xs transition-transform duration-200" :class="open ? 'rotate-180' : ''"></i>
                        </span>
                        <div x-show="open" 
                             @click="clicked = true; setTimeout(() => { clicked = false; open = false; }, 2000)"
                             x-transition
                             style="display: none;"
                             class="absolute top-full left-0 mt-2 w-56 bg-[#2a2424] rounded-lg shadow-xl border border-white/10 py-2">
                            <a href="{{ route('affordableHomeProgram') }}" class="block px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-colors" style="font-family: 'Inter', sans-serif;">Affordable Home Program</a>
                            <a href="{{ route('strategicPropertyPreservation') }}" class="block px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-colors" style="font-family: 'Inter', sans-serif;">Strategic Property Preservation</a>
                            <a href="{{ route('nationalForeclosurePrevention') }}" class="block px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-colors" style="font-family: 'Inter', sans-serif;">National Foreclosure Prevention</a>
                            <a href="https://cashforhomes.mioym.com/" class="block px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-colors" style="font-family: 'Inter', sans-serif;">Cash For Homes</a>
                        </div>
                    </div>
                    
                    <!-- Lending Dropdown -->
                    <div x-data="{ open: false, leaveTimeout: null, clicked: false }" 
                         @mouseenter="clearTimeout(leaveTimeout); open = true" 
                         @mouseleave="if(!clicked) leaveTimeout = setTimeout(() => open = false, 150)" 
                         class="relative">
                        <span class="text-sm font-medium text-gray-300 hover:text-white transition-colors duration-200 flex items-center gap-1 cursor-pointer"
                              style="font-family: 'Inter', sans-serif;">
                            Lending
                            <i class="fas fa-chevron-down text-xs transition-transform duration-200" :class="open ? 'rotate-180' : ''"></i>
                        </span>
                        <div x-show="open" 
                             @click="clicked = true; setTimeout(() => { clicked = false; open = false; }, 2000)"
                             x-transition
                             style="display: none;"
                             class="absolute top-full left-0 mt-2 w-52 bg-[#2a2424] rounded-lg shadow-xl border border-white/10 py-2">
                            <a href="https://mioymcommercialcapital.com/" class="block px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-colors" style="font-family: 'Inter', sans-serif;">MIOYM Commercial Capital</a>
                            <a href="{{ route('mioymJointVenture') }}" class="block px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-colors" style="font-family: 'Inter', sans-serif;">MIOYM Joint Venture</a>
                        </div>
                    </div>
                    
                    <!-- News Dropdown -->
                    <div x-data="{ open: false, leaveTimeout: null, clicked: false }" 
                         @mouseenter="clearTimeout(leaveTimeout); open = true" 
                         @mouseleave="if(!clicked) leaveTimeout = setTimeout(() => open = false, 150)" 
                         class="relative">
                        <span class="text-sm font-medium {{ request()->is('news/*') ? 'text-white border-b-2 border-white pb-1' : 'text-gray-300 hover:text-white' }} transition-colors duration-200 flex items-center gap-1 cursor-pointer"
                              style="font-family: 'Inter', sans-serif;">
                            News
                            <i class="fas fa-chevron-down text-xs transition-transform duration-200" :class="open ? 'rotate-180' : ''"></i>
                        </span>
                        <div x-show="open" 
                             @click="clicked = true; setTimeout(() => { clicked = false; open = false; }, 2000)"
                             x-transition
                             style="display: none;"
                             class="absolute top-full left-0 mt-2 w-40 bg-[#2a2424] rounded-lg shadow-xl border border-white/10 py-2">
                            <a href="{{ route('blogs') }}" class="block px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-colors" style="font-family: 'Inter', sans-serif;">Blogs</a>
                            <a href="{{ route('testimonials') }}" class="block px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-colors" style="font-family: 'Inter', sans-serif;">Testimonials</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Investor Portal Button -->
            <div class="hidden lg:block">
                <a href="https://mioym-equities-be48b.web.app/login" 
                   class="inline-flex items-center uppercase px-5 py-2.5 bg-[#524949] text-white text-sm font-semibold rounded-lg hover:text-black hover:bg-gray-100 transition-colors duration-200"
                   style="font-family: 'Plus Jakarta Sans', sans-serif;">
                    Investor Portal
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button type="button" 
                    class="lg:hidden p-2 text-gray-300 hover:text-white focus:outline-none"
                    @click="mobileMenuOpen = !mobileMenuOpen">
                <i class="fas fa-bars text-lg"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" 
         x-transition
         style="display: none;" 
         class="lg:hidden bg-[#201B1B] border-t border-white/5 shadow-2xl absolute w-full left-0">
        <div class="px-4 py-4 space-y-3">
            <a href="/" class="block text-base font-medium text-gray-300 hover:text-white transition-colors" style="font-family: 'Inter', sans-serif;">Home</a>
            
            <!-- Mobile The Firm -->
            <div x-data="{ open: false }" class="space-y-2">
                <button @click="open = !open" type="button" class="flex items-center justify-between w-full text-base font-medium text-gray-300 hover:text-white" style="font-family: 'Inter', sans-serif;">
                    The Firm
                    <svg class="w-4 h-4 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open" style="display: none;" class="pl-4 space-y-2">
                    <a href="{{ route('aboutUs') }}" class="block text-sm text-gray-400 hover:text-white transition-colors" style="font-family: 'Inter', sans-serif;">About Us</a>
                    <a href="{{ route('team') }}" class="block text-sm text-gray-400 hover:text-white transition-colors" style="font-family: 'Inter', sans-serif;">Team</a>
                    <a href="{{ route('investor') }}" class="block text-sm text-gray-400 hover:text-white transition-colors" style="font-family: 'Inter', sans-serif;">Investors</a>
                </div>
            </div>
            
            <!-- Mobile Solutions -->
            <div x-data="{ open: false }" class="space-y-2">
                <button @click="open = !open" type="button" class="flex items-center justify-between w-full text-base font-medium text-gray-300 hover:text-white" style="font-family: 'Inter', sans-serif;">
                    Solutions
                    <svg class="w-4 h-4 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open" style="display: none;" class="pl-4 space-y-2">
                    <a href="{{ route('singleFamilyResidential') }}" class="block text-sm text-gray-400 hover:text-white transition-colors" style="font-family: 'Inter', sans-serif;">Single Family Residential</a>
                    <a href="https://deal-finder-lake.vercel.app/login" class="block text-sm text-gray-400 hover:text-white transition-colors" style="font-family: 'Inter', sans-serif;">Deal Finder</a>
                    <a href="{{ route('process') }}" class="block text-sm text-gray-400 hover:text-white transition-colors" style="font-family: 'Inter', sans-serif;">Process</a>
                    <a href="{{ route('commercialProperties') }}" class="block text-sm text-gray-400 hover:text-white transition-colors" style="font-family: 'Inter', sans-serif;">Commercial Properties</a>
                    <a href="{{ route('mioymRealtyPartners') }}" class="block text-sm text-gray-400 hover:text-white transition-colors" style="font-family: 'Inter', sans-serif;">MIOYM Reality Partners</a>
                </div>
            </div>
            
            <!-- Mobile Asset Management -->
            <div x-data="{ open: false }" class="space-y-2">
                <button @click="open = !open" type="button" class="flex items-center justify-between w-full text-base font-medium text-gray-300 hover:text-white" style="font-family: 'Inter', sans-serif;">
                    Asset Management
                    <svg class="w-4 h-4 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open" style="display: none;" class="pl-4 space-y-2">
                    <a href="{{ route('affordableHomeProgram') }}" class="block text-sm text-gray-400 hover:text-white transition-colors" style="font-family: 'Inter', sans-serif;">Affordable Home Program</a>
                    <a href="{{ route('strategicPropertyPreservation') }}" class="block text-sm text-gray-400 hover:text-white transition-colors" style="font-family: 'Inter', sans-serif;">Strategic Property Preservation</a>
                    <a href="{{ route('nationalForeclosurePrevention') }}" class="block text-sm text-gray-400 hover:text-white transition-colors" style="font-family: 'Inter', sans-serif;">National Foreclosure Prevention</a>
                    <a href="https://cashforhomes.mioym.com/" class="block text-sm text-gray-400 hover:text-white transition-colors" style="font-family: 'Inter', sans-serif;">Cash For Homes</a>
                </div>
            </div>
            
            <!-- Mobile Lending -->
            <div x-data="{ open: false }" class="space-y-2">
                <button @click="open = !open" type="button" class="flex items-center justify-between w-full text-base font-medium text-gray-300 hover:text-white" style="font-family: 'Inter', sans-serif;">
                    Lending
                    <svg class="w-4 h-4 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open" style="display: none;" class="pl-4 space-y-2">
                    <a href="https://mioymcommercialcapital.com/" class="block text-sm text-gray-400 hover:text-white transition-colors" style="font-family: 'Inter', sans-serif;">MIOYM Commercial Capital</a>
                    <a href="{{ route('mioymJointVenture') }}" class="block text-sm text-gray-400 hover:text-white transition-colors" style="font-family: 'Inter', sans-serif;">MIOYM Joint Venture</a>
                </div>
            </div>
            
            <!-- Mobile News -->
            <div x-data="{ open: false }" class="space-y-2">
                <button @click="open = !open" type="button" class="flex items-center justify-between w-full text-base font-medium text-gray-300 hover:text-white" style="font-family: 'Inter', sans-serif;">
                    News
                    <svg class="w-4 h-4 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open" style="display: none;" class="pl-4 space-y-2">
                    <a href="{{ route('blogs') }}" class="block text-sm text-gray-400 hover:text-white transition-colors" style="font-family: 'Inter', sans-serif;">Blogs</a>
                    <a href="{{ route('testimonials') }}" class="block text-sm text-gray-400 hover:text-white transition-colors" style="font-family: 'Inter', sans-serif;">Testimonials</a>
                </div>
            </div>
            
            <a href="https://mioym-equities-be48b.web.app/login" class="block w-full text-center px-5 py-3 mt-4 bg-white text-[#201B1B] text-sm font-semibold rounded-lg" style="font-family: 'Plus Jakarta Sans', sans-serif;">Investor Portal</a>
        </div>
    </div>
</nav>