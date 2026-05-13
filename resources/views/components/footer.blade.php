<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Plus+Jakarta+Sans:wght@500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<footer class="bg-black border-t border-white/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">
            <!-- Column 1: Logo -->
            <div class="flex flex-col items-center sm:items-start space-y-6">
                <div class="w-24 h-24 rounded-full border-2 border-gray-600 overflow-hidden bg-gray-800 flex items-center justify-center">
                    <img src="{{ asset('img/inc5000-badge.png') }}" alt="Inc. 5000 America's Fastest Growing Private Companies badge - MIOYM ranked in top 5000" class="w-full h-full object-cover" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <span class="text-xs text-gray-500 text-center px-2 hidden">Inc. 5000<br>Badge</span>
                </div>
            </div>

            <!-- Column 2: Get Started -->
            <div class="flex flex-col items-center sm:items-start space-y-4">
                <h3 class="text-white font-semibold text-lg" style="font-family: 'Plus Jakarta Sans', sans-serif;">Get Started</h3>
                <ul class="space-y-3 text-center sm:text-left">
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-sm">Contact Us</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-sm">Blogs</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-sm">Single Family Residential</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-sm">Testimonials</a></li>
                </ul>
            </div>

            <!-- Column 3: Resources -->
            <div class="flex flex-col items-center sm:items-start space-y-4">
                <h3 class="text-white font-semibold text-lg" style="font-family: 'Plus Jakarta Sans', sans-serif;">Resources</h3>
                <ul class="space-y-3 text-center sm:text-left">
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-sm">Terms & Conditions</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-sm">Privacy Policy</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-sm">Cookies</a></li>
                    <li><a href="{{ route('aboutUs') }}" class="text-gray-400 hover:text-white transition-colors text-sm">About Us</a></li>
                </ul>
            </div>

            <!-- Column 4: Contact Us -->
            <div class="flex flex-col items-center sm:items-start space-y-4">
                <h3 class="text-white font-semibold text-lg" style="font-family: 'Plus Jakarta Sans', sans-serif;">Contact Us</h3>
                <div class="space-y-3 flex flex-col items-center sm:items-start">
                    <a href="tel:9145669050" class="flex items-center gap-3 text-gray-400 hover:text-white transition-colors text-sm group">
                        <i class="fas fa-phone-alt flex-shrink-0 text-gray-500 group-hover:text-white transition-colors"></i>
                        <span class="underline">914-566-9050</span>
                    </a>
                    <a href="mailto:info@mioym.com" class="flex items-center gap-3 text-gray-400 hover:text-white transition-colors text-sm group">
                        <i class="fas fa-envelope flex-shrink-0 text-gray-500 group-hover:text-white transition-colors"></i>
                        <span class="underline">info@mioym.com</span>
                    </a>
                </div>
                
                <!-- Social Media Icons -->
                <div class="flex items-center gap-3 pt-2">
                    <a href="https://linkedin.com/company/mioym" target="_blank" rel="noopener noreferrer" class="p-2 rounded-lg bg-white/10 hover:bg-white/20 transition-colors" aria-label="LinkedIn">
                        <svg class="w-5 h-5 text-gray-300 hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <a href="https://facebook.com/mioym" target="_blank" rel="noopener noreferrer" class="p-2 rounded-lg bg-white/10 hover:bg-white/20 transition-colors" aria-label="Facebook">
                        <svg class="w-5 h-5 text-gray-300 hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="https://youtube.com/@mioym" target="_blank" rel="noopener noreferrer" class="p-2 rounded-lg bg-white/10 hover:bg-white/20 transition-colors" aria-label="YouTube">
                        <svg class="w-5 h-5 text-gray-300 hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>
                    <a href="https://instagram.com/mioym" target="_blank" rel="noopener noreferrer" class="p-2 rounded-lg bg-white/10 hover:bg-white/20 transition-colors" aria-label="Instagram">
                        <svg class="w-5 h-5 text-gray-300 hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-gray-400">
                <p>Copyright 2026 MIOYM. All Rights Reserved | Design & Developed By: AevumDev.</p>
                <div class="flex items-center gap-4">
                    <a href="#" class="hover:text-white transition-colors">All Rights Reserved</a>
                    <span>|</span>
                    <a href="#" class="hover:text-white transition-colors">Terms and Conditions</a>
                    <span>|</span>
                    <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>