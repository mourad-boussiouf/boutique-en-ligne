<?php


class Controller
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
        extract($data); ob_start(); require_once(ROOT . 'view/' . $fichier . '.php');
        $content = ob_get_clean(); require_once(ROOT . 'view/layout.html.php');
    }

    public static function disconnect($id)
    {
        session_destroy();
        header('Refresh:0;url=' . path . 'accueil');
    }


    public static function renderPanelAdmin($fichier, $data = [])
    {
        extract($data);
        ob_start();
        require_once(ROOT . 'view/' . $fichier . '.php');
        $content = ob_get_clean();
        require_once(ROOT . 'view/layout.panelAdmin.html.php');
    }




}