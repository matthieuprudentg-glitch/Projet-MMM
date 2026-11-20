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
                        Pseudo du joueur
                    </h1>
                    <div class="flex gap-2 flex-wrap">
                        <?php $texte = 'JOUEUR'; $type = 'encre'; include('view/commun/badge.php'); ?>
                        <?php $texte = 'CREATEUR DE TOURNOI'; $type = 'contour'; include('view/commun/badge.php'); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Solde de credits -->
        <div class="col-span-12 lg:col-span-4">
            <div class="border-2 border-primary p-5 shadow-hard-blue h-full flex flex-col justify-between">
                <div>
                    <div class="font-mono text-xs text-muted uppercase tracking-widest mb-1">SOLDE DE CREDITS</div>
                    <div class="font-condensed font-bold text-ink leading-none text-title-1">120</div>
                    <div class="font-mono text-xs text-muted uppercase mb-4">CREDITS</div>
                </div>
                <a href="index.php?page=credits" class="block w-full text-center font-condensed font-bold text-sm uppercase bg-accent text-ink py-3 shadow-hard-yellow hover:bg-accent-light">
                    ACHETER DES CREDITS →
                </a>
            </div>
        </div>

    </div>

    <!-- Tableau des statistiques personnelles du joueur (donnees factices) -->
    <div class="grid grid-cols-2 md:grid-cols-4 border border-primary mb-10">
        <div class="p-5 border-r border-primary">
            <div class="font-mono text-xs text-muted uppercase tracking-widest mb-1">TOURNOIS JOUES</div>
            <div class="font-condensed text-5xl font-bold text-ink leading-none">12</div>
        </div>
        <div class="p-5 border-r border-primary">
            <div class="font-mono text-xs text-muted uppercase tracking-widest mb-1">VICTOIRES</div>
            <div class="font-condensed text-5xl font-bold text-ink leading-none">4</div>
        </div>
        <div class="p-5 border-r border-primary border-t md:border-t-0">
            <div class="font-mono text-xs text-muted uppercase tracking-widest mb-1">CLASSEMENT</div>
            <div class="font-condensed text-5xl font-bold text-ink leading-none">#38</div>
        </div>
        <div class="p-5 border-t md:border-t-0 border-primary">
            <div class="font-mono text-xs text-muted uppercase tracking-widest mb-1">TOURNOIS CREES</div>
            <div class="font-condensed text-5xl font-bold text-ink leading-none">2</div>
        </div>
    </div>

    <!-- Tableau de bord -->
    <?php $num = '01'; $titre = 'TABLEAU DE BORD'; $ref = 'REF : DSH-01'; include('view/commun/titre_section.php'); ?>

    <div class="grid grid-cols-12 gap-6">

        <!-- Menu lateral -->
        <div class="col-span-12 md:col-span-3">
            <div class="border border-primary shadow-hard-blue">
                <div class="px-5 py-4 font-condensed font-bold text-sm uppercase cursor-pointer border-b border-primary tracking-wide bg-accent text-ink">
                    APERCU
                </div>
                <div class="px-5 py-4 font-condensed font-bold text-sm uppercase cursor-pointer border-b border-primary tracking-wide text-ink hover:bg-pale">
                    MES TOURNOIS
                </div>
                <div class="px-5 py-4 font-condensed font-bold text-sm uppercase cursor-pointer border-b border-primary tracking-wide text-ink hover:bg-pale">
                    MES CREDITS
                </div>
                <div class="px-5 py-4 font-condensed font-bold text-sm uppercase cursor-pointer border-b border-primary tracking-wide text-ink hover:bg-pale">
                    PARAMETRES
                </div>
                <div class="px-5 py-4 font-condensed font-bold text-sm uppercase cursor-pointer tracking-wide text-ink hover:bg-pale">
                    DECONNEXION
                </div>
            </div>
        </div>

        <!-- Contenu principal -->
        <div class="col-span-12 md:col-span-9 space-y-6">

            <!-- Prochains tournois : donnees factices a remplacer plus tard par la BDD -->
            <div class="border border-primary shadow-hard-blue">
                <div class="px-5 py-3 border-b border-primary bg-pale">
                    <span class="font-mono text-xs text-primary uppercase tracking-widest">PROCHAINS TOURNOIS</span>
                </div>
                <div class="overflow-x-auto">
                    <!-- Tableau des inscriptions aux prochains tournois -->
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
                            <tr class="border-b border-primary hover:bg-pale">
                                <td class="px-5 py-3 font-condensed font-bold text-ink text-lg">Street Fighter</td>
                                <td class="px-5 py-3 font-mono text-xs text-ink">14.12.2026</td>
                                <td class="px-5 py-3 font-mono text-xs text-muted">Inscrit</td>
                                <td class="px-5 py-3 font-mono text-xs text-ink">120 credits</td>
                            </tr>
                            <tr class="border-b border-primary hover:bg-pale">
                                <td class="px-5 py-3 font-condensed font-bold text-ink text-lg">GTA VI</td>
                                <td class="px-5 py-3 font-mono text-xs text-ink">20.12.2026</td>
                                <td class="px-5 py-3 font-mono text-xs text-muted">Inscrit</td>
                                <td class="px-5 py-3 font-mono text-xs text-ink">80 credits</td>
                            </tr>
                            <tr class="hover:bg-pale">
                                <td class="px-5 py-3 font-condensed font-bold text-ink text-lg">Mega Man</td>
                                <td class="px-5 py-3 font-mono text-xs text-ink">18.01.2027</td>
                                <td class="px-5 py-3 font-mono text-xs text-muted">En attente</td>
                                <td class="px-5 py-3 font-mono text-xs text-ink">40 credits</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Mes tournois crees : donnees factices a remplacer plus tard par la BDD -->
            <div class="border border-primary shadow-hard-blue">
                <div class="px-5 py-3 border-b border-primary bg-pale">
                    <span class="font-mono text-xs text-primary uppercase tracking-widest">MES TOURNOIS CREES</span>
                </div>
                <div class="overflow-x-auto">
                    <!-- Tableau des tournois organises par le joueur -->
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
                            <tr class="border-b border-primary hover:bg-pale">
                                <td class="px-5 py-3 font-condensed font-bold text-ink text-lg">Tournoi entre amis</td>
                                <td class="px-5 py-3 font-mono text-xs text-ink">10.12.2026</td>
                                <td class="px-5 py-3 font-mono text-xs text-ink">8 / 16</td>
                                <td class="px-5 py-3">
                                    <?php $texte = 'OUVERT'; $type = 'jaune'; include('view/commun/badge.php'); ?>
                                </td>
                            </tr>
                            <tr class="hover:bg-pale">
                                <td class="px-5 py-3 font-condensed font-bold text-ink text-lg">Soiree Resident Evil</td>
                                <td class="px-5 py-3 font-mono text-xs text-ink">02.01.2027</td>
                                <td class="px-5 py-3 font-mono text-xs text-ink">16 / 16</td>
                                <td class="px-5 py-3">
                                    <?php $texte = 'COMPLET'; $type = 'encre'; include('view/commun/badge.php'); ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Historique des credits : donnees factices a remplacer plus tard par la BDD -->
            <div class="border border-primary shadow-hard-blue">
                <div class="px-5 py-3 border-b border-primary bg-pale">
                    <span class="font-mono text-xs text-primary uppercase tracking-widest">HISTORIQUE DES CREDITS</span>
                </div>
                <div class="overflow-x-auto">
                    <!-- Tableau des mouvements de credits (gains en vert, depenses en rouge) -->
                    <table class="w-full">
                        <thead>
                            <tr class="border-b border-primary">
                                <th class="text-left px-5 py-2 font-mono text-xs text-muted uppercase tracking-widest">DATE</th>
                                <th class="text-left px-5 py-2 font-mono text-xs text-muted uppercase tracking-widest">OPERATION</th>
                                <th class="text-left px-5 py-2 font-mono text-xs text-muted uppercase tracking-widest">MONTANT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-primary last:border-b-0 hover:bg-pale">
                                <td class="px-5 py-3 font-condensed font-bold text-ink text-lg">02.12.2026</td>
                                <td class="px-5 py-3 text-sm text-ink">Achat de 200 credits</td>
                                <td class="px-5 py-3 font-condensed font-bold text-xl text-success">+200</td>
                            </tr>
                            <tr class="border-b border-primary last:border-b-0 hover:bg-pale">
                                <td class="px-5 py-3 font-condensed font-bold text-ink text-lg">03.12.2026</td>
                                <td class="px-5 py-3 text-sm text-ink">Inscription Street Fighter</td>
                                <td class="px-5 py-3 font-condensed font-bold text-xl text-danger">-120</td>
                            </tr>
                            <tr class="border-b border-primary last:border-b-0 hover:bg-pale">
                                <td class="px-5 py-3 font-condensed font-bold text-ink text-lg">06.12.2026</td>
                                <td class="px-5 py-3 text-sm text-ink">Gain de tournoi</td>
                                <td class="px-5 py-3 font-condensed font-bold text-xl text-success">+40</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

</div>
