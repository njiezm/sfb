<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sea Fast Boat & WICD | Performance Navale Martinique</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Inter:wght@300;400;600;700&family=Caveat:wght@600&display=swap" rel="stylesheet">

    <!-- Votre CSS personnalisé -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- NAVIGATION -->
    @include('partials.navbar')

    <!-- HERO SECTION -->
    <section id="accueil" class="relative min-h-screen flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/ban.png') }}" alt="Bateau rapide en mer" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/55 bg-gradient-to-t from-[#0B0B0B] via-transparent to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-[#0B0B0B]/70 via-transparent to-transparent"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 md:px-12 w-full pt-28 pb-20 md:pt-0 md:pb-0">
            <div class="max-w-3xl space-y-5">
                <div class="reveal active flex items-center gap-3">
                    <div class="pulse-dot"></div>
                    <span class="heading-impact text-[#FF2D2D] font-bold tracking-[0.2em] text-[10px] sm:text-xs">Expertise Nautique Martinique</span>
                </div>
                <h1 class="heading-impact font-bold reveal active" style="transition-delay: 100ms;">
                    NAVIGUEZ <br>
                    <span >PLUS VITE</span>,<br> PLUS LOIN.
                </h1>

                <div class="reveal active" style="transition-delay: 200ms;">
                    <span class="handwritten text-xl sm:text-2xl mb-2 block">
                        <i class="fa-solid fa-pen-nib text-sm mr-1"></i> On s'occupe de tout !
                    </span>
                </div>

                <p class="text-[#BFBFBF] text-sm sm:text-base md:text-lg max-w-xl font-light leading-relaxed reveal active hero-sub" style="transition-delay: 300ms;">
                    Rénovation, motorisation et conception sur-mesure pour ceux qui ne font aucun compromis sur la performance. De la carène au tableau de bord, chaque détail compte.
                </p>

                <div class="flex flex-wrap gap-4 pt-3 reveal active" style="transition-delay: 400ms;">
                    <a href="#devis" class="btn-premium px-7 py-3.5 sm:px-8 sm:py-4 rounded-sm text-white font-bold flex items-center gap-3 text-xs sm:text-sm">
                        Demander un devis <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                    <a href="#projets" class="btn-outline px-7 py-3.5 sm:px-8 sm:py-4 rounded-sm text-white font-bold flex items-center gap-3 text-xs sm:text-sm">
                        Voir nos projets <i class="fa-solid fa-images text-xs"></i>
                    </a>
                </div>

                <div class="flex flex-wrap gap-8 pt-6 reveal active" style="transition-delay: 500ms;">
                    <div class="flex items-center gap-2 text-[#BFBFBF] text-xs">
                        <i class="fa-solid fa-check text-[#FF2D2D] text-[10px]"></i>
                        <span>Devis sous 24h</span>
                    </div>
                    <div class="flex items-center gap-2 text-[#BFBFBF] text-xs">
                        <i class="fa-solid fa-check text-[#FF2D2D] text-[10px]"></i>
                        <span>Garantie pièces</span>
                    </div>
                    <div class="flex items-center gap-2 text-[#BFBFBF] text-xs">
                        <i class="fa-solid fa-check text-[#FF2D2D] text-[10px]"></i>
                        <span>Sur-mesure total</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-10 flex flex-col items-center gap-2 reveal active" style="transition-delay: 700ms;">
            <span class="text-[#666] text-[9px] tracking-[0.3em] uppercase">Scroll</span>
            <div class="w-5 h-8 border border-white/20 rounded-full flex justify-center pt-1.5">
                <div class="w-1 h-2 bg-[#FF2D2D] rounded-full animate-bounce"></div>
            </div>
        </div>
    </section>

    <!-- MARQUEE BANDEAU -->
    <div class="bg-[#FF2D2D] py-3 overflow-hidden">
        <div class="marquee-track whitespace-nowrap">
            <span class="heading-impact text-xs tracking-[0.3em] text-white/90 mx-8">MOTORISATION</span>
            <span class="text-white/40 mx-2"><i class="fa-solid fa-diamond text-[6px]"></i></span>
            <span class="heading-impact text-xs tracking-[0.3em] text-white/90 mx-8">CARÈNE</span>
            <span class="text-white/40 mx-2"><i class="fa-solid fa-diamond text-[6px]"></i></span>
            <span class="heading-impact text-xs tracking-[0.3em] text-white/90 mx-8">PEINTURE NAVAL</span>
            <span class="text-white/40 mx-2"><i class="fa-solid fa-diamond text-[6px]"></i></span>
            <span class="heading-impact text-xs tracking-[0.3em] text-white/90 mx-8">STRATIFICATION</span>
            <span class="text-white/40 mx-2"><i class="fa-solid fa-diamond text-[6px]"></i></span>
            <span class="heading-impact text-xs tracking-[0.3em] text-white/90 mx-8">CONCEPTION SUR-MESURE</span>
            <span class="text-white/40 mx-2"><i class="fa-solid fa-diamond text-[6px]"></i></span>
            <span class="heading-impact text-xs tracking-[0.3em] text-white/90 mx-8">ÉLECTRONIQUE</span>
            <span class="text-white/40 mx-2"><i class="fa-solid fa-diamond text-[6px]"></i></span>
            <!-- Doublons pour l'effet infini -->
            <span class="heading-impact text-xs tracking-[0.3em] text-white/90 mx-8">MOTORISATION</span>
            <span class="text-white/40 mx-2"><i class="fa-solid fa-diamond text-[6px]"></i></span>
            <span class="heading-impact text-xs tracking-[0.3em] text-white/90 mx-8">CARÈNE</span>
            <span class="text-white/40 mx-2"><i class="fa-solid fa-diamond text-[6px]"></i></span>
            <span class="heading-impact text-xs tracking-[0.3em] text-white/90 mx-8">PEINTURE NAVAL</span>
            <span class="text-white/40 mx-2"><i class="fa-solid fa-diamond text-[6px]"></i></span>
            <span class="heading-impact text-xs tracking-[0.3em] text-white/90 mx-8">STRATIFICATION</span>
            <span class="text-white/40 mx-2"><i class="fa-solid fa-diamond text-[6px]"></i></span>
            <span class="heading-impact text-xs tracking-[0.3em] text-white/90 mx-8">CONCEPTION SUR-MESURE</span>
            <span class="text-white/40 mx-2"><i class="fa-solid fa-diamond text-[6px]"></i></span>
            <span class="heading-impact text-xs tracking-[0.3em] text-white/90 mx-8">ÉLECTRONIQUE</span>
            <span class="text-white/40 mx-2"><i class="fa-solid fa-diamond text-[6px]"></i></span>
        </div>
    </div>

    <!-- A PROPOS -->
    <section id="apropos" class="py-20 md:py-28 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12">
            <div class="grid md:grid-cols-2 gap-10 md:gap-16 items-center">
                <div class="reveal-left">
                    <div class="relative">
                        <img src="{{ asset('images/bateau.png') }}" alt="Atelier Sea Fast Boat" class="w-full rounded-xl object-cover aspect-[4/3]">
                        <div class="absolute -bottom-5 -right-5 bg-[#FF2D2D] rounded-xl p-5 shadow-xl hidden sm:block">
                            <div class="stat-number text-3xl">15+</div>
                            <div class="text-[10px] tracking-widest uppercase font-bold text-white/80">Ans d'expérience</div>
                        </div>
                    </div>
                </div>
                <div class="reveal-right space-y-6">
                    <span class="heading-impact text-[#FF2D2D] font-bold tracking-[0.2em] text-[10px] sm:text-xs flex items-center gap-2">
                        <i class="fa-solid fa-anchor text-xs"></i> Qui sommes-nous
                    </span>
                    <h2 class="heading-impact font-bold">
                        LA PASSION <span class="text-[#FF2D2D]">NAVALE</span><br>DANS LES VEINES
                    </h2>
                    <p class="text-[#BFBFBF] text-sm leading-relaxed">
                        Sea Fast Boat & WICD est né d'une obsession simple : pousser chaque coque à son maximum. Basés en Martinique, nous combinons savoir-faire artisanal et technologies de pointe pour transformer vos embarcations en machines de performance.
                    </p>
                    <p class="text-[#BFBFBF] text-sm leading-relaxed">
                        Notre équipe de techniciens spécialisés intervient sur tous types de supports — open, semi-rigide, vedette, Speedster — avec une approche rigoureuse : diagnostic complet, solutions ciblées, résultat mesurable. Pas de approximation, pas de sous-traitance cachée.
                    </p>
                    <div class="grid grid-cols-2 gap-4 pt-2">
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-lg bg-[#FF2D2D]/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i class="fa-solid fa-medal text-[#FF2D2D] text-sm"></i>
                            </div>
                            <div>
                                <div class="text-sm font-semibold">Certifié</div>
                                <div class="text-[#888] text-xs">Professionnel nautique</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-lg bg-[#FF2D2D]/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i class="fa-solid fa-location-dot text-[#FF2D2D] text-sm"></i>
                            </div>
                            <div>
                                <div class="text-sm font-semibold">Martinique</div>
                                <div class="text-[#888] text-xs">Basé au Lamentin</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-lg bg-[#FF2D2D]/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i class="fa-solid fa-users text-[#FF2D2D] text-sm"></i>
                            </div>
                            <div>
                                <div class="text-sm font-semibold">Equipe 8+</div>
                                <div class="text-[#888] text-xs">Techniciens experts</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-lg bg-[#FF2D2D]/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i class="fa-solid fa-handshake text-[#FF2D2D] text-sm"></i>
                            </div>
                            <div>
                                <div class="text-sm font-semibold">300+</div>
                                <div class="text-[#888] text-xs">Projets réalisés</div>
                            </div>
                        </div>
                    </div>
                    <a href="#services" class="btn-premium inline-flex items-center gap-3 px-7 py-3.5 rounded-sm text-white font-bold text-xs sm:text-sm mt-2">
                        Découvrir nos services <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="separator max-w-7xl mx-auto"></div>

    <!-- STATS SECTION -->
    <section class="py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
                <div class="text-center reveal">
                    <div class="stat-number text-[#FF2D2D]" data-count="312">0</div>
                    <div class="text-[#888] text-[10px] tracking-[0.2em] uppercase font-bold mt-2">Projets Livrés</div>
                </div>
                <div class="text-center reveal" style="transition-delay:100ms">
                    <div class="stat-number" data-count="15">0</div>
                    <div class="text-[#888] text-[10px] tracking-[0.2em] uppercase font-bold mt-2">Ans d'Expérience</div>
                </div>
                <div class="text-center reveal" style="transition-delay:200ms">
                    <div class="stat-number" data-count="98">0</div>
                    <div class="text-[#888] text-[10px] tracking-[0.2em] uppercase font-bold mt-2">% Satisfaction</div>
                </div>
                <div class="text-center reveal" style="transition-delay:300ms">
                    <div class="stat-number" data-count="47">0</div>
                    <div class="text-[#888] text-[10px] tracking-[0.2em] uppercase font-bold mt-2">Noeuds Record</div>
                </div>
            </div>
        </div>
    </section>

    <div class="separator max-w-7xl mx-auto"></div>

    <!-- SERVICES SECTION -->
    <section id="services" class="py-20 md:py-28 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12">
            <div class="mb-14 reveal">
                <span class="heading-impact text-[#FF2D2D] font-bold tracking-[0.2em] text-[10px] sm:text-xs flex items-center gap-2 mb-4">
                    <i class="fa-solid fa-wrench text-xs"></i> Nos expertises
                </span>
                <h2 class="heading-impact font-bold mb-3">NOTRE <span class="text-[#FF2D2D]">SAVOIR-FAIRE</span></h2>
                <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-4">
                    <p class="text-[#BFBFBF] uppercase tracking-widest text-[10px] font-bold">Performance & Esthétique</p>
                    <span class="handwritten text-lg"><i class="fa-solid fa-pen-nib text-xs mr-1"></i> Qualité garantie !</span>
                </div>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-6">
                <!-- Card 1 -->
                <div class="card-service p-7 md:p-8 flex flex-col gap-4 reveal">
                    <div class="flex items-center justify-between">
                        <div class="w-12 h-12 rounded-lg bg-[#FF2D2D]/10 flex items-center justify-center">
                            <i class="fa-solid fa-gauge-high text-[#FF2D2D] text-lg"></i>
                        </div>
                        <span class="text-[#333] text-xs heading-impact tracking-widest">01</span>
                    </div>
                    <h3 class="heading-impact text-lg font-bold">Motorisation & Optimisation</h3>
                    <p class="text-[#BFBFBF] text-sm leading-relaxed flex-1">Installation, réglage et optimisation de moteurs hors-bord et inboard. Banc d'essai, hélice sur-mesure, carburant et injection — on extrait chaque cheval.</p>
                    <div class="flex flex-wrap gap-2 pt-1">
                        <span class="text-[9px] tracking-wider uppercase bg-white/5 px-2.5 py-1 rounded-full text-[#999]">Hors-bord</span>
                        <span class="text-[9px] tracking-wider uppercase bg-white/5 px-2.5 py-1 rounded-full text-[#999]">Inboard</span>
                        <span class="text-[9px] tracking-wider uppercase bg-white/5 px-2.5 py-1 rounded-full text-[#999]">Turbo</span>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card-service p-7 md:p-8 flex flex-col gap-4 reveal" style="transition-delay:100ms">
                    <div class="flex items-center justify-between">
                        <div class="w-12 h-12 rounded-lg bg-[#FF2D2D]/10 flex items-center justify-center">
                            <i class="fa-solid fa-shield-halved text-[#FF2D2D] text-lg"></i>
                        </div>
                        <span class="text-[#333] text-xs heading-impact tracking-widest">02</span>
                    </div>
                    <h3 class="heading-impact text-lg font-bold">Refit & Réparation Carène</h3>
                    <p class="text-[#BFBFBF] text-sm leading-relaxed flex-1">Restauration complète de vos structures composites, polyester et bois. Réparation de délaminages, impacts, fissures — la coque retrouve son intégrité d'origine.</p>
                    <div class="flex flex-wrap gap-2 pt-1">
                        <span class="text-[9px] tracking-wider uppercase bg-white/5 px-2.5 py-1 rounded-full text-[#999]">Composite</span>
                        <span class="text-[9px] tracking-wider uppercase bg-white/5 px-2.5 py-1 rounded-full text-[#999]">Polyester</span>
                        <span class="text-[9px] tracking-wider uppercase bg-white/5 px-2.5 py-1 rounded-full text-[#999]">Bois</span>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card-service p-7 md:p-8 flex flex-col gap-4 reveal" style="transition-delay:200ms">
                    <div class="flex items-center justify-between">
                        <div class="w-12 h-12 rounded-lg bg-[#FF2D2D]/10 flex items-center justify-center">
                            <i class="fa-solid fa-paint-roller text-[#FF2D2D] text-lg"></i>
                        </div>
                        <span class="text-[#333] text-xs heading-impact tracking-widest">03</span>
                    </div>
                    <h3 class="heading-impact text-lg font-bold">Peinture & Finitions</h3>
                    <p class="text-[#BFBFBF] text-sm leading-relaxed flex-1">Antifouling professionnel, peinture gelcoat, finition custom haute brillance. Un look qui arrête les regards et résiste au sel, aux UV et aux chocs.</p>
                    <div class="flex flex-wrap gap-2 pt-1">
                        <span class="text-[9px] tracking-wider uppercase bg-white/5 px-2.5 py-1 rounded-full text-[#999]">Antifouling</span>
                        <span class="text-[9px] tracking-wider uppercase bg-white/5 px-2.5 py-1 rounded-full text-[#999]">Gelcoat</span>
                        <span class="text-[9px] tracking-wider uppercase bg-white/5 px-2.5 py-1 rounded-full text-[#999]">Custom</span>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="card-service p-7 md:p-8 flex flex-col gap-4 reveal">
                    <div class="flex items-center justify-between">
                        <div class="w-12 h-12 rounded-lg bg-[#FF2D2D]/10 flex items-center justify-center">
                            <i class="fa-solid fa-layer-group text-[#FF2D2D] text-lg"></i>
                        </div>
                        <span class="text-[#333] text-xs heading-impact tracking-widest">04</span>
                    </div>
                    <h3 class="heading-impact text-lg font-bold">Stratification & Moulage</h3>
                    <p class="text-[#BFBFBF] text-sm leading-relaxed flex-1">Création de pièces structurelles en fibre de verre, carbone et kevlar. Coffres, capots, tableau arrière — fabrication complète en atelier ou sur site.</p>
                    <div class="flex flex-wrap gap-2 pt-1">
                        <span class="text-[9px] tracking-wider uppercase bg-white/5 px-2.5 py-1 rounded-full text-[#999]">Fibre de verre</span>
                        <span class="text-[9px] tracking-wider uppercase bg-white/5 px-2.5 py-1 rounded-full text-[#999]">Carbone</span>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="card-service p-7 md:p-8 flex flex-col gap-4 reveal" style="transition-delay:100ms">
                    <div class="flex items-center justify-between">
                        <div class="w-12 h-12 rounded-lg bg-[#FF2D2D]/10 flex items-center justify-center">
                            <i class="fa-solid fa-microchip text-[#FF2D2D] text-lg"></i>
                        </div>
                        <span class="text-[#333] text-xs heading-impact tracking-widest">05</span>
                    </div>
                    <h3 class="heading-impact text-lg font-bold">Électronique & Navigation</h3>
                    <p class="text-[#BFBFBF] text-sm leading-relaxed flex-1">Installation de sondeurs, GPS, pilotes automatiques, VHF et éclairage LED. Câblage professionnel et mise en service complète pour naviguer en toute confiance.</p>
                    <div class="flex flex-wrap gap-2 pt-1">
                        <span class="text-[9px] tracking-wider uppercase bg-white/5 px-2.5 py-1 rounded-full text-[#999]">Sonar</span>
                        <span class="text-[9px] tracking-wider uppercase bg-white/5 px-2.5 py-1 rounded-full text-[#999]">GPS</span>
                        <span class="text-[9px] tracking-wider uppercase bg-white/5 px-2.5 py-1 rounded-full text-[#999]">LED</span>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="card-service p-7 md:p-8 flex flex-col gap-4 reveal" style="transition-delay:200ms">
                    <div class="flex items-center justify-between">
                        <div class="w-12 h-12 rounded-lg bg-[#FF2D2D]/10 flex items-center justify-center">
                            <i class="fa-solid fa-compass-drafting text-[#FF2D2D] text-lg"></i>
                        </div>
                        <span class="text-[#333] text-xs heading-impact tracking-widest">06</span>
                    </div>
                    <h3 class="heading-impact text-lg font-bold">Conception Sur-Mesure</h3>
                    <p class="text-[#BFBFBF] text-sm leading-relaxed flex-1">Du croquis au lancement : design naval, plans de coupe, simulation hydrodynamique. Votre bateau de rêve, construit selon vos exigences exactes.</p>
                    <div class="flex flex-wrap gap-2 pt-1">
                        <span class="text-[9px] tracking-wider uppercase bg-white/5 px-2.5 py-1 rounded-full text-[#999]">Design</span>
                        <span class="text-[9px] tracking-wider uppercase bg-white/5 px-2.5 py-1 rounded-full text-[#999]">Plans</span>
                        <span class="text-[9px] tracking-wider uppercase bg-white/5 px-2.5 py-1 rounded-full text-[#999]">Simulation</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROCESS / COMMENT CA MARCHE -->
    <section class="py-20 md:py-28 bg-[#080808]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12">
            <div class="text-center mb-16 reveal">
                <span class="heading-impact text-[#FF2D2D] font-bold tracking-[0.2em] text-[10px] sm:text-xs flex items-center justify-center gap-2 mb-4">
                    <i class="fa-solid fa-list-ol text-xs"></i> Notre méthode
                </span>
                <h2 class="heading-impact font-bold mb-3">COMMENT <span class="text-[#FF2D2D]">CA MARCHE</span></h2>
                <p class="text-[#BFBFBF] text-sm max-w-lg mx-auto">Un processus éprouvé en 4 étapes, de votre premier appel à la mise à l'eau.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="relative reveal">
                    <div class="card-service p-6 md:p-7 h-full">
                        <div class="w-10 h-10 rounded-full bg-[#FF2D2D] flex items-center justify-center heading-impact text-sm font-bold mb-5">01</div>
                        <h3 class="heading-impact text-base font-bold mb-2">Consultation</h3>
                        <p class="text-[#BFBFBF] text-sm leading-relaxed">Appel ou rendez-vous sur site. On écoute vos besoins, on analyse votre bateau, on pose le diagnostic initial.</p>
                    </div>
                    <div class="hidden lg:flex absolute top-1/2 -right-3 transform -translate-y-1/2 z-10 text-[#333]">
                        <i class="fa-solid fa-chevron-right text-sm"></i>
                    </div>
                </div>

                <div class="relative reveal" style="transition-delay:100ms">
                    <div class="card-service p-6 md:p-7 h-full">
                        <div class="w-10 h-10 rounded-full bg-[#FF2D2D] flex items-center justify-center heading-impact text-sm font-bold mb-5">02</div>
                        <h3 class="heading-impact text-base font-bold mb-2">Devis Détaillé</h3>
                        <p class="text-[#BFBFBF] text-sm leading-relaxed">Proposition chiffrée transparente avec détail des matériaux, main-d'oeuvre, délais. Aucune surprise, aucun coût caché.</p>
                    </div>
                    <div class="hidden lg:flex absolute top-1/2 -right-3 transform -translate-y-1/2 z-10 text-[#333]">
                        <i class="fa-solid fa-chevron-right text-sm"></i>
                    </div>
                </div>

                <div class="relative reveal" style="transition-delay:200ms">
                    <div class="card-service p-6 md:p-7 h-full">
                        <div class="w-10 h-10 rounded-full bg-[#FF2D2D] flex items-center justify-center heading-impact text-sm font-bold mb-5">03</div>
                        <h3 class="heading-impact text-base font-bold mb-2">Réalisation</h3>
                        <p class="text-[#BFBFBF] text-sm leading-relaxed">Travaux en atelier avec suivi photo régulier. Vous restez informé à chaque étape clé du chantier.</p>
                    </div>
                    <div class="hidden lg:flex absolute top-1/2 -right-3 transform -translate-y-1/2 z-10 text-[#333]">
                        <i class="fa-solid fa-chevron-right text-sm"></i>
                    </div>
                </div>

                <div class="reveal" style="transition-delay:300ms">
                    <div class="card-service p-6 md:p-7 h-full border-[#FF2D2D]/20">
                        <div class="w-10 h-10 rounded-full bg-[#FF2D2D] flex items-center justify-center heading-impact text-sm font-bold mb-5">04</div>
                        <h3 class="heading-impact text-base font-bold mb-2">Mise à l'Eau</h3>
                        <p class="text-[#BFBFBF] text-sm leading-relaxed">Essais en mer, réglages finaux, remise des clés. On ne lâche rien tant que vous n'êtes pas satisfait.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJETS / GALLERY -->
    <section id="projets" class="py-20 md:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between mb-14 gap-4 reveal">
                <div>
                    <span class="heading-impact text-[#FF2D2D] font-bold tracking-[0.2em] text-[10px] sm:text-xs flex items-center gap-2 mb-4">
                        <i class="fa-solid fa-camera text-xs"></i> Réalisations
                    </span>
                    <h2 class="heading-impact font-bold">NOS <span class="text-[#FF2D2D]">PROJETS</span></h2>
                </div>
                <p class="text-[#BFBFBF] text-sm max-w-md">Chaque projet est unique. Voici quelques-unes de nos transformations les plus marquantes.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-6">
                <div class="project-card aspect-[4/3] reveal">
                    <img src="{{ asset('images/renovation1.jpg') }}" alt="Refit complet open 6m" class="w-full h-full object-cover">
                    <div class="overlay"></div>
                    <div class="project-info">
                        <span class="text-[9px] tracking-widest uppercase text-[#FF2D2D] font-bold">Refit Complet</span>
                        <h3 class="heading-impact text-base font-bold mt-1">Open 6m — Transformation Totale</h3>
                        <p class="text-[#999] text-xs mt-1">Carène neuve, moteur 150hp, peinture custom blanche/or. Gain de 12 noeuds.</p>
                    </div>
                </div>

                <div class="project-card aspect-[4/3] reveal" style="transition-delay:100ms">
                    <img src="{{ asset('images/renovation2.jpg') }}" alt="Speedster restauration" class="w-full h-full object-cover">
                    <div class="overlay"></div>
                    <div class="project-info">
                        <span class="text-[9px] tracking-widest uppercase text-[#FF2D2D] font-bold">Restauration</span>
                        <h3 class="heading-impact text-base font-bold mt-1">Speedster — Rénovation Intégrale</h3>
                        <p class="text-[#999] text-xs mt-1">Reconstruction structurelle, moteur V8, intérieur cuir. 6 mois de chantier.</p>
                    </div>
                </div>

                <div class="project-card aspect-[4/3] reveal" style="transition-delay:200ms">
                    <img src="{{ asset('images/b3.jpg') }}" alt="Semi-rigide tuning" class="w-full h-full object-cover">
                    <div class="overlay"></div>
                    <div class="project-info">
                        <span class="text-[9px] tracking-widest uppercase text-[#FF2D2D] font-bold">Motorisation</span>
                        <h3 class="heading-impact text-base font-bold mt-1">Semi-Rigide 5.5m — Twin 115hp</h3>
                        <p class="text-[#999] text-xs mt-1">Double motorisation, console centrale, électronique complète. 47 noeuds atteints.</p>
                    </div>
                </div>

                <div class="project-card aspect-[4/3] reveal">
                    <img src="{{ asset('images/b4.jpg') }}" alt="Vedette custom" class="w-full h-full object-cover">
                    <div class="overlay"></div>
                    <div class="project-info">
                        <span class="text-[9px] tracking-widest uppercase text-[#FF2D2D] font-bold">Sur-Mesure</span>
                        <h3 class="heading-impact text-base font-bold mt-1">Vedette 9m — Construction Neuve</h3>
                        <p class="text-[#999] text-xs mt-1">Conception from scratch, coque carbone/verre, intérieur salon. Livrée clé en main.</p>
                    </div>
                </div>

                <div class="project-card aspect-[4/3] reveal" style="transition-delay:100ms">
                    <img src="{{ asset('images/b5.jpg') }}" alt="Peinture naval custom" class="w-full h-full object-cover">
                    <div class="overlay"></div>
                    <div class="project-info">
                        <span class="text-[9px] tracking-widest uppercase text-[#FF2D2D] font-bold">Peinture</span>
                        <h3 class="heading-impact text-base font-bold mt-1">Yacht 12m — Livery Complet</h3>
                        <p class="text-[#999] text-xs mt-1">Décapage intégral, primaire époxy, finition 2 tons noir/mat. Showroom quality.</p>
                    </div>
                </div>

                <div class="project-card aspect-[4/3] reveal" style="transition-delay:200ms">
                    <img src="{{ asset('images/b6.jpg') }}" alt="Electronique bateau" class="w-full h-full object-cover">
                    <div class="overlay"></div>
                    <div class="project-info">
                        <span class="text-[9px] tracking-widest uppercase text-[#FF2D2D] font-bold">Électronique</span>
                        <h3 class="heading-impact text-base font-bold mt-1">Pêche Pro — Pack Navigation</h3>
                        <p class="text-[#999] text-xs mt-1">Double écran 12", sonar CHIRP, radar, pilote auto. Câblage marin certifié.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- VIDEO / RENOVATION SECTION (AJOUT) -->
    <section class="py-20 bg-[#080808]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12">
            <div class="text-center mb-12 reveal">
                <h2 class="heading-impact font-bold text-3xl md:text-5xl">NOS <span class="text-[#FF2D2D]">RÉNOVATIONS</span> EN IMAGES</h2>
                <p class="text-[#BFBFBF] mt-4">Découvrez nos bateaux de plaisance transformés et nos dernières vidéos de chantier.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <!-- Photo Rénovation Spécifique -->
                <div class="rounded-xl overflow-hidden shadow-2xl reveal-left group">
                    <img src="{{ asset('images/renovation3.jpg') }}" alt="Rénovation bateau de plaisance" class="w-full h-[400px] object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-6">
                        <div>
                            <span class="bg-[#FF2D2D] text-white text-[10px] font-bold px-2 py-1 rounded uppercase tracking-widest">Avant / Après</span>
                            <h3 class="text-white font-bold text-xl mt-2">Restauration complète Coque</h3>
                        </div>
                    </div>
                </div>

                <!-- Vidéo Embed -->
                <div class="rounded-xl overflow-hidden shadow-2xl reveal-right aspect-video">
                   <!-- Remplacez l'ID vidéo Youtube par la vôtre -->
                   <iframe class="w-full h-full" src="{{ asset('videos/renovation.mp4') }}" title="video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

        <!-- EVENEMENTS & RESERVATIONS -->
    {{-- <section id="reservations-events" class="py-20 md:py-28 relative overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('images/ban.png') }}" alt="Évènements en bateau"
                 class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-black/85"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 md:px-12">

            <div class="text-center max-w-4xl mx-auto reveal">
                <span class="heading-impact text-[#FF2D2D] font-bold tracking-[0.2em] text-[10px] sm:text-xs flex items-center justify-center gap-2 mb-5">
                    <i class="fa-solid fa-champagne-glasses text-xs"></i>
                    Évènements & Réservations
                </span>

                <h2 class="heading-impact font-bold mb-6">
                    ENVIE D'UNE <span class="text-[#FF2D2D]">ÉVASION</span><br>
                    OU D'UN MOMENT UNIQUE ?
                </h2>

                <p class="text-[#BFBFBF] text-sm md:text-base leading-relaxed max-w-2xl mx-auto">
                    Privatisez un bateau pour vos évènements privés, sorties en mer ou moments inoubliables en Martinique.
                    Ambiance coucher de soleil, musique, détente, sensations et souvenirs garantis.
                </p>
            </div>

            <!-- LISTE EVENTS -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 mt-14">

                <div class="card-service p-6 reveal">
                    <div class="w-12 h-12 rounded-lg bg-[#FF2D2D]/10 flex items-center justify-center mb-5">
                        <i class="fa-solid fa-heart text-[#FF2D2D] text-lg"></i>
                    </div>
                    <h3 class="heading-impact text-base font-bold mb-2">EVJF / EVG</h3>
                    <p class="text-[#BFBFBF] text-sm">
                        Une journée ou soirée mémorable entre amis avant le grand jour.
                    </p>
                </div>

                <div class="card-service p-6 reveal" style="transition-delay:100ms">
                    <div class="w-12 h-12 rounded-lg bg-[#FF2D2D]/10 flex items-center justify-center mb-5">
                        <i class="fa-solid fa-baby text-[#FF2D2D] text-lg"></i>
                    </div>
                    <h3 class="heading-impact text-base font-bold mb-2">Baby Shower</h3>
                    <p class="text-[#BFBFBF] text-sm">
                        Organisez un moment magique et élégant en pleine mer.
                    </p>
                </div>

                <div class="card-service p-6 reveal" style="transition-delay:200ms">
                    <div class="w-12 h-12 rounded-lg bg-[#FF2D2D]/10 flex items-center justify-center mb-5">
                        <i class="fa-solid fa-cake-candles text-[#FF2D2D] text-lg"></i>
                    </div>
                    <h3 class="heading-impact text-base font-bold mb-2">Anniversaires</h3>
                    <p class="text-[#BFBFBF] text-sm">
                        Fêtez votre anniversaire autrement avec une expérience premium.
                    </p>
                </div>

                <div class="card-service p-6 reveal" style="transition-delay:300ms">
                    <div class="w-12 h-12 rounded-lg bg-[#FF2D2D]/10 flex items-center justify-center mb-5">
                        <i class="fa-solid fa-ring text-[#FF2D2D] text-lg"></i>
                    </div>
                    <h3 class="heading-impact text-base font-bold mb-2">Demandes en mariage</h3>
                    <p class="text-[#BFBFBF] text-sm">
                        Un coucher de soleil, la mer… et un moment inoubliable.
                    </p>
                </div>

                <div class="card-service p-6 reveal">
                    <div class="w-12 h-12 rounded-lg bg-[#FF2D2D]/10 flex items-center justify-center mb-5">
                        <i class="fa-solid fa-music text-[#FF2D2D] text-lg"></i>
                    </div>
                    <h3 class="heading-impact text-base font-bold mb-2">Boat Party</h3>
                    <p class="text-[#BFBFBF] text-sm">
                        DJ, musique, cocktails et ambiance festive sur l'eau.
                    </p>
                </div>

                <div class="card-service p-6 reveal" style="transition-delay:100ms">
                    <div class="w-12 h-12 rounded-lg bg-[#FF2D2D]/10 flex items-center justify-center mb-5">
                        <i class="fa-solid fa-camera-retro text-[#FF2D2D] text-lg"></i>
                    </div>
                    <h3 class="heading-impact text-base font-bold mb-2">Shooting Photo</h3>
                    <p class="text-[#BFBFBF] text-sm">
                        Créez des contenus uniques pour vos réseaux ou projets.
                    </p>
                </div>

                <div class="card-service p-6 reveal" style="transition-delay:200ms">
                    <div class="w-12 h-12 rounded-lg bg-[#FF2D2D]/10 flex items-center justify-center mb-5">
                        <i class="fa-solid fa-briefcase text-[#FF2D2D] text-lg"></i>
                    </div>
                    <h3 class="heading-impact text-base font-bold mb-2">Évènements Pro</h3>
                    <p class="text-[#BFBFBF] text-sm">
                        Team building, afterwork ou réception d'entreprise en mer.
                    </p>
                </div>

                <div class="card-service p-6 reveal" style="transition-delay:300ms">
                    <div class="w-12 h-12 rounded-lg bg-[#FF2D2D]/10 flex items-center justify-center mb-5">
                        <i class="fa-solid fa-sun text-[#FF2D2D] text-lg"></i>
                    </div>
                    <h3 class="heading-impact text-base font-bold mb-2">Sunset & Détente</h3>
                    <p class="text-[#BFBFBF] text-sm">
                        Profitez simplement d'une sortie privée au coucher du soleil.
                    </p>
                </div>

            </div>

            <!-- CTA -->
            <div class="text-center mt-14 reveal">

                <div class="flex items-center justify-center gap-3 text-[#FF2D2D] mb-5">
                    <span class="heading-impact tracking-[0.2em] text-xs">
                        RÉSERVATION ICI
                    </span>

                    <i class="fa-solid fa-arrow-right-long animate-pulse"></i>
                </div>

                <a href="https://reservation.sfb.njiezm.fr/"
                   class="btn-premium inline-flex items-center gap-3 px-8 py-4 rounded-sm text-white font-bold text-sm shadow-2xl">

                    Réserver maintenant
                    <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>

                </a>

            </div>

        </div>
    </section> --}}

    <!-- FAQ -->
    <section id="faq" class="py-20 md:py-28">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 md:px-12">
            <div class="text-center mb-14 reveal">
                <span class="heading-impact text-[#FF2D2D] font-bold tracking-[0.2em] text-[10px] sm:text-xs flex items-center justify-center gap-2 mb-4">
                    <i class="fa-solid fa-circle-question text-xs"></i> Questions fréquentes
                </span>
                <h2 class="heading-impact font-bold mb-3">VOUS AVEZ DES <span class="text-[#FF2D2D]">QUESTIONS</span></h2>
            </div>

            <div class="space-y-0 reveal">
                <div class="faq-item py-5 cursor-pointer" onclick="toggleFaq(this)">
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="heading-impact text-sm md:text-base font-bold pr-4">Combien coûte un refit complet ?</h3>
                        <i class="fa-solid fa-chevron-down text-[#FF2D2D] text-xs faq-chevron flex-shrink-0"></i>
                    </div>
                    <div class="faq-answer text-[#BFBFBF] text-sm leading-relaxed">
                        Le coût dépend du type de bateau, de l'état de la coque et des travaux demandés. Un refit basique (carène + antifouling + moteur) démarre autour de 3 000 EUR. Une transformation complète avec peinture custom et électronique peut aller de 8 000 à 25 000 EUR. Chaque devis est détaillé et personnalisé.
                    </div>
                </div>

                <div class="faq-item py-5 cursor-pointer" onclick="toggleFaq(this)">
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="heading-impact text-sm md:text-base font-bold pr-4">Quel est le délai moyen d'un chantier ?</h3>
                        <i class="fa-solid fa-chevron-down text-[#FF2D2D] text-xs faq-chevron flex-shrink-0"></i>
                    </div>
                    <div class="faq-answer text-[#BFBFBF] text-sm leading-relaxed">
                        Un simple antifouling et mise au point moteur : 3 à 5 jours ouvrés. Un refit moyen : 2 à 4 semaines. Une construction sur-mesure : 3 à 8 mois selon la complexité. Nous nous engageons sur des dates de livraison fermes.
                    </div>
                </div>

                <div class="faq-item py-5 cursor-pointer" onclick="toggleFaq(this)">
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="heading-impact text-sm md:text-base font-bold pr-4">Travaillez-vous sur tous types de bateaux ?</h3>
                        <i class="fa-solid fa-chevron-down text-[#FF2D2D] text-xs faq-chevron flex-shrink-0"></i>
                    </div>
                    <div class="faq-answer text-[#BFBFBF] text-sm leading-relaxed">
                        Oui. Nous intervenons sur les open, semi-rigides, vedettes, speedsters, yachts de plaisance et bateaux de pêche professionnelle. Coque composite, bois, aluminium — nos techniciens maîtrisent tous les matériaux.
                    </div>
                </div>

                <div class="faq-item py-5 cursor-pointer" onclick="toggleFaq(this)">
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="heading-impact text-sm md:text-base font-bold pr-4">Proposez-vous un service de remorquage ?</h3>
                        <i class="fa-solid fa-chevron-down text-[#FF2D2D] text-xs faq-chevron flex-shrink-0"></i>
                    </div>
                    <div class="faq-answer text-[#BFBFBF] text-sm leading-relaxed">
                        Oui, nous organisons le transport de votre bateau entre votre port d'attache et notre atelier au Lamentin. Nous travaillons avec des transporteurs professionnels équipés de remorques adaptées jusqu'à 12 mètres.
                    </div>
                </div>

                <div class="faq-item py-5 cursor-pointer" onclick="toggleFaq(this)">
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="heading-impact text-sm md:text-base font-bold pr-4">Quelles garanties proposez-vous ?</h3>
                        <i class="fa-solid fa-chevron-down text-[#FF2D2D] text-xs faq-chevron flex-shrink-0"></i>
                    </div>
                    <div class="faq-answer text-[#BFBFBF] text-sm leading-relaxed">
                        Toutes nos interventions sont garanties : 12 mois sur les travaux de stratification et mécanique, 24 mois sur la peinture (sous réserve d'entretien normal), et la garantie constructeur sur les pièces neuves. Service après-vente inclus.
                    </div>
                </div>

                <div class="faq-item py-5 cursor-pointer" onclick="toggleFaq(this)">
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="heading-impact text-sm md:text-base font-bold pr-4">Intervenez-vous hors de Martinique ?</h3>
                        <i class="fa-solid fa-chevron-down text-[#FF2D2D] text-xs faq-chevron flex-shrink-0"></i>
                    </div>
                    <div class="faq-answer text-[#BFBFBF] text-sm leading-relaxed">
                        Notre atelier principal est au Lamentin, mais nous déplaçons des équipes en Guadeloupe, Saint-Martin, Sainte-Lucie et Dominique pour les chantiers de taille importante. Contactez-nous pour évaluer la faisabilité.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA BANNER -->
    <section class="py-16 md:py-20 relative overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://picsum.photos/seed/cta-boat-ocean/1920/600.jpg" alt="Ocean" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#FF2D2D]/85"></div>
        </div>
        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 text-center reveal">
            <h2 class="heading-impact font-bold text-white mb-4">PRET A PASSER A LA <span class="text-white/70">VITESSE SUPERIEURE</span> ?</h2>
            <p class="text-white/80 text-sm md:text-base max-w-lg mx-auto mb-8">Contactez-nous dès maintenant pour un diagnostic gratuit de votre embarcation. Notre équipe vous rappelle sous 24 heures.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#devis" class="bg-white text-[#FF2D2D] heading-impact px-8 py-4 rounded-sm font-bold text-sm tracking-wider hover:bg-gray-100 transition-colors inline-flex items-center justify-center gap-3">
                    Demander mon devis <i class="fa-solid fa-arrow-right text-xs"></i>
                </a>
                <a href="tel:+596696000000" class="border-2 border-white text-white heading-impact px-8 py-4 rounded-sm font-bold text-sm tracking-wider hover:bg-white/10 transition-colors inline-flex items-center justify-center gap-3">
                    <i class="fa-solid fa-phone text-xs"></i> 0696 00 00 00
                </a>
            </div>
        </div>
    </section>

    <!-- FORMULAIRE DE DEVIS -->
    <section id="devis" class="py-20 md:py-28 bg-[#080808]">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">
            <div class="grid md:grid-cols-5 gap-8 md:gap-12">
                <!-- Infos côté -->
                <div class="md:col-span-2 reveal-left space-y-6">
                    <span class="heading-impact text-[#FF2D2D] font-bold tracking-[0.2em] text-[10px] sm:text-xs flex items-center gap-2">
                        <i class="fa-solid fa-paper-plane text-xs"></i> Contact
                    </span>
                    <h2 class="heading-impact font-bold">VOTRE <span class="text-[#FF2D2D]">PROJET</span> COMMENCE ICI</h2>
                    <p class="text-[#BFBFBF] text-sm leading-relaxed">Remplissez le formulaire et un technicien vous rappelle sous 24h pour affiner votre demande.</p>

                    <div class="space-y-5 pt-4">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-[#FF2D2D]/10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-location-dot text-[#FF2D2D] text-sm"></i>
                            </div>
                            <div>
                                <div class="text-sm font-semibold">Adresse</div>
                                <div class="text-[#999] text-sm">Zone Industrielle, Le Lamentin 97232 Martinique</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-[#FF2D2D]/10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-phone text-[#FF2D2D] text-sm"></i>
                            </div>
                            <div>
                                <div class="text-sm font-semibold">Téléphone</div>
                                <div class="text-[#999] text-sm">0696 00 00 00</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-[#FF2D2D]/10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-envelope text-[#FF2D2D] text-sm"></i>
                            </div>
                            <div>
                                <div class="text-sm font-semibold">Email</div>
                                <div class="text-[#999] text-sm">contact@seafastboat.fr</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-[#FF2D2D]/10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-clock text-[#FF2D2D] text-sm"></i>
                            </div>
                            <div>
                                <div class="text-sm font-semibold">Horaires</div>
                                <div class="text-[#999] text-sm">Lun — Ven : 7h30 — 17h00<br>Sam : 8h00 — 12h00</div>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-3 pt-4">
                        <a href="#" class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center text-[#999] hover:text-[#FF2D2D] hover:bg-[#FF2D2D]/10 transition-all" aria-label="Facebook">
                            <i class="fa-brands fa-facebook-f text-sm"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center text-[#999] hover:text-[#FF2D2D] hover:bg-[#FF2D2D]/10 transition-all" aria-label="Instagram">
                            <i class="fa-brands fa-instagram text-sm"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center text-[#999] hover:text-[#FF2D2D] hover:bg-[#FF2D2D]/10 transition-all" aria-label="YouTube">
                            <i class="fa-brands fa-youtube text-sm"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center text-[#999] hover:text-[#FF2D2D] hover:bg-[#FF2D2D]/10 transition-all" aria-label="WhatsApp">
                            <i class="fa-brands fa-whatsapp text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Formulaire Laravel -->
                <div class="md:col-span-3 reveal-right">
                    <div class="card-service p-6 md:p-8">
                        <div class="mb-6">
                            <span class="handwritten text-xl block mb-1"><i class="fa-solid fa-pen-nib text-sm mr-1"></i> C'est le moment !</span>
                        </div>

                            <div id="formFeedback" class="hidden mb-6"></div>

                        <form action="{{ route('contact.store') }}" id="contactForm" method="POST" class="space-y-4">
                            @csrf

                            <div class="grid sm:grid-cols-2 gap-4">
                                <div class="space-y-1.5">
                                    <label class="text-[9px] font-bold uppercase tracking-widest text-[#FF2D2D] flex items-center gap-1">
                                        <i class="fa-solid fa-user text-[8px]"></i> Nom Complet
                                    </label>
                                    <input type="text" name="name" value="{{ old('name') }}" required class="form-input w-full p-3 text-sm text-white placeholder-[#555]" placeholder="Nom Prénom">
                                </div>
                                <div class="space-y-1.5">
                                    <label class="text-[9px] font-bold uppercase tracking-widest text-[#FF2D2D] flex items-center gap-1">
                                        <i class="fa-solid fa-phone text-[8px]"></i> Téléphone
                                    </label>
                                    <input type="tel" name="phone" value="{{ old('phone') }}" required class="form-input w-full p-3 text-sm text-white placeholder-[#555]" placeholder="0696 XX XX XX">
                                </div>
                            </div>
                            <div class="space-y-1.5">
                                <label class="text-[9px] font-bold uppercase tracking-widest text-[#FF2D2D] flex items-center gap-1">
                                    <i class="fa-solid fa-envelope text-[8px]"></i> Email
                                </label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-input w-full p-3 text-sm text-white placeholder-[#555]" placeholder="votre@email.com">
                            </div>
                            <div class="grid sm:grid-cols-2 gap-4">
                                <div class="space-y-1.5">
                                    <label class="text-[9px] font-bold uppercase tracking-widest text-[#FF2D2D] flex items-center gap-1">
                                        <i class="fa-solid fa-ship text-[8px]"></i> Type de bateau
                                    </label>
                                    <select name="boat_type" class="form-input w-full p-3 text-sm text-[#999] bg-transparent appearance-none cursor-pointer" style="background-image: url('data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%2212%22 height=%2212%22 viewBox=%220 0 24 24%22 fill=%22none%22 stroke=%22%23999%22 stroke-width=%222%22%3E%3Cpolyline points=%226 9 12 15 18 9%22/%3E%3C/svg%3E'); background-repeat: no-repeat; background-position: right 12px center;">
                                        <option value="">Sélectionnez...</option>
                                        <option value="open">Open</option>
                                        <option value="semirigide">Semi-Rigide</option>
                                        <option value="vedette">Vedette</option>
                                        <option value="speedster">Speedster</option>
                                        <option value="yacht">Yacht</option>
                                        <option value="peche">Bateau de pêche</option>
                                        <option value="autre">Autre</option>
                                    </select>
                                </div>
                                <div class="space-y-1.5">
                                    <label class="text-[9px] font-bold uppercase tracking-widest text-[#FF2D2D] flex items-center gap-1">
                                        <i class="fa-solid fa-ruler text-[8px]"></i> Longueur
                                    </label>
                                    <select name="boat_length" class="form-input w-full p-3 text-sm text-[#999] bg-transparent appearance-none cursor-pointer" style="background-image: url('data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%2212%22 height=%2212%22 viewBox=%220 0 24 24%22 fill=%22none%22 stroke=%22%23999%22 stroke-width=%222%22%3E%3Cpolyline points=%226 9 12 15 18 9%22/%3E%3C/svg%3E'); background-repeat: no-repeat; background-position: right 12px center;">
                                        <option value="">Sélectionnez...</option>
                                        <option value="moins5">Moins de 5m</option>
                                        <option value="5-7">5m — 7m</option>
                                        <option value="7-10">7m — 10m</option>
                                        <option value="10plus">Plus de 10m</option>
                                    </select>
                                </div>
                            </div>
                            <div class="space-y-1.5">
                                <label class="text-[9px] font-bold uppercase tracking-widest text-[#FF2D2D] flex items-center gap-1">
                                    <i class="fa-solid fa-list-check text-[8px]"></i> Type de travaux
                                </label>
                                <div class="grid grid-cols-2 sm:grid-cols-3 gap-2 pt-1">
                                    <label class="flex items-center gap-2 text-sm text-[#999] cursor-pointer hover:text-white transition-colors">
                                        <input type="checkbox" name="services[]" value="Motorisation" class="accent-[#FF2D2D] w-3.5 h-3.5"> Motorisation
                                    </label>
                                    <label class="flex items-center gap-2 text-sm text-[#999] cursor-pointer hover:text-white transition-colors">
                                        <input type="checkbox" name="services[]" value="Carène" class="accent-[#FF2D2D] w-3.5 h-3.5"> Carène
                                    </label>
                                    <label class="flex items-center gap-2 text-sm text-[#999] cursor-pointer hover:text-white transition-colors">
                                        <input type="checkbox" name="services[]" value="Peinture" class="accent-[#FF2D2D] w-3.5 h-3.5"> Peinture
                                    </label>
                                    <label class="flex items-center gap-2 text-sm text-[#999] cursor-pointer hover:text-white transition-colors">
                                        <input type="checkbox" name="services[]" value="Stratification" class="accent-[#FF2D2D] w-3.5 h-3.5"> Stratification
                                    </label>
                                    <label class="flex items-center gap-2 text-sm text-[#999] cursor-pointer hover:text-white transition-colors">
                                        <input type="checkbox" name="services[]" value="Electronique" class="accent-[#FF2D2D] w-3.5 h-3.5"> Electronique
                                    </label>
                                    <label class="flex items-center gap-2 text-sm text-[#999] cursor-pointer hover:text-white transition-colors">
                                        <input type="checkbox" name="services[]" value="Sur-mesure" class="accent-[#FF2D2D] w-3.5 h-3.5"> Sur-mesure
                                    </label>
                                </div>
                            </div>
                            <div class="space-y-1.5">
                                <label class="text-[9px] font-bold uppercase tracking-widest text-[#FF2D2D] flex items-center gap-1">
                                    <i class="fa-solid fa-message text-[8px]"></i> Description du projet
                                </label>
                                <textarea name="message" class="form-input w-full p-3 text-sm text-white placeholder-[#555] h-28 resize-none" placeholder="Décrivez votre bateau, son état actuel, et ce que vous souhaitez accomplir...">{{ old('message') }}</textarea>
                            </div>

                            <!-- IMPORTANT: id="submitBtn" présent pour le JS -->
                            <button type="submit" id="submitBtn" class="btn-premium w-full py-4 rounded-sm font-bold shadow-lg text-sm flex items-center justify-center gap-3">
                                <span>Envoyer ma demande</span>
                                <i class="fa-solid fa-paper-plane text-xs"></i>
                            </button>
                            <p class="text-[#555] text-[10px] text-center">En soumettant ce formulaire, vous acceptez d'être recontacté par notre équipe.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    @include('partials.footer')

    <!-- JS EXTERNE -->
    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
