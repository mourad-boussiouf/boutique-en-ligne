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
<body>
<!-- header -->
<header> 
    <div class="nav">
    
      <ul>
        <li class="home"><a href="<?= path ?>">Accueil</a></li>
        <li class="news"><a href="#">Nouveautés</a></li>
        <li class="tutorials"><a href="<?= path ?>articles">Vêtements</a></li>
        <li class="contact"><a href="#">À propos</a></li>
        <?php if (!isset($_SESSION['id'])): ?>
        <li class="connect"><a href="<?= path ?>connexion">Connexion</a></li>
        <li class="register"><a href="<?= path ?>inscription">Inscription</a></li>
        <li class="register"><a href="<?= path ?>authentification">co/ins</a></li>
        <?php else : ?>
        <li class="deco"><a href="<?= path ?>deconnexion">Déconnexion</a></li>
        <?php endif; ?>
        <?php if(isset($_SESSION['id'])):?>
            <?php if($_SESSION['droit']==2):?>
        <li class="admin"><a href="<?=path?>admin">Page admin</a></li>
            <?php endif;?>
        <?php endif;?>
       </ul>
      </div>
    <div class ="searchbar">
        <input type="search" placeholder="SEARCH">
    </div>
</header>
   
<!-- DISPLAY DU VIEW -->

<main>
        <?= $content ?>
    
</main>
<!-- footer -->

    <footer>
        <div id="footer">
            <div class="contact">
                <h1>Nous contacter</h1>
                <a href="<?=path?>contact">
                
                <a href="https://github.com/mourad-boussiouf/boutique-en-ligne"><i
                        class="fa-brands fa-github"></i></a><br>
                <a href="https://www.instagram.com/legouffre/">
                <a href="https://www.facebook.com/legouffre">
                <a href="https://twitter.com/LeGouffre">
            </div>

            <div class="about">
                <a href="">Decouvrez les gouffrés</a>
                <a href="">Mentions légales</a>
            </div>
        </div>
    </footer>

</body>

</html>