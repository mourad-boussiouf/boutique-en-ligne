
<?php if (!empty($success)): ?>
    <div class="success"><?= $success[0]; ?></:></div>
   <?php header('Refresh:3,' . path . 'accueil');?>

<?php elseif (!empty($errors)): ?>
    <div class="errors"><?= $errors[0]; ?></div>
    
<main>
    <h1 class="titre">Connexion</h1>
    <form class="box-conn" action="#" method="post">
    <label for="email">Email</label>
            <input type="text" name="email">
            <label for="telephone">Téléphone</label>
            <input type="text" name="telephone">
            <label for="password">Votre Mot de passe</label>
            <input type="password" name="password">
            <input id="connect" type="submit" value="se connecter" name="connect">
            <a href="<?= path ?>inscription">Pas encore inscrit? C'est par ici!</a>
    </form>
<?php endif; ?>
<br> <br>
    <form class="box" action="#" method="post">
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Votre email">
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Votre mot de passe">
        <label for="passwordverify">Verification du mot de passe</label>
        <input type="password" name="passwordverify" placeholder="Votre mot de passe">
        <label for="email">Téléphone</label>
        <input type="text" name="telephone" placeholder="Votre numéro mobile">
        <label for="email">Nom</label>
        <input type="text" name="nom" placeholder="Votre nom">
        <label for="email">Prénom</label>
        <input type="text" name="prenom" placeholder="Votre prénom">
        <label for="numero">Numero de rue</label>
        <input type="number" name="numero" placeholder="Numero de voie">
        <label for="nom">Nom de votre voie</label>
        <input type="text" name="nomrue" placeholder="Nom de votre voie">
        <label for="codepostal">Votre Code Postal</label>
        <input type="number" name="codepostal" placeholder="Votre Code postal">
        <label for="ville">Ville</label>
        <input type="text" name="ville" placeholder="Votre Ville">
        <input type="submit" value="S'inscrire" name="valider" id="valider">
        <a href="<?=path?>connexion">Déjà Membre?Connectez vous!</a>
    </form>


</main>

