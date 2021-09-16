<?php
include_once 'mediacity-lib-BD.php';

function ajoutMedia ($conn, $idApi, $titre, $categorie, $typePrincipale, $idPoster, $idVideo, $synopsis, $nbPossede){
    try{
        $qry = $conn->prepare("INSERT INTO media (idApi, titre, categorie, typePrincipale, idPoster, idVideo, synopsis, nbPossede, disponibilite) Values (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $qry-> bindParam(1, $idApi);
        $qry-> bindParam(2, $titre);
        $qry-> bindParam(3, $categorie);
        $qry-> bindParam(4, $typePrincipale);
        $qry-> bindParam(5, $idPoster);
        $qry-> bindParam(6, $idVideo);
        $qry-> bindParam(7, $synopsis);
        $qry-> bindParam(8, $nbPossede);
        $qry-> bindParam(9, $nbPossede);
        
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

function recupDonneeEntre(){
    // Récupération des valeurs saisies et application sécurité
    
    foreach ($_POST as $key => $value) {
        $params[':' . $key] = (isset($_POST[$key]) && !empty($_POST[$key])) ? htmlspecialchars($_POST[$key]) : null;
    }
    $conn = connectionBDD();
    $idApi =  $params[":idApi"];
    $titre =  $params[":titre"]; 
    $categorie =  $params[":categorie"];
    $typePrincipale =  $params[":typePrincipale"];
    $idPoster =  $params[":idPosterSelection"];
    $idVideo = NULL;
    if ($params[":categorie"]=="serie") {
        $synopsis = NULL;
    } else {
        $synopsis =  $params[":synopsisSelection"];
    }
    
    $nbPossede =  $params[":nbpossede"];
    
    ajoutMedia ($conn, $idApi, $titre, $categorie, $typePrincipale, $idPoster, $idVideo, $synopsis, $nbPossede);
    
    header('Location: /php_projet-CDA/6.projet-mediacity_PHP/projet-mediacity_PHP-en-cour/mediacity-page09-gestion-base-donnee.php?ajout=oui');
    exit();
}

recupDonneeEntre()
?>