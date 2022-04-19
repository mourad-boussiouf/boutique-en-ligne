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
//str replace (search, replace, subject)
//root = le nom du fichier demandé devient la variable pageask
define('path', '/boutique-en-ligne/');

define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

$pageask = explode('/', $_GET['p']);


 if ($pageask[0] == 'connexion') {
    Connexion::index();
}elseif ($pageask[0] == 'inscription') {
    Inscription::Register();
}elseif ($pageask[0] == 'authentification'){
    Authentification::indexcon();
    Authentification::indexreg(); 
}elseif ($pageask[0] == 'deconnexion') {
    Controller::disconnect($_SESSION['id']);
}elseif ($pageask[0] == 'articles') {
    Articles::index();
}elseif ($pageask[0] == 'admin') {
    Admin::index();
}elseif ($pageask[0] == 'adminarticles') {
    Admin::articles();
}else{
    Accueil::index();
}


?>






