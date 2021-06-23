<?php
include_once 'PHP/head.php';
?>
<body id="pagexx">
<?php
include_once 'PHP/header.php'
?>
<main>


<article class="box-inscription boite-formulaire">
    <h2 class="titre-h2">Pas encore dans la communauté de l'abo?!</h2>
    <h3>Inscrivez-vous!!</h3>
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
            <input class="zone-remplir" type="text" name="codePostal" id="codePostal" placeholder="Votre code postal" pattern="[A-Za-z0-9]{3,20}" required />
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
        <p class="zone-age">
            <input class="checkbox" type="checkbox" name="" id="checkbox2" required />
            <label class="checkbox" for="checkbox2">J'accepte les termes et conditions d'utilisation</label>
        </p>
        <!--mettre un capcha ici-->
        <input class="validation" type="submit" value="Inscription">
    </form>
</article>

</main>
<?php
include_once 'PHP/footer.php'
?>