<div>
    @if($isOpen)
        <!-- Large screens (1024px+) - floating widget -->
        <div class="fixed bottom-24 right-6 w-96 lg:w-[28rem] bg-white rounded-2xl lg:rounded-3xl shadow-2xl overflow-hidden z-50 flex flex-col hidden lg:flex" 
             style="height: 580px; max-height: 75vh;"
             x-data="{ closing: false }"
             x-show="true"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-50 translate-y-8"
             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 scale-100 translate-y-0"
             x-transition:leave-end="opacity-0 scale-50 translate-y-8">
            
            <!-- Header -->
            <div class="bg-slate-900 text-white p-4 flex justify-between items-center rounded-t-2xl lg:rounded-t-3xl">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </div>
                    <div class="min-w-0">
                        <h3 class="font-semibold text-sm truncate">Mioym Equities</h3>
                        <p class="text-xs text-white/60 truncate">We typically reply within minutes</p>
                    </div>
                </div>
                <button wire:click="toggleChat" class="text-white/60 hover:text-white transition p-1 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Chat Container -->
            <div class="flex-1 overflow-y-auto p-4 space-y-4 bg-gray-50/50" style="scrollbar-width: thin;">
                <style>
                    .lg\:flex .chat-scroll::-webkit-scrollbar { width: 4px; }
                    .lg\:flex .chat-scroll::-webkit-scrollbar-track { background: transparent; }
                    .lg\:flex .chat-scroll::-webkit-scrollbar-thumb { background-color: #cbd5e1; border-radius: 20px; }
                </style>

                @if($showContactForm)
                    @if($inquirySent)
                        <div class="text-center py-8 animate-fade-in">
                            <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-slate-800 mb-2">Message Sent!</h3>
                            <p class="text-sm text-slate-500 mb-4">Our team will contact you shortly.</p>
                            <button wire:click="resetChat" class="text-slate-700 text-sm font-medium hover:underline">Back to chat</button>
                        </div>
                    @else
                        <div class="animate-fade-in">
                            <h3 class="text-sm font-semibold text-slate-800">Talk to a Human</h3>
                            <p class="text-xs text-slate-500 mb-4">Fill out the form below and we'll get back to you.</p>
                            <form wire:submit.prevent="sendInquiry" class="space-y-3">
                                <input type="text" wire:model="contactName" placeholder="Your Name *" class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-slate-900 bg-white">
                                <input type="email" wire:model="contactEmail" placeholder="Email Address *" class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-slate-900 bg-white">
                                <input type="tel" wire:model="contactPhone" placeholder="Phone Number (optional)" class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-slate-900 bg-white">
                                <textarea wire:model="contactMessage" placeholder="How can we help you? *" rows="3" class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-slate-900 bg-white resize-none"></textarea>
                                <button type="submit" class="w-full bg-slate-900 text-white py-3 rounded-xl text-sm font-medium hover:bg-slate-800 transition-all duration-200">Send Message</button>
                                <button type="button" wire:click="cancelContactForm" class="w-full text-slate-500 text-sm hover:text-slate-700 transition py-2">Cancel</button>
                            </form>
                        </div>
                    @endif
                @else
                    @foreach($messages as $msg)
                        <div class="flex {{ $msg['role'] === 'user' ? 'justify-end' : 'justify-start' }} animate-message">
                            <div class="{{ $msg['role'] === 'user' ? 'bg-slate-900 text-white rounded-2xl rounded-br-sm' : 'bg-white text-slate-800 rounded-2xl rounded-bl-sm shadow-sm' }} px-4 py-3 max-w-[80%] text-sm leading-relaxed">
                                <p>{!! nl2br(e($msg['content'])) !!}</p>
                            </div>
                        </div>
                    @endforeach
                    @if($isLoading)
                        <div class="flex justify-start animate-fade-in">
                            <div class="bg-white rounded-2xl rounded-bl-sm px-4 py-3 shadow-sm">
                                <div class="flex gap-1.5">
                                    <div class="w-2 h-2 bg-slate-400 rounded-full animate-bounce" style="animation-delay: 0ms"></div>
                                    <div class="w-2 h-2 bg-slate-400 rounded-full animate-bounce" style="animation-delay: 150ms"></div>
                                    <div class="w-2 h-2 bg-slate-400 rounded-full animate-bounce" style="animation-delay: 300ms"></div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
            </div>

            @if(!$showContactForm)
                <div class="p-4 bg-white border-t border-slate-100">
                    <button type="button" class="w-full border-2 border-slate-200 text-slate-700 py-2.5 px-4 rounded-full text-sm font-medium hover:border-slate-900 hover:text-slate-900 hover:bg-slate-50 transition-all duration-200 hover:scale-[1.02] mb-3" wire:click="showHuman">Talk to a Human</button>
                    <form wire:submit.prevent="sendMessage" class="flex gap-2 items-center">
                        <input type="text" wire:model="message" placeholder="Type your message..." class="flex-1 px-4 py-3 bg-slate-50 border-0 rounded-full focus:outline-none focus:ring-2 focus:ring-slate-900 text-sm text-black" wire:keydown.enter="sendMessage">
                        <button type="submit" class="bg-slate-900 text-white w-12 h-12 rounded-full hover:bg-slate-800 transition-all duration-200 hover:scale-105 disabled:opacity-50 disabled:hover:scale-100 flex items-center justify-center" @if($isLoading) disabled @endif>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-[ 88deg]" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z" /></svg>
                        </button>
                    </form>
                </div>
            @endif
        </div>

        <!-- Medium screens (768px - 1023px) - smaller floating widget -->
        <div class="fixed bottom-20 right-4 w-80 md:w-96 lg:hidden bg-white rounded-2xl shadow-2xl overflow-hidden z-50 flex flex-col"
             style="height: 500px; max-height: 70vh;"
             x-data="{ closing: false }"
             x-show="true"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-50 translate-y-8"
             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 scale-100 translate-y-0"
             x-transition:leave-end="opacity-0 scale-50 translate-y-8">
            <div class="bg-slate-900 text-white p-3 flex justify-between items-center rounded-t-2xl">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-white/10 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-xs truncate">Mioym Equities</h3>
                        <p class="text-[10px] text-white/60">We typically reply within minutes</p>
                    </div>
                </div>
                <button wire:click="toggleChat" class="text-white/60 hover:text-white transition p-1"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg></button>
            </div>

            <div class="flex-1 overflow-y-auto p-3 space-y-3 bg-gray-50/50">
                @if($showContactForm)
                    @if($inquirySent)
                        <div class="text-center py-6 animate-fade-in">
                            <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg></div>
                            <h3 class="text-sm font-semibold text-slate-800 mb-1">Message Sent!</h3>
                            <p class="text-xs text-slate-500 mb-3">Our team will contact you shortly.</p>
                            <button wire:click="resetChat" class="text-slate-700 text-xs font-medium hover:underline">Back to chat</button>
                        </div>
                    @else
                        <div class="animate-fade-in">
                            <h3 class="text-xs font-semibold text-slate-800">Talk to a Human</h3>
                            <p class="text-[10px] text-slate-500 mb-3">Fill out the form below</p>
                            <form wire:submit.prevent="sendInquiry" class="space-y-2">
                                <input type="text" wire:model="contactName" placeholder="Your Name *" class="w-full px-3 py-2 border border-slate-200 rounded-lg text-xs bg-white">
                                <input type="email" wire:model="contactEmail" placeholder="Email *" class="w-full px-3 py-2 border border-slate-200 rounded-lg text-xs bg-white">
                                <input type="tel" wire:model="contactPhone" placeholder="Phone (optional)" class="w-full px-3 py-2 border border-slate-200 rounded-lg text-xs bg-white">
                                <textarea wire:model="contactMessage" placeholder="How can we help? *" rows="2" class="w-full px-3 py-2 border border-slate-200 rounded-lg text-xs bg-white resize-none"></textarea>
                                <button type="submit" class="w-full bg-slate-900 text-white py-2 rounded-lg text-xs font-medium">Send Message</button>
                                <button type="button" wire:click="cancelContactForm" class="w-full text-slate-500 text-xs py-1">Cancel</button>
                            </form>
                        </div>
                    @endif
                @else
                    @foreach($messages as $msg)
                        <div class="flex {{ $msg['role'] === 'user' ? 'justify-end' : 'justify-start' }} animate-message">
                            <div class="{{ $msg['role'] === 'user' ? 'bg-slate-900 text-white rounded-xl rounded-br-sm' : 'bg-white text-slate-800 rounded-xl rounded-bl-sm' }} px-3 py-2 max-w-[85%] text-xs leading-relaxed"><p>{!! nl2br(e($msg['content'])) !!}</p></div>
                        </div>
                    @endforeach
                    @if($isLoading)
                        <div class="flex justify-start"><div class="bg-white rounded-xl rounded-bl-sm px-3 py-2"><div class="flex gap-1"><div class="w-1.5 h-1.5 bg-slate-400 rounded-full animate-bounce"></div><div class="w-1.5 h-1.5 bg-slate-400 rounded-full animate-bounce" style="animation-delay: 150ms"></div><div class="w-1.5 h-1.5 bg-slate-400 rounded-full animate-bounce" style="animation-delay: 300ms"></div></div></div></div>
                    @endif
                @endif
            </div>

            @if(!$showContactForm)
                <div class="p-3 bg-white border-t border-slate-100">
                    <button type="button" class="w-full border border-slate-200 text-slate-700 py-1.5 px-3 rounded-full text-xs font-medium hover:border-slate-900 mb-2" wire:click="showHuman">Talk to a Human</button>
                    <form wire:submit.prevent="sendMessage" class="flex gap-2 items-center">
                        <input type="text" wire:model="message" placeholder="Type..." class="flex-1 px-3 py-2 bg-slate-50 border-0 rounded-full text-xs text-black" wire:keydown.enter="sendMessage">
                        <button type="submit" class="bg-slate-900 text-white w-9 h-9 rounded-full flex items-center justify-center" @if($isLoading) disabled @endif><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 rotate-[-45deg]" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z" /></svg></button>
                    </form>
                </div>
            @endif
        </div>

        <!-- Small screens (< 768px) - full screen -->
        <div class="fixed inset-0 bg-white z-50 flex flex-col lg:hidden"
             x-data="{ closing: false }"
             x-show="true"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-50 translate-y-8"
             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 scale-100 translate-y-0"
             x-transition:leave-end="opacity-0 scale-50 translate-y-8">
            <div class="bg-slate-900 text-white p-4 flex justify-between items-center">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-sm">Mioym Equities</h3>
                        <p class="text-xs text-white/60">We typically reply within minutes</p>
                    </div>
                </div>
                <button wire:click="toggleChat" class="text-white/60 hover:text-white p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>

            <div class="flex-1 overflow-y-auto p-4 space-y-4 bg-gray-50">
                @if($showContactForm)
                    @if($inquirySent)
                        <div class="text-center py-8">
                            <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4"><svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg></div>
                            <h3 class="text-lg font-semibold text-slate-800 mb-2">Message Sent!</h3>
                            <p class="text-sm text-slate-500 mb-4">Our team will contact you shortly.</p>
                            <button wire:click="resetChat" class="text-slate-700 text-sm font-medium hover:underline">Back to chat</button>
                        </div>
                    @else
                        <div>
                            <h3 class="text-sm font-semibold text-slate-800 mb-1">Talk to a Human</h3>
                            <p class="text-xs text-slate-500 mb-4">Fill out the form below</p>
                            <form wire:submit.prevent="sendInquiry" class="space-y-3">
                                <input type="text" wire:model="contactName" placeholder="Your Name *" class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm bg-white">
                                <input type="email" wire:model="contactEmail" placeholder="Email Address *" class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm bg-white">
                                <input type="tel" wire:model="contactPhone" placeholder="Phone (optional)" class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm bg-white">
                                <textarea wire:model="contactMessage" placeholder="How can we help? *" rows="3" class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm bg-white resize-none"></textarea>
                                <button type="submit" class="w-full bg-slate-900 text-white py-3 rounded-xl text-sm font-medium">Send Message</button>
                                <button type="button" wire:click="cancelContactForm" class="w-full text-slate-500 text-sm py-2">Cancel</button>
                            </form>
                        </div>
                    @endif
                @else
                    @foreach($messages as $msg)
                        <div class="flex {{ $msg['role'] === 'user' ? 'justify-end' : 'justify-start' }}">
                            <div class="{{ $msg['role'] === 'user' ? 'bg-slate-900 text-white rounded-2xl rounded-br-sm' : 'bg-white text-slate-800 rounded-2xl rounded-bl-sm shadow-sm' }} px-4 py-3 max-w-[85%] text-sm leading-relaxed"><p>{!! nl2br(e($msg['content'])) !!}</p></div>
                        </div>
                    @endforeach
                    @if($isLoading)
                        <div class="flex justify-start"><div class="bg-white rounded-2xl rounded-bl-sm px-4 py-3 shadow-sm"><div class="flex gap-1.5"><div class="w-2 h-2 bg-slate-400 rounded-full animate-bounce"></div><div class="w-2 h-2 bg-slate-400 rounded-full animate-bounce" style="animation-delay: 150ms"></div><div class="w-2 h-2 bg-slate-400 rounded-full animate-bounce" style="animation-delay: 300ms"></div></div></div></div>
                    @endif
                @endif
            </div>

            @if(!$showContactForm)
                <div class="p-4 bg-white border-t border-slate-100">
                    <button type="button" class="w-full border-2 border-slate-200 text-slate-700 py-2.5 rounded-full text-sm font-medium hover:border-slate-900 mb-3" wire:click="showHuman">Talk to a Human</button>
                    <form wire:submit.prevent="sendMessage" class="flex gap-2 items-center">
                        <input type="text" wire:model="message" placeholder="Type your message..." class="flex-1 px-4 py-3 bg-slate-50 border-0 rounded-full text-sm text-black" wire:keydown.enter="sendMessage">
                        <button type="submit" class="bg-slate-900 text-white w-12 h-12 rounded-full flex items-center justify-center" @if($isLoading) disabled @endif><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-[-45deg]" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z" /></svg></button>
                    </form>
                </div>
            @endif
        </div>
    @endif

    <div class="fixed bottom-4 right-4 sm:bottom-6 sm:right-6 lg:bottom-6 lg:right-6 z-50">
    <!-- Message Icon - Always visible but animates -->
    <button wire:click="toggleChat" class="bg-slate-900 text-white p-3 sm:p-4 lg:p-4 rounded-full shadow-xl hover:bg-slate-800 transition-all duration-300 hover:scale-110 hover:shadow-2xl btn-icon {{ $isOpen ? 'scale-0 pointer-events-none' : 'scale-100 animate-float' }}" style="transition: transform 0.3s ease, opacity 0.3s ease;">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 sm:h-6 lg:h-6 w-5 sm:w-6 lg:w-6 animate-icon-change" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" /></svg>
    </button>

    <!-- X Icon - Visible on large screens when chat is open -->
    <button wire:click="toggleChat" class="hidden lg:block bg-slate-900 text-white p-4 rounded-full shadow-xl hover:bg-slate-800 transition-all duration-300 hover:scale-110 hover:shadow-2xl btn-icon {{ $isOpen ? 'scale-100' : 'scale-0' }}" style="transition: transform 0.3s ease, opacity 0.3s ease; position: absolute; top: 0; right: 0;">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 animate-icon-change" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
    </button>
</div>

    <style>
        @keyframes slide-up { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes slide-down { from { opacity: 1; transform: translateY(0); } to { opacity: 0; transform: translateY(20px); } }
        @keyframes fade-in { from { opacity: 0; } to { opacity: 1; } }
        @keyframes fade-out { from { opacity: 1; } to { opacity: 0; } }
        @keyframes float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
        @keyframes message { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes icon-pop { 0% { transform: scale(0.5); opacity: 0; } 50% { transform: scale(1.2); } 100% { transform: scale(1); opacity: 1; } }
        .animate-slide-up { animation: slide-up 0.3s ease-out forwards; }
        .animate-slide-down { animation: slide-down 0.3s ease-out forwards; }
        .animate-fade-in { animation: fade-in 0.3s ease-out; }
        .animate-fade-out { animation: fade-out 0.3s ease-out forwards; }
        .animate-float { animation: float 3s ease-in-out infinite; }
        .animate-message { animation: message 0.3s ease-out; }
        .animate-icon-change { animation: icon-pop 0.3s ease-out; }
        .btn-icon { transition: all 0.3s ease; }
        .btn-icon:hover { transform: scale(1.1) rotate(5deg); }
        .floating-btn-container { transition: all 0.3s ease; }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.addEventListener('scrollToBottom', function() {
                setTimeout(function() {
                    var containers = document.querySelectorAll('.overflow-y-auto');
                    containers.forEach(function(container) {
                        container.scrollTop = container.scrollHeight;
                    });
                }, 100);
            });

            window.addEventListener('clearMessageInput', function() {
                var inputs = document.querySelectorAll('input[wire\\:model="message"]');
                inputs.forEach(function(input) {
                    input.value = '';
                });
            });
        });
    </script>
</div>