<?php include 'header.php'; ?>
    <!-- Breadcrumb  -->
    <section class="relative overflow-hidden">
        <!-- background image -->
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image:url('assets/bg.webp');">
        </div>

        <!-- overlay -->
        <div class="absolute inset-0 bg-[#0b1430]/90"></div>

        <!-- glow -->
        <div class="absolute -right-40 -top-40 w-[420px] h-[220px] rounded-full bg-primary-glow-10 blur-3xl"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 py-8 text-left">
            <h1 class="text-white text-3xl md:text-5xl font-extrabold tracking-tight
                    animate-fade-up">
                Our Products
            </h1>

            <div class="mt-4 flex items-center justify-start gap-2 text-white/80 text-lg animate-fade-up delay-150">
                <a href="index" class="hover:text-primary transition">Home</a>
                <span class="text-primary font-bold">/</span>
                <span class="text-white">Products</span>
            </div>

            <!-- underline -->
            <div class="flex items-center justify-start mt-6 w-24 h-1 bg-primary rounded-full animate-scale-in"></div>
        </div>
    </section>

    <!-- ===================== PRODUCTS GRID (same as screenshot + animation + hover) ===================== -->
    <section id="products" class="relative py-24 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4">
            <!-- Top bar -->
            <div class="prod-top flex flex-col md:flex-row md:items-baseline md:justify-between gap-6 mb-12 opacity-0 translate-y-6">
                <div class="text-secondary text-xl font-semibold">
                    Showing <span class="font-bold" id="shownCount">0</span> of
                    <span class="font-bold" id="totalCount">0</span> Results
                </div>

                <!-- Sort dropdown (static UI like screenshot) -->
                <div class="flex flex-col md:flex-row gap-4 mb-10">
                <div class="w-full md:w-[340px]">
                    <select id="categorySelect"
                    class="w-full bg-[#f3f5f6] text-secondary font-semibold px-6 py-4 outline-none border border-black/5">
                    <option value="">Loading categories...</option>
                    </select>
                </div>

                <div class="w-full md:w-[340px] hidden" id="subcatWrap">
                    <select id="subcatSelect"
                    class="w-full bg-[#f3f5f6] text-secondary font-semibold px-6 py-4 outline-none border border-black/5">
                    <option value="">Select subcategory</option>
                    </select>
                </div>
            </div>
            </div>

            <!-- Grid (dynamic) -->
            <div id="productGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4"></div>

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
                background: linear-gradient(90deg, var(--primary), var(--primary)) !important;
                color: #fff;
                box-shadow: 0 18px 40px rgba(40, 165, 219, .30);
                transform: translateY(-2px);
                border-color: rgba(40, 165, 219, .30);
            }

            #products .prod-btn:hover {
                transform: translateY(-3px) scale(1.01);
                box-shadow: 0 22px 52px rgba(40, 165, 219, .60);
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

<script>
(function () {
  const grid = document.getElementById("productGrid");
  const categorySelect = document.getElementById("categorySelect");
  const subcatWrap = document.getElementById("subcatWrap");
  const subcatSelect = document.getElementById("subcatSelect");

  const shownCount = document.getElementById("shownCount");
  const totalCount = document.getElementById("totalCount");

  let DATA = null;

  function renderCards(products) {
    grid.innerHTML = "";

    const list = Array.isArray(products) ? products : [];
    shownCount.textContent = list.length;
    totalCount.textContent = list.length;

    if (!list.length) {
      grid.innerHTML = `<div class="col-span-full text-center text-secondary/70 text-xl py-16">
        No products found.
      </div>`;
      return;
    }

    list.forEach((p, i) => {
      const name = p?.name || "Product";
      const img = p?.image?.url || "https://picsum.photos/420/420?random=" + (300 + i);
      const alt = p?.image?.alt || name;
      const desc = p?.description || "";
      const ctaText = p?.cta?.text || "Technical Specs";
      const ctaHref = p?.cta?.href || "#";

      const card = document.createElement("article");
      card.className = "prod-card opacity-0 translate-y-10";

      card.innerHTML = `
        <div class="prod-inner border-4 px-4 py-4 text-center bg-white">
          <div class="h-[260px] flex items-center justify-center">
            <img src="${img}" alt="${alt}" class="prod-img max-h-[230px] w-auto object-cover" />
          </div>

          <h3 class="mt-10 text-m text-center font-semibold text-[#28a5db] leading-tight">${name}</h3>
          </div>
        </div>
      `;

      grid.appendChild(card);
    });

            // <p class="mt-4 text-base text-justify text-secondary font-medium leading-relaxed line-clamp-3">${desc}</p>
            //   <div class="mt-10 flex justify-start">
            // <a href="${ctaHref}" class="prod-btn inline-block bg-secondary text-white font-semibold px-4 py-2">
            //   ${ctaText}
            // </a>

    const cards = [...document.querySelectorAll("#products .prod-card")];
    cards.forEach((card, idx) => {
      setTimeout(() => card.classList.add("prod-in-up"), 70 * idx);
    });
  }

  function fillCategories(categories) {
    categorySelect.innerHTML = "";

    // ✅ add ALL first
    const allOpt = document.createElement("option");
    allOpt.value = "";
    allOpt.textContent = "All Products";
    categorySelect.appendChild(allOpt);

    categories.forEach((c) => {
      const opt = document.createElement("option");
      opt.value = c.id;
      opt.textContent = c.name;
      categorySelect.appendChild(opt);
    });
  }

  function fillSubcategories(subcategories) {
    subcatSelect.innerHTML = `<option value="">All</option>`;
    subcategories.forEach((s) => {
      const opt = document.createElement("option");
      opt.value = s.id;
      opt.textContent = s.name;
      subcatSelect.appendChild(opt);
    });
  }

  function getCategoryById(id) {
    return DATA?.categories?.find((c) => c.id === id);
  }

  function getAllProducts() {
    const all = [];
    (DATA?.categories || []).forEach((cat) => {
      if (Array.isArray(cat.subcategories) && cat.subcategories.length) {
        cat.subcategories.forEach((sc) => all.push(...(sc.products || [])));
      } else {
        all.push(...(cat.products || []));
      }
    });
    return all;
  }

  function getQueryParam(key) {
    const url = new URL(window.location.href);
    return (url.searchParams.get(key) || "").trim();
  }

  function refreshView() {
    const catId = categorySelect.value;

    // ✅ all
    if (!catId) {
      subcatWrap.classList.add("hidden");
      subcatSelect.value = "";
      renderCards(getAllProducts());
      return;
    }

    const cat = getCategoryById(catId);
    if (!cat) return;

    if (Array.isArray(cat.subcategories) && cat.subcategories.length) {
      subcatWrap.classList.remove("hidden");

      const selectedSub = subcatSelect.value || "";
      if (!selectedSub) {
        renderCards(cat.subcategories.flatMap((s) => s.products || []));
      } else {
        const sc = cat.subcategories.find((s) => s.id === selectedSub);
        renderCards(sc?.products || []);
      }
    } else {
      subcatWrap.classList.add("hidden");
      renderCards(cat.products || []);
    }
  }

  async function init() {
    try {
      const res = await fetch("data/product.json", { cache: "no-store" });
      DATA = await res.json();

      const categories = DATA?.categories || [];
      if (!categories.length) throw new Error("No categories found");

      fillCategories(categories);

      // ✅ apply URL param
      const urlCat = getQueryParam("category");

      if (urlCat && getCategoryById(urlCat)) {
        categorySelect.value = urlCat;

        const cat = getCategoryById(urlCat);
        if (cat?.subcategories?.length) {
          subcatWrap.classList.remove("hidden");
          fillSubcategories(cat.subcategories);
        } else {
          subcatWrap.classList.add("hidden");
        }

        subcatSelect.value = "";
      } else {
        // default ALL
        categorySelect.value = "";
        subcatWrap.classList.add("hidden");
        subcatSelect.value = "";
      }

      // ✅ one final render only
      refreshView();

      categorySelect.addEventListener("change", () => {
        const cat = getCategoryById(categorySelect.value);
        subcatSelect.value = "";

        if (cat?.subcategories?.length) {
          subcatWrap.classList.remove("hidden");
          fillSubcategories(cat.subcategories);
        } else {
          subcatWrap.classList.add("hidden");
        }

        refreshView();
      });

      subcatSelect.addEventListener("change", refreshView);
    } catch (e) {
      console.error(e);
      grid.innerHTML = `<div class="col-span-full text-center text-red-600 text-lg py-16">
        Failed to load products JSON. Check <b>data/product.json</b> path.
      </div>`;
    }
  }

  init();
})();
</script>


    </section>

<!-- ===================== FOOTER (same as image) ===================== -->
<?php include 'footer.php'; ?>