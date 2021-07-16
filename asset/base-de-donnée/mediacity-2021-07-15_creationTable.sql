CREATE TABLE Utilisateur(
	idUser int PRIMARY KEY AUTO_INCREMENT,
	pseudo VARCHAR(20) NOT NULL UNIQUE,
	password VARCHAR(255) NOT NULL,
    nom VARCHAR(30) NOT NULL,
	prenom VARCHAR(30) NOT NULL,
	date_naissance DATE NOT NULL,
	tel VARCHAR (25) NOT NULL,
	mail VARCHAR(100) NOT NULL UNIQUE,
	codePostal INT(10) NOT NULL,
	typeCompte VARCHAR(30) NOT NULL,
	preference VARCHAR(50) DEFAULT NULL,
	penalite smallint(4) DEFAULT NULL,
	historique VARCHAR(255) DEFAULT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE Media(
	idMedia int PRIMARY KEY AUTO_INCREMENT,
	idApi int  NOT NULL UNIQUE ,
    titre VARCHAR (70) NOT NULL,
    categorie VARCHAR (20) NOT NULL,
    typePrincipale VARCHAR (20) NOT NULL,
    typeSecondaire VARCHAR (20) DEFAULT NULL,
    idPoster VARCHAR (40) NOT NULL,
    idVideo VARCHAR (25) DEFAULT NULL,
    synopsis VARCHAR (1000) DEFAULT NULL,
    nbPossede smallint(3),
    disponibilite smallint(3),
    reserver BOOLEAN DEFAULT FALSE,
    page VARCHAR (20) DEFAULT NULL,
    emplacement VARCHAR (10) DEFAULT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE LocationReservation(
	idLocation int PRIMARY KEY AUTO_INCREMENT,
    utilisateur_idUser int NOT NULL,
    media__idApi int NOT NULL,
    typeInteraction VARCHAR(15) NOT NULL,
    date_Début_Location DATE DEFAULT NULL,
    date_Retour_Location DATE DEFAULT NULL,
    date_Reservation DATE DEFAULT NULL,
    date_Fin_Reservation DATE DEFAULT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE Recommandation(
	idRecommandation int PRIMARY KEY AUTO_INCREMENT,
    utilisateur_idUser int NOT NULL,
    media__idApi int NOT NULL,
    recommanderOui smallint(4),
    recommanderNon smallint(4),
    nombreDemande smallint (3) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE LocationReservation
ADD CONSTRAINT fk_utilisateur_idUser__LocationReservation FOREIGN KEY (utilisateur_idUser) REFERENCES Utilisateur(idUser),
ADD CONSTRAINT fk_media_idApi__LocationReservation FOREIGN KEY (media__idApi) REFERENCES Media(idApi);

ALTER TABLE Recommandation
ADD CONSTRAINT fk_utilisateur_idUser__Recommandation FOREIGN KEY (utilisateur_idUser) REFERENCES Utilisateur(idUser),
ADD CONSTRAINT fk_media_idApi__Recommandation FOREIGN KEY (media__idApi) REFERENCES Media(idApi);