<!-- resources/views/partials/navbar.blade.php -->
<nav class="fixed top-0 w-full z-50 nav-glass">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 flex justify-between items-center h-16 md:h-20">
        <a href="#accueil" class="flex items-center gap-2.5">
            <div class="w-10 h-10 flex items-center justify-center p-1">
                <img src="{{ asset('images/logo1.png') }}" alt="logo" class="w-full h-full object-contain scale-110">
            </div>
            <div class="flex flex-col leading-none">
                <span class="heading-impact text-base sm:text-lg font-bold tracking-tighter">SEA FAST BOAT</span>
                <span class="text-[7px] sm:text-[8px] font-bold tracking-[0.35em] text-[#BFBFBF]">& WICD</span>
            </div>
        </a>

        <ul class="hidden lg:flex items-center gap-7 heading-impact text-[12px] font-medium tracking-widest text-[#BFBFBF]">
            <li><a href="#accueil" class="hover:text-white transition-colors">Accueil</a></li>
            <li><a href="#apropos" class="hover:text-white transition-colors">A Propos</a></li>
            <li><a href="#services" class="hover:text-white transition-colors">Services</a></li>
            <li><a href="#projets" class="hover:text-white transition-colors">Projets</a></li>
            <li><a href="#faq" class="hover:text-white transition-colors">FAQ</a></li>
            <li>
                <a href="#devis" class="btn-premium px-5 py-2.5 rounded-sm text-white text-[12px] inline-block">
                    Devis Gratuit
                </a>
            </li>
        </ul>

        <button class="lg:hidden text-white w-10 h-10 flex items-center justify-center" onclick="toggleMobileMenu()" aria-label="Menu">
            <i class="fa-solid fa-bars text-xl" id="menuIcon"></i>
        </button>
    </div>
</nav>

<!-- MOBILE MENU -->
<div id="mobileMenu" class="fixed inset-0 z-[60] bg-[#0B0B0B] flex flex-col items-center justify-center gap-6 heading-impact text-xl hidden opacity-0 transition-opacity duration-300">
    <button class="absolute top-5 right-5 text-white w-10 h-10 flex items-center justify-center" onclick="toggleMobileMenu()" aria-label="Fermer">
        <i class="fa-solid fa-xmark text-2xl"></i>
    </button>
    <a href="#accueil" onclick="toggleMobileMenu()" class="hover:text-[#FF2D2D] transition-colors">Accueil</a>
    <a href="#apropos" onclick="toggleMobileMenu()" class="hover:text-[#FF2D2D] transition-colors">A Propos</a>
    <a href="#services" onclick="toggleMobileMenu()" class="hover:text-[#FF2D2D] transition-colors">Services</a>
    <a href="#projets" onclick="toggleMobileMenu()" class="hover:text-[#FF2D2D] transition-colors">Projets</a>
    <a href="#faq" onclick="toggleMobileMenu()" class="hover:text-[#FF2D2D] transition-colors">FAQ</a>
    <a href="#devis" onclick="toggleMobileMenu()" class="btn-premium px-8 py-3 rounded-sm text-white text-base mt-4">Devis Gratuit</a>
</div>
