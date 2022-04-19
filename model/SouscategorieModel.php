<?php
class SouscategorieModel extends Model{
    public function __construct()
    {
        $this->table="sous_categories";
        $this->getConnection();
    }

    public function addSousCat($newSubcatName) // Ajoute une sous catégorie
    {
        $sth = $this->_connexion->prepare('INSERT INTO sous_categories (name) VALUES (?)');
        $sth -> execute(array($newSubcatName));
    }
}