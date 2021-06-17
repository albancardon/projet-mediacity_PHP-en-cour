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