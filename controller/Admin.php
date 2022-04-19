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

    public static function articles() // Permet à l'admin d'ajouter du stock
    {
        $categorie = new CategorieModel();
        $souscategorie = new SouscategorieModel();
        $caltegorieAll=$categorie->getALL();
        $souscategorieALL = $souscategorie->getALL();

        if(isset($_POST['ajouter'])){
            $nom = $_POST['nom'];
            $prix = $_POST['price'];
            $image = $_POST['image'];
            $image2 = $_POST['image2'];
            $descr = $_POST['descr'];
            $categorieGet = $categorie->getOne('id', $_POST['categorie']);
            $categorieChosen = $categorieGet[0]['id'];
            $souscategorieGet = $souscategorie->getOne('id',$_POST['souscategorie']);
            $souscategorieChosen = $souscategorieGet[0]['id'];
            $add = new ArticlesModel();
            $add->addArt($nom, $prix, $image, $image2, $descr, $categorieChosen, $souscategorieChosen);
        }

        self::renderPanelAdmin('adminarticles', compact('categorieAll','souscategeorieAll'));
    }
}





