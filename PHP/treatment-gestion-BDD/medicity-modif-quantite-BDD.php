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
            echo "
                <div style='display:flex; flex-direction: column; text-align: center;'>
                    <h2>Erreur !</h2>
                    <h3>Les nombres entrés ne sont pas identique.</h3>
                    <a href='../../mediacity-page09-gestion-base-donnee.php'>Retour à page ajout de film</a>
                </div>";
            die();
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
    header('Location: /php_projet-CDA/99.mediacity/projet-mediacity_PHP-en-cour/mediacity-page09-gestion-base-donnee.php');
    exit();
}

function suppCopie ($conn){
    try{
        foreach ($_GET as $key => $value) {
            $params[':' . $key] = (isset($_GET[$key]) && !empty($_GET[$key])) ? htmlspecialchars($_GET[$key]) : null;
        }
        $idTitre = $params[":id"];
        $supprimerMedia = $params[":supprimerMedia"];
        if ($supprimerMedia === "suppression du media") {
            $qry = $conn->query("DELETE FROM ressource WHERE titre = '".$idTitre."' ");
            $qry2 = $conn->query("DELETE FROM media WHERE titre = '".$idTitre."' ");
            $qry2 = $conn->query("DELETE FROM contenuaccueil WHERE titre = '".$idTitre."' ");
            $qry2 = $conn->query("DELETE FROM contenufilm WHERE titre = '".$idTitre."' ");
            $qry2 = $conn->query("DELETE FROM contenuserie WHERE titre = '".$idTitre."' ");
        }else{
            echo "
                <div style='display:flex; flex-direction: column; text-align:center; background-color: #0c1e5e; color: white;'>
                    <h2>Erreur !</h2>
                    <h3>les mots clef de suppression ne sont pas valide!</h3>
                    <p>(Entrer \"supprimer copie\")</p>
                    <a href='../../mediacity-page09-gestion-base-donnee.php'>Retour à page ajout de film</a>
                </div>";
            die();
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
    header('Location: /php_projet-CDA/99.mediacity/projet-mediacity_PHP-en-cour/mediacity-page09-gestion-base-donnee.php');
    exit();
}

function gestioNbCopie($conn){
    try{
        if (isset($_GET["modifNbCopie"])){
            modifNbCopie ($conn);
        }else if (isset($_GET["supprimerMedia"])){
            suppCopie ($conn);
        }else {
            print "Erreur ! Données envoyer non conforme!";
            die();
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}
gestioNbCopie($conn);