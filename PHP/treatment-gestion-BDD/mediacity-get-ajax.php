<?php
include_once 'mediacity-lib-BD.php';

function getUrlPoster($conn){
    try{
        foreach ($_GET as $key => $value) {
            $params[':' . $key] = (isset($_GET[$key]) && !empty($_GET[$key])) ? htmlspecialchars($_GET[$key]) : null;
        }
        $idTitre = $params[":nomFilmGet"];
        $qry = $conn->prepare("SELECT idPoster FROM media WHERE titre LIKE ?");
        $qry->execute(array($idTitre));
        $donnees = $qry->fetchAll();
        foreach ($donnees as $tab){
            foreach($tab as $key => $value){
                $recupReponse [':' . $key] = (isset($tab[$key]) && !empty($tab[$key])) ? $tab[$key] : null;
            }
        };
        if (isset($recupReponse[":idPoster"])){
            $urlPoster = $recupReponse[":idPoster"];
            echo $urlPoster;
            die();
        }else {
            echo "No DATA";
            die();
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}
getUrlPoster($conn);