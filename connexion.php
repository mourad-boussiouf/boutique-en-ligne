<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="boutique.css">
</head>
<body>
    <header class="main-head">
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="#">Nouveautés</a></li>
                <li><a href="#">T-shirt</a></li>
                <li><a href="#">A propos</a></li>
                <li><a href="#">Connexion</a></li>
                <button><li><a href="inscription.php">Inscription</a></li></button>
            </ul>
            <input type="search" placeholder="Rechercher">
        </nav>
    </header>
    
    <?php

if(!empty($_POST['email']) && !empty($_POST['password'])) // Si il existe les champs email, password et qu'il sont pas vident
{
    // Patch XSS
    $email = htmlspecialchars($_POST['email']); 
    $password = htmlspecialchars($_POST['password']);
    
    $email = strtolower($email); // email transformé en minuscule
    
    // On regarde si l'utilisateur est inscrit dans la table user
    $check = $bdd->prepare('SELECT login, password, token FROM user WHERE login = ?');
    $check->execute(array($login));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row > 0) {
            // Si le mot de passe est le bon
            if(password_verify($password, $data['password']))
            {
                // On créer la session et on redirige sur index.php
                $_SESSION['user'] = $data['token'];
                header('Location: index.php');
                die();
            } else { 
                header('Location: connexion.php?login_err=password'); die(); 
            }
    } else { 
        header('Location: connexion.php?login_err=already'); die(); 
    }
} else { 
    header('Location: connexion.php'); die();} // si le formulaire est envoyé sans aucune données
                 
    ?>

    <main>
        <form class="box-conn" action="" method="post">
            <h4>Vous avez un compte ?</h4>
            <h2>CONNECTEZ-VOUS</h2>
            <input type="text" name="login" placeholder="Nom d'utilisateur">
            <input type="password" name="password" placeholder="Mot de passe">
            <input class="button" type="submit" name="submit" value="SE CONNECTER">
        </form>
    </main>
    
</body>
</html>