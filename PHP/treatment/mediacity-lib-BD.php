<?php

function connectionBDD(){
    try {
        $conn = new PDO ('mysql:host=localhost;dbname=mediacity','root','');
        
        // Gestion des attributs de la connexion : exception et retour du SELECT
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $conn;
    } catch  (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

function getData($conn,$nameTable,$nameOption,$emplacement){
    try{
        $qry = $conn->query("SELECT * FROM ".$nameTable." WHERE zoneEmplacement = '".$nameOption."' AND emplacement = '".$emplacement."'");
        $donnees = $qry->fetchAll();
        return $donnees;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}
?>