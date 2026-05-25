<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Living Local Logic | The Logic of Korean Mastery</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,400&family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #041611; color: #f8fafc; scroll-behavior: smooth; }
        h1, .chef-name { font-family: 'Playfair Display', serif; }
        h2, h3, h4, nav, button, label { font-family: 'Inter', sans-serif; font-weight: 700; }
        .glass { background: rgba(255, 255, 255, 0.02); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.08); }
        .btn-gold { background: #c5a059; color: #041611; transition: all 0.3s ease; }
        .btn-gold:hover { background: #e2c27d; transform: translateY(-2px); box-shadow: 0 10px 20px rgba(197, 160, 89, 0.3); }
        .input-field { background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 4px; padding: 12px; color: white; width: 100%; transition: border 0.3s; }
        .input-field:focus { border-color: #c5a059; outline: none; }
        .sepia-effect { filter: sepia(0.2) contrast(1.1) brightness(0.9); }

        /* Mobile menu */
        #mobile-menu { transform: translateX(100%); transition: transform 0.3s ease; }
        #mobile-menu.open { transform: translateX(0); }
    </style>
</head>
<body class="antialiased">

    <!-- Mobile Menu Overlay -->
    <div id="mobile-overlay" class="fixed inset-0 bg-black/60 z-40 hidden" onclick="closeMobileMenu()"></div>

    <!-- Mobile Menu Drawer -->
    <div id="mobile-menu" class="fixed top-0 right-0 h-full w-72 bg-[#041611] border-l border-white/10 z-50 flex flex-col px-8 py-10">
        <button onclick="closeMobileMenu()" class="absolute top-6 right-6 text-slate-400 hover:text-white transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <a href="index.php" class="flex items-center gap-3 mb-10">
            <img src="logo-clear-2026.png" alt="Living Local Logic" class="h-8 w-auto">
            <span class="text-sm font-bold tracking-tighter uppercase">Living <span class="text-[#c5a059]">Local</span> Logic</span>
        </a>
        <nav class="flex flex-col gap-6 text-sm font-bold uppercase tracking-widest">
            <a href="index.php#logic" onclick="closeMobileMenu()" class="hover:text-[#c5a059] transition">The Logic</a>
            <a href="index.php#chef" onclick="closeMobileMenu()" class="hover:text-[#c5a059] transition">Chef Lee Tak</a>
            <a href="index.php#tracks" onclick="closeMobileMenu()" class="hover:text-[#c5a059] transition">Syllabus</a>
            <a href="experiences.php" onclick="closeMobileMenu()" class="hover:text-[#c5a059] transition">Experiences</a>
            <a href="partners.php" onclick="closeMobileMenu()" class="hover:text-[#c5a059] transition">Partners</a>
            <a href="who-we-are.php" onclick="closeMobileMenu()" class="hover:text-[#c5a059] transition">Who We Are</a>
        </nav>
        <div class="mt-auto">
            <a href="index.php#apply" onclick="closeMobileMenu()" class="btn-gold block text-center py-4 rounded-full text-sm font-bold uppercase tracking-widest">Apply Now</a>
        </div>
    </div>

    <!-- Main Nav -->
    <nav class="sticky top-0 z-50 glass flex justify-between items-center px-8 py-4 border-b border-white/5">
        <a href="index.php" class="flex items-center gap-3">
            <img src="logo-clear-2026.png" alt="Living Local Logic" class="h-10 w-auto">
            <span class="text-xl font-bold tracking-tighter uppercase">Living <span class="text-[#c5a059]">Local</span> Logic</span>
        </a>

        <!-- Desktop nav -->
        <div class="hidden md:flex space-x-8 text-[10px] font-bold uppercase tracking-[0.2em]">
            <a href="index.php#logic" class="hover:text-[#c5a059] transition">The Logic</a>
            <a href="index.php#chef" class="hover:text-[#c5a059] transition">Chef Lee Tak</a>
            <a href="index.php#tracks" class="hover:text-[#c5a059] transition">Syllabus</a>
            <a href="experiences.php" class="hover:text-[#c5a059] transition">Experiences</a>
            <a href="partners.php" class="hover:text-[#c5a059] transition">Partners</a>
            <a href="who-we-are.php" class="hover:text-[#c5a059] transition">Who We Are</a>
            <a href="index.php#apply" class="text-[#c5a059] border border-[#c5a059]/40 px-5 py-1.5 rounded-sm hover:bg-[#c5a059] hover:text-black transition uppercase">Apply Now</a>
        </div>

        <!-- Hamburger button -->
        <button onclick="openMobileMenu()" class="md:hidden text-slate-400 hover:text-white transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </nav>

    <script>
        function openMobileMenu() {
            document.getElementById('mobile-menu').classList.add('open');
            document.getElementById('mobile-overlay').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
        function closeMobileMenu() {
            document.getElementById('mobile-menu').classList.remove('open');
            document.getElementById('mobile-overlay').classList.add('hidden');
            document.body.style.overflow = '';
        }
    </script>
