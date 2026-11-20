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
        <!-- Tableau resume des chiffres partenaires (donnees factices) -->
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
        <a href="index.php?page=partenaires&cat=TOUS" class="font-mono text-xs uppercase tracking-widest px-4 py-2 border border-primary bg-primary text-white font-bold">Tous (6)</a>
        <a href="index.php?page=partenaires&cat=CAPCOM" class="font-mono text-xs uppercase tracking-widest px-4 py-2 border border-primary text-ink bg-offwhite hover:bg-pale">Capcom</a>
        <a href="index.php?page=partenaires&cat=PLATEFORMES" class="font-mono text-xs uppercase tracking-widest px-4 py-2 border border-primary text-ink bg-offwhite hover:bg-pale">Plateformes</a>
        <a href="index.php?page=partenaires&cat=MEDIAS" class="font-mono text-xs uppercase tracking-widest px-4 py-2 border border-primary text-ink bg-offwhite hover:bg-pale">Medias</a>
        <a href="index.php?page=partenaires&cat=EVENEMENTS" class="font-mono text-xs uppercase tracking-widest px-4 py-2 border border-primary text-ink bg-offwhite hover:bg-pale">Evenements</a>
        <a href="index.php?page=partenaires&cat=SPONSORS" class="font-mono text-xs uppercase tracking-widest px-4 py-2 border border-primary text-ink bg-offwhite hover:bg-pale">Sponsors</a>
    </div>

    <!-- Grille des partenaires officiels (donnees factices a remplacer par la BDD) -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">

        <!-- Partenaire 1 : Capcom -->
        <div class="relative overflow-hidden border border-primary p-6 shadow-hard-ink flex flex-col justify-between bg-accent">
            <span class="absolute right-3 bottom-2 font-condensed font-bold leading-none select-none pointer-events-none text-ink opacity-10 text-watermark-sm z-0">CAPCOM</span>
            <div class="relative z-10">
                <div class="flex items-center justify-between gap-2 mb-4">
                    <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 bg-ink text-white border border-ink">CAPCOM</span>
                    <span class="font-mono text-xs uppercase tracking-widest text-ink opacity-70">PTN-CAP-01</span>
                </div>
                <h3 class="font-condensed font-bold uppercase leading-tight text-3xl mb-2 text-ink">Capcom Co., Ltd.</h3>
                <div class="font-mono text-xs uppercase tracking-widest mb-3 text-ink opacity-70">Editeur et titulaire des licences</div>
                <p class="text-sm leading-relaxed mb-6 text-ink">Fournisseur exclusif des licences Street Fighter, Monster Hunter, Resident Evil, Devil May Cry et Mega Man.</p>
            </div>
            <div class="relative z-10 pt-4 border-t border-current border-opacity-20 flex items-center justify-between">
                <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 border border-ink text-ink font-bold">TITULAIRE OFFICIEL</span>
                <span class="font-mono text-xs uppercase tracking-widest text-ink opacity-70">DEPUIS 2024</span>
            </div>
        </div>

        <!-- Partenaire 2 : Steam -->
        <div class="relative overflow-hidden border border-primary p-6 shadow-hard-ink flex flex-col justify-between bg-primary">
            <span class="absolute right-3 bottom-2 font-condensed font-bold leading-none select-none pointer-events-none text-white opacity-10 text-watermark-sm z-0">STEAM</span>
            <div class="relative z-10">
                <div class="flex items-center justify-between gap-2 mb-4">
                    <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 bg-accent text-ink border border-accent">PLATEFORMES</span>
                    <span class="font-mono text-xs uppercase tracking-widest text-white opacity-70">PTN-STM-02</span>
                </div>
                <h3 class="font-condensed font-bold uppercase leading-tight text-3xl mb-2 text-white">Steam / Valve Corporation</h3>
                <div class="font-mono text-xs uppercase tracking-widest mb-3 text-white opacity-70">Distribution PC et serveurs de match</div>
                <p class="text-sm leading-relaxed mb-6 text-white">Infrastructure de serveurs dediee pour les matchs homologues et synchronisation des identifiants joueurs.</p>
            </div>
            <div class="relative z-10 pt-4 border-t border-current border-opacity-20 flex items-center justify-between">
                <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 border border-white text-white font-bold">SERVEURS DEDIES</span>
                <span class="font-mono text-xs uppercase tracking-widest text-white opacity-70">DEPUIS 2025</span>
            </div>
        </div>

        <!-- Partenaire 3 : Twitch -->
        <div class="relative overflow-hidden border border-primary p-6 shadow-hard-ink flex flex-col justify-between bg-offwhite">
            <span class="absolute right-3 bottom-2 font-condensed font-bold leading-none select-none pointer-events-none text-ink opacity-10 text-watermark-sm z-0">TWITCH</span>
            <div class="relative z-10">
                <div class="flex items-center justify-between gap-2 mb-4">
                    <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 bg-primary text-white border border-primary">MEDIAS</span>
                    <span class="font-mono text-xs uppercase tracking-widest text-muted">PTN-TWH-03</span>
                </div>
                <h3 class="font-condensed font-bold uppercase leading-tight text-3xl mb-2 text-ink">Twitch Interactive</h3>
                <div class="font-mono text-xs uppercase tracking-widest mb-3 text-muted">Diffusion officielle et flux multi-angles</div>
                <p class="text-sm leading-relaxed mb-6 text-ink">Retransmission en direct des finales des tournois majeurs avec integration du chat et des alertes de match.</p>
            </div>
            <div class="relative z-10 pt-4 border-t border-current border-opacity-20 flex items-center justify-between">
                <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 border border-primary text-primary font-bold">DIFFUSION OFFICIELLE</span>
                <span class="font-mono text-xs uppercase tracking-widest text-muted">DEPUIS 2025</span>
            </div>
        </div>

        <!-- Partenaire 4 : ESL -->
        <div class="relative overflow-hidden border border-primary p-6 shadow-hard-ink flex flex-col justify-between bg-accent">
            <span class="absolute right-3 bottom-2 font-condensed font-bold leading-none select-none pointer-events-none text-ink opacity-10 text-watermark-sm z-0">ESL</span>
            <div class="relative z-10">
                <div class="flex items-center justify-between gap-2 mb-4">
                    <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 bg-ink text-white border border-ink">EVENEMENTS</span>
                    <span class="font-mono text-xs uppercase tracking-widest text-ink opacity-70">PTN-ESL-04</span>
                </div>
                <h3 class="font-condensed font-bold uppercase leading-tight text-3xl mb-2 text-ink">ESL Gaming Network</h3>
                <div class="font-mono text-xs uppercase tracking-widest mb-3 text-ink opacity-70">Circuits officiels et arbitrage federal</div>
                <p class="text-sm leading-relaxed mb-6 text-ink">Homologation des reglements sportifs, formation des arbitres officiels et certification des scores.</p>
            </div>
            <div class="relative z-10 pt-4 border-t border-current border-opacity-20 flex items-center justify-between">
                <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 border border-ink text-ink font-bold">ARBITRAGE HOMOLOGUE</span>
                <span class="font-mono text-xs uppercase tracking-widest text-ink opacity-70">DEPUIS 2026</span>
            </div>
        </div>

        <!-- Partenaire 5 : PlayStation -->
        <div class="relative overflow-hidden border border-primary p-6 shadow-hard-ink flex flex-col justify-between bg-primary">
            <span class="absolute right-3 bottom-2 font-condensed font-bold leading-none select-none pointer-events-none text-white opacity-10 text-watermark-sm z-0">SONY PS</span>
            <div class="relative z-10">
                <div class="flex items-center justify-between gap-2 mb-4">
                    <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 bg-accent text-ink border border-accent">PLATEFORMES</span>
                    <span class="font-mono text-xs uppercase tracking-widest text-white opacity-70">PTN-SNY-05</span>
                </div>
                <h3 class="font-condensed font-bold uppercase leading-tight text-3xl mb-2 text-white">PlayStation / Sony Interactive</h3>
                <div class="font-mono text-xs uppercase tracking-widest mb-3 text-white opacity-70">Homologation tournois consoles PlayStation 5</div>
                <p class="text-sm leading-relaxed mb-6 text-white">Support des manettes officielles et integration automatique des brackets dans le PlayStation Network.</p>
            </div>
            <div class="relative z-10 pt-4 border-t border-current border-opacity-20 flex items-center justify-between">
                <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 border border-white text-white font-bold">CONSOLE HOMOLOGUEE</span>
                <span class="font-mono text-xs uppercase tracking-widest text-white opacity-70">DEPUIS 2025</span>
            </div>
        </div>

        <!-- Partenaire 6 : Red Bull -->
        <div class="relative overflow-hidden border border-primary p-6 shadow-hard-ink flex flex-col justify-between bg-offwhite">
            <span class="absolute right-3 bottom-2 font-condensed font-bold leading-none select-none pointer-events-none text-ink opacity-10 text-watermark-sm z-0">RED BULL</span>
            <div class="relative z-10">
                <div class="flex items-center justify-between gap-2 mb-4">
                    <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 bg-primary text-white border border-primary">SPONSORS</span>
                    <span class="font-mono text-xs uppercase tracking-widest text-muted">PTN-RDB-06</span>
                </div>
                <h3 class="font-condensed font-bold uppercase leading-tight text-3xl mb-2 text-ink">Red Bull Gaming Division</h3>
                <div class="font-mono text-xs uppercase tracking-widest mb-3 text-muted">Dotation des cashprizes et logistique tournois physiques</div>
                <p class="text-sm leading-relaxed mb-6 text-ink">Financement des cashprizes de tournois professionnels et organisation des etapes physiques annuelles.</p>
            </div>
            <div class="relative z-10 pt-4 border-t border-current border-opacity-20 flex items-center justify-between">
                <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 border border-primary text-primary font-bold">PARTENAIRE MAJEUR</span>
                <span class="font-mono text-xs uppercase tracking-widest text-muted">DEPUIS 2026</span>
            </div>
        </div>

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
