<!DOCTYPE html>


<?php
$pageask = explode('/', $_GET['p']);

?>

<head>
    <meta charset="UTF-8"/>
    <html lang="FR">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= path ?>css/<?php if ($pageask[0]!="") {
         echo $pageask[0];

    } else {
        echo 'accueil';
    } ?>.css">
    <link rel="stylesheet" href="<?= path ?>css/header.css">
    <link rel="stylesheet" href="<?= path ?>css/footer.css">
    

    <title></title>
</head>
<body>
<!-- header -->
<header> 
<?php if (isset($_SESSION['panier'])): ?>
    <?php    $numberArticleInCart = count($_SESSION['panier']['qteProduit']);?>
    <div class = cart><a href="<?= path ?>panier">PANIER (<?= $numberArticleInCart ?>)</a></div>
<?php endif; ?>

    <div class = logo><a href="<?= path ?>"> <img src="<?= path ?>assets/images/Logo.png" alt="LEGOUFFRE écrit en
    blanc immaculé sur fond gris"> </a> </div>
    <div class="nav">

      <ul>
        <li class="home"><a href="<?= path ?>">Accueil</a></li>
        <li class="articles"><a href="<?= path ?>articles">Vêtements</a></li>
        <li class="contact"><a href = "https://github.com/mourad-boussiouf/boutique-en-ligne">Github</a></li>
        <?php if (!isset($_SESSION['id'])): ?>
        <li class="auth"><a href="<?= path ?>authentification">Je me gouffre</a></li>
        <?php endif; ?>
        <?php if(isset($_SESSION['id'])):?>
        <li class="mesinfos"><a href="<?= path ?>mesinfos">Mes infos</a></li>
        <li class="mescommandes"><a href="<?= path ?>mescommandes">Mes commandes</a></li>
        <li class="deco"><a href="<?= path ?>deconnexion">Déconnexion</a></li>
            <?php if($_SESSION['droit']==2):?>
            <li class="admin"><a href="<?=path?>admin">Page admin</a></li>
            <?php endif;?>
        <?php endif;?>
       </ul>
      </div>



    <div class = banner> <img src="<?= path ?>assets/images/banner.png" alt=""> </div>
</header>
   
<!-- DISPLAY DU VIEW -->

<main>
        <?= $content ?>
    
</main>
</footer>
      <footer>
          <div class="para">
                  <p>Mentions légales
                  </p>
          </div>
          <div class="shop">
              <h3>SHOP</h3>
              <ul>
                  <li><a href="<?= path ?>">Accueil</a></li>
                  <li><a href="<?= path ?>articles">Vêtements</a></li>
              </ul>
          </div>
          <div class="company">
              <h3>COMPANY</h3>
              <ul>
                  <li><a href="<?= path ?>authentification">Connexion</a></li>
                  <li><a href="<?= path ?>authentification">Inscription</a></li>
              </ul>
          </div>
          <div class="newsletter">
              <h3>NEWSLETTER</h3>
              <p>
                 <i>Le gouffre est une entreprise en faillite.</i>
              </p>
          </div>
      </footer>

</body>

</html>