<?php
include_once 'PHP/head.php';
?>
<body id="page08">
<?php
include_once 'PHP/header.php';
$ajout = (isset($_POST['ajout']) && !empty($_POST['ajout'])) ? htmlspecialchars($_POST['ajout']) : null;
if ($ajout == "oui"){
    echo '<script language="Javascript">
    alert ("Ajout effectuer." )
    </script>';
}else if ($ajout == "non"){
    echo '<script language="Javascript">
    alert ("Ajout non effectuer!!" )
    </script>';
}
?>
<main id="page08_main">
    <h1 class="majuscule">Ajouter un nouveau media </br>sur le site</h1>
    <form id="main08" class="main_main-contenu boite-formulaire">
        <div class="main-contenu_newMedia" id="main-contenu_box-haut">
            <section class="box-haut_contain">
                <div class="contain_boxlist">
                    <label for="page">Page du media</label>
                    <select name="page" id="page" class="boxlist_list" required>
                        <option>Choisissez une page</option>
                        <option value="pageAccueil">Acceuil</option>
                        <option value="pageFilm">Film</option>
                        <option value="pageSerie">Série</option>
                    </select>
                </div>
                <div class="contain_boxlist">
                    <label for="typePrincipale">Type principale du média</label>
                    <select name="typePrincipale" id="typePrincipale" class="boxlist_list" required>

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
                <input class="zone-remplir zone-film" type="text" name="nomFilm" id="nomFilm" placeholder="Nom média" required/>
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
    <form action="/php_projet-CDA/6.projet-mediacity_PHP/projet-mediacity_PHP-en-cour/PHP/treatment-gestion-BDD/mediacity-ajout-contenusite-BDD.php"  method="POST">
        <input id="id-selection" type="text" name="idApi"/>
        <input id="titre-selection" type="text" name="titre"/>
        <input id="categorie-selection" type="text" name="categorie"/>
        <input id="typePrincipale-selection" type="text" name="typePrincipale"/>
        <input id="idPoster-selection" type="text" name="idPosterSelection"/>
        <input id="idVideo-selection" type="text" name="idVideoSelection"/>
        <input id="synopsis-selection" type="text" name="synopsisSelection"/>
        <input id="nbpossede-selection" type="text" name="nbpossede"/>
        <input id="page-selection" type="text" name="page"/>
        <input id="emplacement-selection" type="text" name="emplacement"/>
        <a href="#modal1" id="btn-envoyer1" class="btn btn-send js-modal invisibilityBtnEnvoyer">soumettre</a>
        <button id="btn-envoyer" class="btn btn-send invisibility">Envoyer</button>
    </form>
</main>

<aside id="modal1" class="modal dial__hidden" aria-hidden="true" role="dialog" aria-labelledby="titlemodal" style="display:none;">
    <form class="modal-ajoutBDD js-modal-stop">
        <h3 class="titlemodal">
            Nombre de copie possédé?
        </h3>
        <div class="box-bas_contain">
            <input class="zone-remplir zone-film" type="text" name="nbCopie" id="nbCopie" placeholder="nombre copie" required/>
        </div>
        <button id="js-btn-val" class="js-btn-val js-modal-close">Valider</button>
    </form>
</aside>
<script src="script/Javascript-page08.js" defer></script>
<?php
include_once 'PHP/footer.php'
?>

