<?php
include_once 'mediacity-lib-BD.php';

function verifExists ($conn, $idMedia, $titre, $typeMedia, $zoneEmplacement, $emplacement, $nbPossede, $reserver, $synopsis, $idposter, $idVideo){
    try {
        $vqryRe = $conn-> prepare("SELECT * FROM `ressource` WHERE media__idMedia=?");
        $vqryRe-> bindParam(1, $idMedia);
        $vqryRe->execute();
        $countLigne = $vqryRe->rowCount();
        if ( $countLigne>= 1){
            if ($typeMedia ==" acc") {
                $vqryPag= $conn-> prepare("SELECT * FROM `contenuaccueil` WHERE media__idMedia=?");
                $vqryPag-> bindParam(1, $idMedia);
                $vqryPag->execute();
                $countLigne2 = $vqryPag->rowCount();
                if ( $countLigne2< 1){
                    ajoutContenuMedia ($conn, $idMedia, $titre, $typeMedia, $zoneEmplacement, $emplacement, $idposter, $idVideo);
                    header('Location: /php_projet-CDA/6.projet-mediacity_PHP/projet-mediacity_PHP-en-cour/mediacity-page08-ajout-site.php?ajout=oui');
                    die();
                }else {
                    header('Location: /php_projet-CDA/6.projet-mediacity_PHP/projet-mediacity_PHP-en-cour/mediacity-page08-ajout-site.php?ajout=non');
                    die();
                }
            }else if($typeMedia ==" film"){
                $vqryPag= $conn-> prepare("SELECT * FROM `contenufilm` WHERE media__idMedia=?");
                $vqryPag-> bindParam(1, $idMedia);
                $vqryPag->execute();
                $countLigne3 = $vqryPag->rowCount();
                if ( $countLigne3< 1){
                    ajoutContenuMedia ($conn, $idMedia, $titre, $typeMedia, $zoneEmplacement, $emplacement, $idposter, $idVideo);
                    header('Location: /php_projet-CDA/6.projet-mediacity_PHP/projet-mediacity_PHP-en-cour/mediacity-page08-ajout-site.php?ajout=oui');
                    die();
                }else {
                    header('Location: /php_projet-CDA/6.projet-mediacity_PHP/projet-mediacity_PHP-en-cour/mediacity-page08-ajout-site.php?ajout=non');
                    die();
                }
            }else if ($typeMedia ==" serie"){
                $vqryPag= $conn-> prepare("SELECT * FROM `contenuserie` WHERE media__idMedia=?");
                $vqryPag-> bindParam(1, $idMedia);
                $vqryPag->execute();
                $countLigne4 = $vqryPag->rowCount();
                if ( $countLigne4< 1){
                    ajoutContenuMedia ($conn, $idMedia, $titre, $typeMedia, $zoneEmplacement, $emplacement, $idposter, $idVideo);
                    header('Location: /php_projet-CDA/6.projet-mediacity_PHP/projet-mediacity_PHP-en-cour/mediacity-page08-ajout-site.php?ajout=oui');
                    die();
                }else {
                    header('Location: /php_projet-CDA/6.projet-mediacity_PHP/projet-mediacity_PHP-en-cour/mediacity-page08-ajout-site.php?ajout=non');
                    die();
                }
            }
            die();
        }else{
            ajoutMediaContenuSite ($conn, $idMedia, $titre);
            ajoutRessourceContenuSite($conn, $idMedia, $titre, $typeMedia, $zoneEmplacement, $emplacement, $nbPossede, $reserver, $synopsis, $idposter);
            ajoutContenumedia ($conn, $idMedia, $titre, $typeMedia, $zoneEmplacement, $emplacement, $idposter, $idVideo);
            header('Location: /php_projet-CDA/6.projet-mediacity_PHP/projet-mediacity_PHP-en-cour/mediacity-page08-ajout-site.php?ajout=oui');
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

function ajoutMediaContenuSite ($conn, $idMedia, $titre){
    try{
        $qry = $conn->prepare("INSERT INTO media (idMedia, titre) Values (?, ?)");
        $qry-> bindParam(1, $idMedia);
        $qry-> bindParam(2, $titre);
        
        $qry->execute();
        
    
    } catch (PDOException $e) { 
        $codErreur = "SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '".$idMedia."' for key 'PRIMARY'";
        $exeption = $e->getMessage();
        if ($exeption==$codErreur){
            echo "
                <div style='display:flex; flex-direction: column; text-align: center;'>
                    <h2>Erreur !</h2>
                    <h3>Ce média existe déjà  dans la base de donnée!</h3>
                    <a href='../../mediacity-page08-ajout-site.php'>Retour à page ajout de film</a>
                </div>";
        }else{
            print $e->getMessage();
            print "Erreur !: " . $e->getMessage() . "<br/>";
        }
        die();
    }
}

function ajoutRessourceContenuSite($conn, $idMedia, $titre, $typeMedia, $zoneEmplacement, $emplacement, $nbPossede, $reserver, $synopsis, $idposter){
    try {
        if ($typeMedia == "acc" && $zoneEmplacement == "film" && $emplacement == "emp1") {
            $qry2 = $conn->prepare("INSERT INTO ressource (media__idMedia, titre, typeMedia, genrePrincipale, nbPossede, disponibilite, reserver, synopsis, idposter) Values (?, ?, ?, ?, ?, ?, ?, ?,?)");
            $qry2-> bindParam(1, $idMedia);
            $qry2-> bindParam(2, $titre);
            $qry2-> bindParam(3, $zoneEmplacement);
            $qry2-> bindParam(4, "act");
            $qry2-> bindParam(5, $nbPossede);
            $qry2-> bindParam(6, $nbPossede);
            $qry2-> bindParam(7, $reserver);
            $qry2-> bindParam(8, $synopsis);
            $qry2-> bindParam(9, $idposter);
            
            $qry2->execute();
        } else if ($typeMedia == "acc" && $zoneEmplacement == "film" && $emplacement == "emp") {
            $qry2 = $conn->prepare("INSERT INTO ressource (media__idMedia, titre, typeMedia, genrePrincipale, nbPossede, disponibilite, reserver, synopsis, idposter) Values (?, ?, ?, ?, ?, ?, ?, ?,?)");
            $qry2-> bindParam(1, $idMedia);
            $qry2-> bindParam(2, $titre);
            $qry2-> bindParam(3, $zoneEmplacement);
            $qry2-> bindParam(4, "com");
            $qry2-> bindParam(5, $nbPossede);
            $qry2-> bindParam(6, $nbPossede);
            $qry2-> bindParam(7, $reserver);
            $qry2-> bindParam(8, $synopsis);
            $qry2-> bindParam(9, $idposter);
            
            $qry2->execute();
        } else if ($typeMedia == "acc" && $zoneEmplacement == "film" && $emplacement == "emp") {
            $qry2 = $conn->prepare("INSERT INTO ressource (media__idMedia, titre, typeMedia, genrePrincipale, nbPossede, disponibilite, reserver, synopsis, idposter) Values (?, ?, ?, ?, ?, ?, ?, ?,?)");
            $qry2-> bindParam(1, $idMedia);
            $qry2-> bindParam(2, $titre);
            $qry2-> bindParam(3, $zoneEmplacement);
            $qry2-> bindParam(4, "fam");
            $qry2-> bindParam(5, $nbPossede);
            $qry2-> bindParam(6, $nbPossede);
            $qry2-> bindParam(7, $reserver);
            $qry2-> bindParam(8, $synopsis);
            $qry2-> bindParam(9, $idposter);
            
            $qry2->execute();
        }

        $qry2 = $conn->prepare("INSERT INTO ressource (media__idMedia, titre, typeMedia, genrePrincipale, nbPossede, disponibilite, reserver, synopsis, idposter) Values (?, ?, ?, ?, ?, ?, ?, ?,?)");
        $qry2-> bindParam(1, $idMedia);
        $qry2-> bindParam(2, $titre);
        $qry2-> bindParam(3, $typeMedia);
        $qry2-> bindParam(4, $zoneEmplacement);
        $qry2-> bindParam(5, $nbPossede);
        $qry2-> bindParam(6, $nbPossede);
        $qry2-> bindParam(7, $reserver);
        $qry2-> bindParam(8, $synopsis);
        $qry2-> bindParam(9, $idposter);
        
        $qry2->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

function ajoutContenuMedia ($conn, $idMedia, $titre, $typeMedia, $zoneEmplacement, $emplacement, $idposter, $idVideo){
    try {
        switch ($typeMedia) {
            case 'acc':
                $table = "contenuaccueil";
                deleteVideo ($conn, $zoneEmplacement, $emplacement, $table);
                $qry3 = $conn->prepare("INSERT INTO contenuaccueil (media__idMedia, titre, typeMedia, zoneEmplacement, emplacement, idposter, idVideo) Values (?, ?, ?, ?, ?, ?, ?)");
                $qry3-> bindParam(1, $idMedia);
                $qry3-> bindParam(2, $titre);
                $qry3-> bindParam(3, $typeMedia);
                $qry3-> bindParam(4, $zoneEmplacement);
                $qry3-> bindParam(5, $emplacement);
                $qry3-> bindParam(6, $idposter);
                $qry3-> bindParam(7, $idVideo);
                $qry3->execute();
                break;
            case 'film':
                $table = "contenufilm";
                deleteVideo ($conn, $zoneEmplacement, $emplacement, $table);
                $qry3 = $conn->prepare("INSERT INTO contenufilm (media__idMedia, titre, typeMedia, zoneEmplacement, emplacement, idposter, idVideo) Values (?, ?, ?, ?, ?, ?, ?)");
                $qry3-> bindParam(1, $idMedia);
                $qry3-> bindParam(2, $titre);
                $qry3-> bindParam(3, $typeMedia);
                $qry3-> bindParam(4, $zoneEmplacement);
                $qry3-> bindParam(5, $emplacement);
                $qry3-> bindParam(6, $idposter);
                $qry3-> bindParam(7, $idVideo);
                $qry3->execute();
                break;
            case 'serie':
                $table = "contenuserie";
                deleteVideo ($conn, $zoneEmplacement, $emplacement, $table);
                $qry3 = $conn->prepare("INSERT INTO contenuserie (media__idMedia, titre, typeMedia, zoneEmplacement, emplacement, idposter, idVideo) Values (?, ?, ?, ?, ?, ?, ?)");
                $qry3-> bindParam(1, $idMedia);
                $qry3-> bindParam(2, $titre);
                $qry3-> bindParam(3, $typeMedia);
                $qry3-> bindParam(4, $zoneEmplacement);
                $qry3-> bindParam(5, $emplacement);
                $qry3-> bindParam(6, $idposter);
                $qry3-> bindParam(7, $idVideo);
                $qry3->execute();
                break;
            default:
                break;
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

function deleteVideo ($conn, $zoneEmplacement, $emplacement, $table){
    switch ($table) {
        case 'contenuaccueil':
            $dqry = $conn->prepare("DELETE FROM `contenuaccueil` WHERE zoneEmplacement = ? and emplacement =?");
            $dqry->execute(array($zoneEmplacement, $emplacement));
            break;
        case 'contenufilm':
            $dqry = $conn->prepare("DELETE FROM `contenufilm` WHERE zoneEmplacement = ? and emplacement =?");
            $dqry->execute(array($zoneEmplacement, $emplacement));
            break;
        case 'contenuserie':
            $dqry = $conn->prepare("DELETE FROM `contenufilm` WHERE zoneEmplacement = ? and emplacement =?");
            $dqry->execute(array($zoneEmplacement, $emplacement));
            break;
        default:
            break;
    }
}


// $idMedia = 19;
// $titre = "le cinquième élément";
// $typeMedia = "film";
// $zoneEmplacement = "act";
// $emplacement = "emp1";
// $idposter = "/8nx8sttha1Zidt73SbNncVfSwqk.jpg";
// $idVideo = "7rzmiE-pESk";
// $reserver = NULL;
// $genrePrincipale = $zoneEmplacement;
// $nbPossede = 3;
// $synopsis = NULL;

// verifExists($conn, $idMedia, $titre, $typeMedia, $zoneEmplacement, $emplacement, $genrePrincipale, $nbPossede, $reserver, $synopsis, $idposter, $idVideo);