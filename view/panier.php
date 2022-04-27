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
        <form action="#" method="POST">
        <input type="text" id="articleValue" name="articleValue" value="<?=$value?>">
        <input type="submit" name="delArticleCart" value ="Supprimmer">  

        </form></td>
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

<table class = tablecartquantity>
  <tr>
  <th>Quantitée demandée</th>
  </tr>
  <?php foreach ($_SESSION['panier']['qteProduit'] as $value): ?>
        <tr>
        <td> <?= $value ?></td>
        </tr>
    <?php endforeach; ?>
</table> 


<table class = totaltopay> 

    <tr>
        <th>Total à payer</th>
    </tr>
    <tr>
        <td><?= '10'.'€' ?></td>
    </tr>

</table>  



</div>
