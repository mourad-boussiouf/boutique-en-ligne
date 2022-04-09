<?php 

session_start();
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
                <li><a href="connexion.php">Connexion</a></li>
                <li><a href="authentification.php">Authentification</a></li>
                <button><li><a href="inscription.php">Inscription</a></li></button>
            </ul>
            <input type="search" placeholder="Rechercher">
        </nav>
    </header>
    <main>
        <section>
            <h1 class="big-title"> Les dernières sorties </h1>
            <div class="cards">
                <div class="card">
                    <a href="#"><img src="pictures/tshirt1.jpg" alt=""></a>
                </div>
                <div class="card">
                    <a href="#"><img src="pictures/tshirt2.jpg" alt=""></a>
                </div>
            </div>
            <button class="new"><a href="#">Voir plus</a></button>
        </section>
        <!--AUTRE-->
        <section class="main2">
            <h1 class="big-title"> Pour plus d'articles </h1>
            <div class="n1">
            <div><p>Nouveautés</p></div>
            <div><p>T-shirts</p></div>
            </div>
        </section>
    </main>
    <footer>
        <table></table>
    </footer>
</body>
</html>