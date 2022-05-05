<?php

class ArticlesModel extends Model
{
    public function __construct()
    {
        $this->table = "products";
        $this->getConnection();
    }


    public function nombreTotalArticles() // COMPTE LE NOMBRE DARTICLES 
    {
        $sth = $this->_connexion->prepare('SELECT COUNT(*) AS nb_article FROM products');
        $sth->execute();
        return $sth->fetch();
    }

    public function getArticlesByDate() // read tous les produits ordonnés par le plus recent
    {
        $sth = $this->_connexion->prepare('SELECT * FROM ' . $this->table . ' ORDER BY DATE DESC LIMIT 5 ');
        $sth->execute();
        $artdate = $sth->fetchall(PDO::FETCH_ASSOC);
        return $artdate;
    }

    public function getProduitsPhares() // read tous les produits ordonnés par le plus recent
    {
        $sth = $this->_connexion->prepare('SELECT * FROM ' . $this->table . ' ORDER BY DATE ASC LIMIT 5 ');
        $sth->execute();
        $artphares = $sth->fetchall(PDO::FETCH_ASSOC);
        return $artphares;
    }






    public function getArticlesFormProducts($limit, $articles) // read tous les produits avec une limit
    {
        $sth = $this->_connexion->prepare('SELECT * FROM products  LIMIT ' . $limit . ',' . $articles);
        $sth->execute();
        return $sth->fetchall(PDO::FETCH_ASSOC);

    }

    public function selectArticle($id) // selectionne en bdd un produit selon son id en argument et genère un tableau contenant ses informations
    {
        $sth = $this->_connexion->prepare('SELECT FROM products WHERE id=?');
        $sth->execute(array($id));
    }


    public function addArticle($nom, $prix, $image, $image2, $descr, $cat, $sousCat) // insert un produit en bdd selon arguments
    {
         $sth = $this->_connexion->prepare('INSERT INTO products (name, price, date, image, image2, descr, id_categorie, id_souscategorie) VALUES (?, ?, NOW(), ?, ?, ?, ?, ?)');
         $sth->execute(array($nom, $prix, $image, $image2,$descr, $cat, $sousCat));
    }

    public function deleteArticle($id) // supprime un produit selon son id en argument
    {
        $sth = $this->_connexion->prepare('DELETE FROM products WHERE id=?');
        $sth->execute(array($id));
    }


    public function searchArticles1 ($keyword){

        $sth = $this->_connexion->prepare('SELECT * FROM products WHERE name like:term');
        $sth->execute(["term" => $keyword.'%']);
        $searchResults = $sth->fetchAll();
        return $searchResults;
    }

    
    public function searchArticles2($value) // Requète pour la barre de recherche PEUT ETRE A VENIR
    {
        $sth = $this->_connexion->prepare("SELECT * FROM products WHERE name LIKE '%" . $value . "%' LIMIT 6");
        $sth->execute();
        $test = $sth->fetchall(PDO::FETCH_ASSOC);
        return ($test);
    }


}