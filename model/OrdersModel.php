<?php
class CategorieModel extends Model{
    public function __construct()
    {
        $this->table="orders";
        $this->getConnection(); 
    }


    public function insertOrders($orderline, $totalprice, $moyen_paiement, $adress_user, $id_user,$orderstatus)
    {  
      
              $sth = $this->_connexion->prepare("INSERT INTO orders(achats, date, price, moyen_paiement, id_user) VALUES (?,NOW(),?,?,?,?,?)");
              $sth->execute(array($orderline, $totalprice, $moyen_paiement, $adress_user, $id_user,$orderstatus));
              
    }  

}


?>