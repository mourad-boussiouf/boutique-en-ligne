<?php if (isset($_SESSION['email'])): ?>

<h2>Modification utilisateur : Changez la valeur du/des champs que vous voulez mettre à jour puis cliquez sur modifier</h2>

<form action="" method="POST">
<label for="name">Id utilisateur</label>
<input type="text" id="iduser" name="iduser" placeholder=<?= $_SESSION['id'] ?>  disabled="disabled">
<label for="price">Email utilisateur</label>
<input type="text" id="emailuser" name="emailuser" value=<?= $_SESSION['email'] ?> required>
<label for="image">Telephone utilisateur</label>
<input type="text" id="phoneuser" name="phoneuser"value=<?= $_SESSION['telephone'] ?> required>
<br>
<label for="adressuser">Adresse utilisateur</label>
<input type="text" id="adressuser" name="adressuser" value="<?= $_SESSION['adresse'] ?>"   required>
<br>
<label for="short">Niveau de droit</label>
<input type="text" id="rankuser" name="rankuser" value=<?= $_SESSION['droit'] ?> required>
<label for="short">Nom utilisateur</label>
<input type="text" id="lastnameuser" name="lastnameuser" value=<?= $_SESSION['nom'] ?> required>
<label for="short">Prenom utilisateur</label>
<input type="text" id="firstnameuser" name="firstnameuser" value=<?= $_SESSION['nom'] ?> required>
<input type="submit" name="modifyuser" value ="Modifier">
</form>

<a href="<?=path?>adminuser">Annuler la modification</a>

<?php endif; ?>
