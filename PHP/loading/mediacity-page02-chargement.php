<?php
include_once 'PHP/treatment-gestion-BDD/mediacity-lib-BD.php';


function createHtmlFilm($conn,$nameTable,$zoneEmplacement,$emplacement){
    $params = recupDonneCreateHtmlBDD($conn,$nameTable,$zoneEmplacement,$emplacement);

    if ($zoneEmplacement== "chef") {
        $card = "card";
    } else {
        $card = "card-detail";
    }
    
    $idTemp = $params[":media__idMedia"];
    $titreTemp = $params[":titre"];
    $linkPoster = $params[":idPoster"];
    $linkKeyRecup = $params[":idVideo"];
    $html = 
    '<figure id="'.$idTemp.'" class="affiche-legende '.$emplacement.'">
        <div class="'.$card.'">
            <div class="face face1">
                <iframe class="img-face1" src="https://www.youtube.com/embed/'.$linkKeyRecup.'" frameborder="0" allowfullscreen></iframe>
            </div> 
            <div class="face face2">
                <img class="img-face2" src="https://image.tmdb.org/t/p/w500'.$linkPoster.'" alt="affiche de '.$titreTemp.'"> 
            </div>  
        </div>    
        <span class="saut-ligne"></span>
        <p class="nom-selection">'.$titreTemp.'</p>
        <span class="saut-ligne"></span>
        <p class="legende-selection">Pour voir la bande annonce aller sur l\'affiche</p>
    </figure>';
    
    echo $html;

}

?>