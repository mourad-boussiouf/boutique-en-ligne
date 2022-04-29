<link rel="stylesheet" href="../../css/header.css">
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
                while($product = $allProducts->fetch()){
                    ?>
                    <p> <?= $product['name']; ?> </p>
                    <p> <?= $product['price']; ?> </p>
                    <p> <?= $product['image']; ?> </p>
                    <p> <?= $product['descr']; ?> </p>
                    <?php
                }
            }else {
                ?>
                <p>Aucun article ne correspond à votre recherche</p>
                <?php
            }
            ?>
        </section>
    </main>