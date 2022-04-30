<?php
class Panier extends Controller 
{

    public static function index(){
        
        $model = new PanierModel();   
        $prixTotal = $model->MontantGlobal();

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

        if (isset($_POST['pay'])) {

            
        if(isset($_SESSION['orderline'])){$_SESSION['orderline'] = "";}
        

        foreach ($_SESSION['panier']['libelleProduit'] as $v1){  // triple forearch pour faire une seule string contenant toutes les données d'une commande appelée 'orderline'
            foreach ($_SESSION['panier']['qteProduit'] as $v2){
                foreach ($_SESSION['panier']['prixProduit'] as $v3){

                    $_SESSION['orderline'] .= $v1.",".$v2.",".$v3."<br>";
                }  
            }
        }
              
        echo '<div class = reussi> Votre commande est confirmée. Vous allez être rediriger vers la page de paiement.</div>
        <div class="dots-bars-1"></div>';

        header('Refresh:5;url='.path.'paiement');
        }


        

    self::render('panier', compact('prixTotal'));

    }
    
}
?>