<?php
class CategorieModel extends Model{
    public function __construct()
    {
        $this->table="categories";
        $this->getConnection(); 
    }

    public function addCat($nameC) // INSERT CAT EN PREVISION PANEL ADMIN
    {
        $sth = $this->_connexion->prepare('INSERT INTO categories (name) VALUES (?)');
        $sth -> execute(array($nameC));
    }

}