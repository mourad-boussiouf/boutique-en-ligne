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


}





