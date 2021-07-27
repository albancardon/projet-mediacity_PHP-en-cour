<?php
include_once 'PHP/head.php'
?>
<body id="page06-1">
<?php
include_once 'PHP/header.php'
?>
<link rel="stylesheet" href="css/style-page06-1.css" type="text/css">
<main id="page06-1_main">
    <article id="page06-1-head">
        <h1 id="head06-1_titre">Bievenue User !</h1>
        <div id="head06-1_effect">
            <div id="effect-animation">
                <span class="animation-part">Pas </span>
                <span class="animation-part">encore </span>
                <span class="animation-part">membre </span>
                <span class="animation-part">prenium!</span>
            </div>
            <h2 id="effect-slogan">Hésiter pas, passez nous voir pour le devenir!!</h2>
        </div>
    </article>
    <article id="head06-1_center">
        <ul id="center06-01_option" class="boite-formulaire">
            <li class="option_list">
                <form class="list_box-modif" action="">
                    <label for="modifProfil">Modifier le profile</label>
                    <input type="text" name="modifProfil" id="modifProfilNom" placeholder="nouveau nom">
                    <input type="text" name="modifProfil" id="modifProfilPrenom" placeholder="nouveau prenom">
                    <div class="checkbox-modif">
                        <input type="checkbox" name="" id="checkboxProfile" required />
                        <label for="checkboxProfile">modifer profile</label>
                    </div>
                    <button class="btn btn-modif" id="">Valider</button>
                </form>
            </li>
            <li class="option_list">
                <form class="list_box-modif" action="">
                    <label for="modifMdp">Modifier le mot de passe</label>
                    <input type="text" name="modifMdp" id="modifMdp" placeholder="nouveau mot de passe">
                    <input type="text" name="modifMdp" id="modifMdp" placeholder="confirmation nouveau mot de passe">
                    <div class="checkbox-modif">
                        <input type="checkbox" name="" id="checkboxMdp" required />
                        <label for="checkboxMdp">modifer mot de passe</label>
                    </div>
                    <button class="btn btn-modif" id="">Valider</button>
                </form>
            </li>
            <li class="option_list">
                <form class="list_box-modif" action="">
                    <label for="modifPseudo">Modifier le pseudo</label>
                    <input type="text" name="modifPseudo" id="modifPseudo" placeholder="nouveau pseudo">
                    <div class="checkbox-modif">
                        <input type="checkbox" name="" id="checkboxPseudo" required />
                        <label for="checkboxPseudo">modifer pseudo</label>
                    </div>
                    <button class="btn btn-modif" id="">Valider</button>
                </form>
            </li>
        </ul>
        <section id="center06-01_suggestion">
            <h3>Suggestion pour vous!</h3>
            <div id="suggestion_affiche">
                <figure id="9564">
                    <img class="img imgSugestion" src="https://image.tmdb.org/t/p/w500/2xFo4wO4zAGb3KcyvBsC2igLLdF.jpg" alt="affiche de Astérix & Obélix contre César">
                    <p>Astérix & Obélix contre César</p>
                </figure>
                <figure id="329">
                    <img class="img imgSugestion" src="https://image.tmdb.org/t/p/w500/1EuPzhbzDgZmTHvS0nC0KSdEslI.jpg" alt="affiche de jurassique park">
                    <p>Jurassique park</p>
                </figure>
            </div>
        </section>
    </article>
</main>
<aside id="page06-1_aside" class="aside-back">
    <section class="aside06-01_table boite-formulaire">
        <h3 class="titre-tableau majuscule">Etat des locations</h3>
        <div class="table_titre-colone">
            <div class="ligne">
                <span class="inligne">Liste des films en cours de location</span>
                <span class="inligne">Date limite de retour</span>
                <span class="inligne">Affiche</span>
            </div>
        </div>
        <div class="table_titre-colone">
            <div class="ligne">
                <span id="2300" class="inligne">
                    Space Jam
                </span>
                <span class="inligne">
                    01/08/2021
                </span>
                <span class="inligne">
                    <img class="img imgSugestion" src="https://image.tmdb.org/t/p/w500/oAdHWUSnlpYy1oX31ujqrLcrnEX.jpg" alt="affiche de Space Jam">
                </span>
            </div>
            <div class="ligne">
                <span id="128" class="inligne">
                    Princesse mononoke
                </span>
                <span class="inligne">
                    24/07/2021
                </span>
                <span class="inligne">
                    <img class="img imgSugestion" src="https://image.tmdb.org/t/p/w500/AulQiyP2PMQKW5Vm7PviGrFbpPm.jpg" alt="affiche de casper">
                </span>
            </div>
        </div>
    </section>
    <section class="aside06-01_table  boite-formulaire">
        <h3 class="titre-tableau majuscule">Etat des reservations</h3>
        <div class="table_titre-colone">
            <div class="ligne">
                <span class="inligne">Liste des films réservé</span>
                <span class="inligne">Date limite de retrait</span>
                <span class="inligne">Affiche</span>
            </div>
        </div>
        <div class="table_titre-colone">
            <div class="ligne">
                <span id="8839" class="inligne">
                    Casper
                </span>
                <span class="inligne">
                    16/06/2021
                </span>
                <span class="inligne">
                    <img class="img imgSugestion" src="https://image.tmdb.org/t/p/w500/2ah8fNJFZVU3vcXhU5xfAYi2eym.jpg" alt="affiche de casper">
                </span>
            </div>
            <div class="ligne">
                <span id="8587" class="inligne">
                    Le roi lion
                </span>
                <span class="inligne">
                    15/07/2021
                </span>
                <span class="inligne">
                    <img class="img imgSugestion" src="https://image.tmdb.org/t/p/w500/n6UChiAOSTHGih2FBactLjA4Cdt.jpg" alt="affiche de casper">
                </span>
            </div>
        </div>
    </section>
    <section class="aside06-01_table  boite-formulaire">
        <h3 class="titre-tableau majuscule">Historique</h3>
        <div class="ligne">
            <figure class="effet-affiche">
                <img class="img imgSugestion" src="https://image.tmdb.org/t/p/w500/8zR2vXoXfdlknEYjfHvCbb1rJbI.jpg" alt="afffiche monde de nemo">
                <p>Le monde de nemo</p>
            </figure>
            <figure class="effet-affiche">
                <img class="img imgSugestion" src="https://image.tmdb.org/t/p/w500/lxzRFeCHblcE1vc4GVXGN0otrSA.jpg" alt="afffiche charly et la chocolatrie">
                <p>charly et la chocolatrie</p>
            </figure>
            <figure class="effet-affiche">
                <img class="img imgSugestion" src="https://image.tmdb.org/t/p/w500/rggLGRuANMRPwYJq0UMlNc7aia7.jpg" alt="afffiche qui veut la peau de roger rabbit">
                <p>Qui veut la peau de roger rabbit</p>
            </figure>
        </div>
    </section>
</aside>
<?php
include_once 'PHP/footer.php';
?>