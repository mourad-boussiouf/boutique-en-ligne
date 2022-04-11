<?php




class Authentification extends Controller
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
                    self::render("authentification", compact("errors", "success"));

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
                    self::render("authentification", compact("errors", "success"));

                } 

            }

            if (empty($user) && empty($user2)) {
            array_push($errors, 'Login ou mot de passe incorrect');
            } else { array_push($errors, 'Une erreur est survenue'); }
           
                

        }

        self::render("authentification", compact("errors", "success"));

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


            if (!empty($_POST['nom']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['numero']) && !empty($_POST['nom']) && !empty($_POST['codepostal']) && !empty($_POST['ville'])) {
                if ($password != $passwordverify) {
                    $error1="verifiez votre mot de passe";
                    self::render("authentification", compact('error1'));


                } 
                elseif (!empty($utilisateur)){
                    $error1="Cet Email est déjà utilisé pour un autre compte";
                    self::render("authentification", compact('error1'));

                }
                elseif(!empty($telephoneExist)){
                    $error1="Ce numéro de téléphone est déjà utilisé";
                    self::render("authentification", compact('error1'));
                }
                else {
                    $hash = password_hash($password, PASSWORD_DEFAULT);
                    $user = new UserModel();
                    $user->insert($email, $hash, $telephone, $adress, $nom, $prenom);
                    array_push($success, 'Vous êtes bien inscrit');
                    self::render("authentification", compact('success'));
                    

                }
            } else {
                echo "Certains champs sont vides";
            }


        }
    }



}