<?php
include_once 'PHP/treatment-gestion-BDD/mediacity-lib-BD.php';


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