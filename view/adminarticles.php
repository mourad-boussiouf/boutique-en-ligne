<?php
var_dump($_POST['categorie']);
?>

<h2>CATEGORIES ET SOUS CATEGORIES</h2>
<p>Catégories et sous catégorie existantes : </p>
<?php foreach ($categorie as $value): ?> <!-- Recherche les catégories en bdd -->
                    <option value="<?=$value['id'], $value['name']; ?>"><?=$value['id'], $value['name']; ?></option> <!-- Affiche les catégories -->
<?php endforeach; ?>

<h2>ARTICLES</h2>
<p>Ajouter un nouvel article</p>
<form action="" method="POST">
    <label for="nom">Nom Produit</label>
    <input type="text" id="nom" name="nom" placeholder="Nom du produit" required>
    <label for="price">Prix du Produit</label>
    <input type="text" id="price" name="price" placeholder="Prix du produit" required>
    <label for="image">Image1</label>
    <input type="text" id="image" name="image" placeholder="Image" required>
    <label for="image2">Image2</label>
    <input type="text" id="image2" name="image2" placeholder="Image 2" required>
    <label for="short">Description du produit</label>
    <input type="text" id="descr" name="descr" placeholder="Description" required>
    <select name="categorie">
        <?php foreach ($categorie as $key => $value): ?>
            <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
        <?php endforeach; ?>
    </select>
    <select name="souscategorie">
        <?php foreach ($souscategorie as $key => $value): ?>
            <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" name="ajouter" placeholder="Ajouter">
</form>


