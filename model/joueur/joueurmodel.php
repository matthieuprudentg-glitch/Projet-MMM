<?php

class joueur
{
    private $bdd;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    
    public function ajouterjoueur($nom, $prenom, $pseudo, $email, $mdp, $type, $date_creation, $statut_verification = 0, $date_verification = null)
    {
        $req = $this->bdd->prepare('INSERT INTO joueur (nom, prenom, pseudo, email, mdp, type, date_creation, statut_verification, date_verification) VALUES (:nom, :prenom, :pseudo, :email, :mdp, :type, :date_creation, :statut_verification, :date_verification)');
        $req->bindParam(':nom', $nom);
        $req->bindParam(':prenom', $prenom);
        $req->bindParam(':pseudo', $pseudo);
        $req->bindParam(':email', $email);
        $req->bindParam(':mdp', $mdp);
        $req->bindParam(':type', $type);
        $req->bindParam(':date_creation', $date_creation);
        $req->bindParam(':statut_verification', $statut_verification, PDO::PARAM_INT);
        $req->bindParam(':date_verification', $date_verification);
        return $req->execute();
    }

    public function supprimerjoueur($id)
    {
        $req = $this->bdd->prepare('DELETE FROM joueur WHERE id = ?');
        return $req->execute([$id]);
    }

   
    public function updatejoueur($id, $nom, $prenom, $pseudo, $email, $mdp, $type, $date_creation, $statut_verification, $date_verification)
    {
        $req = $this->bdd->prepare('UPDATE joueur SET nom = :nom, prenom = :prenom, pseudo = :pseudo, email = :email, mdp = :mdp, type = :type, date_creation = :date_creation, statut_verification = :statut_verification, date_verification = :date_verification WHERE id = :id');
        $req->bindParam(':nom', $nom);
        $req->bindParam(':prenom', $prenom);
        $req->bindParam(':pseudo', $pseudo);
        $req->bindParam(':email', $email);
        $req->bindParam(':mdp', $mdp);
        $req->bindParam(':type', $type);
        $req->bindParam(':date_creation', $date_creation);
        $req->bindParam(':statut_verification', $statut_verification, PDO::PARAM_INT);
        $req->bindParam(':date_verification', $date_verification);
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        return $req->execute();
    }

    public function selectALLjoueur()
    {
        $req = $this->bdd->prepare('SELECT * FROM joueur');
        $req->execute();
        return $req->fetchAll();
    }

    public function selectjoueur($id)
    {
        $req = $this->bdd->prepare('SELECT * FROM joueur WHERE id = ?');
        $req->execute([$id]);
        return $req->fetch();
    }
}
