<?php

// pk il marche l'autoloader le frerrre

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

// constate du path pour utiliser path partout

define('path', '/boutique-en-ligne/');
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
$params = explode('/', $_GET['p']);
?>




<a href="admin">Admin la mine</a> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the gouffre</title>
</head>

<body>
<header>
 




<form action="post"><input type="text" id="name" name="name" required
       minlength="4" maxlength="8" placeholder ="se connecter" size="10"> </form></header>

    <h1> Bienvenue <h1>

</form>
</body>
</html>