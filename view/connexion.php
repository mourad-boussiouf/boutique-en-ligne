<?php if (!empty($success)): ?>
<!-- Si connexion ok redirection sur la page d'accueil -->
<div class="success"><?= $success[0]; ?></:>
</div>
<?php header('Refresh:3,' . path . 'accueil');?>
<?php endif; ?>

<?php if (!empty($errors)): ?>
<!-- Si erreur de connexion, envoi du message d'erreur -->
<div class="errors"><?= $errors[0]; ?></div>
<?php endif; ?>


    <h1 class="titre">Connexion</h1>
    <form class="box" action="#" method="post">
    <label for="email">Email</label>
            <input type="text" name="email">
            <label for="telephone">Téléphone</label>
            <input type="text" name="telephone">
            <label for="password">Votre Mot de passe</label>
            <input type="password" name="password">
            <input id="connect" type="submit" value="se connecter" name="connect">
            <a href="<?= path ?>inscription">Pas encore inscrit? C'est par ici!</a>
    </form>


