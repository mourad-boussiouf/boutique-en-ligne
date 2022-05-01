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
// Nous procédons à une discrimination de classe suivant le montant de l'achat du client ce qui est je trouve somme toute normal.

            if ($totalprice < 20){
            echo "<div class = 'reussi'> On interroge la Banque Postale le prolix, si c'est le 5 peut être que le 
            paiement passera.</div>
            <div class='dots-bars-1'></div>";}

            if ($totalprice < 300 && $totalprice > 20 ){
                echo '<div class = reussi> Nous interrogeons votre banque. Veillez patientez.</div>
                <div class="dots-bars-1"></div>';}

            if ($totalprice >= 300){
                echo '<div class = "reussi"> Nous interrogeons la HSBC pour vous monsieur la moumou. Notre intégrateur web au smic
                va vous préparer un thé matcha.</div>
                <div class="dots-bars-1"></div>';}
            
        
                $ran = (random_int(5,12));
                if($ran === 5){
                    header('Refresh:5;url='.path.'paiementsucces');
                }if($ran === 6) {
                    header('Refresh:6;url='.path.'paiementsucces');
                }if($ran === 7) {
                    header('Refresh:7;url='.path.'paiementsucces');
                }if($ran === 8) {
                    header('Refresh:8;url='.path.'paiementsucces');
                }if($ran === 9) {
                    header('Refresh:9;url='.path.'paiementsucces');
                }if($ran === 10) {
                    header('Refresh:10;url='.path.'paiementsucces');
                }if($ran === 11) {
                    header('Refresh:11;url='.path.'paiementsucces');
                }if($ran === 12) {
                    header('Refresh:12;url='.path.'paiementsucces');
                }
        }
        self::render('paiement', compact('prixTotal','recap'));
    }



    

    public static function succes() {


        self::render('paiementsucces');
    }

}
?>