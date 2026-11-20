<?php 

session_start();

$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

include('view/commun/header.php');

switch ($page) {

    case 'accueil':
        include('view/accueil/accueil.php');
        break;

    case 'connexion':
        include('view/auth/connexion.php');
        break;

    case 'tournois':
        include('view/tournois/tournois.php');
        break;

    case 'profil':
        include('view/profil/profil.php');
        break;

    case 'credits':
        include('view/credits/credits.php');
        break;

    case 'partenaires':
        include('view/partenaires/partenaires.php');
        break;

    default:
        include('view/accueil/accueil.php');
        break;
}

include('view/commun/footer.php');
?>
