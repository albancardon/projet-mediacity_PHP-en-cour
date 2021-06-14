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
                    <label for="type">Type de media</label>
                    <select name="type" id="type" class="boxlist_list" required>
                        <option value="">Choisissez un type</option>
                        <option value="film">Film</option>
                        <option value="serie">Série</option>
                    </select>
                </div>
                <div class="contain_boxlist">
                    <label for="genre">Genre média</label>
                    <select name="genre" id="genre" class="boxlist_list" required>

                    </select>
                </div>
            </section>
            <div class="box-haut_contain2">
                <label for="emplacement">Emplacement</label>
                <select name="emplacement" id="emplacement" class="boxlist_list" required>

                </select>
            </div>
        </div>
        <div class="main-contenu_newMedia" id="main-contenu_box-bas">
            <div class="box-bas_contain">
                <label for="nomFilm">Titre média</label>
                <input class="zone-remplir zone-film" type="text" name="nomFilm" id="nomFilm" placeholder="Nom média" required />
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
    <a href="#modal1" id="btn-envoyer" class="btn btn-send js-modal invisibility">Envoyer</a>
</main>

<aside id="modal1" class="modal dial__hidden" aria-hidden="true" role="dialog" aria-labelledby="titlemodal" style="display:none;">
    <form class="modal-ajoutBDD js-modal-stop">
        <h3 class="titlemodal">
            Ajouter à la base de donnée?
        </h3>
        <button class="js-modal-close">Non fermer la fenetre</button>
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

