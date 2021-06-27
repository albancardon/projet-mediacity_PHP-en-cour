<?php
include_once 'PHP/head.php';
include_once 'PHP/loading/mediacity-page03-chargement.php';
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
                createHtmlSerie($conn,"contenuserie","chef","emp1");
                createHtmlSerie($conn,"contenuserie","chef","emp2");
                createHtmlSerie($conn,"contenuserie","chef","emp3");
            ?>
            </section>
        </div>
    </article>
    <!--carouselle page-03-->
    <article class="container-slide">
        <section class="slider">
            <?php 
                createHtmlSerie($conn,"contenuserie","act","emp1");
                createHtmlSerie($conn,"contenuserie","act","emp2");
                createHtmlSerie($conn,"contenuserie","act","emp3");
                createHtmlSerie($conn,"contenuserie","act","emp4");
            ?>
        </section>
        <section class="box-fleche">
            <img id="left-act" class="btn-fleche" src="logo/flèche-left.png" alt="fléche vers gauche">
            <img id="right-act" class="btn-fleche" src="logo/flèche-right.png" alt="fléche vers droite">
        </section>
    </article>
    <article class="container-slide">
        <section class="slider">
            <?php 
                createHtmlSerie($conn,"contenuserie","com","emp1");
                createHtmlSerie($conn,"contenuserie","com","emp2");
                createHtmlSerie($conn,"contenuserie","com","emp3");
                createHtmlSerie($conn,"contenuserie","com","emp4");
            ?>
        </section>
        <section class="box-fleche">
            <img id="left-com" class="btn-fleche" src="logo/flèche-left.png" alt="fléche vers gauche">
            <img id="right-com" class="btn-fleche" src="logo/flèche-right.png" alt="fléche vers droite">
        </section>
    </article>
    <article class="container-slide">
        <section class="slider">
            <?php 
                createHtmlSerie($conn,"contenuserie","fam","emp1");
                createHtmlSerie($conn,"contenuserie","fam","emp2");
                createHtmlSerie($conn,"contenuserie","fam","emp3");
                createHtmlSerie($conn,"contenuserie","fam","emp4");
            ?>
        </section>
        <section class="box-fleche">
            <img id="left-fam" class="btn-fleche" src="logo/flèche-left.png" alt="fléche vers gauche">
            <img id="right-fam" class="btn-fleche" src="logo/flèche-right.png" alt="fléche vers droite">
        </section>
    </article>
</main>
<script src="script/Javascript-page03.js" defer></script>
<?php
include_once 'PHP/slogan.php';
include_once 'PHP/footer.php';
?>