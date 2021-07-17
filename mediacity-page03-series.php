<?php
include_once 'PHP/head.php';
include_once 'PHP/loading/mediacity-chargement.php';
?>
<body id="page03">
<?php
include_once 'PHP/header.php'
?>
<main>
    <!--body page-03-->
    <article class="en-avant">
        <div class="titre-page">
            <h1 class="majuscule">series</h1>
            <h2>Bienvenue dans la page des séries</h2>
            <p class="slogan-rouge">Selection du chef</p>
        </div>
        <div class="partie-trailer">
            <!--commun carte page 02-03-->
            <section class="container">
            <?php 
                createHtmlSerie($conn,"chef1");
                createHtmlSerie($conn,"chef2");
                createHtmlSerie($conn,"chef3");
            ?>
            </section>
        </div>
    </article>
    <!--carouselle page-03-->
    <article class="container-slide">
        <section class="slider">
            <?php 
                createHtmlSerie($conn,"act1");
                createHtmlSerie($conn,"act2");
                createHtmlSerie($conn,"act3");
                createHtmlSerie($conn,"act4");
            ?>
        </section>
        <section class="box-fleche">
            <img id="left-act" class="btn-fleche" src="asset/logo/flèche-left.png" alt="fléche vers gauche">
            <img id="right-act" class="btn-fleche" src="asset/logo/flèche-right.png" alt="fléche vers droite">
        </section>
    </article>
    <article class="container-slide">
        <section class="slider">
            <?php 
                createHtmlSerie($conn,"com1");
                createHtmlSerie($conn,"com2");
                createHtmlSerie($conn,"com3");
                createHtmlSerie($conn,"com4");
            ?>
        </section>
        <section class="box-fleche">
            <img id="left-com" class="btn-fleche" src="asset/logo/flèche-left.png" alt="fléche vers gauche">
            <img id="right-com" class="btn-fleche" src="asset/logo/flèche-right.png" alt="fléche vers droite">
        </section>
    </article>
    <article class="container-slide">
        <section class="slider">
            <?php 
                createHtmlSerie($conn,"fam1");
                createHtmlSerie($conn,"fam2");
                createHtmlSerie($conn,"fam3");
                createHtmlSerie($conn,"fam4");
            ?>
        </section>
        <section class="box-fleche">
            <img id="left-fam" class="btn-fleche" src="asset/logo/flèche-left.png" alt="fléche vers gauche">
            <img id="right-fam" class="btn-fleche" src="asset/logo/flèche-right.png" alt="fléche vers droite">
        </section>
    </article>
</main>
<script src="script/Javascript-page03.js" defer></script>
<?php
include_once 'PHP/slogan.php';
include_once 'PHP/footer.php';
?>