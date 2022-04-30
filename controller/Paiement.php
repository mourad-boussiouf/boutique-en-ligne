<?php
class Paiement extends Controller 
{
    public static function index()
    {
        $model = new PanierModel();
        $prixTotal = $model->MontantGlobal();
        
        $recap = explode("•", $_SESSION['orderline']);  
        array_shift($recap);

        self::render('paiement', compact('prixTotal','recap'));
    }

}
?>