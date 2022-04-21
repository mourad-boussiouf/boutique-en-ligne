<?php if (isset($_SESSION['email'])): ?>

<h2>Modification utilisateur : Changez la valeur du/des champs que vous voulez mettre à jour puis cliquez sur modifier</h2>

<form action="" method="POST">
<label for="name">Id utilisateur</label>
<input type="text" id="iduser" name="iduser" placeholder=<?= $_SESSION['id']; ?>  disabled="disabled">
<label for="price">Email utilisateur</label>
<input type="text" id="emailuser" name="emailuser" value=<?= $_SESSION['email']; ?> required>
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
