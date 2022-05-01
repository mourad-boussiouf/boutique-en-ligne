
<?php
for ($i=0; $i < count($ordersOfUser)  ; $i++) {       
    array_shift($ordersOfUser[$i]); 
    array_shift($ordersOfUser[$i]);           
        }
?>

<div class = "container">
  <h2>Vos dernières commandes :</h2>

<div class = orderlist>

<ul class = "order">
<?php if (isset($_POST['fold1'])): unset($_POST['unfold1']) ?>
<form action = "#" method = "POST">
<input type="submit" value="Votre commande du <?=$ordersOfUser[0]['date']?>  ▬ " name="unfold1" id="unfold1">
</form>
<?php endif; ?>
<?php if (isset($_POST['unfold1'])): unset($_POST['fold1']) ?>
<form action = "" method = "POST">
<input type="submit" value="Votre commande du <?=$ordersOfUser[0]['date']?> ▼ " name="fold1" id="unfold12">
</form>
  <li id='title'>▲ Contenu : ▲</li>
  <li><?=$ordersOfUser[0]['orderline']?></li>
  <li id='title'>Coordonnées de livraison :</li>
  <li><?=$ordersOfUser[0]['delivery_adress']?></li>
  <li id='title' >Montant total :</li>
  <li id = 'price'><?=$ordersOfUser[0]['totalprice']?> €TTC</li>
  <li id='title'><b>Statut de la commande :</b></li>
  <li id = 'statusorder'><?=$ordersOfUser[0]['order_status']?></li>
</ul>
<?php endif; ?>
</div>

        
    



</div>