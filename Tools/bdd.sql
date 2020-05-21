DROP DATABASE IF EXISTS PPE2;

CREATE DATABASE PPE2
CHARACTER SET utf8;
USE PPE2;

CREATE TABLE Client
(
    idClient INT(11) NOT NULL AUTO_INCREMENT,
    MotDePasse VARCHAR(64),
    nom VARCHAR(64),
    prenom VARCHAR(64),
    Identifiant VARCHAR(64),
    email VARCHAR(64),
    adresse VARCHAR(64),
    codePostal INT(11),
    dateNaissance date,
    PRIMARY KEY (idClient)
);

CREATE TABLE Commande
(
    idCommande INT(11) NOT NULL AUTO_INCREMENT,
    idClient INT(11),
    Taille VARCHAR(64),
    Viande1 VARCHAR(64),
    Viande2 VARCHAR(64),
    Viande3 VARCHAR(64),
    Sauce VARCHAR(64),
    Sauce2 VARCHAR(64),
    FRITE TINYINT,
    POTATOES TINYINT,
    BOISSON VARCHAR(64),
    prix FLOAT,
    PRIMARY KEY(idCommande,idClient)
);

ALTER TABLE Commande
ADD CONSTRAINT Commande_idClient
FOREIGN KEY(idClient)
REFERENCES Client(idClient);
