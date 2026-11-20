<?php
// Modele Utilisateur (placeholder pour la future connexion a la base de donnees)

class Utilisateur
{
    private $bdd;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    public function selectAll()
    {
        // A implementer : SELECT * FROM joueur
    }

    public function selectById($id)
    {
        // A implementer : SELECT * FROM joueur WHERE id = :id
    }

    public function connecter($email, $motdepasse)
    {
        // A implementer : verifier email et mot de passe dans la table joueur
    }

    public function emailExiste($email)
    {
        // A implementer : verifier si l'email existe deja
    }

    public function ajouter($pseudo, $email, $motdepasse)
    {
        // A implementer : INSERT INTO joueur (...)
    }

    public function supprimer($id)
    {
        // A implementer : DELETE FROM joueur WHERE id = :id
    }
}
?>
