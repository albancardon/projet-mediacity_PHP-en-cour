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

("Dupond", "Louise" ,18 , "06.12.34.56.78", "Dupond.Louise@gmail.com", 59000),
("Smith", "Olivia" ,18 , "06.12.34.56.78", "Smith.Olivia@gmail.com", 59000),
("Müller", "Léo" ,18 , "06.12.34.56.78", "Müller.Léo@gmail.com", 59000),
("Garcia", "Jade" ,18 , "06.12.34.56.78", "Garcia.Jade@gmail.com", 59000),
("Rossi", "Maria" ,18 , "06.12.34.56.78", "Rossi.Maria@gmail.com", 59000),

("test", "test" ,18 , "06.12.34.56.78", "test.test@gmail.com", 59000)
;

INSERT INTO listeCompte (users_idUtilisateur, pseudo, pass, typeCompte, preference, penalite)
VALUES (1, "berserk", "123456", "employer", NULL, NULL),
(2, "shokugeki", "123456", "employer", NULL, NULL),
(3, "goul", "123456", "employer", NULL, NULL),
(4, "note", "123456", "employer", NULL, NULL),
(5, "claymore", "123456", "employer", NULL, NULL),

(6, "harrypotter", "123456", "prenium", "act", 0),
(7, "seigneur", "123456",  "prenium", "com", 15),
(8, "star", "123456", "prenium", "fam", 0),
(9, "terminator", "123456", "prenium", NULL, 0),
(10, "element", "123456", "prenium", "fam", 0),

(11, "louise", "123456", "membre", "com", 0),
(12, "olivia", "123456", "membre", "act", 0),
(13, "leo", "123456", "membre", NULL, 0),
(14, "jade", "123456", "membre", "com", 0),
(15, "maria", "123456", "membre", "act", 0),

(16, "test", "123456", "employer", "fam", 0)
;
