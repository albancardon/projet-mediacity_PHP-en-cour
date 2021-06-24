<?php
include_once '../treatment-gestion-BDD/mediacity-lib-BD.php';

session_start();

// Nettoie les données passées dans POST : htmlspecialchars
$pseudo = (isset($_POST['pseudoConn']) && !empty($_POST['pseudoConn'])) ? htmlspecialchars($_POST['pseudoConn']) : null;
$pass = (isset($_POST['passConn']) && !empty($_POST['passConn'])) ? htmlspecialchars($_POST['passConn']) : null;

// Si pseudo et mot de passe exploitables 
if ($pseudo && $pass) {
    // Crypte le pseudo et le mot de passe pour comparaison vs BDD
    $pass  = sha1(md5($pseudo) . md5($pass));
    // Connexion à BDD
    try {
        // Préparation requête : paramétrage pour éviter injections SQL
        $qry = $conn->prepare('SELECT * FROM listecompte WHERE pseudo=? AND pass=?');
        $qry->execute(array($pseudo, $pass));
        // Si une ligne est trouvée
        if ($qry->rowCount() === 1) {
            $row = $qry->fetch();
            $typeCompte = $row["typeCompte"];
            echo $typeCompte;
            if ($typeCompte === "employer") {
                $_SESSION['conn']='ok';
                $_SESSION['type']='emp';
                $_SESSION['name']=$pseudo;
                // header('location:mediacity-page06.5-user.php');
            } else if ($typeCompte === "prenium") {
                $_SESSION['conn']='ok';
                $_SESSION['type']='pren';
                $_SESSION['name']=$pseudo;
                // header('location:mediacity-page06.5-user.php');
            } else if ($typeCompte === "membre") {
                $_SESSION['conn']='ok';
                $_SESSION['type']='mem';
                $_SESSION['name']=$pseudo;
                // header('location:mediacity-page06.5-user.php');
            }
        } else {
            echo 'User inconnu';
        }
    } catch (PDOException $err) {
        echo $err->getMessage();
    }
} else {
    echo 'pseudo ou mot de passe inexploitable!';
}
