<?php
session_start();

// Controleur CreditController (placeholder pour la future connexion a la base de donnees)

class CreditController
{
    public function acheter()
    {
        // A implementer : paiement et ajout des credits au portefeuille en BDD
        $_SESSION['succes_credits'] = 'Achat simule avec succes.';
        header('location: ../../index.php?page=credits');
        exit;
    }
}

if (isset($_POST['action'])) {
    $ctrl = new CreditController();

    if ($_POST['action'] === 'acheter') {
        $ctrl->acheter();
    }
}
?>
