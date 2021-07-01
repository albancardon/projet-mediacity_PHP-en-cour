<?php

function connectionBDD(){
    try {
        $conn = new PDO ('mysql:host=localhost;dbname=mediacity','root','');
        
        // Gestion des attributs de la connexion : exception et retour du SELECT
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $conn;
    } catch  (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

function getDataPage($conn,$nameTable,$zoneEmplacement,$emplacement){
    try{
        switch ($nameTable) {
            case 'contenuaccueil':
                $qry = $conn->prepare("SELECT * FROM `contenuaccueil` WHERE zoneEmplacement = ? AND emplacement = ?");
                $qry->execute(array($zoneEmplacement,$emplacement));
                $donnees = $qry->fetchAll();
                break;
            case 'contenufilm':
                $qry = $conn->prepare("SELECT * FROM `contenufilm` WHERE zoneEmplacement = ? AND emplacement = ?");
                $qry->execute(array($zoneEmplacement,$emplacement));
                $donnees = $qry->fetchAll();
                break;
            case 'contenuserie':
                $qry = $conn->prepare("SELECT * FROM `contenuserie` WHERE zoneEmplacement = ? AND emplacement = ?");
                $qry->execute(array($zoneEmplacement,$emplacement));
                $donnees = $qry->fetchAll();
                break;
            default:
                $donnees = "Error!!";
                break;
        }
        return $donnees;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

function recupDonneCreateHtmlBDD($conn,$nameTable,$zoneEmplacement,$emplacement){
    $donnes = getDataPage($conn,$nameTable,$zoneEmplacement,$emplacement);
    foreach ($donnes as $tab){
        foreach($tab as $key => $value){
            $params [':' . $key] = (isset($tab[$key]) && !empty($tab[$key])) ? $tab[$key] : null;
        }
    };
    return  $params;
}

function getDataModif($conn,$titre){
    try{
        $qry = $conn->prepare("SELECT * FROM ressource WHERE titre = ?");
        $qry->execute(array($titre));
        $donnees = $qry->fetchAll();
        return $donnees;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

$conn = connectionBDD();
?>