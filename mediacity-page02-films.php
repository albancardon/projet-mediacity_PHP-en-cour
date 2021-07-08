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
                createHtmlFilm($conn,"contenufilm","chef","emp1");
                createHtmlFilm($conn,"contenufilm","chef","emp2");
                createHtmlFilm($conn,"contenufilm","chef","emp3");
            ?>
            </section>
        </div>
    </article>

    <!--main body-->

    <article id="action">
        <h2 class="titre-categorie majuscule">action/aventure</h2>
        <section class="container">
            <?php 
                createHtmlFilm($conn,"contenufilm","act","emp1");
                createHtmlFilm($conn,"contenufilm","act","emp2");
                createHtmlFilm($conn,"contenufilm","act","emp3");
                createHtmlFilm($conn,"contenufilm","act","emp4");
            ?>
            test
        </section>
    </article>

    <article id="comedie">
        <h2 class="titre-categorie majuscule">comedie/comique</h2>
        <section class="container">
            <?php 
                createHtmlFilm($conn,"contenufilm","com","emp1");
                createHtmlFilm($conn,"contenufilm","com","emp2");
                createHtmlFilm($conn,"contenufilm","com","emp3");
                createHtmlFilm($conn,"contenufilm","com","emp4");
            ?>
        </section>
    </article>
    <article id="animation">
        <h2 class="titre-categorie majuscule">animation/familial</h2>
        <section class="container">
            <?php 
                createHtmlFilm($conn,"contenufilm","fam","emp1");
                createHtmlFilm($conn,"contenufilm","fam","emp2");
                createHtmlFilm($conn,"contenufilm","fam","emp3");
                createHtmlFilm($conn,"contenufilm","fam","emp4");
            ?>
        </section>
    </article>
</main>
<?php
include_once 'PHP/slogan.php';
include_once 'PHP/footer.php';
?>