<?php
include_once 'PHP/treatment-gestion-BDD/mediacity-lib-BD.php';


function createHtmlAcceuil($conn,$emplacement){
    $page = "pageAccueil";
    $params = recupDonneCreateHtmlBDD($conn,$page,$emplacement);
    
    $idTemp = $params[":idApi"];
    $titreTemp = $params[":titre"];
    $linkPoster = $params[":idPoster"];
    $emplacementTemp = $params[":emplacement"];
    if ($emplacementTemp === "ac-film1" || $emplacementTemp== "ac-film2" || $emplacementTemp== "ac-film3"){
        $link = "mediacity-page02-films.php";
    }else if ($emplacementTemp === "ac-serie1" || $emplacementTemp== "ac-serie2" || $emplacementTemp== "ac-serie3"){
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


function createHtmlFilm($conn,$emplacement){
    $page = "pageFilm";
    $params = recupDonneCreateHtmlBDD($conn,$page,$emplacement);

    if ($emplacement== "chef1" || $emplacement== "chef2" || $emplacement== "chef3") {
        $card = "card";
    } else {
        $card = "card-detail";
    }

    $idTemp = $params[":idApi"];
    $titreTemp = $params[":titre"];
    $linkPoster = $params[":idPoster"];
    $linkKeyRecup = $params[":idVideo"];
    $html = 
    '<figure id="'.$idTemp.'" class="affiche-legende ">
        <div class="'.$card.'">
            <div class="face face1">
                <iframe class="img-face1" src="https://www.youtube.com/embed/'.$linkKeyRecup.'" frameborder="0" allowfullscreen></iframe>
            </div> 
            <div class="face face2">
                <img class="img-face2" src="https://image.tmdb.org/t/p/w500'.$linkPoster.'" alt="affiche de '.$titreTemp.'"> 
            </div>  
        </div>    
        <span class="saut-ligne"></span>
        <p class="nom-selection majDbutMot">'.$titreTemp.'</p>
        <span class="saut-ligne"></span>
        <p class="legende-selection">Pour voir la bande annonce aller sur l\'affiche</p>
    </figure>';
    
    echo $html;
}


function createHtmlSerie($conn,$emplacement){
    $page = "pageSerie";
    $params = recupDonneCreateHtmlBDD($conn,$page,$emplacement);
    
    $idTemp = $params[":idApi"];
    $titreTemp = $params[":titre"];
    $linkPoster = $params[":idPoster"];
    $emplacementTemp = $params[":emplacement"];
    $js__mediaTemp = trim($emplacementTemp, '1234');
    if ($emplacementTemp === "chef1" || $emplacementTemp === "chef2" || $emplacementTemp === "chef3"){
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
        if ($emplacementTemp === "act1" || $emplacementTemp === "com1" || $emplacementTemp === "fam1"){
            $visibility = "active";
        }else {
            $visibility = "inactive";
        }
        $html = 
        '
        <div id="'.$idTemp.'" class="js__media-'.$js__mediaTemp.'  '.$visibility.'">
            <img class="img-slider" src="https://image.tmdb.org/t/p/w500'.$linkPoster.'" alt="afffiche '.$titreTemp.'">
            <p class="legende-slide majuscule">'.$titreTemp.'</p>
        </div>';
        
        echo $html;
        return;
    }
}
?>