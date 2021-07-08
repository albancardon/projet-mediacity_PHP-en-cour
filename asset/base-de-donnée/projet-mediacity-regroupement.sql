
CREATE TABLE listeCompte(
    users_idUtilisateur int NOT NULL,
	pseudo VARCHAR(20) NOT NULL UNIQUE,
	pass VARCHAR(255) NOT NULL,
    typeCompte VARCHAR(10) NOT NULL,
	preference VARCHAR(50) DEFAULT NULL,
	historique VARCHAR(255) DEFAULT NULL,
	penalite smallint(4) DEFAULT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE users(
	idUtilisateur int PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(25) NOT NULL,
	prenom VARCHAR(20) NOT NULL,
	age smallint(2) NOT NULL,
	tel VARCHAR (25) NOT NULL,
	mail VARCHAR(100) NOT NULL UNIQUE,
	codePostal INT(10) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE locationReservation(
	idLocation int PRIMARY KEY AUTO_INCREMENT,
    users_idUtilisateur int NOT NULL,
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
    titre VARCHAR (50) NOT NULL,
    typeMedia VARCHAR (25) NOT NULL,
    genrePrincipale VARCHAR (25) NOT NULL,
    genreSecondaire VARCHAR (25) DEFAULT NULL,
    synopsis VARCHAR (750) DEFAULT NULL,
    idPoster VARCHAR (40) NOT NULL,
    nbPossede smallint(3),
    disponibilite smallint(3),
    reserver BOOLEAN DEFAULT FALSE
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE demande(
	idDemande int PRIMARY KEY AUTO_INCREMENT,
    users_idUtilisateur int NOT NULL,
    media__idMedia int NOT NULL,
    nbDemande smallint (3) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE noteRessource(
	idNoteRessource int PRIMARY KEY AUTO_INCREMENT,
    users_idUtilisateur int NOT NULL,
    ressource_idRessource int NOT NULL,
    noteDonner smallint(2) NOT NULL,
    nbNote smallint(4) NOT NULL,
    noteMoyenne decimal(7,1) NOT NULL,
    recommandation smallint(2)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE contenuAccueil(
	idContenuAccueil int PRIMARY KEY AUTO_INCREMENT,
    media__idMedia int NOT NULL,
    titre VARCHAR (50) NOT NULL,
    typeMedia VARCHAR(25) NOT NULL,
    zoneEmplacement VARCHAR (25) NOT NULL,
    emplacement VARCHAR (5) NOT NULL,
    idPoster VARCHAR (40) NOT NULL,
    idVideo VARCHAR (25) DEFAULT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE contenuFilm(
	idContenuFilm int PRIMARY KEY AUTO_INCREMENT,
    media__idMedia int NOT NULL,
    titre VARCHAR (50) NOT NULL,
    typeMedia VARCHAR(25) NOT NULL,
    zoneEmplacement VARCHAR (25) NOT NULL,
    emplacement VARCHAR (5) NOT NULL,
    idPoster VARCHAR (40) NOT NULL,
    idVideo VARCHAR (25) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE contenuSerie(
	idContenuSerie int PRIMARY KEY AUTO_INCREMENT,
    media__idMedia int NOT NULL,
    titre VARCHAR (50) NOT NULL,
    typeMedia VARCHAR(25) NOT NULL,
    zoneEmplacement VARCHAR (25) NOT NULL,
    emplacement VARCHAR (5) NOT NULL,
    idPoster VARCHAR (40) NOT NULL,
    idVideo VARCHAR (25) DEFAULT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE media(
	idMedia int PRIMARY KEY ,
    titre VARCHAR (50) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE listeCompte
ADD CONSTRAINT fk_users_idUtilisateur FOREIGN KEY (users_idUtilisateur) REFERENCES users(idUtilisateur);

ALTER TABLE locationReservation
ADD CONSTRAINT fk_users_idUtilisateur2 FOREIGN KEY (users_idUtilisateur) REFERENCES users(idUtilisateur),
ADD CONSTRAINT fk_media_idMedia FOREIGN KEY (media__idMedia) REFERENCES media(idMedia);

ALTER TABLE demande
ADD CONSTRAINT fk_users_idUtilisateur4 FOREIGN KEY (users_idUtilisateur) REFERENCES users(idUtilisateur),
ADD CONSTRAINT fk_media_idMedia2 FOREIGN KEY (media__idMedia) REFERENCES media(idMedia);

ALTER TABLE noteRessource
ADD CONSTRAINT fk_users_idUtilisateur3 FOREIGN KEY (users_idUtilisateur) REFERENCES users(idUtilisateur),
ADD CONSTRAINT fk_ressource_idRessource FOREIGN KEY (ressource_idRessource) REFERENCES ressource(idRessource);

ALTER TABLE ressource
ADD CONSTRAINT fk_media_idMedia3 FOREIGN KEY (media__idMedia) REFERENCES media(idMedia);

ALTER TABLE contenuAccueil
ADD CONSTRAINT fk_media_idMedia4 FOREIGN KEY (media__idMedia) REFERENCES media(idMedia);

ALTER TABLE contenuFilm
ADD CONSTRAINT fk_media_idMedia5 FOREIGN KEY (media__idMedia) REFERENCES media(idMedia);

ALTER TABLE contenuSerie
ADD CONSTRAINT fk_media_idMedia6 FOREIGN KEY (media__idMedia) REFERENCES media(idMedia);



INSERT INTO media (idMedia, titre)
VALUES (9739, "demolition man"),
(429, "le bon, la brute et le truand"),
(329, "jurasique park"),
(120, "seigneur des anneaux"),
(218, "terminator"),

(548, "robocop"),
(11932, "la fiancée de chucky"),
(87, "indiana jones 1"),
(18, "le cinquième élément"),
(76341, "mad max fury road"),

(11687, "les visiteur"),
(9421, "le diner de con"),
(771, "maman j'ai rate l'avion"),
(440472, "intouchable"),
(2109, "Rush Hour"),

(854, "mask"),
(634, "le journal de Bridget Jones"),
(18785, "very bad trip"),
(9564, "Astérix & Obélix contre César"),
(382511, "radin"),

(118, "charly et la chocolatrie"),
(128, "princesse mononoke"),
(3170, "bambie"),
(2300, "space Jam"),
(12, "nemo"),

(856, "qui veut la peau de roger rabbit"),
(8587, "le roi lion"),
(8839, "casper"),
(862, "toy story"),
(1885, "karate kid");


INSERT INTO ressource (media__idMedia, titre, typeMedia, genrePrincipale, nbPossede, disponibilite, reserver, idPoster)
VALUES (9739, "demolition man", "film", "act", 3, 3, FALSE, "/r01JaOjD8imIKPYHw97dsLmrc7A.jpg"),
(429, "le bon, la brute et le truand", "film", "act", 1, 1, FALSE ,"/qEr65B4yGlsmLQjcM0xjSUMfZS2.jpg"),
(329, "jurassique park", "film", "act", 2, 2, FALSE, "/1EuPzhbzDgZmTHvS0nC0KSdEslI.jpg"),
(120, "seigneur des anneaux", "film", "act", 4, 4, FALSE, "/5OPg6M0yHr21Ovs1fni2H1xpKuF.jpg"),
(218, "terminator", "film", "act", 5, 5, FALSE, "/z9nwlPCvMpgxDwQ9JQ3zRAPpEjd.jpg"),

(548, "robocop", "film", "act", 1, 1, FALSE, "/4wYAfXPb3srrXwURVfEnySCS5JQ.jpg"),
(11932, "la fiancée de chucky", "film", "act", 3, 3, FALSE, "/zIfMIoWfLsWjzEsvZuhSGmdn2uI.jpg"),
(87, "indiana jones 1", "film", "act", 5, 5, FALSE, "/oiUd1KUXWZeDPGMr8TrtZcXzpQU.jpg"),
(18, "le cinquième élément", "film", "act", 2, 2, FALSE, "/8nx8sttha1Zidt73SbNncVfSwqk.jpg"),
(76341, "mad max fury road", "film", "act", 4, 4, FALSE, "/oLy2V6AWSEfdPgKOtrSGnwB3Q2R.jpg"),

(11687, "les visiteurs", "film", "com", 4, 4, FALSE, "/A5KVkkylm8dfRgrXWNrOlAKu1Yr.jpg"),
(9421, "le diner de con", "film", "com", 2, 2, FALSE, "/7ukFDHExWul2Zz3L0OH8CaZCp2Z.jpg"),
(771, "maman j'ai rate l'avion", "film", "com", 5, 5, FALSE, "/7hvfmQ5zgwoxZZOHQ9uGMdIk43t.jpg"),
(440472, "intouchable", "film", "com", 3, 3, FALSE, "/eH7jlXl7lGVtzmBupKGRUR52WvS.jpg"),
(2109, "Rush Hour", "film", "com", 1, 1, FALSE, "/my4J6c4dfTV97zbuTRqoLK2sqSj.jpg"),

(854, "mask", "film", "com", 5, 5, FALSE, "/fNNcsmGfIDM83mnGWoX2n9QV0LM.jpg"),
(634, "le journal de Bridget Jones", "film", "com", 4, 4, FALSE, "/aly5tfDSDciHvqhkbHpPB5mcdq8.jpg"),
(18785, "very bad trip", "film", "com", 2, 2, FALSE, "/dGOwVbGN5eJlgAnFwGRaANnyZMF.jpg"),
(9564, "Astérix & Obélix contre César", "film", "com", 1, 1, FALSE, "/2xFo4wO4zAGb3KcyvBsC2igLLdF.jpg"),
(382511, "radin", "film", "com", 3, 3, FALSE, "/axdQyS20MtoBnXLpzJhn3g6etqZ.jpg"),

(118, "charly et la chocolatrie", "film", "fam", 1, 1, FALSE, "/lxzRFeCHblcE1vc4GVXGN0otrSA.jpg"),
(128, "princesse mononoke", "film", "fam", 5, 5, FALSE, "/AulQiyP2PMQKW5Vm7PviGrFbpPm.jpg"),
(3170, "bambi", "film", "fam", 2, 2, FALSE, "/mQaTaFMu8fr4Y6w8fCfoRU49BVn.jpg"),
(2300, "space Jam", "film", "fam", 4, 4, FALSE, "/oAdHWUSnlpYy1oX31ujqrLcrnEX.jpg"),
(12, "le monde de nemo", "film", "fam", 3, 3, FALSE, "/8zR2vXoXfdlknEYjfHvCbb1rJbI.jpg"),

(856, "qui veut la peau de roger rabbit", "film", "fam", 5, 5, FALSE, "/rggLGRuANMRPwYJq0UMlNc7aia7.jpg"),
(8587, "le roi lion", "film", "fam", 2, 2, FALSE, "/n6UChiAOSTHGih2FBactLjA4Cdt.jpg"),
(8839, "casper", "film", "fam", 4, 4, FALSE, "/2ah8fNJFZVU3vcXhU5xfAYi2eym.jpg"),
(862, "toy story", "film", "fam", 3, 3, FALSE, "/4cWLRhub0yY9VJpdw0nqoTPYyiN.jpg"),
(1885, "karate kid", "film", "fam", 1, 1, FALSE, "/sEW4T43qyGIvFXwX8b1QbCVOHbS.jpg");


INSERT INTO contenuFilm (media__idMedia, titre, typeMedia, zoneEmplacement, emplacement,idVideo, idPoster)
VALUES (9739, "demolition man", "film", "chef", "emp1", "awZ8NiBShHA", "/r01JaOjD8imIKPYHw97dsLmrc7A.jpg"),
(11687, "les visiteur", "film", "chef", "emp2", "uZsutbn_8MM", "/A5KVkkylm8dfRgrXWNrOlAKu1Yr.jpg"),
(3170, "bambi", "film", "chef", "emp3", "Qq4IyP7dkQQ", "/mQaTaFMu8fr4Y6w8fCfoRU49BVn.jpg"),

(18, "le cinquième élément", "film", "act", "emp1", "7rzmiE-pESk", "/8nx8sttha1Zidt73SbNncVfSwqk.jpg"),
(76341, "mad max fury road", "film", "act", "emp2", "uEyigf9VvfQ", "/oLy2V6AWSEfdPgKOtrSGnwB3Q2R.jpg"),
(11932, "la fiancée de chucky", "film", "act", "emp3", "hunkueW0DYo", "/zIfMIoWfLsWjzEsvZuhSGmdn2uI.jpg"),
(429, "le bon, la brute et le truand", "film", "act", "emp4", "WA1hCZFOPqs", "/qEr65B4yGlsmLQjcM0xjSUMfZS2.jpg"),

(9421, "le diner de con", "film", "com", "emp1", "gWjGatwsp44", "/7ukFDHExWul2Zz3L0OH8CaZCp2Z.jpg"),
(771, "maman j'ai rate l'avion", "film", "com", "emp2", "yeVu_2hGZIE", "/7hvfmQ5zgwoxZZOHQ9uGMdIk43t.jpg"),
(440472, "intouchable", "film", "com", "emp3", "4z9AG0xfPJA", "/eH7jlXl7lGVtzmBupKGRUR52WvS.jpg"),
(2109, "Rush Hour", "film", "com", "emp4", "p_l_CUWMeLY", "/my4J6c4dfTV97zbuTRqoLK2sqSj.jpg"),

(118, "charly et la chocolatrie", "film", "fam", "emp1", "TM2TqF3b2CU", "/lxzRFeCHblcE1vc4GVXGN0otrSA.jpg"),
(128, "princesse mononoke", "film", "fam", "emp2", "AelaSxxVses", "/AulQiyP2PMQKW5Vm7PviGrFbpPm.jpg"),
(12, "le monde de nemo", "film", "fam", "emp3", "TKi8VJmBuLs", "/8zR2vXoXfdlknEYjfHvCbb1rJbI.jpg"),
(856, "qui veut la peau de roger rabbit", "film", "fam", "emp4", "Fi6z6iC9lOk", "/rggLGRuANMRPwYJq0UMlNc7aia7.jpg");




INSERT INTO users (nom, prenom, age, tel, mail, codePostal)
VALUES ("Casca", "Guts" ,18 , "06.12.34.56.78", "casca.guts@gmail.com", 59000),
("Yukihira", "Sōma" ,18 , "06.12.34.56.78", "yukihira.soma@gmail.com", 59000),
("Kaneki", "Ken" ,18 , "06.12.34.56.78", "kaneki.ken@gmail.com", 59000),
("Light", "Yagami" ,18 , "06.12.34.56.78", "light.yagami@gmail.com", 59000),
("Thérèsa", "Claire" ,18 , "06.12.34.56.78", "theresa.claire@gmail.com", 59000),

("Potter", "Harry" ,18 , "06.12.34.56.78", "potter.harry@gmail.com", 59000),
("Sacquet ", "Bilbon" ,18 , "06.12.34.56.78", "bilbon.sacquet@gmail.com", 59000),
("Skywalker", "Anakin" ,18 , "06.12.34.56.78", "anakin.skywalker@gmail.com", 59000),
("Connor", "Sarah" ,18 , "06.12.34.56.78", "sarah.connor@gmail.com", 59000),
("Dallas", "Leeloo" ,18 , "06.12.34.56.78", "dallas.ken@gmail.com", 59000),

("Dupond", "Louise" ,18 , "06.12.34.56.78", "dupond.louise@gmail.com", 59000),
("Smith", "Olivia" ,18 , "06.12.34.56.78", "smith.olivia@gmail.com", 59000),
("Müller", "Léo" ,18 , "06.12.34.56.78", "müller.léo@gmail.com", 59000),
("Garcia", "Jade" ,18 , "06.12.34.56.78", "garcia.jade@gmail.com", 59000),
("Rossi", "Maria" ,18 , "06.12.34.56.78", "rossi.maria@gmail.com", 59000),

("test", "test" ,18 , "06.12.34.56.78", "test@test.com", 59000)
;

INSERT INTO listeCompte (users_idUtilisateur, pseudo, pass, typeCompte, preference, penalite, historique)
VALUES (1, "berserk", "5e71448bfb005c62b08aa1287102be3695776ccc", "employer", NULL, NULL, NULL),
(2, "shokugeki", "6d40d957833367ea8bcb4035095ebd477440f100", "employer", NULL, NULL, NULL),
(3, "goul", "0f4c7823b6b9f8ffb0070d6b908181de05d8d63d", "employer", NULL, NULL, NULL),
(4, "note", "143918ef9c80f0d312bba503d6e75ceaaedf1324", "employer", NULL, NULL, NULL),
(5, "claymore", "90f014e019d2ea4488572e30e7da651d54ee5cf3", "employer", NULL, NULL, NULL),

(6, "harrypotter", "b152cd769cfc24b07d6ecd00286c86e55d455f82", "prenium", "act", 0, NULL),
(7, "seigneur", "e77a8ae966afd2a3f56da1f6afb965ed78b496f6",  "prenium", "com", 15, NULL),
(8, "star", "67ce1641c045b054b882c1babe0ffe9b533d181a", "prenium", "fam", 0, NULL),
(9, "terminator", "a28504d49abe8dec82abc7afd4f185d53e38be92", "prenium", NULL, 0, NULL),
(10, "element", "f7413c2bec726562497cffd87177c8b0579c0dd0", "prenium", "fam", 0, NULL),

(11, "louise", "b152b04766cc5c7e830c2d30e800a80050d03938", "membre", "com", 0, NULL),
(12, "olivia", "4eaf5dd57d2dac397914adf5f48941a0e650c6b6", "membre", "act", 0, NULL),
(13, "leo", "b178ef670ff78c995ce0a0a8e6fd0314ed47259e", "membre", NULL, 0, NULL),
(14, "jade", "b54555dc8eb2bfa747c7e89ff1089da112a2ac3b", "membre", "com", 0, NULL),
(15, "maria", "4854ce8d54d70975e7517f3912232d11592c8f96", "membre", "act", 0, NULL),

(16, "test", "f2a2b4282f67d1ee1e6671d65feac55f283132b9", "employer", "fam", 0, NULL)
;



INSERT INTO media (idMedia, titre)
VALUES (4414, "highlander"),
(4515, "loïs et clack"),
(232842, "flash"),
(2875, "macgyver"),
(2384, "k2000"),

(4087, "x-files : aux frontières du réel"),
(1649, "sliders, les mondes parallèles"),
(2288, "prison break"),
(1973, "24 heures chrono"),
(1396, "breaking bad"),

(4018, "code quantum"),
(2004, "malcolm"),
(1408, "dr house"),
(1418, "the big bang theory"),
(693, "Desperate Housewives"),

(1668, "friends"),
(4324, "dr quinn, femme médecin"),
(1695, "monk"),
(20169, "H"),
(1716, "demain à la une"),

(2098, "batman : la série animée"),
(1892, "le Prince de Bel-Air"),
(4327, "mr. bean"),
(36406, "yu-Gi-Oh"),
(2632, "il était une fois... la vie"),

(60572, "pokémon"),
(24106, "olive et tom : le retour"),
(12971, "dragon ball z"),
(8123, "le monde fou de tex avery"),
(12925, "La Famille Addams");


INSERT INTO ressource (media__idMedia, titre, typeMedia, genrePrincipale, nbPossede, disponibilite, reserver, idPoster)
VALUES (4414, "highlander", "series", "act", 3, 3, FALSE, "/wn3kArg2CZtgUxyHJiYMKTGCreG.jpg"),
(4515, "loïs et clack", "series", "act", 1, 1, FALSE ,"/1LbPs6i1h4BKjVUwK5S9GjPCydi.jpg"),
(232842, "flash", "series", "act", 2, 2, FALSE, "/1EuPzhbzDgZmTHvS0nC0KSdEslI.jpg"),
(2875, "macgyver", "series", "act", 4, 4, FALSE, "/tE4CLS3YHTGbAnUo1ZkeH8E7NrQ.jpg"),
(2384, "k2000", "series", "act", 5, 5, FALSE, "/29hiAIFglc72sRWY2tNo3lSpNtn.jpg"),

(4087, "x-files : aux frontières du réel", "series", "act", 1, 1, FALSE, "/yB4gZINiV9DaZ627K1f0wiJDQGz.jpg"),
(1649, "sliders, les mondes parallèles", "series", "act", 3, 3, FALSE, "/9cBXIPl83fE2yQusoEt6vMpSjIJ.jpg"),
(2288, "prison break", "series", "act", 5, 5, FALSE, "/oMFtDk8hgX9UM4dVEOJt8mcFmHC.jpg"),
(1973, "24 heures chrono", "series", "act", 2, 2, FALSE, "/iq6yrZ5LEDXf1ArCOYLq8PIUBpV.jpg"),
(1396, "breaking bad", "series", "act", 4, 4, FALSE, "/ggFHVNu6YYI5L9pCfOacjizRGt.jpg"),

(4018, "code quantum", "series", "com", 4, 4, FALSE, "/1969fw0KkFGfFK6z1RwrehXNOG3.jpg"),
(2004, "malcolm", "series", "com", 2, 2, FALSE, "/wN95OS6WD9T4BqA9TNCRATHcmJK.jpg"),
(1408, "dr house", "series", "com", 5, 5, FALSE, "/1H3sjBe63jraGkuM5LwhBrGUu7Q.jpg"),
(1418, "the big bang theory", "series", "com", 3, 3, FALSE, "/ooBGRQBdbGzBxAVfExiO8r7kloA.jpg"),
(693, "Desperate Housewives", "series", "com", 1, 1, FALSE, "/bqPo6t7YF38QYwuuy3zJwmFWaYz.jpg"),

(1668, "friends", "series", "com", 5, 5, FALSE, "/f496cm9enuEsZkSPzCwnTESEK5s.jpg"),
(4324, "dr quinn, femme médecin", "series", "com", 5, 5, FALSE, "/RF32uo83bzezkEUQ8VGarbCJi32.jpg"),
(1695, "monk", "series", "com", 2, 2, FALSE, "/1SSHYUvSgtQtjy6IY945qzBIJ8y.jpg"),
(20169, "H", "series", "com", 1, 1, FALSE, "/hbzXH65HEbR8psyTMhe47eP2aar.jpg"),
(1716, "demain à la une", "series", "com", 3, 3, FALSE, "/bYyZIfCeqawGfaBDreadm7z9daU.jpg"),

(2098, "batman : la série animée", "series", "fam", 1, 1, FALSE, "/lBomQFW1vlm1yUYMNSbFZ45R4Ox.jpg"),
(1892, "le Prince de Bel-Air", "series", "fam", 4, 4, FALSE, "/gYPE5vfStpVTf1ULE11B1Vwm12b.jpg"),
(4327, "mr. bean", "series", "fam", 2, 2, FALSE, "/bUBuXOa64h45uybuxBb6FTATzb4.jpg"),
(36406, "yu-Gi-Oh", "series", "fam", 4, 4, FALSE, "/gr2iaZHfK1v42p94MbHmfHX7aDL.jpg"),
(2632, "il était une fois... la vie", "series", "fam", 3, 3, FALSE, "/aH2Cn9sEAx8bPRIHlPVFZHh6uGm.jpg"),

(60572, "pokémon", "series", "fam", 5, 5, FALSE, "/lP4zwr0F7hWTbAFltfoFTc2AxRG.jpg"),
(24106, "olive et tom : le retour", "series", "fam", 2, 2, FALSE, "/c340auXMRV9ZJevAD3xe67J5KAD.jpg"),
(12971, "dragon ball z", "series", "fam", 4, 4, FALSE, "/f2zhRLqwRLrKhEMeIM7Z5buJFo3.jpg"),
(8123, "le monde fou de tex avery", "series", "fam", 3, 3, FALSE, "/uxbqkT0qAtmP3gZffdLf2e6pMkg.jpg"),
(12925, "La Famille Addams", "series", "fam", 1, 1, FALSE, "/myPIv0CpCW2Cw4L8dsBuZNhZwXg.jpg");


INSERT INTO contenuSerie (media__idMedia, titre, typeMedia, zoneEmplacement, emplacement, idPoster)
VALUES (4414, "highlander", "series", "chef", "emp1", "/wn3kArg2CZtgUxyHJiYMKTGCreG.jpg"),
(4018, "code quantum", "series", "chef", "emp2", "/1969fw0KkFGfFK6z1RwrehXNOG3.jpg"),
(4327, "mr. bean", "series", "chef", "emp3", "/bUBuXOa64h45uybuxBb6FTATzb4.jpg"),

(1973, "24 heures chrono", "series", "act", "emp1", "/iq6yrZ5LEDXf1ArCOYLq8PIUBpV.jpg"),
(1396, "breaking bad", "series", "act", "emp2", "/ggFHVNu6YYI5L9pCfOacjizRGt.jpg"),
(1649, "sliders, les mondes parallèles", "series", "act", "emp3", "/9cBXIPl83fE2yQusoEt6vMpSjIJ.jpg"),
(4515, "loïs et clack", "series", "act", "emp4", "/1LbPs6i1h4BKjVUwK5S9GjPCydi.jpg"),

(2004, "malcolm", "series", "com", "emp1", "/wN95OS6WD9T4BqA9TNCRATHcmJK.jpg"),
(1408, "dr house", "series", "com", "emp2", "/1H3sjBe63jraGkuM5LwhBrGUu7Q.jpg"),
(1418, "the big bang theory", "series", "com", "emp3", "/ooBGRQBdbGzBxAVfExiO8r7kloA.jpg"),
(20169, "H", "series", "com", "emp4", "/hbzXH65HEbR8psyTMhe47eP2aar.jpg"),

(12971, "dragon ball z", "series", "fam", "emp1", "/f2zhRLqwRLrKhEMeIM7Z5buJFo3.jpg"),
(1892, "le Prince de Bel-Air", "series", "fam", "emp2", "/gYPE5vfStpVTf1ULE11B1Vwm12b.jpg"),
(2632, "il était une fois... la vie", "series", "fam", "emp3", "/aH2Cn9sEAx8bPRIHlPVFZHh6uGm.jpg"),
(60572, "pokémon", "series", "fam", "emp4", "/lP4zwr0F7hWTbAFltfoFTc2AxRG.jpg");


INSERT INTO contenuAccueil (media__idMedia, titre, typeMedia, zoneEmplacement, emplacement, idPoster)
VALUES (87, "indiana jones 1", "acc", "ac-film", "emp1", "/oiUd1KUXWZeDPGMr8TrtZcXzpQU.jpg"),
(854, "mask", "acc", "ac-film", "emp2", "/fNNcsmGfIDM83mnGWoX2n9QV0LM.jpg"),
(8587, "le roi lion", "acc", "ac-film", "emp3", "/n6UChiAOSTHGih2FBactLjA4Cdt.jpg"),

(4087, "x-files : aux frontières du réel", "acc", "ac-series", "emp1", "/yB4gZINiV9DaZ627K1f0wiJDQGz.jpg"),
(1668, "friends", "acc", "ac-series", "emp2", "/f496cm9enuEsZkSPzCwnTESEK5s.jpg"),
(12925, "La Famille Addams", "acc", "ac-series", "emp3", "/myPIv0CpCW2Cw4L8dsBuZNhZwXg.jpg");