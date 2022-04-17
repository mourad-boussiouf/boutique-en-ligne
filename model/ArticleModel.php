<?php

class ArticleModel extends Model
{
    public function __construct()
    {
        $this->table = "products";
        $this->getConnection();
    }


    public function TotalArticles() // COMPTE LE NOMBRE DARTICLES 
    {
        $sth = $this->_connexion->prepare('SELECT COUNT(*) AS nb_article FROM products');
        $sth->execute();
        return $sth->fetch();

    }

    public function getArticleByDate() // NOUS SORT UN PRODUIT BY SA DATE 
    {
        $sth = $this->_connexion->prepare('SELECT * FROM ' . $this->table . ' ORDER BY DATE DESC LIMIT 5 ');
        $sth->execute();
        $artdate = $sth->fetchall(PDO::FETCH_ASSOC);
        return $artdate;
    }



    public function getArticlesFormProducts($limit, $articles) // Requète pour avoir les produits pour affichage
    {
        $sth = $this->_connexion->prepare('SELECT * FROM products  LIMIT ' . $limit . ',' . $articles);
        $sth->execute();
        return $sth->fetchall(PDO::FETCH_ASSOC);

    }
}