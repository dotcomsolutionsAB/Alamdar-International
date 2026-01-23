<?php include 'header.php'; ?>

    <!-- ===================== CONTACT FORM (same as screenshot + animation) ===================== -->
    <section id="contact-form" class="relative py-24 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4">
            <!-- Heading -->
            <div class="text-center mb-14 cf-head opacity-0 translate-y-6">
                <div class="flex items-center justify-center gap-3 text-sm font-bold tracking-wide mb-4">
                    <span class="w-3 h-3 rotate-45 bg-secondary inline-block"></span>
                    <span class="text-primary uppercase">Contact With Us</span>
                </div>

                <h2 class="text-5xl md:text-7xl font-black text-secondary leading-[1.05]">
                    Feel Free To Write Us Anytime
                </h2>
            </div>

            <!-- Form -->
            <div class="cf-wrap opacity-0 translate-y-8">
                <form class="max-w-5xl mx-auto" action="#" method="post">
                    <!-- 2 columns -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <input type="text" name="name" placeholder="Your Name"
                            class="cf-input w-full bg-[#414b6a46] px-10 py-7 text-lg font-semibold text-secondary placeholder:text-secondary/75 outline-none border border-transparent focus:border-[#ff5c2a]/35 focus:ring-0" />
                        <input type="email" name="email" placeholder="Email Address"
                            class="cf-input w-full bg-[#414b6a46] px-10 py-7 text-lg font-semibold text-secondary placeholder:text-secondary/75 outline-none border border-transparent focus:border-[#ff5c2a]/35 focus:ring-0" />
                        <input type="text" name="phone" placeholder="Phone"
                            class="cf-input w-full bg-[#414b6a46] px-10 py-7 text-lg font-semibold text-secondary placeholder:text-secondary/75 outline-none border border-transparent focus:border-[#ff5c2a]/35 focus:ring-0" />
                        <input type="text" name="subject" placeholder="Write A Message"
                            class="cf-input w-full bg-[#414b6a46] px-10 py-7 text-lg font-semibold text-secondary placeholder:text-secondary/75 outline-none border border-transparent focus:border-[#ff5c2a]/35 focus:ring-0" />
                    </div>

                    <!-- message -->
                    <div class="mt-10">
                        <textarea name="message" rows="7" placeholder="Write A Message"
                            class="cf-input w-full bg-[#414b6a46] px-10 py-8 text-lg font-semibold text-secondary placeholder:text-secondary/75 outline-none border border-transparent focus:border-[#ff5c2a]/35 resize-none"></textarea>
                    </div>

                    <!-- button -->
                    <div class="mt-12 flex justify-center">
                        <button type="submit"
                            class="cf-btn px-16 py-6 font-extrabold text-white text-lg shadow-xl btn-primary-grad hover:opacity-95 transition">
                            Send a Message
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <style>
            /* subtle input hover like screenshot (optional) */
            #contact-form .cf-input {
                transition: transform .18s ease, box-shadow .18s ease;
            }

            #contact-form .cf-input:hover {
                box-shadow: 0 18px 50px rgba(16, 24, 40, 0.08);
            }

            /* Animations */
            #contact-form .cf-in-up {
                animation: cfInUp .75s ease forwards;
            }

            #contact-form .cf-in-up2 {
                animation: cfInUp2 .85s ease forwards;
            }

            @keyframes cfInUp {
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes cfInUp2 {
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        </style>

        <script>
            // animate on scroll (IntersectionObserver)
            (function () {
                const root = document.querySelector("#contact-form");
                if (!root) return;

                const head = root.querySelector(".cf-head");
                const wrap = root.querySelector(".cf-wrap");

                const io = new IntersectionObserver((entries) => {
                    entries.forEach((e) => {
                        if (!e.isIntersecting) return;

                        if (head) head.classList.add("cf-in-up");
                        if (wrap) wrap.classList.add("cf-in-up2");

                        io.disconnect();
                    });
                }, { threshold: 0.18 });

                io.observe(root);
            })();
        </script>
    </section>

    <!-- ===================== CONTACT (same as screenshot + animations) ===================== -->
    <section id="contact-strip" class="relative py-24 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
                <!-- LEFT CARDS -->
                <div class="lg:col-span-4 space-y-8">
                    <!-- Card 1 -->
                    <div class="cCard opacity-0 translate-x-[-20px]" style="animation-delay:.05s">
                        <div
                            class="flex items-center bg-secondary text-white px-4 py-4 shadow-[0_18px_55px_rgba(16,24,40,0.14)]">
                            <div
                                class="w-16 h-16 rounded-full btn-primary-grad flex items-center justify-center text-2xl shrink-0 shadow-lg">
                                <i class="fa-solid fa-phone"></i>
                            </div>

                            <div class="ml-6">
                                <div class="text-white/60 text-lg">Call to Questions</div>
                                <div class="mt-1 text-m font-extrabold"><?= SITE_PHONE ?></div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="cCard opacity-0 translate-x-[-20px]" style="animation-delay:.18s">
                        <div
                            class="flex items-center bg-secondary text-white px-4 py-4 shadow-[0_18px_55px_rgba(16,24,40,0.14)]">
                            <div
                                class="w-16 h-16 rounded-full btn-primary-grad flex items-center justify-center text-2xl shrink-0 shadow-lg">
                                <i class="fa-solid fa-envelope"></i>
                            </div>

                            <div class="ml-6">
                                <div class="text-white/60 text-lg">Send Email</div>
                                <div class="mt-1 text-m font-extrabold"><?= SITE_EMAIL ?></div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="cCard opacity-0 translate-x-[-20px]" style="animation-delay:.31s">
                        <div
                            class="flex items-center bg-secondary text-white px-4 py-4 shadow-[0_18px_55px_rgba(16,24,40,0.14)]">
                            <div
                                class="w-16 h-16 rounded-full btn-primary-grad flex items-center justify-center text-2xl shrink-0 shadow-lg">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>

                            <div class="ml-6">
                                <div class="text-white/60 text-lg">Visit Anytime</div>
                                <div class="mt-1 text-m font-extrabold"><?= SITE_ADDRESS ?></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT MAP -->
                <div class="lg:col-span-8">
                    <div class="cMap opacity-0 translate-y-[18px]">
                        <div
                            class="relative bg-white shadow-[0_22px_70px_rgba(16,24,40,0.16)] overflow-hidden border border-black/5">
                            <!-- Map iframe (grayscale + fixed height like screenshot) -->
                            <iframe class="w-full h-[440px] md:h-[520px] mapGray" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3372.1109067749608!2d88.351588!3d22.582871!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0277b99415dbdd%3A0xd7a70778a73dc30b!2sAlamdar%20International!5e1!3m2!1sen!2sin!4v1769092814614!5m2!1sen!2sin">
                            </iframe>

                            <!-- subtle border overlay to match clean look -->
                            <div class="pointer-events-none absolute inset-0 ring-1 ring-black/10"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            /* grayscale map like screenshot */
            #contact-strip .mapGray {
                filter: grayscale(1) contrast(1.05) brightness(1.02);
            }

            /* entrance animations */
            #contact-strip .c-in-left {
                animation: cInLeft .75s ease forwards;
            }

            #contact-strip .c-in-up {
                animation: cInUp .75s ease forwards;
            }

            @keyframes cInLeft {
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            @keyframes cInUp {
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            /* hover micro interaction (optional but nice) */
            #contact-strip .cCard>div {
                transition: transform .25s ease, box-shadow .25s ease;
            }

            #contact-strip .cCard>div:hover {
                transform: translateY(-4px);
                box-shadow: 0 26px 70px rgba(16, 24, 40, 0.18);
            }
        </style>

        <script>
            // animate on scroll (IntersectionObserver)
            (function () {
                const root = document.querySelector("#contact-strip");
                if (!root) return;

                const cards = root.querySelectorAll(".cCard");
                const map = root.querySelector(".cMap");

                const io = new IntersectionObserver((entries) => {
                    entries.forEach((e) => {
                        if (!e.isIntersecting) return;

                        cards.forEach((el) => el.classList.add("c-in-left"));
                        if (map) map.classList.add("c-in-up");

                        io.disconnect();
                    });
                }, { threshold: 0.18 });

                io.observe(root);
            })();
        </script>
    </section>

<?php include 'footer.php'; ?>