CREATE DATABASE GestionCommande;
USE GestionCommande;

-- Table Client
CREATE TABLE Client (
    idClient INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    telephone VARCHAR(20),
    adresse VARCHAR(100)
);

-- Table Produit
CREATE TABLE Produit (
    idProduit INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    prix DECIMAL(10,2),
    quantite INT
);

-- Table Gerant
CREATE TABLE Gerant (
    idGerant INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    telephone VARCHAR(20)
);

-- Table Livreur
CREATE TABLE Livreur (
    idLivreur INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    telephone VARCHAR(20),
    matriculeMoto VARCHAR(30)
);

-- Table Commande
CREATE TABLE Commande (
    idCommande INT PRIMARY KEY AUTO_INCREMENT,
    dateCommande DATE,
    montant DECIMAL(10,2),
    statut VARCHAR(30),
    idClient INT,
    idLivreur INT,
    
    FOREIGN KEY (idClient) REFERENCES Client(idClient),
    FOREIGN KEY (idLivreur) REFERENCES Livreur(idLivreur)
);

-- Table DetailCommande
CREATE TABLE DetailCommande (
    idProduit INT,
    idCommande INT,
    quantite INT,
    montant DECIMAL(10,2),

    PRIMARY KEY (idProduit, idCommande),

    FOREIGN KEY (idProduit) REFERENCES Produit(idProduit),
    FOREIGN KEY (idCommande) REFERENCES Commande(idCommande)
);

-- Table Facture
CREATE TABLE Facture (
    idFacture INT PRIMARY KEY AUTO_INCREMENT,
    dateFacture DATE,
    montant DECIMAL(10,2),
    idCommande INT UNIQUE,

    FOREIGN KEY (idCommande) REFERENCES Commande(idCommande)
);

-- Table Paiement
CREATE TABLE Paiement (
    idPaiement INT PRIMARY KEY AUTO_INCREMENT,
    datePaiement DATE,
    montant DECIMAL(10,2),
    typePaiement VARCHAR(30),
    idFacture INT,

    FOREIGN KEY (idFacture) REFERENCES Facture(idFacture)
);