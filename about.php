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

    <!-- ===================== OUR LOCATIONS / OFFICES ===================== -->
    <section id="our-locations" class="relative py-20 bg-white overflow-hidden">
        <!-- soft glow like your page -->
        <div class="absolute -left-40 -bottom-40 w-[520px] h-[520px] rounded-full bg-primary-glow-10 blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-3 text-sm font-bold tracking-wide mb-3">
                    <span class="w-3 h-3 rotate-45 bg-secondary inline-block"></span>
                    <span class="text-primary">OUR LOCATIONS</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-secondary leading-tight">
                    Offices & Factories
                </h2>
                <p class="mt-4 text-gray-500 text-lg max-w-2xl mx-auto">
                    Reach us anytime — our teams are available across multiple locations.
                </p>
            </div>

            <!-- HEAD OFFICE -->
            <div class="rounded-3xl border border-black/10 shadow-sm bg-white p-7 md:p-9 mb-10">
                <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-6">
                    <div>
                        <div class="flex items-center gap-3">
                            <div class="w-11 h-11 rounded-2xl bg-primary/10 text-primary flex items-center justify-center">
                                <i class="fa-solid fa-building text-lg"></i>
                            </div>
                            <h3 class="text-2xl font-extrabold text-secondary">Head Office</h3>
                        </div>

                        <div class="mt-5 space-y-3 text-gray-600">
                            <div class="flex gap-3">
                                <i class="fa-solid fa-location-dot text-primary mt-1"></i>
                                <div>
                                    34, Jackson Lane, Clive Square, Shop No - G9, Kolkata - 700 001
                                </div>
                            </div>

                            <div class="flex gap-3">
                                <i class="fa-solid fa-phone text-primary mt-1"></i>
                                <div class="space-y-1">
                                    <div>+91 (033) 2243-5134</div>
                                    <div>+91 (033) 2248-4210</div>
                                    <div>+91 7980937046</div>
                                    <div>+91 9903861421</div>
                                </div>
                            </div>

                            <div class="flex gap-3">
                                <i class="fa-solid fa-envelope text-primary mt-1"></i>
                                <div class="space-y-1">
                                    <a href="mailto:sales@alamdarinternational.com" class="hover:text-secondary transition">
                                        sales@alamdarinternational.com
                                    </a>
                                    <div class="text-black/20">|</div>
                                    <a href="mailto:alamdarinternational21@gmail.com" class="hover:text-secondary transition">
                                        alamdarinternational21@gmail.com
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- quick actions -->
                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="mailto:sales@alamdarinternational.com"
                            class="inline-flex items-center justify-center gap-2 px-5 py-3 rounded-2xl btn-primary-grad text-white font-bold shadow hover:opacity-95 transition">
                            <i class="fa-solid fa-paper-plane"></i> Email Us
                        </a>
                        <a href="tel:+919903861421"
                            class="inline-flex items-center justify-center gap-2 px-5 py-3 rounded-2xl border border-black/10 text-secondary font-bold hover:bg-black/5 transition">
                            <i class="fa-solid fa-phone"></i> Call Now
                        </a>
                    </div>
                </div>
            </div>

            <!-- BRANCH OFFICES -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-7 mb-10">
                <!-- Dubai -->
                <div class="rounded-3xl border border-black/10 shadow-sm bg-white p-7 hover:shadow-md transition">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-11 h-11 rounded-2xl bg-primary/10 text-primary flex items-center justify-center">
                            <i class="fa-solid fa-map-location-dot text-lg"></i>
                        </div>
                        <h3 class="text-xl font-extrabold text-secondary">Branch Office (UAE)</h3>
                    </div>

                    <div class="space-y-3 text-gray-600">
                        <div class="flex gap-3">
                            <i class="fa-solid fa-location-dot text-primary mt-1"></i>
                            <div>Silicon oasis, FZCO Economic zones, Dubai - UAE, Post Box No - 341041</div>
                        </div>
                        <div class="flex gap-3">
                            <i class="fa-solid fa-phone text-primary mt-1"></i>
                            <div>+971 542375253</div>
                        </div>
                        <div class="flex gap-3">
                            <i class="fa-solid fa-envelope text-primary mt-1"></i>
                            <a href="mailto:ucs.uae21@gmail.com" class="hover:text-secondary transition">ucs.uae21@gmail.com</a>
                        </div>
                    </div>
                </div>

                <!-- Secunderabad -->
                <div class="rounded-3xl border border-black/10 shadow-sm bg-white p-7 hover:shadow-md transition">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-11 h-11 rounded-2xl bg-primary/10 text-primary flex items-center justify-center">
                            <i class="fa-solid fa-map-location-dot text-lg"></i>
                        </div>
                        <h3 class="text-xl font-extrabold text-secondary">Branch Office</h3>
                    </div>

                    <div class="space-y-3 text-gray-600">
                        <div class="flex gap-3">
                            <i class="fa-solid fa-location-dot text-primary mt-1"></i>
                            <div>4-4-29, Mahankali Street, Ground Floor, Ranigunj, Secunderabad - 500003</div>
                        </div>
                        <div class="flex gap-3">
                            <i class="fa-solid fa-phone text-primary mt-1"></i>
                            <div>040-27713226</div>
                        </div>
                        <div class="flex gap-3">
                            <i class="fa-solid fa-envelope text-primary mt-1"></i>
                            <a href="mailto:ucs2@redimail.com" class="hover:text-secondary transition">ucs2@redimail.com</a>
                        </div>
                        <div class="flex gap-3">
                            <i class="fa-solid fa-globe text-primary mt-1"></i>
                            <a href="https://www.alamdarinternational.com" target="_blank" class="hover:text-secondary transition">
                                www.alamdarinternational.com
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Raipur -->
                <div class="rounded-3xl border border-black/10 shadow-sm bg-white p-7 hover:shadow-md transition">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-11 h-11 rounded-2xl bg-primary/10 text-primary flex items-center justify-center">
                            <i class="fa-solid fa-map-location-dot text-lg"></i>
                        </div>
                        <h3 class="text-xl font-extrabold text-secondary">Branch Office</h3>
                    </div>

                    <div class="space-y-3 text-gray-600">
                        <div class="flex gap-3">
                            <i class="fa-solid fa-location-dot text-primary mt-1"></i>
                            <div>Surja Devi Complex, Shop No. 119, 2nd Floor, Garbajans Tall, Raipur - 492009</div>
                        </div>
                        <div class="flex gap-3">
                            <i class="fa-solid fa-envelope text-primary mt-1"></i>
                            <a href="mailto:ucs2@redimail.com" class="hover:text-secondary transition">ucs2@redimail.com</a>
                        </div>
                        <div class="flex gap-3">
                            <i class="fa-solid fa-globe text-primary mt-1"></i>
                            <a href="https://www.alamdarinternational.com" target="_blank" class="hover:text-secondary transition">
                                www.alamdarinternational.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FACTORIES -->
            <div class="rounded-3xl border border-black/10 shadow-sm bg-white p-7 md:p-9">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-11 h-11 rounded-2xl bg-primary/10 text-primary flex items-center justify-center">
                        <i class="fa-solid fa-industry text-lg"></i>
                    </div>
                    <h3 class="text-2xl font-extrabold text-secondary">Factories</h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-600">
                    <div class="flex gap-3">
                        <i class="fa-solid fa-location-dot text-primary mt-1"></i>
                        <div>
                            <div class="font-bold text-secondary">Unit - I</div>
                            66, Srinath Poural Lane, Howrah-1
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <i class="fa-solid fa-location-dot text-primary mt-1"></i>
                        <div>
                            <div class="font-bold text-secondary">Unit - II</div>
                            Math Bagan, National Highway 6, Opp. Kolkata West International City,<br>
                            Salop Howrah – 711 049, West Bengal, India
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CERTIFICATIONS / ACCREDITATIONS ===================== -->
    <section id="certifications" class="relative py-16 bg-white overflow-hidden">
        <div class="absolute -right-40 -top-40 w-[520px] h-[520px] rounded-full bg-primary-glow-10 blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-10">
                <div class="inline-flex items-center gap-3 text-sm font-bold tracking-wide mb-3">
                    <span class="w-3 h-3 rotate-45 bg-secondary inline-block"></span>
                    <span class="text-primary">CERTIFICATIONS</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-black text-secondary">Accreditations & Compliance</h2>
                <p class="mt-3 text-gray-500 text-lg max-w-2xl mx-auto">
                    Verified standards that reflect our commitment to quality and reliability.
                </p>
            </div>

            <!-- Icon-style certification cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- ROHS -->
                <div class="group rounded-3xl border border-black/10 bg-white p-7 shadow-sm hover:shadow-md transition">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 rounded-2xl bg-white border border-black/10 shadow-sm flex items-center justify-center overflow-hidden">
                            <img
                                src="assets/certifications/rohs.png"
                                alt="RoHS Certification"
                                class="w-12 h-12 object-contain"
                            />
                        </div>
                        <div>
                            <div class="text-lg font-extrabold text-secondary leading-tight">RoHS</div>
                            <div class="text-gray-500">Restriction of Hazardous Substances</div>
                        </div>
                    </div>

                    <div class="mt-5 text-gray-600 leading-relaxed">
                        Ensures compliance with restricted hazardous materials and safer manufacturing practices.
                    </div>

                    <div class="mt-5 flex items-center gap-2 text-sm font-bold text-primary">
                        <i class="fa-solid fa-badge-check"></i>
                        Verified Certification
                    </div>
                </div>

                <!-- DAG -->
                <div class="group rounded-3xl border border-black/10 bg-white p-7 shadow-sm hover:shadow-md transition">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 rounded-2xl bg-white border border-black/10 shadow-sm flex items-center justify-center overflow-hidden">
                            <img
                                src="assets/certifications/dag.png"
                                alt="DAG Certification"
                                class="w-12 h-12 object-contain"
                            />
                        </div>
                        <div>
                            <div class="text-lg font-extrabold text-secondary leading-tight">DAG</div>
                            <div class="text-gray-500">Quality & compliance assurance</div>
                        </div>
                    </div>

                    <div class="mt-5 text-gray-600 leading-relaxed">
                        Confirms defined quality systems and compliance processes to maintain consistent standards.
                    </div>

                    <div class="mt-5 flex items-center gap-2 text-sm font-bold text-primary">
                        <i class="fa-solid fa-badge-check"></i>
                        Verified Certification
                    </div>
                </div>

                <!-- IAF -->
                <div class="group rounded-3xl border border-black/10 bg-white p-7 shadow-sm hover:shadow-md transition">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 rounded-2xl bg-white border border-black/10 shadow-sm flex items-center justify-center overflow-hidden">
                            <img
                                src="assets/certifications/iaf.png"
                                alt="IAF Accreditation"
                                class="w-12 h-12 object-contain"
                            />
                        </div>
                        <div>
                            <div class="text-lg font-extrabold text-secondary leading-tight">IAF</div>
                            <div class="text-gray-500">International Accreditation Forum</div>
                        </div>
                    </div>

                    <div class="mt-5 text-gray-600 leading-relaxed">
                        Accreditation recognition aligned with international conformity assessment standards.
                    </div>

                    <div class="mt-5 flex items-center gap-2 text-sm font-bold text-primary">
                        <i class="fa-solid fa-badge-check"></i>
                        Verified Accreditation
                    </div>
                </div>
            </div>

            <!-- Optional compact strip (icon-only row) -->
            <div class="mt-10 rounded-3xl border border-black/10 bg-slate-50 p-6">
                <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                    <div class="text-secondary font-extrabold text-xl">Trusted & Certified</div>

                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 rounded-2xl bg-white border border-black/10 shadow-sm flex items-center justify-center overflow-hidden">
                            <img src="assets/certifications/rohs.png" alt="RoHS" class="w-10 h-10 object-contain">
                        </div>
                        <div class="w-14 h-14 rounded-2xl bg-white border border-black/10 shadow-sm flex items-center justify-center overflow-hidden">
                            <img src="assets/certifications/dag.png" alt="DAG" class="w-10 h-10 object-contain">
                        </div>
                        <div class="w-14 h-14 rounded-2xl bg-white border border-black/10 shadow-sm flex items-center justify-center overflow-hidden">
                            <img src="assets/certifications/iaf.png" alt="IAF" class="w-10 h-10 object-contain">
                        </div>
                    </div>

                    <a href="#contact"
                    class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-2xl btn-primary-grad text-white font-bold shadow hover:opacity-95 transition">
                        <i class="fa-solid fa-circle-info"></i> Know More
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>