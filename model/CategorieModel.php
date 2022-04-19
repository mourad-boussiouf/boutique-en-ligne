<?php
class CategorieModel extends Model{
    public function __construct()
    {
        $this->table="categories";
        $this->getConnection(); 
    }

    public function addCategorie($newCatName) // Ajoute une catégorie
    {
        $sth = $this->_connexion->prepare('INSERT INTO categories (name) VALUES (?)');
        $sth -> execute(array($newCatName));
    }

}