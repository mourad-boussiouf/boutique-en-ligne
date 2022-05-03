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
        $prixTotal = $model->MontantGlobal();

        self::render('panier', compact('prixTotal'));
       
        }
       
        if (isset($_POST['AddSubmit'])){
        $maxoucreve = $_POST['add'];
        $decremquant = $model->modifierQTeArticle($libelleProduit,$maxoucreve);  
        $prixTotal = $model->MontantGlobal();

        self::render('panier', compact('prixTotal'));
        
        }
        
        if (isset($_POST['RemSubmit'])){
        $maxoucreve = $_POST['decrease'];
        $moinsquant = $model->modifierQTeArticle($libelleProduit,$maxoucreve);
        $prixTotal = $model->MontantGlobal();

        self::render('panier', compact('prixTotal'));
       
        }

        if (isset($_POST['pay'])) {

            
            $_SESSION['orderline'] = "";
            

            for ($i=0; $i < count($_SESSION['panier']['libelleProduit'])  ; $i++) { 
            
                $_SESSION['orderline'] .=" •".$_SESSION['panier']['libelleProduit'][$i].
                ", qté : ".$_SESSION['panier']['qteProduit'][$i].", prix : ".$_SESSION['panier']['prixProduit'][$i]."€.  "; 
                        
            }
                           
        echo '<div class = reussi> Votre commande est confirmée. Vous allez être redirigé vers la page de paiement (peut-être).</div>
        <div class="dots-bars-1"></div>';
// le temps d'attente est choisi aléatoirement car c'est le gouffre
        $ran = (random_int(3, 10));
        if($ran === 3){
            header('Refresh:3;url='.path.'paiement');
        }if($ran === 4) {
            header('Refresh:4;url='.path.'paiement');
        }if($ran === 5) {
            header('Refresh:5;url='.path.'paiement');
        }if($ran === 6) {
            header('Refresh:6;url='.path.'paiement');
        }if($ran === 7) {
            header('Refresh:7;url='.path.'paiement');
        }if($ran === 8) {
            header('Refresh:8;url='.path.'paiement');
        }if($ran === 9) {
            header('Refresh:9;url='.path.'paiement');
        }if($ran === 10) {
            header('Refresh:10;url='.path.'paiement');
        }
    }

    self::render('panier', compact('prixTotal'));
}
}
?>