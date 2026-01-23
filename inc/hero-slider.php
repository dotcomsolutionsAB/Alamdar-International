<section id="hero-slider"
        class="relative min-h-[600px] flex items-center justify-center overflow-hidden btn-secondary-pri-grad">
        <div class="absolute inset-0 pointer-events-none"></div>
        <div
            class="max-w-7xl mx-auto w-full relative z-10 flex flex-col md:flex-row items-center justify-between py-20 px-4">
            <!-- Left: Text Content -->
            <div id="slider-left"
                class="flex-1 max-w-xl space-y-6 transition-all duration-700 opacity-100 translate-x-0">
                <h5 id="slide-title" class="text-lg font-semibold text-primary">Take the Digital Advantages</h5>
                <h1 id="slide-heading" class="text-5xl md:text-6xl font-extrabold leading-tight">
                    <span class="block">Shaping the</span>
                    <span class="block">Perfect Website <span class="text-primary font-black">Solution</span></span>
                </h1>
                <p id="slide-desc" class="text-lg text-gray-600">There are many variations of passages of lorem
                    Ipsum available, but the majority have suffered alteration in some form,</p>
                <div class="flex items-center gap-4 mt-6">
                    <a id="slide-btn" href="#"
                        class="inline-block bg-primary hover:bg-[#ff7a4d] text-white font-bold px-8 py-3 rounded-lg shadow transition">Discover
                        More</a>
                    <button
                        class="w-12 h-12 rounded-full bg-[#232c3b] flex items-center justify-center text-white text-2xl shadow-lg hover:bg-primary transition"><i
                            class="fa fa-play"></i></button>
                </div>
            </div>
            <!-- Right: Images & Arrow -->
            <div class="flex-1 flex flex-col items-end justify-center relative min-w-[350px]">
                <div class="relative w-full h-[400px] flex items-end">
                    <img id="slide-img-top" src="https://picsum.photos/200/300?random=15" alt="Image 1"
                        class="absolute left-0 top-0 w-[400px] h-[300px] object-cover rounded-2xl shadow-2xl transition-all duration-700 opacity-100 translate-y-0 z-10" />
                    <img id="slide-img-bottom" src="https://picsum.photos/200/300?random=1" alt="Image 2"
                        class="absolute right-20 bottom-0 w-[330px] h-[220px] object-cover rounded-xl shadow-xl transition-all duration-700 opacity-100 translate-x-0 z-20" />
                </div>
                <!-- Arrow and Dots -->
                <div class="flex flex-col items-center gap-4 mt-0 absolute z-40">
                    <button id="next-slide"
                        class="w-16 h-16 rounded-full btn-secondary-grad flex items-center justify-center text-white text-3xl shadow-xl hover:scale-110 transition-all duration-300"><i
                            class="fa fa-arrow-right"></i></button>
                    <div id="slider-dots" class="flex flex-col gap-3 mt-2">
                        <button class="w-4 h-4 rounded-full border-2 border-primary-30 bg-primary"
                            data-dot="0"></button>
                        <button class="w-4 h-4 rounded-full border-2 border-primary-30 bg-white/60"
                            data-dot="1"></button>
                        <button class="w-4 h-4 rounded-full border-2 border-primary-30 bg-white/60"
                            data-dot="2"></button>
                    </div>
                </div>
            </div>
        </div>

    <script>
    const slides = [
        {
        images: [
            'assets/slide_1.jpg',
            'assets/A_rubber.jpeg'
        ],
        // OPTIONAL: responsive classes from JSON (won’t change your layout, only makes it adapt)
        imgTopClass: 'w-[280px] h-[220px] sm:w-[340px] sm:h-[260px] md:w-[400px] md:h-[300px]',
        imgBottomClass: 'w-[240px] h-[170px] sm:w-[280px] sm:h-[190px] md:w-[330px] md:h-[220px] right-4 sm:right-10 md:right-20',

        title: 'Alamdar International',
        heading: ['Welcome', 'to <span class="text-primary font-black">Alamdar International</span>'],
        desc: 'Your trusted partner for high-quality industrial products and solutions. We specialize in manufacturing and supplying premium valves, rubber products, bellows, pressure & temperature instruments, ceramic products, and cast basalt.',
        btn: 'Discover More',
        btnLink: '#'
        },
        {
        images: [
            'https://picsum.photos/600/500?random=3',
            'https://picsum.photos/600/500?random=35'
        ],
        imgTopClass: 'w-[280px] h-[220px] sm:w-[340px] sm:h-[260px] md:w-[400px] md:h-[300px]',
        imgBottomClass: 'w-[240px] h-[170px] sm:w-[280px] sm:h-[190px] md:w-[330px] md:h-[220px] right-4 sm:right-10 md:right-20',

        title: 'Grow Your Business',
        heading: ['Boost Your', 'Online Presence <span class="text-primary font-black">Now</span>'],
        desc: 'Unlock new opportunities with our expert marketing strategies and creative campaigns.',
        btn: 'Get Started',
        btnLink: '#services-grid.html'
        },
        {
        images: [
            'https://picsum.photos/600/500?random=2',
            'https://picsum.photos/600/500?random=25'
        ],
        imgTopClass: 'w-[280px] h-[220px] sm:w-[340px] sm:h-[260px] md:w-[400px] md:h-[300px]',
        imgBottomClass: 'w-[240px] h-[170px] sm:w-[280px] sm:h-[190px] md:w-[330px] md:h-[220px] right-4 sm:right-10 md:right-20',

        title: 'Digital Experience',
        heading: ['Transform Your', 'Business <span class="text-primary font-black">Digitally</span>'],
        desc: 'We help brands stand out in the digital world with stunning design and technology.',
        btn: 'Contact Us',
        btnLink: '#contact.html'
        }
    ];

    let currentSlide = 0;
    let animating = false;

    // turn this ON if you face caching issue with local assets
    const CACHE_BUST = true;

    function withCacheBust(url) {
        if (!CACHE_BUST) return url;
        // only bust cache for local assets (optional)
        const isLocal = !/^https?:\/\//i.test(url);
        if (!isLocal) return url;
        const joiner = url.includes('?') ? '&' : '?';
        return `${url}${joiner}v=${Date.now()}`;
    }

    function animateOut(dir = 1) {
        animating = true;

        const left = document.getElementById('slider-left');
        left.classList.remove('opacity-100', 'translate-x-0');
        left.classList.add('opacity-0', dir > 0 ? '-translate-x-32' : 'translate-x-32');

        const imgTop = document.getElementById('slide-img-top');
        imgTop.classList.remove('opacity-100', 'translate-y-0');
        imgTop.classList.add('opacity-0', 'translate-y-32');

        const imgBottom = document.getElementById('slide-img-bottom');
        imgBottom.classList.remove('opacity-100', 'translate-x-0');
        imgBottom.classList.add('opacity-0', 'translate-x-32');

        const next = document.getElementById('next-slide');
        next.classList.remove('opacity-100', 'translate-x-0');
        next.classList.add('opacity-0', 'translate-x-16');
    }

    function animateIn() {
        const left = document.getElementById('slider-left');
        left.classList.remove('opacity-0', '-translate-x-32', 'translate-x-32');
        left.classList.add('opacity-100', 'translate-x-0');

        const imgTop = document.getElementById('slide-img-top');
        imgTop.classList.remove('opacity-0', 'translate-y-32');
        imgTop.classList.add('opacity-100', 'translate-y-0');

        const imgBottom = document.getElementById('slide-img-bottom');
        imgBottom.classList.remove('opacity-0', 'translate-x-32');
        imgBottom.classList.add('opacity-100', 'translate-x-0');

        const next = document.getElementById('next-slide');
        next.classList.remove('opacity-0', 'translate-x-16');
        next.classList.add('opacity-100', 'translate-x-0');

        animating = false;
    }

    function applyImageSizingFromJson(imgEl, baseClasses, jsonClasses) {
        // keep your original styling classes intact, only add/replace sizing if provided
        imgEl.className = `${baseClasses} ${jsonClasses || ''}`.trim();
    }

    function updateSlideContent(slide) {
        const imgTop = document.getElementById('slide-img-top');
        const imgBottom = document.getElementById('slide-img-bottom');

        imgTop.src = withCacheBust(slide.images[0]);
        imgBottom.src = withCacheBust(slide.images[1]);

        document.getElementById('slide-title').textContent = slide.title;
        document.getElementById('slide-heading').innerHTML =
        `<span class='block'>${slide.heading[0]}</span><span class='block'>${slide.heading[1]}</span>`;
        document.getElementById('slide-desc').textContent = slide.desc;
        document.getElementById('slide-btn').textContent = slide.btn;
        document.getElementById('slide-btn').href = slide.btnLink;

        // Base classes = your original ones (same look)
        const baseTop =
        "absolute left-0 top-0 object-cover rounded-2xl shadow-2xl transition-all duration-700 opacity-100 translate-y-0 z-10";
        const baseBottom =
        "absolute bottom-0 object-cover rounded-xl shadow-xl transition-all duration-700 opacity-100 translate-x-0 z-20";

        // Responsive sizing from JSON (optional)
        applyImageSizingFromJson(imgTop, baseTop, slide.imgTopClass || "w-[400px] h-[300px]");
        applyImageSizingFromJson(imgBottom, baseBottom, slide.imgBottomClass || "w-[330px] h-[220px] right-20");
    }

    function setActiveDot(idx) {
        document.querySelectorAll('#slider-dots button').forEach((dot, i) => {
        dot.classList.toggle('bg-primary', i === idx);
        dot.classList.toggle('bg-white/60', i !== idx);
        });
    }

    function showSlide(idx, dir = 1) {
        if (animating) return;

        animateOut(dir);
        setTimeout(() => {
        updateSlideContent(slides[idx]);
        setActiveDot(idx);
        animateIn();
        }, 400);

        currentSlide = idx;
    }

    document.getElementById('next-slide').onclick = function () {
        if (animating) return;
        showSlide((currentSlide + 1) % slides.length, 1);
    };

    document.querySelectorAll('#slider-dots button').forEach((dot, i) => {
        dot.onclick = () => {
        if (animating || i === currentSlide) return;
        showSlide(i, i > currentSlide ? 1 : -1);
        };
    });

    // ✅ Initial render (THIS fixes your “same image” issue)
    updateSlideContent(slides[0]);
    setActiveDot(0);
    animateIn();
    </script>
    <style>
        @media (max-width: 1024px) {

            #hero-slider {
                min-height: auto;
                padding-top: 0px;
            }

            #hero-slider .flex {
                flex-direction: column;
            }

            #hero-slider img {
                position: relative !important;
                width: 100% !important;
                height: 20vh;
                margin-bottom: 16px;
            }

            #hero-slider h1 {
                font-size: 34px !important;
                line-height: 1.2;
            }

            #hero-slider .min-w-\[350px\] {
                min-width: 100% !important;
            }
        }
    </style>
</section>