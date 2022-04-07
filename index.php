
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
define('path', '/versionquimarchepd/');
//root = remplace l'url par le nom du fichier
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
//root = créer l'url en cassant l'array du GET
$params = explode('/', $_GET['p']);

//on verifie les parametres
if ($params[0] == 'produits') {
    if (isset($params[1])) {
        $souC = new SouscategorieModel();
        $souCate = $souC->getOne('name', $params[1]);
        $cat = new CategorieModel();
        $cate = $cat->getOne('name_categories', $params[1]);
        if (count($souCate) > 0) {
            Produits::selectBySc($params[1]);
        } elseif (count($cate) > 0) {
            Produits::selectByCat($params[1]);
        }else {
            Produits::index();
        }
    }
}
?>