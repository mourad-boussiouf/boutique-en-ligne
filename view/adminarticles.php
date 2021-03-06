
<h2>CATEGORIES ET SOUS CATEGORIES</h2>
<p>Catégories et sous catégorie existantes : </p>

<table class = tablecat>
  <tr>
    <th>Id catégorie</th>
    <th>Nom catégorie</th>
  </tr>
<?php foreach ($categorieAll as $value): ?> <!-- Recherche les catégories en bdd -->

  <tr>
    <td><?=$value['id'] ?></td>
    <td><?=$value['name'] ?></td>
  </tr>
          
<?php endforeach; ?>
</table>
<table class = tablesouscat>
  <tr>
    <th>Id Sous-cat</th>
    <th>Nom Sous-cat</th>
  </tr>
<?php foreach ($souscategorieAll as $value): ?> <!-- Recherche les catégories en bdd -->

    <tr>
    <td><?=$value['id'] ?></td>
    <td><?=$value['name'] ?></td>
  </tr>

<?php endforeach; ?>
</table>
<div class = addcatform>
<form action="" method="POST">
    <label for="newcatname">Créer une catégorie</label>
    <input type="text" id="newcatname" name="newcatname" placeholder="Nom voulu pour la catégorie" required>
    <input type="submit" name="createcat" value = "Créer">
</form>
<div class = space></div>
<form action="" method="POST">
    <label for="newsubcatname">Créer une sous-catégorie</label>
    <input type="text" id="newsubcatname" name="newsubcatname" placeholder="Nom voulu pour la sous-catégorie" required>
    <input type="submit" name="createsubcat" value = "Créer">
</form>
<div class = space></div>
</div>



<h2>ARTICLES</h2>
<p>Ajouter un nouvel article</p>
<form action="" method="POST">
    <label for="name">Nom Produit</label>
    <input type="text" id="name" name="name" placeholder="Nom du produit" required>
    <label for="price">Prix du Produit</label>
    <input type="text" id="price" name="price" placeholder="Prix du produit" required>
    <label for="image">Image1</label>
    <input type="text" id="image" name="image" placeholder="Image" required>
    <label for="image2">Image2</label>
    <br>
    <input type="text" id="image2" name="image2" placeholder="Image 2" required>
    <label for="short">Description du produit</label>
    <input type="text" id="descr" name="descr" placeholder="Description" required>
    <label for="short">Id de la catégorie choisie (cf list)</label>
    <input type="text" id="idcategorie" name="idcategorie" placeholder="id" required>
    <label for="short">Id ed la sous catégorie choisie</label>
    <input type="text" id="idsouscat" name="idsouscat" placeholder="id" required>
    <input type="submit" name="ajouter" placeholder="Ajouter">
</form>

<p>Liste des articles : </p>

<table class = tablesouscat>
  <tr>
    <th>Id Produit</th>
    <th>Nom produit</th>
    <th>Prix produit</th>
  </tr>
<?php foreach ($prod as $value): ?>
    <tr>
    <td><?=$value['id'] ?></td>
    <td><?=$value['name'] ?></td>
    <td><?=$value['price'] ?></td>
  </tr>
<?php endforeach; ?>  
</table>

<form action="" method="POST">
    <label for="idproduct">ID Produit</label>
    <input type="text" id="idproduct" name="idproduct" placeholder="ID du produit" required>
    <input type="submit" name="delete" value = "Effacer">
</form>


