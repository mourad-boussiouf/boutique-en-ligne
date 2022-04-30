<?php
class CategorieModel extends Model{
    public function __construct()
    {
        $this->table="orders";
        $this->getConnection(); 
    }


    public function insertOrders($orderline, $totalprice, $moyen_paiement, $adress_user, $id_user,)
    {  
      
              $sth = $this->_connexion->prepare("INSERT INTO orders(achats, date, price, moyen_paiement, id_user,) VALUES (?,NOW(),?,?,?,?,?,'paid')");
              $sth->execute(array($orderline, $totalprice, $moyen_paiement, $adress_user, $id_user));
              
    }  

}


?>