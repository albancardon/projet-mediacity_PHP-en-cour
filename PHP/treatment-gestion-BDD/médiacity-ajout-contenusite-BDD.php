<?php
include_once 'mediacity-lib-BD.php';

function ajoutMediaContenuFilm ($conn, $idMedia, $titre){
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

function ajoutRessourceContenuFilm($conn, $idMedia, $titre, $typeMedia, $genrePrincipale, $nbPossede, $reserver, $synopsis, $idposter){
    try {
        $qry2 = $conn->prepare("INSERT INTO ressource (media__idMedia, titre, typeMedia, genrePrincipale, nbPossede, disponibilite, reserver, synopsis, idposter) Values (?, ?, ?, ?, ?, ?, ?, ?,?)");
        $qry2-> bindParam(1, $idMedia);
        $qry2-> bindParam(2, $titre);
        $qry2-> bindParam(3, $typeMedia);
        $qry2-> bindParam(4, $genrePrincipale);
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

function ajoutContenuFilm ($conn, $idMedia, $titre, $typeMedia, $zoneEmplacement, $emplacement, $idposter, $idVideo){{
    try {
        $qry2 = $conn->prepare("INSERT INTO ressource (media__idMedia, titre, typeMedia, zoneEmplacement, emplacement, idposter, idVideo) Values (?, ?, ?, ?, ?, ?, ?)");
        $qry2-> bindParam(1, $idMedia);
        $qry2-> bindParam(2, $titre);
        $qry2-> bindParam(3, $typeMedia);
        $qry2-> bindParam(4, $zoneEmplacement);
        $qry2-> bindParam(5, $emplacement);
        $qry2-> bindParam(6, $idposter);
        $qry2-> bindParam(7, $idVideo);
        
        $qry2->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

function recupDonneeEntre(){
    // Récupération des valeurs saisies et application sécurité
    
    foreach ($_GET as $key => $value) {
        $params[':' . $key] = (isset($_GET[$key]) && !empty($_GET[$key])) ? htmlspecialchars($_GET[$key]) : null;
    }
    $conn = connectionBDD();
    $idMedia =  $params[":id"];
    $titre =  $params[":titre"]; 
    $typeMedia =  $params[":type"];
    $genrePrincipale =  $params[":genre"];
    $nbPossede =  $params[":nbpossede"];
    $synopsis =  $params[":synopsisSelection"];
    $idposter =  $params[":idPosterSelection"];
    $reserver = FALSE;
    

    ajoutMedia ($conn, $idMedia, $titre);
    ajoutRessource ($conn, $idMedia, $titre, $typeMedia, $genrePrincipale, $nbPossede, $reserver, $synopsis, $idposter);
    
    // header('Location: /php_projet-CDA/6.projet-mediacity_PHP/projet-mediacity_PHP-en-cour/mediacity-page08-ajout-site.php');
    // exit();
}

?>