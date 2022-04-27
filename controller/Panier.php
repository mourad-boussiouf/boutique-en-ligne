<?php
class Panier extends Controller 
{

    public static function index(){

        if (isset($_POST['delArticleCart']))
        {
        $libelleProduit = $_POST['articleValue'];
        $enlevearticlelol = new PanierModel();   
        $enlevestp = $enlevearticlelol->supprimerArticle($libelleProduit);
        self::render('panier');
        }

        if (isset($_POST))
    self::render('panier');
    }

}
?>