<?php
include_once 'PHP/head.php';
?>
<body id="page09">
<?php
include_once 'PHP/header.php';
foreach ($_POST as $key => $value) {
    $rep[':' . $key] = (isset($_POST[$key]) && !empty($_POST[$key])) ? htmlspecialchars($_POST[$key]) : null;
}
if (isset($rep[":ajout"])){  
    if ($rep[":ajout"] == "oui"){
        echo '<script language="Javascript">
        alert ("Ajout effectuer." )
        </script>';
    }
} else if (isset($rep[":nbModif"])){
    if ($rep[":nbModif"] == "oui"){
        echo '<script language="Javascript">
        alert ("Modification du nombre de copie effectuer!!" )
        </script>';
    }
} else if (isset($rep[":supression"])){
    if ($rep[":supression"] == "oui"){
        echo '<script language="Javascript">
        alert ("Suppression effectuer!!" )
        </script>';
    }
};

?>
<main id="page09_main">
    <h1 class="majuscule">Gerer un media</h1>
    <span class="saut-ligne"></span>
    <h2>Ajout media à la base de données</h2> 
    <span class="saut-ligne"></span>
    <form id="main09" class="boite-formulaire">
        <div class="main-contenu_newMedia" id="main-contenu_box-haut">
            <div class="contain_boxlist boxlistP9">
                <label for="type1">Type de media</label>
                <select name="type1" id="type1" class="boxlist_list" required>
                    <option value="">Choisissez un type</option>
                    <option value="film">Film</option>
                    <option value="serie">Série</option>
                </select>
            </div>
            <div class="contain_boxlist boxlistP9">
                <label for="genre1">Genre média</label>
                <select name="genre1" id="genre1" class="boxlist_list" required>

                </select>
            </div>
        </div>
        <div class="main-contenu_newMedia" id="main-contenu_box-bas">
            <div class="box-bas_contain">
                <label for="nomFilm1">Titre média</label>
                <input class="zone-remplir zone-film " type="text" name="nomFilm1" id="nomFilm1" placeholder="Nom média" required/>
            </div>
            <div class="box-bas_contain">
                <label for="nbCopie">Nombre de copies</label>
                <input class="zone-remplir zone-film" type="number" name="nbCopie" id="nbCopie" min="1" max="100" placeholder="nombre copie" required/>
            </div>
            <div type="button" class="btn btn-new-media" id="btn-valider1">Valider</div>
        </div>
    </form>
    <article id="affiche-Poster" class="invisibility">
        <h3 class="sous-titre">Selectionner le film voulu</h3>
        <div id="js___posterFilm" class="affiche_container">
        </div>
    </article>
    <form action="/php_projet-CDA/6.projet-mediacity_PHP/projet-mediacity_PHP-en-cour/PHP/treatment-gestion-BDD/mediacity-BDD-ajout-media.php"  method="POST">
        <input id="id-selection" type="text" name="idApi"/>
        <input id="titre-selection" type="text" name="titre"/>
        <input id="type-selection" type="text" name="categorie"/>
        <input id="genre-selection" type="text" name="typePrincipale"/>
        <input id="nbpossede-selection" type="text" name="nbpossede"/>
        <input id="idPoster-selection" type="text" name="idPosterSelection"/>
        <input id="synopsis-selection" type="text" name="synopsisSelection"/>
        <button id="btn-envoyer1" class="btn btn-send invisibilityBtnEnvoyer">Envoyer</button>
    </form>
</main>
<aside id="page09_aside" class="aside-back">
    <h2>Gestion Media </h2>
    <form class="boite-formulaire box-search">
        <div class="box-bas_contain">
            <label for="nomFilm2">Titre média</label>
            <input class="zone-remplir zone-film " type="text" name="nomFilm2" id="nomFilm2" placeholder="Nom média" required value="gladiator"/>
        </div>
        <div class="btn btn-new-media" id="btn-valider-search">Valider</div>
    </form>
    <article id="aside09__film-select" class="invisibility">
        <h3 id="titleSearch" class="majuscule"></h3>
        <div id="js___posterFilm" class="affiche_container">
            <img id="posterSearch" class="selection_img invisibility" src="">
        </div>
    </article>
    <article id="aside09__select-action" class="invisibility">
        <h2>Que voulez vous faire?</h2>
        <form action="/php_projet-CDA/6.projet-mediacity_PHP/projet-mediacity_PHP-en-cour/PHP/treatment-gestion-BDD/mediacity-BDD-modif-quantite.php"  method="get" class="boite-formulaire action__boxAction">
            <input id="titreRecherche" type="text" name="titre"/>
            <div class="boxAction_contain">
                <label for="modifNbCopie">
                    Modifier le nombre d'exemplaire que vous posséder?</br>
                    (Veuillez taper le nouveau nombre)
                </label>
                <input class="zone-remplir zone-film" type="text" name="modifNbCopie" id="modifNbCopie" placeholder="nouveau nombre copie" required />
            </div>
            <div class="boxAction_contain">
                <label for="modifNbCopieConfirm">
                    Veuillez confirmer le nouveau nombre
                </label>
                <input class="zone-remplir zone-film" type="text" name="modifNbCopieConfirm" id="modifNbCopieConfirm" placeholder="nouveau nombre copie" required />
            </div>
            <button class="btn btn-new-media" id="btn-valider-modifNb">Valider</button>
        </form>
        <form action="/php_projet-CDA/6.projet-mediacity_PHP/projet-mediacity_PHP-en-cour/PHP/treatment-gestion-BDD/mediacity-BDD-modif-quantite.php"  method="get" class="boite-formulaire action__boxAction">
            <input id="titreRecherche1" type="text" name="titre"/>
            <div class="boxAction_contain">
                <label for="supprimerMedia">
                    Supprimer le média?</br>
                    (Veuillez taper "suppression du media")
                </label>
                <input class="zone-remplir zone-film" type="text" name="supprimerMedia" id="supprimerMedia" placeholder="supprimer copie" required />
            </div>
            <button class="btn btn-new-media" id="btn-valider-sppression">Valider</button>
        </form>
    </article>
</aside>
<script src="script/Javascript-page09.js" defer></script>
<?php
include_once 'PHP/footer.php'
?>

