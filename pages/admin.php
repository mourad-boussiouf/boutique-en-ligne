<h1>Bienvenue sur La page Administration</h1>

<div class="boite1">
    <p class="inscrit">Nombre d'utilisateurs inscrit sur le site : <b> <?=$utilisateur?></b> </p>
    <p class="produitvendu"> Nombre de Produit vendu depuis la création du site :<b> <?=$produit?></b></p>

    <p> Voici les produits déja sur votre site : 
        <?php foreach ($prodiot as $value):?>
        <li><?=$value['name']?></li>
        <?php endforeach;?>
    </ul>
    <?php endif;?>

</div>