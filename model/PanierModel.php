<?php

class PanierModel extends Model
{
    public function __construct()
    {
      
    }

 
    public function supprimerElementPanier($libelleProduit){

        if (isset($_SESSION['panier']))
        {

           $tmp=array();
           $tmp['libelleProduit'] = array();
           $tmp['qteProduit'] = array();
           $tmp['prixProduit'] = array();
           for($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++)
           {

              if ($_SESSION['panier']['libelleProduit'][$i] !== $libelleProduit)
              {
                 array_push( $tmp['libelleProduit'],$_SESSION['panier']['libelleProduit'][$i]);
                 array_push( $tmp['qteProduit'],$_SESSION['panier']['qteProduit'][$i]);
                 array_push( $tmp['prixProduit'],$_SESSION['panier']['prixProduit'][$i]);
              }
     
           }

           $_SESSION['panier'] =  $tmp;

           unset($tmp);
        }
        else
        echo "Un problème est survenu veuillez contacter l'administrateur du site.";
     }


     public function modifierQTeArticle($libelleProduit,$qteProduit){
        //Si le panier existe
        if (isset($_SESSION['panier'])){

           //Si la quantité est positive on modifie sinon on supprime l'article
           if ($qteProduit == "max")
           {
              //Recherche du produit dans le panier
              $positionProduit = array_search($libelleProduit,  $_SESSION['panier']['libelleProduit']);
     
              if ($positionProduit !== false)
              {

                 $_SESSION['panier']['qteProduit'][$positionProduit] = $_SESSION['panier']['qteProduit'][$positionProduit] + 1; //incrémente si le bouton + est pressé
              }
           }
              if ($qteProduit == "creve")
           {
                //Recherche du produit dans le panier
                $positionProduit = array_search($libelleProduit,  $_SESSION['panier']['libelleProduit']);
       
                if ($positionProduit !== false)
                {
                   $_SESSION['panier']['qteProduit'][$positionProduit] = $_SESSION['panier']['qteProduit'][$positionProduit] - 1; //decrémente si le bouton - est pressé
                }

            if($_SESSION['panier']['qteProduit'][$positionProduit] <= 0){
                $this->supprimerElementPanier($libelleProduit); //supprimme le produit si jamais la quantité vaut 0
            }
        
        }
    

    }
}

public function MontantGlobal(){
   $total=0;
   for($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++)
   {
      $total += $_SESSION['panier']['qteProduit'][$i] * $_SESSION['panier']['prixProduit'][$i];
   }
   return $total;
}



}
?>