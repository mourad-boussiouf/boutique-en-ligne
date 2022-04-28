<?php
class Panier extends Controller 
{

    

    public static function index(){
        if (isset($_POST['articleValue']))
        $libelleProduit = $_POST['articleValue'];

        if (isset($_POST['delArticleCart']))
        {
        $enlevearticlelol = new PanierModel();   
        $enlevestp = $enlevearticlelol->supprimerArticle($libelleProduit);
        }
       
        if (isset($_POST['AddSubmit'])){
        $maxoucreve = $_POST['add'];
        $ajouterquant = new PanierModel();
        $decremquant = $ajouterquant->modifierQTeArticle($libelleProduit,$maxoucreve);   
        }
        
        if (isset($_POST['RemSubmit'])){
        $maxoucreve = $_POST['decrease'];
        $soustrairequant = new PanierModel();
        $moinsquant = $soustrairequant->modifierQTeArticle($libelleProduit,$maxoucreve);;
        }
    self::render('panier');
    }

}
?>