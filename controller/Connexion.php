<?php




class Connexion extends Controller
{

    public static function index()
    {
        $errors = [];
        $success = [];
        if (isset($_POST['connect'])) {

            $usermodel = new UserModel();
            $user = $usermodel->getOne('email', htmlspecialchars($_POST['email']));
            if (!empty($user)) {

                if ($user[0]['password'] == password_verify($_POST['password'], $user[0]['password'])) {
                    $_SESSION['id'] = $user[0]['id'];
                    $_SESSION['email'] = $user[0]['email'];
                    $_SESSION['nom'] = $user[0]['nom'];
                    $_SESSION['prenom'] = $user[0]['prenom'];
                    $_SESSION['droit'] =$user[0]['id_droit'];
                    $success[] = 'Bienvenue ' . $user[0]['prenom'];
                    self::render("connexion", compact("errors", "success"));

                } 


            }

            $usermodel2 = new UserModel();
            $user2 = $usermodel2->getOne('telephone', htmlspecialchars($_POST['telephone']));
            if (!empty($user2)) {

                if ($user2[0]['password'] == password_verify($_POST['password'], $user2[0]['password'])) {
                    $_SESSION['id'] = $user2[0]['id'];
                    $_SESSION['email'] = $user2[0]['email'];
                    $_SESSION['nom'] = $user2[0]['nom'];
                    $_SESSION['prenom'] = $user2[0]['prenom'];
                    $_SESSION['droit'] =$user2[0]['id_droit'];
                    $success[] = 'Bienvenue ' . $user2[0]['prenom'];
                    self::render("connexion", compact("errors", "success"));

                } 

            }

            if (empty($user) && empty($user2)) {
            array_push($errors, 'Login ou mot de passe incorrect');
            } else { array_push($errors, 'Une erreur est survenue'); }
           
                

        }

        self::render("connexion", compact("errors", "success"));

        
    }



}
