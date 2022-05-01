<?php $pageask = explode('/', $_GET['p']); ?>

<h1>Gestion des commandes :</h1>
<?php if (!isset($pageask[1]) || !is_numeric($pageask[1])): ?>
<form action="" method="POST">
    <label for="idproduct">Trouver les commandes d'un utilisateur par son ID_user.</label>
    <input type="text" id="iduserorder" name="iduserorder" placeholder="ID de l'utilisateur" required>
    <input type="submit" name="searchorder" value = "Chercher user">
</form>

<form action="" method="POST">
    <label for="idproduct">Trouver directement une commande par son id de commande</label>
    <input type="text" id="idorder" name="idorder" placeholder="ID de l'utilisateur" required>
    <input type="submit" name="searchorder" value = "Chercher commande">
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


<?php var_dump($selectedOrder); ?>
   

    <?php endif; ?>