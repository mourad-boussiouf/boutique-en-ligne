<?php var_dump($ordersOfUser) ?>


<?php
for ($i=0; $i < count($ordersOfUser)  ; $i++) {       
    array_shift($ordersOfUser[$i]); 
    array_shift($ordersOfUser[$i]);           
        }
?>

<?php var_dump($ordersOfUser) ?>

<table class = tablecartname>
  <tr>
  <th>Dernieres commandes :</th>
  </tr>

    <?php foreach ($ordersOfUser[0] as $value): ?>
        <tr>
        <td>
        <?=$value?>
        </td>
        </tr>
    <?php endforeach; ?>

    <?php foreach ($ordersOfUser[1] as $value): ?>
        <tr>
        <td>
        <?=$value?>
        </td>
        </tr>
    <?php endforeach; ?>


</table> 