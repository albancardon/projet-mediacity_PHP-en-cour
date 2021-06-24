<?php
$insc = (isset($_GET['insc']) && !empty($_GET['insc'])) ? htmlspecialchars($_GET['insc']) : null;
if (isset($insc)&& $insc == "ok"){
    echo'
        <script language=javascript>
            alert(\'Inscription effectuer!\');
        </script> ';
}

include_once 'PHP/head.php'
?>
<body id="page06">
<?php
include_once 'PHP/header.php';
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
                <form class="formulaire-connexion">
                <!-- action="php/treatment-user/mediacity-connexion.php" method="POST" -->
                    <p class="champ">
                        <label for="pseudoConn">Votre nom d'utilisateur</label>
                        <input class="zone-remplir" type="text" name="pseudoConn" id="pseudoConn" placeholder="Votre surnom" autocomplete="nouveau mot de passe" required />
                    </p>
                    <p class="champ">
                        <label for="passConn">Votre mot de passe</label>
                        <input class="zone-remplir" type="password" name="passConn" id="passConn" placeholder="Votre mot de passe" autocomplete="on" required />
                    </p>                        
                    <p>
                        <input class="checkbox" type="checkbox" name="checkbox" id="checkbox"/>
                        <label class="checkbox" for="checkbox">Se souvenir de moi</label>
                    </p>
                    <input class="validation" type="submit" value="Connexion" id="btn-conn">
                    <!--mettre un capcha ici-->
                </form>
            </div>
        </article>

        <article class="box-inscription boite-formulaire">
            <h2 class="titre-h2">Pas encore dans la communauté de l'abo?!</h2>
            <h3>Devenez membre et inscrivez-vous!!</h3>
            <form action="php/treatment-user/mediacity-inscription.php" method="post">
                <p class="champ-inscription">
                    <label class="intitule" for="nom">Votre nom </label>
                    <input class="zone-remplir" type="text" name="nom" id="nom" placeholder="Votre nom" pattern="[A-Za-z0-9\u00c0-\u00ff]{3,20}" required />
                </p>
                <p class="champ-inscription">
                    <label for="prenom">Votre prénom </label>
                    <input class="zone-remplir" type="text" name="prenom" id="prenom" placeholder="Votre prénom" pattern="[A-Za-z0-9\u00c0-\u00ff]{3,20}" required />
                </p>
                <p class="champ-inscription">
                    <label for="pseudo">Votre nom d'utilisateur</label>
                    <input class="zone-remplir" type="text" name="pseudo" id="pseudo" placeholder="Votre surnom" pattern="[A-Za-z0-9\u00c0-\u00ff]{3,20}" required />
                </p>
                <p class="champ-inscription">
                    <label for="tel">Votre numero de téléphone</label>
                    <input class="zone-remplir" type="number" name="tel" id="tel" placeholder="Votre numero de téléphone" pattern="[0-9]{3,20}" required />
                </p>
                <p class="champ-inscription">
                    <label for="mail">Votre adresse e-mail</label>
                    <input class="zone-remplir" type="email" name="mail" id="mail" placeholder="Votre e-mail" required />
                </p>
                <p class="champ-inscription">
                    <label for="codePostal">Votre code postale</label>
                    <input class="zone-remplir" type="text" name="codePostal" id="codePostal" placeholder="Votre code postal" pattern="[A-Za-z0-9]{3,10}" required />
                </p>
                <p class="champ-inscription">
                    <label for="pass">Votre mot de passe</label>
                    <input class="zone-remplir" type="password" name="pass" id="pass" placeholder="Votre mot de passe" pattern="[A-Za-z0-9_$]{2,}" required />
                </p>
                <p class="champ-inscription">
                    <label for="pass1">Confirmation de votre mot de passe</label>
                    <input class="zone-remplir" type="password" name="" id="pass1" placeholder="Répétez votre mot de passe" pattern="[A-Za-z0-9_$]{2,}" required />
                </p>
                <p class="zone-age">
                    Veuillez indiquer la tranche d'âge dans laquelle vous vous situez :
                </p>
                <p class="zone-age">
                <input class="checkbox" type="radio" name="age" value="m15" id="m15" /> 
                <label class="checkbox" for="m15">Moins de 15 ans</label>
                </p>
                <p class="zone-age">
                <input class="checkbox" type="radio" name="age" value="15-25" id="15-25" /> 
                <label class="checkbox" for="15-25">15-25 ans</label>
                </p>
                <p class="zone-age">
                    <input class="checkbox" type="radio" name="age" value="26-40" id="26-40" /> 
                    <label class="checkbox" for="26-40">26-40 ans</label>
                </p>
                <p class="zone-age">
                    <input class="checkbox" type="radio" name="age" value="p40" id="p40" required/> 
                    <label class="checkbox" for="p40">Vous avez atteint la sagesse ?!</label>
                </p>                        
                <!-- <p class="zone-age">
                    <input class="checkbox" type="checkbox" name="" id="checkbox2" required />
                    <label class="checkbox" for="checkbox2">J'accepte les termes et conditions d'utilisation</label>
                </p> -->
                <!--mettre un capcha ici-->
                <input class="btn validation" id="btn-inscr" type="submit" value="Inscription">
            </form>
        </article>
    </section>    

    <!-- partie avis page-06-->    
    <section class="section-bas-page-06" id="boxAvis">
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

<script src="script/Javascript-page06.js" defer></script>
<?php
include_once 'PHP/footer.php';
?>