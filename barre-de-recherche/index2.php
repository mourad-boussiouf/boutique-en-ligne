<?php 

$bdd = new PDO('mysql:host=localhost;dbname=boutique', 'root', '');
$allUsers = $bdd->query('SELECT * FROM user ORDER BY id DESC');
if(isset($_GET['s']) && !empty($_GET['s'])){
    $recherche = htmlspecialchars($_GET['s']);
    $allUsers = $bdd->query('SELECT login FROM user WHERE login LIKE "%'.$recherche.'%" ORDER BY id DESC');
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="boutique.css">
</head>
<body>
    <header class="main-head">
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="#">Nouveautés</a></li>
                <li><a href="#">T-shirt</a></li>
                <li><a href="#">A propos</a></li>
                <li><a href="authentification.php">Authentification</a></li>
                <li><a href="#"><i class="fa-solid fa-arrow-right-to-bracket"></i></a></li>
            </ul>
            <form action="" method="get">
            <input type="search" name="s" placeholder="Rechercher">
            <input type="submit" name="Envoyer">
            </form>
        </nav>
    </header>
    <main>
        <section class="afficher_utilisateur">
            <?php 

            if($allUsers->rowCount() > 0){
                while($user = $allUsers->fetch()){
                    ?>
                    <p> <?= $user['login']; ?> </p>
                    <?php
                }
            }else {
                ?>
                <p>Aucun user trouvé</p>
                <?php
            }
            ?>
        </section>
    </main>
</body>
</html>