<?php


class Articles extends Controller
{
    public function __construct()
    {

    }

    public static function index()
    {
        $nombreArticlePages = 6;
        $model = new Articlemodel();
        $params = explode('/', $_GET['p']);
        $modelcat = new CategorieModel();
        $modelsc = new SouscategorieModel();
        $categorie = $modelcat->getALL();
        $scategorie = $modelsc->getALL();
        $search = "";

    }
}