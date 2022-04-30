<?php
class Paiement extends Controller 
{
    public static function index()
    {
        $model = new PanierModel();
        $prixTotal = $model->MontantGlobal();
        
        

        self::render('paiement', compact('prixTotal'));
    }

}
?>