<?php
include_once 'PHP/head.php'
?>
<body id="page08">
<?php
include_once 'PHP/header.php'
?>
<main id="page08_main">
    <h1 class="majuscule">Ajouter un nouveau media </br> sur le site</h1>
    <form class="main_main-contenu boite-formulaire">
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
                <label for="nomFilm">Titre film</label>
                <input class="zone-remplir zone-film" type="text" name="nomFilm" id="nomFilm" placeholder="Votre film" required />
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
    <button id="btn-envoyer" class="btn btn-send invisibility">Envoyer</button>
</main>
<?php
include_once 'PHP/footer.php'
?>

