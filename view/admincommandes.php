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

<h2>Modification utilisateur : Changez la valeur du/des champs que vous voulez mettre à jour puis cliquez sur modifier</h2>

<form action="" method="POST">
    <label for="name">N° de commande</label>
    <input type="text" id="idorderdisplay" name="idorderdisplay" placeholder=<?= $selectedOrder[0]['id']; ?>  disabled="disabled">
    <label for="price">ID utilisateur</label>
    <input type="text" id="iduserdisplay" name="iduserdisplay" value=<?= $selectedOrder[0]['id_user']; ?>  disabled="disabled">
    <label for="image">Contenu commande</label>
    <input type="text" id="orderlinedisplay" name="orderlinedisplay"value="<?= $selectedOrder[0]['orderline'] ?>" required>
    <br>
    <label for="adressuser">Adresse utilisateur</label>
    <input type="text" id="adressuser" name="adressuser" value="<?= $selectedUser[0]['adresse'] ?>"   required>
    <br>
    <label for="short">Niveau de droit</label>
    <input type="text" id="rankuser" name="rankuser" value=<?= $selectedUser[0]['id_droit']; ?> required>
    <label for="short">Nom utilisateur</label>
    <input type="text" id="lastnameuser" name="lastnameuser" value=<?= $selectedUser[0]['nom']; ?> required>
    <label for="short">Prenom utilisateur</label>
    <input type="text" id="firstnameuser" name="firstnameuser" value=<?= $selectedUser[0]['prenom']; ?> required>
    <input type="submit" name="modifyuser" value ="Modifier">
</form>
   

    <?php endif; ?>