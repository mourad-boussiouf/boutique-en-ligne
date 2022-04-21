<?php if (isset($_SESSION['email'])): ?>

<h2>Modification utilisateur : Changez la valeur du/des champs que vous voulez mettre à jour puis cliquez sur modifier</h2>

<form action="" method="POST">
<label for="name">Mon idenfitifant</label>
<input type="text" id="iduser" name="iduser" placeholder=<?= $_SESSION['id'] ?>  disabled="disabled">
<label for="price">Modifier mon adresse e-mail</label>
<input type="text" id="emailuser" name="emailuser" value=<?= $_SESSION['email'] ?> required>
<label for="image">Modifier mon numéro de téléphone mobile</label>
<input type="text" id="phoneuser" name="phoneuser"value=<?= $_SESSION['telephone'] ?> required>
<br>
<label for="adressuser">Modifier mon adresse de livraison</label>
<input type="text" id="adressuser" name="adressuser" value="<?= $_SESSION['adresse'] ?>"   required>
<br>
<label for="short">Modifier mon nom</label>
<input type="text" id="lastnameuser" name="lastnameuser" value=<?= $_SESSION['nom'] ?> required>
<label for="short">Modifier mon prénom</label>
<input type="text" id="firstnameuser" name="firstnameuser" value=<?= $_SESSION['nom'] ?> required>
<input type="submit" name="modifyuser" value ="Modifier">
</form>

<a href="<?=path?>adminuser">Annuler la modification</a>

<?php endif; ?>
