<?php
class Panier extends Controller 
{

    public static function index(){
        
        $model = new PanierModel();   
        

        if (isset($_POST['articleValue']))
        $libelleProduit = $_POST['articleValue'];

        if (isset($_POST['delArticleCart']))
        {   
        $enlevestp = $model->supprimerArticle($libelleProduit);
       
        }
       
        if (isset($_POST['AddSubmit'])){
        $maxoucreve = $_POST['add'];
        $decremquant = $model->modifierQTeArticle($libelleProduit,$maxoucreve);   
        
        }
        
        if (isset($_POST['RemSubmit'])){
        $maxoucreve = $_POST['decrease'];
        $moinsquant = $model->modifierQTeArticle($libelleProduit,$maxoucreve);;
       
        }

        
        
        $prixTotal = $model->MontantGlobal();


    self::render('panier', compact('prixTotal'));
    }
    
}
?>