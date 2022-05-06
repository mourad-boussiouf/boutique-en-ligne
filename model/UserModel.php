<?php

class UserModel extends Model
{
    public function __construct()
    {
        $this->table = "user";
        $this->getConnection();
    }

    public function insert($value1, $value2, $value3, $value4, $value5, $value6)
    {
        $sth = $this->_connexion->prepare('INSERT INTO `user`(email, password, 	telephone, adresse, id_droit, nom, prenom) VALUES (?,?,?,?,1,?,?)');
        $sth->execute(array($value1, $value2, $value3, $value4, $value5, $value6));
    }

    public function updateAll($value1, $value2, $value3, $value4, $value5, $value6, $userId)
    {
        $sth = $this->_connexion->prepare('UPDATE `user` SET `email` = ?, `telephone` = ?, `adresse` = ?, `id_droit` = ?,  `nom` = ?,  `prenom` = ? WHERE `id` = ?');
        $sth->execute(array($value1, $value2, $value3, $value4, $value5, $value6, $userId));
    }

    public function updateMesinfos($value1, $value2, $value3, $value4, $value5, $userId)
    {
        $sth = $this->_connexion->prepare('UPDATE `user` SET `email` = ?, `telephone` = ?, `adresse` = ?,  `nom` = ?,  `prenom` = ? WHERE `id` = ?');
        $sth->execute(array($value1, $value2, $value3, $value4, $value5, $userId));
    }

    public function getSpecific($pageask, $id)
    {
        $sth = $this->_connexion->prepare("SELECT $pageask FROM $this->table WHERE id=$id");
        $sth->execute();
        return $sth->fetch();
    }


    public function updatePassword($value, $mail)
    {
        $sth = $this->_connexion->prepare('UPDATE `user` SET `password` = ? WHERE `email`= ?');
        $sth->execute(array($value,$mail));

    }

}