<?php
include('model/tournoi.php');

$modelTournoi = new Tournoi();

// Filtres choisis dans le formulaire (vides par defaut)
$filtreJeu = '';
if (isset($_GET['jeu'])) {
    $filtreJeu = $_GET['jeu'];
}

$filtreStatut = '';
if (isset($_GET['statut'])) {
    $filtreStatut = $_GET['statut'];
}

$filtrePrix = 0;
if (isset($_GET['prix_max'])) {
    $filtrePrix = (int)$_GET['prix_max'];
}

// Numero de la page de la liste (page 1 par defaut)
$numPage = 1;
if (isset($_GET['num_page'])) {
    $numPage = (int)$_GET['num_page'];
}
if ($numPage < 1) {
    $numPage = 1;
}

// 1. On recupere tous les tournois, puis on applique les filtres
$tousLesTournois = $modelTournoi->selectAll();
$tournoisFiltres = $modelTournoi->filtrer($tousLesTournois, $filtreJeu, $filtreStatut, $filtrePrix);

// 2. Pagination : 4 tournois par page
$parPage = 4;
$total = count($tournoisFiltres);
$totalPages = ceil($total / $parPage);
if ($totalPages < 1) {
    $totalPages = 1;
}
if ($numPage > $totalPages) {
    $numPage = $totalPages;
}

// 3. On garde seulement les tournois de la page demandee
$debut = ($numPage - 1) * $parPage;
$tournois = array_slice($tournoisFiltres, $debut, $parPage);
?>

<!-- Page catalogue des tournois -->
<div class="max-w-container mx-auto px-8 py-12">

    <!-- En-tete de page -->
    <div class="grid grid-cols-12 gap-8 mb-10">
        <div class="col-span-12 lg:col-span-7">
            <h1 class="font-condensed font-bold uppercase text-ink leading-none mb-3 text-6xl">
                CATALOGUE DES TOURNOIS
            </h1>
            <p class="text-muted text-sm leading-relaxed max-w-lg">
                Tous les tournois ouverts aux inscriptions, crees par la communaute ou organises avec nos partenaires.
            </p>
        </div>
        <!-- Stats encadrees -->
        <div class="col-span-12 lg:col-span-5">
            <div class="border border-primary p-5 shadow-hard-blue">
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <div class="font-mono text-xs text-muted uppercase tracking-widest mb-1">TOURNOIS OUVERTS</div>
                        <div class="font-condensed text-4xl font-bold text-ink">4</div>
                    </div>
                    <div>
                        <div class="font-mono text-xs text-muted uppercase tracking-widest mb-1">JEUX DISPONIBLES</div>
                        <div class="font-condensed text-4xl font-bold text-ink">5</div>
                    </div>
                    <div>
                        <div class="font-mono text-xs text-muted uppercase tracking-widest mb-1">PROCHAINE DATE</div>
                        <div class="font-condensed text-xl font-bold text-ink">14.12.2026</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section filtres + liste -->
    <div class="border border-primary p-6 bg-pale">
        <?php $num = '01'; $titre = 'TOURNOIS OUVERTS AUX INSCRIPTIONS'; $ref = 'REF : TRN-CAT'; include('view/commun/titre_section.php'); ?>

        <!-- Formulaire de filtres -->
        <form method="GET" action="index.php" class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6 pb-6 border-b border-primary">
            <input type="hidden" name="page" value="tournois">
            <div>
                <label class="font-mono text-xs text-primary uppercase tracking-widest block mb-1">JEU</label>
                <input type="text" name="jeu" value="<?= htmlspecialchars($filtreJeu) ?>" placeholder="Tous les jeux"
                    class="w-full border border-ink px-3 py-2 font-sans text-sm bg-offwhite focus:border-primary focus:outline-none">
            </div>
            <div>
                <label class="font-mono text-xs text-primary uppercase tracking-widest block mb-1">DATE</label>
                <input type="text" name="date" placeholder="Toutes les dates"
                    class="w-full border border-ink px-3 py-2 font-sans text-sm bg-offwhite focus:border-primary focus:outline-none">
            </div>
            <div>
                <label class="font-mono text-xs text-primary uppercase tracking-widest block mb-1">STATUT</label>
                <select name="statut" class="w-full border border-ink px-3 py-2 font-sans text-sm bg-offwhite focus:border-primary focus:outline-none">
                    <option value="" <?= $filtreStatut === '' ? 'selected' : '' ?>>Tous les statuts</option>
                    <option value="ouvert"  <?= $filtreStatut === 'ouvert'  ? 'selected' : '' ?>>Ouvert</option>
                    <option value="complet" <?= $filtreStatut === 'complet' ? 'selected' : '' ?>>Complet</option>
                </select>
            </div>
            <div>
                <label class="font-mono text-xs text-primary uppercase tracking-widest block mb-1">PRIX MAXIMUM</label>
                <div class="flex gap-2">
                    <input type="number" name="prix_max" value="<?= $filtrePrix > 0 ? $filtrePrix : '' ?>" placeholder="500 credits"
                        class="flex-1 border border-ink px-3 py-2 font-sans text-sm bg-offwhite focus:border-primary focus:outline-none min-w-0">
                    <button type="submit" class="font-condensed font-bold text-xs uppercase bg-primary text-white px-4 py-2 shadow-hard-ink hover:bg-primary-light flex-shrink-0">
                        FILTRER →
                    </button>
                </div>
            </div>
        </form>

        <!-- Liste des tournois -->
        <?php if (empty($tournois)) { ?>
        <div class="text-center py-12 border border-primary bg-offwhite">
            <p class="font-condensed text-2xl text-muted uppercase">Aucun tournoi ne correspond a ces criteres.</p>
            <a href="index.php?page=tournois" class="font-mono text-xs text-primary uppercase tracking-widest mt-3 inline-block hover:underline">Reinitialiser les filtres</a>
        </div>
        <?php } else { ?>
        <?php foreach ($tournois as $t) { ?>
            <?php include('view/commun/carte_tournoi.php'); ?>
        <?php } ?>
        <?php } ?>

        <!-- Pagination -->
        <?php if ($totalPages > 1) { ?>
        <div class="flex justify-center gap-2 mt-4 pt-4 border-t border-primary">
            <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
            <a href="index.php?page=tournois&num_page=<?= $i ?>&jeu=<?= urlencode($filtreJeu) ?>&statut=<?= urlencode($filtreStatut) ?>&prix_max=<?= $filtrePrix ?>"
               class="font-mono text-xs uppercase px-4 py-2 border border-primary <?= $i == $numPage ? 'bg-primary text-white' : 'text-ink hover:bg-primary hover:text-white' ?>">
                <?= $i ?>
            </a>
            <?php } ?>
        </div>
        <?php } ?>
    </div>

</div>
