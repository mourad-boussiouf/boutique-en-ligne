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

                 
                if (isset($_POST['addcart']) && isset($_SESSION['id'])) {
                  
                    
                    $articleAndSize = $produit[0]['name'].' '.'dans la taille'.' '.$_POST['sizechosen'];
                    $positionProduit = array_search($articleAndSize,  $_SESSION['panier']['libelleProduit']);

                    

                    if ($positionProduit !== false)
                    {
                       $_SESSION['panier']['qteProduit'][$positionProduit] += 1;

                       echo "<div class = success> Un exemplaire supplémentaire de cet article à été ajouté à votre panier.</div>";
                       header('Refresh:1;url='.path.'articles/'.$pageask[1]);

                    }elseif($positionProduit == false){

                        array_push( $_SESSION['panier']['libelleProduit'],$articleAndSize);
                        array_push( $_SESSION['panier']['prixProduit'],$produit[0]['price']);
                        array_push( $_SESSION['panier']['qteProduit'],1);
                        echo "<div class = success> Cet article a été ajouté à votre panier.</div>";
                        header('Refresh:2;url='.path.'articles/'.$pageask[1]);
                        

                    
                    }
                    
                }elseif (isset($_POST['addcart']) && !isset($_SESSION['id'])) {
                    echo "<div class = error> Vous devez être connecté acheter un article ! </div>";
                    header('Refresh:2;url='.path.'authentification');
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
