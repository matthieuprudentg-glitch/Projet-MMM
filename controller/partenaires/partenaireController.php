<?php
session_start();

// Controleur PartenaireController (placeholder pour la future connexion a la base de donnees)

class PartenaireController
{
    public function candidater()
    {
        // A implementer : enregistrement de la candidature partenaire en BDD
        $_SESSION['succes_partenaire'] = 'Candidature simulee avec succes.';
        header('location: ../../index.php?page=partenaires');
        exit;
    }
}

if (isset($_POST['action'])) {
    $ctrl = new PartenaireController();

    if ($_POST['action'] === 'candidater') {
        $ctrl->candidater();
    }
}
?>
