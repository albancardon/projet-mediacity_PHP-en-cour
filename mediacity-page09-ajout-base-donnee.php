<?php
include_once 'PHP/head.php'
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
                <input class="zone-remplir zone-film " type="text" name="nomFilm1" id="nomFilm1" placeholder="Nom média" required />
            </div>
            <div class="box-bas_contain">
                <label for="nbCopie">Nombre de copies</label>
                <input class="zone-remplir zone-film" type="text" name="nbCopie" id="nbCopie" placeholder="nombre copie" required />
            </div>
            <div type="button" class="btn btn-new-media" id="btn-valider1">Valider</div>
        </div>
    </form>
    <article class="main_affiche">
        <h3 class="sous-titre">Selectionner le film voulu</h3>
        <div id="js___posterFilm" class="affiche_container">
        </div>
    </article>
    <button id="btn-envoyer1" class="btn btn-send invisibility">Envoyer</button>
</main>
<aside id="page09_aside" class="aside-back">
    <h2>Gestion Media </h2>
    <form class="boite-formulaire box-search">
        <div class="box-bas_contain">
            <label for="nomFilm1">Titre média</label>
            <input class="zone-remplir zone-film " type="text" name="nomFilm1" id="nomFilm1" placeholder="Nom média" required value="Jurassic parc" />
        </div>
        <div type="button" class="btn btn-new-media" id="btn-valider-search">Valider</div>
    </form>
    <article class="aside09__film-select">
        <h3>Jurassic parc</h3>
        <div id="js___posterFilm" class="affiche_container">
            <img class="selection_img" src="img/page-02-film/jurassic-park.jpg" alt="affiche jurassic park">
        </div>
    </article>
    <article class="aside09__select-action">
        <h2>Que voulez vous faire?</h2>
        <form  class="boite-formulaire action__boxAction">
            <div class="boxAction_contain">
                <label for="modifNbCopie">
                    Modifier le nombre d'exemplaire que vous posséder?</br>
                    (Veuillez taper le nouveau nombre)
                </label>
                <input class="zone-remplir zone-film" type="text" name="modifNbCopie" id="modifNbCopie" placeholder="nouveau nombre copie" required />
            </div>
            <div class="boxAction_contain">
                <label for="modifNbCopie1">
                    Veuillez confirmer le nouveau nombre
                </label>
                <input class="zone-remplir zone-film" type="text" name="modifNbCopie1" id="modifNbCopie1" placeholder="nouveau nombre copie" required />
            </div>
            <div type="button" class="btn btn-new-media" id="btn-valider-modifNb">Valider</div>
        </form>
        <form  class="boite-formulaire action__boxAction">
            <div class="boxAction_contain">
                <label for="supprimerMedia">
                    Supprimer le média?</br>
                    (Veuillez taper "suppression du media")
                </label>
                <input class="zone-remplir zone-film" type="text" name="supprimerMedia" id="supprimerMedia" placeholder="supprimer copie" required />
            </div>
            <div type="button" class="btn btn-new-media" id="btn-valider-sppression">Valider</div>
        </form>
    </article>
</aside>
<script src="script/Javascript-page09.js" defer></script>
<?php
include_once 'PHP/footer.php'
?>

