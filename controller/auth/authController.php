<?php
session_start();

// Controleur AuthController (placeholder pour la future connexion a la base de donnees)

class AuthController
{
    public function connecter()
    {
        // A implementer : verification de l'email et du mot de passe en BDD
        $_SESSION['succes_connexion'] = 'Connexion simulee avec succes.';
        header('location: ../../index.php?page=connexion');
        exit;
    }

    public function inscrire()
    {
        // A implementer : validation des champs et insertion en BDD
        $_SESSION['succes_connexion'] = 'Inscription simulee avec succes.';
        header('location: ../../index.php?page=connexion');
        exit;
    }

    public function deconnecter()
    {
        // A implementer : destruction de la session utilisateur
        session_destroy();
        header('location: ../../index.php?page=accueil');
        exit;
    }
}

if (isset($_POST['action'])) {
    $ctrl = new AuthController();

    if ($_POST['action'] === 'connecter') {
        $ctrl->connecter();
    } elseif ($_POST['action'] === 'inscrire') {
        $ctrl->inscrire();
    } elseif ($_POST['action'] === 'deconnecter') {
        $ctrl->deconnecter();
    }
}
?>
