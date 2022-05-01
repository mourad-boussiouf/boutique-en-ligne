<?php $pageask = explode('/', $_GET['p']); ?>

<h1>Gestion des commandes :</h1>
<?php if (!isset($pageask[1]) || !is_numeric($pageask[1])): ?>
<form action="" method="POST">
    <label for="idproduct">Trouver les commandes d'un utilisateur par son id d'utilisateur.</label>
    <input type="text" id="iduserorder" name="iduserorder" placeholder="ID de l'utilisateur" required>
    <input type="submit" name="searchorder" value = "Chercher les commandes">
</form>

<form action="" method="POST">
    <label for="idproduct">Trouver directement une commande par son id de commande</label>
    <input type="text" id="idorder" name="idorder" placeholder="ID de l'utilisateur" required>
    <input type="submit" name="searchorder" value = "Chercher la commande">
</form>


<?php if (isset($_POST['iduserorder'])): ?>
    <h2>Liste de toutes les commandes de cet utilisateur : </h2>
<table class = tableuser>
  <tr>
    <th>Id_order</th>
    <th>id_user</th>
    <th>orderline</th>
    <th>totalprice</th>
    <th>date</th>
    <th>delivery_adress</th>
    <th>order_status</th>

  </tr>
<?php foreach ($ordersOfUser as $value): ?> 

    <tr>
    <td><a href="<?= path ?>admincommandes/<?= $value['id'] ?>"><?=$value['id'] ?></a></td>
    <td><?=$value['id_user'] ?></td>
    <td><?=$value['orderline'] ?></td>
    <td><?=$value['totalprice'] ?></td>
    <td><?=$value['date'] ?></td>
    <td><?=$value['delivery_adress'] ?></td>
    <td><?=$value['order_status'] ?></td>
    </tr>
<?php endforeach; ?>  
</table>
    <?php endif; ?>
<?php endif; ?>

<?php if (isset($pageask[1]) && is_numeric($pageask[1])): ?>


<h2>Modification utilisateur : Changez la valeur du/des champs que vous voulez mettre à jour puis cliquez sur modifier</h2>

<form id ="ordermodifi" action="" method="POST">
    <label for="idorderdisplay">N° de commande</label>
    <input type="text" id="idorderdisplay" name="idorderdisplay" placeholder=<?= $selectedOrder[0]['id']; ?>  disabled="disabled">
    <label for="iduserdisplay">ID utilisateur</label>
    <input type="text" id="iduserdisplay" name="iduserdisplay" value=<?= $selectedOrder[0]['id_user']; ?>  disabled="disabled">
    <label for="orderlinedisplay">Contenu de la commande :</label>
    <input type="text" id="orderlinedisplay" name="orderlinedisplay"value="<?= $selectedOrder[0]['orderline'] ?>" disabled="disabled">
    <br>
    <label for="pricedisplay">Montant total :</label>
    <input type="text" id="pricedisplay" name="pricedisplay" value="<?= $selectedOrder[0]['totalprice'] ;?>€"   disabled="disabled">
    <br>
    <label for="datedisplay">Date creation commande</label>
    <input type="text" id="datedisplay" name="datedisplay" value=<?= $selectedOrder[0]['date']; ?> disabled="disabled">
    <label for="deliverydisplay">Adresse de livraison</label>
    <input type="text" id="deliverydisplay" name="deliverydisplay" value="<?= $selectedOrder[0]['delivery_adress'] ?>"   required>
    <label for="statusdisplay">Statut de la commande</label>
    <input type="text" id="statusdisplay" name="statusdisplay" value=<?=$selectedOrder[0]['order_status']; ?> required>
    <input type="submit" name="modifyorder" value ="Modifier">
</form>
   

    <?php endif; ?>