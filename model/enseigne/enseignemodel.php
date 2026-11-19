<?php

class enseigne
{
    private $bdd;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    public function ajouterenseigne($nom, $email, $mdp, $logo = null, $statut_compte = null, $description = null)
    {
        $req = $this->bdd->prepare('INSERT INTO enseigne (nom, email, mdp, logo, statut_compte, description) VALUES (:nom, :email, :mdp, :logo, :statut_compte, :description)');
        $req->bindParam(':nom', $nom);
        $req->bindParam(':email', $email);
        $req->bindParam(':mdp', $mdp);
        $req->bindParam(':logo', $logo);
        $req->bindParam(':statut_compte', $statut_compte);
        $req->bindParam(':description', $description);
        return $req->execute();
    }

    public function supprimerenseigne($id)
    {
        $req = $this->bdd->prepare('DELETE FROM enseigne WHERE id = ?');
        return $req->execute([$id]);
    }

    public function updateenseigne($id, $nom, $email, $mdp, $logo, $statut_compte, $description)
    {
        $req = $this->bdd->prepare('UPDATE enseigne SET nom = :nom, email = :email, mdp = :mdp, logo = :logo, statut_compte = :statut_compte, description = :description WHERE id = :id');
        $req->bindParam(':nom', $nom);
        $req->bindParam(':email', $email);
        $req->bindParam(':mdp', $mdp);
        $req->bindParam(':logo', $logo);
        $req->bindParam(':statut_compte', $statut_compte);
        $req->bindParam(':description', $description);
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        return $req->execute();
    }

    public function selectALLenseigne()
    {
        $req = $this->bdd->prepare('SELECT * FROM enseigne');
        $req->execute();
        return $req->fetchAll();
    }

    public function selectenseigne($id)
    {
        $req = $this->bdd->prepare('SELECT * FROM enseigne WHERE id = ?');
        $req->execute([$id]);
        return $req->fetch();
    }
}
