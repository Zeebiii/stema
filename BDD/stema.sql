
DROP DATABASE IF EXISTS stema;
CREATE DATABASE stema;
USE stema;   

-- ============================================================
--   Création des tables                                
-- ============================================================

CREATE TABLE metal (
    idMetal INT NOT NULL AUTO_INCREMENT,
    libelleMetal VARCHAR(30) NOT NULL,
    CONSTRAINT PK_idMetal PRIMARY KEY (idMetal)
) ENGINE=InnoDB DEFAULT CHARSET=latin1; 


CREATE TABLE rhodiage (
    idRhodiage INT NOT NULL AUTO_INCREMENT,
    rhodiage VARCHAR(3) NOT NULL,
    CONSTRAINT PK_idRhodage PRIMARY KEY (idRhodiage)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;   

CREATE TABLE pierreCentrale (
    idPierreCentrale INT NOT NULL AUTO_INCREMENT,
    libellePierreCentrale VARCHAR(30) NOT NULL,
    CONSTRAINT PK_idPierreCenrale PRIMARY KEY (idPierreCentrale)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;   

CREATE TABLE perle (
    idPerle INT NOT NULL AUTO_INCREMENT,
    typePerle VARCHAR(30) NOT NULL,
    CONSTRAINT PK_idPerle PRIMARY KEY (idPerle)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;   


CREATE TABLE fabricant (
    idFabricant INT NOT NULL AUTO_INCREMENT,
    libelleFabricant VARCHAR(30),
    refFabricant VARCHAR(30),
    CONSTRAINT PK_idFabricant PRIMARY KEY (idFabricant)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;   


CREATE TABLE typePierrePavage (
    idTypePierrePavage INT NOT NULL AUTO_INCREMENT,
    libellePierrePavage VARCHAR(30),
    CONSTRAINT PK_idTypePierrePavage PRIMARY KEY (idTypePierrePavage)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;  

CREATE TABLE formePierrePavage (
    idFormePierrePavage INT NOT NULL AUTO_INCREMENT,
    libelleFormePierrePavage VARCHAR(30),
    CONSTRAINT PK_idFormePierrePavage PRIMARY KEY (idFormePierrePavage)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;  

CREATE TABLE purete (
    idPurete INT NOT NULL AUTO_INCREMENT, 
    purete VARCHAR(10),
    CONSTRAINT PK_idPurete PRIMARY KEY (idPurete)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;  

CREATE TABLE serti (
    idSerti INT NOT NULL AUTO_INCREMENT,
    typeSerti VARCHAR (30),
    CONSTRAINT PK_idSerti PRIMARY KEY (idSerti)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;  

CREATE TABLE formePierreCentrale (
    idFormePierreCentrale INT NOT NULL AUTO_INCREMENT,
    libelleFormePierreCentrale VARCHAR(30),
    CONSTRAINT PK_IdFormePierreCentrale PRIMARY KEY (idFormePierreCentrale)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;  

CREATE TABLE couleur (
    idCouleur INT NOT NULL AUTO_INCREMENT, 
    libelleCouleur VARCHAR(30),
	CONSTRAINT PK_couleur PRIMARY KEY (idCouleur)
) ENGINE=InnoDB DEFAULT CHARSET=latin1; 

CREATE TABLE matiere (
    idMatiere INT NOT NULL AUTO_INCREMENT,
    libelleMatiere VARCHAR(15),
    CONSTRAINT PK_idMatiere PRIMARY KEY (idMatiere)
) ENGINE=InnoDB DEFAULT CHARSET=latin1; 

CREATE TABLE couleur2(
    idCouleur2 INT NOT NULL AUTO_INCREMENT,
    libelleCouleur2 VARCHAR(30),
    CONSTRAINT PK_idCouleur2 PRIMARY KEY (idCouleur2)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE sexe (
    idSexe INT NOT NULL AUTO_INCREMENT,
    libelleSexe VARCHAR(15),
    CONSTRAINT PK_idSexe PRIMARY KEY (idSexe)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE baguePerle (
    idBaguePerle INT NOT NULL AUTO_INCREMENT,
    libelleBaguePerle VARCHAR(30) NOT NULL,
    refBaguePerle VARCHAR(15) NOT NULL,
    metalBaguePerle INT NULL,
    poidsMoyMontureBaguePerle VARCHAR(15) NULL,
    rhodiageBaguePerle INT NULL,
    pierreCentraleBaguePerle INT NULL,
    couleurBaguePerle INT NULL, 
    typePerleBaguePerle INT NULL,
    fabricantBaguePerle INT NULL,
    diametrePerleBaguePerle VARCHAR(15) NULL, 
    nbPerleBaguePerle INT NULL,
    typeSertiBaguePerle INT NULL,
    poidsTotalCaraBaguePerle VARCHAR(20) NULL,
    pureteBaguePerle  INT NULL,
    nbPierreBaguePerle  INT NULL,
    typePierrePavageBaguePerle  INT NULL,
    formePierrePavageBaguePerle  INT NULL,
    prixBaguePerle DECIMAL NULL,
    CONSTRAINT PK_idBaguePerle PRIMARY KEY (idBaguePerle),
    CONSTRAINT FK_metalBaguePerle FOREIGN KEY (metalBaguePerle) REFERENCES metal (idMetal),
    CONSTRAINT FK_rhodiageBaguePerle FOREIGN KEY (rhodiageBaguePerle) REFERENCES rhodiage (idRhodiage),
    CONSTRAINT FK_pierreCentraleBaguePerle FOREIGN KEY (pierreCentraleBaguePerle) REFERENCES pierreCentrale (idPierreCentrale),
    CONSTRAINT FK_couleur FOREIGN KEY (couleurBaguePerle) REFERENCES couleur (idCouleur),
    CONSTRAINT FK_typePerle FOREIGN KEY (typePerleBaguePerle) REFERENCES perle (idPerle),
    CONSTRAINT FK_fabricantBaguePerle FOREIGN KEY (fabricantBaguePerle) REFERENCES fabricant (idFabricant),
    CONSTRAINT FK_sertiBaguePerle FOREIGN KEY (typeSertiBaguePerle) REFERENCES serti (idSerti),
    CONSTRAINT FK_pureteBaguePerle FOREIGN KEY (pureteBaguePerle) REFERENCES purete (idPurete),
    CONSTRAINT FK_typePierrePavage FOREIGN KEY (typePierrePavageBaguePerle) REFERENCES typePierrePavage (idTypePierrePavage),
    CONSTRAINT FK_formePierrePavage FOREIGN KEY (formePierrePavageBaguePerle) REFERENCES formePierrePavage (idFormePierrePavage)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE bagueOr (
    idBagueOr INT NOT NULL AUTO_INCREMENT,
    libelleBagueOr VARCHAR(30) NOT NULL,
    refBagueOr VARCHAR(15) NOT NULL,
    metalBagueOr INT NULL,
    poidsMoyMontureBagueOr VARCHAR(15) NULL,
    hauteurBagueOr VARCHAR(15) NULL,
    epaisseurBagueOr VARCHAR(15) NULL,
    largeurBagueOr VARCHAR(15) NULL,
    rhodiageBagueOr INT NULL,
    prixBagueOr DECIMAL NULL,
    CONSTRAINT PK_idBagueOr PRIMARY KEY (idBagueOr),
    CONSTRAINT FK_metalBagueOr FOREIGN KEY (metalBagueOr) REFERENCES metal (idMetal),
    CONSTRAINT FK_rhodiageBagueOr FOREIGN KEY (rhodiageBagueOr) REFERENCES rhodiage (idRhodiage)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- hauteurBagueOr ATTENTION en FLOAT, si jamais probleme avec entree de meme pour epaisseurBagueOr

CREATE TABLE baguePierreFine (
    idBaguePierreFine INT NOT NULL AUTO_INCREMENT,
    libelleBaguePierreFine VARCHAR(30) NOT NULL,
    refBaguePierreFine VARCHAR(15) NOT NULL,
    prixBaguePierreFine DECIMAL, 
    metalBaguePierreFine INT,
    poidsMoyMontureBaguePierreFine VARCHAR(15),
    pierreCentraleBaguePierreFine INT,
    formePierreCentraleBaguePierreFine INT,
    poidsPierreCentraleBaguePierreFine VARCHAR(15),
    nbPierreCentraleBaguePierreFine INT,
    typeSertiBaguePierreFine INT,
    fabricantBaguePierreFine INT,
    poidsTotalCaraBaguePierreFine VARCHAR(15),
    sexeBaguePierreFine INT,
    CONSTRAINT PK_idBaguePierreFine PRIMARY KEY (idBaguePierreFine),
    CONSTRAINT FK_metalBaguePierreFine FOREIGN KEY (metalBaguePierreFine) REFERENCES metal (idMetal),
    CONSTRAINT FK_pierreCentraleBaguePierreFine FOREIGN KEY (pierreCentraleBaguePierreFine) REFERENCES pierreCentrale (idPierreCentrale),
    CONSTRAINT FK_formePierreCentraleBaguePierreFine FOREIGN KEY (formePierreCentraleBaguePierreFine) REFERENCES formePierreCentrale (idFormePierreCentrale),
    CONSTRAINT FK_typeSertiBaguePierreFine FOREIGN KEY (typeSertiBaguePierreFine) REFERENCES serti (idSerti),
    CONSTRAINT FK_fabricantBaguePierreFine FOREIGN KEY (fabricantBaguePierreFine) REFERENCES fabricant (idFabricant),
    CONSTRAINT FK_sexeBaguePierreFine FOREIGN KEY (sexeBaguePierreFine) REFERENCES sexe (idSexe)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE bagueCeramique (
    idBagueCeramique INT NOT NULL AUTO_INCREMENT,
    libelleBagueCeramique VARCHAR(30) NOT NULL,
    refBagueCeramique VARCHAR(15) NOT NULL,
    prixBagueCeramique DECIMAL, 
    matiereBagueCeramique INT,
    couleurBagueCeramique INT,
    largeurBagueCeramique VARCHAR(15),
    sexeBagueCeramique INT,
    fabricantBagueCeramique INT,
    metalBagueCeramique INT,
    poidsMoyMontureBagueCeramique VARCHAR(15),
    rhodiageBagueCeramique INT,
    typePierrePavageBagueCeramique INT,
    formePierrePavageBagueCeramique INT,
    nbPierreBagueCeramique INT,
    poidsTotalCaraBagueCeramique VARCHAR(15),
    pureteBagueCeramique INT,
    typeSertiBagueCeramique INT,
    epaisseurBagueCeramique VARCHAR(15),
    couleur2BagueCeramique INT,
    CONSTRAINT PK_idBagueCeramique PRIMARY KEY (idBagueCeramique),
    CONSTRAINT FK_matiereBagueCeramique FOREIGN KEY (matiereBagueCeramique) REFERENCES matiere (idMatiere),
    CONSTRAINT FK_couleurBagueCeramique FOREIGN KEY (couleurBagueCeramique) REFERENCES couleur (idCouleur),
    CONSTRAINT FK_fabricantBagueCeramique FOREIGN KEY (fabricantBagueCeramique) REFERENCES fabricant (idFabricant),
    CONSTRAINT FK_metalBagueCeramique FOREIGN KEY (metalBagueCeramique) REFERENCES metal (idMetal),
    CONSTRAINT FK_rhodiageBagueCeramique FOREIGN KEY (rhodiageBagueCeramique) REFERENCES rhodiage (idRhodiage),
    CONSTRAINT FK_typePierrePavageBagueCeramique FOREIGN KEY (typePierrePavageBagueCeramique) REFERENCES typePierrePavage (idTypePierrePavage),
    CONSTRAINT FK_formePierrePavageBagueCeramique FOREIGN KEY (formePierrePavageBagueCeramique) REFERENCES formePierrePavage (idFormePierrePavage),
    CONSTRAINT FK_pureteBagueCeramique FOREIGN KEY (pureteBagueCeramique) REFERENCES purete (idPurete),
    CONSTRAINT FK_typeSertiBagueCeramique FOREIGN KEY (typeSertiBagueCeramique) REFERENCES serti (idSerti),
    CONSTRAINT FK_couleur2BagueCeramique FOREIGN KEY (couleur2BagueCeramique) REFERENCES couleur2 (idCouleur2),
    CONSTRAINT FK_sexeBagueCeramique FOREIGN KEY (sexeBagueCeramique) REFERENCES sexe (idSexe)
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE membre (
    idMembre INT NOT NULL AUTO_INCREMENT,
    pseudo VARCHAR(30) NOT NULL,
    mdp VARCHAR(255) NOT NULL,
    mail VARCHAR(255),
    CONSTRAINT PK_idMembre PRIMARY KEY (idMembre)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- ============================================================
--   Insertion des enregistrements
-- ============================================================


-- Table metal 

INSERT INTO metal VALUES ('1','Or Blanc 18 carats');
INSERT INTO metal VALUES ('2','Or Jaune 18 carats');
INSERT INTO metal VALUES ('3','Or Blanc 9 carats');
INSERT INTO metal VALUES ('4','Résine et Or Jaune 18 carats');
INSERT INTO metal VALUES ('5','Or Jaune et Blanc 18 carats');

-- Table Rhodiage 

INSERT INTO rhodiage VALUES ('1','Oui');
INSERT INTO rhodiage VALUES ('2','Non');

-- Table pierreCentrale

INSERT INTO pierreCentrale VALUES ('1','Perle');
INSERT INTO pierreCentrale VALUES ('2','Améthyste');
INSERT INTO pierreCentrale VALUES ('3','Quartz Fumé');

-- Table perle

INSERT INTO perle VALUES ('1','Eau douce');
INSERT INTO perle VALUES ('2','Tahiti');

-- Table fabricant 

INSERT INTO fabricant VALUES ('1','Joelli','');
INSERT INTO fabricant VALUES ('2','Bellon','');
INSERT INTO fabricant VALUES ('3','Guy Laroche','');
INSERT INTO fabricant VALUES ('4','Ultimate Ceramic','');
INSERT INTO fabricant VALUES ('5','Jeell','');

-- Table typePierrePavage 

INSERT INTO typePierrePavage VALUES ('1','Diamants');

-- Table formePierrePavage 

INSERT INTO formePierrePavage VALUES ('1','Brillants');

-- Table purete 

INSERT INTO purete VALUES ('1','SI1');
INSERT INTO purete VALUES ('2','P1');
INSERT INTO purete VALUES ('3','SI2');

-- Table serti

INSERT INTO serti VALUES ('1','Serti à Grains');
INSERT INTO serti VALUES ('2','Serti à Griffes');
INSERT INTO serti VALUES ('3','Serti Clos');

-- Table formePierreCentrale 

INSERT INTO formePierreCentrale VALUES ('1','Lentille');
INSERT INTO formePierreCentrale VALUES ('2','Fleur');
INSERT INTO formePierreCentrale VALUES ('3','Brillants');
INSERT INTO formePierreCentrale VALUES ('4','Ovale');

-- Table couleur 

INSERT INTO couleur VALUES ('1','Noir');
INSERT INTO couleur VALUES ('2','H');
INSERT INTO couleur VALUES ('3','Parme');
INSERT INTO couleur VALUES ('4','Blanc');

-- Table matiere 

INSERT INTO matiere VALUES ('1','Céramique'); 

-- Table couleur2

INSERT INTO couleur2 VALUES ('1','H');

-- Table sexe

INSERT INTO sexe VALUES ('1','Femme');
INSERT INTO sexe VALUES ('2','Homme');

-- Table baguePerle

INSERT INTO baguePerle (idBaguePerle, libelleBaguePerle, refBaguePerle, metalBaguePerle, poidsMoyMontureBaguePerle, rhodiageBaguePerle, pierreCentraleBaguePerle, couleurBaguePerle, typePerleBaguePerle, fabricantBaguePerle, diametrePerleBaguePerle, nbPerleBaguePerle,prixBaguePerle) VALUES ('1','Bague Marae','3929','1','0,90 gr','1','1','1','1','1','5mm','1','169');
INSERT INTO baguePerle (idBaguePerle, libelleBaguePerle, refBaguePerle, metalBaguePerle, poidsMoyMontureBaguePerle, typePerleBaguePerle, diametrePerleBaguePerle, nbPerleBaguePerle, prixBaguePerle ) VALUES ('2','Bague Only Tahiti','5157','2','1,90 gr','2','9,00 mm','1','289');
INSERT INTO baguePerle (idBaguePerle, libelleBaguePerle, refBaguePerle, metalBaguePerle, poidsMoyMontureBaguePerle, pierreCentraleBaguePerle,typePerleBaguePerle, diametrePerleBaguePerle,nbPerleBaguePerle,fabricantBaguePerle, prixBaguePerle) VALUES ('3','Bague Paea','3927','2','0,90 gr','1','1','5,50 mm','1','1','159');
INSERT INTO baguePerle (idBaguePerle, libelleBaguePerle, refBaguePerle, metalBaguePerle, poidsMoyMontureBaguePerle, rhodiageBaguePerle, pierreCentraleBaguePerle, typePerleBaguePerle, diametrePerleBaguePerle,nbPerleBaguePerle, fabricantBaguePerle, prixBaguePerle) VALUES ('4','Bague Morgana','3928','1','1 gr','1','1','1','5,50 mm','1','1','169');
INSERT INTO baguePerle (idBaguePerle, libelleBaguePerle, refBaguePerle, metalBaguePerle, poidsMoyMontureBaguePerle,rhodiageBaguePerle,pierreCentraleBaguePerle,typePierrePavageBaguePerle,nbPierreBaguePerle,poidsTotalCaraBaguePerle,couleurBaguePerle,pureteBaguePerle, typeSertiBaguePerle,typePerleBaguePerle, diametrePerleBaguePerle,nbPerleBaguePerle, prixBaguePerle) VALUES ('5','Bague Griffon Perlé','3357','1','5,50 gr','1','1','1','17','0,15 carat','2','1','1','2','9,50 mm','1','1790');
INSERT INTO baguePerle (idBaguePerle, libelleBaguePerle, refBaguePerle, metalBaguePerle, poidsMoyMontureBaguePerle,rhodiageBaguePerle,pierreCentraleBaguePerle, typePierrePavageBaguePerle, formePierrePavageBaguePerle, poidsTotalCaraBaguePerle,couleurBaguePerle,pureteBaguePerle,typeSertiBaguePerle,typePerleBaguePerle,diametrePerleBaguePerle,nbPerleBaguePerle,prixBaguePerle) VALUES ('6','Bague Electre Or Blanc','2489','1','6,50 gr','1','1','1','1','0,75 carat','2','1','1','2','12 mm','1','2999');


-- Table bagueOr

INSERT INTO bagueOr (idBagueOr, libelleBagueOr, refBagueOr, metalBagueOr, poidsMoyMontureBagueOr,hauteurBagueOr,epaisseurBagueOr, prixBagueOr) VALUES ('1','Bague Angel Or Jaune','2679','2','1,25 gr','9,0 mm','9,0 mm','109');
INSERT INTO bagueOr (idBagueOr, libelleBagueOr, refBagueOr, metalBagueOr, rhodiageBagueOr, poidsMoyMontureBagueOr,hauteurBagueOr,epaisseurBagueOr, prixBagueOr) VALUES ('2','Bague Angel Or Blanc','2691','1','1','1,25 gr','9,0 mm','9,0 mm','109');
INSERT INTO bagueOr (idBagueOr, libelleBagueOr, refBagueOr, metalBagueOr, poidsMoyMontureBagueOr, largeurBagueOr, epaisseurBagueOr, prixBagueOr) VALUES ('3','Bague Adorable Jaune','2197','2','1,80 gr','10,0 mm','10,0 mm','139');
INSERT INTO bagueOr (idBagueOr, libelleBagueOr, refBagueOr, metalBagueOr, poidsMoyMontureBagueOr, rhodiageBagueOr, prixBagueOr) VALUES ('4','Bague Ellipses','2182','5','9,85 gr','1','790');
INSERT INTO bagueOr (idBagueOr, libelleBagueOr, refBagueOr, metalBagueOr, poidsMoyMontureBagueOr, rhodiageBagueOr, prixBagueOr) VALUES ('5','Bague Brindille Or Blanc','4554','3','0,73 gr','1','69');

-- Table bagueCeramique 

INSERT INTO bagueCeramique (idBagueCeramique, libelleBagueCeramique, refBagueCeramique, matiereBagueCeramique, couleurBagueCeramique, largeurBagueCeramique, sexeBagueCeramique, fabricantBagueCeramique, prixBagueCeramique) VALUES ('1','Bague Black Sparkle','5820','1','1','2,50 mm','1','3','45');
INSERT INTO bagueCeramique (idBagueCeramique, libelleBagueCeramique, refBagueCeramique, metalBagueCeramique, poidsMoyMontureBagueCeramique, rhodiageBagueCeramique, matiereBagueCeramique, couleurBagueCeramique,largeurBagueCeramique,typePierrePavageBagueCeramique, nbPierreBagueCeramique, poidsTotalCaraBagueCeramique, couleur2BagueCeramique, pureteBagueCeramique, typeSertiBagueCeramique, sexeBagueCeramique, fabricantBagueCeramique, prixBagueCeramique) VALUES ('2','Bague Xavelite Noire Diamants','5381','3','0,45 gr','1','1','1','5,8 mm','1','5','0,01 carats','1','2','1','1','4','112');
INSERT INTO bagueCeramique (idBagueCeramique, libelleBagueCeramique, refBagueCeramique, metalBagueCeramique, poidsMoyMontureBagueCeramique, rhodiageBagueCeramique, matiereBagueCeramique, couleurBagueCeramique,typePierrePavageBagueCeramique, formePierrePavageBagueCeramique,poidsTotalCaraBagueCeramique,couleur2BagueCeramique, pureteBagueCeramique, typeSertiBagueCeramique, sexeBagueCeramique, fabricantBagueCeramique, prixBagueCeramique) VALUES ('3','Bague Nyx','5405','3','0,60 gr','1','1','1','1','1','0,03 carat','1','2','1','1','4','176');
INSERT INTO bagueCeramique (idBagueCeramique, libelleBagueCeramique, refBagueCeramique, metalBagueCeramique, poidsMoyMontureBagueCeramique, rhodiageBagueCeramique, matiereBagueCeramique, couleurBagueCeramique, largeurBagueCeramique, epaisseurBagueCeramique, typePierrePavageBagueCeramique, formePierrePavageBagueCeramique, poidsTotalCaraBagueCeramique, couleur2BagueCeramique, pureteBagueCeramique, typeSertiBagueCeramique, sexeBagueCeramique, fabricantBagueCeramique, prixBagueCeramique) VALUES ('4','Bague Hypnos','5406','3','0,95gr','1','1','1','8,00 mm','4,50 mm','1','1','0,10 carat','1','2','1','1','4','268');
INSERT INTO bagueCeramique (idBagueCeramique, libelleBagueCeramique, refBagueCeramique, metalBagueCeramique, poidsMoyMontureBagueCeramique, rhodiageBagueCeramique, matiereBagueCeramique, couleurBagueCeramique, typePierrePavageBagueCeramique, formePierrePavageBagueCeramique, poidsTotalCaraBagueCeramique, couleur2BagueCeramique, pureteBagueCeramique, typeSertiBagueCeramique, fabricantBagueCeramique, prixBagueCeramique) VALUES ('5','Bague White Dawn','5300','1','1,25 gr','1','1','4','1','1','0,27 carat','1','3','1','5','750');
INSERT INTO bagueCeramique (idBagueCeramique, libelleBagueCeramique, refBagueCeramique, metalBagueCeramique, poidsMoyMontureBagueCeramique, rhodiageBagueCeramique, matiereBagueCeramique, couleurBagueCeramique, sexeBagueCeramique, fabricantBagueCeramique, prixBagueCeramique) VALUES ('6','Bague Gourmette','5924','1','3,40 gr','1','1','1','1','5','829');

-- Table baguePierreFine 

INSERT INTO baguePierreFine (idBaguePierreFine, libelleBaguePierreFine, refBaguePierreFine, metalBaguePierreFine, poidsMoyMontureBaguePierreFine, pierreCentraleBaguePierreFine, formePierreCentraleBaguePierreFine, poidsPierreCentraleBaguePierreFine, nbPierreCentraleBaguePierreFine, typeSertiBaguePierreFine, fabricantBaguePierreFine, prixBaguePierreFine) VALUES ('1','Bague Lune Violette','5451','2','1,80 gr','2','1','2,00 carats','1','3','2','289');
INSERT INTO baguePierreFine (idBaguePierreFine, libelleBaguePierreFine, refBaguePierreFine, metalBaguePierreFine, poidsMoyMontureBaguePierreFine, pierreCentraleBaguePierreFine, formePierreCentraleBaguePierreFine, poidsPierreCentraleBaguePierreFine, nbPierreCentraleBaguePierreFine, typeSertiBaguePierreFine, fabricantBaguePierreFine, prixBaguePierreFine) VALUES ('2','Bague Fleur Cognac','5551','2','2,10 gr','3','2','8,00 gr','1','2','2','319');
INSERT INTO baguePierreFine (idBaguePierreFine, libelleBaguePierreFine, refBaguePierreFine, metalBaguePierreFine, poidsMoyMontureBaguePierreFine, pierreCentraleBaguePierreFine, formePierreCentraleBaguePierreFine, nbPierreCentraleBaguePierreFine, poidsTotalCaraBaguePierreFine, typeSertiBaguePierreFine, fabricantBaguePierreFine, prixBaguePierreFine) VALUES ('3','Bague Néon Améthyste','5370','3','2,10 gr','1','3','42','0,64 carat','2','1','335');
INSERT INTO baguePierreFine (idBaguePierreFine, libelleBaguePierreFine, refBaguePierreFine, metalBaguePierreFine, poidsMoyMontureBaguePierreFine, pierreCentraleBaguePierreFine, formePierreCentraleBaguePierreFine, poidsPierreCentraleBaguePierreFine, nbPierreCentraleBaguePierreFine, typeSertiBaguePierreFine, sexeBaguePierreFine, prixBaguePierreFine) VALUES ('4','Bague Bora Parme','5640','4','0,75 gr','2','4','0,72 carat','1','3','1','319');


