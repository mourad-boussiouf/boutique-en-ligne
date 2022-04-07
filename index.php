<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<img src=<?php  alt="Italian Trulli">   
</body>
</html>
<?php

session_start();
spl_autoload_register(function ($class) {
    if (file_exists('handling/' . $class . '.php')) {
        require_once('handling/' . $class . '.php');

    }
    if (file_exists('handling/' . $class . 'Class.php')) {
        require_once('handling/' . $class . 'Class.php');
    }
    if (file_exists('handling/' . $class . '.php')) {
        require_once('handling/' . $class . '.php');
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