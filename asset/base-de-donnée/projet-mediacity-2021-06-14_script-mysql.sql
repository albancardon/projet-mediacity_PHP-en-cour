
CREATE TABLE listeCompte(
	identifiant int PRIMARY KEY AUTO_INCREMENT,
    client_idUtilisateur int NOT NULL,
	pseudo VARCHAR(20) NOT NULL UNIQUE,
	pass VARCHAR(255) NOT NULL,
    typeCompte smallint(10) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE client(
	idUtilisateur int PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(25) NOT NULL,
	prenom VARCHAR(20) NOT NULL,
	age smallint(2) NOT NULL,
	tel smallint(10) NOT NULL,
	mail VARCHAR(255) NOT NULL UNIQUE,
	preference VARCHAR(50) DEFAULT NULL,
	penalite smallint(4) DEFAULT NULL,
    autorisation VARCHAR(25) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE locationReservation(
	idLocation int PRIMARY KEY AUTO_INCREMENT,
    client_idUtilisateur int NOT NULL,
    media__idMedia int NOT NULL,
    typeInteraction VARCHAR(15) NOT NULL,
    dateRetrait date DEFAULT NULL,
    dateRetour date DEFAULT NULL,
    dateReservation date DEFAULT NULL,
    dateRetourResa date DEFAULT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE ressource(
	idRessource int PRIMARY KEY AUTO_INCREMENT,
    media__idMedia int NOT NULL,
    titre VARCHAR (25) NOT NULL,
    typeMedia VARCHAR (25) NOT NULL,
    genrePrincipale VARCHAR (25) NOT NULL,
    nbPossede smallint(3),
    disponibilite smallint(3),
    reserver BOOLEAN DEFAULT FALSE
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE demande(
	idDemande int PRIMARY KEY AUTO_INCREMENT,
    client_idUtilisateur int NOT NULL,
    media__idMedia int NOT NULL,
    nbDemande smallint (3) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE noteRessource(
    client_idUtilisateur int NOT NULL,
    ressource_idRessource int NOT NULL,
    noteDonner smallint(2) NOT NULL,
    nbNote smallint(4) NOT NULL,
    noteMoyenne decimal(7,1) NOT NULL,
    recommandation smallint(2)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE contenuAccueil(
    media__idMedia int NOT NULL,
    titre VARCHAR (25) NOT NULL,
    typeMedia VARCHAR(25) NOT NULL,
    zoneEmplacement VARCHAR (25) NOT NULL,
    emplacement smallint(3)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE contenuFilm(
    media__idMedia int NOT NULL,
    titre VARCHAR (25) NOT NULL,
    typeMedia VARCHAR(25) NOT NULL,
    zoneEmplacement VARCHAR (25) NOT NULL,
    emplacement smallint(3),
    idVideo VARCHAR (25) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE contenuSerie(
    media__idMedia int NOT NULL,
    titre VARCHAR (25) NOT NULL,
    typeMedia VARCHAR(25) NOT NULL,
    zoneEmplacement VARCHAR (25) NOT NULL,
    emplacement smallint(3),
    idVideo VARCHAR (25) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE media(
	idMedia int PRIMARY KEY ,
    titre VARCHAR (25) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE listeCompte
ADD CONSTRAINT fk_client_idUtilisateur FOREIGN KEY (client_idUtilisateur) REFERENCES client(idUtilisateur);

ALTER TABLE locationReservation
ADD CONSTRAINT fk_client_idUtilisateur2 FOREIGN KEY (client_idUtilisateur) REFERENCES client(idUtilisateur),
ADD CONSTRAINT fk_media_idMedia FOREIGN KEY (media__idMedia) REFERENCES media(idMedia);

ALTER TABLE demande
ADD CONSTRAINT fk_client_idUtilisateur4 FOREIGN KEY (client_idUtilisateur) REFERENCES client(idUtilisateur),
ADD CONSTRAINT fk_media_idMedia2 FOREIGN KEY (media__idMedia) REFERENCES media(idMedia);

ALTER TABLE noteRessource
ADD CONSTRAINT fk_client_idUtilisateur3 FOREIGN KEY (client_idUtilisateur) REFERENCES client(idUtilisateur),
ADD CONSTRAINT fk_ressource_idRessource FOREIGN KEY (ressource_idRessource) REFERENCES ressource(idRessource);

ALTER TABLE ressource
ADD CONSTRAINT fk_media_idMedia3 FOREIGN KEY (media__idMedia) REFERENCES media(idMedia);

ALTER TABLE contenuAccueil
ADD CONSTRAINT fk_media_idMedia4 FOREIGN KEY (media__idMedia) REFERENCES media(idMedia);

ALTER TABLE contenuFilm
ADD CONSTRAINT fk_media_idMedia5 FOREIGN KEY (media__idMedia) REFERENCES media(idMedia);

ALTER TABLE contenuSerie
ADD CONSTRAINT fk_media_idMedia6 FOREIGN KEY (media__idMedia) REFERENCES media(idMedia);
