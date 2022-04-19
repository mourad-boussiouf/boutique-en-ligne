<?php


class Articles extends Controller
{
    public function __construct()
    {

    }

    public static function index()
    {
        $pageask = explode('/', $_GET['p']);
        $model = new ArticlesModel();
        $modelcat = new CategorieModel();
        $modelsc = new SouscategorieModel();
        $categorie = $modelcat->getALL();
        $scategorie = $modelsc->getALL();
        $search = "";
        $totalArticles = $model->nombreTotalArticles();
        $nombreArticlePages = 20;
        $nombreDePages = ceil($totalArticles[0] / $nombreArticlePages);
        


            if (isset($pageask[1]) && is_numeric($pageask[1])) {

                $pages = $pageask[1];
                $premierArticle = ($pages - 1) * $nombreArticlePages;
                $prod = $model->getArticlesFormProducts($premierArticle, $nombreArticlePages);
                
            } elseif (isset($pageask[2]) && is_numeric($pageask[2])) {
                $pages = $pageask[2];
                $premierArticle = ($pages - 1) * $nombreArticlePages;

                $prod = $model->getArticlesFormProducts($premierArticle, $nombreArticlePages);

            } else {
                $pages = 1;
                $premierArticle = ($pages - 1) * $nombreArticlePages;
                $prod = $model->getArticlesFormProducts($premierArticle, $nombreArticlePages);
            }
    
        self::render('articles', compact('categorie', 'scategorie',  'search', 'nombreDePages', 'prod'));

    }
}