<?php
// Modele MouvementCredit (placeholder pour la future connexion a la base de donnees)

class MouvementCredit
{
    private $bdd;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    public function selectByJoueur($idJoueur)
    {
        // A implementer : SELECT * FROM mouvement_credit WHERE id_joueur = :id_joueur
    }

    public function ajouter($typeMouvement, $montant, $description, $idPortefeuille)
    {
        // A implementer : INSERT INTO mouvement_credit (...)
    }
}
?>
