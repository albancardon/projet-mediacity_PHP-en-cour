<?php
include_once 'PHP/head.php'
?>
<body id="page07">
<?php
include_once 'PHP/header.php'
?>
<!-- main page07 quizz-->
<main class="quizz">
    <article class="entete-quizz">
        <div class="titre-page-quizz">
            <img class="img-pop" src="asset/img/page-07-quizz/pop.png" alt="pop-corn">
            <h2 class="majuscule">Envie de tester l'abonnement premium??!</h2>
            <img class="img-pop" src="asset/img/page-07-quizz/pop.png" alt="pop-corn">
        </div>
        <p>Il vous suffit de répondre à ce quizz!</p>
        <p class="precision">pour participer l'incription gratuite est obligatoire.</p>
    </article>
    <article class="lancement-quizz">
        <p>
            Bienvenue à l'épreuve de sélection!!<br/>
            Ici on va voir si vous êtes fait pour la commu!<br/>
            Les epreuves sont légendaire; bon nombre de personnes n'y arrivent pas!<br/>
            Pret pour l'aventure?<br/>
            cliquez pour lancer!!
        </p>
        <div class="dialogue dial__visibility">
            <a href="#modal1" class="lien btn-quizz btn-start-modal js-modal">Lancer le test!!</a>
            <div class="block"></div>
            <img class="img-mascote" src="asset/img/page-07-quizz/mascotte-v02.png" alt="mascotte">
        </div>
        <div class="dialogue dial__hidden">
            <div class="block"></div>
            <a href="#modal2" class="lien btn-quizz btn-start-modal js-modal">Passer au deuxième questionnaire.</a>
            <img class="img-mascote" src="asset/img/page-07-quizz/mascotte-v02.png" alt="mascotte">
            <div class="block"></div>
        </div>
        <div class="dialogue dial__hidden">
            <a href="#modal3" class="lien btn-quizz btn-start-modal js-modal">Courage c'est bientôt la fin.</a>
            <div class="block"></div>
            <img class="img-mascote" src="asset/img/page-07-quizz/mascotte-v02.png" alt="mascotte">
        </div>
        <div class="dialogue dial__hidden">
            <div class="block"></div>
            <a href="#modal4" class="lien btn-quizz btn-start-modal js-modal">Et un petit dernier pour finir!</a>
            <img class="img-mascote" src="asset/img/page-07-quizz/mascotte-v02.png" alt="mascotte">
            <div class="block"></div>
        </div>
        <div class="dialogue dial__hidden">
            <p class="lien btn-quizz  btn-start-modal">
                Vous avez réussit!!
                <span class="saut-ligne"></span>
                Pour vous réconpensez je vous offre une semaine de compte prénium!!!
            </p>
            <div class="block"></div>
            <img class="img-mascote" src="asset/img/page-07-quizz/mascotte-v02.png" alt="mascotte">
        </div>
    </article>
</main>
<aside id="modal1" class="modal dial__hidden" aria-hidden="true" role="dialog" aria-labelledby="titlemodal" style="display:none;">
    <form class="modal-wrapper js-modal-stop">
        <h3 class="titre-quizz titlemodal">
            QUIZZ FILM! 
        </h3>
        <button class="js-modal-close btn-quizz btn-valider">Fermer le quizz</button>
        <fieldset class="box-question-quizz">
            <img class="img-quizz img" src="asset/img/page-07-quizz/quizz/1-film/seigneur-des-anneaux.jpg" alt="affiche du film le seigneur des anneaux">
            <p>
                Dans le seigneur des anneaux: quelle objet Frodon doit détruire?
            </p>
            <section class="box-section-quizz">
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz1-question1-reponse1">
                        <input class="contenu-rep" type="radio" name="quizz1-question1" value="quizz1-question1-reponse1" id="quizz1-question1-reponse1" /> 
                        <p class="contenu-rep"> L'anneau</p>
                    </label>
                    <label class="box-reponse" for="quizz1-question1-reponse2">
                        <input class="contenu-rep" type="radio" name="quizz1-question1" value="quizz1-question1-reponse2" id="quizz1-question1-reponse2" /> 
                        <p class="contenu-rep"> La fourchette</p>
                    </label>
                </article>
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz1-question1-reponse3">
                        <input class="contenu-rep" type="radio" name="quizz1-question1" value="quizz1-question1-reponse3" id="quizz1-question1-reponse3" /> 
                        <p class="contenu-rep"> Les clées</p>
                    </label>
                    <label class="box-reponse" for="quizz1-question1-reponse4">
                        <input class="contenu-rep" type="radio" name="quizz1-question1" value="quizz1-question1-reponse4" id="quizz1-question1-reponse4"/> 
                        <p class="contenu-rep"> Son épée</p>
                    </label>
                </article>
            </section>
        </fieldset>
        <fieldset class="box-question-quizz">
            <img class="img-quizz img" src="asset/img/page-07-quizz/quizz/1-film/le-pari.jpg" alt="affiche du film le pari">
            <p>
                Dans le pari: quel est le pari en question?
            </p>
            <section class="box-section-quizz">
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz1-question2-reponse1">
                        <input class="contenu-rep" type="radio" name="quizz1-question2" value="quizz1-question2-reponse1" id="quizz1-question2-reponse1" /> 
                        <p class="contenu-rep"> Taguer la maison de famille</p>
                    </label>
                    <label class="box-reponse" for="quizz1-question2-reponse2">
                        <input class="contenu-rep" type="radio" name="quizz1-question2" value="quizz1-question2-reponse2" id="quizz1-question2-reponse2" /> 
                        <p class="contenu-rep"> Faire le tour du monde en vélo</p>
                    </label>
                </article>
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz1-question2-reponse3">
                        <input class="contenu-rep"  type="radio" name="quizz1-question2" value="quizz1-question2-reponse3" id="quizz1-question2-reponse3" /> 
                        <p class="contenu-rep"> Arréter de fumer</p>
                    </label>
                    <label class="box-reponse" for="quizz1-question2-reponse4">
                        <input class="contenu-rep"  type="radio" name="quizz1-question2" value="quizz1-question2-reponse4" id="quizz1-question2-reponse4"/> 
                        <p class="contenu-rep"> Se baigner nue dans la piscine</p>
                    </label>
                </article>
            </section>
        </fieldset>
        <fieldset class="box-question-quizz">
            <img class="img-quizz img" src="asset/img/page-07-quizz/quizz/1-film/hulk.jpg" alt="affiche du film hulk">
            <p>
                Quelle est la particularité de Hulk?
            </p>
            <section class="box-section-quizz">
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz1-question3-reponse1">
                        <input class="contenu-rep"  type="radio" name="quizz1-question3" value="quizz1-question3-reponse1" id="quizz1-question3-reponse1" /> 
                        <p class="contenu-rep"> Il peut monter aux murs</p>
                    </label>
                    <label class="box-reponse" for="quizz1-question3-reponse2">
                        <input class="contenu-rep"  type="radio" name="quizz1-question3" value="quizz1-question3-reponse2" id="quizz1-question3-reponse2" /> 
                        <p class="contenu-rep"> Il devient incroyablement fort et vert</p>
                    </label>
                </article>
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz1-question3-reponse3">
                        <input class="contenu-rep"  type="radio" name="quizz1-question3" value="quizz1-question3-reponse3" id="quizz1-question3-reponse3" /> 
                        <p class="contenu-rep"> Il vole</p>
                    </label>
                    <label class="box-reponse" for="quizz1-question3-reponse4">
                        <input class="contenu-rep"  type="radio" name="quizz1-question3" value="quizz1-question3-reponse4" id="quizz1-question3-reponse4"/> 
                        <p class="contenu-rep"> Il est elastique</p>
                    </label>
                </article>
            </section>
        </fieldset>
        <fieldset class="box-question-quizz">
            <img class="img-quizz img" src="asset/img/page-07-quizz/quizz/1-film/jurassic-park.jpg" alt="affiche du film jurassic park">
            <p>
                Que vienne voir les visiteur de jurassic park?
            </p>
            <section class="box-section-quizz">
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz1-question4-reponse1">
                        <input class="contenu-rep"  type="radio" name="quizz1-question4" value="quizz1-question4-reponse1" id="quizz1-question4-reponse1" /> 
                        <p class="contenu-rep"> Des vaches</p>
                    </label>
                    <label class="box-reponse" for="quizz1-question4-reponse2">
                        <input class="contenu-rep"  type="radio" name="quizz1-question4" value="quizz1-question4-reponse2" id="quizz1-question4-reponse2" /> 
                        <p class="contenu-rep"> Des gens déguisé en dinosaure</p>
                    </label>
                </article>
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz1-question4-reponse3">
                        <input class="contenu-rep"  type="radio" name="quizz1-question4" value="quizz1-question4-reponse3" id="quizz1-question4-reponse3" /> 
                        <p class="contenu-rep"> Des chévres</p>
                    </label>
                    <label class="box-reponse" for="quizz1-question4-reponse4">
                        <input class="contenu-rep"  type="radio" name="quizz1-question4" value="quizz1-question4-reponse4" id="quizz1-question4-reponse4"/> 
                        <p class="contenu-rep"> Des dinosaures</p>
                    </label>
                </article>
            </section>
        </fieldset>
        <fieldset class="box-question-quizz">
            <img class="img-quizz img" src="asset/img/page-07-quizz/quizz/1-film/titanic.jpg" alt="affiche du film titanic">
        <p>
            Dans titanic: à cause de quoi le bateau a coulé?
        </p>
            <section class="box-section-quizz">
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz1-question5-reponse1">
                        <input class="contenu-rep"  type="radio" name="quizz1-question5" value="quizz1-question5-reponse1" id="quizz1-question5-reponse1" /> 
                        <p class="contenu-rep"> A cause d'un iceberg</p>
                    </label>
                    <label class="box-reponse" for="quizz1-question5-reponse2">
                        <input class="contenu-rep"  type="radio" name="quizz1-question5" value="quizz1-question5-reponse2" id="quizz1-question5-reponse2" /> 
                        <p class="contenu-rep"> Le bateau n'a jamais coulé</p>
                    </label>
                </article>
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz1-question5-reponse3">
                        <input class="contenu-rep"  type="radio" name="quizz1-question5" value="quizz1-question5-reponse3" id="quizz1-question5-reponse3" /> 
                        <p class="contenu-rep"> A cause du hollandais volant</p>
                    </label>
                    <label class="box-reponse" for="quizz1-question5-reponse4">
                        <input class="contenu-rep"  type="radio" name="quizz1-question5" value="quizz1-question5-reponse4" id="quizz1-question5-reponse4"/> 
                        <p class="contenu-rep"> A cause de quelqu'un qui a vidé sa baignoire</p>
                    </label>
                </article>
            </section>
        </fieldset>
    </form>
    <button class="btn-quizz btn-valider js-btn-val js-modal-close">Valider le quizz</button>
</aside>
<aside id="modal2" class="modal" aria-hidden="true" role="dialog" aria-labelledby="titlemodal" style="display:none;">
    <form class="modal-wrapper js-modal-stop">
        <h3 class="titre-quizz titlemodal">
            QUIZZ SERIES! 
        </h3>
        <button class="js-modal-close btn-quizz btn-valider">Fermer le quizz</button>
        <fieldset class="box-question-quizz">
            <img class="img-quizz img" src="asset/img/page-07-quizz/quizz/2-serie/x-files.jpg" alt="affiche de la série x-files">
            <p>
                Dans X-file: quelle métier font les agents Scully et Mulder?
            </p>
            <section class="box-section-quizz">
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz2-question1-reponse1">
                        <input class="contenu-rep"  type="radio" name="quizz2-question1" value="quizz2-question1-reponse1" id="quizz2-question1-reponse1" /> 
                        <p class="contenu-rep"> Chômeur</p>
                    </label>
                    <label class="box-reponse" for="quizz2-question1-reponse2">
                        <input class="contenu-rep"  type="radio" name="quizz2-question1" value="quizz2-question1-reponse2" id="quizz2-question1-reponse2" /> 
                        <p class="contenu-rep"> Agents du FBI</p>
                    </label>
                </article>
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz2-question1-reponse3">
                        <input class="contenu-rep"  type="radio" name="quizz2-question1" value="quizz2-question1-reponse3" id="quizz2-question1-reponse3" /> 
                        <p class="contenu-rep"> Cuisiniers</p>
                    </label>
                    <label class="box-reponse" for="quizz2-question1-reponse4">
                        <input class="contenu-rep"  type="radio" name="quizz2-question1" value="quizz2-question1-reponse4" id="quizz2-question1-reponse4" required/> 
                        <p class="contenu-rep"> Policiers</p>
                    </label>
                </article>
            </section>
        </fieldset>
        <fieldset class="box-question-quizz">
            <img class="img-quizz img" src="asset/img/page-07-quizz/quizz/2-serie/experts.jpg" alt="affiche de la série les experts Miami">
            <p>
                Dans les experts Miami: comment les enquêtes sont résolus?
            </p>
            <section class="box-section-quizz">
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz2-question2-reponse1">
                        <input class="contenu-rep"  type="radio" name="quizz2-question2" value="quizz2-question2-reponse1" id="quizz2-question2-reponse1" /> 
                        <p class="contenu-rep"> Ils consultent une voyante</p>
                    </label>
                    <label class="box-reponse" for="quizz2-question2-reponse2">
                        <input class="contenu-rep"  type="radio" name="quizz2-question2" value="quizz2-question2-reponse2" id="quizz2-question2-reponse2" /> 
                        <p class="contenu-rep"> Ils lancent un dès pour choisir le coupable</p>
                    </label>
                </article>
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz2-question2-reponse3">
                        <input class="contenu-rep"  type="radio" name="quizz2-question2" value="quizz2-question2-reponse3" id="quizz2-question2-reponse3" /> 
                        <p class="contenu-rep"> Ils recherchent des preuves scientifique</p>
                    </label>
                    <label class="box-reponse" for="quizz2-question2-reponse4">
                        <input class="contenu-rep"  type="radio" name="quizz2-question2" value="quizz2-question2-reponse4" id="quizz2-question2-reponse4" required/> 
                        <p class="contenu-rep"> Ils ne savent pas le faire</p>
                    </label>
                </article>
            </section>
        </fieldset>
        <fieldset class="box-question-quizz">
            <img class="img-quizz img" src="asset/img/page-07-quizz/quizz/2-serie/bob-eponge.jpg" alt="affiche de la série bob l'eponge">
            <p>
                Où ce déroule l'intrigue de de Bob l'éponge?
            </p>
            <section class="box-section-quizz">
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz2-question3-reponse1">
                        <input class="contenu-rep"  type="radio" name="quizz2-question3" value="quizz2-question3-reponse1" id="quizz2-question3-reponse1" /> 
                        <p class="contenu-rep"> Sous la mer</p>
                    </label>
                    <label class="box-reponse" for="quizz2-question3-reponse2">
                        <input class="contenu-rep"  type="radio" name="quizz2-question3" value="quizz2-question3-reponse2" id="quizz2-question3-reponse2" /> 
                        <p class="contenu-rep"> Dans la foret equatoriale</p>
                    </label>
                </article>
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz2-question3-reponse3">
                        <input class="contenu-rep"  type="radio" name="quizz2-question3" value="quizz2-question3-reponse3" id="quizz2-question3-reponse3" /> 
                        <p class="contenu-rep"> Sur la lune</p>
                    </label>
                    <label class="box-reponse" for="quizz2-question3-reponse4">
                        <input class="contenu-rep"  type="radio" name="quizz2-question3" value="quizz2-question3-reponse4" id="quizz2-question3-reponse4" required/> 
                        <p class="contenu-rep"> Sur la banquise</p>
                    </label>
                </article>
            </section>
        </fieldset>
        <fieldset class="box-question-quizz">
            <img class="img-quizz img" src="asset/img/page-07-quizz/quizz/2-serie/breaking-bad.jpg" alt="affiche de la série breaking bad">
            <p>
                Dans breaking bad: quelle activité illegal font pricipalement les protagonistes?
            </p>
            <section class="box-section-quizz">
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz2-question4-reponse1">
                        <input class="contenu-rep"  type="radio" name="quizz2-question4" value="quizz2-question4-reponse1" id="quizz2-question4-reponse1" /> 
                        <p class="contenu-rep"> Ils parient sur le sport</p>
                    </label>
                    <label class="box-reponse" for="quizz2-question4-reponse2">
                        <input class="contenu-rep"  type="radio" name="quizz2-question4" value="quizz2-question4-reponse2" id="quizz2-question4-reponse2" /> 
                        <p class="contenu-rep"> Ils font des courses de voiture</p>
                    </label>
                </article>
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz2-question4-reponse3">
                        <input class="contenu-rep"  type="radio" name="quizz2-question4" value="quizz2-question4-reponse3" id="quizz2-question4-reponse3" /> 
                        <p class="contenu-rep"> Ils font de faux papier</p>
                    </label>
                    <label class="box-reponse" for="quizz2-question4-reponse4">
                        <input class="contenu-rep"  type="radio" name="quizz2-question4" value="quizz2-question4-reponse4" id="quizz2-question4-reponse4" required/> 
                        <p class="contenu-rep"> Ils fabriquent de la drogue</p>
                    </label>
                </article>
            </section>
        </fieldset>
        <fieldset class="box-question-quizz">
            <img class="img-quizz img" src="asset/img/page-07-quizz/quizz/2-serie/walking-dead.jpg" alt="affiche de la série walking dead">
            <p>
                Dans walking dead: que fuit les humains?
            </p>
            <section class="box-section-quizz">
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz2-question5-reponse1">
                        <input class="contenu-rep"  type="radio" name="quizz2-question5" value="quizz2-question5-reponse1" id="quizz2-question5-reponse1" /> 
                        <p class="contenu-rep"> Des zombies</p>
                    </label>
                    <label class="box-reponse" for="quizz2-question5-reponse2">
                        <input class="contenu-rep"  type="radio" name="quizz2-question5" value="quizz2-question5-reponse2" id="quizz2-question5-reponse2" /> 
                        <p class="contenu-rep"> Des dinosaures</p>
                    </label>
                </article>
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz2-question5-reponse3">
                        <input class="contenu-rep"  type="radio" name="quizz2-question5" value="quizz2-question5-reponse3" id="quizz2-question5-reponse3" /> 
                        <p class="contenu-rep"> Des autruches</p>
                    </label>
                    <label class="box-reponse" for="quizz2-question5-reponse4">
                        <input class="contenu-rep"  type="radio" name="quizz2-question5" value="quizz2-question5-reponse4" id="quizz2-question5-reponse4" required/> 
                        <p class="contenu-rep"> Des extraterrestres</p>
                    </label>
                </article>
            </section>
        </fieldset>
    </form>
    <button class="btn-quizz btn-valider js-btn-val js-modal-close">Valider le quizz</button>
</aside>
<aside id="modal3" class="modal" aria-hidden="true" role="dialog" aria-labelledby="titlemodal" style="display:none;">
    <form class="modal-wrapper js-modal-stop">
        <h3 class="titre-quizz titlemodal">
            QUIZZ MUSIQUE! 
        </h3>
        <button class="js-modal-close btn-quizz btn-valider">Fermer le quizz</button>
        <fieldset class="box-question-quizz">
            <img class="img-quizz img" src="asset/img/page-07-quizz/quizz/3-musique/florent-pagny.jpg" alt="affiche de Florant Pagny">
            <p>
                Dans les années 90: dans quelle chanson Florent Pagny signer les paroles?
            </p>
            <section class="box-section-quizz">
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz5-question1-reponse1">
                        <input class="contenu-rep"  type="radio" name="quizz5-question1" value="quizz5-question1-reponse1" id="quizz5-question1-reponse1" /> 
                        <p class="contenu-rep"> A la clair fontaine</p>
                    </label>
                    <label class="box-reponse" for="quizz5-question1-reponse2">
                        <input class="contenu-rep"  type="radio" name="quizz5-question1" value="quizz5-question1-reponse2" id="quizz5-question1-reponse2" /> 
                        <p class="contenu-rep"> Le petit bonhomme en mousse</p>
                    </label>
                </article>
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz5-question1-reponse3">
                        <input class="contenu-rep"  type="radio" name="quizz5-question1" value="quizz5-question1-reponse3" id="quizz5-question1-reponse3" /> 
                        <p class="contenu-rep"> Je danse le Mia</p>
                    </label>
                    <label class="box-reponse" for="quizz5-question1-reponse4">
                        <input class="contenu-rep"  type="radio" name="quizz5-question1" value="quizz5-question1-reponse4" id="quizz5-question1-reponse4" required/> 
                        <p class="contenu-rep"> Savoir Aimer</p>
                    </label>
                </article>
            </section>
        </fieldset>
        <fieldset class="box-question-quizz">>
            <img class="img-quizz img" src="asset/img/page-07-quizz/quizz/3-musique/the-police.jpg" alt="affiche de the police">
            <p>
                Dans leur chanson quelle nom le groupe The Police chanter?
            </p>
            <section class="box-section-quizz">
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz6-question2-reponse1">
                    <input class="contenu-rep"  type="radio" name="quizz6-question1" value="quizz6-question2-reponse1" id="quizz6-question2-reponse1" /> 
                <p class="contenu-rep"> Marie</p>
                </label>
                <label class="box-reponse" for="quizz6-question2-reponse2">
                    <input class="contenu-rep"  type="radio" name="quizz6-question1" value="quizz6-question2-reponse2" id="quizz6-question2-reponse2" /> 
                    <p class="contenu-rep">> Roxane</p>
                </label>
                </article>
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz6-question2-reponse3">
                        <input class="contenu-rep"  type="radio" name="quizz6-question1" value="quizz6-question2-reponse3" id="quizz6-question2-reponse3" /> 
                        <p class="contenu-rep"> Alice</p>
                    </label>
                    <label class="box-reponse" for="quizz6-question2-reponse4">
                        <input class="contenu-rep"  type="radio" name="quizz6-question1" value="quizz6-question2-reponse4" id="quizz6-question2-reponse4" required/> 
                        <p class="contenu-rep"> Léa</p>
                    </label>
                </article>
            </section>
        </fieldset>
        <fieldset class="box-question-quizz">
            <img class="img-quizz img" src="asset/img/page-07-quizz/quizz/3-musique/shaggy.jpg" alt="affiche de shaggy">
            <p>
                Quel est le plus gros tube de Shaggy?
            </p>
            <section class="box-section-quizz">
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz3-question3-reponse1">
                        <input class="contenu-rep"  type="radio" name="quizz3-question3" value="quizz3-question3-reponse1" id="quizz3-question3-reponse1" /> 
                        <p class="contenu-rep"> Boombastic</p>
                    </label>
                    <label class="box-reponse" for="quizz3-question3-reponse2">
                        <input class="contenu-rep"  type="radio" name="quizz3-question3" value="quizz3-question3-reponse2" id="quizz3-question3-reponse2" /> 
                        <p class="contenu-rep"> A la queue leuleu</p>
                    </label>
                </article>
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz3-question3-reponse3">
                        <input class="contenu-rep"  type="radio" name="quizz3-question3" value="quizz3-question3-reponse3" id="quizz3-question3-reponse3" /> 
                        <p class="contenu-rep"> Dans les prisons de Nantes</p>
                    </label>
                    <label class="box-reponse" for="quizz3-question3-reponse4">
                        <input class="contenu-rep"  type="radio" name="quizz3-question3" value="quizz3-question3-reponse4" id="quizz3-question3-reponse4" required/> 
                        <p class="contenu-rep"> Promenons nous dans les bois</p>
                    </label>
                </article>
            </section>
        </fieldset>
        <fieldset class="box-question-quizz">
            <img class="img-quizz img" src="asset/img/page-07-quizz/quizz/3-musique/elvis-presley.jpg" alt="affiche de Elvis Presley">
            <p>
                Quel genre musicale pratique Elvis?
            </p>
            <section class="box-section-quizz">
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz3-question4-reponse1">
                        <input class="contenu-rep"  type="radio" name="quizz3-question4" value="quizz3-question4-reponse1" id="quizz3-question4-reponse1" /> 
                        <p class="contenu-rep"> La valse</p>
                    </label>
                    <label class="box-reponse" for="quizz3-question4-reponse2">
                        <input class="contenu-rep"  type="radio" name="quizz3-question4" value="quizz3-question4-reponse2" id="quizz3-question4-reponse2" /> 
                        <p class="contenu-rep"> Le rock</p>
                    </label>
                </article>
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz3-question4-reponse3">
                        <input class="contenu-rep"  type="radio" name="quizz3-question4" value="quizz3-question4-reponse3" id="quizz3-question4-reponse3" /> 
                        <p class="contenu-rep"> Le reggae</p>
                    </label>
                    <label class="box-reponse" for="quizz3-question4-reponse4">
                        <input class="contenu-rep"  type="radio" name="quizz3-question4" value="quizz3-question4-reponse4" id="quizz3-question4-reponse4" required/> 
                        <p class="contenu-rep"> La soul</p>
                    </label>
                </article>
            </section>
        </fieldset>
        <fieldset class="box-question-quizz">
            <img class="img-quizz img" src="asset/img/page-07-quizz/quizz/3-musique/crazy-frog.jpg" alt="affiche de crazy frog">
            <p>
                Comment s'appel la grenouille bleu qui chante?
            </p>
            <section class="box-section-quizz">
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz3-question5-reponse1">
                        <input class="contenu-rep"  type="radio" name="quizz3-question5" value="quizz3-question5-reponse1" id="quizz3-question5-reponse1" /> 
                        <p class="contenu-rep"> Petite frog</p>
                    </label>
                    <label class="box-reponse" for="quizz3-question5-reponse2">
                        <input class="contenu-rep"  type="radio" name="quizz3-question5" value="quizz3-question5-reponse2" id="quizz3-question5-reponse2" /> 
                        <p class="contenu-rep"> Grande frog</p>
                    </label>
                </article>
                <article class="question-quizz">
                    <label class="box-reponse" for="quizz3-question5-reponse3">
                        <input class="contenu-rep"  type="radio" name="quizz3-question5" value="quizz3-question5-reponse3" id="quizz3-question5-reponse3" /> 
                        <p class="contenu-rep"> Mega frog</p>
                    </label>
                    <label class="box-reponse" for="quizz3-question5-reponse4">
                        <input class="contenu-rep"  type="radio" name="quizz3-question5" value="quizz3-question5-reponse4" id="quizz3-question5-reponse4" required/> 
                        <p class="contenu-rep"> Crazy frog</p>
                    </label>
                </article>
            </section>
        </fieldset>
    </form>
    <button class="btn-quizz btn-valider js-btn-val js-modal-close">Valider le quizz</button>
</aside>
<aside id="modal4" class="modal" aria-hidden="true" role="dialog" aria-labelledby="titlemodal" style="display:none;">
    <form class="modal-wrapper js-modal-stop">
        <h3 class="titre-quizz titlemodal">
            QUESTION BONUS!  
        </h3>
    <fieldset class="box-question-quizz">
        <p>
            Niveau très facile (d'après le Dr Sheldon Cooper)
        </p>
        <img class="img-quizz img" src="asset/img/page-07-quizz/quizz/4-bonus/sheldon-cooper.gif" alt="affiche de Sheldon Cooper">
        <p>
            Le Dr Cooper vous demande de calculer le temps d'arrivé d'un rayon du soleil sur la Terre?
        </p>    
        <section class="box-section-quizz">
            <article class="question-quizz">
                <label class="box-reponse" for="quizz4-question1-reponse1">
                    <input class="contenu-rep"  type="radio" name="quizz4-question1" value="quizz4-question1-reponse1" id="quizz4-question1-reponse1" /> 
                    <p class="contenu-rep"> Non mais c'est quoi cette question?!</p>
                </label>
                <label class="box-reponse" for="quizz4-question1-reponse2">
                    <input class="contenu-rep"  type="radio" name="quizz4-question1" value="quizz4-question1-reponse2" id="quizz4-question1-reponse2" /> 
                    <p class="contenu-rep"> Non mais sérieux, c'est quoi cette question?!</p>
                </label>    
            </article>
            <article class="question-quizz">
                <label class="box-reponse" for="quizz4-question1-reponse3">
                    <input class="contenu-rep"  type="radio" name="quizz4-question1" value="quizz4-question1-reponse3" id="quizz4-question1-reponse3" /> 
                    <p class="contenu-rep"> Et c'est "très facile" sa?!</p>
                </label>
                <label class="box-reponse" for="quizz4-question1-reponse4">
                    <input class="contenu-rep"  type="radio" name="quizz4-question1" value="quizz4-question1-reponse4" id="quizz4-question1-reponse4" required/> 
                    <p class="contenu-rep"> Vous pouvez répéter la question?</p>
                </label>    
            </article>
        </section>
    </fieldset>
    <input class="btn-quizz btn-valider js-btn-val js-modal-close" type="submit" value="Valider le quizz">
    </form>
</aside>
<?php
include_once 'PHP/slogan.php';
include_once 'PHP/footer.php';
?>