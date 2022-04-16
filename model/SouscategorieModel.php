<?php
class SouscategorieModel extends Model{
    public function __construct()
    {
        $this->table="sous_categories";
        $this->getConnection();
    }

    public function addSousCat($nameSC,$idcat) // INSERT souscatégirue en prevision panel admin
    {
        $sth = $this->_connexion->prepare('INSERT INTO sous_categories (name, id_categorie) VALUES (?, ?)');
        $sth -> execute(array($nameSC,$idcat));
    }
}