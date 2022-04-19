<?php 

$bdd = new PDO('mysql:host=localhost;dbname=boutique', 'root', '');
$allProducts = $bdd->query('SELECT * FROM products ORDER BY id DESC');
if(isset($_GET['s']) && !empty($_GET['s'])){
    $search = htmlspecialchars($_GET['s']);
    $allProducts = $bdd->query('SELECT name, price, image, descr FROM user WHERE name LIKE "%'.$search.'%" 
    ORDER BY id DESC');
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="../boutique.css">
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
        <section class="afficher_produits">
            <?php 

            if($allProducts->rowCount() > 0){
                while($products = $allProducts->fetch()){
                    ?>
                    <p> <?= $products['name']; ?> </p>
                    <p> <?= $products['price']; ?> </p>
                    <p> <?= $products['image']; ?> </p>
                    <p> <?= $products['descr']; ?> </p>
                    <?php
                }
            }else {
                ?>
                <p>Aucun produit ne correspond à votre recherche</p>
                <?php
            }
            ?>
        </section>
    </main>
</body>
</html>