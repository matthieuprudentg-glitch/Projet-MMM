<?php
include('model/packCredit.php');
include('model/utilisateur.php');

$modelPack = new PackCredit();
$modelUtilisateur = new Utilisateur();

$packs = $modelPack->selectAll();
$joueur = $modelUtilisateur->selectProfil();

// Solde actuel : celui de la session apres un achat, sinon celui du profil
$solde = $joueur['credits'];
if (isset($_SESSION['solde_credits'])) {
    $solde = $_SESSION['solde_credits'];
}

// Pack choisi dans l'URL (le pack JOUEUR par defaut)
$idPackChoisi = 2;
if (isset($_GET['pack'])) {
    $idPackChoisi = (int)$_GET['pack'];
}
$packChoisi = $modelPack->selectById($idPackChoisi);
?>

<!-- Page achat de credits -->
<div class="max-w-container mx-auto px-8 py-12">

    <!-- En-tete de page -->
    <div class="grid grid-cols-12 gap-6 mb-10">
        <div class="col-span-12 lg:col-span-8">
            <h1 class="font-condensed font-bold uppercase text-ink leading-none mb-3 text-title-1">
                ACHETER DES CREDITS
            </h1>
            <p class="text-muted text-sm">
                Les credits servent a t'inscrire aux tournois. Choisis le pack qui te convient.
            </p>
        </div>
        <!-- Solde actuel -->
        <div class="col-span-12 lg:col-span-4">
            <div class="border-2 border-primary p-5 shadow-hard-blue">
                <div class="font-mono text-xs text-muted uppercase tracking-widest mb-1">SOLDE ACTUEL</div>
                <div class="font-condensed font-bold text-ink leading-none text-title-1"><?= (int)$solde ?></div>
                <div class="font-mono text-xs text-muted uppercase">CREDITS</div>
            </div>
        </div>
    </div>

    <?php if (!empty($_SESSION['succes_credits'])) { ?>
    <div class="mb-8 border-2 border-success bg-pale p-4 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <span class="w-3 h-3 bg-success inline-block"></span>
            <span class="font-mono text-xs uppercase tracking-widest text-ink font-bold"><?= htmlspecialchars($_SESSION['succes_credits']) ?></span>
        </div>
        <span class="font-mono text-xs text-muted uppercase">PAIEMENT SECURISE</span>
    </div>
    <?php unset($_SESSION['succes_credits']); ?>
    <?php } ?>

    <!-- Section 01 : Choix du pack -->
    <?php $num = '01'; $titre = 'CHOISIS TON PACK'; $ref = 'REF : CRD-04'; include('view/commun/titre_section.php'); ?>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-12">
        <?php foreach ($packs as $pack) { ?>
        <?php $estChoisi = $packChoisi && $packChoisi['id'] === $pack['id']; ?>
        <div class="border-2 <?= $estChoisi ? 'border-primary shadow-hard-blue' : 'border-primary' ?> p-5 bg-offwhite relative">
            <!-- Badge pack ou populaire -->
            <div class="mb-4">
                <?php if ($pack['populaire']) { ?>
                    <?php $texte = 'POPULAIRE'; $type = 'jaune'; include('view/commun/badge.php'); ?>
                <?php } else { ?>
                    <?php $texte = 'PACK'; $type = 'contour'; include('view/commun/badge.php'); ?>
                <?php } ?>
            </div>
            <!-- Nom du pack -->
            <div class="font-condensed text-2xl font-bold text-ink uppercase mb-1"><?= htmlspecialchars($pack['nom']) ?></div>
            <!-- Nombre de credits -->
            <div class="font-condensed font-bold text-ink leading-none mb-1 text-6xl"><?= (int)$pack['credits'] ?></div>
            <div class="font-mono text-xs text-muted uppercase tracking-widest mb-3">CREDITS</div>
            <!-- Prix -->
            <div class="font-condensed text-2xl font-bold text-ink mb-5"><?= (int)$pack['prix'] ?> €</div>
            <!-- Bouton choisir -->
            <a href="index.php?page=credits&pack=<?= (int)$pack['id'] ?>"
               class="block w-full text-center font-condensed font-bold text-sm uppercase py-3 <?= $pack['populaire'] ? 'bg-accent text-ink shadow-hard-ink hover:bg-accent-light' : 'bg-primary text-white shadow-hard-ink hover:bg-primary-light' ?>">
                CHOISIR →
            </a>
        </div>
        <?php } ?>
    </div>

    <!-- Section 02 : Paiement -->
    <?php $num = '02'; $titre = 'PAIEMENT'; $ref = 'REF : CRD-06'; include('view/commun/titre_section.php'); ?>

    <?php if ($packChoisi) { ?>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Recapitulatif -->
        <div class="border border-primary p-6 shadow-hard-blue">
            <div class="font-mono text-xs text-primary uppercase tracking-widest mb-5 pb-3 border-b border-primary">RECAPITULATIF</div>
            <?php
            $lignes = [
                ['label' => 'PACK',          'valeur' => $packChoisi['nom'] . ' / ' . $packChoisi['credits'] . ' credits', 'grand' => false],
                ['label' => 'PRIX',          'valeur' => $packChoisi['prix'] . ' €',                                        'grand' => false],
                ['label' => 'SOLDE ACTUEL',  'valeur' => $solde . ' credits',                                                 'grand' => false],
                ['label' => 'NOUVEAU SOLDE', 'valeur' => ($solde + $packChoisi['credits']) . ' CREDITS',                      'grand' => true],
            ];
            ?>
            <div class="space-y-3">
                <?php foreach ($lignes as $l) { ?>
                <div class="flex justify-between items-baseline py-2 border-b border-primary last:border-b-0 last:pt-3">
                    <span class="font-mono text-xs text-muted uppercase tracking-widest"><?= htmlspecialchars($l['label']) ?></span>
                    <span class="<?= $l['grand'] ? 'font-condensed text-4xl font-bold text-ink' : 'font-mono text-sm text-ink' ?>">
                        <?= htmlspecialchars($l['valeur']) ?>
                    </span>
                </div>
                <?php } ?>
            </div>
        </div>

        <!-- Formulaire paiement -->
        <div class="border border-primary p-6 shadow-hard-blue">
            <div class="font-mono text-xs text-primary uppercase tracking-widest mb-5 pb-3 border-b border-primary">MODE DE PAIEMENT</div>
            <form action="controller/credits/creditController.php" method="POST" class="space-y-5">
                <input type="hidden" name="action" value="acheter">
                <input type="hidden" name="pack_id" value="<?= (int)$packChoisi['id'] ?>">
                <!-- Choix du moyen de paiement -->
                <div class="space-y-3">
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input type="radio" name="moyen" value="cb" checked>
                        <span class="flex items-center gap-2 font-mono text-xs text-ink uppercase tracking-widest">
                            <span class="w-3 h-3 bg-accent inline-block flex-shrink-0"></span>
                            Carte bancaire
                        </span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input type="radio" name="moyen" value="paypal">
                        <span class="font-mono text-xs text-ink uppercase tracking-widest">PayPal</span>
                    </label>
                </div>
                <!-- Numero de carte -->
                <div>
                    <label class="font-mono text-xs text-primary uppercase tracking-widest block mb-1">NUMERO DE CARTE</label>
                    <input type="text" name="carte" placeholder="**** **** **** ****"
                        class="w-full border-2 border-ink px-4 py-3 font-mono text-sm text-ink bg-offwhite focus:border-primary focus:outline-none tracking-widest">
                </div>
                <!-- Bouton valider -->
                <button type="submit" class="w-full font-condensed font-bold text-sm uppercase tracking-wide bg-accent text-ink py-4 shadow-hard-yellow hover:bg-accent-light">
                    VALIDER L'ACHAT →
                </button>
                <p class="font-mono text-xs text-muted">Paiement securise. Tes credits sont ajoutes immediatement.</p>
            </form>
        </div>

    </div>
    <?php } else { ?>
    <div class="border border-primary p-10 text-center bg-pale">
        <p class="font-condensed text-2xl text-muted uppercase">Selectionnez un pack ci-dessus pour continuer.</p>
    </div>
    <?php } ?>

</div>
