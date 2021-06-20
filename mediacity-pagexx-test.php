<?php
include_once 'PHP/head.php';
?>
<body id="pagexx">
<?php
include_once 'PHP/header.php'
?>
<main>

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

</main>
<?php
include_once 'PHP/footer.php'
?>