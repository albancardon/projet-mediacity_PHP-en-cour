<?php
include_once 'PHP/head.php'
?>
<body id="page06">
<?php
include_once 'PHP/header.php'
?>
<main>
    <!--header du main page-06-->
    <section class="box-haut-page06">
        <div class="titre-page06 majuscule">
            <img class="logo-popcorn" src="logo/popcorn.svg" alt="logo popcorn">
            <div class="texte-titre-page06">
                <h1> 
                    Connectez-vous!
                </h1>
                <h2 class="titre-h2">
                    Ou rejoignez-nous pour de plus fantastiques aventures!
                </h2>
            </div>
            <img class="logo-popcorn" src="logo/popcorn.svg" alt="logo popcorn">
        </div>
        <img  class="image-cinema" src="img/page-06-contact/Sortiescinemapoursonge.png" alt="image sortie au cinema">
    </section>
    <!--centre du main page-06-->
    <section class="box-general-connexion">
        <article class="box-connexion">
            <div class="login boite-formulaire">
                <h2 class="titre-h2">Déjà dans la communauté de l'abo?!</h2>
                <h3>Connectez-vous!!</h3>
                <form class="formulaire-connexion" action="page-connexion.php" method="post">
                    <p class="champ">
                        <label for="pseudo">Votre nom d'utilisateur</label>
                        <input class="zone-remplir" type="text" name="pseudo" id="pseudo" placeholder="Votre surnom" required />
                    </p>
                    <p class="champ">
                        <label for="password">Votre mot de passe</label>
                        <input class="zone-remplir" type="password" name="password" id="password" placeholder="Votre mot de passe" required />
                    </p>                        
                    <p>
                        <input class="checkbox" type="checkbox" name="checkbox1" id="checkbox1" required />
                        <label class="checkbox" for="checkbox1">Se souvenir de moi</label>
                    </p>
                    <input class="validation" type="submit" value="Connexion">
                    <!--mettre un capcha ici-->
                </form>
            </div>
            <div class="reinitialisation boite-formulaire">
                <div class="formulaire-mdp-oublier">
                    <h3>
                        Mot de passe ou nom utilisateur oublier?
                    </h3>
                    <p>
                        Demande d'envoie d'e-mail de réinsirialisation 
                    </p>
                </div>
                <form class="champ-mdp-oublier">
                    <p>
                        <label for="email">L'adresse e-mail utilisé lors de l'inscription</label>
                        <input class="zone-remplir" type="email" name="email" id="email" placeholder="Votre e-mail" required />
                    </p>
                    <input class="validation" type="submit" value="Demande">                    
                </form>
            </div>
        </article>
        <article class="box-inscription boite-formulaire">
            <h2 class="titre-h2">Pas encore dans la communauté de l'abo?!</h2>
            <h3>Inscrivez-vous!!</h3>
            <form action="page-inscription.php" method="post">
                <p class="champ-inscription">
                    <label class="intitule" for="nom">Votre nom </label>
                    <input class="zone-remplir" type="text" name="nom" id="nom" placeholder="Votre nom" required />
                </p>
                <p class="champ-inscription">
                    <label for="prenom">Votre prénom </label>
                    <input class="zone-remplir" type="text" name="prenom" id="prenom" placeholder="Votre prénom" required />
                </p>
                <p class="champ-inscription">
                    <label for="pseudo">Votre nom d'utilisateur</label>
                    <input class="zone-remplir" type="text" name="pseudo" id="pseudo" placeholder="Votre surnom" required />
                </p>
                <p class="champ-inscription">
                    <label for="email1">Votre adresse e-mail</label>
                    <input class="zone-remplir" type="email" name="email1" id="email1" placeholder="Votre e-mail" required />
                </p>
                <p class="champ-inscription">
                    <label for="adresse">Votre adresse postale</label>
                    <input class="zone-remplir" type="text" name="adresse" id="adresse" placeholder="Votre adresse postal" required />
                </p>
                <p class="champ-inscription">
                    <label for="password">Votre mot de passe</label>
                    <input class="zone-remplir" type="password" name="password" id="password" placeholder="Votre mot de passe" required />
                </p>
                <p class="champ-inscription">
                    <label for="password1">Confirmation de votre mot de passe</label>
                    <input class="zone-remplir" type="password" name="password1" id="password1" placeholder="Répétez votre mot de passe" required />
                </p>
                <p class="zone-age">
                    Veuillez indiquer la tranche d'âge dans laquelle vous vous situez :
                </p>
                <p class="zone-age">
                <input class="checkbox" type="radio" name="age" value="age-moins15" id="age-moins15" /> 
                <label class="checkbox" for="age-moins15">Moins de 15 ans</label>
                </p>
                <p class="zone-age">
                <input class="checkbox" type="radio" name="age" value="age-entre15-25" id="age-entre15-25" /> 
                <label class="checkbox" for="age-entre15-25">15-25 ans</label>
                </p>
                <p class="zone-age">
                    <input class="checkbox" type="radio" name="age" value="age-entre25-40" id="age-entre25-40" /> 
                    <label class="checkbox" for="age-entre25-40">25-40 ans</label>
                </p>
                <p class="zone-age">
                    <input class="checkbox" type="radio" name="age" value="age-plus40" id="age-plus40" required/> 
                    <label class="checkbox" for="age-plus40">Vous avez atteint la sagesse ?!</label>
                </p>                        
                <p class="zone-age">
                    <input class="checkbox" type="checkbox" name="checkbox2" id="checkbox2" required />
                    <label class="checkbox" for="checkbox2">J'accepte les termes et conditions d'utilisation</label>
                </p>
                <!--mettre un capcha ici-->
                <input class="validation" type="submit" value="Inscription">
            </form>
        </article>
    </section>    
    <!-- partie avis page-06-->    
    <section class="section-bas-page-06">
        <article class="box-image-tele">
            <img class="image-tele" src="img/page-06-contact/tele.png" alt="image de télévision">
        </article>        
        <article class="box-avis boite-formulaire">
            <div class="box-legende-avis">
                <h2 class="titre-h2">
                    Votre avis nous interesse!!
                </h2>
                <p>
                    Dites nous les améliortations que vous souhaitez!!
                </p>
            </div>
            <form class="box-saisie-avis">
                <p>
                    <textarea class="textarea-avis" name="avis" id="avis"></textarea>
                </p>
                <input class="validation" type="submit" value="Envoie">                    
            </form>
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