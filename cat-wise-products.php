<?php include 'header.php'; ?>

    <!-- ===================== PRODUCTS GRID (same as screenshot + animation + hover) ===================== -->
    <section id="products" class="relative py-24 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4">
            <!-- Top bar -->
            <div
                class="prod-top flex flex-col md:flex-row md:items-center md:justify-between gap-6 mb-12 opacity-0 translate-y-6">
                <div class="text-[#23223b] text-xl font-semibold">
                    Showing <span class="font-bold">1–9</span> of <span class="font-bold">12</span> Results
                </div>

                <!-- Sort dropdown (static UI like screenshot) -->
                <div class="relative w-full md:w-[420px]">
                    <select
                        class="w-full bg-[#f3f5f6] text-[#23223b] font-semibold px-8 py-5 pr-14 outline-none appearance-none border border-black/5">
                        <option>Sort by popular</option>
                        <option>Sort by latest</option>
                        <option>Sort by price: low to high</option>
                        <option>Sort by price: high to low</option>
                    </select>

                    <!-- caret -->
                    <span class="pointer-events-none absolute right-6 top-1/2 -translate-y-1/2 text-primary">
                        <i class="fa fa-chevron-down"></i>
                    </span>
                </div>
            </div>

            <!-- Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
                <!-- Product Card (repeat) -->
                <article class="prod-card opacity-0 translate-y-10">
                    <div class="prod-inner border border-black/20 p-8 text-center bg-white">
                        <div class="h-[260px] flex items-center justify-center">
                            <img src="https://picsum.photos/420/420?random=301" alt="Sofa Chair"
                                class="prod-img max-h-[230px] w-auto object-contain" />
                        </div>

                        <h3 class="mt-10 text-3xl font-extrabold text-[#8a8a93] leading-tight">Sofa Chair</h3>

                        <div class="mt-4 text-xl text-[#8a8a93] font-semibold flex items-center justify-center gap-3">
                            <span>$25.00</span>
                            <span class="line-through opacity-70">$25.00</span>
                        </div>

                        <!-- stars -->
                        <div class="mt-5 flex items-center justify-center gap-2 text-[#23223b] text-lg">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i><i class="fa fa-star"></i>
                        </div>

                        <div class="mt-10 flex justify-center">
                            <button class="prod-btn bg-[#f3f5f6] text-[#23223b] font-semibold px-10 py-4">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </article>

                <article class="prod-card opacity-0 translate-y-10">
                    <div class="prod-inner border border-black/20 p-8 text-center bg-white">
                        <div class="h-[260px] flex items-center justify-center">
                            <img src="https://picsum.photos/420/420?random=302" alt="Relax Chair"
                                class="prod-img max-h-[230px] w-auto object-contain" />
                        </div>

                        <h3 class="mt-10 text-3xl font-extrabold text-[#8a8a93] leading-tight">Relax Chair</h3>

                        <div class="mt-4 text-xl text-[#8a8a93] font-semibold flex items-center justify-center gap-3">
                            <span>$25.00</span>
                            <span class="line-through opacity-70">$25.00</span>
                        </div>

                        <div class="mt-5 flex items-center justify-center gap-2 text-[#23223b] text-lg">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i><i class="fa fa-star"></i>
                        </div>

                        <div class="mt-10 flex justify-center">
                            <button class="prod-btn bg-[#f3f5f6] text-[#23223b] font-semibold px-10 py-4">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </article>

                <article class="prod-card opacity-0 translate-y-10">
                    <div class="prod-inner border border-black/20 p-8 text-center bg-white">
                        <div class="h-[260px] flex items-center justify-center">
                            <img src="https://picsum.photos/420/420?random=303" alt="Office Chair"
                                class="prod-img max-h-[230px] w-auto object-contain" />
                        </div>

                        <h3 class="mt-10 text-3xl font-extrabold text-[#8a8a93] leading-tight">Office Chair</h3>

                        <div class="mt-4 text-xl text-[#8a8a93] font-semibold flex items-center justify-center gap-3">
                            <span>$25.00</span>
                            <span class="line-through opacity-70">$25.00</span>
                        </div>

                        <div class="mt-5 flex items-center justify-center gap-2 text-[#23223b] text-lg">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i><i class="fa fa-star"></i>
                        </div>

                        <div class="mt-10 flex justify-center">
                            <button class="prod-btn bg-[#f3f5f6] text-[#23223b] font-semibold px-10 py-4">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </article>

                <article class="prod-card opacity-0 translate-y-10">
                    <div class="prod-inner border border-black/20 p-8 text-center bg-white">
                        <div class="h-[260px] flex items-center justify-center">
                            <img src="https://picsum.photos/420/420?random=304" alt="Relax Chair"
                                class="prod-img max-h-[230px] w-auto object-contain" />
                        </div>

                        <h3 class="mt-10 text-3xl font-extrabold text-[#8a8a93] leading-tight">Relax Chair</h3>

                        <div class="mt-4 text-xl text-[#8a8a93] font-semibold flex items-center justify-center gap-3">
                            <span>$25.00</span>
                            <span class="line-through opacity-70">$25.00</span>
                        </div>

                        <div class="mt-5 flex items-center justify-center gap-2 text-[#23223b] text-lg">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i><i class="fa fa-star"></i>
                        </div>

                        <div class="mt-10 flex justify-center">
                            <button class="prod-btn bg-[#f3f5f6] text-[#23223b] font-semibold px-10 py-4">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </article>
            </div>
        </div>

        <style>
            /* Card hover (subtle lift like ecommerce) */
            #products .prod-inner {
                transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
            }

            #products .prod-card:hover .prod-inner {
                transform: translateY(-6px);
                border-color: rgba(0, 0, 0, .28);
                box-shadow: 0 22px 60px rgba(16, 24, 40, 0.10);
            }

            /* Image hover slight zoom */
            #products .prod-img {
                transition: transform .45s ease;
            }

            #products .prod-card:hover .prod-img {
                transform: scale(1.05);
            }

            /* Button hover effect like modern theme */
            #products .prod-btn {
                transition: transform .22s ease, background .22s ease, color .22s ease, box-shadow .22s ease;
                border: 1px solid rgba(0, 0, 0, 0.06);
            }

            #products .prod-card:hover .prod-btn {
                background: linear-gradient(90deg, #ff5c2a, #ff7a4d);
                color: #fff;
                box-shadow: 0 18px 40px rgba(255, 92, 42, 0.25);
                transform: translateY(-2px);
                border-color: rgba(255, 92, 42, 0.25);
            }

            #products .prod-btn:hover {
                transform: translateY(-3px) scale(1.01);
                box-shadow: 0 22px 52px rgba(255, 92, 42, 0.32);
            }

            /* entrance animations */
            #products .prod-in-up {
                animation: prodInUp .75s ease forwards;
            }

            #products .top-in {
                animation: prodTopIn .7s ease forwards;
            }

            @keyframes prodTopIn {
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes prodInUp {
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        </style>

        <script>
            // Animate top bar + cards on scroll
            (function () {
                const root = document.querySelector("#products");
                if (!root) return;

                const top = root.querySelector(".prod-top");
                const cards = [...root.querySelectorAll(".prod-card")];

                const io = new IntersectionObserver((entries) => {
                    entries.forEach((e) => {
                        if (!e.isIntersecting) return;

                        if (top) top.classList.add("top-in");

                        cards.forEach((card, i) => {
                            setTimeout(() => card.classList.add("prod-in-up"), 90 * i);
                        });

                        io.disconnect();
                    });
                }, { threshold: 0.16 });

                io.observe(root);
            })();
        </script>
    </section>

<!-- ===================== FOOTER (same as image) ===================== -->
<?php include 'footer.php'; ?>