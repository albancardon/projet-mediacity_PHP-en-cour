<?php
include_once 'mediacity-lib-BD.php';

function modifNbCopie ($conn){
    try{
        foreach ($_GET as $key => $value) {
            $params[':' . $key] = (isset($_GET[$key]) && !empty($_GET[$key])) ? htmlspecialchars($_GET[$key]) : null;
        }
        $idTitre = $params[":id"];
        $modifNbCopie = $params[":modifNbCopie"];
        $modifNbCopieConfirm = $params[":modifNbCopieConfirm"];
        if ($modifNbCopie === $modifNbCopieConfirm) {
            $qry = $conn->query("UPDATE ressource SET nbPossede = ".$modifNbCopie." WHERE titre = '".$idTitre."' ");
            $qry2 = $conn->query("UPDATE ressource SET disponibilite = ".$modifNbCopie." WHERE titre = '".$idTitre."' ");
        }else{
            print "Erreur ! les nombres entré ne sont pas identique";
            die();
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
    header('Location: /php_projet-CDA/projet-mediacity_PHP-en-cour/mediacity-page09-ajout-base-donnee.php');
    exit();
}
modifNbCopie ($conn);