<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Plus+Jakarta+Sans:wght@500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<footer class="bg-black border-t border-white/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">
            <!-- Column 1: Logo -->
            <div class="flex flex-col items-center sm:items-start space-y-6">
                <div class="flex items-center gap-4">
                    <div class="w-24 h-24 rounded-full border-2 border-gray-600 overflow-hidden bg-gray-800 flex items-center justify-center">
                        <img src="{{ asset('img/inc5000-badge.webp') }}" alt="Inc. 5000 America's Fastest Growing Private Companies badge - MIOYM ranked in top 5000" class="w-full h-full object-cover" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    </div>
                    <div class="w-24 h-24 flex items-center justify-center">
                        <img src="{{ asset('img/logo.webp') }}" alt="MIOYM Logo" class="w-full h-full object-contain">
                    </div>
                </div>
            </div>

            <!-- Column 2: Get Started -->
            <div class="flex flex-col items-center sm:items-start space-y-4">
                <h3 class="text-white font-semibold text-lg" style="font-family: 'Plus Jakarta Sans', sans-serif;">Get Started</h3>
                <ul class="space-y-3 text-center sm:text-left">
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-sm">Contact Us</a></li>
                    <li><a href="{{ route('blogs') }}" class="text-gray-400 hover:text-white transition-colors text-sm">Blogs</a></li>
                    <li><a href="{{ route('singleFamilyResidential') }}" class="text-gray-400 hover:text-white transition-colors text-sm">Single Family Residential</a></li>
                    <li><a href="{{ route('testimonials') }}" class="text-gray-400 hover:text-white transition-colors text-sm">Testimonials</a></li>
                </ul>
            </div>

            <!-- Column 3: Resources -->
            <div class="flex flex-col items-center sm:items-start space-y-4">
                <h3 class="text-white font-semibold text-lg" style="font-family: 'Plus Jakarta Sans', sans-serif;">Resources</h3>
                <ul class="space-y-3 text-center sm:text-left">
                    <li><button type="button" onclick="openPrivacyModal(event)" class="text-gray-400 hover:text-white transition-colors text-sm cursor-pointer">Privacy Policy</button></li>
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
                    <a href="https://www.linkedin.com/company/mioym-group/" target="_blank" rel="noopener noreferrer" class="p-2 rounded-lg bg-white/10 hover:bg-white/20 transition-colors" aria-label="LinkedIn">
                        <svg class="w-5 h-5 text-gray-300 hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=100086921876462" target="_blank" rel="noopener noreferrer" class="p-2 rounded-lg bg-white/10 hover:bg-white/20 transition-colors" aria-label="Facebook">
                        <svg class="w-5 h-5 text-gray-300 hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <!-- Broken Link In the Domain -->
                    <a href="https://youtube.com/@mioym" target="_blank" rel="noopener noreferrer" class="p-2 rounded-lg bg-white/10 hover:bg-white/20 transition-colors" aria-label="YouTube">
                        <svg class="w-5 h-5 text-gray-300 hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/mioym.equities/" target="_blank" rel="noopener noreferrer" class="p-2 rounded-lg bg-white/10 hover:bg-white/20 transition-colors" aria-label="Instagram">
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
                    <button type="button" onclick="openPrivacyModal(event)" class="hover:text-white transition-colors cursor-pointer">Privacy Policy</button>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Privacy Policy Modal -->
<div id="privacyModal" class="fixed inset-0 z-[100] flex items-center justify-center hidden opacity-0 transition-opacity duration-300" style="background-color: rgba(0, 0, 0, 0.85); backdrop-filter: blur(5px);">
    <div class="modal-content w-full max-w-4xl mx-4 bg-[#d9d9d9] rounded-[32px] overflow-hidden shadow-2xl relative flex flex-col max-h-[90vh] transform scale-95 transition-transform duration-300">
        
        <!-- Header & Close Button -->
        <div class="flex justify-between items-center p-6 md:p-8 border-b border-black/10 bg-[#d9d9d9] z-10">
            <h2 class="text-2xl md:text-3xl font-bold text-black uppercase" style="font-family: 'Plus Jakarta Sans', sans-serif;">Privacy Policy</h2>
            <button type="button" onclick="closePrivacyModal()" class="w-12 h-12 bg-black/10 hover:bg-black/20 rounded-full flex items-center justify-center transition-colors">
                <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
        
        <!-- Content Area -->
        <div class="p-6 md:p-8 overflow-y-auto text-black/80 text-sm md:text-base space-y-5" style="font-family: 'Inter', sans-serif;">
            <p class="font-bold text-black uppercase tracking-wider text-sm">Last updated June 23, 2025</p>
            
            <p>This Privacy Notice for Mioym Equities ("we," "us," or "our"), describes how and why we might access, collect, store, use, and/or share ("process") your personal information when you use our services ("Services"), including when you:</p>
            
            <ul class="list-disc pl-6 space-y-2">
                <li>Visit our website at mioym.com or any website of ours that links to this Privacy Notice</li>
                <li>Engage with us in other related ways, including any sales, marketing, or events</li>
            </ul>
            
            <p>Questions or concerns? Reading this Privacy Notice will help you understand your privacy rights and choices. We are responsible for making decisions about how your personal information is processed. If you do not agree with our policies and practices, please do not use our Services. If you still have any questions or concerns, please contact us at <a href="mailto:marketing@mioym.com" class="text-blue-600 hover:underline">marketing@mioym.com</a>.</p>
            
            <h3 class="text-lg font-bold text-black mt-8">SUMMARY OF KEY POINTS</h3>
            <p class="italic">This summary provides key points from our Privacy Notice, but you can find out more details about any of these topics by clicking the link following each key point or by using our table of contents below to find the section you are looking for.</p>
            
            <div class="space-y-4">
                <p><strong>What personal information do we process?</strong> When you visit, use, or navigate our Services, we may process personal information depending on how you interact with us and the Services, the choices you make, and the products and features you use.</p>
                <p><strong>Do we process any sensitive personal information?</strong> Some of the information may be considered "special" or "sensitive" in certain jurisdictions, for example your racial or ethnic origins, sexual orientation, and religious beliefs. We do not process sensitive personal information.</p>
                <p><strong>Do we collect any information from third parties?</strong> We do not collect any information from third parties.</p>
                <p><strong>How do we process your information?</strong> We process your information to provide, improve, and administer our Services, communicate with you, for security and fraud prevention, and to comply with law. We may also process your information for other purposes with your consent. We process your information only when we have a valid legal reason to do so.</p>
                <p><strong>In what situations and with which parties do we share personal information?</strong> We may share information in specific situations and with specific third parties.</p>
                <p><strong>How do we keep your information safe?</strong> We have adequate organizational and technical processes and procedures in place to protect your personal information. However, no electronic transmission over the internet or information storage technology can be guaranteed to be 100% secure, so we cannot promise or guarantee that hackers, cybercriminals, or other unauthorized third parties will not be able to defeat our security and improperly collect, access, steal, or modify your information.</p>
                <p><strong>What are your rights?</strong> Depending on where you are located geographically, the applicable privacy law may mean you have certain rights regarding your personal information.</p>
                <p><strong>How do you exercise your rights?</strong> The easiest way to exercise your rights is by submitting a data subject access request, or by contacting us. We will consider and act upon any request in accordance with applicable data protection laws.</p>
            </div>

            <h3 class="text-lg font-bold text-black mt-8">TABLE OF CONTENTS</h3>
            <ol class="list-decimal pl-6 space-y-2">
                <li>WHAT INFORMATION DO WE COLLECT?</li>
                <li>HOW DO WE PROCESS YOUR INFORMATION?</li>
                <li>WHEN AND WITH WHOM DO WE SHARE YOUR PERSONAL INFORMATION?</li>
                <li>DO WE USE COOKIES AND OTHER TRACKING TECHNOLOGIES?</li>
                <li>HOW LONG DO WE KEEP YOUR INFORMATION?</li>
                <li>HOW DO WE KEEP YOUR INFORMATION SAFE?</li>
                <li>DO WE COLLECT INFORMATION FROM MINORS?</li>
                <li>WHAT ARE YOUR PRIVACY RIGHTS?</li>
                <li>CONTROLS FOR DO-NOT-TRACK FEATURES</li>
                <li>DO UNITED STATES RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?</li>
                <li>DO WE MAKE UPDATES TO THIS NOTICE?</li>
                <li>HOW CAN YOU CONTACT US ABOUT THIS NOTICE?</li>
                <li>HOW CAN YOU REVIEW, UPDATE, OR DELETE THE DATA WE COLLECT FROM YOU?</li>
            </ol>

            <h3 class="text-lg font-bold text-black mt-8">1. WHAT INFORMATION DO WE COLLECT?</h3>
            <p><strong>Personal information you disclose to us</strong></p>
            <p class="italic">In Short: We collect personal information that you provide to us.</p>
            <p>We collect personal information that you voluntarily provide to us when you express an interest in obtaining information about us or our products and Services, when you participate in activities on the Services, or otherwise when you contact us.</p>
            <p><strong>Personal Information Provided by You.</strong> The personal information that we collect depends on the context of your interactions with us and the Services, the choices you make, and the products and features you use. The personal information we collect may include the following:</p>
            <ul class="list-disc pl-6 space-y-1">
                <li>names</li>
                <li>phone numbers</li>
                <li>email addresses</li>
                <li>mailing addresses</li>
                <li>job titles</li>
                <li>contact preferences</li>
                <li>contact or authentication data</li>
            </ul>
            <p><strong>Sensitive Information.</strong> We do not process sensitive information.</p>
            <p>All personal information that you provide to us must be true, complete, and accurate, and you must notify us of any changes to such personal information.</p>

            <h3 class="text-lg font-bold text-black mt-8">2. HOW DO WE PROCESS YOUR INFORMATION?</h3>
            <p class="italic">In Short: We process your information to provide, improve, and administer our Services, communicate with you, for security and fraud prevention, and to comply with law. We may also process your information for other purposes with your consent.</p>
            <p>We process your personal information for a variety of reasons, depending on how you interact with our Services, including:</p>
            <ul class="list-disc pl-6 space-y-3">
                <li><strong>To respond to user inquiries/offer support to users.</strong> We may process your information to respond to your inquiries and solve any potential issues you might have with the requested service.</li>
                <li><strong>To send administrative information to you.</strong> We may process your information to send you details about our products and services, changes to our terms and policies, and other similar information.</li>
                <li><strong>To send you marketing and promotional communications.</strong> We may process the personal information you send to us for our marketing purposes, if this is in accordance with your marketing preferences. You can opt out of our marketing emails at any time.</li>
            </ul>

            <h3 class="text-lg font-bold text-black mt-8">3. WHEN AND WITH WHOM DO WE SHARE YOUR PERSONAL INFORMATION?</h3>
            <p class="italic">In Short: We may share information in specific situations described in this section and/or with the following third parties.</p>
            <p>We may need to share your personal information in the following situations:</p>
            <ul class="list-disc pl-6 space-y-1">
                <li><strong>Business Transfers.</strong> We may share or transfer your information in connection with, or during negotiations of, any merger, sale of company assets, financing, or acquisition of all or a portion of our business to another company.</li>
            </ul>

            <h3 class="text-lg font-bold text-black mt-8">4. DO WE USE COOKIES AND OTHER TRACKING TECHNOLOGIES?</h3>
            <p class="italic">In Short: We may use cookies and other tracking technologies to collect and store your information.</p>
            <p>We may use cookies and similar tracking technologies (like web beacons and pixels) to gather information when you interact with our Services. Some online tracking technologies help us maintain the security of our Services, prevent crashes, fix bugs, save your preferences, and assist with basic site functions.</p>
            <p>We also permit third parties and service providers to use online tracking technologies on our Services for analytics and advertising, including to help manage and display advertisements, to tailor advertisements to your interests, or to send abandoned shopping cart reminders (depending on your communication preferences). The third parties and service providers use their technology to provide advertising about products and services tailored to your interests which may appear either on our Services or on other websites.</p>
            <p>To the extent these online tracking technologies are deemed to be a "sale"/"sharing" (which includes targeted advertising, as defined under the applicable laws) under applicable US state laws, you can opt out of these online tracking technologies by submitting a request as described below under section "DO UNITED STATES RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?"</p>
            <p>Specific information about how we use such technologies and how you can refuse certain cookies is set out in our Cookie Notice.</p>

            <h3 class="text-lg font-bold text-black mt-8">5. HOW LONG DO WE KEEP YOUR INFORMATION?</h3>
            <p class="italic">In Short: We keep your information for as long as necessary to fulfill the purposes outlined in this Privacy Notice unless otherwise required by law.</p>
            <p>We will only keep your personal information for as long as it is necessary for the purposes set out in this Privacy Notice, unless a longer retention period is required or permitted by law (such as tax, accounting, or other legal requirements).</p>
            <p>When we have no ongoing legitimate business need to process your personal information, we will either delete or anonymize such information, or, if this is not possible (for example, because your personal information has been stored in backup archives), then we will securely store your personal information and isolate it from any further processing until deletion is possible.</p>

            <h3 class="text-lg font-bold text-black mt-8">6. HOW DO WE KEEP YOUR INFORMATION SAFE?</h3>
            <p class="italic">In Short: We aim to protect your personal information through a system of organizational and technical security measures.</p>
            <p>We have implemented appropriate and reasonable technical and organizational security measures designed to protect the security of any personal information we process. However, despite our safeguards and efforts to secure your information, no electronic transmission over the Internet or information storage technology can be guaranteed to be 100% secure, so we cannot promise or guarantee that hackers, cybercriminals, or other unauthorized third parties will not be able to defeat our security and improperly collect, access, steal, or modify your information. Although we will do our best to protect your personal information, transmission of personal information to and from our Services is at your own risk. You should only access the Services within a secure environment.</p>

            <h3 class="text-lg font-bold text-black mt-8">7. DO WE COLLECT INFORMATION FROM MINORS?</h3>
            <p class="italic">In Short: We do not knowingly collect data from or market to children under 18 years of age.</p>
            <p>We do not knowingly collect, solicit data from, or market to children under 18 years of age, nor do we knowingly sell such personal information. By using the Services, you represent that you are at least 18 or that you are the parent or guardian of such a minor and consent to such minor dependent’s use of the Services. If we learn that personal information from users less than 18 years of age has been collected, we will deactivate the account and take reasonable measures to promptly delete such data from our records. If you become aware of any data we may have collected from children under age 18, please contact us at <a href="mailto:marketing@mioym.com" class="text-blue-600 hover:underline">marketing@mioym.com</a>.</p>

            <h3 class="text-lg font-bold text-black mt-8">8. WHAT ARE YOUR PRIVACY RIGHTS?</h3>
            <p class="italic">In Short: You may review, change, or terminate your account at any time, depending on your country, province, or state of residence.</p>
            <p><strong>Withdrawing your consent:</strong> If we are relying on your consent to process your personal information, which may be express and/or implied consent depending on the applicable law, you have the right to withdraw your consent at any time. You can withdraw your consent at any time by contacting us by using the contact details provided in the section "HOW CAN YOU CONTACT US ABOUT THIS NOTICE?" below.</p>
            <p>However, please note that this will not affect the lawfulness of the processing before its withdrawal nor, when applicable law allows, will it affect the processing of your personal information conducted in reliance on lawful processing grounds other than consent.</p>
            <p><strong>Opting out of marketing and promotional communications:</strong> You can unsubscribe from our marketing and promotional communications at any time by replying "STOP" or "UNSUBSCRIBE" to the SMS messages that we send, or by contacting us using the details provided in the section "HOW CAN YOU CONTACT US ABOUT THIS NOTICE?" below. You will then be removed from the marketing lists. However, we may still communicate with you — for example, to send you service-related messages that are necessary for the administration and use of your account, to respond to service requests, or for other non-marketing purposes.</p>
            <p>No mobile information will be shared with third parties or affiliates for marketing or promotional purposes. Information sharing to subcontractors in support services, such as customer service, is permitted. All other use case categories exclude text messaging originator opt-in data and consent; this information will not be shared with third parties.</p>
            <p><strong>Cookies and similar technologies:</strong> Most Web browsers are set to accept cookies by default. If you prefer, you can usually choose to set your browser to remove cookies and to reject cookies. If you choose to remove cookies or reject cookies, this could affect certain features or services of our Services.</p>
            <p>If you have questions or comments about your privacy rights, you may email us at <a href="mailto:marketing@mioym.com" class="text-blue-600 hover:underline">marketing@mioym.com</a>.</p>

            <h3 class="text-lg font-bold text-black mt-8">9. CONTROLS FOR DO-NOT-TRACK FEATURES</h3>
            <p>Most web browsers and some mobile operating systems and mobile applications include a Do-Not-Track ("DNT") feature or setting you can activate to signal your privacy preference not to have data about your online browsing activities monitored and collected. At this stage, no uniform technology standard for recognizing and implementing DNT signals has been finalized. As such, we do not currently respond to DNT browser signals or any other mechanism that automatically communicates your choice not to be tracked online. If a standard for online tracking is adopted that we must follow in the future, we will inform you about that practice in a revised version of this Privacy Notice.</p>
            <p>California law requires us to let you know how we respond to web browser DNT signals. Because there currently is not an industry or legal standard for recognizing or honoring DNT signals, we do not respond to them at this time.</p>

            <h3 class="text-lg font-bold text-black mt-8">10. DO UNITED STATES RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?</h3>
            <p>Yes, if you are a resident of specific states like California, Colorado, Connecticut, Utah or Virginia, you are granted specific rights regarding access to your personal information.</p>
            <p class="pb-4"></p> <!-- Spacer -->
        </div>
    </div>
</div>

<script>
    function openPrivacyModal(e) {
        if(e) e.preventDefault();
        const modal = document.getElementById('privacyModal');
        const content = modal.querySelector('.modal-content');
        modal.classList.remove('hidden');
        // Trigger reflow
        void modal.offsetWidth;
        modal.classList.remove('opacity-0');
        content.classList.remove('scale-95');
        document.body.style.overflow = 'hidden'; // Prevent scrolling
    }

    function closePrivacyModal() {
        const modal = document.getElementById('privacyModal');
        const content = modal.querySelector('.modal-content');
        modal.classList.add('opacity-0');
        content.classList.add('scale-95');
        setTimeout(() => {
            modal.classList.add('hidden');
            document.body.style.overflow = ''; // Restore scrolling
        }, 300);
    }
    
    // Close modal on background click
    document.getElementById('privacyModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closePrivacyModal();
        }
    });
</script>
