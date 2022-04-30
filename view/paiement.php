
<div class = mastercontainer>

<ul>
    <li><b>Récapitulatif de la commande :</b></li>
<?php foreach ($recap as $v): ?>
    
    <li><?=$v?></li>



<?php endforeach;?>
</ul>   

<p id = debit> Montant débité : <?=$prixTotal?>€ </p>



<form>
<label for="moyen_paiement">Moyen de paiement :</label>
<select name="moyen_paiement">
<option value="Paypal">Paypal</option>
<option value="CB">CB</option>
<option value="Bitcoin">Bitcoin</option>
</select>
</form>
</div>


