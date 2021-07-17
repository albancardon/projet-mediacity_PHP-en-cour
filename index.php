<?php
include_once 'PHP/head.php';
include_once 'PHP/loading/mediacity-chargement.php';
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
                <a class="lien plus" href="mediacity-page02-films.php">plus...</a>
            </div>
            <div class="liste-contenu box-image">
                <?php 
                    createHtmlAcceuil($conn,"ac-film1");
                    createHtmlAcceuil($conn,"ac-film2");
                    createHtmlAcceuil($conn,"ac-film3");
                ?>
            </div>
        </article>
        <article>
            <div class="entete-categorie">
                <h3 class="titre-entete majuscule">
                    les series
                </h3>
                <a class="lien plus" href="mediacity-page03-series.php">plus...</a>
            </div>
            <div class="liste-contenu box-image">
                <?php 
                    createHtmlAcceuil($conn,"ac-serie1");
                    createHtmlAcceuil($conn,"ac-serie2");
                    createHtmlAcceuil($conn,"ac-serie3");
                ?>
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
                <figure class="effet-affiche">
                    <a href="mediacity-page04-musique.html">
                        <img class="img audio" src="asset/img/page-01-acceuil/damso.jpg" alt="affiche de damso">
                    </a>
                </figure>
                <figure class="effet-affiche">
                    <a href="mediacity-page04-musique.html">
                        <img class="img audio" src="asset/img/page-01-acceuil/acdc.jpg" alt="affiche de ACDC">
                    </a>
                </figure>
                <figure class="effet-affiche">
                    <a href="mediacity-page04-musique.html">
                        <img class="img audio" src="asset/img/page-01-acceuil/thewknd.jpg" alt="affiche de the wknd">
                    </a>
                </figure>
            </div>
        </article>
    </section>
</main>
<?php
include_once 'PHP/slogan.php';
include_once 'PHP/footer.php';
?>