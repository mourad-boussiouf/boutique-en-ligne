<?php

class Admin extends Controller
{
    public function __construct()
    {

    }

    public static function index() // ACCEUIL PANEL ADMIN
    {
        $user = new UserModel();
        $userall = count($user->getALL());
        $article = new ArticlesModel();
        $articleall = count($article->getALL());
        self::renderPanelAdmin('admin', compact('userall', 'articleall'));
    }

    public static function articles() // 
    {
        $categorie = new CategorieModel();
        $souscategorie = new SouscategorieModel();
        $model = new ArticlesModel();
        $prod = $model->getArticlesByDate();
        $categorieAll=$categorie->getALL();
        $souscategorieAll = $souscategorie->getALL();
        

        if(isset($_POST['ajouter'])){
            $nom = $_POST['name'];
            $prix = $_POST['price'];
            $image = $_POST['image'];
            $image2 = $_POST['image2'];
            $descr = $_POST['descr'];
            $cat = $_POST['idcategorie'];
            $sousCat = $_POST['idsouscat'];
            $add = new ArticlesModel();
            $add->addArticle($nom, $prix, $image, $image2, $descr, $cat, $sousCat);
            echo "<div class = reussi> Article correctement inséré à la BDD ! </div>";
            header('Refresh:2;url='.path.'adminarticles');
        }
        if(isset($_POST['delete'])){
            var_dump($_POST['idproduct']);
            $idproduct = $_POST['idproduct'];
            $delete = new ArticlesModel();
            $delete->deleteArticle($idproduct);
            echo "<div class = error> Les données liées à cet ID ont étaient effacées. </div>";
            header('Refresh:2;url='.path.'adminarticles');
        }
        if(isset($_POST['createcat'])){
            
            $newCatName = $_POST['newcatname'];
            $createCat = new CategorieModel();
            $createCat->addCategorie($newCatName);
            echo "<div class = reussi> Cette catégorie a été créee.</div>";
            header('Refresh:2;url='.path.'adminarticles');
        }
        if(isset($_POST['createsubcat'])){
            
            $newSubCatName = $_POST['newsubcatname'];
            $createCat = new SouscategorieModel();
            $createCat->addSousCat($newSubCatName);
            echo "<div class = reussi> Cette sous-catégorie a été créee.</div>";
            header('Refresh:2;url='.path.'adminarticles');
        }
        self::renderPanelAdmin('adminarticles', compact('categorieAll','souscategorieAll','prod'));
    }


    public static function user() // ACCEUIL PANEL ADMIN
    {
        $user = new UserModel();
        $userlist = $user->getALL();
        self::renderPanelAdmin('adminuser', compact('userlist'));
    }
}





