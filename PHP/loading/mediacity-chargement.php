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


function createHtmlSerie($conn,$nameTable,$zoneEmplacement,$emplacement){
    $params = recupDonneCreateHtmlBDD($conn,$nameTable,$zoneEmplacement,$emplacement);
    
    $idTemp = $params[":media__idMedia"];
    $titreTemp = $params[":titre"];
    $linkPoster = $params[":idPoster"];
    $zoneEmplacementTemp = $params[":zoneEmplacement"];
    if ($zoneEmplacementTemp === "chef"){
        $html = 
        '
        <div id="'.$idTemp.' class="active">
            <img class="img-select-chef-series" src="https://image.tmdb.org/t/p/w500'.$linkPoster.'" alt="">
            <p class="legende-slide majuscule">'.$titreTemp.'</p>
        </div>';
        
        echo $html;
        return;
    }else{
        $emplacementTemp = $params[":emplacement"];
        if ($emplacementTemp === "emp1"){
            $visibility = "active";
        }else {
            $visibility = "inactive";
        }
        $html = 
        '
        <div id="'.$idTemp.'" class="js__media-'.$zoneEmplacementTemp.'  '.$visibility.'">
            <img class="img-slider" src="https://image.tmdb.org/t/p/w500'.$linkPoster.'" alt="afffiche '.$titreTemp.'">
            <p class="legende-slide majuscule">'.$titreTemp.'</p>
        </div>';
        
        echo $html;
        return;
    }
}
?>