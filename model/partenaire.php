<?php
// Modele Partenaire (placeholder pour la future connexion a la base de donnees)

class Partenaire
{
    private $bdd;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    public function selectAll()
    {
        // A implementer : SELECT * FROM enseigne
    }

    public function selectByCategorie($categorie)
    {
        // A implementer : SELECT * FROM enseigne WHERE categorie = :categorie
    }

    public function ajouter($nom, $email, $description)
    {
        // A implementer : INSERT INTO enseigne (...)
    }
}
?>
