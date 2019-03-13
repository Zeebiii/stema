DROP DATABASE IF EXISTS stema2;
CREATE DATABASE stema2;
USE stema2;

-- ============================================================
--   Création des tables                                
-- ============================================================

CREATE TABLE genreProduit(
    id INT NOT NULL AUTO_INCREMENT,
    nomGenre VARCHAR(30) NOT NULL,
    CONSTRAINT PK_idGenreProduit PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE produit(
    idProduit INT NOT NULL AUTO_INCREMENT,
    genreProduit INT NOT NULL,
    nomProduit VARCHAR(30) NULL,
    refProduit VARCHAR(15) NULL,
    prixProduit DECIMAL NULL,
    metal VARCHAR(15) NULL,
    matiere VARCHAR(15) NULL,
    largeur DECIMAL NULL,
    hauteur DECIMAL NULL,
    poidsMoyen DECIMAL NULL,
	poidsMin DECIMAL NULL,
	poidsMax DECIMAL NULL,
    poidsCarats DECIMAL NULL,
    rhodiage BOOLEAN NULL,
    pierreCentrale VARCHAR(15) NULL,
    poidsPierreCentrale DECIMAL NULL,
    nombrePierreCentrale TINYINT UNSIGNED NULL,
    couleurPierreCentre VARCHAR(15) NULL,
    typePerle VARCHAR(15) NULL,
    diametrePerle DECIMAL NULL,
    nombrePerle TINYINT UNSIGNED NULL,
    typePierrePavage VARCHAR(15) NULL,
    formePierrePavage VARCHAR(15) NULL,
    couleurPierrePavage VARCHAR(15) NULL, -- H
    puretePierrePavage VARCHAR(15) NULL,
    nombrePierrePavage TINYINT UNSIGNED NULL,
    typeDeSerti VARCHAR(15) NULL,
    descriptionProduit TEXT NULL,
    sexe VARCHAR(15) NULL,
    fabriquant VARCHAR(15) NULL,
    refFabriquant VARCHAR(15) NULL,
    imageProduit VARCHAR(255) NULL,
    CONSTRAINT PK_idProduit PRIMARY KEY (idProduit),
    CONSTRAINT FK_genreProduit FOREIGN KEY (genreProduit) REFERENCES genreProduit(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ============================================================
--   Insertion des enregistrements
-- ============================================================

INSERT INTO genreProduit(nomGenre) VALUES ('Bague Perle');
INSERT INTO genreProduit(nomGenre) VALUES ('Bague Pierre Fene');
INSERT INTO genreProduit(nomGenre) VALUES ('Bague Ceramique');
INSERT INTO genreProduit(nomGenre) VALUES ('Bague Or');

INSERT INTO produit(genreProduit, nomProduit, refProduit, prixProduit, metal, matiere, largeur, hauteur, poids, poidsCarats, rhodiage, pierreCentrale, poidsPierreCentrale, 
                    nombrePierreCentrale, couleurPierreCentre, typePerle, diametrePerle, nombrePerle, typePierrePavage, formePierrePavage, couleurPierrePavage, 
                    puretePierrePavage, nombrePierrePavage, typeDeSerti, descriptionProduit, sexe, fabriquant, refFabriquant, imageProduit) 
VALUES ()