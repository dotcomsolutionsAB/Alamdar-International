<section id="our-service" class="relative py-24 overflow-hidden bg-white">
    <!-- soft gradient top-right like screenshot -->
    <div class="absolute inset-0 pointer-events-none">
        <div
            class="absolute -right-40 -top-40 w-[520px] h-[520px] rounded-full bg-gradient-to-br from-[var(--primary)]/18 to-transparent blur-2xl">
        </div>
        <div
            class="absolute -right-64 top-10 w-[700px] h-[700px] rounded-full bg-gradient-to-br from-[var(--primary)]/10 to-transparent blur-3xl">
        </div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

        <!-- LEFT: cards + red cross connector -->
        <div class="relative">
            <!-- Red connector cross behind cards -->
            <div
                class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[520px] h-[520px] pointer-events-none">
                <div
                    class="absolute left-1/2 top-0 -translate-x-1/2 w-14 h-full bg-primary-grad-r opacity-85rounded-lg">
                </div>
                <div
                    class="absolute top-1/2 left-0 -translate-y-1/2 h-14 w-full bg-primary-grad-b opacity-85 rounded-lg">
                </div>
            </div>

            <div id="service-cards" class="grid grid-cols-1 sm:grid-cols-2 gap-10"></div>

        </div>

        <!-- RIGHT: content -->
        <div class="relative">
            <div class="opacity-0 translate-y-6 service-right" style="animation-delay:0.1s">
                <div class="flex items-center gap-3 text-sm font-bold tracking-wide">
                    <span class="w-2 h-2 rotate-45 bg-[#23223b] inline-block"></span>
                    <span class="text-primary">OUR SERVICE</span>
                </div>

                <h2 class="mt-4 text-5xl md:text-6xl font-black text-[#23223b] leading-[1.05]">
                    We’re Providing Best<br>Service to Clients
                </h2>

                <p class="mt-6 text-gray-500 text-lg leading-relaxed max-w-xl">
                    We maintain the highest standards of quality and compliance
                </p>

                <!-- stats strip -->
                <div class="mt-10 relative">
                    <div
                        class="absolute -left-6 top-1/2 -translate-y-1/2 w-[260px] h-[86px] bg-[#23223b] -skew-x-12 rounded-sm">
                    </div>

                    <div class="relative flex items-stretch gap-4">
                        <div class="bg-white border border-[#23223b]/35 shadow-sm flex items-stretch">
                            <div class="px-10 py-7 text-center border-r border-[#23223b]/25 min-w-[210px]">
                                <div class="text-3xl font-black text-[#23223b] leading-none">120K</div>
                                <div class="mt-2 text-gray-500 font-semibold">Satisfied<br>Clients</div>
                            </div>
                            <div class="px-10 py-7 text-center min-w-[210px]">
                                <div class="text-3xl font-black text-[#23223b] leading-none">3600</div>
                                <div class="mt-2 text-gray-500 font-semibold">Projects<br>completed</div>
                            </div>
                        </div>

                        <div
                            class="bg-white border border-[#23223b]/35 w-[190px] h-[130px] flex items-center justify-center">
                            <img src="https://picsum.photos/140/140?random=88"
                                class="w-20 h-20 rounded-full object-cover" alt="Logo">
                        </div>
                    </div>

                    <div
                        class="absolute left-[175px] -top-2 w-5 h-5 rounded-full border-2 border-primary-30 bg-white">
                    </div>
                </div>

                <a href="about"
                    class="inline-block mt-10 bg-primary hover:bg-[#ff7a4d] text-white font-bold px-9 py-3 rounded-none shadow transition">
                    Discover More
                </a>
            </div>
        </div>

    </div>

<script>
  const serviceCards = [
    {
      link: "contact.php",
      delay: "0.05s",
      icon: "fa fa-certificate",
      titleHtml: "API<br>Certified",
      desc: "American Petroleum Institute standards compliance",
      cta: "Read More"
    },
    {
      link: "contact.php",
      delay: "0.15s",
      icon: "fa fa-trophy",
      titleHtml: "ISO <br> Standards",
      desc: "International Organization for Standardization compliance",
      cta: "Read More"
    },
    {
      link: "contact.php",
      delay: "0.25s",
      icon: "fa fa-shield",
      titleHtml: "Quality <br>Assured",
      desc: "Rigorous testing and quality control processes",
      cta: "Read More"
    },
    {
      link: "contact.php",
      delay: "0.35s",
      icon: "fa fa-check-double",
      titleHtml: "Industry <br>Approved",
      desc: "Recognized by leading industrial organizations",
      cta: "Read More"
    }
  ];

  const container = document.getElementById("service-cards");

  container.innerHTML = serviceCards.map(card => `
    <a href="${card.link}"
      class="service-card service-hover group relative bg-white border border-black/5 rounded-xl overflow-hidden
        shadow-[0_12px_40px_rgba(16,24,40,0.10)] opacity-0 translate-y-10"
      style="animation-delay:${card.delay}">

      <!-- tilted outline behind card (appears only on hover) -->
      <span
        class="svc-tilt pointer-events-none absolute -inset-2 rounded-xl border-2 border-primary-30 opacity-0 rotate-0 transition-all duration-300"></span>

      <div class="relative z-10 p-8">
        <div
          class="svc-icon w-16 h-16 rounded-full bg-[var(--primary)] flex items-center justify-center text-white text-2xl shadow-lg transition-all duration-300">
          <i class="${card.icon}"></i>
        </div>

        <h3
          class="svc-title mt-6 text-2xl font-extrabold text-[#fff] leading-snug transition-all duration-300">
          ${card.titleHtml}
        </h3>

        <p class="svc-desc mt-4 text-gray-500 leading-relaxed transition-all duration-300">
          ${card.desc}
        </p>
      </div>

      <div
        class="relative z-10 px-8 py-4 border-t border-black/10 flex items-center justify-between transition-all duration-300">
        <span class="svc-read text-primary font-semibold transition-all duration-300">${card.cta}</span>
        <span
          class="svc-arrow w-8 h-8 rounded-full border border-black/20 flex items-center justify-center text-black/70 transition-all duration-300">
          <i class="fa fa-arrow-right"></i>
        </span>
      </div>

      <!-- dark overlay layer (animates in) -->
      <span class="svc-dark absolute inset-0 bg-[#23223b] opacity-0 transition-all duration-300"></span>
    </a>
  `).join("");
</script>

    <style>
        /* entrance */
        .service-card {
            animation: svcCardIn .75s ease forwards;
        }

        .service-right {
            animation: svcRightIn .8s ease forwards;
        }

        @keyframes svcCardIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes svcRightIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* HOVER: match screenshot */
        .service-hover:hover {
            transform: translateY(-6px);
            box-shadow: 0 22px 55px rgba(16, 24, 40, 0.18);
        }

        .service-hover:hover .svc-dark {
            opacity: 1;
        }

        /* bring content above dark layer */
        .service-hover>*:not(.svc-dark) {
            position: relative;
            z-index: 5;
        }

        /* tilted orange outline behind */
        .service-hover:hover .svc-tilt {
            opacity: 1;
            transform: rotate(-6deg);
        }

        /* text colors on hover */
        .service-hover:hover .svc-title {
            color: #fff;
        }

        .service-hover:hover .svc-desc {
            color: rgba(255, 255, 255, 0.55);
        }

        /* icon circle becomes orange gradient */
        .service-hover:hover .svc-icon {
            background: linear-gradient(135deg, var(--primary), var(--primary-2));
            box-shadow: 0 14px 30px rgba(27, 2, 137, 0.35);
        }

        /* footer border looks subtle on dark */
        .service-hover:hover .border-t {
            border-color: rgba(255, 255, 255, 0.12) !important;
        }

        /* Read more + arrow style */
        .service-hover:hover .svc-read {
            color: var(--primary);
        }

        .service-hover:hover .svc-arrow {
            background: #fff;
            color: #23223b;
            border-color: #fff;
        }
    </style>
</section>