<?php
include_once 'mediacity-lib-BD.php';

$conn = connectionBDD();

function recupDonneBDD($conn,$nameTable,$nameOption,$emplacement){
    $donnes = getData($conn,$nameTable,$nameOption,$emplacement);
    foreach ($donnes as $tab){
        foreach($tab as $key => $value){
            echo "<br/>";
            echo $value." ";
            $params [':' . $key] = (isset($tab[$key]) && !empty($tab[$key])) ? $tab[$key] : null;
        }
        echo "<br/>";
        var_dump($params);
    };
    return  $params;
};


function createHtml($conn,$nameTable,$nameOption,$emplacement){
    $params = recupDonneBDD($conn,$nameTable,$nameOption,$emplacement);

    $idTemp = $params[":media__idMedia"];
    $titreTemp = $params[":titre"];
    $linkPoster = $params[":linkPoster"];
    $linkKeyRecup = $params[":idVideo"];
    $html = 
    '<figure id="'.$idTemp.'" class="affiche-legende '.$emplacement.'">
        <div class="card">
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