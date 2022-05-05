<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEGOUFFRE!</title>
    
</head>


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
  
    <h2>Nos produits phares :</h2>

    <div class = 'phares'>
    <div align="center">
  <div class="contener_slideshow">
    <div class="contener_slide">
    <div class="slid_1"><p><?=$prodphares[0]['name']?></p><img src="<?= path ?>assets/images/<?=$prodphares[0]['image']?>"></div>
      <div class="slid_2"><p><?=$prodphares[1]['name']?></p><img src="<?= path ?>assets/images/<?=$prodphares[1]['image']?>"></div>
      <div class="slid_3"><p><?=$prodphares[2]['name']?></p><img src="<?= path ?>assets/images/<?=$prodphares[2]['image']?>"></div>
    </div>
  </div>
</div>
<span id = 'link'> <a href="<?=path?>articles">Voir la boutique</a> </span>
</div>

<h2>Les derniers arrivages :</h2>
<div class = 'arrivages'>
<div align="center">
  <div class="contener_slideshow">
    <div class="contener_slide">
    <div class="slid_1"><p><?=$prodnouveaux[0]['name']?></p><img src="<?= path ?>assets/images/<?=$prodnouveaux[0]['image']?>"></div>
      <div class="slid_2"><p><?=$prodnouveaux[1]['name']?></p><img src="<?= path ?>assets/images/<?=$prodnouveaux[1]['image']?>"></div>
      <div class="slid_3"><p><?=$prodnouveaux[2]['name']?></p><img src="<?= path ?>assets/images/<?=$prodnouveaux[2]['image']?>"></div>
    </div>
  </div>
</div>
<span id = 'link'> <a href="<?=path?>articles">Gouffrage</a> </span>
</div>

</html>
