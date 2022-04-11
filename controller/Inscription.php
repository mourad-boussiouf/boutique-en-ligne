<?php


class Inscription extends Controller
{

    
    public static function Register()
    {
        $success = [];
        if (isset($_POST['valider'])) {
            $email = htmlspecialchars($_POST['email']);
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $password = htmlspecialchars($_POST['password']);
            $passwordverify = htmlspecialchars($_POST['passwordverify']);
            $telephone = htmlspecialchars($_POST['telephone']);
            $adress = htmlspecialchars($_POST['numero']) . ',' . htmlspecialchars($_POST['nomrue']) . htmlspecialchars($_POST['codepostal']) . htmlspecialchars($_POST['ville']);
            $user=new UserModel();
            $utilisateur=$user->getOne('email',$email);
            $telephoneExist=$user->getOne('telephone',$telephone);

        }
    }
}