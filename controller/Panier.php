<?php
class Panier extends Controller 
{

    public static function index(){

        if(count($_SESSION['panier']['libelleProduit']) <= 0) {
        echo "<div class = error> Aucun produits selectionnés.</div>";
        header('Refresh:0;url='.path.'articles');
        }
        
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

            $_SESSION['orderline'] = "";

            for ($i=0; $i < count($_SESSION['panier']['libelleProduit'])  ; $i++) { 
            
                $_SESSION['orderline'] .=" •".$_SESSION['panier']['libelleProduit'][$i].", qté : ".$_SESSION['panier']['qteProduit'][$i].", prix : ".$_SESSION['panier']['prixProduit'][$i]."€.  "; 
                        
            }

         
                           
        echo '<div class = reussi> Votre commande est confirmée. Vous allez être rediriger vers la page de paiement.</div>
        <div class="dots-bars-1"></div>';

        header('Refresh:5;url='.path.'paiement');
        }


        

    self::render('panier', compact('prixTotal'));

    }
    
}
?>