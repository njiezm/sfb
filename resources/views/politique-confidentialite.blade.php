<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politique de Confidentialité | Sea Fast Boat & WICD</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Inter:wght@300;400;600;700&family=Caveat:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-[#0B0B0B] text-white">

    @include('partials.navbar')

    <main class="pt-32 pb-20 min-h-screen">
        <div class="max-w-4xl mx-auto px-4 sm:px-6">

            <!-- Header Section -->
            <div class="mb-12 text-center reveal active">
                <span class="heading-impact text-[#FF2D2D] font-bold tracking-[0.2em] text-[10px] sm:text-xs flex items-center justify-center gap-2 mb-4">
                    <i class="fa-solid fa-shield-halved text-xs"></i> Vos données
                </span>
                <h1 class="heading-impact font-bold text-3xl md:text-5xl mb-4">POLITIQUE DE <span class="text-[#FF2D2D]">CONFIDENTIALITÉ</span></h1>
                <div class="separator max-w-xs mx-auto mb-6"></div>
                <p class="text-[#BFBFBF] text-sm">
                    Chez Sea Fast Boat & WICD, nous nous engageons à protéger votre vie privée. Cette politique explique comment nous collectons, utilisons et protégeons vos données personnelles.
                </p>
                <div class="mt-4 text-right">
                    <span class="handwritten text-lg">Entrée en vigueur : Avril 2026</span>
                </div>
            </div>

            <!-- Contenu Politique -->
            <div class="space-y-12 reveal">

                <!-- 1. Collecte -->
                <section>
                    <h2 class="heading-impact text-xl font-bold text-white mb-4 flex items-center gap-2">
                        <span class="text-[#FF2D2D]">1.</span> COLLECTE DES DONNÉES
                    </h2>
                    <p class="text-[#BFBFBF] leading-relaxed mb-4">
                        Nous collectons uniquement les données que vous nous fournissez volontairement via nos formulaires de contact et de demande de devis. Cela inclut généralement :
                    </p>
                    <ul class="list-disc list-inside text-[#BFBFBF] space-y-2 ml-4">
                        <li>Nom et Prénom</li>
                        <li>Adresse électronique (Email)</li>
                        <li>Numéro de téléphone</li>
                        <li>Informations relatives à votre projet (type de bateau, description des travaux)</li>
                    </ul>
                </section>

                <div class="separator"></div>

                <!-- 2. Utilisation -->
                <section>
                    <h2 class="heading-impact text-xl font-bold text-white mb-4 flex items-center gap-2">
                        <span class="text-[#FF2D2D]">2.</span> UTILISATION DES DONNÉES
                    </h2>
                    <p class="text-[#BFBFBF] leading-relaxed">
                        Vos données sont utilisées exclusivement dans le but de répondre à votre demande commerciale (établissement de devis, prise de rendez-vous, suivi technique). Nous ne vendons ni ne louons vos données à des tiers.
                    </p>
                </section>

                <div class="separator"></div>

                <!-- 3. Conservation -->
                <section>
                    <h2 class="heading-impact text-xl font-bold text-white mb-4 flex items-center gap-2">
                        <span class="text-[#FF2D2D]">3.</span> CONSERVATION DES DONNÉES
                    </h2>
                    <p class="text-[#BFBFBF] leading-relaxed">
                        Les données collectées sont conservées pendant une durée de <strong class="text-white">3 ans</strong> à compter de notre dernier contact, conformément aux obligations légales en vigueur (Code de commerce et RGPD). Passé ce délai, elles sont définitivement supprimées ou archivées de manière anonyme.
                    </p>
                </section>

                <div class="separator"></div>

                <!-- 4. Vos Droits (RGPD) -->
                <section>
                    <h2 class="heading-impact text-xl font-bold text-white mb-4 flex items-center gap-2">
                        <span class="text-[#FF2D2D]">4.</span> VOS DROITS (RGPD)
                    </h2>
                    <p class="text-[#BFBFBF] leading-relaxed mb-4">
                        Conformément au Règlement Général sur la Protection des Données (RGPD), vous disposez des droits suivants concernant vos données personnelles :
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-[#1A1A1A] p-4 rounded border border-white/5">
                            <h3 class="text-white font-bold mb-1"><i class="fa-solid fa-eye text-[#FF2D2D] text-xs mr-2"></i> Droit d'accès</h3>
                            <p class="text-sm text-[#BFBFBF]">Savoir si nous détenons des données sur vous.</p>
                        </div>
                        <div class="bg-[#1A1A1A] p-4 rounded border border-white/5">
                            <h3 class="text-white font-bold mb-1"><i class="fa-solid fa-pen text-[#FF2D2D] text-xs mr-2"></i> Droit de rectification</h3>
                            <p class="text-sm text-[#BFBFBF]">Mettre à jour vos informations incorrectes.</p>
                        </div>
                        <div class="bg-[#1A1A1A] p-4 rounded border border-white/5">
                            <h3 class="text-white font-bold mb-1"><i class="fa-solid fa-trash text-[#FF2D2D] text-xs mr-2"></i> Droit à l'effacement</h3>
                            <p class="text-sm text-[#BFBFBF]">Demander la suppression de vos données.</p>
                        </div>
                        <div class="bg-[#1A1A1A] p-4 rounded border border-white/5">
                            <h3 class="text-white font-bold mb-1"><i class="fa-solid fa-ban text-[#FF2D2D] text-xs mr-2"></i> Droit d'opposition</h3>
                            <p class="text-sm text-[#BFBFBF]">Vous opposer au traitement de vos données.</p>
                        </div>
                    </div>
                </section>

                <div class="separator"></div>

                <!-- 5. Sécurité -->
                <section>
                    <h2 class="heading-impact text-xl font-bold text-white mb-4 flex items-center gap-2">
                        <span class="text-[#FF2D2D]">5.</span> SÉCURITÉ DES DONNÉES
                    </h2>
                    <p class="text-[#BFBFBF] leading-relaxed">
                        Nous mettons en œuvre toutes les mesures techniques et organisationnelles appropriées pour garantir la sécurité de vos données et les protéger contre toute altération, destruction ou accès non autorisé. Vos données sont stockées en Martinique sur des serveurs sécurisés.
                    </p>
                </section>

                <div class="separator"></div>

                <!-- 6. Contact -->
                <section>
                    <h2 class="heading-impact text-xl font-bold text-white mb-4 flex items-center gap-2">
                        <span class="text-[#FF2D2D]">6.</span> NOUS CONTACTER
                    </h2>
                    <p class="text-[#BFBFBF] leading-relaxed">
                        Pour toute question relative à cette politique de confidentialité ou pour exercer vos droits, vous pouvez nous contacter par écrit à l'adresse suivante :
                    </p>
                    <div class="mt-4 bg-[#FF2D2D]/10 p-4 rounded border border-[#FF2D2D]/20">
                        <p class="text-white font-bold">Sea Fast Boat & WICD</p>
                        <p class="text-[#BFBFBF]">Zone Industrielle, 97232 Le Lamentin</p>
                        <p class="text-[#BFBFBF]">Email : contact@seafastboat.fr</p>
                    </div>
                </section>

            </div>
        </div>
    </main>

    @include('partials.footer')
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
