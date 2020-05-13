DROP DATABASE IF EXISTS PPE2;

CREATE DATABASE PPE2
CHARACTER SET utf8;
USE PPE2;

CREATE TABLE Client
(
    idClient INT(11) NOT NULL AUTO_INCREMENT,
    MotDePasse VARCHAR(64),
    Identifiant VARCHAR(64),
    email VARCHAR(64),
    adresse VARCHAR(64),
    PRIMARY KEY (idClient)
);

CREATE TABLE Commande
(
    idCommande INT(11) NOT NULL AUTO_INCREMENT,
    idTacos INT(11),
    idSupplement INT(11),
    prix FLOAT,
    PRIMARY KEY(idCommande)
);

CREATE TABLE Client_Commande
(
    idClient INT(11),
    idCommande INT(11),
    PRIMARY KEY (idClient,idCommande)
);


CREATE TABLE Tacos 
(
    idTacos INT(11),
    Taille VARCHAR(64),
    Viande1 VARCHAR(64),
    Viande2 VARCHAR(64),
    Viande3 VARCHAR(64),
    Sauce VARCHAR(64),
    Sauce2 VARCHAR(64),
    prix FLOAT,
    PRIMARY KEY (idTacos)
);

CREATE TABLE Supplement
(
    idSupplement INT(11),
    FRITE TINYINT,
    POTATOES TINYINT,
    prix FLOAT,
    PRIMARY KEY(idSupplement)
);

CREATE TABLE Commande_Tacos
(
    idCommande INT(11),
    idTacos INT(11),
    PRIMARY KEY (idCommande,idTacos)
);

CREATE TABLE Commande_Supplement
(
    idCommande INT(11),
    idSupplement INT(11),
    PRIMARY KEY (idCommande,idSupplement)
);

ALTER TABLE Client_Commande
ADD CONSTRAINT Client_Commande_idClient
FOREIGN KEY(idClient)
REFERENCES Client(idClient);

ALTER TABLE Client_Commande
ADD CONSTRAINT Client_Commande_idCommande
FOREIGN KEY(idCommande)
REFERENCES Commande(idCommande);

ALTER TABLE Commande_Tacos
ADD CONSTRAINT Commande_Tacos_idTacos
FOREIGN KEY(idTacos)
REFERENCES Tacos(idTacos);

ALTER TABLE Commande_Supplement
ADD CONSTRAINT Commande_Supplement_idSupplement
FOREIGN KEY(idSupplement)
REFERENCES Supplement(idSupplement);

ALTER TABLE Commande_Tacos
ADD CONSTRAINT Commande_Tacos_idCommande
FOREIGN KEY(idCommande)
REFERENCES Commande(idCommande);

ALTER TABLE Commande_Supplement
ADD CONSTRAINT Commande_Supplement_idCommande
FOREIGN KEY(idCommande)
REFERENCES Commande(idCommande);