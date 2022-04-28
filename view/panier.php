<?php 
var_dump($_SESSION['panier']);
?>
<div class = cartresume>

<table class = tablecartname>
  <tr>
  <th>Nom de l'article</th>
  </tr>
    <?php foreach ($_SESSION['panier']['libelleProduit'] as $value): ?>
        <tr>
        <td>
        <?=$value ?>
        <form action="" method="POST">
        <input type="hidden" id="articleValue" name="articleValue" value="<?=$value?>">
        <input id="articleHidden" name="articleHidden" type="hidden" value="<?=$value?>">
        <input id="add" name="add" type="hidden" value="max">
        <input id="decrease" name="decrease" type="hidden" value="creve">
        <input type="submit" name="delArticleCart" value ="DEL">

        <input type="submit" name="AddSubmit" value ="+">
        <input type="submit" name="RemSubmit" value ="-">
        

       
        </form></td>
        </tr>
    <?php endforeach; ?>
</table> 

<table class = tablecartquantity>
  <tr>
  <th>Quantité</th>
  </tr>
  <?php foreach ($_SESSION['panier']['qteProduit'] as $value): ?>
        <tr>
        <td>

          <?= $value ?>

        </td>
        </tr>
    <?php endforeach; ?>
</table> 

<table class = tablecartprice>
  <tr>
  <th>Prix de l'article</th>
  </tr>
  <?php foreach ($_SESSION['panier']['prixProduit'] as $value): ?>
        <tr>
        <td><?=$value ?></td>
        </tr>
    <?php endforeach; ?>
</table> 

<table class = totaltopay> 

    <tr>
        <th>Total à payer</th>
    </tr>
    <tr>
        <td><?= $prixTotal.'€' ?></td>
    </tr>

</table>  



</div>
