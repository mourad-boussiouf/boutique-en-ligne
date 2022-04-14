<?php

class Usermodel extends Model
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