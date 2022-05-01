<?php
class Paiement extends Controller 
{
    public static function index()
    {
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


        }
        


        self::render('paiement', compact('prixTotal','recap'));
    }

}
?>