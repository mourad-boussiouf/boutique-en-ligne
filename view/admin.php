




    <?php
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=path?>css/admin.css">
    <title>Administrator managing</title>
</head>
<body>
<header>
<a href="index">Home</a>
</header>

<h1>Bienvenue sur La page Administration</h1>

<div class="box1">
    <p class="registered">Nombre d'utilisateurs inscrit sur le site : <b> <?=$utilisateur?></b> </p>
    <p class="soldproducts"> Nombre de Produit vendu depuis la création du site :<b> <?=$produit?></b></p>

    <p> Voici les produits déja sur votre site : 
        <?php foreach ($prodiot as $value):?>
        <li><?=$value['name']?></li>
        <?php endforeach;?>
    </ul>


<main>
    <div class="box">
        <div class="navside">
            <ul>
                <li><a href="<?=path?>admin/stock">Gestion des Stock</a></li>
                <li><a href="<?=path?>admin/user">Gestion des Utilisateurs</a></li>
                <li><a href="<?=path?>admin/products.php">Ajout d'article</a></li>
                <li><a href="<?=path?>admin/vente">Visualisation des ventes</a></li>
                <li><a href="<?=path?>admin/categorie">Gestion des catégories</a></li>
                <li><a href="<?=path?>accueil">Retour à l'accueil</a></li>
                <li><a href="<?=path?>deco">Deconnexion</a></li>
            </ul>

        </div>
        <div class="content">
            <?= $content ?>
        </div>
    </div>
</main>
<footer>

</footer>
</body>
</html>

</div>