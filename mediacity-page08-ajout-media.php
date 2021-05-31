<?php
include_once 'PHP/head.php'
?>
<body id="pageX">
<?php
include_once 'PHP/header.php'
?>
<main>
    <h1>Ajouter un nouveau media</h1>
    <form action="get">
        <label for="nom-film">Titre film</label>
        <input class="zone-remplir" type="text" name="nom-film" id="nom-film" placeholder="Votre film" required />

        <input id="btn-envoyer" type="button" value="Envoyer">
        <select name="nomFilm" > 
            <option value="">Selectionnez film</option> 
            <?php 
                //on parcourt la variable résultat pour afficher les immatriculations 
                while ($donnees = $resultat->fetch()) { 
                        echo "
                        <option  
                        value=".$donnees['immatriculation'].">".$donnees['immatriculation']." 
                        </option>"; 
                } 
            ?> 
        </select> 
    </form>
</main>