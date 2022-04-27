<?php

class PanierModel extends Model
{
    public function __construct()
    {
      
    }



    
    public function supprimerArticle($libelleProduit){
        //Si le panier existe
        if (isset($_SESSION['panier']))
        {
           //Nous allons passer par un panier temporaire
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
           //On remplace le panier en session par notre panier temporaire à jour
           $_SESSION['panier'] =  $tmp;
           //On efface notre panier temporaire
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
                 $_SESSION['panier']['qteProduit'][$positionProduit] + 1 ;
              }
           }
            if ($qteProduit == "creve")
              {
                 //Recherche du produit dans le panier
                 $positionProduit = array_search($libelleProduit,  $_SESSION['panier']['libelleProduit']);
        
                 if ($positionProduit !== false && $_SESSION['panier']['qteProduit'][$positionProduit] != 0)
                 {
                    $_SESSION['panier']['qteProduit'][$positionProduit] - 1 ;
                 }
           }
           else{
           unset($_SESSION['panier']);
           unset($_SESSION['panier']['qteProduit']);
           unset($_SESSION['panier']['libelleProduit']);
           unset($_SESSION['panier']['prixProduit']);
           unset($_SESSION['panier']['verrou']);
            }
        
        }
    }

}




    
        

   


?>