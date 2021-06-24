<?php
include_once 'PHP/head.php'
?>
<body id="page06-5">
<?php
include_once 'PHP/header.php'
?>
<link rel="stylesheet" href="css/style-page06-5.css" type="text/css">
<main id="page06-5_main">
    <article id="main06-05-head">
        <h1>Bievenue User !</h1>
        <div id="head06-5_effect">
            <h2 id="effect-title">
                <div id="title-animation">
                    <span class="animation-part">Pas </span>
                    <span class="animation-part">encore </span>
                    <span class="animation-part">membre </span>
                    <span class="animation-part">prenium!</span>
                </div>
                <br/>
                Hésiter pas, passez nous voir pour le devenir!!
            </h2>
        </div>
    </article>
    <article>
            <ul>
                <li>
                    <form action="">
                        <label for="modifProfil">Modifier le profile</label>
                        <input class="" type="text" name="modifProfil" id="modifProfil" placeholder="nouveau nombre copie">
            <button class="btn" id="">Valider</button>
                    </form>
                </li>
            </ul>
            <ul>
                <li>
                    <form action="">
                        <label for="modifMdp">Modifier le mot de passe</label>
                        <input  class="" type="text" name="modifMdp" id="modifMdp" placeholder="nouveau nombre copie">
            <button class="btn" id="">Valider</button>
                    </form>
                    </form>
                </li>
            </ul>
            <ul>
                <li>
                    <form action="">
                        <label for="modifPseudo">Modifier le pseudo</label>
                        <input  class="" type="text" name="modifPseudo" id="modifPseudo" placeholder="nouveau nombre copie">
            <button class="btn" id="">Valider</button>
                    </form>
                    </form>
                </li>
            </ul>
    </article>
    <article>
        <h3>Suggestion pour vous!</h3>
        <figure id="9564" class="">
            <img class="img imgSugestion" src="https://image.tmdb.org/t/p/w500/2xFo4wO4zAGb3KcyvBsC2igLLdF.jpg" alt="affiche de Astérix & Obélix contre César">
            <p class="">Astérix & Obélix contre César</p>
        </figure>
        <figure id="329" class="">
            <img class="img imgSugestion" src="https://image.tmdb.org/t/p/w500/1EuPzhbzDgZmTHvS0nC0KSdEslI.jpg" alt="affiche de jurassique park">
            <p class="">Jurassique park</p>
        </figure>
    </article>
</main>
<aside>
    <table class="">
        <caption class="majuscule">Etat des location</caption>
        <thead>
            <tr>
                <th scope="col">Liste des films en cours de location</th>
                <th scope="col">Date limite de retour</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th id="2300" class="">
                    Space Jam
                </th>
                <td class="">
                    01/08/2021
                </td>
                <td class="">
                    <img class="img imgSugestion" src="https://image.tmdb.org/t/p/w500/oAdHWUSnlpYy1oX31ujqrLcrnEX.jpg" alt="affiche de Space Jam">
                </td>
            </tr>
            <tr>
                <th id="128" class="">
                    Princesse mononoke
                </th>
                <td class="">
                    24/07/2021
                </td>
                <td class="">
                    <img class="img imgSugestion" src="https://image.tmdb.org/t/p/w500/AulQiyP2PMQKW5Vm7PviGrFbpPm.jpg" alt="affiche de casper">
                </td>
            </tr>
        </tbody>
    </table>
    <table class="">
        <caption class="majuscule">Etat des reservations</caption>
        <thead>
            <tr>
                <th scope="col">Liste des films en reservation</th>
                <th scope="col">Date limite de retrait</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th id="8839" class="">
                    Casper
                </th>
                <td class="">
                    16/06/2021
                </td>
                <td class="">
                    <img class="img imgSugestion" src="https://image.tmdb.org/t/p/w500/2ah8fNJFZVU3vcXhU5xfAYi2eym.jpg" alt="affiche de casper">
                </td>
            </tr>
            <tr>
                <th id="8587" class="">
                    Le roi lion
                </th>
                <td class="">
                    15/07/2021
                </td>
                <td class="">
                    <img class="img imgSugestion" src="https://image.tmdb.org/t/p/w500/n6UChiAOSTHGih2FBactLjA4Cdt.jpg" alt="affiche de casper">
                </td>
            </tr>
        </tbody>
    </table>
</aside>
<?php
include_once 'PHP/footer.php';
?>