
<?php $pageask = explode('/', $_GET['p']); ?>
<?php if (!isset($pageask[1])): ?>
    <h2>Liste de tous les utilisateurs existants : </h2>
<table class = tableuser>
  <tr>
    <th>Id Utilisateur</th>
    <th>Email Utilisateur</th>
    <th>Téléphone utilisateur</th>
    <th>Adresse utilisateur</th>
    <th>Niveau de droit</th>
    <th>Nom utilisateur</th>
    <th>Prenom utilisateur</th>

  </tr>
<?php foreach ($userlist as $value): ?>
    <tr>
    <td><a href="<?= path ?>adminuser/<?= $value['id'] ?>"><?=$value['id'] ?></a></td>
    <td><?=$value['email'] ?></td>
    <td><?=$value['telephone'] ?></td>
    <td><?=$value['adresse'] ?></td>
    <td><?=$value['id_droit'] ?></td>
    <td><?=$value['nom'] ?></td>
    <td><?=$value['prenom'] ?></td>
  </tr>
<?php endforeach; ?>  
</table>
<?php endif; ?>

<?php if (isset($pageask[1])): ?>

    <h2>Modification utilisateur : Changez la valeur du/des champs que vous voulez mettre à jour puis cliquez sur modifier</h2>

<form action="" method="POST">
    <label for="name">Id utilisateur</label>
    <input type="text" id="iduser" name="iduser" placeholder=<?= $selectedUser[0]['id']; ?>  disabled="disabled">
    <label for="price">Email utilisateur</label>
    <input type="text" id="emailuser" name="emailuser" value=<?= $selectedUser[0]['email']; ?> required>
    <label for="image">Telephone utilisateur</label>
    <input type="text" id="phoneuser" name="phoneuser"value=<?= $selectedUser[0]['telephone']; ?> required>
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

<a href="<?=path?>adminuser">Annuler la modification</a>

<?php endif; ?>

