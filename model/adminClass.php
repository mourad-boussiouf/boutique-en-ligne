<?php
class AdminClass extends RenderClass
{
    public function __construct()
    {

    }

    // User
    public static function index()
    {
        $user = new UtilisateursModel();
        $utilisateur = count($user->getALL());
        $product = new HistoriqueModel();
        $produit = count($product->getALL());

        $stock = new ProduitsModel();
    
        self::renderAdmin('admin', compact('utilisateur', 'produit', ));
    }


    // User

    public static function user()
    {
        $user = new UtilisateursModel();
        $utilisateur = ($user->getALL());
        self::renderAdmin('adminuser', compact('utilisateur'));
    }

    public static function manageUser()
    {
        $params = explode('/', $_GET['p']);
        $user = new UtilisateursModel();
        $droits = new DroitsModel();
        $utilis=$user->getOne('id',$params[2]);
        $droit = $droits->getOne("id", $utilis[0]['id_droit']);
        if (isset($_POST['modif'])){
             $manage = ($user->update('id_droit',$_POST['droit'], $params[2]));

        }
        self::renderAdmin('manageuser', compact('utilis','droit'));
    }








