    <section id="reviews" class="relative py-24 overflow-hidden bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="relative bg-[#23223b] rounded-[6px] shadow-2xl overflow-visible">

                <!-- LEFT white pill dots (WORKING) -->
                <div class="absolute -left-6 top-1/2 -translate-y-1/2 z-30">
                    <div
                        class="relative w-14 h-44 bg-white rounded-[18px] shadow-lg flex flex-col items-center justify-center gap-5">
                        <button class="review-dot" data-dot="0" aria-label="Review 1"></button>
                        <button class="review-dot" data-dot="1" aria-label="Review 2"></button>
                        <button class="review-dot" data-dot="2" aria-label="Review 3"></button>
                    </div>
                </div>

                <div class="relative p-12 md:p-16">
                    <!-- Avatar -->
                    <div class="absolute left-12 top-10 z-20">
                        <div id="review-avatar-wrap"
                            class="relative w-[260px] h-[260px] rounded-full bg-white overflow-hidden shadow-2xl ring-4 ring-white">
                            <img id="review-avatar" src="https://picsum.photos/600/600?random=91" alt="Client"
                                class="w-full h-full object-cover" />
                        </div>
                        <!-- <div
                                class="absolute right-[-22px] top-1/2 -translate-y-1/2 w-14 h-14 rounded-full bg-[#23223b]">
                            </div> -->
                    </div>

                    <!-- Content -->
                    <div class="ml-[270px]">
                        <div id="review-topbar"
                            class="review-anim bg-gradient-to-r from-[#ff5c2a] to-[#ff7a4d] px-10 py-6 shadow-xl flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                            <div>
                                <h3 id="review-name" class="text-2xl font-extrabold text-white leading-tight">Jhone
                                    Rox</h3>
                                <p id="review-role" class="text-white/85 font-medium -mt-0.5">Manager</p>
                            </div>
                            <div id="review-stars" class="flex items-center gap-1 text-white text-xl"></div>
                        </div>

                        <div class="mt-10 flex items-start gap-8">
                            <div class="text-primary text-6xl leading-none font-black select-none">“</div>
                            <p id="review-text"
                                class="review-anim text-white/55 text-2xl leading-relaxed italic max-w-3xl"></p>
                        </div>

                        <div class="mt-10 flex items-center gap-4">
                            <button id="review-prev"
                                class="w-12 h-12 rounded-full border border-white/35 text-white flex items-center justify-center hover:bg-white hover:text-[#23223b] transition">
                                <i class="fa fa-arrow-left"></i>
                            </button>
                            <button id="review-next"
                                class="w-12 h-12 rounded-full border border-white/35 text-white flex items-center justify-center hover:bg-white hover:text-[#23223b] transition">
                                <i class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="absolute left-0 right-0 bottom-0 h-[2px] bg-white/10"></div>
            </div>
        </div>

        <style>
            /* DOTS */
            #reviews .review-dot {
                width: 10px;
                height: 10px;
                border-radius: 9999px;
                border: 2px solid rgba(35, 34, 59, .55);
                background: transparent;
                transition: all .2s ease;
                cursor: pointer;
            }

            #reviews .review-dot:hover {
                border-color: #ff5c2a;
                transform: scale(1.05);
            }

            #reviews .review-dot.dot-active {
                background: #ff5c2a;
                border-color: #ff5c2a;
                box-shadow: 0 0 0 6px rgba(255, 92, 42, .18);
            }

            /* ANIMATIONS */
            #reviews .rev-fade-out {
                opacity: 0;
                transform: translateY(6px);
                transition: all .22s ease;
            }

            #reviews .rev-in-right {
                animation: revInRight .45s ease both;
            }

            #reviews .rev-in-left {
                animation: revInLeft .45s ease both;
            }

            #reviews .rev-avatar-pop {
                animation: revAvatarPop .55s ease both;
            }

            @keyframes revInRight {
                from {
                    opacity: 0;
                    transform: translateX(14px);
                }

                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            @keyframes revInLeft {
                from {
                    opacity: 0;
                    transform: translateX(-14px);
                }

                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            @keyframes revAvatarPop {
                0% {
                    transform: scale(.92);
                }

                55% {
                    transform: scale(1.04);
                }

                100% {
                    transform: scale(1);
                }
            }
        </style>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const reviews = [
                    {
                        name: "Jhone Rox",
                        role: "Manager",
                        stars: 5,
                        avatar: "https://picsum.photos/600/600?random=91",
                        text: "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration some form, by injected humour,"
                    },
                    {
                        name: "Aaliya Khan",
                        role: "Product Lead",
                        stars: 5,
                        avatar: "https://picsum.photos/600/600?random=92",
                        text: "Outstanding support and smooth delivery. The team understood our needs and executed with precision and creativity."
                    },
                    {
                        name: "David Miller",
                        role: "Founder",
                        stars: 4,
                        avatar: "https://picsum.photos/600/600?random=93",
                        text: "Great experience overall. Strong communication and great design sense. Highly recommended for modern web solutions."
                    }
                ];

                let idx = 0;
                let animating = false;
                let timer = null;

                const dots = document.querySelectorAll("#reviews .review-dot");
                const nameEl = document.getElementById("review-name");
                const roleEl = document.getElementById("review-role");
                const textEl = document.getElementById("review-text");
                const avatarEl = document.getElementById("review-avatar");
                const avatarWrap = document.getElementById("review-avatar-wrap");
                const starsEl = document.getElementById("review-stars");
                const animTargets = document.querySelectorAll("#reviews .review-anim");

                function renderStars(count) {
                    starsEl.innerHTML = "";
                    for (let i = 0; i < 5; i++) {
                        const s = document.createElement("i");
                        s.className = "fa fa-star";
                        s.style.opacity = i < count ? "1" : "0.3";
                        starsEl.appendChild(s);
                    }
                }

                function setActiveDot(i) {
                    dots.forEach((d, di) => d.classList.toggle("dot-active", di === i));
                }

                function apply(i) {
                    const r = reviews[i];
                    nameEl.textContent = r.name;
                    roleEl.textContent = r.role;
                    textEl.textContent = r.text;
                    avatarEl.src = r.avatar;
                    renderStars(r.stars);
                    setActiveDot(i);
                }

                function play(dir) {
                    animTargets.forEach(el => {
                        el.classList.remove("rev-in-left", "rev-in-right");
                        void el.offsetWidth;
                        el.classList.add(dir > 0 ? "rev-in-right" : "rev-in-left");
                    });
                    avatarWrap.classList.remove("rev-avatar-pop");
                    void avatarWrap.offsetWidth;
                    avatarWrap.classList.add("rev-avatar-pop");
                }

                function show(i, dir = 1) {
                    if (animating) return;
                    animating = true;

                    // quick fade-out
                    animTargets.forEach(el => el.classList.add("rev-fade-out"));

                    setTimeout(() => {
                        apply(i);
                        animTargets.forEach(el => el.classList.remove("rev-fade-out"));
                        play(dir);
                        idx = i;
                        animating = false;
                    }, 220);
                }

                function next() { show((idx + 1) % reviews.length, 1); }
                function prev() { show((idx - 1 + reviews.length) % reviews.length, -1); }

                function startAuto() {
                    stopAuto();
                    timer = setInterval(() => {
                        console.log("Auto-play running");
                        if (!animating) next();
                    }, 4000);
                }
                function stopAuto() {
                    if (timer) { clearInterval(timer); timer = null; }
                }

                document.getElementById("review-next").onclick = () => { stopAuto(); next(); startAuto(); };
                document.getElementById("review-prev").onclick = () => { stopAuto(); prev(); startAuto(); };

                dots.forEach(dot => {
                    dot.addEventListener("click", () => {
                        const i = parseInt(dot.dataset.dot, 10);
                        if (i === idx || animating) return;
                        stopAuto();
                        show(i, i > idx ? 1 : -1);
                        startAuto();
                    });
                });

                // pause on hover
                const panel = document.querySelector("#reviews .bg-[#23223b]");
                panel.addEventListener("mouseenter", stopAuto);
                panel.addEventListener("mouseleave", startAuto);

                // init
                apply(0);
                play(1);
                startAuto();
            });
        </script>
    </section>