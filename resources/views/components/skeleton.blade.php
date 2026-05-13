@props(['type' => 'login'])

<div id="page-skeleton" class="fixed inset-0 z-[9999] bg-white dark:bg-gray-900 transition-opacity duration-500 ease-in-out pointer-events-none" aria-busy="true" aria-live="polite" role="status" aria-label="Loading content">
    
    @if($type === 'login')
        <div class="flex min-h-screen bg-white dark:bg-gray-900">
            <!-- Left Column Skeleton -->
            <div class="w-full md:w-1/2 lg:w-[45%] flex flex-col px-6 py-8 md:px-12 lg:px-16 xl:px-24 relative">
                <!-- Top Nav Skeleton -->
                <div class="flex justify-between items-center w-full mb-12">
                    <div class="w-10 h-10 bg-gray-200 dark:bg-gray-800 rounded-full animate-pulse"></div>
                    <div class="w-20 h-5 bg-gray-200 dark:bg-gray-800 rounded animate-pulse"></div>
                </div>

                <div class="flex-grow flex flex-col justify-center max-w-md w-full mx-auto">
                    <div class="w-32 h-8 bg-gray-200 dark:bg-gray-800 rounded mb-3 animate-pulse"></div>
                    <div class="w-full h-4 bg-gray-200 dark:bg-gray-800 rounded mb-2 animate-pulse"></div>
                    <div class="w-2/3 h-4 bg-gray-200 dark:bg-gray-800 rounded mb-10 animate-pulse"></div>

                    <!-- Form Inputs Skeleton -->
                    <div class="w-full h-[56px] bg-gray-100 dark:bg-gray-800 rounded-md mb-5 animate-pulse"></div>
                    <div class="w-full h-[56px] bg-gray-100 dark:bg-gray-800 rounded-md mb-3 animate-pulse"></div>

                    <div class="flex justify-end mb-8">
                        <div class="w-32 h-4 bg-gray-200 dark:bg-gray-800 rounded animate-pulse"></div>
                    </div>

                    <!-- Button Skeleton -->
                    <div class="w-full h-[52px] bg-gray-200 dark:bg-gray-800 rounded-full animate-pulse"></div>

                    <!-- Social Logins Skeleton -->
                    <div class="mt-10 flex flex-col items-center">
                        <div class="w-48 h-4 bg-gray-200 dark:bg-gray-800 rounded mb-8 animate-pulse"></div>
                        <div class="flex gap-6">
                            <div class="w-7 h-7 bg-gray-200 dark:bg-gray-800 rounded-full animate-pulse"></div>
                            <div class="w-7 h-7 bg-gray-200 dark:bg-gray-800 rounded-full animate-pulse"></div>
                            <div class="w-7 h-7 bg-gray-200 dark:bg-gray-800 rounded-full animate-pulse"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column Skeleton -->
            <div class="hidden md:block md:w-1/2 lg:w-[55%] bg-gray-100 dark:bg-gray-800 animate-pulse"></div>
        </div>

    @elseif($type === 'landing')
        <div class="bg-white min-h-screen">
            <!-- Navigation -->
            <nav class="fixed top-0 left-0 right-0 z-50 border-b border-gray-100 bg-white/90 backdrop-blur-md">
                <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
                    <div class="w-24 h-7 bg-gray-200 rounded animate-pulse"></div>
                    <div class="hidden md:flex gap-8">
                        <div class="w-14 h-4 bg-gray-200 rounded animate-pulse"></div>
                        <div class="w-20 h-4 bg-gray-200 rounded animate-pulse"></div>
                        <div class="w-20 h-4 bg-gray-200 rounded animate-pulse"></div>
                        <div class="w-24 h-4 bg-gray-200 rounded animate-pulse"></div>
                        <div class="w-16 h-4 bg-gray-200 rounded animate-pulse"></div>
                    </div>
                </div>
            </nav>
            
            <!-- Hero Section -->
            <section class="min-h-screen flex items-center justify-center px-6">
                <div class="max-w-4xl mx-auto text-center w-full pt-20">
                    <div class="flex justify-center mb-6">
                        <div class="w-64 h-20 md:w-[28rem] md:h-24 bg-gray-200 rounded-lg animate-pulse"></div>
                    </div>
                    <div class="flex justify-center mb-4">
                        <div class="w-full max-w-2xl h-6 bg-gray-200 rounded animate-pulse"></div>
                    </div>
                    <div class="flex justify-center mb-10">
                        <div class="w-3/4 max-w-lg h-6 bg-gray-200 rounded animate-pulse"></div>
                    </div>
                    <div class="flex justify-center gap-4">
                        <div class="w-36 h-12 bg-gray-200 rounded-full animate-pulse"></div>
                        <div class="w-36 h-12 bg-gray-200 rounded-full animate-pulse"></div>
                    </div>
                </div>
            </section>
        </div>
    @endif
</div>

<script>
    (function() {
        // Run immediately to avoid reference errors, bind to DOMContentLoaded and load
        const initSkeleton = () => {
            const skeleton = document.getElementById('page-skeleton');
            if (!skeleton) return;
            
            // Fallback to remove skeleton if resources take too long (e.g. 3s max)
            const maxWait = setTimeout(removeSkeleton, 3000);

            window.addEventListener('load', () => {
                clearTimeout(maxWait);
                // Slight delay ensures the layout has fully painted before revealing
                setTimeout(removeSkeleton, 150); 
            });

            function removeSkeleton() {
                skeleton.classList.add('opacity-0');
                // Wait for the CSS transition (500ms) to finish before removing from DOM flow
                setTimeout(() => {
                    skeleton.style.display = 'none';
                    skeleton.setAttribute('aria-busy', 'false');
                    // Optional: remove entirely from DOM
                    // skeleton.remove();
                }, 500);
            }
        };

        if (document.readyState === 'complete') {
            initSkeleton();
            // If already complete, trigger removal manually
            window.dispatchEvent(new Event('load'));
        } else {
            document.addEventListener('DOMContentLoaded', initSkeleton);
        }
    })();
</script>
