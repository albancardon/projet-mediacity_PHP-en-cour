<?php
include_once 'mediacity-lib-BD.php';

function verifExists ($conn, $idApi, $titre, $categorie, $typePrincipale, $idPoster, $idVideo, $synopsis, $nbPossede, $page, $emplacement)
{
    try {
        $vqryRe = $conn-> prepare("SELECT * FROM `media` WHERE idApi=?");
        $vqryRe-> bindParam(1, $idApi);
        $vqryRe->execute();
        $countLigne = $vqryRe->rowCount();
        if ( $countLigne>= 1){
            $vqryPag= $conn-> prepare("SELECT * FROM `media` WHERE idApi=? AND page=? AND emplacement=?");
            $vqryPag-> bindParam(1, $idApi);
            $vqryPag-> bindParam(2, $page);
            $vqryPag-> bindParam(3, $emplacement);
            $vqryPag->execute();
            $countLigne2 = $vqryPag->rowCount();
            if ( $countLigne2< 1){
                modifMedia ($conn, $idApi, $idVideo, $page, $emplacement);
                header('Location: /php_projet-CDA/6.projet-mediacity_PHP/projet-mediacity_PHP-en-cour/mediacity-page08-ajout-site.php?ajout=oui');
                die();
            }else {
                header('Location: /php_projet-CDA/6.projet-mediacity_PHP/projet-mediacity_PHP-en-cour/mediacity-page08-ajout-site.php?ajout=non');
                die();
            }
        }else{
            ajoutContenumedia ($conn, $idApi, $titre, $categorie, $typePrincipale, $idPoster, $idVideo, $synopsis, $nbPossede, $page, $emplacement);
            header('Location: /php_projet-CDA/6.projet-mediacity_PHP/projet-mediacity_PHP-en-cour/mediacity-page08-ajout-site.php?ajout=oui');
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

function ajoutContenuMedia ($conn, $idApi, $titre, $categorie, $typePrincipale, $idPoster, $idVideo, $synopsis, $nbPossede, $page, $emplacement){
    deleteContenuOld ($conn, $page, $emplacement);
    try{
        $qry = $conn->prepare("INSERT INTO media (idApi, titre, categorie, typePrincipale, idPoster, idVideo, synopsis, nbPossede, disponibilite, page, emplacement) Values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $qry-> bindParam(1, $idApi);
        $qry-> bindParam(2, $titre);
        $qry-> bindParam(3, $categorie);
        $qry-> bindParam(4, $typePrincipale);
        $qry-> bindParam(5, $idPoster);
        $qry-> bindParam(6, $idVideo);
        $qry-> bindParam(7, $synopsis);
        $qry-> bindParam(8, $nbPossede);
        $qry-> bindParam(9, $nbPossede);
        $qry-> bindParam(10, $page);
        $qry-> bindParam(11, $emplacement);
        
        $qry->execute();
    
    } catch (PDOException $e) { 
        $codErreur = "SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '".$idApi."' for key 'PRIMARY'";
        $exeption = $e->getMessage();
        if ($exeption==$codErreur){
            echo "
                <div style='display:flex; flex-direction: column; text-align: center;'>
                    <h2>Erreur !</h2>
                    <h3>Ce média existe déjà  dans la base de donnée!</h3>
                    <a href='../../mediacity-page09-gestion-base-donnee.php'>Retour à page ajout de film</a>
                </div>";
        }else{
            print $e->getMessage();
            print "Erreur !: " . $e->getMessage() . "<br/>";
        }
        die();
    }
}

function modifMedia ($conn, $idApi, $idVideo, $page, $emplacement){
    deleteContenuOld ($conn, $page, $emplacement);
    try{
        $qry = $conn->prepare("UPDATE media SET idVideo = ?, page = ?, emplacement = ? WHERE idApi=?");
        $qry-> bindParam(1, $idVideo);
        $qry-> bindParam(2, $page);
        $qry-> bindParam(3, $emplacement);
        $qry-> bindParam(4, $idApi);
        
        $qry->execute();
    
    }  catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

function deleteContenuOld ($conn, $page, $emplacement){
    $null = NULL;
    $dqry = $conn->prepare("UPDATE media SET page=?, emplacement=? WHERE page=? AND emplacement=?");
    $dqry-> bindParam(1, $null);
    $dqry-> bindParam(2, $null);
    $dqry-> bindParam(3, $page);
    $dqry-> bindParam(4, $emplacement);
    $dqry->execute();
}

// test 

// $idApi = 18;
// $titre = "le cinquième élément";
// $categorie = "film";
// $typePrincipale = "action/aventure";
// $idPoster = "/8nx8sttha1Zidt73SbNncVfSwqk.jpg";
// $idVideo = "7rzmiE-pESk";
// $synopsis = NULL;
// $nbPossede = 3;
// $page = "pageFilm";
// $emplacement = "act1";


// $idApi = 98;
// $titre = "Gladiator";
// $categorie = "film";
// $typePrincipale = "action/aventure";
// $idPoster = "/5gJOu3t2QrznuJqjCG7FQDMI76t.jpg";
// $idVideo = "7rzmiE-pESk";
// $synopsis = "Le général romain Maximus est le plus fidèle soutien de l'empereur Marc Aurèle, qu'il a conduit de victoire en victoire avec une bravoure et un dévouement exemplaires. Jaloux du prestige de Maximus, et plus encore de l'amour que lui voue l'empereur, le fils de Marc Aurèle, Commode, s'arroge brutalement le pouvoir, puis ordonne l'arrestation du général et son exécution. Maximus échappe à ses assassins mais ne peut empêcher le massacre de sa famille. Capturé par un marchand d'esclaves, il devient gladiateur et prépare sa vengeance.";
// $nbPossede = 4;
// $page = "pageFilm";
// $emplacement = "act1";

// verifExists ($conn, $idApi, $titre, $categorie, $typePrincipale, $idPoster, $idVideo, $synopsis, $nbPossede, $page, $emplacement);