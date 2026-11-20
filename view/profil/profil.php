<?php
include('model/utilisateur.php');
include('model/mouvementCredit.php');

$modelUtilisateur = new Utilisateur();
$modelMouvement = new MouvementCredit();

// Donnees affichees sur la page profil
$joueur = $modelUtilisateur->selectProfil();
if (isset($_SESSION['solde_credits'])) {
    $joueur['credits'] = $_SESSION['solde_credits'];
}
$prochainsTournois = $modelUtilisateur->selectProchainsTournois();
$tournoisCrees = $modelUtilisateur->selectTournoisCrees();
$historique = $modelMouvement->selectHistorique();
?>

<!-- Page profil joueur -->
<div class="max-w-container mx-auto px-8 py-12">

    <!-- Hero joueur -->
    <div class="grid grid-cols-12 gap-6 mb-8">

        <!-- Infos joueur -->
        <div class="col-span-12 lg:col-span-8">
            <div class="flex items-start gap-6">
                <!-- Avatar carre -->
                <div class="w-24 h-24 bg-primary flex items-center justify-center flex-shrink-0 shadow-hard-blue border-2 border-primary">
                    <span class="font-condensed font-bold text-4xl text-white uppercase">PJ</span>
                </div>
                <div>
                    <h1 class="font-condensed font-bold uppercase text-ink leading-none mb-3 text-6xl">
                        <?= htmlspecialchars($joueur['pseudo']) ?>
                    </h1>
                    <div class="flex gap-2 flex-wrap">
                        <?php $texte = 'JOUEUR'; $type = 'encre'; include('view/commun/badge.php'); ?>
                        <?php if ($joueur['est_createur']) { ?>
                            <?php $texte = 'CREATEUR DE TOURNOI'; $type = 'contour'; include('view/commun/badge.php'); ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Solde de credits -->
        <div class="col-span-12 lg:col-span-4">
            <div class="border-2 border-primary p-5 shadow-hard-blue h-full flex flex-col justify-between">
                <div>
                    <div class="font-mono text-xs text-muted uppercase tracking-widest mb-1">SOLDE DE CREDITS</div>
                    <div class="font-condensed font-bold text-ink leading-none text-title-1"><?= (int)$joueur['credits'] ?></div>
                    <div class="font-mono text-xs text-muted uppercase mb-4">CREDITS</div>
                </div>
                <a href="index.php?page=credits" class="block w-full text-center font-condensed font-bold text-sm uppercase bg-accent text-ink py-3 shadow-hard-yellow hover:bg-accent-light">
                    ACHETER DES CREDITS →
                </a>
            </div>
        </div>

    </div>

    <!-- Bande stats 4 colonnes -->
    <div class="grid grid-cols-2 md:grid-cols-4 border border-primary mb-10">
        <?php
        $statsJoueur = [
            ['label' => 'TOURNOIS JOUES', 'valeur' => $joueur['tournois_joues']],
            ['label' => 'VICTOIRES',       'valeur' => $joueur['victoires']],
            ['label' => 'CLASSEMENT',      'valeur' => '#' . $joueur['classement']],
            ['label' => 'TOURNOIS CREES',  'valeur' => $joueur['tournois_crees']],
        ];
        foreach ($statsJoueur as $i => $s) {
        ?>
        <div class="p-5 <?= $i < 3 ? 'border-r border-primary' : '' ?> <?= $i >= 2 ? 'border-t md:border-t-0 border-primary' : '' ?>">
            <div class="font-mono text-xs text-muted uppercase tracking-widest mb-1"><?= $s['label'] ?></div>
            <div class="font-condensed text-5xl font-bold text-ink leading-none"><?= $s['valeur'] ?></div>
        </div>
        <?php } ?>
    </div>

    <!-- Tableau de bord -->
    <?php $num = '01'; $titre = 'TABLEAU DE BORD'; $ref = 'REF : DSH-01'; include('view/commun/titre_section.php'); ?>

    <div class="grid grid-cols-12 gap-6">

        <!-- Menu lateral -->
        <div class="col-span-12 md:col-span-3">
            <div class="border border-primary shadow-hard-blue">
                <?php
                $menuItems = [
                    ['label' => 'APERCU',          'actif' => true],
                    ['label' => 'MES TOURNOIS',    'actif' => false],
                    ['label' => 'MES CREDITS',     'actif' => false],
                    ['label' => 'PARAMETRES',      'actif' => false],
                    ['label' => 'DECONNEXION',     'actif' => false],
                ];
                foreach ($menuItems as $item) {
                ?>
                <div class="px-5 py-4 font-condensed font-bold text-sm uppercase cursor-pointer border-b border-primary last:border-b-0 tracking-wide <?= $item['actif'] ? 'bg-accent text-ink' : 'text-ink hover:bg-pale' ?>">
                    <?= htmlspecialchars($item['label']) ?>
                </div>
                <?php } ?>
            </div>
        </div>

        <!-- Contenu principal -->
        <div class="col-span-12 md:col-span-9 space-y-6">

            <!-- Prochains tournois -->
            <div class="border border-primary shadow-hard-blue">
                <div class="px-5 py-3 border-b border-primary bg-pale">
                    <span class="font-mono text-xs text-primary uppercase tracking-widest">PROCHAINS TOURNOIS</span>
                </div>
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-primary">
                            <th class="text-left px-5 py-2 font-mono text-xs text-muted uppercase tracking-widest">TOURNOI</th>
                            <th class="text-left px-5 py-2 font-mono text-xs text-muted uppercase tracking-widest">DATE</th>
                            <th class="text-left px-5 py-2 font-mono text-xs text-muted uppercase tracking-widest">STATUT</th>
                            <th class="text-left px-5 py-2 font-mono text-xs text-muted uppercase tracking-widest">COUT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($prochainsTournois as $pt) { ?>
                        <tr class="border-b border-primary last:border-b-0 hover:bg-pale">
                            <td class="px-5 py-3 font-condensed font-bold text-ink text-lg"><?= htmlspecialchars($pt['tournoi']) ?></td>
                            <td class="px-5 py-3 font-mono text-xs text-ink"><?= htmlspecialchars($pt['date']) ?></td>
                            <td class="px-5 py-3 font-mono text-xs text-muted"><?= htmlspecialchars($pt['statut']) ?></td>
                            <td class="px-5 py-3 font-mono text-xs text-ink"><?= (int)$pt['cout'] ?> credits</td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <!-- Mes tournois crees -->
            <div class="border border-primary shadow-hard-blue">
                <div class="px-5 py-3 border-b border-primary bg-pale">
                    <span class="font-mono text-xs text-primary uppercase tracking-widest">MES TOURNOIS CREES</span>
                </div>
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-primary">
                            <th class="text-left px-5 py-2 font-mono text-xs text-muted uppercase tracking-widest">NOM</th>
                            <th class="text-left px-5 py-2 font-mono text-xs text-muted uppercase tracking-widest">DATE</th>
                            <th class="text-left px-5 py-2 font-mono text-xs text-muted uppercase tracking-widest">PARTICIPANTS</th>
                            <th class="text-left px-5 py-2 font-mono text-xs text-muted uppercase tracking-widest">STATUT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tournoisCrees as $tc) { ?>
                        <tr class="border-b border-primary last:border-b-0 hover:bg-pale">
                            <td class="px-5 py-3 font-condensed font-bold text-ink text-lg"><?= htmlspecialchars($tc['nom']) ?></td>
                            <td class="px-5 py-3 font-mono text-xs text-ink"><?= htmlspecialchars($tc['date']) ?></td>
                            <td class="px-5 py-3 font-mono text-xs text-ink"><?= htmlspecialchars($tc['participants']) ?></td>
                            <td class="px-5 py-3">
                                <?php
                                $typeBadge = $tc['statut'] === 'Complet' ? 'encre' : 'jaune';
                                $texte = strtoupper($tc['statut']); $type = $typeBadge;
                                include('view/commun/badge.php');
                                ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <!-- Historique des credits -->
            <div class="border border-primary shadow-hard-blue">
                <div class="px-5 py-3 border-b border-primary bg-pale">
                    <span class="font-mono text-xs text-primary uppercase tracking-widest">HISTORIQUE DES CREDITS</span>
                </div>
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-primary">
                            <th class="text-left px-5 py-2 font-mono text-xs text-muted uppercase tracking-widest">DATE</th>
                            <th class="text-left px-5 py-2 font-mono text-xs text-muted uppercase tracking-widest">OPERATION</th>
                            <th class="text-left px-5 py-2 font-mono text-xs text-muted uppercase tracking-widest">MONTANT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($historique as $h) { ?>
                        <?php
                        // Un montant qui commence par "+" est un gain (vert), sinon c'est une depense (rouge)
                        $couleurMontant = 'text-danger';
                        if (substr($h['montant'], 0, 1) == '+') {
                            $couleurMontant = 'text-success';
                        }
                        ?>
                        <tr class="border-b border-primary last:border-b-0 hover:bg-pale">
                            <td class="px-5 py-3 font-condensed font-bold text-ink text-lg"><?= htmlspecialchars($h['date']) ?></td>
                            <td class="px-5 py-3 text-sm text-ink"><?= htmlspecialchars($h['operation']) ?></td>
                            <td class="px-5 py-3 font-condensed font-bold text-xl <?= $couleurMontant ?>">
                                <?= htmlspecialchars($h['montant']) ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>
