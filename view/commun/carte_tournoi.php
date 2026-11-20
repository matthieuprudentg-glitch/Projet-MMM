<?php
// Carte de tournoi pour le catalogue - variable : $t (tableau d'un tournoi)
$hasImg = !empty($t['img']) && file_exists($t['img']);

// Couleurs selon la categorie
if ($t['couleur_carte'] === 'jaune') {
    $bgHeader = 'bg-accent';
    $badgeStt = 'bg-primary text-white border border-primary';
    $badgeJeu = 'bg-offwhite text-ink border border-primary';
    $btnCTA   = 'bg-primary text-white shadow-hard-ink hover:bg-primary-light';
} elseif ($t['couleur_carte'] === 'bleu') {
    $bgHeader = 'bg-primary';
    $badgeStt = 'bg-accent text-ink border border-accent';
    $badgeJeu = 'bg-offwhite text-ink border border-primary';
    $btnCTA   = 'bg-accent text-ink shadow-hard-yellow hover:bg-accent-light';
} else {
    $bgHeader = 'bg-offwhite';
    $badgeStt = 'bg-ink text-white border border-ink';
    $badgeJeu = 'border border-primary text-primary';
    $btnCTA   = 'bg-primary text-white shadow-hard-ink hover:bg-primary-light';
}
?>
<div class="border-2 border-primary mb-8 shadow-hard-ink bg-offwhite">

    <!-- Banniere avec Artwork cadre ou filigrane -->
    <div class="relative h-56 sm:h-64 overflow-hidden border-b-2 border-primary <?= $hasImg ? 'bg-ink' : $bgHeader ?>">
        <?php if ($hasImg) { ?>
            <!-- Artwork officiel du jeu cadre -->
            <img src="<?= $t['img'] ?>" alt="<?= htmlspecialchars($t['nom']) ?>" class="w-full h-full object-cover object-top opacity-85">
            <!-- Aplat de contraste sans degradé flou -->
            <div class="absolute inset-0 bg-ink bg-opacity-25 pointer-events-none"></div>
        <?php } else { ?>
            <!-- Filigrane initiales si image du jeu manquante -->
            <span class="absolute right-6 top-1/2 -translate-y-1/2 font-condensed font-bold leading-none select-none pointer-events-none text-ink opacity-15 text-watermark z-0">
                <?= htmlspecialchars($t['initiales']) ?>
            </span>
        <?php } ?>

        <!-- Badges superieurs en aplat -->
        <div class="absolute top-4 left-4 right-4 flex items-center justify-between flex-wrap gap-2 z-10">
            <div class="flex items-center gap-2 flex-wrap">
                <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 <?= $badgeStt ?>">
                    <?= $t['statut'] === 'ouvert' ? 'INSCRIPTIONS OUVERTES' : 'COMPLET' ?>
                </span>
                <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 <?= $badgeJeu ?>">
                    <?= htmlspecialchars($t['jeu']) ?>
                </span>
                <?php if (!empty($t['classe'])) { ?>
                <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 bg-ink text-white border border-ink">
                    <?= htmlspecialchars($t['classe']) ?>
                </span>
                <?php } ?>
            </div>
            <span class="font-mono text-xs uppercase tracking-widest bg-offwhite text-ink border border-primary px-2 py-0.5">
                CODE : <?= htmlspecialchars($t['code']) ?>
            </span>
        </div>

        <!-- Titre pose sur un bandeau en aplat de la charte (garantie de lisibilite) -->
        <div class="absolute bottom-4 left-4 z-10">
            <div class="bg-offwhite border-2 border-primary px-4 py-2 shadow-hard-ink inline-block">
                <h3 class="font-condensed font-bold uppercase text-ink leading-none text-4xl sm:text-5xl">
                    <?= htmlspecialchars($t['nom']) ?>
                    <?php if (!empty($t['edition'])) { ?>
                    <span class="text-primary text-2xl sm:text-3xl ml-2 font-semibold">/ <?= htmlspecialchars($t['edition']) ?></span>
                    <?php } ?>
                </h3>
            </div>
        </div>
    </div>

    <!-- Grille d'informations techniques et bouton CTA -->
    <div class="p-6 bg-offwhite flex items-end justify-between gap-6 flex-wrap">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 flex-1 min-w-[280px]">
            <div class="border-l-2 border-primary pl-4">
                <div class="font-mono text-xs uppercase tracking-widest text-muted mb-1">DATE ET HEURE</div>
                <div class="font-condensed text-2xl font-bold text-ink"><?= htmlspecialchars($t['date']) ?></div>
                <div class="font-mono text-xs text-muted"><?= htmlspecialchars($t['heure']) ?></div>
            </div>
            <div class="border-l-2 border-primary pl-4">
                <div class="font-mono text-xs uppercase tracking-widest text-muted mb-1">PLACES</div>
                <div class="font-condensed text-2xl font-bold text-ink"><?= (int)$t['places'] ?> JOUEURS</div>
                <div class="font-mono text-xs text-muted"><?= (int)$t['places_restantes'] ?> restantes</div>
            </div>
            <div class="border-l-2 border-primary pl-4">
                <div class="font-mono text-xs uppercase tracking-widest text-muted mb-1">FORMAT</div>
                <div class="font-condensed text-xl font-bold text-ink uppercase leading-tight"><?= htmlspecialchars($t['format']) ?></div>
            </div>
            <div class="border-l-2 border-primary pl-4">
                <div class="font-mono text-xs uppercase tracking-widest text-muted mb-1">DROIT D'ACCES</div>
                <div class="font-condensed text-2xl font-bold text-primary"><?= (int)$t['cout'] ?> CREDITS</div>
            </div>
        </div>
        <div class="flex-shrink-0">
            <?php if ($t['statut'] === 'ouvert') { ?>
                <a href="index.php?page=tournois" class="font-condensed font-bold text-sm uppercase tracking-wide px-6 py-3 inline-block <?= $btnCTA ?>">S'INSCRIRE AU TOURNOI →</a>
            <?php } else { ?>
                <span class="font-condensed font-bold text-sm uppercase tracking-wide border-2 border-ink text-ink bg-pale px-6 py-3 inline-block">TOURNOI COMPLET</span>
            <?php } ?>
        </div>
    </div>

</div>
