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
                <div class="font-condensed font-bold text-ink leading-none text-title-1">120</div>
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

    <!-- Grille des packs de credits disponibles (donnees factices a remplacer par la BDD) -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-12">

        <!-- Pack Starter -->
        <div class="border-2 border-primary p-5 bg-offwhite relative">
            <div class="mb-4">
                <?php $texte = 'PACK'; $type = 'contour'; include('view/commun/badge.php'); ?>
            </div>
            <div class="font-condensed text-2xl font-bold text-ink uppercase mb-1">STARTER</div>
            <div class="font-condensed font-bold text-ink leading-none mb-1 text-6xl">50</div>
            <div class="font-mono text-xs text-muted uppercase tracking-widest mb-3">CREDITS</div>
            <div class="font-condensed text-2xl font-bold text-ink mb-5">5 €</div>
            <a href="index.php?page=credits&pack=1" class="block w-full text-center font-condensed font-bold text-sm uppercase py-3 bg-primary text-white shadow-hard-ink hover:bg-primary-light">
                CHOISIR →
            </a>
        </div>

        <!-- Pack Joueur -->
        <div class="border-2 border-primary shadow-hard-blue p-5 bg-offwhite relative">
            <div class="mb-4">
                <?php $texte = 'POPULAIRE'; $type = 'jaune'; include('view/commun/badge.php'); ?>
            </div>
            <div class="font-condensed text-2xl font-bold text-ink uppercase mb-1">JOUEUR</div>
            <div class="font-condensed font-bold text-ink leading-none mb-1 text-6xl">120</div>
            <div class="font-mono text-xs text-muted uppercase tracking-widest mb-3">CREDITS</div>
            <div class="font-condensed text-2xl font-bold text-ink mb-5">10 €</div>
            <a href="index.php?page=credits&pack=2" class="block w-full text-center font-condensed font-bold text-sm uppercase py-3 bg-accent text-ink shadow-hard-ink hover:bg-accent-light">
                CHOISIR →
            </a>
        </div>

        <!-- Pack Pro -->
        <div class="border-2 border-primary p-5 bg-offwhite relative">
            <div class="mb-4">
                <?php $texte = 'PACK'; $type = 'contour'; include('view/commun/badge.php'); ?>
            </div>
            <div class="font-condensed text-2xl font-bold text-ink uppercase mb-1">PRO</div>
            <div class="font-condensed font-bold text-ink leading-none mb-1 text-6xl">300</div>
            <div class="font-mono text-xs text-muted uppercase tracking-widest mb-3">CREDITS</div>
            <div class="font-condensed text-2xl font-bold text-ink mb-5">22 €</div>
            <a href="index.php?page=credits&pack=3" class="block w-full text-center font-condensed font-bold text-sm uppercase py-3 bg-primary text-white shadow-hard-ink hover:bg-primary-light">
                CHOISIR →
            </a>
        </div>

        <!-- Pack Ultime -->
        <div class="border-2 border-primary p-5 bg-offwhite relative">
            <div class="mb-4">
                <?php $texte = 'PACK'; $type = 'contour'; include('view/commun/badge.php'); ?>
            </div>
            <div class="font-condensed text-2xl font-bold text-ink uppercase mb-1">ULTIME</div>
            <div class="font-condensed font-bold text-ink leading-none mb-1 text-6xl">700</div>
            <div class="font-mono text-xs text-muted uppercase tracking-widest mb-3">CREDITS</div>
            <div class="font-condensed text-2xl font-bold text-ink mb-5">45 €</div>
            <a href="index.php?page=credits&pack=4" class="block w-full text-center font-condensed font-bold text-sm uppercase py-3 bg-primary text-white shadow-hard-ink hover:bg-primary-light">
                CHOISIR →
            </a>
        </div>

    </div>

    <!-- Section 02 : Paiement -->
    <?php $num = '02'; $titre = 'PAIEMENT'; $ref = 'REF : CRD-06'; include('view/commun/titre_section.php'); ?>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Tableau recapitulatif du pack choisi et du nouveau solde (donnees factices) -->
        <div class="border border-primary p-6 shadow-hard-blue">
            <div class="font-mono text-xs text-primary uppercase tracking-widest mb-5 pb-3 border-b border-primary">RECAPITULATIF</div>
            <div class="space-y-3">
                <div class="flex justify-between items-baseline py-2 border-b border-primary">
                    <span class="font-mono text-xs text-muted uppercase tracking-widest">PACK</span>
                    <span class="font-mono text-sm text-ink">JOUEUR / 120 credits</span>
                </div>
                <div class="flex justify-between items-baseline py-2 border-b border-primary">
                    <span class="font-mono text-xs text-muted uppercase tracking-widest">PRIX</span>
                    <span class="font-mono text-sm text-ink">10 €</span>
                </div>
                <div class="flex justify-between items-baseline py-2 border-b border-primary">
                    <span class="font-mono text-xs text-muted uppercase tracking-widest">SOLDE ACTUEL</span>
                    <span class="font-mono text-sm text-ink">120 credits</span>
                </div>
                <div class="flex justify-between items-baseline py-2 pt-3">
                    <span class="font-mono text-xs text-muted uppercase tracking-widest">NOUVEAU SOLDE</span>
                    <span class="font-condensed text-4xl font-bold text-ink">240 CREDITS</span>
                </div>
            </div>
        </div>

        <!-- Formulaire paiement -->
        <div class="border border-primary p-6 shadow-hard-blue">
            <div class="font-mono text-xs text-primary uppercase tracking-widest mb-5 pb-3 border-b border-primary">MODE DE PAIEMENT</div>
            <form action="controller/credits/creditController.php" method="POST" class="space-y-5">
                <input type="hidden" name="action" value="acheter">
                <input type="hidden" name="pack_id" value="2">
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

</div>
