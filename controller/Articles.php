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
        $nombreArticlePages = 18;
        $nombreDePages = ceil($totalArticles[0] / $nombreArticlePages);
        $pages = 18;
        $premierArticle = ($pages - 1) * $nombreArticlePages;
        $prod = $model->getArticlesFormProducts($premierArticle, $nombreArticlePages);
        


            if (isset($pageask[1]) && is_numeric($pageask[1])) {
                $article = new Articlesmodel();
                $produit = $article->getOne('id', $pageask[1]);

                if (isset($_POST['addcart'])) {
                    echo 'lol';
                    
                    $articleAndSize = $produit[0]['name'].' '.'dans la taille'.' '.$_POST['sizechosen'];
                    $positionProduit = array_search($articleAndSize,  $_SESSION['panier']['articleName']);
                    
                    if ($positionProduit !== false)
                    {
                       $_SESSION['panier']['articleQuantity'][$positionProduit] += 1;

                    }elseif($positionProduit == false){

                        array_push( $_SESSION['panier']['articleName'],$articleAndSize);
                        array_push( $_SESSION['panier']['articlePrice'],$produit[0]['price']);
                        array_push( $_SESSION['panier']['articleQuantity'],1);
                        

                    
                    }
                    
                }
              
                self::render('articles', compact('categorie', 'scategorie',  'search', 'nombreDePages', 'prod','produit'));

            } elseif (isset($pageask[2]) && is_numeric($pageask[2])) {
                $pages = $pageask[2];
                $premierArticle = ($pages - 1) * $nombreArticlePages;
                $prod = $model->getArticlesFormProducts($premierArticle, $nombreArticlePages);
                self::render('articles', compact('categorie', 'scategorie',  'search', 'nombreDePages', 'prod'));
            } else {
                $pages = 1;
                $premierArticle = ($pages - 1) * $nombreArticlePages;
                $prod = $model->getArticlesFormProducts($premierArticle, $nombreArticlePages);
                self::render('articles', compact('categorie', 'scategorie',  'search', 'nombreDePages', 'prod'));
            }
    
        self::render('articles', compact('categorie', 'scategorie',  'search', 'nombreDePages', 'prod'));
      
        }



}
