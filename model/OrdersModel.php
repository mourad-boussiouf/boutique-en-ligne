<?php
class OrdersModel extends Model{
    public function __construct()
    {
        $this->table="orders";
        $this->getConnection(); 
    }


    public function insertOrders($id_user, $orderline, $totalprice, $moyen_paiement, $delivery_adress)
    {  
      
              $sth = $this->_connexion->prepare("INSERT INTO orders( id_user , orderline , totalprice , date , moyen_paiement , delivery_adress , order_status ) VALUES (?,?,?,NOW(),?,?,'paid')");
              $sth->execute(array($id_user, $orderline, $totalprice, $moyen_paiement, $delivery_adress));
              
    }  

}


?>