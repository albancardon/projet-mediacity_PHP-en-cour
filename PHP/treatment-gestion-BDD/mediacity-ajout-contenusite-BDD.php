<?php
include_once 'mediacity-lib-BD.php';
include_once 'mediacity-BDD-contenu-site.php';

function recupDonneeEntre(){
    // Récupération des valeurs saisies et application sécurité
    
    foreach ($_GET as $key => $value) {
        $params[':' . $key] = (isset($_GET[$key]) && !empty($_GET[$key])) ? htmlspecialchars($_GET[$key]) : null;
    }
    $conn = connectionBDD();
    $idMedia =  $params[":id"];
    $titre =  $params[":titre"]; 
    $typeMedia =  $params[":type"];
    $zoneEmplacement =  $params[":zoneEmplacement"];
    $emplacement =  $params[":emplacement"];
    $nbPossede =  $params[":nbpossede"];
    if ($params[":synopsisSelection"] == "") {
        $synopsis = NULL;
    }else{
        $synopsis =  $params[":synopsisSelection"];
    }
    $idposter =  $params[":idPosterSelection"];
    if ($params[":idVideoSelection"] == "") {
        $idVideo = NULL;
    }else{
        $idVideo =  $params[":idVideoSelection"];
    }
    $reserver = FALSE;
    

    verifExists ($conn, $idMedia, $titre, $typeMedia, $zoneEmplacement, $emplacement, $nbPossede, $reserver, $synopsis, $idposter, $idVideo);
    exit();
}
recupDonneeEntre()
?>