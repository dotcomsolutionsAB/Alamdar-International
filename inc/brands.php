<!-- ===================== BRANDS LOGO SLIDER (more attractive + auto) ===================== -->
<section id="brands" class="relative py-14 bg-white border-t border-black/10 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex items-center justify-center mb-6">
            <div class="h-[2px] w-14 bg-primary"></div>
            <div class="mx-4 text-sm font-bold tracking-widest text-[#23223b] uppercase">Trusted by Brands</div>
            <div class="h-[2px] w-14 bg-primary"></div>
        </div>

        <div class="relative">
            <!-- fade edges -->
            <div
                class="pointer-events-none absolute left-0 top-0 bottom-0 w-24 bg-gradient-to-r from-white to-transparent z-10">
            </div>
            <div
                class="pointer-events-none absolute right-0 top-0 bottom-0 w-24 bg-gradient-to-l from-white to-transparent z-10">
            </div>

            <div class="brand-marquee flex items-center gap-24">
                <div class="brand-row flex items-center gap-24">
                    <img src="https://dummyimage.com/170x56/efefef/9a9a9a&text=envato"
                        class="h-11 opacity-60 grayscale hover:opacity-100 hover:grayscale-0 transition"
                        alt="brand">
                    <img src="https://dummyimage.com/170x56/efefef/9a9a9a&text=codecanyon"
                        class="h-11 opacity-60 grayscale hover:opacity-100 hover:grayscale-0 transition"
                        alt="brand">
                    <img src="https://dummyimage.com/170x56/efefef/9a9a9a&text=themeforest"
                        class="h-11 opacity-60 grayscale hover:opacity-100 hover:grayscale-0 transition"
                        alt="brand">
                    <img src="https://dummyimage.com/170x56/efefef/9a9a9a&text=graphicriver"
                        class="h-11 opacity-60 grayscale hover:opacity-100 hover:grayscale-0 transition"
                        alt="brand">
                    <img src="https://dummyimage.com/170x56/efefef/9a9a9a&text=photodune"
                        class="h-11 opacity-60 grayscale hover:opacity-100 hover:grayscale-0 transition"
                        alt="brand">
                    <img src="https://dummyimage.com/170x56/efefef/9a9a9a&text=elements"
                        class="h-11 opacity-60 grayscale hover:opacity-100 hover:grayscale-0 transition"
                        alt="brand">
                </div>

                <div class="brand-row flex items-center gap-24" aria-hidden="true">
                    <img src="https://dummyimage.com/170x56/efefef/9a9a9a&text=envato"
                        class="h-11 opacity-60 grayscale hover:opacity-100 hover:grayscale-0 transition"
                        alt="brand">
                    <img src="https://dummyimage.com/170x56/efefef/9a9a9a&text=codecanyon"
                        class="h-11 opacity-60 grayscale hover:opacity-100 hover:grayscale-0 transition"
                        alt="brand">
                    <img src="https://dummyimage.com/170x56/efefef/9a9a9a&text=themeforest"
                        class="h-11 opacity-60 grayscale hover:opacity-100 hover:grayscale-0 transition"
                        alt="brand">
                    <img src="https://dummyimage.com/170x56/efefef/9a9a9a&text=graphicriver"
                        class="h-11 opacity-60 grayscale hover:opacity-100 hover:grayscale-0 transition"
                        alt="brand">
                    <img src="https://dummyimage.com/170x56/efefef/9a9a9a&text=photodune"
                        class="h-11 opacity-60 grayscale hover:opacity-100 hover:grayscale-0 transition"
                        alt="brand">
                    <img src="https://dummyimage.com/170x56/efefef/9a9a9a&text=elements"
                        class="h-11 opacity-60 grayscale hover:opacity-100 hover:grayscale-0 transition"
                        alt="brand">
                </div>
            </div>
        </div>
    </div>

    <style>
        #brands .brand-marquee {
            width: max-content;
            animation: brandScroll 16s linear infinite;
        }

        #brands:hover .brand-marquee {
            animation-play-state: paused;
        }

        @keyframes brandScroll {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }
    </style>
</section>