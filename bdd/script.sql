
CREATE DATABASE PPE;
USE PPE;

-- TABLE JOUEUR
CREATE TABLE joueur(
    id INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    pseudo VARCHAR(255) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    mdp VARCHAR(255) NOT NULL,
    type VARCHAR(50),
    date_creation DATETIME NOT NULL,
    statut_verification BOOLEAN NOT NULL DEFAULT 0,
    date_verification DATETIME,
    PRIMARY KEY(id)
);

-- TABLE ENSEIGNE
CREATE TABLE enseigne(
    id INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    mdp VARCHAR(255) NOT NULL,
    logo VARCHAR(255),
    statut_compte VARCHAR(50),
    description TEXT,
    PRIMARY KEY(id)
);

-- TABLE JEU
CREATE TABLE jeu(
    id INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    categorie VARCHAR(255),
    description TEXT,
    version VARCHAR(100),
    img_logo VARCHAR(255),
    img_poster VARCHAR(255),
    img_banniere VARCHAR(255),
    plateforme VARCHAR(255),
    PRIMARY KEY(id)
);

-- TABLE TOURNOI
CREATE TABLE tournoi(
    id INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    description TEXT,
    prix_acces DECIMAL(10,2) DEFAULT 0,
    cash_prize DECIMAL(10,2) DEFAULT 0,
    nb_place INT NOT NULL,
    date_debut DATETIME NOT NULL,
    date_fin DATETIME NOT NULL,
    statut VARCHAR(50),
    type_tournoi VARCHAR(100),
    type_organisateur VARCHAR(50),
    id_jeu INT NOT NULL,
    id_joueur_organisateur INT,
    id_enseigne_organisatrice INT,
    PRIMARY KEY(id),
    FOREIGN KEY(id_jeu) REFERENCES jeu(id),
    FOREIGN KEY(id_joueur_organisateur) REFERENCES joueur(id),
    FOREIGN KEY(id_enseigne_organisatrice) REFERENCES enseigne(id)
);

-- TABLE INSCRIPTION
CREATE TABLE inscription(
    id INT NOT NULL AUTO_INCREMENT,
    id_joueur INT NOT NULL,
    id_tournoi INT NOT NULL,
    date_inscription DATETIME NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(id_joueur) REFERENCES joueur(id),
    FOREIGN KEY(id_tournoi) REFERENCES tournoi(id)
);

-- TABLE PORTEFEUILLE
CREATE TABLE portefeuille(
    id INT NOT NULL AUTO_INCREMENT,
    date_creation DATETIME NOT NULL,
    solde DECIMAL(10,2) NOT NULL DEFAULT 0,
    id_joueur INT NOT NULL UNIQUE,
    PRIMARY KEY(id),
    FOREIGN KEY(id_joueur) REFERENCES joueur(id)
);

-- TABLE STRIPE
CREATE TABLE stripe(
    id INT NOT NULL AUTO_INCREMENT,
    montant_euros DECIMAL(10,2) NOT NULL,
    montant_credit INT NOT NULL,
    stripe_payment_id VARCHAR(255) NOT NULL UNIQUE,
    date_paiement DATETIME NOT NULL,
    statut_paiement VARCHAR(50),
    id_portefeuille INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(id_portefeuille) REFERENCES portefeuille(id)
);

-- TABLE RESULTAT
CREATE TABLE resultat(
    id INT NOT NULL AUTO_INCREMENT,
    classement INT NOT NULL,
    score INT,
    gain_credit INT DEFAULT 0,
    statut_attribution VARCHAR(50),
    date_attribution DATETIME,
    id_inscription INT NOT NULL UNIQUE,
    PRIMARY KEY(id),
    FOREIGN KEY(id_inscription) REFERENCES inscription(id)
);

-- TABLE MOUVEMENT_CREDIT
CREATE TABLE mouvement_credit(
    id INT NOT NULL AUTO_INCREMENT,
    type_mouvement VARCHAR(50) NOT NULL,
    montant INT NOT NULL,
    description TEXT,
    source VARCHAR(255),
    date_mouvement DATETIME NOT NULL,
    id_portefeuille INT NOT NULL,
    id_stripe INT UNIQUE,
    id_resultat INT,
    id_inscription INT,
    PRIMARY KEY(id),
    FOREIGN KEY(id_portefeuille) REFERENCES portefeuille(id),
    FOREIGN KEY(id_stripe) REFERENCES stripe(id),
    FOREIGN KEY(id_resultat) REFERENCES resultat(id),
    FOREIGN KEY(id_inscription) REFERENCES inscription(id)
);
