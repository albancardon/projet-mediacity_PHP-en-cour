<?php
include_once 'PHP/head.php';
?>
<body id="page09">
<?php
include_once 'PHP/header.php'
?>
<main id="page09_main">
    <h1 class="majuscule">Gerer un media </br>a la base de donnee</h1>
    <span class="saut-ligne"></span>
    <h2>Ajout media à la base de données</h2> 
    <span class="saut-ligne"></span>
    <form id="main09" class="boite-formulaire">
        <div class="main-contenu_newMedia" id="main-contenu_box-haut">
            <div class="contain_boxlist boxlistP9">
                <label for="type1">Type de media</label>
                <select name="type1" id="type1" class="boxlist_list" required>
                    <option value="">Choisissez un type</option>
                    <option value="film" selected>Film</option>
                    <option value="serie">Série</option>
                </select>
            </div>
            <div class="contain_boxlist boxlistP9">
                <label for="genre1">Genre média</label>
                <select name="genre1" id="genre1" class="boxlist_list" required>
                    <option class="optionGenre" value="act" selected>Select</option>

                </select>
            </div>
        </div>
        <div class="main-contenu_newMedia" id="main-contenu_box-bas">
            <div class="box-bas_contain">
                <label for="nomFilm1">Titre média</label>
                <input class="zone-remplir zone-film " type="text" name="nomFilm1" id="nomFilm1" placeholder="Nom média" required value="gladiator"/>
            </div>
            <div class="box-bas_contain">
                <label for="nbCopie">Nombre de copies</label>
                <input class="zone-remplir zone-film" type="number" name="nbCopie" id="nbCopie" min="1" max="100" placeholder="nombre copie" required value="4"/>
            </div>
            <div type="button" class="btn btn-new-media" id="btn-valider1">Valider</div>
        </div>
    </form>
    <article id="affiche-Poster" class="invisibility">
        <h3 class="sous-titre">Selectionner le film voulu</h3>
        <div id="js___posterFilm" class="affiche_container">
        </div>
    </article>
    <form action="/php_projet-CDA/99.mediacity/projet-mediacity_PHP-en-cour/PHP/treatment/mediacity-ajout-media-BDD.php"  method="get">
        <input id="id-selection" type="text" name="id"/>
        <input id="titre-selection" type="text" name="titre"/>
        <input id="type-selection" type="text" name="type" value="film"/>
        <input id="genre-selection" type="text" name="genre" value="act"/>
        <input id="nbpossede-selection" type="text" name="nbpossede" value="4"/>
        <input id="idPoster-selection" type="text" name="idPosterSelection"/>
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
        <form action="/php_projet-CDA/99.mediacity/projet-mediacity_PHP-en-cour/PHP/treatment/medicity-modif-quantite-BDD.php"  method="get" class="boite-formulaire action__boxAction">
            <input id="titreRecherche" type="text" name="id"/>
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
        <form action="/php_projet-CDA/99.mediacity/projet-mediacity_PHP-en-cour/PHP/treatment/medicity-modif-quantite-BDD.php"  method="get" class="boite-formulaire action__boxAction">
            <input id="titreRecherche1" type="text" name="id"/>
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

