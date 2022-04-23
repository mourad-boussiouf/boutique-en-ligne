
<?php $pageask = explode('/', $_GET['p']); 
?>
    <?php foreach ($categorie as $value): ?> <!-- Recherche les catégories en bdd -->
                    <option value="<?= $value['name']; ?>"><?= $value['name']; ?></option> <!-- Affiche les catégories -->
    <?php endforeach; ?>


        <!-- Contient la liste d'articles etcatégories + navigation et tri dans les articles et catégories -->
<?php if (empty($pageask[1])): ?>
<div class = productscontainer>


    <div class = container>

            <h1 class="titre">Tous les produits</h1>
            <div class="boxlisteproduit">
                <?php foreach ($prod as $value): ?> <!-- Recherche les produits en bdd -->
                    
                        <div class="boxeachproduct">
                            <a href="<?= path ?>articles/<?= $value['id'] ?>"> <h2><?= $value['name']; ?></h2>
                             <img src="<?= path ?>assets/images/<?= $value['image'] ?>" alt="">
                            </a>
                            <h3><?= $value['price']; ?> €</h3>
                            <p class="descriptionproduct"><?= $value['descr'] ?></p>
                            <form action="#" method="post" name="ajouter">
                            <input type="hidden" name="hidden" value="<?= $value['id'] ?>">
                            <input type="submit" name="achat" value="Acheter">
                        </form>
                        </div>
    
                <?php endforeach; ?>
    </div>
            </div>
    
</div>
<?php endif; ?>

        <!-- Page d'article individuelle -->
<?php if (isset($pageask[1]) && is_numeric($pageask[1])): ?>
<p>caca</p>



<a href="<?=path?>articles">Retours page articles</a>
<?php endif; ?>