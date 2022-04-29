<?php

class Search {
    //RECHERCHER PRODUITS
    public function search_porduct(){
        $bdd = new PDO('mysql:host=localhost;dbname=boutique', 'root', '');
$allProducts = $bdd->query('SELECT * FROM products ORDER BY id DESC');
if(isset($_GET['s']) && !empty($_GET['s'])){
    $search = htmlspecialchars($_GET['s']);
    $allProducts = $bdd->query('SELECT * FROM products WHERE name LIKE "%'.$search.'%" 
    ORDER BY id DESC');
}
    }
    //RECHERCHER USER 
    public function search_user(){
        $bdd = new PDO('mysql:host=localhost;dbname=boutique', 'root', '');
        $allUser = $bdd->query('SELECT * FROM user ORDER BY id DESC');
        if(isset($_GET['s']) && !empty($_GET['s'])){
            $search = htmlspecialchars($_GET['s']);
            $allUser = $bdd->query('SELECT * FROM user WHERE email LIKE "%'.$search.'%"
            ORDER BY id DESC');
        }
    }
}