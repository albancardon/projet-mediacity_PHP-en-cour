<?php
include_once 'PHP/head.php'
?>
<body id="page01">
<?php
include_once 'PHP/header.php'
?>
<main>
    <!--header du main page-01-->
    <section class="title">
        <h2 class="question-h2">Qui sommes nous?</h2>
        <h1 class="slogan">
            Nous sommes une des dernieres médiatèques proposant des locations de video et musiques resistant encore
            et toujours à l'envahisseur VOD.
        </h1>
    </section>
    <!--centre du main page-01-->
    <section id="details">
        <article>
            <div class="entete-categorie">
                <h3 class="titre-entete majuscule">
                    les films
                </h3>
                <a class="lien plus" href="mediacity-page02-films.html">plus...</a>
            </div>
            <div class="liste-contenu box-image">
                <figure class="effet-affiche">
                    <a href="mediacity-page02-films.html#action">
                        <img class="img video" src="img/page-01-acceuil/creed2.jpg" alt="afffiche creed2">
                    </a>
                </figure>
                <figure class="effet-affiche">
                    <a href="mediacity-page02-films.html#comedie">
                        <img class="img video" src="img/page-01-acceuil/themask.jpg" alt="affiche the mask">
                    </a>
                </figure>
                <figure class="effet-affiche">
                    <a href="mediacity-page02-films.html#animation">
                        <img class="img video" src="img/page-01-acceuil/roilion.jpg" alt="affiche le roi lion">
                    </a>
                </figure>
            </div>
        </article>
        <article>
            <div class="entete-categorie">
                <h3 class="titre-entete majuscule">
                    les series
                </h3>
                <a class="lien plus" href="mediacity-page03-series.html">plus...</a>
            </div>
            <div class="liste-contenu box-image">
                <span class="effet-affiche">
                    <a href="mediacity-page03-series.html#action">
                        <img class="img video" src="img/page-01-acceuil/got.jpg" alt="affiche game of throne">
                    </a>
                </span>
                <span class="effet-affiche">
                    <a href="mediacity-page03-series.html#comedie">
                        <img class="img video" src="img/page-01-acceuil/tbbt.jpg" alt="affiche the big bang theory">
                    </a>
                </span>
                <span class="effet-affiche">
                    <a href="mediacity-page03-series.html#animation">
                        <img class="img video" src="img/page-01-acceuil/Les_Simpson.jpg" alt="affiche les simpson">
                    </a>
                </span>
            </div>
        </article>
        <article>
            <div class="entete-categorie">
                <h3 class="titre-entete majuscule">
                    les musiques
                </h3>
                <a class="lien plus" href="mediacity-page04-musique.html">plus...</a>
            </div>
            <div class="liste-contenu box-image">
                <span class="effet-affiche">
                    <a href="mediacity-page04-musique.html">
                        <img class="img audio" src="img/page-01-acceuil/damso.jpg" alt="affiche de damso">
                    </a>
                </span>
                <span class="effet-affiche">
                    <a href="mediacity-page04-musique.html">
                        <img class="img audio" src="img/page-01-acceuil/acdc.jpg" alt="affiche de ACDC">
                    </a>
                </span>
                <span class="effet-affiche">
                    <a href="mediacity-page04-musique.html">
                        <img class="img audio" src="img/page-01-acceuil/thewknd.jpg" alt="affiche de the wknd">
                    </a>
                </span>
            </div>
        </article>
    </section>
</main>
<!--slogant recurant avant footer-->
<aside class="slogan-avant-footer majuscule">
    <p class="texte-slogan">
        vous aussi rejoignez
        <span class="saut-ligne"></span>
        la communauté de l'abo dès maintenant!
        <span class="saut-ligne"></span>
    </p>
        <a class="lien boite-ici" href="mediacity-page05-infos.html">ici</a>
</aside>
<?php
include_once 'PHP/footer.php'
?>