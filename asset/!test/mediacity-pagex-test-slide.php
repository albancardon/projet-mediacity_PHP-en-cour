<?php
include_once 'PHP/head.php';
include_once 'PHP/loading/mediacity-page03-chargement.php';
?>
<body id="pagexx">
<?php
include_once 'PHP/header.php'
?>
<main>




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




<script src="script/Javascript-page03.js" defer></script>

</main>
<?php
include_once 'PHP/footer.php'
?>