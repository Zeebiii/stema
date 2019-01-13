
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


CREATE TABLE baguePerle (
    idBaguePerle INT NOT NULL AUTO_INCREMENT,
    libelleBaguePerle VARCHAR(30) NOT NULL,
    refBaguePerle VARCHAR(15) NOT NULL,
    metalBaguePerle INT,
    poidsMoyMontureBaguePerle FLOAT,
    rhodiageBaguePerle INT,
    pierreCentraleBaguePerle INT,
    couleurBaguePerle INT, 
    typePerleBaguePerle INT,
    fabricantBaguePerle INT,
    diametrePerleBaguePerle VARCHAR(15), 
    nbPerleBaguePerle INT,
    typeSertiBaguePerle INT,
    poidsTotalCaraBaguePerle FLOAT,
    pureteBaguePerle  INT,
    nbPierreBaguePerle  INT,
    typePierrePavageBaguePerle  INT,
    formePierrePavageBaguePerle  INT,
    prixBaguePerle DECIMAL,
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
    metalBagueOr INT,
    poidsMoyMonture FLOAT,
    hauteurBagueOr FLOAT,
    epaisseurBagueOr FLOAT,
    rhodiageBagueOr INT,
    prixBagueOr DECIMAL,
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
    poidsMoyMonture FLOAT,
    pierreCentraleBaguePierreFine INT,
    formePierreCentraleBaguePierreFine INT,
    poidsPierreCentaleBaguePierreFine FLOAT,
    nbPierreCentraleBaguePierreFine INT,
    typeSertiBaguePierreFine INT,
    fabricantBaguePierreFine INT,
    poidsTotalCaraBaguePierreFine FLOAT,
    sexeBaguePierreFine VARCHAR(10),
    CONSTRAINT PK_idBaguePierreFine PRIMARY KEY (idBaguePierreFine),
    CONSTRAINT FK_metalBaguePierreFine FOREIGN KEY (metalBaguePierreFine) REFERENCES metal (idMetal),
    CONSTRAINT FK_pierreCentraleBaguePierreFine FOREIGN KEY (pierreCentraleBaguePierreFine) REFERENCES pierreCentrale (idPierreCentrale),
    CONSTRAINT FK_formePierreCentraleBaguePierreFine FOREIGN KEY (formePierreCentraleBaguePierreFine) REFERENCES formePierreCentrale (idFormePierreCentrale),
    CONSTRAINT FK_typeSertiBaguePierreFine FOREIGN KEY (typeSertiBaguePierreFine) REFERENCES serti (idSerti),
    CONSTRAINT FK_fabricantBaguePierreFine FOREIGN KEY (fabricantBaguePierreFine) REFERENCES fabricant (idFabricant)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE bagueCeramique (
    idBagueCeramique INT NOT NULL AUTO_INCREMENT,
    libelleBagueCeramique VARCHAR(30) NOT NULL,
    refBagueCeramique VARCHAR(15) NOT NULL,
    prixBagueCeramique DECIMAL, 
    matiereBagueCeramique INT,
    couleurBagueCeramique INT,
    largeurBagueCeramique FLOAT,
    sexeBagueCeramique VARCHAR(10),
    fabricantBagueCeramique INT,
    metalBagueCeramique INT,
    poidsMoyMonture FLOAT,
    rhodiageBagueCeramique INT,
    typePierrePavageBagueCeramique INT,
    formePierrePavageBagueCeramique INT,
    nbPierreBagueCeramique INT,
    poidsTotalCaraBagueCeramique FLOAT,
    pureteBagueCeramique INT,
    typeSertiBagueCeramique INT,
    epaisseurBagueCeramique FLOAT,
    CONSTRAINT PK_idBagueCeramique PRIMARY KEY (idBagueCeramique),
    CONSTRAINT FK_matiereBagueCeramique FOREIGN KEY (matiereBagueCeramique) REFERENCES matiere (idMatiere),
    CONSTRAINT FK_couleurBagueCeramique FOREIGN KEY (couleurBagueCeramique) REFERENCES couleur (idCouleur),
    CONSTRAINT FK_fabricantBagueCeramique FOREIGN KEY (fabricantBagueCeramique) REFERENCES fabricant (idFabricant),
    CONSTRAINT FK_metalBagueCeramique FOREIGN KEY (metalBagueCeramique) REFERENCES metal (idMetal),
    CONSTRAINT FK_rhodiageBagueCeramique FOREIGN KEY (rhodiageBagueCeramique) REFERENCES rhodiage (idRhodiage),
    CONSTRAINT FK_typePierrePavageBagueCeramique FOREIGN KEY (typePierrePavageBagueCeramique) REFERENCES typePierrePavage (idTypePierrePavage),
    CONSTRAINT FK_formePierrePavageBagueCeramique FOREIGN KEY (formePierrePavageBagueCeramique) REFERENCES formePierrePavage (idFormePierrePavage),
    CONSTRAINT FK_pureteBagueCeramique FOREIGN KEY (pureteBagueCeramique) REFERENCES purete (idPurete),
    CONSTRAINT FK_typeSertiBagueCeramqiue FOREIGN KEY (typeSertiBagueCeramique) REFERENCES serti (idSerti)
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;



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

-- Table matiere 

INSERT INTO matiere VALUES ('1','Céramique'); 

