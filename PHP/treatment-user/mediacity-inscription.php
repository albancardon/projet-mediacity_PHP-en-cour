<?php
include_once '../treatment-gestion-BDD/mediacity-lib-BD.php';

// Récupération des valeurs saisies et application sécurité
foreach ($_POST as $key => $val) {
    $params[':' . $key] = (isset($_POST[$key]) && !empty($_POST[$key])) ? htmlspecialchars($_POST[$key]) : null;
}

// Crypte mot de passe
$params[':pass'] = sha1(md5($params[':pseudo']) . md5($params[':pass']));

// Teste si le mail et pseudo n'existent pas déjà
$sql = 'SELECT COUNT(*) AS nbmail FROM users WHERE mail=?';
$qry = $conn->prepare($sql);
$qry->execute(array($params[':mail']));
$rowMail = $qry->fetch();

$sql = 'SELECT COUNT(*) As nbpseudo FROM listecompte WHERE pseudo=?';
$qry = $conn->prepare($sql);
$qry->execute(array($params[':pseudo']));
$rowPseudo = $qry->fetch();

// Verification si mail ou pseudo existent, si existe pas envoie a la BDD
if ($rowMail['nbmail'] == 1) {
    echo '<p>Cette adresse mail existe déjà !';
    echo '<a href="mediacity-page09-gestion-base-donnee.php">Retour à la page pécédente</a>';
}else if ($rowPseudo['nbpseudo'] == 1) {
    echo '<p>Ce pseudo existe déjà !';
    echo '<a href="mediacity-page09-gestion-base-donnee.php">Retour à la page pécédente</a>';
}else {
    $sql = 'INSERT INTO users(nom, prenom, age, tel, mail, codePostal) VALUES("'.$params[":nom"].'", "'.$params[":prenom"].'", "'.$params[":age"].'", "'.$params[":tel"].'", "'.$params[":mail"].'", "'.$params[":codePostal"].'");';
    $qry = $conn->prepare($sql);
    $qry->execute();

    $sql = 'SELECT idUtilisateur AS id FROM users WHERE nom="'.$params[":nom"].'"';
    $qry = $conn->prepare($sql);
    $qry->execute();
    $result = $qry->fetch();
    echo( $result["id"]);

    $membre = "membre";
    $sql1 = 'INSERT INTO listecompte(users_idUtilisateur,pseudo, pass, typeCompte) VALUES('.$result["id"].', "'.$params[":pseudo"].'", "'.$params[":pass"].'", "'.$membre.'");';
    $qry1 = $conn->prepare($sql1);
    $qry1->execute();
    header('location:/php_projet-CDA/99.mediacity/projet-mediacity_PHP-en-cour/mediacity-page06-contact.php?insc=ok');
}