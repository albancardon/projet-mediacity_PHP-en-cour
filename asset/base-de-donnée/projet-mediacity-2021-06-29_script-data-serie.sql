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
VALUES (4414, "highlander", "series", "act", 3, 3, FALSE, "/vwoWfGx0ZYvpK7gTPeen64M0QS5.jpg"),
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
VALUES (4414, "highlander", "series", "chef", "emp1", "/vwoWfGx0ZYvpK7gTPeen64M0QS5.jpg"),
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