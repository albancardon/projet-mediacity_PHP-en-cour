<?php
include_once 'PHP/head.php'
?>
<body id="page08">
<?php
include_once 'PHP/header.php'
?>
<main id="page08_main">
    <h1 class="majuscule">Ajouter un nouveau media </br>sur le site</h1>
    <form id="main08" class="main_main-contenu boite-formulaire">
        <div class="main-contenu_newMedia" id="main-contenu_box-haut">
            <section class="box-haut_contain">
                <div class="contain_boxlist">
                    <label for="type">Page du media</label>
                    <select name="type" id="type" class="boxlist_list" required>
                        <option value="">Choisissez un type</option>
                        <option value="acc">Acceuil</option>
                        <option value="film" selected>Film</option>
                        <option value="serie">Série</option>
                    </select>
                </div>
                <div class="contain_boxlist">
                    <label for="genre">Genre média</label>
                    <select name="genre" id="genre" class="boxlist_list" required>
                    <option class="optionGenre" value="act" selected>Genre action</option>

                    </select>
                </div>
            </section>
            <div class="box-haut_contain2">
                <label for="emplacement">Emplacement</label>
                <select name="emplacement" id="emplacement" class="boxlist_list" required>
                    <option class="optionGenre" value="emp1" selected>Emplacement 1</option>

                </select>
            </div>
        </div>
        <div class="main-contenu_newMedia" id="main-contenu_box-bas">
            <div class="box-bas_contain">
                <label for="nomFilm">Titre média</label>
                <input class="zone-remplir zone-film" type="text" name="nomFilm" id="nomFilm" placeholder="Nom média" required value="gladiator"/>
            </div>
            <div type="button" class="btn btn-new-media" id="btn-valider">Valider</div>
        </div>
    </form>
    <article class="main_affiche">
        <h2 class="sous-titre">Selectionner le film voulu</h2>
        <div id="js___posterFilm" class="affiche_container">
        </div>
    </article>
    <article class="main_ba">
        <h2 class="sous-titre">Selectionner une bande annonce</h2>
        <div id="js___baFilm" class="ba_liste-ba">
        </div>
    </article>
    <form action="/php_projet-CDA/6.projet-mediacity_PHP/projet-mediacity_PHP-en-cour/PHP/treatment-gestion-BDD/médiacity-ajout-contenusite-BDD.php"  method="get">
        <input id="id-selection" type="text" name="id"/>
        <input id="titre-selection" type="text" name="titre"/>
        <input id="type-selection" type="text" name="type" value="film"/>
        <input id="genre-selection" type="text" name="genre" value="act"/>
        <input id="nbpossede-selection" type="text" name="nbpossede" value="4"/>
        <input id="idPoster-selection" type="text" name="idPosterSelection"/>
        <input id="synopsis-selection" type="text" name="synopsisSelection"/>
        <a href="#modal1" id="btn-envoyer1" class="btn btn-send js-modal invisibilityBtnEnvoyer">Envoyer</a>
        <!-- <button id="btn-envoyer1" class="btn btn-send invisibilityBtnEnvoyer">Envoyer</button> -->
    </form>
</main>

<aside id="modal1" class="modal dial__hidden" aria-hidden="true" role="dialog" aria-labelledby="titlemodal" style="display:none;">
    <form class="modal-ajoutBDD js-modal-stop">
        <h3 class="titlemodal">
            Nombre de copie possédé?
        </h3>
        <div class="box-bas_contain">
            <label for="nbCopie">Nombre de copies</label>
            <input class="zone-remplir zone-film" type="text" name="nbCopie" id="nbCopie" placeholder="nombre copie"/>
        </div>
        <button class="js-btn-val js-modal-close">Oui, ajouter média</button>
    </form>
</aside>
<script src="script/Javascript-page08.js" defer></script>
<?php
include_once 'PHP/footer.php'
?>

