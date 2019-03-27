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
    metal VARCHAR(25) NULL,
    matiere VARCHAR(15) NULL,
    largeur VARCHAR(15) NULL,
    hauteur VARCHAR(15) NULL,
    poidsMoyen VARCHAR(15) NULL,
	poidsMin VARCHAR(15) NULL,
	poidsMax VARCHAR(15) NULL,
    poidsCarats VARCHAR(15) NULL,
    rhodiage BOOLEAN NULL,
    pierreCentrale VARCHAR(15) NULL,
    poidsPierreCentrale DECIMAL NULL,
    nombrePierreCentrale TINYINT UNSIGNED NULL,
    couleurPierreCentre VARCHAR(15) NULL,
    couleur VARCHAR(15) NULL,
    typePerle VARCHAR(15) NULL,
    diametrePerle VARCHAR(15) NULL,
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
INSERT INTO genreProduit(nomGenre) VALUES ('Bague Pierre Fine');
INSERT INTO genreProduit(nomGenre) VALUES ('Bague Ceramique');
INSERT INTO genreProduit(nomGenre) VALUES ('Bague Or');

INSERT INTO produit(genreProduit, nomProduit, refProduit, prixProduit, metal, matiere, largeur, hauteur, poids, poidsCarats, rhodiage, pierreCentrale, poidsPierreCentrale, 
                    nombrePierreCentrale, couleurPierreCentre, typePerle, diametrePerle, nombrePerle, typePierrePavage, formePierrePavage, couleurPierrePavage, 
                    puretePierrePavage, nombrePierrePavage, typeDeSerti, descriptionProduit, sexe, fabriquant, refFabriquant, imageProduit) VALUES ();

INSERT INTO produit(genreProduit, nomProduit, refProduit, prixProduit, metal, poidsMoyen, rhodiage, pierreCentrale,
                    couleurPierreCentre, typePerle, couleur, diametrePerle, nombrePerle, descriptionProduit, fabriquant, imageProduit) 
                    VALUES ('Bague Perle','Bague Marae','3929',169.00,'Or Blanc 18 carats','0.90 gramme',TRUE,'Perle','Noire','5,00 - 5,50 mm',1,'Ravissante bague en or blanc palladié rhodié 18 carats composée d&#39;un fil en argent couronné d&#39;une perle de culture d&#39;eau douce d&#39;un diamètre de
5,00 millimètres.
Poids d&#39;or moyen : 0,90 gramme.
Modernes et élégantes, toutes en rondeur et en mouvement, les créations JOELLI mêlent allure et raffinement pour sublimer la féminité.
Plaisir au toucher et au regard, proportions parfaites, pluie de diamants ou tourbillon de couleurs, JOELLI est un hymne au sens...
Les pierres précieuses sont naturelles. Chaque rubis, saphir, émeraude est unique. Leur couleur change selon l&#39;ambiance lumineuse. Les bijoux
JOELLI proposent un standard de qualité joaillerie par la taille, la couleur et la pureté de chaque pierre. Et conformément aux résolutions des
Nations Unies, les diamants JOELLI proviennent de sources officielles non liées au financement de conflits.', 'Joelli','..\content\files\imgCatalogue\Bague_Marae_Grande.png');