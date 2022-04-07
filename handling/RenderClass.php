<?php

class RenderClass
{

    public $path = "/boutique-en-ligne/";

    public function __construct()
    {
    }

    public function loadModel(string $model)

    {
        $this->$model = new $model();
    }

    public static function render($fichier, $data = [])
    {
        extract($data);
        ob_start();
        require_once(ROOT . 'pages/' . $fichier . '.php');
        $content = ob_get_clean();
        require_once(ROOT . 'pages/layout.html.php');
    }

    public static function disconnect($id)
    {
        $panier = new PanierClass();
        $panier->delete($id);
        unset($_SESSION['id']);
        unset($_SESSION['login']);
        header('Refresh:0;url=' . path . 'accueil');
    }

    public static function renderAdmin($fichier, $data = [])
    {
        extract($data);
        ob_start();
        require_once(ROOT . 'pages/' . $fichier . '.php');
        $content = ob_get_clean();
        require_once(ROOT . 'pages/layout.admin.html.php');
    }
}

?>