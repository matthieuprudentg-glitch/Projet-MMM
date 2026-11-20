<!-- Page connexion et inscription -->
<div class="max-w-container mx-auto px-8 py-12">

    <!-- Titre de page -->
    <div class="mb-10">
        <h1 class="font-condensed font-bold uppercase text-ink leading-none mb-3 text-6xl">
            CONNEXION ET INSCRIPTION
        </h1>
        <p class="text-muted text-base">
            Connecte-toi ou cree ton compte pour creer et rejoindre des tournois.
        </p>
    </div>

    <?php if (!empty($_SESSION['succes_connexion'])) { ?>
    <div class="mb-6 border-2 border-success bg-pale p-4 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <span class="w-3 h-3 bg-success inline-block"></span>
            <span class="font-mono text-xs uppercase tracking-widest text-ink font-bold"><?= htmlspecialchars($_SESSION['succes_connexion']) ?></span>
        </div>
        <a href="index.php?page=profil" class="font-mono text-xs text-primary uppercase underline">Aller au profil →</a>
    </div>
    <?php unset($_SESSION['succes_connexion']); ?>
    <?php } ?>

    <!-- Les deux formulaires cote a cote -->
    <div class="grid grid-cols-1 md:grid-cols-2 border-2 border-primary shadow-hard-blue">

        <!-- Formulaire connexion (gauche) -->
        <div class="p-8 border-b-2 md:border-b-0 md:border-r-2 border-primary">
            <div class="font-mono text-xs text-primary uppercase tracking-widest mb-6 pb-3 border-b border-primary">
                FORMULAIRE : CONNEXION
            </div>
            <form action="controller/auth/authController.php" method="POST" class="space-y-5">
                <input type="hidden" name="action" value="connecter">
                <div>
                    <label class="font-mono text-xs text-primary uppercase tracking-widest block mb-1">ADRESSE EMAIL</label>
                    <input type="email" name="email" placeholder="nom@exemple.fr"
                        class="w-full border-2 border-ink px-4 py-3 font-sans text-sm text-ink bg-offwhite focus:border-primary focus:outline-none">
                </div>
                <div>
                    <label class="font-mono text-xs text-primary uppercase tracking-widest block mb-1">MOT DE PASSE</label>
                    <input type="password" name="mdp" placeholder="••••••••"
                        class="w-full border-2 border-ink px-4 py-3 font-sans text-sm text-ink bg-offwhite focus:border-primary focus:outline-none">
                    <a href="#" class="font-mono text-xs text-muted hover:text-primary mt-1 inline-block uppercase tracking-widest">Mot de passe oublie ?</a>
                </div>
                <button type="submit" class="w-full font-condensed font-bold text-sm uppercase tracking-wide bg-primary text-white py-3 shadow-hard-ink hover:bg-primary-light mt-2">
                    SE CONNECTER →
                </button>
            </form>
        </div>

        <!-- Formulaire inscription (droite) -->
        <div class="p-8">
            <div class="font-mono text-xs text-primary uppercase tracking-widest mb-6 pb-3 border-b border-primary">
                FORMULAIRE : INSCRIPTION
            </div>
            <form action="controller/auth/authController.php" method="POST" class="space-y-5">
                <input type="hidden" name="action" value="inscrire">
                <div>
                    <label class="font-mono text-xs text-primary uppercase tracking-widest block mb-1">PSEUDO</label>
                    <input type="text" name="pseudo" placeholder="Ton pseudo"
                        class="w-full border-2 border-ink px-4 py-3 font-sans text-sm text-ink bg-offwhite focus:border-primary focus:outline-none">
                </div>
                <div>
                    <label class="font-mono text-xs text-primary uppercase tracking-widest block mb-1">ADRESSE EMAIL</label>
                    <input type="email" name="email" placeholder="nom@exemple.fr"
                        class="w-full border-2 border-ink px-4 py-3 font-sans text-sm text-ink bg-offwhite focus:border-primary focus:outline-none">
                </div>
                <div>
                    <label class="font-mono text-xs text-primary uppercase tracking-widest block mb-1">MOT DE PASSE</label>
                    <input type="password" name="mdp" placeholder="••••••••"
                        class="w-full border-2 border-ink px-4 py-3 font-sans text-sm text-ink bg-offwhite focus:border-primary focus:outline-none">
                </div>
                <div>
                    <label class="font-mono text-xs text-primary uppercase tracking-widest block mb-1">CONFIRMER LE MOT DE PASSE</label>
                    <input type="password" name="mdp_confirm" placeholder="••••••••"
                        class="w-full border-2 border-ink px-4 py-3 font-sans text-sm text-ink bg-offwhite focus:border-primary focus:outline-none">
                </div>
                <!-- Checkbox conditions -->
                <label class="flex items-center gap-3 cursor-pointer p-3 bg-accent">
                    <input type="checkbox" name="cgu" class="w-4 h-4 border-2 border-ink flex-shrink-0">
                    <span class="font-mono text-xs text-ink tracking-widest uppercase">J'accepte les conditions d'utilisation</span>
                </label>
                <button type="submit" class="w-full font-condensed font-bold text-sm uppercase tracking-wide bg-accent text-ink py-3 shadow-hard-yellow hover:bg-accent-light">
                    CREER MON COMPTE →
                </button>
            </form>
        </div>

    </div>
</div>
