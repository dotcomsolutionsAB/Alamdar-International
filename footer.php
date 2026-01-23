<!-- ===================== FOOTER (same as image) ===================== -->
    <footer id="site-footer" class="relative overflow-hidden text-white">
        <!-- background image -->
        <div class="absolute inset-0 bg-center bg-cover"
            style="background-image:url('https://pixydrops.com/getizy-html/assets/images/backgrounds/about-1-dark.png');">
        </div>

        <!-- deep blue overlay -->
        <div class="absolute inset-0 bg-[#1a223d]"></div>

        <!-- subtle pattern overlay (optional to match texture) -->
        <div class="absolute inset-0 opacity-[0.15]"
            style="background-image: repeating-linear-gradient(160deg, rgba(255,255,255,0.22) 0px, rgba(255,255,255,0.22) 1px, transparent 1px, transparent 16px);">
        </div>

        <div class="relative z-10">
            <!-- TOP CONTENT -->
            <div class="max-w-7xl mx-auto px-4 py-20">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-10 items-start">

                    <!-- LEFT: logo + text + subscribe -->
                    <div class="md:col-span-1">
                        <div class="flex items-center gap-3">
                            <img src="<?= SITE_LOGO ?>" class="w-10 h-10 rounded-full object-cover"
                                alt="Logo">
                            <div class="text-2xl font-extrabold"><?= SITE_NAME ?></div>
                        </div>

                        <p class="mt-6 text-white/55 leading-relaxed text-lg max-w-sm">
                            Leading manufacturer and supplier of industrial products and solutions. Committed to quality, innovation, and customer satisfaction.
                        </p>

                        <div class="mt-10">
                            <input type="email" placeholder="Email address"
                                class="w-full bg-white text-secondary px-6 py-4 outline-none border border-black/10" />
                            <button
                                class="w-full mt-5 btn-primary-grad text-white font-bold py-4 shadow-lg hover:opacity-95 transition">
                                Submit
                            </button>
                        </div>
                    </div>

                    <!-- LINKS -->
                    <div class="md:col-span-1 relative md:pl-12 footer-col with-line">
                        <h4 class="text-xl font-extrabold text-primary mb-7">Links</h4>
                        <ul class="space-y-4 text-white/55 text-lg">
                            <li><a href="about.php" class="footer-link">About Us</a></li>
                            <li><a href="contact.php" class="footer-link">Contact Us</a></li>
                            <li><a href="products.php" class="footer-link">Products</a></li>
                        </ul>
                    </div>

                    <!-- EXPLORE -->
                    <div class="md:col-span-1 relative md:pl-12 footer-col with-line">
                        <h4 class="text-xl font-extrabold text-primary mb-7">Explore</h4>
                        <ul class="space-y-4 text-white/55 text-lg">
                            <li><a href="#" class="footer-link">What We Offer</a></li>
                            <li><a href="#" class="footer-link">Our Story</a></li>
                            <li><a href="#" class="footer-link">Latest News</a></li>
                            <li><a href="#" class="footer-link">Help Center</a></li>
                        </ul>
                    </div>

                    <!-- GALLERY -->
                    <div class="md:col-span-1 relative md:pl-12 footer-col with-line">
                        <h4 class="text-xl font-extrabold text-primary mb-7">Gallery</h4>

                        <div class="grid grid-cols-3 gap-2">
                            <img class="w-full h-20 object-cover" src="assets/A_rubber.jpeg" alt="">
                            <img class="w-full h-20 object-cover" src="assets/home_bellows.jpg" alt="">
                            <img class="w-full h-20 object-cover" src="assets/home_cast.webp" alt="">
                            <img class="w-full h-20 object-cover" src="assets/home_ceramic.jpg" alt="">
                            <img class="w-full h-20 object-cover" src="assets/home_valve.jpg" alt="">
                            <img class="w-full h-20 object-cover" src="assets/home_pressure_temp.jpg" alt="">
                        </div>

                        <div class="mt-8 flex items-center gap-3">
                            <a href="#" class="footer-social" aria-label="Facebook"><i
                                    class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="footer-social" aria-label="Twitter"><i
                                    class="fa-brands fa-twitter"></i></a>
                            <a href="#" class="footer-social" aria-label="Pinterest"><i
                                    class="fa-brands fa-pinterest-p"></i></a>
                            <a href="#" class="footer-social" aria-label="YouTube"><i
                                    class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- CONTACT STRIP (white bar) -->
            <div class="max-w-7xl mx-auto px-4">
                <div class="bg-white text-secondary border border-black/10 shadow-xl">
                    <div class="grid grid-cols-1 md:grid-cols-3">

                        <!-- phones -->
                        <div
                            class="flex items-center gap-5 px-8 py-8 border-b md:border-b-0 md:border-r border-black/10">
                            <div
                                class="w-14 h-14 rounded-full bg-secondary text-white flex items-center justify-center text-xl">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="font-semibold">
                                <div class="mt-1"><?= SITE_PHONE ?></div>
                            </div>
                        </div>

                        <!-- email / website -->
                        <div
                            class="flex items-center gap-5 px-8 py-8 border-b md:border-b-0 md:border-r border-black/10">
                            <div
                                class="w-14 h-14 rounded-full bg-secondary text-white flex items-center justify-center text-xl">
                                <i class="fa-solid fa-globe"></i>
                            </div>
                            <div class="font-semibold">
                                <div class="mt-1"><?= SITE_DOMAIN ?></div>
                            </div>
                        </div>

                        <!-- address -->
                        <div class="flex items-center gap-5 px-8 py-8">
                            <div
                                class="w-14 h-14 rounded-full bg-secondary text-white flex items-center justify-center text-xl">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="font-semibold">
                                <?= SITE_ADDRESS ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- BOTTOM BAR -->
            <div class="mt-14 bg-white/10 border-t border-white/10">
                <div class="max-w-7xl mx-auto px-4 py-7 text-center text-white/55 text-lg">
                    © 2026 Alamdar International. All rights reserved.
                </div>
            </div>
        </div>

        <style>
            /* column divider lines (thin vertical line at top like screenshot) */
            #site-footer .footer-col.with-line::before {
                content: "";
                position: absolute;
                left: 0;
                top: 6px;
                width: 3px;
                height: 140px;
                background: rgba(255, 255, 255, 0.85);
            }

            #site-footer .footer-link {
                transition: all .2s ease;
            }

            #site-footer .footer-link:hover {
                color: #fff;
                padding-left: 6px;
            }

            #site-footer .footer-social {
                width: 46px;
                height: 46px;
                border-radius: 9999px;
                background: rgba(255, 255, 255, 0.08);
                border: 1px solid rgba(255, 255, 255, 0.14);
                display: flex;
                align-items: center;
                justify-content: center;
                color: #fff;
                transition: all .25s ease;
            }

            #site-footer .footer-social:hover {
                background: var(--primary) !important;
                border-color: var(--primary) !important;
                transform: translateY(-2px);
            }
        </style>
    </footer>

    <button id="backToTop"
        class="fixed right-6 bottom-6 z-[9999] w-12 h-12 rounded-full bg-secondary text-white shadow-xl border border-white/10 flex items-center justify-center opacity-0 pointer-events-none translate-y-4 transition-all duration-300 hover:bg-primary">
        <i class="fa-solid fa-arrow-up"></i>
    </button>
    <div id="cursorDot"></div>
    <div id="cursorRing"></div>
    <script>
        const nav = document.getElementById("main-nav");
        window.addEventListener("scroll", () => {
            if (window.scrollY > 10) nav.classList.add("nav-scrolled");
            else nav.classList.remove("nav-scrolled");
        });
    </script>
    <script>
        const backToTop = document.getElementById("backToTop");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 450) {
                backToTop.classList.remove("opacity-0", "pointer-events-none", "translate-y-4");
                backToTop.classList.add("opacity-100");
            } else {
                backToTop.classList.add("opacity-0", "pointer-events-none", "translate-y-4");
                backToTop.classList.remove("opacity-100");
            }
        });

        backToTop.addEventListener("click", () => {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    </script>
    <script>
        const dot = document.getElementById("cursorDot");
        const ring = document.getElementById("cursorRing");

        let mouseX = window.innerWidth / 2, mouseY = window.innerHeight / 2; // start center
        let ringX = mouseX, ringY = mouseY;

        // put cursor at center initially
        dot.style.left = mouseX + "px";
        dot.style.top = mouseY + "px";
        ring.style.left = ringX + "px";
        ring.style.top = ringY + "px";

        window.addEventListener("mousemove", (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;

            dot.style.left = mouseX + "px";
            dot.style.top = mouseY + "px";
        });

        function animateRing() {
            ringX += (mouseX - ringX) * 0.18;
            ringY += (mouseY - ringY) * 0.18;
            ring.style.left = ringX + "px";
            ring.style.top = ringY + "px";
            requestAnimationFrame(animateRing);
        }
        animateRing();

        // ✅ event delegation hover (works always)
        const hoverTargets = "a, button, input, textarea, select, .team-ic, .footer-social";

        document.addEventListener("mouseover", (e) => {
            if (e.target.closest(hoverTargets)) document.body.classList.add("cursor-hover");
        });

        document.addEventListener("mouseout", (e) => {
            if (e.target.closest(hoverTargets)) document.body.classList.remove("cursor-hover");
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
        const btn = document.getElementById("menuBtn");
        const menu = document.getElementById("mobileMenu");
        const icon = document.getElementById("menuIcon");

        if (!btn || !menu) return;

        btn.addEventListener("click", () => {
            const isOpen = !menu.classList.contains("hidden");
            if (isOpen) {
            menu.classList.add("hidden");
            btn.setAttribute("aria-expanded", "false");
            if (icon) icon.className = "fa fa-bars";
            } else {
            menu.classList.remove("hidden");
            btn.setAttribute("aria-expanded", "true");
            if (icon) icon.className = "fa fa-times";
            }
        });

        // Close menu when clicking a link
        menu.querySelectorAll("a").forEach(a => {
            a.addEventListener("click", () => {
            menu.classList.add("hidden");
            btn.setAttribute("aria-expanded", "false");
            if (icon) icon.className = "fa fa-bars";
            });
        });
        });
    </script>

</body>

</html>