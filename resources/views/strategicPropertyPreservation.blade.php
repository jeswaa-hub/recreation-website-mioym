<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strategic Property Preservation | MIOYM</title>
    <meta name="description" content="Strategic Property Preservation LLC provides property preservation, inspections, loss mitigation, and REO management services nationwide.">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"></noscript>
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: linear-gradient(to bottom, #000000 0%, #1a1a1a 65%, #3a3a3a 100%);
            color: #ffffff;
            line-height: 1.6;
            overflow-x: hidden;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        main { flex: 1; }
        .hero-surface {
            position: relative;
            background:
                radial-gradient(520px 520px at 96% 14%, rgba(217, 217, 217, 0.16) 0 34%, transparent 35%),
                radial-gradient(520px 520px at 12% 92%, rgba(217, 217, 217, 0.12) 0 32%, transparent 33%),
                radial-gradient(900px 420px at 72% 18%, rgba(217, 217, 217, 0.12), transparent 62%),
                linear-gradient(180deg, #0b0a0a 0%, #151212 100%);
            overflow: hidden;
        }
        .hero-surface::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, rgba(217, 217, 217, 0.22) 0%, rgba(217, 217, 217, 0.10) 12%, transparent 26%);
            clip-path: polygon(0 0, 8% 0, 0 55%);
            opacity: 0.65;
        }
        .hero-surface::after {
            content: '';
            position: absolute;
            inset: 0;
            background:
                radial-gradient(800px 320px at 64% 12%, rgba(0, 0, 0, 0.55), transparent 70%),
                radial-gradient(780px 340px at 86% 22%, rgba(0, 0, 0, 0.35), transparent 72%);
            pointer-events: none;
        }
        .hero-art {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            opacity: 0.85;
            pointer-events: none;
        }
        .sp-card {
            background: rgba(217, 217, 217, 0.92);
            color: #111111;
            border-radius: 22px;
            padding: 18px 18px 20px;
            box-shadow: 0 30px 70px rgba(0, 0, 0, 0.35);
        }
        .spp-panel {
            background: rgba(120, 120, 120, 0.92);
            border: 1px solid rgba(255, 255, 255, 0.08);
            color: rgba(255, 255, 255, 0.92);
            padding: 26px 26px 28px;
            box-shadow: 0 30px 70px rgba(0, 0, 0, 0.35);
        }
        .spp-curve-tr { border-radius: 14px 140px 14px 14px; }
        .spp-curve-tl { border-radius: 140px 14px 14px 14px; }
        .spp-curve-tt { border-radius: 140px 140px 14px 14px; }
        .spp-curve-bb { border-radius: 14px 14px 140px 140px; }
        .spp-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 800;
            letter-spacing: -0.01em;
            color: rgba(255, 255, 255, 0.95);
        }
        .spp-body {
            font-size: 0.875rem;
            line-height: 1.35rem;
            color: rgba(255, 255, 255, 0.78);
        }
        .sp-card-dark {
            background: rgba(45, 45, 45, 0.92);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 18px;
            padding: 16px 18px;
        }
        .sp-feature-card {
            background: rgba(45, 45, 45, 0.92);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 30px 70px rgba(0, 0, 0, 0.35);
        }
        .sp-feature-media {
            position: relative;
        }
        .sp-feature-media::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, transparent 0%, rgba(0, 0, 0, 0.45) 100%);
            pointer-events: none;
        }
        .sp-feature-body {
            padding: 16px 18px 18px;
        }
        .spp-bento-wrap {
            position: relative;
            margin-top: 3rem;
        }
        .spp-bento-card {
            background: rgba(120, 120, 120, 0.92);
            border: 1px solid rgba(255, 255, 255, 0.10);
            border-radius: 22px;
            color: rgba(255, 255, 255, 0.92);
            box-shadow: 0 30px 70px rgba(0, 0, 0, 0.35);
            overflow: hidden;
        }
        .spp-bento-pad {
            padding: 18px 18px 20px;
        }
        .spp-bento-media {
            border-radius: 16px;
            overflow: hidden;
            background: rgba(0, 0, 0, 0.10);
        }
        .spp-bento-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 800;
            letter-spacing: -0.01em;
        }
        .spp-bento-text {
            color: rgba(255, 255, 255, 0.80);
            font-size: 0.875rem;
            line-height: 1.35rem;
        }
        .sp-media {
            border-radius: 16px;
            overflow: hidden;
            background: rgba(0, 0, 0, 0.08);
        }
        .sp-pill {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 52px;
            height: 52px;
            border-radius: 999px;
            background: #3f3a3a;
            color: #ffffff;
            box-shadow: 0 18px 35px rgba(0, 0, 0, 0.35);
        }
    </style>
</head>
<body>
    @include('components.navigationHeader')

    <main class="pt-16 lg:pt-20">
        <section class="hero-surface">
            <div class="absolute inset-0 -z-10">
                <img src="{{ asset('img/bgAboutUs.png') }}" alt="" class="w-full h-full object-cover">
            </div>
            <div class="absolute inset-0 bg-black/70 -z-10"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-14">
                <div class="relative z-10">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white tracking-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                        Strategic Property<br>Preservation
                    </h1>

                    <p class="mt-10 text-center text-sm sm:text-base text-white/85 max-w-4xl mx-auto">
                        Discover unparalleled property management and asset preservation solutions with MIOYM. As a subsidiary of MIOYM, Strategic Property Preservation LLC is your trusted partner in regulatory-compliant residential and commercial property preservation services. Our nationwide network of field service professionals ensures timely, cost-effective, and investor/insurer guideline-compliant performance in every aspect of property care.
                    </p>
                </div>

                <div class="relative z-10 mt-12 grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-10 items-start">
                    <div class="spp-panel spp-curve-tr md:col-span-3">
                        <h3 class="spp-title text-2xl leading-tight">
                            Property<br>Preservation<br>Services
                        </h3>
                        <p class="spp-body mt-4">
                            Secure your assets with our comprehensive property preservation services. From winterization and lawn maintenance to HUD Convey Maintenance and Orderly Occupancy Termination, we streamline the process, ensuring your property is protected and maintained to the highest standards.
                        </p>
                    </div>

                    <div class="spp-panel spp-curve-tt text-center md:col-span-6 md:mt-10">
                        <h3 class="spp-title text-2xl leading-tight">
                            Inspection Services<br>Tailored to Your<br>Needs
                        </h3>
                        <p class="spp-body mt-4">
                            Strategic Property Preservation offers a full range of regulatory-compliant residential and commercial inspection services. Our professional field service representatives deliver prompt and cost-effective solutions, supporting various needs, including occupancy verification, reverse mortgages, and real property valuation.
                        </p>
                    </div>

                    <div class="spp-panel spp-curve-tr md:col-span-3">
                        <h3 class="spp-title text-2xl leading-tight">
                            Loss Mitigation<br>Expertise
                        </h3>
                        <p class="spp-body mt-4">
                            Navigate loan modifications, short sales, and deed-in-lieu-of-foreclosure programs seamlessly with our loss mitigation inspections. Our trained specialists provide on-site document delivery, notary services, and cash-for-keys negotiation, ensuring optimal resolution.
                        </p>
                    </div>

                    <div class="spp-panel spp-curve-tl md:col-span-3">
                        <h3 class="spp-title text-2xl leading-tight">
                            Insurance Loss and<br>FEMA Inspections
                        </h3>
                        <p class="spp-body mt-4">
                            Rely on us for thorough loss draft and casualty loss inspections, confirming the extent and nature of the damage. Our FEMA inspections assess property damage from declared disasters, providing valuable insights into homeowners' repair intentions.
                        </p>
                    </div>

                    <div class="spp-panel spp-curve-bb text-center md:col-span-6 md:-mt-6">
                        <h3 class="spp-title text-2xl leading-tight">
                            Property<br>Valuations
                        </h3>
                        <p class="spp-body mt-4">
                            As a leader in default management solutions, MIOYM delivers accurate residential property valuations, including broker price opinions (BPOs), automated valuation models (AVMs), and professional appraisals. Our unique approach incorporates AVM technology for reliable decision-making in dynamic real estate markets.
                        </p>
                    </div>

                    <div class="spp-panel spp-curve-tr md:col-span-3">
                        <h3 class="spp-title text-2xl leading-tight">
                            REO<br>Management
                        </h3>
                        <p class="spp-body mt-4">
                            MIOYM's REO professionals and specialized teams collaborate to minimize losses and maximize returns throughout the asset disposition. We ensure a comprehensive and compliant approach from occupied property management to valuations and marketing.
                        </p>
                    </div>
                </div>

                <div class="spp-bento-wrap relative z-10">
                    <div class="absolute -inset-x-10 top-10 h-[520px] rounded-[48px] bg-white/10 -z-10" style="transform: skewY(-6deg);"></div>
                    <div class="absolute -right-28 -top-10 h-[320px] w-[320px] rounded-full bg-white/10 blur-3xl -z-10"></div>

                    <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
                        <div class="spp-bento-card md:col-span-5 md:row-span-2">
                            <div class="spp-bento-pad">
                                <div class="spp-bento-media aspect-[16/9]">
                                    <img src="{{ asset('img/processimg3.png') }}" alt="Document Delivery, Marketing, and Closing" class="w-full h-full object-cover" data-fallback="{{ asset('img/processimg2.png') }}" onerror="this.onerror=null; this.src=this.dataset.fallback;">
                                </div>
                                <h3 class="spp-bento-title text-xl mt-5">Document Delivery, Marketing, and Closing:</h3>
                                <p class="spp-bento-text mt-3">
                                    Accelerate mortgage document processing with our document delivery solutions. Our marketing services, including pre-marketing, comprehensive strategies, and efficient closing and title services, streamline the entire process.
                                </p>
                            </div>
                        </div>

                        <div class="spp-bento-card md:col-span-4">
                            <div class="spp-bento-pad">
                                <h3 class="spp-bento-title text-xl">Quality Control and Evictions</h3>
                                <p class="spp-bento-text mt-3">
                                    MIOYM emphasizes quality control through professional property condition inspections, ensuring compliance with standards throughout the REO cycle. Our experienced eviction team coordinates lockout procedures with precision and professionalism.
                                </p>
                            </div>
                        </div>

                        <div class="spp-bento-card md:col-span-3">
                            <div class="spp-bento-pad">
                                <h3 class="spp-bento-title text-xl">Home Rehabilitation Services</h3>
                                <p class="spp-bento-text mt-3">
                                    Transform neglected properties into marketable assets with MIOYM's home rehabilitation services. Our experienced contractors enhance property value and buyer appeal from landscape renewal to full-scale remodeling.
                                </p>
                            </div>
                        </div>

                        <div class="spp-bento-card md:col-span-7">
                            <div class="grid grid-cols-1 sm:grid-cols-[240px_1fr] gap-6 p-5">
                                <div class="spp-bento-media aspect-[16/10]">
                                    <img src="{{ asset('img/imgteam1.png') }}" alt="Asset Management Expertise" class="w-full h-full object-cover" data-fallback="{{ asset('img/bgAboutUs.png') }}" onerror="this.onerror=null; this.src=this.dataset.fallback;">
                                </div>
                                <div class="min-w-0">
                                    <h3 class="spp-bento-title text-xl">Asset Management Expertise</h3>
                                    <p class="spp-bento-text mt-3">
                                        Our asset management division makes informed operational investment decisions, ensuring your portfolio grows while mitigating risk. Stay ahead with our vigilant market monitoring and commitment to staying current with industry trends and news.
                                    </p>
                                    <p class="spp-bento-text mt-3">
                                        Choose MIOYM for comprehensive, effective, and compliant asset management and property preservation solutions.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative z-10 mt-14 text-center">
                    <h2 class="text-2xl sm:text-3xl font-bold uppercase tracking-widest text-white" style="font-family: 'Plus Jakarta Sans', sans-serif;">Summary</h2>
                    <p class="mt-5 text-sm sm:text-base text-white/80 max-w-5xl mx-auto">
                        At MIOYM, we pride ourselves on being your all-encompassing solution for seamless asset management. From the meticulous care of your properties through comprehensive preservation services, inspections tailored to your specific needs, and adept loss mitigation strategies to accurate valuation solutions, we extend our expertise across the entire spectrum. Our REO management services ensure minimal losses and maximum returns, while our commitment to quality control, efficient document delivery, and strategic marketing culminates in streamlined and successful mortgage disposition. With a keen eye on industry trends and a dedicated approach to home rehabilitation, we empower you to excel in managing, preserving, and maximizing the value of your assets.
                    </p>
                    <p class="mt-4 text-sm sm:text-base font-semibold text-white">
                        Choose MIOYM for excellence in managing, preserving, and maximizing the value of your assets.
                    </p>
                </div>
            </div>
        </section>
    </main>

    @include('components.footer')
</body>
</html>
