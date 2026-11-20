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
        <!-- Tableau resume des statistiques du catalogue (donnees factices) -->
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
                <input type="text" name="jeu" placeholder="Tous les jeux"
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
                    <option value="">Tous les statuts</option>
                    <option value="ouvert">Ouvert</option>
                    <option value="complet">Complet</option>
                </select>
            </div>
            <div>
                <label class="font-mono text-xs text-primary uppercase tracking-widest block mb-1">PRIX MAXIMUM</label>
                <div class="flex gap-2">
                    <input type="number" name="prix_max" placeholder="500 credits"
                        class="flex-1 border border-ink px-3 py-2 font-sans text-sm bg-offwhite focus:border-primary focus:outline-none min-w-0">
                    <button type="submit" class="font-condensed font-bold text-xs uppercase bg-primary text-white px-4 py-2 shadow-hard-ink hover:bg-primary-light flex-shrink-0">
                        FILTRER →
                    </button>
                </div>
            </div>
        </form>

        <!-- Liste des tournois disponibles (donnees factices a remplacer par la BDD) -->
        <!-- Tournoi 1 : Street Fighter -->
        <div class="border-2 border-primary mb-8 shadow-hard-ink bg-offwhite">
            <div class="relative h-56 sm:h-64 overflow-hidden border-b-2 border-primary bg-ink">
                <img src="assets/img/areix.webp" alt="Street Fighter" class="w-full h-full object-cover object-top opacity-85">
                <div class="absolute inset-0 bg-ink bg-opacity-25 pointer-events-none"></div>
                <div class="absolute top-4 left-4 right-4 flex items-center justify-between flex-wrap gap-2 z-10">
                    <div class="flex items-center gap-2 flex-wrap">
                        <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 bg-primary text-white border border-primary">INSCRIPTIONS OUVERTES</span>
                        <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 bg-offwhite text-ink border border-primary">JEU DE COMBAT</span>
                        <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 bg-ink text-white border border-ink">CLASSE COMPETITIVE A</span>
                    </div>
                    <span class="font-mono text-xs uppercase tracking-widest bg-offwhite text-ink border border-primary px-2 py-0.5">CODE : TRN-001</span>
                </div>
                <div class="absolute bottom-4 left-4 z-10">
                    <div class="bg-offwhite border-2 border-primary px-4 py-2 shadow-hard-ink inline-block">
                        <h3 class="font-condensed font-bold uppercase text-ink leading-none text-4xl sm:text-5xl">
                            Street Fighter <span class="text-primary text-2xl sm:text-3xl ml-2 font-semibold">/ Edition Hiver</span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="p-6 bg-offwhite flex items-end justify-between gap-6 flex-wrap">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 flex-1 min-w-[280px]">
                    <div class="border-l-2 border-primary pl-4">
                        <div class="font-mono text-xs uppercase tracking-widest text-muted mb-1">DATE ET HEURE</div>
                        <div class="font-condensed text-2xl font-bold text-ink">14.12.2026</div>
                        <div class="font-mono text-xs text-muted">14:00 CET</div>
                    </div>
                    <div class="border-l-2 border-primary pl-4">
                        <div class="font-mono text-xs uppercase tracking-widest text-muted mb-1">PLACES</div>
                        <div class="font-condensed text-2xl font-bold text-ink">32 JOUEURS</div>
                        <div class="font-mono text-xs text-muted">6 restantes</div>
                    </div>
                    <div class="border-l-2 border-primary pl-4">
                        <div class="font-mono text-xs uppercase tracking-widest text-muted mb-1">FORMAT</div>
                        <div class="font-condensed text-xl font-bold text-ink uppercase leading-tight">ELIMINATION DIRECTE</div>
                    </div>
                    <div class="border-l-2 border-primary pl-4">
                        <div class="font-mono text-xs uppercase tracking-widest text-muted mb-1">DROIT D'ACCES</div>
                        <div class="font-condensed text-2xl font-bold text-primary">120 CREDITS</div>
                    </div>
                </div>
                <div class="flex-shrink-0">
                    <a href="index.php?page=tournois" class="font-condensed font-bold text-sm uppercase tracking-wide px-6 py-3 inline-block bg-primary text-white shadow-hard-ink hover:bg-primary-light">S'INSCRIRE AU TOURNOI →</a>
                </div>
            </div>
        </div>

        <!-- Tournoi 2 : GTA VI -->
        <div class="border-2 border-primary mb-8 shadow-hard-ink bg-offwhite">
            <div class="relative h-56 sm:h-64 overflow-hidden border-b-2 border-primary bg-ink">
                <img src="assets/img/ar6i4r.webp" alt="GTA VI" class="w-full h-full object-cover object-top opacity-85">
                <div class="absolute inset-0 bg-ink bg-opacity-25 pointer-events-none"></div>
                <div class="absolute top-4 left-4 right-4 flex items-center justify-between flex-wrap gap-2 z-10">
                    <div class="flex items-center gap-2 flex-wrap">
                        <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 bg-accent text-ink border border-accent">INSCRIPTIONS OUVERTES</span>
                        <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 bg-offwhite text-ink border border-primary">ACTION / MONDE OUVERT</span>
                        <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 bg-ink text-white border border-ink">CLASSE B</span>
                    </div>
                    <span class="font-mono text-xs uppercase tracking-widest bg-offwhite text-ink border border-primary px-2 py-0.5">CODE : TRN-002</span>
                </div>
                <div class="absolute bottom-4 left-4 z-10">
                    <div class="bg-offwhite border-2 border-primary px-4 py-2 shadow-hard-ink inline-block">
                        <h3 class="font-condensed font-bold uppercase text-ink leading-none text-4xl sm:text-5xl">
                            GTA VI <span class="text-primary text-2xl sm:text-3xl ml-2 font-semibold">/ Vice City Showdown</span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="p-6 bg-offwhite flex items-end justify-between gap-6 flex-wrap">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 flex-1 min-w-[280px]">
                    <div class="border-l-2 border-primary pl-4">
                        <div class="font-mono text-xs uppercase tracking-widest text-muted mb-1">DATE ET HEURE</div>
                        <div class="font-condensed text-2xl font-bold text-ink">20.12.2026</div>
                        <div class="font-mono text-xs text-muted">10:00 CET</div>
                    </div>
                    <div class="border-l-2 border-primary pl-4">
                        <div class="font-mono text-xs uppercase tracking-widest text-muted mb-1">PLACES</div>
                        <div class="font-condensed text-2xl font-bold text-ink">16 JOUEURS</div>
                        <div class="font-mono text-xs text-muted">10 restantes</div>
                    </div>
                    <div class="border-l-2 border-primary pl-4">
                        <div class="font-mono text-xs uppercase tracking-widest text-muted mb-1">FORMAT</div>
                        <div class="font-condensed text-xl font-bold text-ink uppercase leading-tight">COURSE ET BRAQUAGE EN DUO</div>
                    </div>
                    <div class="border-l-2 border-primary pl-4">
                        <div class="font-mono text-xs uppercase tracking-widest text-muted mb-1">DROIT D'ACCES</div>
                        <div class="font-condensed text-2xl font-bold text-primary">80 CREDITS</div>
                    </div>
                </div>
                <div class="flex-shrink-0">
                    <a href="index.php?page=tournois" class="font-condensed font-bold text-sm uppercase tracking-wide px-6 py-3 inline-block bg-accent text-ink shadow-hard-yellow hover:bg-accent-light">S'INSCRIRE AU TOURNOI →</a>
                </div>
            </div>
        </div>

        <!-- Tournoi 3 : Dragon Ball FighterZ -->
        <div class="border-2 border-primary mb-8 shadow-hard-ink bg-offwhite">
            <div class="relative h-56 sm:h-64 overflow-hidden border-b-2 border-primary bg-ink">
                <img src="assets/img/scpuyg.webp" alt="Dragon Ball FighterZ" class="w-full h-full object-cover object-top opacity-85">
                <div class="absolute inset-0 bg-ink bg-opacity-25 pointer-events-none"></div>
                <div class="absolute top-4 left-4 right-4 flex items-center justify-between flex-wrap gap-2 z-10">
                    <div class="flex items-center gap-2 flex-wrap">
                        <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 bg-ink text-white border border-ink">COMPLET</span>
                        <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 border border-primary text-primary bg-offwhite">JEU DE COMBAT</span>
                        <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 bg-ink text-white border border-ink">CLASSE B</span>
                    </div>
                    <span class="font-mono text-xs uppercase tracking-widest bg-offwhite text-ink border border-primary px-2 py-0.5">CODE : TRN-003</span>
                </div>
                <div class="absolute bottom-4 left-4 z-10">
                    <div class="bg-offwhite border-2 border-primary px-4 py-2 shadow-hard-ink inline-block">
                        <h3 class="font-condensed font-bold uppercase text-ink leading-none text-4xl sm:text-5xl">
                            Dragon Ball FighterZ <span class="text-primary text-2xl sm:text-3xl ml-2 font-semibold">/ Championnat Z</span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="p-6 bg-offwhite flex items-end justify-between gap-6 flex-wrap">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 flex-1 min-w-[280px]">
                    <div class="border-l-2 border-primary pl-4">
                        <div class="font-mono text-xs uppercase tracking-widest text-muted mb-1">DATE ET HEURE</div>
                        <div class="font-condensed text-2xl font-bold text-ink">05.01.2027</div>
                        <div class="font-mono text-xs text-muted">15:00 CET</div>
                    </div>
                    <div class="border-l-2 border-primary pl-4">
                        <div class="font-mono text-xs uppercase tracking-widest text-muted mb-1">PLACES</div>
                        <div class="font-condensed text-2xl font-bold text-ink">24 JOUEURS</div>
                        <div class="font-mono text-xs text-muted">0 restantes</div>
                    </div>
                    <div class="border-l-2 border-primary pl-4">
                        <div class="font-mono text-xs uppercase tracking-widest text-muted mb-1">FORMAT</div>
                        <div class="font-condensed text-xl font-bold text-ink uppercase leading-tight">DUEL 3V3 CHRONOMETRE</div>
                    </div>
                    <div class="border-l-2 border-primary pl-4">
                        <div class="font-mono text-xs uppercase tracking-widest text-muted mb-1">DROIT D'ACCES</div>
                        <div class="font-condensed text-2xl font-bold text-primary">100 CREDITS</div>
                    </div>
                </div>
                <div class="flex-shrink-0">
                    <span class="font-condensed font-bold text-sm uppercase tracking-wide border-2 border-ink text-ink bg-pale px-6 py-3 inline-block">TOURNOI COMPLET</span>
                </div>
            </div>
        </div>

        <!-- Tournoi 4 : Resident Evil -->
        <div class="border-2 border-primary mb-8 shadow-hard-ink bg-offwhite">
            <div class="relative h-56 sm:h-64 overflow-hidden border-b-2 border-primary bg-accent">
                <span class="absolute right-6 top-1/2 -translate-y-1/2 font-condensed font-bold leading-none select-none pointer-events-none text-ink opacity-15 text-watermark z-0">RE</span>
                <div class="absolute top-4 left-4 right-4 flex items-center justify-between flex-wrap gap-2 z-10">
                    <div class="flex items-center gap-2 flex-wrap">
                        <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 bg-primary text-white border border-primary">INSCRIPTIONS OUVERTES</span>
                        <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 bg-offwhite text-ink border border-primary">SURVIE</span>
                        <span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 bg-ink text-white border border-ink">CLASSE C</span>
                    </div>
                    <span class="font-mono text-xs uppercase tracking-widest bg-offwhite text-ink border border-primary px-2 py-0.5">CODE : TRN-004</span>
                </div>
                <div class="absolute bottom-4 left-4 z-10">
                    <div class="bg-offwhite border-2 border-primary px-4 py-2 shadow-hard-ink inline-block">
                        <h3 class="font-condensed font-bold uppercase text-ink leading-none text-4xl sm:text-5xl">Resident Evil</h3>
                    </div>
                </div>
            </div>
            <div class="p-6 bg-offwhite flex items-end justify-between gap-6 flex-wrap">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 flex-1 min-w-[280px]">
                    <div class="border-l-2 border-primary pl-4">
                        <div class="font-mono text-xs uppercase tracking-widest text-muted mb-1">DATE ET HEURE</div>
                        <div class="font-condensed text-2xl font-bold text-ink">12.01.2027</div>
                        <div class="font-mono text-xs text-muted">18:00 CET</div>
                    </div>
                    <div class="border-l-2 border-primary pl-4">
                        <div class="font-mono text-xs uppercase tracking-widest text-muted mb-1">PLACES</div>
                        <div class="font-condensed text-2xl font-bold text-ink">20 JOUEURS</div>
                        <div class="font-mono text-xs text-muted">8 restantes</div>
                    </div>
                    <div class="border-l-2 border-primary pl-4">
                        <div class="font-mono text-xs uppercase tracking-widest text-muted mb-1">FORMAT</div>
                        <div class="font-condensed text-xl font-bold text-ink uppercase leading-tight">SURVIE, MEILLEUR SCORE</div>
                    </div>
                    <div class="border-l-2 border-primary pl-4">
                        <div class="font-mono text-xs uppercase tracking-widest text-muted mb-1">DROIT D'ACCES</div>
                        <div class="font-condensed text-2xl font-bold text-primary">60 CREDITS</div>
                    </div>
                </div>
                <div class="flex-shrink-0">
                    <a href="index.php?page=tournois" class="font-condensed font-bold text-sm uppercase tracking-wide px-6 py-3 inline-block bg-primary text-white shadow-hard-ink hover:bg-primary-light">S'INSCRIRE AU TOURNOI →</a>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center gap-2 mt-4 pt-4 border-t border-primary">
            <a href="index.php?page=tournois&num_page=1" class="font-mono text-xs uppercase px-4 py-2 border border-primary bg-primary text-white">1</a>
            <a href="index.php?page=tournois&num_page=2" class="font-mono text-xs uppercase px-4 py-2 border border-primary text-ink hover:bg-primary hover:text-white">2</a>
        </div>
    </div>

</div>
