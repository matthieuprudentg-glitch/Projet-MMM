-- ===== SCHEMA : creation des tables =====
-- Schema SQL - Projet PPE MMM
-- A importer dans MySQL/MariaDB

CREATE TABLE IF NOT EXISTS joueurs (
    id                  INT PRIMARY KEY AUTO_INCREMENT,
    pseudo              VARCHAR(50)  NOT NULL UNIQUE,
    email               VARCHAR(150) NOT NULL UNIQUE,
    mdp                 VARCHAR(255) NOT NULL,
    date_creation       DATETIME DEFAULT CURRENT_TIMESTAMP,
    statut_verification TINYINT(1) DEFAULT 0,
    date_verification   DATETIME
);

CREATE TABLE IF NOT EXISTS jeux (
    id          INT PRIMARY KEY AUTO_INCREMENT,
    nom         VARCHAR(100) NOT NULL,
    categorie   VARCHAR(50),
    img_logo    VARCHAR(255),
    img_banniere VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS tournois (
    id               INT PRIMARY KEY AUTO_INCREMENT,
    nom              VARCHAR(150) NOT NULL,
    description      TEXT,
    prix_access      INT NOT NULL,
    cashprice        INT DEFAULT 0,
    nb_place         INT NOT NULL,
    date_debut       DATETIME NOT NULL,
    date_fin         DATETIME,
    statut           ENUM('brouillon','ouvert','complet','termine') DEFAULT 'brouillon',
    type_tournoi     VARCHAR(50),
    type_organisateur ENUM('pro','amateur') DEFAULT 'amateur',
    id_jeu           INT,
    id_organisateur  INT,
    FOREIGN KEY (id_jeu)          REFERENCES jeux(id),
    FOREIGN KEY (id_organisateur) REFERENCES joueurs(id)
);

CREATE TABLE IF NOT EXISTS inscriptions (
    id               INT PRIMARY KEY AUTO_INCREMENT,
    statut           ENUM('inscrit','en_attente','annule') DEFAULT 'inscrit',
    id_joueur        INT NOT NULL,
    id_tournoi       INT NOT NULL,
    date_inscription DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_joueur)  REFERENCES joueurs(id),
    FOREIGN KEY (id_tournoi) REFERENCES tournois(id)
);

CREATE TABLE IF NOT EXISTS portefeuilles (
    id            INT PRIMARY KEY AUTO_INCREMENT,
    solde         INT DEFAULT 0,
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP,
    id_joueur     INT UNIQUE NOT NULL,
    FOREIGN KEY (id_joueur) REFERENCES joueurs(id)
);

CREATE TABLE IF NOT EXISTS packs_credits (
    id           INT PRIMARY KEY AUTO_INCREMENT,
    nom          VARCHAR(50)    NOT NULL,
    credits      INT            NOT NULL,
    prix_euros   DECIMAL(6,2)   NOT NULL,
    est_populaire TINYINT(1) DEFAULT 0
);

CREATE TABLE IF NOT EXISTS mouvements_credits (
    id             INT PRIMARY KEY AUTO_INCREMENT,
    type_mouvement ENUM('achat','inscription','gain','remboursement'),
    montant        INT NOT NULL,
    description    VARCHAR(255),
    source         VARCHAR(100),
    date_mouvement DATETIME DEFAULT CURRENT_TIMESTAMP,
    id_joueur      INT NOT NULL,
    FOREIGN KEY (id_joueur) REFERENCES joueurs(id)
);

CREATE TABLE IF NOT EXISTS resultats (
    id                 INT PRIMARY KEY AUTO_INCREMENT,
    classement         INT,
    score              INT,
    gain_credit        INT DEFAULT 0,
    statut_attribution ENUM('en_attente','attribue') DEFAULT 'en_attente',
    date_attribution   DATETIME,
    id_inscription     INT NOT NULL,
    FOREIGN KEY (id_inscription) REFERENCES inscriptions(id)
);


-- ===== JEU DE DONNEES : donnees factices =====
-- Donnees factices - Projet PPE MMM

INSERT INTO jeux (nom, categorie) VALUES
('Street Fighter', 'Jeu de combat'),
('GTA VI',         'Action'),
('Dragon Ball FighterZ', 'Jeu de combat'),
('Resident Evil',  'Survie-horreur'),
('Mega Man',       'Plateforme');

INSERT INTO packs_credits (nom, credits, prix_euros, est_populaire) VALUES
('STARTER', 50,  5.00,  0),
('JOUEUR',  120, 10.00, 1),
('PRO',     300, 22.00, 0),
('ULTIME',  700, 45.00, 0);

INSERT INTO joueurs (pseudo, email, mdp, statut_verification) VALUES
('Pseudo du joueur', 'joueur@exemple.fr', '$2y$12$hashfactice', 1),
('Ryu92',            'ryu@exemple.fr',    '$2y$12$hashfactice', 1),
('HunterPro',        'hunter@exemple.fr', '$2y$12$hashfactice', 1);

INSERT INTO portefeuilles (solde, id_joueur) VALUES
(120, 1),
(80,  2),
(300, 3);

INSERT INTO tournois (nom, description, prix_access, nb_place, date_debut, statut, type_tournoi, id_jeu, id_organisateur) VALUES
('Street Fighter Edition Hiver', 'Tournoi 1v1 elimination directe',       120, 32, '2026-12-14 14:00:00', 'ouvert',  'elimination', 1, 2),
('GTA VI',                       'Courses et braquage en duos sur Vice City',80,  16, '2026-12-20 10:00:00', 'ouvert',  'coop',        2, 3),
('Dragon Ball FighterZ',         'Duel 3v3 style maximum, elimination',     100, 24, '2027-01-05 15:00:00', 'complet', 'duel',        3, 2),
('Resident Evil',                'Survie solo, meilleur score 60 minutes', 60,  20, '2027-01-12 18:00:00', 'ouvert',  'survie',      4, 3),
('Mega Man Speedrun',            'Speedrun any%, meilleur temps valide',   40,  48, '2027-01-18 12:00:00', 'ouvert',  'speedrun',    5, 1);

INSERT INTO inscriptions (statut, id_joueur, id_tournoi) VALUES
('inscrit',    1, 1),
('inscrit',    1, 2),
('en_attente', 1, 5);
