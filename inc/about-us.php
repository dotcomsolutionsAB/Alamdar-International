<section id="about-us" class="relative py-24 overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 bg-cover bg-center"
        style="background-image:url('https://pixydrops.com/getizy-html/assets/images/backgrounds/about-1-dark.png');">
    </div>

    <!-- Deep Blue Overlay -->
    <div class="absolute inset-0 bg-[#0b1430]/80"></div>

    <div class="relative z-10 max-w-9xl mx-auto flex flex-col md:flex-row items-center justify-between px-4 gap-12">

        <!-- LEFT: Images + Center Logo Circle (NO water effect here) -->
        <div class="absolute z-20 w-[38vw] h-[100vh] flex-shrink-0 flex items-center justify-center">
            <img src="assets/home_valve.jpg" alt="About Image 1"
                class="absolute left-20 top-0 w-[30vw] h-[520px] object-cover shadow-2xl opacity-0 -translate-y-16 animate-[aboutImg1In_0.7s_ease_forwards]"
                style="animation-delay:0.2s;">

            <img src="assets/about/about_2.png" alt="About Image 2"
                class="absolute right-0 bottom-0 w-[27vw] h-[400px] object-cover shadow-xl opacity-0 translate-y-16 animate-[aboutImg2In_0.7s_ease_forwards]"
                style="animation-delay:0.45s;">

        </div>
        <!-- Center Logo Circle -->
        <div
            class="absolute left-[35%] top-[40%] -translate-x-1/2 -translate-y-1/2 z-20 w-48 h-48 rounded-full bg-[#1f8fc0] flex items-center justify-center shadow-2xl border-4 border-white/20">
            <img src="<?= SITE_LOGO ?>" alt="Logo"
                class="w-44 h-44 rounded-full object-cover" />
        </div>
        <!-- RIGHT: ORANGE CIRCLE SECTION + WATER RING -->
        <div class="relative flex-1 flex items-center justify-center md:justify-end">
            <!-- This wrapper becomes the circle + ring -->
            <div class="about-orange-ring relative w-full max-w-[62vw] min-h-[580px] md:min-h-[590px]">

                <!-- Orange Circle Body -->
                <div class="about-orange-body relative h-full w-full rounded-full bg-gradient-to-br from-[#28a5db] to-[#1a223d] shadow-2xl px-24 py-16 md:px-48 md:py-20 overflow-hidden opacity-0 translate-x-16 animate-[cardIn_0.7s_ease_forwards]"
                    style="animation-delay:0.25s;">

                    <span class="text-xs font-bold text-white flex items-center gap-2 mb-3">
                        <span class="w-2 h-2 rounded-full bg-white"></span> ABOUT US
                    </span>

                    <h2 class="text-3xl md:text-5xl font-extrabold text-white leading-tight">
                        Discover <br />Our Products Range
                    </h2>

                    <!-- <p class="text-white/85 mt-5 max-w-xl">
                        Comprehensive industrial solutions for diverse applications
                    </p> -->

                    <div class="max-w-xl">
                        <hr class="border-white/30 my-7">
                    </div>

                    <!-- Consultation Box -->
                    <div class="flex items-center gap-4 bg-[#23223b] rounded-2xl px-6 py-4 shadow-xl opacity-0 translate-x-16 animate-[consultIn_0.7s_ease_forwards]"
                        style="animation-delay:0.6s;">
                        <img src="https://picsum.photos/200/200?random=44" alt="Consultation"
                            class="w-16 h-16 rounded-full object-cover border-4 border-white" />
                        <div>
                            <h3 class="text-xl font-bold text-white mb-1">Our Products Range</h3>
                            <p class="text-white/70 text-sm">ALAMDAR INTERNATIONAL is a professionally managed industrial solutions company with over 20 years of industry experience in manufacturing and supplying engineered products across multiple sectors. Founded by HN Dhaman, the company has consistently focused on delivering quality-driven and reliable solutions backed by technical expertise.</p>
                        </div>
                    </div>

                    <!-- List -->
                    <div class="mt-8 space-y-4">
                        <div class="flex items-center gap-3">
                            <span
                                class="w-6 h-6 rounded-full bg-white flex items-center justify-center text-primary font-bold">
                                <i class="fa fa-check"></i>
                            </span>
                            <span class="text-white font-medium">Quality Certified</span>
                        </div>

                        <div class="flex items-center gap-3">
                            <span
                                class="w-6 h-6 rounded-full bg-white flex items-center justify-center text-primary font-bold">
                                <i class="fa fa-check"></i>
                            </span>
                            <span class="text-white font-medium">Expert Manufacturing</span>
                        </div>

                        <div class="flex items-center gap-3">
                            <span
                                class="w-6 h-6 rounded-full bg-white flex items-center justify-center text-primary font-bold">
                                <i class="fa fa-check"></i>
                            </span>
                            <span class="text-white font-medium">Customer Focus</span>
                        </div>
                    </div>

                    <a href="#"
                        class="inline-block mt-10 bg-[#23223b] hover:bg-[#1b2230] text-white font-semibold px-8 py-3 rounded-lg shadow transition">
                        Discover More
                    </a>

                </div>
            </div>
        </div>

    </div>

    <style>
        /* =========================
            ORANGE SECTION WATER RING
            ========================= */
        .about-orange-ring::before {
            content: "";
            position: absolute;
            inset: -26px;
            border-radius: 9999px;
            background: conic-gradient(from 0deg, transparent 0deg, rgba(75, 170, 255, 0.0) 35deg, #3F51B5 85deg, rgba(75, 170, 255, 0.12) 140deg, transparent 215deg, #28a5db 305deg, transparent 360deg);
            animation: orangeRingSpin 2.2s linear infinite;
            z-index: 1;

            /* make it a ring */
            -webkit-mask: radial-gradient(circle, transparent 64%, #000 65%);
            mask: radial-gradient(circle, transparent 64%, #000 65%);
            pointer-events: none;
        }

        .about-orange-ring::after {
            content: "";
            position: absolute;
            inset: -10px;
            border-radius: 9999px;
            border: 2px solid rgba(75, 170, 255, 0.28);
            box-shadow: 0 0 22px rgba(75, 170, 255, 0.22);
            z-index: 2;
            pointer-events: none;
        }

        /* keep orange body above ring */
        .about-orange-body {
            position: relative;
            z-index: 5;
        }

        #about-us {
            position: relative;
            background-color: var(--getizy-secondary, #222230);
            padding-bottom: 160px;
            z-index: 1;
            overflow: hidden;
        }

        @keyframes orangeRingSpin {
            to {
                transform: rotate(360deg);
            }
        }

        /* Entrance animations you already had */
        @keyframes aboutImg1In {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes aboutImg2In {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes cardIn {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes consultIn {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
    
    <style>
        @media (max-width: 1024px) {

            #about-us .absolute {
                position: relative !important;
                left: auto !important;
                top: auto !important;
                transform: none !important;
            }

            .about-orange-ring {
                max-width: 100% !important;
            }

            .about-orange-body {
                border-radius: 28px !important;
                padding: 32px !important;
            }
        }
    </style>
</section>