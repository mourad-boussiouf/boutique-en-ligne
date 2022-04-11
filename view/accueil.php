<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<div id="menu">
                
    <p>Menu</p>
                       
    <a href="<?= path ?>">Accueil</a>

    <?php if (!isset($_SESSION['id'])): ?>
    <a href="<?= path ?>connexion">Connexion</a>
    <a href="<?= path ?>inscription">Inscription</a>
    <?php else:?>

    <a href="<?= path ?>profil">Profil</a>

    <?php if($_SESSION['droit']==2):?>
    <a href="<?=path?>admin">Page admin</a>
    <?php endif;?>
    <?php endif;?>

    <?php if(isset($_SESSION['id'])):?>
    <a href="<?=path?>deco">deconnexion</a>
    <?php endif;?>


</div>

<p> <img src=<?php echo "lol"; ?> alt="Italian Trulli">  </p>
</body>


</html>
