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
<div class = accueilpage>
<h1>Bienvenue sur les gouffrés.max</h1>



          <div class = leGouffre> 
            <span>L</span>
            <span>e</span>
            <span>G</span>
            <span>o</span>
            <span>u</span>
            <span>f</span>
            <span>f</span>
            <span>r</span>
            <span>e</span>
          </div>
  
    <h2>Nos produits phares</h2>

    <div class="slider-container">
      <div class="menu">
        <label for="slide-dot-1"></label>
        <label for="slide-dot-2"></label>
        <label for="slide-dot-3"></label>
      </div>
      
      <input class="slide-input" id="slide-dot-1" type="radio" name="slides" checked>
      <img class="slide-img" src="<?= path ?>assets/images/phare1.png">

      <input class="slide-input" id="slide-dot-2" type="radio" name="slides">
      <img class="slide-img" src="<?= path ?>assets/images/tshirt2.jpg">
      
      <input class="slide-input" id="slide-dot-3" type="radio" name="slides">
      <img class="slide-img" src="<?= path ?>assets/images/tshirt3.jpg">

    </div> 


</div>

</html>
