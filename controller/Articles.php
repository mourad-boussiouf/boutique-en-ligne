<?php


class Articles extends Controller{
    public function __construct()
    {

    }

    public static function index()
    {
        $nombreArticlePages = 6;
        $model = new ArticleModel();
        $params = explode('/', $_GET['p']);
        $modelcat = new CategorieModel();
        $modelsc = new SouscategorieModel();
        $categorie = $modelcat->getALL();
        $scategorie = $modelsc->getALL();




    self::render('articles', );
    }



}