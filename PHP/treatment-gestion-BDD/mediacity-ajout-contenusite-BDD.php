<?php
include_once 'mediacity-lib-BD.php';
include_once 'mediacity-BDD-contenu-site.php';

function recupDonneeEntre(){
    // Récupération des valeurs saisies et application sécurité
    
    foreach ($_GET as $key => $value) {
        $params[':' . $key] = (isset($_GET[$key]) && !empty($_GET[$key])) ? htmlspecialchars($_GET[$key]) : null;
    }
    $conn = connectionBDD();
    $idApi =  $params[":idApi"];
    $titre =  $params[":titre"]; 
    $categorie =  $params[":categorie"];
    $typePrincipale =  $params[":typePrincipale"];
    $idPoster =  $params[":idPosterSelection"];
    if ($params[":idVideoSelection"] == "") {
        $idVideo = NULL;
    }else{
        $idVideo =  $params[":idVideoSelection"];
    };
    if ($params[":synopsisSelection"] == "") {
        $synopsis = NULL;
    }else{
        $synopsis =  $params[":synopsisSelection"];
    };
    $nbPossede =  $params[":nbpossede"];
    $page =  $params[":page"];
    $emplacement =  $params[":emplacement"];
    

    verifExists ($conn, $idApi, $titre, $categorie, $typePrincipale, $idPoster, $idVideo, $synopsis, $nbPossede, $page, $emplacement);
    exit();
}
recupDonneeEntre()
?>