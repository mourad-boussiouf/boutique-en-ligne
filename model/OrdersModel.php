<?php
class OrdersModel extends Model
{
    public function __construct()
    {
        $this->table="orders";
        $this->getConnection(); }


    public function insertOrders($id_user, $orderline, $totalprice, $moyen_paiement, $delivery_adress)
    {  
        $sth = $this->_connexion->prepare("INSERT INTO $this->table( id_user , orderline , totalprice , date , moyen_paiement , delivery_adress , order_status ) VALUES (?,?,?,NOW(),?,?,'payée')");
        $sth->execute(array($id_user, $orderline, $totalprice, $moyen_paiement, $delivery_adress));       
    }  

    public function getOrdersOfAnUser($id_user)
    {
        $sth = $this->_connexion->prepare("SELECT * FROM $this->table WHERE id_user = $id_user  ORDER BY date DESC");
        $sth->execute();
        return $sth->fetchall(PDO::FETCH_ASSOC);
    }

    public function updateOrder($newDelivery, $newStatus, $orderId)
    {
        $sth = $this->_connexion->prepare('UPDATE `orders` SET `delivery_adress` = ?, `order_status` = ? WHERE `id` = ?');
        $sth->execute(array($newDelivery, $newStatus, $orderId));
    }



}


?>