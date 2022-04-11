<?php if (isset($error1)): ?>
    <div class="error"><?= $error1 ?></div>
<?php endif; ?>
<?php if (!empty($success)): ?>
    <div class="reussi"><?= $success[0] ?></div>
<?php header('Refresh:3;url='.path.'connexion');?>
<?php else: ?>
    
<main>
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
</main>

<?php endif; ?>