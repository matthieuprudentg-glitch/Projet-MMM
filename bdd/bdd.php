<?php 

    // Connexion a la base de donnees (prevue pour plus tard)
    // En mode maquette, les donnees sont dans les modeles (tableaux PHP) : ce fichier n'est pas encore utilise.
    try{
        $user = "root";
        $pass = "root";
        $bdd = new PDO("mysql:host=xampp_mariadb;dbname=mmm_tournois", $user, $pass);
    
    } catch (PDOException $e) {
        print "Erreur !:" . $e->getMessage();
        die();
    }
?>
