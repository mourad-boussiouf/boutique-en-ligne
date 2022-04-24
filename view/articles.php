
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


 <?php var_dump($produit);

echo $produit[0]["descr"];
?>
                            
 <h1 id="title"> Image Gallery </h1>
  <div id="mygallery">
    <ul id="fullimage">

      <li id="desert"> <img src="<?= path ?>assets/images/<?= $produit[0]['image'] ?>">
    
        <li id="koala"> <img src="https://c2.staticflickr.com/6/5514/11051555136_7c0e9560f5_b.jpg">
          <p>
            <div class="tooltip"><span> Koala </span></div>
          </p>
          <li id="lighthouse"> <img src="http://vignette2.wikia.nocookie.net/survivorsdogs/images/4/4f/Lighthouse.jpg/revision/latest?cb=20140730131304">
            <div class="tooltip">
              <p> <span> Lighthouse </span></div>
            </p>
            <li id="penguins"> <img src="http://static.ddmcdn.com/gif/penguin-slideshow-141121-78754162.jpg">
              <p>
                <div class="tooltip"> <span> Penguins </span></div>
              </p>
    </ul>
    <ul id="thumbimage">
      <li>
        <a href="#desert"> <img src="<?= path ?>assets/images/<?= $produit[0]['image'] ?>"> </a>
      </li>
      <li>
        <a href="#koala"> <img src="https://c2.staticflickr.com/6/5514/11051555136_7c0e9560f5_b.jpg"> </a>
      </li>
      <li>
        <a href="#lighthouse"> <img src="http://vignette2.wikia.nocookie.net/survivorsdogs/images/4/4f/Lighthouse.jpg/revision/latest?cb=20140730131304"> </a>
      </li>
      <li>
        <a href="#penguins"> <img src="http://static.ddmcdn.com/gif/penguin-slideshow-141121-78754162.jpg"> </a>
      </li>
    </ul>
    <br style="clear:both;"/>
  </div>
                    

<a href="<?=path?>articles">Retours page articles</a>

<?php endif; ?>