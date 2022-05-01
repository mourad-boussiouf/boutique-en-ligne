<?php
$pageask = explode('/', $_GET['p']);
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= path ?>css/<?php if ($pageask[0]!="") {
        echo $pageask[0];
    } else {
        echo 'page-accueil';
    } ?>.css">
    <link rel="stylesheet" href="<?= path ?>css/header.css">
    <link rel="stylesheet" href="<?= path ?>css/footer.css">
    
    <script src="scripts.js"></script>
    <script src="<?=path?>ASSET/js/<?php if (isset($pageask[0])) {
        echo $pageask[0];
    } else {
        echo 'page-accueil';
    } ?>.js"></script>
    <title></title>
</head>
<?php if(isset($_SESSION['id'])):?>
            <?php if($_SESSION['droit']==2):?>
<body>

<!-- header -->
<header> 
    <div class="nav">
    
      <ul>
        <li class="home"><a href="<?= path ?>">Retour à l'accueil</a></li>
        <li class="deco"><a href="<?= path ?>deconnexion">Déconnexion</a></li>
        <li class="admin"><a href="<?=path?>admin">Statistiques</a></li>
       </ul>
      </div>

    <div class ="searchbar">
        <input type="search" placeholder="SEARCH">
    </div>

<div class= "admin">
    
        <li class="admin"><a href="<?=path?>adminarticles">Gestion ARTICLES & CATEGORIES</a></li>
        <li class="adminuser"><a href="<?=path?>adminuser">Gestion UTILISATEURS</a></li>
        <li class="adminorder"><a href="<?=path?>admincommandes">Gestion COMMANDES</a></li>
    
</div>
</header>
   
<!-- DISPLAY DU VIEW -->

<main>
        <?= $content ?>
    
</main>


    <footer>
       

    </footer>

</body>
<?php endif;?>
<?php endif;?>
</html>