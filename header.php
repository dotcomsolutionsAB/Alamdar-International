<?php
session_start();
include __DIR__ . '/config/static-data.php';

// If maintenance is ON and admin is NOT logged in, redirect to maintenance page
if (defined('SITE_MAINTENANCE') && SITE_MAINTENANCE == 1) {

    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $current = basename($path);

    $isLoggedIn = !empty($_SESSION[MAINT_SESSION_KEY]);

    // allow these without login
    $allowedFiles = ['maintenance.html', 'maintenance_login.php'];

    if (!$isLoggedIn) {
        // allow assets so maintenance page loads properly
        if (!in_array($current, $allowedFiles, true) && strpos($path, '/assets/') !== 0) {
            http_response_code(503);
            header("Location: /maintenance.html");
            exit;
        }
    }
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= SITE_NAME ?></title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= SITE_LOGO ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= FAV_LOGO ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= FAV_LOGO ?>">
    <!-- <link rel="manifest" href="assets/images/favicons/site.webmanifest"> -->
    <link rel="stylesheet" href="assets/css/color.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <style>
        html,
        body {
            font-family: "Montserrat", sans-serif;
        }

        /* force Montserrat everywhere */
        * {
            font-family: "Montserrat", sans-serif;
        }
    </style>
    <style>
        body.custom-cursor {
            cursor: none;
        }

        #cursorDot,
        #cursorRing {
            position: fixed;
            left: 0;
            top: 0;
            pointer-events: none;
            z-index: 99999;
            transform: translate(-50%, -50%);
        }

        #cursorDot {
            width: 8px;
            height: 8px;
            border-radius: 9999px;
            background: var(--primary); 
        }

        #cursorRing {
            width: 34px;
            height: 34px;
            border-radius: 9999px;
            border: 2px solid var(--secondary);
            transition: width .18s ease, height .18s ease, border-color .18s ease, opacity .18s ease;
            opacity: .9;
        }

        /* Hover effect for links/buttons */
        .cursor-hover #cursorRing {
            width: 50px;
            height: 50px;
            border-color: var(--primary-2);
            opacity: 1;
        }
    </style>
    <style>
        #main-nav.nav-scrolled {
            background: linear-gradient(90deg,
                    #0b1430 0%,
                    #1a223d 50%,
                    #0b1430 100%);
            box-shadow: 0 20px 50px rgba(16, 24, 40, 0.35);
            border-bottom: 2px solid rgba(40,165,219,.60);
            backdrop-filter: blur(10px);
        }
    </style>
</head>

<body class="custom-cursor">
    <!-- Topbar -->
    <div class="bg-[var(--placeholder-bg)] text-white text-sm hidden md:block">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center py-2 px-4">
            <div class="flex flex-wrap items-center gap-x-6 gap-y-1">
                <span class="flex items-center"><i class="fa-solid fa-location-dot mr-1 text-primary"></i><a
                        href="https://maps.app.goo.gl/RU419bHcAWhNFQqb8" class="hover:underline"><?= SITE_ADDRESS ?></a></span>
                <span class="flex items-center"><i class="fa-solid fa-envelope ml-4 mr-1 text-primary"></i><a
                        href="mailto:<?= SITE_EMAIL ?>" class="hover:underline"><?= SITE_EMAIL ?></a></span>
            </div>
            <!-- <div class="flex flex-wrap items-center gap-x-6 gap-y-1 mt-1 md:mt-0">
                <span class="flex items-center"><i class="fa-solid fa-clock mr-1 text-primary"></i>Mon to Sat: 8.00
                    am - 7.00 pm</span>
                <a href="#" class="ml-2 hover:text-blue-500"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="hover:text-blue-400"><i class="fab fa-twitter"></i></a>
                <a href="https://pinterest.com" class="hover:text-red-500"><i class="fab fa-pinterest-p"></i></a>
                <a href="https://instagram.com" class="hover:text-pink-500"><i class="fab fa-instagram"></i></a>
            </div> -->
        </div>
    </div>
    <!-- Navigation Bar -->
    <nav id="main-nav" class="sticky top-0 z-[9999] nav-gradient text-white w-full border-b border-primary-30-30 transition-all duration-300">

        <div class="max-w-7xl mx-auto flex items-center justify-between px-4 h-20">
            <!-- Logo -->
            <a href="index" class="flex items-center flex-shrink-0 h-full">
                <img src="<?= SITE_LOGO ?>" alt="getizy HTML" class="h-8 md:h-16 w-auto drop-shadow-xl" />
            </a>
            <!-- Menu -->
            <ul class="hidden lg:flex flex-1 justify-center space-x-2 font-semibold text-base">
                <li>
                    <a href="index"
                        class="group flex items-center gap-2 px-5 py-2 rounded-xl transition-all duration-200 relative overflow-hidden">
                        <i class="fa-solid fa-house text-primary"></i>
                        <span class="relative z-10">Home</span>
                        <span
                            class="absolute left-0 bottom-0 w-0 h-1 bg-primary rounded-full group-hover:w-full transition-all duration-300"></span>
                    </a>
                </li>
                <li>
                    <a href="about"
                        class="group flex items-center gap-2 px-5 py-2 rounded-xl transition-all duration-200 relative overflow-hidden">
                        <i class="fa-solid fa-user-tie text-primary"></i>
                        <span class="relative z-10">About</span>
                        <span
                            class="absolute left-0 bottom-0 w-0 h-1 bg-primary rounded-full group-hover:w-full transition-all duration-300"></span>
                    </a>
                </li>
                <!-- <li>
                    <a href="services-grid.html"
                        class="group flex items-center gap-2 px-5 py-2 rounded-xl transition-all duration-200 relative overflow-hidden">
                        <i class="fa-solid fa-cogs text-primary"></i>
                        <span class="relative z-10">Services</span>
                        <span
                            class="absolute left-0 bottom-0 w-0 h-1 bg-primary rounded-full group-hover:w-full transition-all duration-300"></span>
                    </a>
                </li> -->
                <!-- Products Dropdown (Desktop) -->
                <li class="relative group">
                    <a href="products"
                        class="group flex items-center gap-2 px-5 py-2 rounded-xl transition-all duration-200 relative overflow-hidden">
                        <i class="fa-solid fa-diagram-project text-primary"></i>
                        <span class="relative z-10">Products</span>
                        <i class="fa-solid fa-chevron-down text-xs opacity-80 relative z-10"></i>

                        <span
                            class="absolute left-0 bottom-0 w-0 h-1 bg-primary rounded-full group-hover:w-full transition-all duration-300"></span>
                    </a>

                    <!-- Dropdown -->
                    <div
                        class="absolute left-0 top-full mt-3 w-64 rounded-2xl border border-white/10 bg-[var(--secondary)] backdrop-blur shadow-2xl overflow-hidden opacity-0 invisible translate-y-2 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-200">
                        
                        <a href="products?category=valves"
                            class="flex items-center gap-3 px-5 py-3 text-white hover:bg-white/10 transition">
                            <i class="fa-solid fa-circle-dot text-primary text-xs"></i>
                            Valves
                        </a>

                        <a href="products?category=rubber-products"
                            class="flex items-center gap-3 px-5 py-3 text-white hover:bg-white/10 transition">
                            <i class="fa-solid fa-circle-dot text-primary text-xs"></i>
                            Rubber Products
                        </a>

                        <a href="products?category=expansion-joints"
                            class="flex items-center gap-3 px-5 py-3 text-white hover:bg-white/10 transition">
                            <i class="fa-solid fa-circle-dot text-primary text-xs"></i>
                            Expansion Joints
                        </a>

                        <a href="products?category=measure-products"
                            class="flex items-center gap-3 px-5 py-3 text-white hover:bg-white/10 transition">
                            <i class="fa-solid fa-circle-dot text-primary text-xs"></i>
                            Measure Products
                        </a>
                    </div>
                </li>
            </ul>
            <!-- Actions -->
            <div class="flex items-center gap-2 md:gap-3 flex-shrink-0 whitespace-nowrap">
    
                <!-- Contact button: show always -->
                <a href="contact" class="btn-primary-grad text-[#fff] px-7 py-2 rounded-2xl font-bold shadow-xl transition-all duration-200 hover:scale-105 text-sm md:text-base">
                    <i class="fa-solid fa-envelope"></i>
                    <span class="ml-3 relative z-10">Contact</span>
                </a>

                <!-- Phone: hide on mobile -->
                <a href="tel:<?= SITE_PHONE_LINK ?>"
                class="hidden md:flex items-center gap-2 text-white hover:text-primary transition-all duration-200">
                    <i class="fa-solid fa-phone animate-pulse"></i>
                    <span class="font-semibold"><?= SITE_PHONE ?></span>
                </a>

                <!-- Burger -->
                <button id="menuBtn"
                    class="lg:hidden text-2xl ml-1 text-white hover:text-primary transition-all duration-200"
                    aria-label="Open Menu" aria-expanded="false" type="button">
                    <i id="menuIcon" class="fa fa-bars"></i>
                </button>
            </div>

        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="lg:hidden hidden border-t border-white/10 bg-[var(--secondary)]/95 backdrop-blur">
            <div class="max-w-7xl mx-auto px-4 py-4 space-y-2">

                <a href="index"
                class="flex items-center gap-3 px-4 py-3 rounded-xl text-white hover:bg-white/10 transition">
                    <i class="fa-solid fa-house text-primary"></i>
                    Home
                </a>

                <a href="about"
                class="flex items-center gap-3 px-4 py-3 rounded-xl text-white hover:bg-white/10 transition">
                    <i class="fa-solid fa-user-tie text-primary"></i>
                    About
                </a>

                <!-- Products Dropdown (Mobile) -->
                <div class="rounded-xl overflow-hidden">
                    <button type="button"
                        class="w-full flex items-center justify-between gap-3 px-4 py-3 rounded-xl text-white hover:bg-white/10 transition"
                        onclick="toggleMobileProducts()">
                        <span class="flex items-center gap-3">
                            <i class="fa-solid fa-diagram-project text-primary"></i>
                            Products
                        </span>
                        <i id="mobileProductsIcon" class="fa-solid fa-chevron-down text-sm transition-transform duration-200"></i>
                    </button>

                    <div id="mobileProductsDropdown" class="hidden mt-1 ml-2 border-l border-white/10 pl-3 space-y-1">
                        <a href="products?category=valves"
                            class="flex items-center gap-3 px-4 py-3 rounded-xl text-white hover:bg-white/10 transition">
                            <i class="fa-solid fa-circle-dot text-primary text-xs"></i>
                            Valves
                        </a>

                        <a href="products?category=rubber-products"
                            class="flex items-center gap-3 px-4 py-3 rounded-xl text-white hover:bg-white/10 transition">
                            <i class="fa-solid fa-circle-dot text-primary text-xs"></i>
                            Rubber Products
                        </a>

                        <a href="products?category=expansion-joints"
                            class="flex items-center gap-3 px-4 py-3 rounded-xl text-white hover:bg-white/10 transition">
                            <i class="fa-solid fa-circle-dot text-primary text-xs"></i>
                            Expansion Joints
                        </a>

                        <a href="products?category=measure-products"
                            class="flex items-center gap-3 px-4 py-3 rounded-xl text-white hover:bg-white/10 transition">
                            <i class="fa-solid fa-circle-dot text-primary text-xs"></i>
                            Measure Products
                        </a>
                    </div>
                </div>

                <div class="pt-3 border-t border-white/10 flex flex-col gap-3">
                    <a href="contact" class="w-full text-center bg-gradient-to-r from-[var(--primary)] to-bg-[var(--secondary)] text-[#fff] px-6 py-3 rounded-2xl font-bold shadow-xl">
                        Contact Us
                    </a>

                    <a href="tel:<?= SITE_PHONE_LINK ?>"
                    class="w-full flex items-center justify-center gap-2 text-white hover:text-primary transition">
                        <i class="fa-solid fa-phone"></i>
                        <span class="font-semibold"><?= SITE_PHONE ?></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
<script>
    function toggleMobileProducts() {
        const dd = document.getElementById('mobileProductsDropdown');
        const icon = document.getElementById('mobileProductsIcon');

        dd.classList.toggle('hidden');

        // rotate icon
        if (dd.classList.contains('hidden')) {
            icon.classList.remove('rotate-180');
        } else {
            icon.classList.add('rotate-180');
        }
    }
</script>
