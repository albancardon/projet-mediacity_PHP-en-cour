<?php
include_once 'mediacity-lib-BD.php';

function modifNbCopie ($conn){
    try{
        foreach ($_POST as $key => $value) {
            $params[':' . $key] = (isset($_POST[$key]) && !empty($_POST[$key])) ? htmlspecialchars($_POST[$key]) : null;
        }
        $titre = $params[":titre"];
        $modifNbCopie = $params[":modifNbCopie"];
        $modifNbCopieConfirm = $params[":modifNbCopieConfirm"];
        if ($modifNbCopie === $modifNbCopieConfirm) {
            $qry = $conn->prepare("UPDATE media SET nbPossede = ? WHERE titre = ? ");
            $qry->execute(array($modifNbCopie,$titre));

            $qry2 = $conn->prepare("UPDATE media SET disponibilite = ? WHERE titre = ? ");
            $qry2->execute(array($modifNbCopie,$titre));
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
    header('Location: /php_projet-CDA/6.projet-mediacity_PHP/projet-mediacity_PHP-en-cour/mediacity-page09-gestion-base-donnee.php?nbModif=oui');
    exit();
}

function suppCopie ($conn){
    try{
        foreach ($_POST as $key => $value) {
            $params[':' . $key] = (isset($_POST[$key]) && !empty($_POST[$key])) ? htmlspecialchars($_POST[$key]) : null;
        }
        $titre = $params[":titre"];
        $supprimerMedia = $params[":supprimerMedia"];
        if ($supprimerMedia === "suppression du media") {
            $qry = $conn->prepare("DELETE FROM media WHERE titre = ? ");
            $qry->execute(array($titre));
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
    header('Location: /php_projet-CDA/6.projet-mediacity_PHP/projet-mediacity_PHP-en-cour/mediacity-page09-gestion-base-donnee.php?supression=oui');
    exit();
}

function gestioNbCopie($conn){
    try{
        if (isset($_POST["modifNbCopie"])){
            modifNbCopie ($conn);
        }else if (isset($_POST["supprimerMedia"])){
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