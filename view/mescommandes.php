<?php var_dump($ordersOfUser) ?>


<?php
for ($i=0; $i < count($ordersOfUser)  ; $i++) {       
    array_shift($ordersOfUser[$i]); 
    array_shift($ordersOfUser[$i]);           
        }
?>

<?php var_dump($ordersOfUser) ?>

  <h2>Vos dernières commandes :</h2>
  
<table class = tablecartname>


  <tr> Votre commande du <?=$ordersOfUser[0]['date']?>  </tr>
    
        
        <tr> Contenu de la commande : </tr>
        <td><?=$ordersOfUser[0]['orderline']?></td>

        <tr> Montant totale de la commande :</tr>
        <td><?=$ordersOfUser[0]['totalprice']?></td>

        <tr> Coordonnées de la commande :</tr>
        </td><?=$ordersOfUser[0]['delivery_adress']?></td>

        <td> Statut de la commande (mis à jour) :
        <?=$ordersOfUser[0]['order_status']?>
        </td>
        
    




</table> 