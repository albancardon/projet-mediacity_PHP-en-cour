<?php
include_once 'PHP/head.php';
include_once 'PHP/loading/mediacity-chargement.php';
?>
<body id="page02">
<?php
include_once 'PHP/header.php'
?>
<main>
    <!--main header page-02-->
    <article class="en-avant">
        <div class="titre-page">
            <h1 class="majuscule">films</h1>
            <h2>Bienvenue dans la page des films</h2>
            <p class="slogan-rouge">Selection du Chef</p>
        </div>
        <div class="partie-trailer">
            <!--commun carte page 02-03-->
            <section class="container">
            <?php 
                createHtmlFilm($conn,"chef1");
                createHtmlFilm($conn,"chef2");
                createHtmlFilm($conn,"chef3");
            ?>
            </section>
        </div>
    </article>

    <!--main body-->

    <article id="action">
        <h2 class="titre-categorie majuscule">action/aventure</h2>
        <section class="container">
            <?php 
                createHtmlFilm($conn,"act1");
                createHtmlFilm($conn,"act2");
                createHtmlFilm($conn,"act3");
                createHtmlFilm($conn,"act4");
            ?>
        </section>
    </article>

    <article id="comedie">
        <h2 class="titre-categorie majuscule">comedie/comique</h2>
        <section class="container">
            <?php 
                createHtmlFilm($conn,"com1");
                createHtmlFilm($conn,"com2");
                createHtmlFilm($conn,"com3");
                createHtmlFilm($conn,"com4");
            ?>
        </section>
    </article>
    <article id="animation">
        <h2 class="titre-categorie majuscule">animation/familial</h2>
        <section class="container">
            <?php 
                createHtmlFilm($conn,"fam1");
                createHtmlFilm($conn,"fam2");
                createHtmlFilm($conn,"fam3");
                createHtmlFilm($conn,"fam4");
            ?>
        </section>
    </article>
</main>
<?php
include_once 'PHP/slogan.php';
include_once 'PHP/footer.php';
?>