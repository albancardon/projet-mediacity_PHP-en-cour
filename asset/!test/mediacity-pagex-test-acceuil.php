<?php
include_once 'PHP/head.php';
include_once 'PHP/loading/mediacity-index-chargement.php';
?>
<body id="pagexx">
<?php
include_once 'PHP/header.php'
?>
<main>

<article>
            <div class="entete-categorie">
                <h3 class="titre-entete majuscule">
                    les films
                </h3>
                <a class="lien plus" href="mediacity-page02-films.html">plus...</a>
            </div>
            <div class="liste-contenu box-image">
                <?php 
                    createHtmlAcceuil($conn,"contenuaccueil","ac-film","emp1");
                ?>
            </div>
        </article>


</main>
<?php
include_once 'PHP/footer.php'
?>