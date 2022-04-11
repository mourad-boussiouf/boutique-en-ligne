<?php
$pageask = explode('/', $_GET['p']);
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= path ?>ASSET/css/<?php if ($pageask[0]!="") {
        echo $pageask[0];
    } else {
        echo 'page-accueil';
    } ?>.css">
    <link rel="stylesheet" href="<?= path ?>ASSET/css/header.css">
    <link rel="stylesheet" href="<?= path ?>ASSET/css/footer.css">
    
    <script src="scripts.js"></script>
    <script src="<?=path?>ASSET/js/<?php if (isset($pageask[0])) {
        echo $pageask[0];
    } else {
        echo 'page-accueil';
    } ?>.js"></script>
    <title></title>
</head>

<body>
    <!-- Header -->
    <header class="main-head"> 
        <nav>
            <ul>
                <li><a href="<?= path ?>">Accueil</a></li>
                <li><a href="#">Nouveautés</a></li>
                <li><a href="#">T-shirt</a></li>
                <li><a href="#">A propos</a></li>
                <li><a href="<?= path ?>connexion">Connexion</a></li>
                <button><li><a href="<?= path ?>inscription">Inscription</a> </li></button>
            </ul>
            <input type="search" placeholder="Rechercher">
        </nav>
    </header>
   
    

    <p>
        <?= $content ?>
    </p>

    <!-- Footer -->

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

            <div class="savoir">
                <a href="">Decouvrez les gouffrés</a>
                <a href="">Mentions légales</a>
            </div>
        </div>
    </footer>

</body>

</html>