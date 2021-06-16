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


INSERT INTO ressource (media__idMedia, titre, typeMedia, genrePrincipale, nbPossede, disponibilite, reserver)
VALUES (9739, "demolition man", "film", "act", 3, 3, FALSE),
(429, "le bon, la brute et le truand", "film", "act", 1, 1, FALSE),
(329, "jurasique park", "film", "act", 2, 2, FALSE),
(120, "seigneur des anneaux", "film", "act", 4, 4, FALSE),
(218, "terminator", "film", "act", 5, 5, FALSE),

(548, "robocop", "film", "act", 1, 1, FALSE),
(11932, "la fiancée de chucky", "film", "act", 3, 3, FALSE),
(87, "indiana jones 1", "film", "act", 5, 5, FALSE),
(18, "le cinquième élément", "film", "act", 2, 2, FALSE),
(76341, "mad max fury road", "film", "act", 4, 4, FALSE),

(11687, "les visiteur", "film", "com", 4, 4, FALSE),
(9421, "le diner de con", "film", "com", 2, 2, FALSE),
(771, "maman j'ai rate l'avion", "film", "com", 5, 5, FALSE),
(440472, "intouchable", "film", "com", 3, 3, FALSE),
(2109, "Rush Hour", "film", "com", 1, 1, FALSE),

(854, "mask", "film", "com", 5, 5, FALSE),
(634, "le journal de Bridget Jones", "film", "com", 4, 4, FALSE),
(18785, "very bad trip", "film", "com", 2, 2, FALSE),
(9564, "Astérix & Obélix contre César", "film", "com", 1, 1, FALSE),
(382511, "radin", "film", "com", 3, 3, FALSE),

(118, "charly et la chocolatrie", "film", "fam", 1, 1, FALSE),
(128, "princesse mononoke", "film", "fam", 5, 5, FALSE),
(3170, "bambie", "film", "fam", 2, 2, FALSE),
(2300, "space Jam", "film", "fam", 4, 4, FALSE),
(12, "nemo", "film", "fam", 3, 3, FALSE),

(856, "qui veut la peau de roger rabbit", "film", "fam", 5, 5, FALSE),
(8587, "le roi lion", "film", "fam", 2, 2, FALSE),
(8839, "casper", "film", "fam", 4, 4, FALSE),
(862, "toy story", "film", "fam", 3, 3, FALSE),
(1885, "karate kid", "film", "fam", 1, 1, FALSE);


INSERT INTO contenuFilm (media__idMedia, titre, typeMedia, zoneEmplacement, emplacement,  idVideo)
VALUES (9739, "demolition man", "film", "chef", "emp1", "awZ8NiBShHA"),
(11687, "les visiteur", "film", "chef", "emp2", "uZsutbn_8MM"),
(3170, "bambi", "film", "chef", "emp3", "Qq4IyP7dkQQ"),

(18, "le cinquième élément", "film", "act", "emp1", "7rzmiE-pESk"),
(76341, "mad max fury road", "film", "act", "emp2", "uEyigf9VvfQ"),
(11932, "la fiancée de chucky", "film", "act", "emp3", "hunkueW0DYo"),
(429, "le bon, la brute et le truand", "film", "act", "emp4", "WA1hCZFOPqs"),

(9421, "le diner de con", "film", "com", "emp1", "gWjGatwsp44"),
(771, "maman j'ai rate l'avion", "film", "com", "emp2", "yeVu_2hGZIE"),
(440472, "intouchable", "film", "com", "emp3", "4z9AG0xfPJA"),
(2109, "Rush Hour", "film", "com", "emp4", "p_l_CUWMeLY"),

(118, "charly et la chocolatrie", "film", "fam", "emp1", "TM2TqF3b2CU"),
(128, "princesse mononoke", "film", "fam", "emp2", "AelaSxxVses"),
(12, "nemo", "film", "fam", "emp3", "TKi8VJmBuLs"),
(856, "qui veut la peau de roger rabbit", "film", "fam", "emp4", "Fi6z6iC9lOk");