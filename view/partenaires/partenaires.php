<?php
include('model/partenaire.php');

$modelPartenaire = new Partenaire();

// Categorie choisie dans l'URL (TOUS par defaut)
$categorieActive = 'TOUS';
if (isset($_GET['cat'])) {
    $categorieActive = strtoupper($_GET['cat']);
}

$tousPartenaires = $modelPartenaire->selectAll();
$partenaires = $modelPartenaire->filtrer($tousPartenaires, $categorieActive);

// Onglets de filtre : code de la categorie => texte affiche
$categories = [
    'TOUS'        => 'Tous (' . count($tousPartenaires) . ')',
    'CAPCOM'      => 'Capcom',
    'PLATEFORMES' => 'Plateformes',
    'MEDIAS'      => 'Medias',
    'EVENEMENTS'  => 'Evenements',
    'SPONSORS'    => 'Sponsors',
];
?>

<!-- Page Partenaires Officiels -->
<div class="max-w-container mx-auto px-8 py-12">

    <!-- En-tete de page -->
    <div class="grid grid-cols-12 gap-8 mb-10">
        <div class="col-span-12 lg:col-span-7">
            <h1 class="font-condensed font-bold uppercase text-ink leading-none mb-3 text-6xl">
                PARTENAIRES OFFICIELS
            </h1>
            <p class="text-muted text-sm leading-relaxed max-w-lg">
                Ecosysteme des editeurs, plateformes et organisateurs accredites sous protocole officiel Capcom et MMM.
            </p>
        </div>
        <!-- Stats encadrees -->
        <div class="col-span-12 lg:col-span-5">
            <div class="border border-primary p-5 shadow-hard-blue bg-pale">
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <div class="font-mono text-xs text-muted uppercase tracking-widest mb-1">STRUCTURES</div>
                        <div class="font-condensed text-4xl font-bold text-ink">6</div>
                    </div>
                    <div>
                        <div class="font-mono text-xs text-muted uppercase tracking-widest mb-1">PROTOCOLES</div>
                        <div class="font-condensed text-4xl font-bold text-ink">48</div>
                    </div>
                    <div>
                        <div class="font-mono text-xs text-muted uppercase tracking-widest mb-1">HOMOLOGATION</div>
                        <div class="font-condensed text-xl font-bold text-primary">CAPCOM PRO</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if (!empty($_SESSION['succes_partenaire'])) { ?>
    <div class="mb-8 border-2 border-success bg-pale p-4 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <span class="w-3 h-3 bg-success inline-block"></span>
            <span class="font-mono text-xs uppercase tracking-widest text-ink font-bold"><?= htmlspecialchars($_SESSION['succes_partenaire']) ?></span>
        </div>
        <span class="font-mono text-xs text-muted uppercase">DOSSIER ENREGISTRE</span>
    </div>
    <?php unset($_SESSION['succes_partenaire']); ?>
    <?php } ?>

    <!-- Section 01 : Liste des partenaires avec filtres -->
    <?php $num = '01'; $titre = 'STRUCTURES ET EDITEURS HOMOLOGUES'; $ref = 'REF : PTN-REG-01'; include('view/commun/titre_section.php'); ?>

    <!-- Onglets filtres -->
    <div class="flex gap-2 mb-8 flex-wrap">
        <?php foreach ($categories as $cle => $libelle) { ?>
        <?php $estActif = ($categorieActive === $cle); ?>
        <a href="index.php?page=partenaires&cat=<?= urlencode($cle) ?>"
           class="font-mono text-xs uppercase tracking-widest px-4 py-2 border border-primary <?= $estActif ? 'bg-primary text-white font-bold' : 'text-ink bg-offwhite hover:bg-pale' ?>">
            <?= htmlspecialchars($libelle) ?>
        </a>
        <?php } ?>
    </div>

    <!-- Grille des partenaires -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
        <?php foreach ($partenaires as $p) { ?>
        <?php
        if ($p['couleur'] === 'jaune') {
            $bgCard   = 'bg-accent';
            $txtMain  = 'text-ink';
            $txtSub   = 'text-ink opacity-70';
            $filTxt   = 'text-ink';
            $badgeCat = 'bg-ink text-white border border-ink';
            $badgeStt = 'border border-ink text-ink font-bold';
        } elseif ($p['couleur'] === 'bleu') {
            $bgCard   = 'bg-primary';
            $txtMain  = 'text-white';
            $txtSub   = 'text-white opacity-70';
            $filTxt   = 'text-white';
            $badgeCat = 'bg-accent text-ink border border-accent';
            $badgeStt = 'border border-white text-white font-bold';
        } else {
            $bgCard   = 'bg-offwhite';
            $txtMain  = 'text-ink';
            $txtSub   = 'text-muted';
            $filTxt   = 'text-ink';
            $badgeCat = 'bg-primary text-white border border-primary';
            $badgeStt = 'border border-primary text-primary font-bold';
        }
        ?>
        <div class="relative overflow-hidden border border-primary p-6 shadow-hard-ink flex flex-col justify-between <?= $bgCard ?>">

            <!-- Sigle en filigrane -->
            <span class="absolute right-3 bottom-2 font-condensed font-bold leading-none select-none pointer-events-none <?= $filTxt ?> opacity-10 text-watermark-sm z-0">
                <?= htmlspecialchars($p['sigle']) ?>
            </span>

            <div class="relative z-10">
                <!-- Badges code et categorie -->
                <div class="flex items-center justify-between gap-2 mb-4">
                    <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 <?= $badgeCat ?>">
                        <?= htmlspecialchars($p['categorie']) ?>
                    </span>
                    <span class="font-mono text-xs uppercase tracking-widest <?= $txtSub ?>">
                        <?= htmlspecialchars($p['code']) ?>
                    </span>
                </div>

                <!-- Nom de la structure -->
                <h3 class="font-condensed font-bold uppercase leading-tight text-3xl mb-2 <?= $txtMain ?>">
                    <?= htmlspecialchars($p['nom']) ?>
                </h3>

                <!-- Role technique -->
                <div class="font-mono text-xs uppercase tracking-widest mb-3 <?= $txtSub ?>">
                    <?= htmlspecialchars($p['role']) ?>
                </div>

                <!-- Description -->
                <p class="text-sm leading-relaxed mb-6 <?= $txtMain ?>">
                    <?= htmlspecialchars($p['description']) ?>
                </p>
            </div>

            <!-- Pied de carte -->
            <div class="relative z-10 pt-4 border-t border-current border-opacity-20 flex items-center justify-between">
                <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 <?= $badgeStt ?>">
                    <?= htmlspecialchars($p['statut']) ?>
                </span>
                <span class="font-mono text-xs uppercase tracking-widest <?= $txtSub ?>">
                    DEPUIS <?= htmlspecialchars($p['depuis']) ?>
                </span>
            </div>

        </div>
        <?php } ?>
    </div>

    <!-- Section 02 : Candidature / Devenir partenaire -->
    <?php $num = '02'; $titre = 'DEVENIR ORGANISATEUR OU PARTENAIRE'; $ref = 'REF : PTN-DOC-02'; include('view/commun/titre_section.php'); ?>

    <div class="border-2 border-primary bg-pale p-8 shadow-hard-blue">
        <div class="max-w-2xl">
            <h3 class="font-condensed text-3xl font-bold uppercase text-ink mb-2">
                REJOINDRE LE CIRCUIT OFFICIEL CAPCOM
            </h3>
            <p class="text-muted text-sm leading-relaxed mb-6">
                Clubs esport, associations et organisateurs d evenements : beneficiez des outils de gestion de tournois MMM, de l acces aux serveurs officiels et de l homologation de vos brackets.
            </p>

            <form action="controller/partenaires/partenaireController.php" method="POST" class="space-y-4">
                <input type="hidden" name="action" value="candidater">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="font-mono text-xs text-primary uppercase tracking-widest block mb-1">NOM DE LA STRUCTURE</label>
                        <input type="text" name="structure" required placeholder="Ex : Lyon Esport Club"
                            class="w-full border-2 border-ink px-4 py-3 font-sans text-sm text-ink bg-offwhite focus:border-primary focus:outline-none">
                    </div>
                    <div>
                        <label class="font-mono text-xs text-primary uppercase tracking-widest block mb-1">TYPE DE PARTENARIAT</label>
                        <select name="type_partenaire" class="w-full border-2 border-ink px-4 py-3 font-sans text-sm text-ink bg-offwhite focus:border-primary focus:outline-none">
                            <option value="organisateur">Club / Organisateur de tournois</option>
                            <option value="sponsor">Sponsor / Dotation</option>
                            <option value="media">Diffuseur / Media esport</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label class="font-mono text-xs text-primary uppercase tracking-widest block mb-1">EMAIL DU RESPONSABLE</label>
                    <input type="email" name="email" required placeholder="contact@structure.fr"
                        class="w-full border-2 border-ink px-4 py-3 font-sans text-sm text-ink bg-offwhite focus:border-primary focus:outline-none">
                </div>
                <button type="submit" class="font-condensed font-bold text-sm uppercase tracking-wide bg-accent text-ink px-6 py-3 shadow-hard-yellow hover:bg-accent-light">
                    SOUMETTRE UN DOSSIER DE CANDIDATURE →
                </button>
            </form>
        </div>
    </div>

</div>
