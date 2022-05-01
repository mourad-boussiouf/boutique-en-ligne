
<?php
for ($i=0; $i < count($ordersOfUser)  ; $i++) {       
    array_shift($ordersOfUser[$i]); 
    array_shift($ordersOfUser[$i]);           
        }


?>


    <div class = orderlist>
        
    <h2>Vos dernières commandes :</h2>
        <ul class = "order">
        <li id ='titledate'>Votre commande du <?=$ordersOfUser[0]['date']?> </li>
        <li id='title'> Contenu : </li>
        <li><?=$ordersOfUser[0]['orderline']?></li>
        <li id='title'>Coordonnées de livraison :</li>
        <li><?=$ordersOfUser[0]['delivery_adress']?></li>
        <li id='title' >Montant total :</li>
        <li id = 'price'><?=$ordersOfUser[0]['totalprice']?> €TTC</li>
        <li id='title'><b>Statut de la commande :</b></li>
        <li id = 'statusorder'><?=$ordersOfUser[0]['order_status']?></li>
        </ul>

        <ul class = "order2">
        <li id ='titledate'>Votre commande du <?=$ordersOfUser[1]['date']?> </li>
        <li id='title'> Contenu : </li>
        <li><?=$ordersOfUser[1]['orderline']?></li>
        <li id='title'>Coordonnées de livraison :</li>
        <li><?=$ordersOfUser[1]['delivery_adress']?></li>
        <li id='title' >Montant total :</li>
        <li id = 'price'><?=$ordersOfUser[1]['totalprice']?> €TTC</li>
        <li id='title'><b>Statut de la commande :</b></li>
        <li id = 'statusorder'><?=$ordersOfUser[1]['order_status']?></li>
        </ul>

        
        <ul class = "order3">
        <li id ='titledate'>Votre commande du <?=$ordersOfUser[2]['date']?> </li>
        <li id='title'> Contenu : </li>
        <li><?=$ordersOfUser[2]['orderline']?></li>
        <li id='title'>Coordonnées de livraison :</li>
        <li><?=$ordersOfUser[2]['delivery_adress']?></li>
        <li id='title' >Montant total :</li>
        <li id = 'price'><?=$ordersOfUser[2]['totalprice']?> €TTC</li>
        <li id='title'><b>Statut de la commande :</b></li>
        <li id = 'statusorder'><?=$ordersOfUser[2]['order_status']?></li>
        </ul>
       
       

    </div>

        
    



