<?php
// Page demandee dans l'URL (accueil par defaut)
$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

// Titre de l'onglet du navigateur pour chaque page
$titres = [
    'accueil'      => 'Accueil',
    'connexion'    => 'Connexion et Inscription',
    'tournois'     => 'Catalogue des Tournois',
    'profil'       => 'Mon Profil',
    'credits'      => 'Acheter des Credits',
    'partenaires'  => 'Nos Partenaires',
];

// Texte du fil d'Ariane pour chaque page
$filsAriane = [
    'accueil'      => '01 / TOURNOI A LA UNE',
    'connexion'    => '01 / ACCES AU COMPTE',
    'tournois'     => 'ACCUEIL / CATALOGUE DES TOURNOIS',
    'profil'       => '01 / ESPACE JOUEUR',
    'credits'      => '01 / BOUTIQUE DE CREDITS',
    'partenaires'  => '01 / RESEAU ET PARTENAIRES OFFICIELS',
];

// Si la page n'existe pas, on affiche l'accueil
if (!isset($titres[$page])) {
    $page = 'accueil';
}

$titrePage = $titres[$page];
$filAriane = $filsAriane[$page];

// Sur l'accueil et la connexion, on affiche les boutons "visiteur"
$estVisiteur = ($page === 'accueil' || $page === 'connexion');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titrePage ?> - MMM</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@600;700;800&family=IBM+Plex+Mono:wght@400;500&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    // Configuration Tailwind : couleurs, polices et ombres de la charte graphique
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    'primary':       '#0A4FD6',
                    'primary-light': '#2F7BFF',
                    'accent':        '#FFC800',
                    'accent-light':  '#FFE066',
                    'ink':           '#0B1B3F',
                    'muted':         '#4A5878',
                    'offwhite':      '#FAF9F6',
                    'pale':          '#F4F7FF',
                    'success':       '#1FA971',
                    'danger':        '#E5384B',
                    'warn':          '#F28C28',
                },
                fontFamily: {
                    'condensed': ['"Barlow Condensed"', 'sans-serif'],
                    'mono':      ['"IBM Plex Mono"', 'monospace'],
                    'sans':      ['Inter', 'sans-serif'],
                },
                fontSize: {
                    'title-1': ['72px', { lineHeight: '1' }],
                    'title-2': ['44px', { lineHeight: '1.05' }],
                    'title-3': ['28px', { lineHeight: '1.1' }],
                    'watermark': ['140px', { lineHeight: '1' }],
                    'watermark-sm': ['90px', { lineHeight: '1' }],
                    'badge': ['12px', { lineHeight: '1' }],
                    'body': ['16px', { lineHeight: '1.5' }],
                    'body-sm': ['14px', { lineHeight: '1.4' }],
                },
                boxShadow: {
                    'hard-blue':   '4px 4px 0 #0A4FD6',
                    'hard-ink':    '4px 4px 0 #0B1B3F',
                    'hard-yellow': '4px 4px 0 #FFC800',
                },
                borderRadius: {
                    'none': '0', 'sm': '0', DEFAULT: '0',
                    'md': '0', 'lg': '0', 'xl': '0',
                    '2xl': '0', '3xl': '0', 'full': '9999px',
                },
                maxWidth: {
                    'container': '1280px',
                },
            },
        },
    }
    </script>
</head>

<body class="bg-offwhite font-sans text-ink min-h-screen flex flex-col">

<!-- Topbar bleue fine -->
<div class="bg-primary w-full">
    <div class="max-w-container mx-auto px-8 flex items-center justify-between py-1">
        <div class="flex items-center gap-2">
            <div class="w-2 h-2 bg-accent flex-shrink-0"></div>
            <span class="font-mono text-xs text-white uppercase tracking-widest">DOCUMENT OFFICIEL N 2026/PPE</span>
        </div>
        <span class="font-mono text-xs text-accent uppercase tracking-widest">PROJET PPE</span>
    </div>
</div>

<!-- Navigation principale -->
<header class="bg-offwhite border-b border-primary">
    <div class="max-w-container mx-auto px-8 py-4 flex items-center justify-between gap-4">

        <!-- Logo + badge -->
        <div class="flex items-center gap-4 flex-shrink-0">
            <a href="index.php?page=accueil" class="font-condensed text-3xl font-bold text-ink uppercase leading-none">MMM</a>
            <span class="font-mono text-xs uppercase border border-primary text-primary px-2 py-0.5 tracking-widest hidden sm:inline">TOURNOIS</span>
        </div>

        <!-- Liens de navigation - desktop -->
        <nav class="hidden md:flex items-center gap-6">
            <span class="text-muted">|</span>
            <a href="index.php?page=accueil" class="font-mono text-xs uppercase tracking-widest <?= $page === 'accueil' ? 'text-primary font-bold' : 'text-ink hover:text-primary' ?>">Accueil</a>
            <a href="index.php?page=tournois" class="font-mono text-xs uppercase tracking-widest <?= $page === 'tournois' ? 'text-primary font-bold' : 'text-ink hover:text-primary' ?>">Tournois</a>
            <a href="index.php?page=partenaires" class="font-mono text-xs uppercase tracking-widest <?= $page === 'partenaires' ? 'text-primary font-bold' : 'text-ink hover:text-primary' ?>">Partenaires</a>
            <a href="index.php?page=credits" class="font-mono text-xs uppercase tracking-widest <?= $page === 'credits' ? 'text-primary font-bold' : 'text-ink hover:text-primary' ?>">Credits</a>
        </nav>

        <!-- Boutons selon le mode (visiteur ou joueur) -->
        <div class="flex items-center gap-3">
            <?php if (!$estVisiteur) { ?>
                <a href="index.php?page=tournois" class="hidden sm:inline-block font-condensed font-bold text-sm uppercase tracking-wide bg-primary text-white px-5 py-2 shadow-hard-ink hover:bg-primary-light">CREER UN TOURNOI →</a>
                <a href="index.php?page=profil" class="w-10 h-10 bg-primary flex items-center justify-center text-white font-condensed font-bold text-sm shadow-hard-ink hover:bg-primary-light flex-shrink-0">PJ</a>
            <?php } else { ?>
                <a href="index.php?page=connexion" class="font-condensed font-bold text-sm uppercase tracking-wide border-2 border-ink text-ink px-5 py-2 shadow-hard-ink hover:bg-ink hover:text-white">CONNEXION</a>
                <a href="index.php?page=connexion" class="font-condensed font-bold text-sm uppercase tracking-wide bg-accent text-ink px-5 py-2 shadow-hard-yellow hover:bg-accent-light">S'INSCRIRE →</a>
            <?php } ?>
            <button id="menu-toggle" type="button" class="md:hidden border border-primary px-3 py-1 font-mono text-xs uppercase text-ink hover:bg-primary hover:text-white" aria-label="Menu">
                MENU
            </button>
        </div>

    </div>

    <!-- Menu mobile depliable -->
    <div id="menu-mobile" class="hidden md:hidden border-t border-primary bg-pale px-8 py-4 flex flex-col gap-3">
        <a href="index.php?page=accueil" class="font-mono text-xs uppercase tracking-widest <?= $page === 'accueil' ? 'text-primary font-bold' : 'text-ink' ?>">Accueil</a>
        <a href="index.php?page=tournois" class="font-mono text-xs uppercase tracking-widest <?= $page === 'tournois' ? 'text-primary font-bold' : 'text-ink' ?>">Tournois</a>
        <a href="index.php?page=partenaires" class="font-mono text-xs uppercase tracking-widest <?= $page === 'partenaires' ? 'text-primary font-bold' : 'text-ink' ?>">Partenaires</a>
        <a href="index.php?page=credits" class="font-mono text-xs uppercase tracking-widest <?= $page === 'credits' ? 'text-primary font-bold' : 'text-ink' ?>">Credits</a>
    </div>
</header>

<!-- Fil d'Ariane -->
<div class="border-b border-primary">
    <div class="max-w-container mx-auto px-8 py-3 flex items-center gap-4">
        <span class="font-mono text-xs text-muted uppercase tracking-widest flex-shrink-0"><?= $filAriane ?></span>
        <div class="flex-1 h-px bg-primary"></div>
    </div>
</div>

<!-- CONTENU PRINCIPAL -->
<main class="flex-1">
