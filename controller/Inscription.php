 <?php


 class Inscription extends Controller
{


    public static function Register() {
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



            if (!empty($_POST['nom']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['numero']) && !empty($_POST['nom']) && !empty($_POST['codepostal']) && !empty($_POST['ville'])) 
            {
                if ($password != $passwordverify) {
                    $error1="verifiez votre mot de passe";
                    self::render("inscription", compact('error1'));


                } 
                elseif (!empty($utilisateur)){ 
                    $error1="Cet Email est déjà utilisé pour un autre compte";
                    self::render("inscription", compact('error1'));

                }
                elseif(!empty($telephoneExist)){
                    $error1="Ce numéro de téléphone est déjà utilisé";
                    self::render("inscription", compact('error1'));
                }
                else {
                    $hash = password_hash($password, PASSWORD_DEFAULT);
                    $user = new UserModel();
                    $user->insert($email, $hash, $telephone, $adress, $nom, $prenom);
                    array_push($success, 'Vous êtes bien inscrit');
                    self::render("inscription", compact('success'));
                    
                }

            }else {
                echo "<div class = errors> Veuillez remplir les champs</div>";
            
            }
        }
        self::render("inscription",compact('success'));
    }


}

?> 