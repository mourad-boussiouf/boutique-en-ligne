<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<p> <img src=<?php echo  ?> alt="Italian Trulli">  </p>
</body>


</html>

<?php

session_start();
spl_autoload_register(function ($class) {
    if (file_exists('controller/' . $class . '.php')) {
        require_once('controller/' . $class . '.php');

    }
    if (file_exists('model/' . $class . 'Model.php')) {
        require_once('model/' . $class . 'Model.php');
    }
    if (file_exists('model/' . $class . '.php')) {
        require_once('model/' . $class . '.php');
    }

}
);

//path = racine du dossier
define('path', '/boutique-en-ligne/');
//root = remplace l'url par le nom du fichier
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
//root = le nom du fichier demandé devient la variable pageask
$pageask = explode('/', $_GET['p']);


if ($pageask[0] == 'admin') {
    if (isset($pageask[1])) {
        if ($pageask[1] == 'stock') {
            if (isset($pageask[2])) {
                Admin::adStock($pageask[2]);
            }
            Admin::Stock();
        } elseif ($pageask[1] == 'user') {
            if (isset($pageask[2])) {
                Admin::manageuser($pageask[2]);

            }
            Admin::user();
        } elseif ($pageask[1] == 'article') {
            Admin::articles();
        } elseif ($pageask[1] == 'vente') {
            Admin::ventes();
        } elseif ($pageask[1] == 'categorie') {
            Admin::categories();
        } else {
            Admin::index();
        }


    } else {
        Admin::index();
    }
}


?>