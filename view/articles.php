
<?php $pageask = explode('/', $_GET['p']); 
?>

<?php if (empty($pageask[1])): ?>
<div class = productscontainer>


    <div class = container>
        <div class = filters>
            <h1 class="titre">Tous les produits</h1>
        <!-- Contient la liste d'articles etcatégories + navigation et tri dans les articles et catégories -->
        
        
        <form action="" method="POST">
        <div class = selectsfilter>
                <span>Type :</span>
                <span><select name="id_cat">
                <?php foreach ($categorie as $key=>$value ): ?>
                <option value="<?=$value['id']?>"><?=$value['name']?></option>
                <?php endforeach;?>
                </select></span>
                <span>Collection : </span>
                <span><select name="id_scat">
                <?php foreach ($scategorie as $key=>$value ): ?>
                <option value="<?=$value['id']?>"><?=$value['name']?></option>
                <?php endforeach;?>
                </select></span>
        
                <span id = filterbutton><input type="submit" name="scat" value="Filtrer"></span>
        </div>
        </form>        
        </div>

            <div class="boxlisteproduit">
                <?php foreach ($prod as $value): ?> <!-- Recherche les produits en bdd -->
                    
                        <div class="boxeachproduct">
                            <a href="<?= path ?>articles/<?= $value['id'] ?>"> <h2><?= $value['name']; ?></h2>
                             <img src="<?= path ?>assets/images/<?= $value['image'] ?>" alt="">
                            </a>
                            <h3><?= $value['price']; ?> €</h3>
                            <p class="descriptionproduct"><?= $value['descr'] ?></p>
                            <form action="<?= path ?>articles/<?= $value['id'] ?>" method="post" name="ajouter">
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
<div class = productindi>

<div class = productinfo>       
        <h1 id="title"> <?= $produit[0]['name'] ?> </h1>
        <p id = description> <i>Description :</i> <?= $produit[0]['descr'] ?> </p>
        <p id = price> <?= $produit[0]['price'] ?> € </p>
        <form class = addbasket>
        <span id = selectbloc ><select name="sizechosen" id = "selectidsize">
                
                <option>XS</option>
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
                <option>XXL</option>
                <option>XXXL</option>
                <option>Le mcdo des caillols</option>
            
                </select></span>
        <input type="submit" name="addbasket" value ="Ajouter au panier">
        </form>

</div>

<div class = productpictures>
        <div id="mygallery">                          

        <ul id="fullimage">

        <li id="desert"> <img src="<?= path ?>assets/images/<?= $produit[0]['image'] ?>">
        
                <li id="koala"> <img src="<?= path ?>assets/images/<?= $produit[0]['image2'] ?>">        
        </ul>
        <ul id="thumbimage">
        <li>
                <a href="#desert"> <img src="<?= path ?>assets/images/<?= $produit[0]['image'] ?>"> </a>
        </li>
        <li>
                <a href="#koala"> <img src="<?= path ?>assets/images/<?= $produit[0]['image2'] ?>"> </a>
        </li>
        </ul>
        </div>
</div>

</div>
                    

<a href="<?=path?>articles">Retours page articles</a>

<?php endif; ?>