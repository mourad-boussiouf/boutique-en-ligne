<?php



class Authentification extends Controller
{

    public static function indexcon()
    {

        if (isset($_POST['connect'])) {

            $usermodel = new UserModel();
            $user = $usermodel->getOne('email', $_POST['emaillog']);
            if (!empty($user)) {
                if ($user[0]['password'] == password_verify($_POST['passwordlog'], $user[0]['password'])) {
                    $_SESSION['panier']=array();
                    $_SESSION['panier']['libelleProduit'] = array();
                    $_SESSION['panier']['qteProduit'] = array();
                    $_SESSION['panier']['prixProduit'] = array();
                    $_SESSION['panier']['verrou'] = false;
                    $_SESSION['id'] = $user[0]['id'];
                    $_SESSION['email'] = $user[0]['email'];
                    $_SESSION['nom'] = $user[0]['nom'];
                    $_SESSION['telephone'] = $user[0]['telephone'];
                    $_SESSION['adresse'] = $user[0]['adresse'];
                    $_SESSION['droit'] =$user[0]['id_droit'];
                    $_SESSION['prenom'] = $user[0]['prenom'];
                    $_SESSION['nom'] = $user[0]['nom'];
                    echo "<div class = reussi> Vous êtes connnecté en tant que : </div>"."<div class = reussi>".$user[0]['prenom']."</div>";
                    self::render("authentification");
                   
                } 
            } 

            
            $user2 = $usermodel->getOne('telephone', $_POST['telephonelog']);
            if (!empty($user2)) {

                if ($user2[0]['password'] == password_verify($_POST['passwordlog'], $user2[0]['password'])) {
                    $_SESSION['panier']=array();
                    $_SESSION['panier']['libelleProduit'] = array();
                    $_SESSION['panier']['qteProduit'] = array();
                    $_SESSION['panier']['prixProduit'] = array();
                    $_SESSION['panier']['verrou'] = false;
                    $_SESSION['id'] = $user2[0]['id'];
                    $_SESSION['email'] = $user2[0]['email'];
                    $_SESSION['nom'] = $user2[0]['nom'];
                    $_SESSION['telephone'] = $user2[0]['telephone'];
                    $_SESSION['adresse'] = $user2[0]['adresse'];
                    $_SESSION['droit'] =$user2[0]['id_droit'];
                    $_SESSION['prenom'] = $user2[0]['prenom'];
                    $_SESSION['nom'] = $user2[0]['nom'];

                    
                    echo "<div class = reussi> Vous êtes connnecté en tant que : </div>"."<div class = reussi>".$user2[0]['prenom']."</div>";
                    self::render("authentification");
                   
                } 

            }

            if (empty($user) && empty($user2)) {
                self::render("authentification");
                echo "<div class = error> Les données saisies sont incorrectes.</div>";
            } 
           
                

        }
        self::render("authentification");


    }    

    public static function indexreg() {
  
        if (isset($_POST['valider'])) {
            $email = htmlspecialchars($_POST['email']);
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $password = htmlspecialchars($_POST['password']);
            $passwordverify = htmlspecialchars($_POST['passwordverify']);
            $telephone = htmlspecialchars($_POST['telephone']);
            $adress = htmlspecialchars($_POST['numero']) . ',' . htmlspecialchars($_POST['nomrue']) .','. htmlspecialchars($_POST['codepostal']) .','. htmlspecialchars($_POST['ville']);
            $user=new UserModel();
            $utilisateur=$user->getOne('email',$email);
            $telephoneExist=$user->getOne('telephone',$telephone);



            if (!empty($_POST['nom']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['numero']) && !empty($_POST['nom']) && !empty($_POST['codepostal']) && !empty($_POST['ville'])) 
            {
                if ($password != $passwordverify) {
                    echo "<div class = errors> Vérifiez le mot de passe </div>";
                    self::render("authentification");


                } 
                elseif (!empty($utilisateur)){ 
                    echo "<div class = error> Cet Email est déjà utilisé pour un autre compte </div>";
                    self::render("authentification");

                }
                elseif(!empty($telephoneExist)){
                    $error1="Ce numéro de téléphone est déjà utilisé";
                    echo "<div class = errors> Ce numéro est déja utilisé</div>";
                    self::render("authentification");
                }
                else {
                    $hash = password_hash($password, PASSWORD_DEFAULT);
                    $user = new UserModel();
                    $user->insert($email, $hash, $telephone, $adress, $nom, $prenom);
                    self::render("authentification");
                    echo "<div class = success> Bien inscrit ! Vous pouvez vous connecter. </div>";
                }

            }else {
                echo "<div class = errors> Veuillez remplir les champs</div>";
            
            }
        }
        self::render("authentification");
    }
        

}



?>