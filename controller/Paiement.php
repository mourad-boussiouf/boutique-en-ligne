<?php
class Paiement extends Controller 
{
    public static function index()
    {

        if(count($_SESSION['panier']['libelleProduit']) <= 0) {
            echo "<div class = error> Vous devez avoir choisi des articles pour commander.</div>";
            header('Refresh:0;url='.path.'articles');
            }

        $model = new PanierModel();
        $prixTotal = $model->MontantGlobal();
        
        $recap = explode("•", $_SESSION['orderline']);  
        array_shift($recap);

        if(isset($_POST['confirmpay'])){

            $id_user = $_SESSION['id'];
            $orderline = $_SESSION['orderline'];
            $totalprice = $prixTotal;
            $moyen_paiement = $_POST['paymentselect'];
            $delivery_adress = $_SESSION['nom']." ".$_SESSION['prenom']." ; ".$_SESSION['adresse'];

            $orderModel = new OrdersModel();
            $orderInsert=$orderModel->insertOrders($id_user, $orderline, $totalprice, $moyen_paiement, $delivery_adress);

            
            unset($_SESSION['orderline']);
            $_SESSION['panier']=array();
            $_SESSION['panier']['libelleProduit'] = array();
            $_SESSION['panier']['qteProduit'] = array();
            $_SESSION['panier']['prixProduit'] = array();

            
            echo '<div class = reussi> Nous interrogeons votre banque. Veillez patientez.</div>
            <div class="dots-bars-1"></div>';
    
            header('Refresh:5;url='.path.'paiementsucces');


        }
        


        self::render('paiement', compact('prixTotal','recap'));
    }

}
?>