<?php

class Model
{
    //co bdd
    private $host = "localhost";
    private $db_name = "boutique-en-ligne";
    private $login = "root";
    private $password = "";

    //type de connexion
    protected $_connexion = null;

    //forme des requete

    public $table;
    public $id;

    public function getConnection()
    {
        if ($this->_connexion === null) {
            try {
                $this->_connexion = new PDO('mysql: host=' . $this->host . ';
            dbname=' . $this->db_name, $this->login, $this->password , array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
        
            } catch (PDOException $exception) {
                echo 'Erreur :' . $exception->getMessage();
            }
        }
        return $this->_connexion;
    }

        //FONCTIONS GENERIQUES .
        
    public function getALL()
    {
        $sth = $this->_connexion->prepare('SELECT * FROM ' . $this->table);
        $sth->execute();

        return $sth->fetchall(PDO::FETCH_ASSOC);
    }

    public function getOne($key, $value)
    {
        $sth = $this->_connexion->prepare('SELECT * FROM  ' . $this->table . '  WHERE ' . $key . ' = ?');
        $sth->execute(array($value));
        return $sth->fetchall(PDO::FETCH_ASSOC);
    }


    public function getInnerJoin($table2, $categories, $categories2, $key, $value)
    {
        $sth = $this->_connexion->prepare('SELECT * FROM  ' . $this->table . ' INNER JOIN ' . $table2 . ' ON ' . $this->table . '.' . $categories . '=' . $table2 . '.' . $categories2 . ' WHERE ' . $key . '= ? LIMIT 6');
        $sth->execute(array($value));
        $products = $sth->fetchall(PDO::FETCH_ASSOC);
        return $products;

    }

    public function update($pageask, $value, $id)
    {
        $sth = $this->_connexion->prepare("UPDATE $this->table SET $pageask=? WHERE id=$id ");
        $sth->execute(array($value));
    }

    public function deleteId($pageask,$id) // supimme un user
    {
        $sth=$this->_connexion->prepare('DELETE FROM'.$this->table.' WHERE'. $pageask.'='.$id);
        $sth->execute();

    }

}
