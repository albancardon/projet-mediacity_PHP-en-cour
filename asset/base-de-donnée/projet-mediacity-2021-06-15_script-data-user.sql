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

INSERT INTO listeCompte (users_idUtilisateur, pseudo, pass, typeCompte, preference, penalite)
VALUES (1, "berserk", "5e71448bfb005c62b08aa1287102be3695776ccc", "employer", NULL, NULL),
(2, "shokugeki", "6d40d957833367ea8bcb4035095ebd477440f100", "employer", NULL, NULL),
(3, "goul", "0f4c7823b6b9f8ffb0070d6b908181de05d8d63d", "employer", NULL, NULL),
(4, "note", "143918ef9c80f0d312bba503d6e75ceaaedf1324", "employer", NULL, NULL),
(5, "claymore", "90f014e019d2ea4488572e30e7da651d54ee5cf3", "employer", NULL, NULL),

(6, "harrypotter", "b152cd769cfc24b07d6ecd00286c86e55d455f82", "prenium", "act", 0),
(7, "seigneur", "e77a8ae966afd2a3f56da1f6afb965ed78b496f6",  "prenium", "com", 15),
(8, "star", "67ce1641c045b054b882c1babe0ffe9b533d181a", "prenium", "fam", 0),
(9, "terminator", "a28504d49abe8dec82abc7afd4f185d53e38be92", "prenium", NULL, 0),
(10, "element", "f7413c2bec726562497cffd87177c8b0579c0dd0", "prenium", "fam", 0),

(11, "louise", "b152b04766cc5c7e830c2d30e800a80050d03938", "membre", "com", 0),
(12, "olivia", "4eaf5dd57d2dac397914adf5f48941a0e650c6b6", "membre", "act", 0),
(13, "leo", "b178ef670ff78c995ce0a0a8e6fd0314ed47259e", "membre", NULL, 0),
(14, "jade", "b54555dc8eb2bfa747c7e89ff1089da112a2ac3b", "membre", "com", 0),
(15, "maria", "4854ce8d54d70975e7517f3912232d11592c8f96", "membre", "act", 0),

(16, "test", "f2a2b4282f67d1ee1e6671d65feac55f283132b9", "employer", "fam", 0)
;
