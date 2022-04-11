<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion/Inscription</title>
    <link rel="stylesheet" href="boutique.css">
</head>
<body>
    <header></header>
    <main>
        <!--FORMULAIRE CONNEXION-->
    <form class="box-conn" action="" method="post">
            <h4>Vous avez un compte ?</h4>
            <h2>CONNECTEZ-VOUS</h2>
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Mot de passe">
            <span class="psw"><a href="#">Mot de passe oublié</a></span>
            <input class="button" type="submit" name="submit" value="SE CONNECTER">
        </form>
        <!--FORMULAIRE INSCRIPTION-->
        <form class="box" action="" method="post">
            <h4>Vous n'avez pas de compte ?</h4>
            <h2>INSCRIVEZ-VOUS ?</h2>
            <input type="text" name="firstname" placeholder="Prénom">
            <input type="text" name="lastname" placeholder="Nom">
            <input type="text" name="mail" placeholder="Mail">
            <input type="text" name="phone" placeholder="Numéro de téléphone">
            <input type="text" name="login" placeholder="Pseudo">
            <input type="password" name="password" placeholder="Mot de passe">
            <input type="password" name="conf-pass" placeholder="Confirmation de mot de passe">
            <input class="button" type="submit" name="submit" value="S'INSCRIRE">
        </form>
    </main>
    <footer></footer>
</body>
</html>