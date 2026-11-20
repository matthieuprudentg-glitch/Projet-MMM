<!-- Page d'accueil -->

<!-- ===== SECTION 01 : TOURNOI A LA UNE ===== -->
<section class="max-w-container mx-auto px-8 py-10 lg:py-14 relative overflow-hidden">
    <!-- Etiquette de section 01 / TOURNOI A LA UNE -->
    <div class="flex items-center gap-4 mb-8 relative z-10">
        <span class="font-mono text-xs uppercase tracking-widest text-primary font-bold whitespace-nowrap">01 / TOURNOI A LA UNE</span>
        <div class="flex-1 h-px bg-primary"></div>
        <span class="font-mono text-xs text-muted uppercase tracking-widest hidden md:inline">REF : TRN-001</span>
    </div>

    <!-- Photo de Ryu en arriere-plan avec centrage parfait et transparence -->
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none z-0 overflow-hidden">
        <img src="assets/img/StreetFighter5RyuWallpaper.png" alt="Street Fighter Ryu" class="h-[650px] sm:h-[750px] md:h-[850px] lg:h-[920px] w-auto max-w-none object-contain object-center opacity-70 md:opacity-75 select-none transform translate-x-[60px] sm:translate-x-[120px] md:translate-x-[180px] lg:translate-x-[240px]">
    </div>

    <div class="grid grid-cols-12 gap-8 items-center relative z-10">

        <!-- Colonne gauche : infos du tournoi en vedette -->
        <div class="col-span-12 lg:col-span-7 flex flex-col justify-between">
            <div>
                <!-- Bandeau officiel du titre (haute lisibilite sur artwork) -->
                <div class="bg-offwhite bg-opacity-95 p-5 border-l-4 border-primary shadow-hard-ink mb-6 max-w-xl">
                    <div class="flex flex-wrap gap-2 mb-3">
                        <?php $texte = 'CLASSE COMPETITIVE A'; $type = 'encre'; include('view/commun/badge.php'); ?>
                        <?php $texte = 'JEU DE COMBAT'; $type = 'contour'; include('view/commun/badge.php'); ?>
                        <?php $texte = 'TIR TACTIQUE'; $type = 'contour'; include('view/commun/badge.php'); ?>
                    </div>
                    <h1 class="font-condensed font-bold uppercase text-ink leading-none mb-2 text-title-1">
                        TOURNOI<br>STREET FIGHTER<br>
                        <span class="text-primary">EDITION HIVER</span>
                    </h1>
                    <p class="font-mono text-xs text-muted uppercase tracking-widest">
                        JEU DE COMBAT / COMPETITION AMATEUR
                    </p>
                </div>

                <!-- Tableau 2x2 des informations du tournoi a la une (donnees factices) -->
                <div class="grid grid-cols-2 border border-primary bg-offwhite bg-opacity-95">
                    <div class="p-4 border-r border-primary border-b border-primary">
                        <div class="font-mono text-xs text-muted uppercase tracking-widest mb-1">DATE</div>
                        <div class="font-condensed text-2xl font-bold text-ink uppercase leading-tight">14.12.2026</div>
                        <div class="font-mono text-xs text-muted mt-1 uppercase">14:00 CET</div>
                    </div>
                    <div class="p-4 border-b border-primary">
                        <div class="font-mono text-xs text-muted uppercase tracking-widest mb-1">FORMAT</div>
                        <div class="font-condensed text-2xl font-bold text-ink uppercase leading-tight">ELIMINATION</div>
                        <div class="font-mono text-xs text-muted mt-1 uppercase">32 JOUEURS</div>
                    </div>
                    <div class="p-4 border-r border-primary">
                        <div class="font-mono text-xs text-muted uppercase tracking-widest mb-1">INSCRIPTIONS</div>
                        <div class="font-condensed text-2xl font-bold text-ink uppercase leading-tight">JUSQU'AU 10.12</div>
                        <div class="font-mono text-xs text-muted mt-1 uppercase">CLOTURE LE 10 DEC.</div>
                    </div>
                    <div class="p-4">
                        <div class="font-mono text-xs text-muted uppercase tracking-widest mb-1">COUT</div>
                        <div class="font-condensed text-2xl font-bold text-ink uppercase leading-tight">120 CREDITS</div>
                        <div class="font-mono text-xs text-muted mt-1 uppercase">PAR JOUEUR</div>
                    </div>
                </div>
            </div>

            <!-- Boutons CTA -->
            <div class="flex flex-wrap gap-4 mt-6">
                <a href="index.php?page=tournois" class="font-condensed font-bold text-sm uppercase tracking-wide bg-accent text-ink px-6 py-3 shadow-hard-ink hover:bg-accent-light">
                    S'INSCRIRE AU TOURNOI →
                </a>
                <a href="index.php?page=tournois" class="font-condensed font-bold text-sm uppercase tracking-wide border-2 border-ink text-ink px-6 py-3 shadow-hard-ink hover:bg-ink hover:text-white bg-offwhite">
                    VOIR TOUS LES TOURNOIS
                </a>
            </div>
        </div>

        <!-- Colonne droite : arbre de tournoi stylise et recadre -->
        <div class="col-span-12 lg:col-span-5 flex items-center justify-center lg:justify-end">
            <div class="w-full max-w-[390px] border-2 border-primary p-4 sm:p-5 bg-pale bg-opacity-95 shadow-hard-blue backdrop-blur-sm">
                <!-- En-tete de la carte -->
                <div class="font-mono text-xs text-muted uppercase tracking-widest mb-3 pb-2 border-b border-primary flex justify-between items-center">
                    <span class="font-bold text-primary">ARBRE OFFICIEL</span>
                    <span class="text-ink">112 &bull; 41-47</span>
                </div>

                <!-- Diagramme schematique de l'arbre compact -->
                <div class="py-2">
                    <svg viewBox="0 0 320 130" class="w-full h-auto" xmlns="http://www.w3.org/2000/svg">
                        <!-- Participants Tour 1 (gauche) -->
                        <text x="5" y="16" class="fill-ink font-mono text-[10px] font-bold">1X.4</text>
                        <text x="5" y="44" class="fill-ink font-mono text-[10px] font-bold">1X.8</text>
                        <text x="5" y="86" class="fill-ink font-mono text-[10px] font-bold">1X.1</text>
                        <text x="5" y="114" class="fill-ink font-mono text-[10px] font-bold">1X.4</text>

                        <!-- Lignes Tour 1 vers Demi-finales (Haut) -->
                        <line x1="36" y1="13" x2="65" y2="13" class="stroke-primary" stroke-width="1.5" />
                        <line x1="36" y1="41" x2="65" y2="41" class="stroke-primary" stroke-width="1.5" />
                        <line x1="65" y1="13" x2="65" y2="41" class="stroke-primary" stroke-width="1.5" />
                        <line x1="65" y1="27" x2="105" y2="27" class="stroke-primary" stroke-width="1.5" />

                        <!-- Lignes Tour 1 vers Demi-finales (Bas) -->
                        <line x1="36" y1="83" x2="65" y2="83" class="stroke-primary" stroke-width="1.5" />
                        <line x1="36" y1="111" x2="65" y2="111" class="stroke-primary" stroke-width="1.5" />
                        <line x1="65" y1="83" x2="65" y2="111" class="stroke-primary" stroke-width="1.5" />
                        <line x1="65" y1="97" x2="105" y2="97" class="stroke-primary" stroke-width="1.5" />

                        <!-- Jonction Demi-finales vers Finale -->
                        <line x1="105" y1="27" x2="105" y2="97" class="stroke-primary" stroke-width="1.5" />
                        <line x1="105" y1="62" x2="195" y2="62" class="stroke-primary" stroke-width="1.5" />

                        <!-- Etiquette Demi au centre -->
                        <text x="135" y="56" class="fill-muted font-mono text-[9px]" text-anchor="middle">DEMI</text>

                        <!-- Ligne Finale vers vainqueur -->
                        <line x1="195" y1="62" x2="280" y2="62" class="stroke-primary" stroke-width="1.5" />
                        <text x="238" y="56" class="fill-primary font-mono text-[9px] font-bold" text-anchor="middle">FINALE</text>

                        <!-- Carre terminal vainqueur -->
                        <rect x="280" y="57" width="10" height="10" class="fill-ink" />
                    </svg>
                </div>

                <!-- Pied de la carte -->
                <div class="mt-2 pt-2 border-t border-primary font-mono text-[11px] text-muted uppercase tracking-widest flex justify-between items-center">
                    <span class="text-ink font-bold">CIRCUIT CAPCOM</span>
                    <span>14.12.2026 &bull; FINALE</span>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ===== SECTION 02 : COMMENT CA MARCHE ===== -->
<section class="bg-pale border-y border-primary py-12">
    <div class="max-w-container mx-auto px-8">
        <?php $num = '02'; $titre = 'COMMENT CA MARCHE'; $ref = 'REF : ETT-02'; include('view/commun/titre_section.php'); ?>
        <!-- Grille des 3 etapes de fonctionnement -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="border border-primary p-6 bg-offwhite shadow-hard-blue">
                <div class="font-condensed text-6xl font-bold text-primary mb-3 leading-none">01</div>
                <h3 class="font-condensed text-2xl font-bold text-ink uppercase mb-3 leading-tight">INSCRIS-TOI</h3>
                <p class="text-sm text-muted leading-relaxed">Cree ton compte gratuitement et recharge tes credits. Acces rapide en 2 minutes.</p>
            </div>
            <div class="border border-primary p-6 bg-offwhite shadow-hard-blue">
                <div class="font-condensed text-6xl font-bold text-primary mb-3 leading-none">02</div>
                <h3 class="font-condensed text-2xl font-bold text-ink uppercase mb-3 leading-tight">CHOISIS TON TOURNOI</h3>
                <p class="text-sm text-muted leading-relaxed">Filtre par jeu, date ou prix et reserve ta place. Paiement en credits uniquement.</p>
            </div>
            <div class="border border-primary p-6 bg-offwhite shadow-hard-blue">
                <div class="font-condensed text-6xl font-bold text-primary mb-3 leading-none">03</div>
                <h3 class="font-condensed text-2xl font-bold text-ink uppercase mb-3 leading-tight">JOUE ET PROGRESSE</h3>
                <p class="text-sm text-muted leading-relaxed">Affronte les autres joueurs et grimpe au classement. Les vainqueurs remportent des credits.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== SECTION 03 : TOURNOIS A LA UNE ===== -->
<section class="max-w-container mx-auto px-8 py-12">
    <?php $num = '03'; $titre = 'TOURNOIS A LA UNE'; $ref = 'REF : TRL-03'; include('view/commun/titre_section.php'); ?>
    <!-- Grille des 3 tournois a la une (donnees factices a remplacer par la BDD) -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- Carte 1 : Street Fighter -->
        <div class="border-2 border-primary shadow-hard-ink bg-offwhite flex flex-col justify-between overflow-hidden">
            <div class="relative h-44 overflow-hidden border-b-2 border-primary bg-ink">
                <img src="assets/img/areix.webp" alt="Street Fighter" class="w-full h-full object-cover object-top opacity-85">
                <div class="absolute inset-0 bg-ink bg-opacity-20 pointer-events-none"></div>
                <div class="absolute top-3 left-3 right-3 flex items-center justify-between gap-2 z-10">
                    <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 bg-primary text-white border border-primary">OUVERT</span>
                    <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 bg-offwhite text-ink border border-primary">JEU DE COMBAT</span>
                </div>
                <div class="absolute bottom-3 left-3 z-10">
                    <div class="bg-offwhite border-2 border-primary px-3 py-1 shadow-hard-ink inline-block">
                        <h3 class="font-condensed text-2xl font-bold uppercase text-ink leading-tight">Street Fighter</h3>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-offwhite flex flex-col justify-between flex-1">
                <div class="grid grid-cols-2 gap-3 mb-4 border-b border-primary pb-3">
                    <div>
                        <div class="font-mono text-xs text-muted uppercase tracking-widest mb-0.5">DATE</div>
                        <div class="font-condensed text-lg font-bold text-ink">14.12.2026</div>
                    </div>
                    <div>
                        <div class="font-mono text-xs text-muted uppercase tracking-widest mb-0.5">COUT</div>
                        <div class="font-condensed text-lg font-bold text-primary">120 CREDITS</div>
                    </div>
                </div>
                <div>
                    <a href="index.php?page=tournois" class="block w-full text-center font-condensed font-bold text-sm uppercase py-2 bg-primary text-white shadow-hard-ink hover:bg-primary-light">
                        PARTICIPER →
                    </a>
                </div>
            </div>
        </div>

        <!-- Carte 2 : GTA VI -->
        <div class="border-2 border-primary shadow-hard-ink bg-offwhite flex flex-col justify-between overflow-hidden">
            <div class="relative h-44 overflow-hidden border-b-2 border-primary bg-ink">
                <img src="assets/img/ar6i4r.webp" alt="GTA VI" class="w-full h-full object-cover object-top opacity-85">
                <div class="absolute inset-0 bg-ink bg-opacity-20 pointer-events-none"></div>
                <div class="absolute top-3 left-3 right-3 flex items-center justify-between gap-2 z-10">
                    <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 bg-accent text-ink border border-accent">OUVERT</span>
                    <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 bg-offwhite text-ink border border-primary">ACTION / MONDE OUVERT</span>
                </div>
                <div class="absolute bottom-3 left-3 z-10">
                    <div class="bg-offwhite border-2 border-primary px-3 py-1 shadow-hard-ink inline-block">
                        <h3 class="font-condensed text-2xl font-bold uppercase text-ink leading-tight">GTA VI</h3>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-offwhite flex flex-col justify-between flex-1">
                <div class="grid grid-cols-2 gap-3 mb-4 border-b border-primary pb-3">
                    <div>
                        <div class="font-mono text-xs text-muted uppercase tracking-widest mb-0.5">DATE</div>
                        <div class="font-condensed text-lg font-bold text-ink">20.12.2026</div>
                    </div>
                    <div>
                        <div class="font-mono text-xs text-muted uppercase tracking-widest mb-0.5">COUT</div>
                        <div class="font-condensed text-lg font-bold text-primary">80 CREDITS</div>
                    </div>
                </div>
                <div>
                    <a href="index.php?page=tournois" class="block w-full text-center font-condensed font-bold text-sm uppercase py-2 bg-accent text-ink shadow-hard-yellow hover:bg-accent-light">
                        PARTICIPER →
                    </a>
                </div>
            </div>
        </div>

        <!-- Carte 3 : Dragon Ball FighterZ -->
        <div class="border-2 border-primary shadow-hard-ink bg-offwhite flex flex-col justify-between overflow-hidden">
            <div class="relative h-44 overflow-hidden border-b-2 border-primary bg-ink">
                <img src="assets/img/scpuyg.webp" alt="Dragon Ball FighterZ" class="w-full h-full object-cover object-top opacity-85">
                <div class="absolute inset-0 bg-ink bg-opacity-20 pointer-events-none"></div>
                <div class="absolute top-3 left-3 right-3 flex items-center justify-between gap-2 z-10">
                    <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 bg-ink text-white border border-ink">COMPLET</span>
                    <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 bg-offwhite text-ink border border-primary">JEU DE COMBAT</span>
                </div>
                <div class="absolute bottom-3 left-3 z-10">
                    <div class="bg-offwhite border-2 border-primary px-3 py-1 shadow-hard-ink inline-block">
                        <h3 class="font-condensed text-2xl font-bold uppercase text-ink leading-tight">Dragon Ball FighterZ</h3>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-offwhite flex flex-col justify-between flex-1">
                <div class="grid grid-cols-2 gap-3 mb-4 border-b border-primary pb-3">
                    <div>
                        <div class="font-mono text-xs text-muted uppercase tracking-widest mb-0.5">DATE</div>
                        <div class="font-condensed text-lg font-bold text-ink">05.01.2027</div>
                    </div>
                    <div>
                        <div class="font-mono text-xs text-muted uppercase tracking-widest mb-0.5">COUT</div>
                        <div class="font-condensed text-lg font-bold text-primary">100 CREDITS</div>
                    </div>
                </div>
                <div>
                    <span class="block w-full text-center font-condensed font-bold text-sm uppercase border-2 border-ink text-ink bg-pale py-2">
                        COMPLET
                    </span>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ===== SECTION STATISTIQUES ===== -->
<section class="border-y-2 border-primary">
    <div class="max-w-container mx-auto px-8">
        <!-- Tableau des statistiques globales de la plateforme (donnees factices) -->
        <div class="grid grid-cols-3 divide-x divide-primary">
            <div class="py-12 text-center">
                <div class="font-condensed font-bold text-ink leading-none mb-2 text-title-1">1 200</div>
                <div class="font-mono text-xs text-muted uppercase tracking-widest">JOUEURS INSCRITS</div>
            </div>
            <div class="py-12 text-center">
                <div class="font-condensed font-bold text-ink leading-none mb-2 text-title-1">350</div>
                <div class="font-mono text-xs text-muted uppercase tracking-widest">TOURNOIS ORGANISES</div>
            </div>
            <div class="py-12 text-center">
                <div class="font-condensed font-bold text-ink leading-none mb-2 text-title-1">5</div>
                <div class="font-mono text-xs text-muted uppercase tracking-widest">JEUX CAPCOM DISPONIBLES</div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SECTION 04 : PARTENAIRES ===== -->
<section id="partenaires" class="max-w-container mx-auto px-8 py-12">
    <?php $num = '04'; $titre = 'NOS PARTENAIRES'; $ref = 'REF : PTN-04'; include('view/commun/titre_section.php'); ?>

    <!-- Onglets filtres -->
    <div class="flex gap-2 mb-6 flex-wrap">
        <button class="tab-btn font-mono text-xs uppercase tracking-widest px-4 py-2 border border-primary cursor-pointer bg-primary text-white">CAPCOM</button>
        <button class="tab-btn font-mono text-xs uppercase tracking-widest px-4 py-2 border border-primary cursor-pointer text-ink hover:bg-primary hover:text-white">PLATEFORMES</button>
        <button class="tab-btn font-mono text-xs uppercase tracking-widest px-4 py-2 border border-primary cursor-pointer text-ink hover:bg-primary hover:text-white">SPONSORS</button>
        <button class="tab-btn font-mono text-xs uppercase tracking-widest px-4 py-2 border border-primary cursor-pointer text-ink hover:bg-primary hover:text-white">MEDIAS</button>
        <button class="tab-btn font-mono text-xs uppercase tracking-widest px-4 py-2 border border-primary cursor-pointer text-ink hover:bg-primary hover:text-white">EVENEMENTS</button>
    </div>

    <!-- Grille des logos partenaires (donnees factices) -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <div class="border border-primary p-10 flex items-center justify-center bg-pale">
            <span class="font-condensed font-bold text-2xl text-muted uppercase tracking-widest">CAPCOM</span>
        </div>
        <div class="border border-primary p-10 flex items-center justify-center bg-pale">
            <span class="font-condensed font-bold text-2xl text-muted uppercase tracking-widest">STEAM</span>
        </div>
        <div class="border border-primary p-10 flex items-center justify-center bg-pale">
            <span class="font-condensed font-bold text-2xl text-muted uppercase tracking-widest">TWITCH</span>
        </div>
        <div class="border border-primary p-10 flex items-center justify-center bg-pale">
            <span class="font-condensed font-bold text-2xl text-muted uppercase tracking-widest">ESL</span>
        </div>
    </div>
</section>
