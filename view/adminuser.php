
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
<?php  $selectedUser[0]['email']; ?>
<form action="" method="POST">
    <label for="name">Id utilisateur</label>
    <input type="text" id="iduser" name="iduser" value=<?= $selectedUser[0]['id']; ?> required>
    <label for="price">Email utilisateur</label>
    <input type="text" id="emailuser" name="emailuser" value=<?= $selectedUser[0]['email']; ?> required>
    <label for="image">Telephone utilisateur</label>
    <input type="text" id="phoneuser" name="phoneuser"value=<?= $selectedUser[0]['telephone']; ?> required>
    <label for="image2">Image2</label>
    <br>
    <input type="text" id="image2" name="image2" placeholder="Image 2" required>
    <label for="short">Description du produit</label>
    <input type="text" id="descr" name="descr" placeholder="Description" required>
    <label for="short">Id de la catégorie choisie (cf list)</label>
    <input type="text" id="idcategorie" name="idcategorie" placeholder="id" required>
    <label for="short">Id ed la sous catégorie choisie</label>
    <input type="text" id="idsouscat" name="idsouscat" placeholder="id" required>
    <input type="submit" name="ajouter" value ="Modifier">
</form>

<a href="<?=path?>adminuser">Annuler la modification</a>

<?php endif; ?>

