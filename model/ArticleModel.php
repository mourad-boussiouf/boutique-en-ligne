<?php

class ArticleModel extends Model
{
    public function __construct()
    {
        $this->table = "products";
        $this->getConnection();
    }

    public function getArticleByDate() // NOUS SORT UN PRODUIT BY SA DATE 
    {
        $sth = $this->_connexion->prepare('SELECT * FROM ' . $this->table . ' ORDER BY DATE DESC LIMIT 5 ');
        $sth->execute();
        $artdate = $sth->fetchall(PDO::FETCH_ASSOC);
        return $artdate;
    }

}