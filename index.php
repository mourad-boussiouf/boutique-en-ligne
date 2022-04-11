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


 if ($pageask[0] == 'connexion') {
    Connexion::index();
} elseif ($pageask[0] == 'inscription') {
    Inscription::Register();
} else {
    Accueil::index();
}


?>






