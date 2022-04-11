<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
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
                <li><a href="connexion.php">Connexion</a></li>
                <button><li><a href="#">Inscription</a></li></button>
            </ul>
            <input type="search" placeholder="Rechercher">
        </nav>
    </header>

    <?php

$bdd = new PDO('mysql:host=localhost;dbname=boutique', 'root', '');
    //CLASS//
    class User {
        private $id;
        public $email;
        public $firstname;
        public $lastname;
        public $password;

            //FUNCTION REGISTER
public function register($login, $password, $email, $firstname, $lastname){
    
    $bdd = new PDO('mysql:host=localhost;dbname=boutique', 'root', '');
    $requetelogin= $bdd->prepare("SELECT * FROM user WHERE login = ?");
    $requetelogin->execute(array($login));
    $loginexist= $requetelogin->rowCount();

    if($loginexist == 0) {
        $insert= $bdd->prepare("INSERT INTO user (login, password, email, firstname, lastname) VALUES(?, ?, ?, ?, ?)");
        $insert->execute(array($login, $password, $email, $firstname, $lastname));
        return [$login, $password, $email, $firstname, $lastname];
    }

}

//FUNCTION CONNECT
public function connect($login, $password){
   
    $bdd = new PDO('mysql:host=localhost;dbname=boutique', 'root', '');
    $requser = $bdd->prepare("SELECT * FROM user WHERE login = ? AND password = ?");
    $requser->execute(array($login, $password));
    $userexist = $requser->rowCount();

    if($userexist == 1){
            
        $user= $requser->fetch();

              $this->id = $user['id'];
              $this->login = $user['login'];
              $this->password = $user['password'];
              $this->email = $user['email'];
              $this->firstname = $user['firstname'];
              $this->lastname = $user['lastname'];
              return true;
            }
            
            else
            {   
                  return false;
            }
    }

    //FUNCTION FORGOT_PASSWORD
    public function forgot_password() {

        $bdd = new PDO('mysql:host=localhost;dbname=boutique', 'root', '');
        if(isset($_POST['email']) && isset($_POST['password'])){
            $statement = $bdd->prepare('SELECT password FROM user WHERE email=?');
            $statement->execute($_POST['email']);
            $password = $statement->fetchColumn();
        }
  
    }


    }
    ?>

    <main>
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
    
</body>
</html>