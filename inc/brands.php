
<!-- ===================== BRANDS LOGO SLIDER (JS powered) ===================== -->
<section id="brands" class="relative py-14 bg-white border-t border-black/10 overflow-hidden">
  <div class="max-w-7xl mx-auto px-4">
    <div class="flex items-center justify-center mb-6">
      <div class="h-[2px] w-14 bg-primary"></div>
      <div class="mx-4 text-sm font-bold tracking-widest text-[#23223b] uppercase">Trusted by Brands</div>
      <div class="h-[2px] w-14 bg-primary"></div>
    </div>

    <div class="relative">
      <!-- fade edges -->
      <div class="pointer-events-none absolute left-0 top-0 bottom-0 w-24 bg-gradient-to-r from-white to-transparent z-10"></div>
      <div class="pointer-events-none absolute right-0 top-0 bottom-0 w-24 bg-gradient-to-l from-white to-transparent z-10"></div>

      <!-- JS will populate inside this track -->
      <div class="brands-viewport overflow-hidden">
        <div class="brand-marquee flex items-center gap-24 will-change-transform"></div>
      </div>
    </div>
  </div>
</section>
<style>
  #brands .brand-marquee {
    width: max-content;
    transform: translateX(0);
  }

  /* pause on hover */
  #brands:hover .brand-marquee {
    animation-play-state: paused;
  }
</style>
<script>
  (function () {
    const brandSection = document.querySelector("#brands");
    if (!brandSection) return;

    const marquee = brandSection.querySelector(".brand-marquee");
    if (!marquee) return;

    // 1) Your logos list (maintain only this)
    const brands = [
      { src: "../assets/brands/22.png", alt: "Dwyer" },
      { src: "../assets/brands/baumer.png", alt: "Baumer" },
      { src: "../assets/brands/danfosss.png", alt: "Danfoss" },
      { src: "../assets/brands/festo.png", alt: "Festo" },
      { src: "../assets/brands/forbes.png", alt: "Forbes" },
      { src: "../assets/brands/general.png", alt: "General" },
      { src: "../assets/brands/h_guru.png", alt: "H Guru" },
      { src: "../assets/brands/honeywell.png", alt: "Honey Well" },
      { src: "../assets/brands/janatics.png", alt: "Janatics" },
      { src: "../assets/brands/rotex.png", alt: "Rotex" },
      { src: "../assets/brands/wikai.png", alt: "Wikai" },
    ];

    // 2) helper to create one "row"
    function createRow(isHidden = false) {
      const row = document.createElement("div");
      row.className = "brand-row flex items-center gap-24";
      if (isHidden) row.setAttribute("aria-hidden", "true");

      brands.forEach((b) => {
        const img = document.createElement("img");
        img.src = b.src;
        img.alt = b.alt;
        img.loading = "lazy";
        img.className = "h-11 opacity-60 grayscale hover:opacity-100 hover:grayscale-0 transition";
        row.appendChild(img);
      });

      return row;
    }

    // 3) Build: row + duplicate row (for seamless loop)
    marquee.innerHTML = "";
    const row1 = createRow(false);
    const row2 = createRow(true);
    marquee.appendChild(row1);
    marquee.appendChild(row2);

    // 4) Animate with JS (smooth & configurable)
    let x = 0;
    let rafId = null;

    // speed: pixels per second (change this)
    const speed = 70;

    function animate(time) {
      if (!animate.last) animate.last = time;
      const dt = (time - animate.last) / 1000; // seconds
      animate.last = time;

      const halfWidth = row1.scrollWidth; // move exactly 1 row width
      x -= speed * dt;

      // loop back seamlessly
      if (Math.abs(x) >= halfWidth) x = 0;

      marquee.style.transform = `translateX(${x}px)`;
      rafId = requestAnimationFrame(animate);
    }

    // pause on hover (JS pause, better than CSS-only)
    function start() {
      if (rafId) return;
      animate.last = null;
      rafId = requestAnimationFrame(animate);
    }

    function stop() {
      if (!rafId) return;
      cancelAnimationFrame(rafId);
      rafId = null;
    }

    brandSection.addEventListener("mouseenter", stop);
    brandSection.addEventListener("mouseleave", start);

    // responsive recalculation (if fonts/images change)
    window.addEventListener("resize", () => {
      x = 0;
    });

    start();
  })();
</script>
