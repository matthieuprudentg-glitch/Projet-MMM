<?php
// Les 3 tournois affiches dans la section "Tournois a la une"
include('model/tournoi.php');

$modelTournoi = new Tournoi();
$tournoisMis = $modelTournoi->selectALaUne();
?>

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

                <!-- Cases d'information 2x2 -->
                <?php
                $cases = [
                    ['label' => 'DATE',         'valeur' => '14.12.2026', 'detail' => '14:00 CET'],
                    ['label' => 'FORMAT',       'valeur' => 'ELIMINATION', 'detail' => '32 JOUEURS'],
                    ['label' => 'INSCRIPTIONS', 'valeur' => "JUSQU'AU 10.12", 'detail' => 'CLOTURE LE 10 DEC.'],
                    ['label' => 'COUT',         'valeur' => '120 CREDITS', 'detail' => 'PAR JOUEUR'],
                ];
                include('view/commun/case_info.php');
                ?>
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
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php
            $etapes = [
                ['num' => '01', 'titre' => 'INSCRIS-TOI',        'texte' => "Cree ton compte gratuitement et recharge tes credits. Acces rapide en 2 minutes."],
                ['num' => '02', 'titre' => 'CHOISIS TON TOURNOI', 'texte' => "Filtre par jeu, date ou prix et reserve ta place. Paiement en credits uniquement."],
                ['num' => '03', 'titre' => 'JOUE ET PROGRESSE',  'texte' => "Affronte les autres joueurs et grimpe au classement. Les vainqueurs remportent des credits."],
            ];
            foreach ($etapes as $e) {
            ?>
            <div class="border border-primary p-6 bg-offwhite shadow-hard-blue">
                <div class="font-condensed text-6xl font-bold text-primary mb-3 leading-none"><?= $e['num'] ?></div>
                <h3 class="font-condensed text-2xl font-bold text-ink uppercase mb-3 leading-tight"><?= $e['titre'] ?></h3>
                <p class="text-sm text-muted leading-relaxed"><?= $e['texte'] ?></p>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- ===== SECTION 03 : TOURNOIS A LA UNE ===== -->
<section class="max-w-container mx-auto px-8 py-12">
    <?php $num = '03'; $titre = 'TOURNOIS A LA UNE'; $ref = 'REF : TRL-03'; include('view/commun/titre_section.php'); ?>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <?php foreach ($tournoisMis as $t) { ?>
        <?php
        // Couleurs de la carte selon la categorie du tournoi
        $hasImg = !empty($t['img']) && file_exists($t['img']);
        if ($t['couleur_carte'] === 'jaune') {
            $fondBanniere = 'bg-accent';
            $badgeStt = 'bg-primary text-white border border-primary';
            $btnCTA   = 'bg-primary text-white shadow-hard-ink hover:bg-primary-light';
        } elseif ($t['couleur_carte'] === 'bleu') {
            $fondBanniere = 'bg-primary';
            $badgeStt = 'bg-accent text-ink border border-accent';
            $btnCTA   = 'bg-accent text-ink shadow-hard-yellow hover:bg-accent-light';
        } else {
            $fondBanniere = 'bg-pale';
            $badgeStt = 'bg-ink text-white border border-ink';
            $btnCTA   = 'bg-primary text-white shadow-hard-ink hover:bg-primary-light';
        }

        // Si l'image existe, le fond est sombre
        if ($hasImg) {
            $fondBanniere = 'bg-ink';
        }
        ?>
        <div class="border-2 border-primary shadow-hard-ink bg-offwhite flex flex-col justify-between overflow-hidden">
            <!-- Banniere avec Artwork ou Filigrane -->
            <div class="relative h-44 overflow-hidden border-b-2 border-primary <?= $fondBanniere ?>">
                <?php if ($hasImg) { ?>
                    <img src="<?= $t['img'] ?>" alt="<?= htmlspecialchars($t['nom']) ?>" class="w-full h-full object-cover object-top opacity-85">
                    <div class="absolute inset-0 bg-ink bg-opacity-20 pointer-events-none"></div>
                <?php } else { ?>
                    <span class="absolute right-2 top-1/2 -translate-y-1/2 font-condensed font-bold leading-none select-none pointer-events-none text-ink opacity-10 text-watermark-sm">
                        <?= htmlspecialchars($t['initiales']) ?>
                    </span>
                <?php } ?>

                <!-- Badges superieurs -->
                <div class="absolute top-3 left-3 right-3 flex items-center justify-between gap-2 z-10">
                    <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 <?= $badgeStt ?>">
                        <?= $t['statut'] === 'ouvert' ? 'OUVERT' : 'COMPLET' ?>
                    </span>
                    <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 bg-offwhite text-ink border border-primary">
                        <?= htmlspecialchars($t['jeu']) ?>
                    </span>
                </div>

                <!-- Titre pose sur bandeau de la charte -->
                <div class="absolute bottom-3 left-3 z-10">
                    <div class="bg-offwhite border-2 border-primary px-3 py-1 shadow-hard-ink inline-block">
                        <h3 class="font-condensed text-2xl font-bold uppercase text-ink leading-tight">
                            <?= htmlspecialchars($t['nom']) ?>
                        </h3>
                    </div>
                </div>
            </div>

            <!-- Infos compactes et bouton CTA -->
            <div class="p-5 bg-offwhite flex flex-col justify-between flex-1">
                <div class="grid grid-cols-2 gap-3 mb-4 border-b border-primary pb-3">
                    <div>
                        <div class="font-mono text-xs text-muted uppercase tracking-widest mb-0.5">DATE</div>
                        <div class="font-condensed text-lg font-bold text-ink"><?= htmlspecialchars($t['date']) ?></div>
                    </div>
                    <div>
                        <div class="font-mono text-xs text-muted uppercase tracking-widest mb-0.5">COUT</div>
                        <div class="font-condensed text-lg font-bold text-primary"><?= (int)$t['cout'] ?> CREDITS</div>
                    </div>
                </div>
                <div>
                    <?php if ($t['statut'] === 'ouvert') { ?>
                        <a href="index.php?page=tournois" class="block w-full text-center font-condensed font-bold text-sm uppercase py-2 <?= $btnCTA ?>">
                            PARTICIPER →
                        </a>
                    <?php } else { ?>
                        <span class="block w-full text-center font-condensed font-bold text-sm uppercase border-2 border-ink text-ink bg-pale py-2">
                            COMPLET
                        </span>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>

<!-- ===== SECTION STATISTIQUES ===== -->
<section class="border-y-2 border-primary">
    <div class="max-w-container mx-auto px-8">
        <div class="grid grid-cols-3 divide-x divide-primary">
            <?php
            $stats = [
                ['valeur' => '1 200', 'label' => 'JOUEURS INSCRITS'],
                ['valeur' => '350',   'label' => 'TOURNOIS ORGANISES'],
                ['valeur' => '5',     'label' => 'JEUX CAPCOM DISPONIBLES'],
            ];
            foreach ($stats as $s) {
            ?>
            <div class="py-12 text-center">
                <div class="font-condensed font-bold text-ink leading-none mb-2 text-title-1"><?= $s['valeur'] ?></div>
                <div class="font-mono text-xs text-muted uppercase tracking-widest"><?= $s['label'] ?></div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- ===== SECTION 04 : PARTENAIRES ===== -->
<section id="partenaires" class="max-w-container mx-auto px-8 py-12">
    <?php $num = '04'; $titre = 'NOS PARTENAIRES'; $ref = 'REF : PTN-04'; include('view/commun/titre_section.php'); ?>

    <!-- Onglets filtres -->
    <div class="flex gap-2 mb-6 flex-wrap">
        <?php $onglets = ['CAPCOM', 'PLATEFORMES', 'SPONSORS', 'MEDIAS', 'EVENEMENTS']; ?>
        <?php foreach ($onglets as $i => $onglet) { ?>
        <button class="tab-btn font-mono text-xs uppercase tracking-widest px-4 py-2 border border-primary cursor-pointer <?= $i === 0 ? 'bg-primary text-white' : 'text-ink hover:bg-primary hover:text-white' ?>">
            <?= $onglet ?>
        </button>
        <?php } ?>
    </div>

    <!-- Logos partenaires (placeholders) -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <?php $partenaires = ['CAPCOM', 'STEAM', 'TWITCH', 'ESL']; ?>
        <?php foreach ($partenaires as $p) { ?>
        <div class="border border-primary p-10 flex items-center justify-center bg-pale">
            <span class="font-condensed font-bold text-2xl text-muted uppercase tracking-widest"><?= $p ?></span>
        </div>
        <?php } ?>
    </div>
</section>
