<?php include 'header.php'; ?>

    <!-- ===================== ABOUT (same as screenshot + animations) ===================== -->
    <section id="about-best-agency" class="relative py-24 bg-white overflow-hidden">
        <!-- soft peach glow right like template -->
        <div
            class="absolute -right-40 -top-40 w-[520px] h-[520px] rounded-full bg-primary-glow-15 blur-3xl pointer-events-none">
        </div>
        <div
            class="absolute -right-64 top-10 w-[700px] h-[700px] rounded-full bg-primary-glow-10 blur-3xl pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">
            <!-- LEFT CONTENT -->
            <div class="aboutL opacity-0 translate-y-6">
                <div class="flex items-center gap-3 text-sm font-bold tracking-wide mb-4">
                    <span class="w-3 h-3 rotate-45 bg-secondary inline-block"></span>
                    <span class="text-primary">ABOUT US</span>
                </div>

                <h2 class="text-5xl md:text-6xl font-black text-secondary leading-[1.05]">
                    We’re the Best Agency<br />in Downtown
                </h2>

                <p class="mt-6 text-gray-500 text-lg leading-relaxed max-w-xl">
                    There are many variations of passages of Lorem Ipsum avalab but
                    the majority have suffered alteration in some form, by injected
                    humour, or randomised words which don't
                </p>

                <!-- two feature blocks -->
                <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 gap-8 border-b border-black/15 pb-10">
                    <div class="flex gap-5 items-start pr-0 sm:pr-8 sm:border-r sm:border-black/10">
                        <div
                            class="w-14 h-14 rounded-full bg-primary/12 text-primary flex items-center justify-center text-xl">
                            <i class="fa-solid fa-gear"></i>
                        </div>
                        <div>
                            <div class="text-xl font-extrabold text-secondary leading-snug">Versatile
                                Latest<br />Technology</div>
                            <div class="mt-3 text-gray-500 leading-relaxed">There are many variations of passages of
                                Lorem</div>
                        </div>
                    </div>

                    <div class="flex gap-5 items-start pl-0 sm:pl-8">
                        <div
                            class="w-14 h-14 rounded-full bg-primary/12 text-primary flex items-center justify-center text-xl">
                            <i class="fa-solid fa-user-group"></i>
                        </div>
                        <div>
                            <div class="text-xl font-extrabold text-secondary leading-snug">Professional<br />Team
                                Members</div>
                            <div class="mt-3 text-gray-500 leading-relaxed">There are many variations of passages of
                                Lorem</div>
                        </div>
                    </div>
                </div>

                <!-- checklist + small image -->
                <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-10 items-end">
                    <div class="space-y-5">
                        <div class="flex items-center gap-4 text-gray-500 text-lg">
                            <span
                                class="w-8 h-8 rounded-full bg-secondary text-white flex items-center justify-center text-sm">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            Many variations of passages of lorem
                        </div>
                        <div class="flex items-center gap-4 text-gray-500 text-lg">
                            <span
                                class="w-8 h-8 rounded-full bg-secondary text-white flex items-center justify-center text-sm">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            Many variations of passages of lorem
                        </div>
                        <div class="flex items-center gap-4 text-gray-500 text-lg">
                            <span
                                class="w-8 h-8 rounded-full bg-secondary text-white flex items-center justify-center text-sm">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            Expert many variations teacher
                        </div>

                        <a href="#"
                            class="inline-block mt-6 btn-primary-grad text-white font-bold px-9 py-3 shadow hover:opacity-95 transition">
                            Discover More
                        </a>
                    </div>

                    <div class="aboutMini opacity-0 translate-y-6">
                        <img src="https://picsum.photos/520/360?random=211" alt="about small"
                            class="w-full h-[220px] object-cover shadow-xl border border-black/5" />
                    </div>
                </div>
            </div>

            <!-- RIGHT IMAGE + ORANGE FRAME + EXPERIENCE SEMI -->
            <div class="relative aboutR opacity-0 translate-y-6">
                <!-- orange frame behind image -->
                <div class="absolute -left-6 top-10 bottom-10 w-16 btn-primary-grad"></div>

                <div class="relative bg-white shadow-[0_18px_60px_rgba(16,24,40,0.16)] border border-black/5">
                    <img src="https://picsum.photos/900/1100?random=212" alt="about main"
                        class="w-full h-[560px] object-cover" />

                    <!-- semi circle badge -->
                    <div class="absolute left-1/2 -translate-x-1/2 -bottom-20 w-[360px] h-[180px] rounded-t-[999px]
                        bg-primary-gradient shadow-2xl flex flex-col items-center justify-center">
                        <div class="text-white text-6xl font-black leading-none">20+</div>
                        <div class="mt-2 text-white/95 text-xl font-bold">Year Of Experience</div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            /* reveal animations */
            #about-best-agency .about-in {
                animation: aboutReveal .75s ease forwards;
            }

            #about-best-agency .about-in-delay {
                animation: aboutReveal .75s ease forwards;
                animation-delay: .18s;
            }

            #about-best-agency .about-in-delay2 {
                animation: aboutReveal .75s ease forwards;
                animation-delay: .32s;
            }

            @keyframes aboutReveal {
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            /* subtle hover on right image container */
            #about-best-agency .aboutR:hover {
                transform: translateY(-4px);
                transition: transform .25s ease;
            }
        </style>

        <script>
            // IntersectionObserver animation trigger
            (function () {
                const root = document.querySelector("#about-best-agency");
                if (!root) return;

                const left = root.querySelector(".aboutL");
                const right = root.querySelector(".aboutR");
                const mini = root.querySelector(".aboutMini");

                const io = new IntersectionObserver((entries) => {
                    entries.forEach((e) => {
                        if (!e.isIntersecting) return;

                        if (left) left.classList.add("about-in");
                        if (right) right.classList.add("about-in-delay");
                        if (mini) mini.classList.add("about-in-delay2");

                        io.disconnect();
                    });
                }, { threshold: 0.18 });

                io.observe(root);
            })();
        </script>
    </section>

    <!-- ===================== OUR TEAM (icons fixed + hover effect like image) ===================== -->
    <?php include 'inc/our-team.php'; ?>

<?php include 'footer.php'; ?>