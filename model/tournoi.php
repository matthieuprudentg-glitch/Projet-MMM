<?php
// Modele Tournoi (placeholder pour la future connexion a la base de donnees)

class Tournoi
{
    private $bdd;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    public function selectAll()
    {
        // A implementer : SELECT * FROM tournoi
    }

    public function selectALaUne()
    {
        // A implementer : SELECT * FROM tournoi LIMIT 3
    }

    public function selectById($id)
    {
        // A implementer : SELECT * FROM tournoi WHERE id = :id
    }

    public function filtrer($jeu, $statut, $prixMax)
    {
        // A implementer : SELECT * FROM tournoi avec filtres
    }

    public function ajouter($nom, $description, $prixAcces, $nbPlace, $dateDebut, $idJeu)
    {
        // A implementer : INSERT INTO tournoi (...)
    }

    public function supprimer($id)
    {
        // A implementer : DELETE FROM tournoi WHERE id = :id
    }
}
?>
