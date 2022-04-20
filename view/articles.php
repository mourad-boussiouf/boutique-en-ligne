
<?php $pageask = explode('/', $_GET['p']); 
var_dump($pageask[0]);
var_dump($pageask[1]);
var_dump($pageask[2]);?>


        <!-- Contient la liste d'articles etcatégories + navigation et tri dans les articles et catégories -->
<?php if (empty($pageask[1])): ?>
<div class = browseArticles>
<?php foreach ($categorie as $value): ?> <!-- Recherche les catégories en bdd -->
                    <option value="<?= $value['name']; ?>"><?= $value['name']; ?></option> <!-- Affiche les catégories -->
<?php endforeach; ?>



        <div class="boxallproducts">
            <h1 class="titre">Découvrez notre collection</h1>
            <div class="boxlisteproduit">
                <?php foreach ($prod as $value): ?> <!-- Recherche les produits en bdd -->
                    <div class="boxproducts1">
                        <div class="boxeachproduct">
                            <a href="<?= path ?>articles/<?= $value['id'] ?>"> <h2><?= $value['name']; ?></h2>
                             <img src="<?= path ?>assets/images/<?= $value['image'] ?>" alt="">
                            </a>
                            <h3><?= $value['price']; ?> €</h3>
                            <p class="descriptionproduct"><?= $value['descr'] ?></p>

                        </div>
                        <form action="#" method="post" name="ajouter">
                            <input type="hidden" name="hidden" value="<?= $value['id'] ?>">
                            <input type="submit" name="achat" value="Acheter">
                        </form>
                <?php endforeach; ?>
            </div>
        </div>

</div>
<?php endif; ?>

        <!-- Page d'article individuelle -->
<?php if (is_numeric($pageask[1])): ?>
<p>caca</p>
<?php endif; ?>