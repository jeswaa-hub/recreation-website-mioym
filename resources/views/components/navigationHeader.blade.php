@php
    $firmDropdownItems = [
        'About Us' => route('aboutUs'),
        'Team' => route('team'),
        'Investors' => route('investor'),
    ];
    
    $solutionsDropdown = [
        'Single Family Residential' => route('singleFamilyResidential'),
        'Deal Finder' => 'https://deal-finder-lake.vercel.app/login',
        'Process' => route('process'),
        'Commercial Properties' => route('commercialProperties'),
        'MIOYM Reality Partners' => route('mioymRealtyPartners'),
    ];
    
    $assetManagementDropdown = [
        'Affordable Home Program' => route('affordableHomeProgram'),
        'Strategic Property Preservation' => route('strategicPropertyPreservation'),
        'National Foreclosure Prevention' => route('nationalForeclosurePrevention'),
        'Cash For Homes' => 'https://cashforhomes.mioym.com/',
    ];
    
    $lendingDropdown = [
        'MIOYM Commercial Capital' => 'https://mioymcommercialcapital.com/',
        'MIOYM Joint Venture' => route('mioymJointVenture'),
    ];
    
    $newsDropdown = [
        'Blogs' => route('blogs'),
        'Testimonials' => route('testimonials'),
    ];
@endphp

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Plus+Jakarta+Sans:wght@500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<nav class="fixed top-0 left-0 right-0 z-50 bg-[#201B1B] border-b border-white/5">
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
                    <a href="/" 
                       class="text-sm font-medium {{ request()->is('/') ? 'text-white border-b-2 border-white pb-1' : 'text-gray-300 hover:text-white' }} transition-colors duration-200"
                       style="font-family: 'Inter', sans-serif;">
                        Home
                    </a>
                    
                    <!-- The Firm Dropdown -->
                    <div class="relative group" data-dropdown="firm" onmouseenter="this.dataset.open='true'; this.querySelector('.dropdown-menu').classList.remove('hidden')" onmouseleave="this.dataset.open='false'; setTimeout(() => { if(this.dataset.open === 'false') this.querySelector('.dropdown-menu').classList.add('hidden') }, 200)">
                        <button type="button" 
                                class="text-sm font-medium {{ request()->is('about-us', 'team', 'investor') ? 'text-white border-b-2 border-white pb-1' : 'text-gray-300 hover:text-white' }} transition-colors duration-200 flex items-center gap-1"
                                style="font-family: 'Inter', sans-serif;"
                                onclick="event.stopPropagation(); const parent = this.parentElement; const isOpen = parent.querySelector('.dropdown-menu').classList.contains('hidden'); document.querySelectorAll('[data-dropdown] .dropdown-menu').forEach(d => d.classList.add('hidden')); if(isOpen) parent.querySelector('.dropdown-menu').classList.remove('hidden');">
                            The Firm
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div class="dropdown-menu hidden absolute top-full left-0 mt-2 w-48 bg-[#2a2424] rounded-lg shadow-xl border border-white/10 py-2" onmouseenter="this.parentElement.dataset.open='true'" onmouseleave="this.parentElement.dataset.open='false'; setTimeout(() => { if(this.parentElement.dataset.open === 'false') this.classList.add('hidden') }, 200)">
                            @foreach($firmDropdownItems as $label => $href)
                                <a href="{{ $href }}" 
                                   class="block px-4 py-2 text-sm {{ request()->url() == $href ? 'text-white bg-white/10 font-semibold' : 'text-gray-300 hover:text-white hover:bg-white/5' }} transition-colors"
                                   style="font-family: 'Inter', sans-serif;">
                                    {{ $label }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Solutions Dropdown -->
                    <div class="relative group" data-dropdown="solutions" onmouseenter="this.dataset.open='true'; this.querySelector('.dropdown-menu').classList.remove('hidden')" onmouseleave="this.dataset.open='false'; setTimeout(() => { if(this.dataset.open === 'false') this.querySelector('.dropdown-menu').classList.add('hidden') }, 200)">
                        <button type="button" 
                                class="text-sm font-medium text-gray-300 hover:text-white transition-colors duration-200 flex items-center gap-1"
                                style="font-family: 'Inter', sans-serif;"
                                onclick="event.stopPropagation(); const parent = this.parentElement; const isOpen = parent.querySelector('.dropdown-menu').classList.contains('hidden'); document.querySelectorAll('[data-dropdown] .dropdown-menu').forEach(d => d.classList.add('hidden')); if(isOpen) parent.querySelector('.dropdown-menu').classList.remove('hidden');">
                            Solutions
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div class="dropdown-menu hidden absolute top-full left-0 mt-2 w-56 bg-[#2a2424] rounded-lg shadow-xl border border-white/10 py-2" onmouseenter="this.parentElement.dataset.open='true'" onmouseleave="this.parentElement.dataset.open='false'; setTimeout(() => { if(this.parentElement.dataset.open === 'false') this.classList.add('hidden') }, 200)">
                            @foreach($solutionsDropdown as $label => $href)
                                <a href="{{ $href }}" 
                                   class="block px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-colors"
                                   style="font-family: 'Inter', sans-serif;">
                                    {{ $label }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Asset Management Dropdown -->
                    <div class="relative group" data-dropdown="asset" onmouseenter="this.dataset.open='true'; this.querySelector('.dropdown-menu').classList.remove('hidden')" onmouseleave="this.dataset.open='false'; setTimeout(() => { if(this.dataset.open === 'false') this.querySelector('.dropdown-menu').classList.add('hidden') }, 200)">
                        <button type="button" 
                                class="text-sm font-medium text-gray-300 hover:text-white transition-colors duration-200 flex items-center gap-1"
                                style="font-family: 'Inter', sans-serif;"
                                onclick="event.stopPropagation(); const parent = this.parentElement; const isOpen = parent.querySelector('.dropdown-menu').classList.contains('hidden'); document.querySelectorAll('[data-dropdown] .dropdown-menu').forEach(d => d.classList.add('hidden')); if(isOpen) parent.querySelector('.dropdown-menu').classList.remove('hidden');">
                            Asset Management
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div class="dropdown-menu hidden absolute top-full left-0 mt-2 w-56 bg-[#2a2424] rounded-lg shadow-xl border border-white/10 py-2" onmouseenter="this.parentElement.dataset.open='true'" onmouseleave="this.parentElement.dataset.open='false'; setTimeout(() => { if(this.parentElement.dataset.open === 'false') this.classList.add('hidden') }, 200)">
                            @foreach($assetManagementDropdown as $label => $href)
                                <a href="{{ $href }}" 
                                   class="block px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-colors"
                                   style="font-family: 'Inter', sans-serif;">
                                    {{ $label }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Lending Dropdown -->
                    <div class="relative group" data-dropdown="lending" onmouseenter="this.dataset.open='true'; this.querySelector('.dropdown-menu').classList.remove('hidden')" onmouseleave="this.dataset.open='false'; setTimeout(() => { if(this.dataset.open === 'false') this.querySelector('.dropdown-menu').classList.add('hidden') }, 200)">
                        <button type="button" 
                                class="text-sm font-medium text-gray-300 hover:text-white transition-colors duration-200 flex items-center gap-1"
                                style="font-family: 'Inter', sans-serif;"
                                onclick="event.stopPropagation(); const parent = this.parentElement; const isOpen = parent.querySelector('.dropdown-menu').classList.contains('hidden'); document.querySelectorAll('[data-dropdown] .dropdown-menu').forEach(d => d.classList.add('hidden')); if(isOpen) parent.querySelector('.dropdown-menu').classList.remove('hidden');">
                            Lending
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div class="dropdown-menu hidden absolute top-full left-0 mt-2 w-52 bg-[#2a2424] rounded-lg shadow-xl border border-white/10 py-2" onmouseenter="this.parentElement.dataset.open='true'" onmouseleave="this.parentElement.dataset.open='false'; setTimeout(() => { if(this.parentElement.dataset.open === 'false') this.classList.add('hidden') }, 200)">
                            @foreach($lendingDropdown as $label => $href)
                                <a href="{{ $href }}" 
                                   class="block px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-colors"
                                   style="font-family: 'Inter', sans-serif;">
                                    {{ $label }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- News Dropdown -->
                    <div class="relative group" data-dropdown="news" onmouseenter="this.dataset.open='true'; this.querySelector('.dropdown-menu').classList.remove('hidden')" onmouseleave="this.dataset.open='false'; setTimeout(() => { if(this.dataset.open === 'false') this.querySelector('.dropdown-menu').classList.add('hidden') }, 200)">
                        <button type="button" 
                                class="text-sm font-medium text-gray-300 hover:text-white transition-colors duration-200 flex items-center gap-1"
                                style="font-family: 'Inter', sans-serif;"
                                onclick="event.stopPropagation(); const parent = this.parentElement; const isOpen = parent.querySelector('.dropdown-menu').classList.contains('hidden'); document.querySelectorAll('[data-dropdown] .dropdown-menu').forEach(d => d.classList.add('hidden')); if(isOpen) parent.querySelector('.dropdown-menu').classList.remove('hidden');">
                            News
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div class="dropdown-menu hidden absolute top-full left-0 mt-2 w-40 bg-[#2a2424] rounded-lg shadow-xl border border-white/10 py-2" onmouseenter="this.parentElement.dataset.open='true'" onmouseleave="this.parentElement.dataset.open='false'; setTimeout(() => { if(this.parentElement.dataset.open === 'false') this.classList.add('hidden') }, 200)">
                            @foreach($newsDropdown as $label => $href)
                                <a href="{{ $href }}" 
                                   class="block px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-colors"
                                   style="font-family: 'Inter', sans-serif;">
                                    {{ $label }}
                                </a>
                            @endforeach
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
                    onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                <i class="fas fa-bars text-lg"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden bg-[#201B1B] border-t border-white/5">
        <div class="px-4 py-4 space-y-3">
            <!-- Home -->
            <a href="/" 
               class="block text-base font-medium text-gray-300 hover:text-white transition-colors"
               style="font-family: 'Inter', sans-serif;">
                Home
            </a>
            
            <!-- Mobile The Firm Dropdown -->
            <div class="space-y-2">
                <button type="button" 
                        class="flex items-center justify-between w-full text-base font-medium text-gray-300 hover:text-white"
                        style="font-family: 'Inter', sans-serif;"
                        onclick="event.stopPropagation(); document.getElementById('mobile-firm-dropdown').classList.toggle('hidden')">
                    The Firm
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div id="mobile-firm-dropdown" class="hidden pl-4 space-y-2">
                    @foreach($firmDropdownItems as $label => $href)
                        <a href="{{ $href }}" 
                           class="block text-sm text-gray-400 hover:text-white transition-colors"
                           style="font-family: 'Inter', sans-serif;">
                            {{ $label }}
                        </a>
                    @endforeach
                </div>
            </div>
            
            <!-- Mobile Solutions Dropdown -->
            <div class="space-y-2">
                <button type="button" 
                        class="flex items-center justify-between w-full text-base font-medium text-gray-300 hover:text-white"
                        style="font-family: 'Inter', sans-serif;"
                        onclick="event.stopPropagation(); document.getElementById('mobile-solutions-dropdown').classList.toggle('hidden')">
                    Solutions
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div id="mobile-solutions-dropdown" class="hidden pl-4 space-y-2">
                    @foreach($solutionsDropdown as $label => $href)
                        <a href="{{ $href }}" 
                           class="block text-sm text-gray-400 hover:text-white transition-colors"
                           style="font-family: 'Inter', sans-serif;">
                            {{ $label }}
                        </a>
                    @endforeach
                </div>
            </div>
            
            <!-- Mobile Asset Management Dropdown -->
            <div class="space-y-2">
                <button type="button" 
                        class="flex items-center justify-between w-full text-base font-medium text-gray-300 hover:text-white"
                        style="font-family: 'Inter', sans-serif;"
                        onclick="event.stopPropagation(); document.getElementById('mobile-asset-dropdown').classList.toggle('hidden')">
                    Asset Management
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div id="mobile-asset-dropdown" class="hidden pl-4 space-y-2">
                    @foreach($assetManagementDropdown as $label => $href)
                        <a href="{{ $href }}" 
                           class="block text-sm text-gray-400 hover:text-white transition-colors"
                           style="font-family: 'Inter', sans-serif;">
                            {{ $label }}
                        </a>
                    @endforeach
                </div>
            </div>
            
            <!-- Mobile Lending Dropdown -->
            <div class="space-y-2">
                <button type="button" 
                        class="flex items-center justify-between w-full text-base font-medium text-gray-300 hover:text-white"
                        style="font-family: 'Inter', sans-serif;"
                        onclick="event.stopPropagation(); document.getElementById('mobile-lending-dropdown').classList.toggle('hidden')">
                    Lending
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div id="mobile-lending-dropdown" class="hidden pl-4 space-y-2">
                    @foreach($lendingDropdown as $label => $href)
                        <a href="{{ $href }}" 
                           class="block text-sm text-gray-400 hover:text-white transition-colors"
                           style="font-family: 'Inter', sans-serif;">
                            {{ $label }}
                        </a>
                    @endforeach
                </div>
            </div>
            
            <!-- Mobile News Dropdown -->
            <div class="space-y-2">
                <button type="button" 
                        class="flex items-center justify-between w-full text-base font-medium text-gray-300 hover:text-white"
                        style="font-family: 'Inter', sans-serif;"
                        onclick="event.stopPropagation(); document.getElementById('mobile-news-dropdown').classList.toggle('hidden')">
                    News
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div id="mobile-news-dropdown" class="hidden pl-4 space-y-2">
                    @foreach($newsDropdown as $label => $href)
                        <a href="{{ $href }}" 
                           class="block text-sm text-gray-400 hover:text-white transition-colors"
                           style="font-family: 'Inter', sans-serif;">
                            {{ $label }}
                        </a>
                    @endforeach
                </div>
            </div>
            
            <a href="#" 
               class="block w-full text-center px-5 py-3 mt-4 bg-white text-[#201B1B] text-sm font-semibold rounded-lg"
               style="font-family: 'Plus Jakarta Sans', sans-serif;">
                Investor Portal
            </a>
        </div>
    </div>
</nav>
