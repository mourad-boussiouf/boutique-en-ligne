
<div class = mastercontainer>



<div class="sb-betslip">
   
   <div class="ticket-border">
            <span class="ticket-shape"></span>
            <span class="ticket-shape"></span>
            <span class="ticket-shape"></span>
            <span class="ticket-shape"></span>
            <span class="ticket-shape"></span>
            <span class="ticket-shape"></span>
            <span class="ticket-shape"></span>
   </div>
   
   <div class="sb-betslip__content">
   <ul>
    <li id = recaptitle><b>Récapitulatif de votre commande :</b></li>
<?php foreach ($recap as $v): ?>
    
    <li>•<?=$v?></li>



<?php endforeach;?>
</ul>   

<p id = debit> Montant débité : <?=$prixTotal?>€ </p>
   </div>
   
</div>

 <div id = adressconfirm> <span> La commande sera livrée à cette adresse :</span>
<span><?=$_SESSION['nom']?> <?=$_SESSION['prenom']?></span>
<span><?=$_SESSION['adresse']?></span>
<span><a href="<?=path?>mesinfos">Changer mon adresse</a></span></div>



<form action = "" method = "POST">
<label for="moyen_paiement">Moyen de paiement :</label>
<select name="moyen_paiement">
<option value="Paypal">Paypal</option>
<option value="CB">CB</option>
<option value="Bitcoin">Bitcoin</option>
</select>
<input type="submit" id = "confirmpay" name = "confirmpay" value = "Confirmer le paiement">
</form>
</div>


