<?php
class Accueil extends Controller {
    public function __construct()
    {

    }
    public static function index()
    {
        $model = new ArticlesModel();
        $prodphares = $model->getProduitsPhares();
        $prodnouveaux = $model->getArticlesByDate();



        self::render('accueil', compact('prodphares','prodnouveaux'));

    }
}
