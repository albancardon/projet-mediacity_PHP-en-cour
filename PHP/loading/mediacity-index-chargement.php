<?php
include_once 'PHP/treatment-gestion-BDD/mediacity-lib-BD.php';


function createHtmlAcceuil($conn,$nameTable,$zoneEmplacement,$emplacement){
    $params = recupDonneCreateHtmlBDD($conn,$nameTable,$zoneEmplacement,$emplacement);
    
    $idTemp = $params[":media__idMedia"];
    $titreTemp = $params[":titre"];
    $linkPoster = $params[":idPoster"];
    $zoneEmplacementTemp = $params[":zoneEmplacement"];
    if ($zoneEmplacementTemp === "ac-film"){
        $link = "mediacity-page02-films.php";
    }else if ($zoneEmplacementTemp === "ac-series"){
        $link = "mediacity-page03-series.php";
    }


    $html = 
    '
    <figure id="'.$idTemp.'"  class="effet-affiche">
        <a href="'.$link.'">
            <img class="img video" src="https://image.tmdb.org/t/p/w500'.$linkPoster.'" alt="afffiche '.$titreTemp.'">
        </a>
    </figure>';
    
    echo $html;
    return;
}
?>