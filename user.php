<?php

$bdd = new PDO('mysql:host=localhost;dbname=boutique', 'root', '');
    //CLASS//
    class User {
        private $id;
        public $email;
        public $firstname;
        public $lastname;
        public $password;

            //REGISTER
public function register($login, $password, $email, $firstname, $lastname){
    
    $bdd = new PDO('mysql:host=localhost;dbname=boutique', 'root', '');
    $requetelogin= $bdd->prepare("SELECT * FROM user WHERE login = ?");
    $requetelogin->execute(array($login));
    $loginexist= $requetelogin->rowCount();

    if($loginexist == 0) {
        $insert= $bdd->prepare("INSERT INTO user (login, password, email, firstname, lastname) VALUES(?, ?, ?, ?, ?)");
        $insert->execute(array($login, $password, $email, $firstname, $lastname));
        return [$login, $password, $email, $firstname, $lastname];
    }

}

//CONNECT
public function connect($login, $password){
   
    $bdd = new PDO('mysql:host=localhost;dbname=boutique', 'root', '');
    $requser = $bdd->prepare("SELECT * FROM user WHERE login = ? AND password = ?");
    $requser->execute(array($login, $password));
    $userexist = $requser->rowCount();

    if($userexist == 1){
            
        $user= $requser->fetch();

              $this->id = $user['id'];
              $this->login = $user['login'];
              $this->password = $user['password'];
              $this->email = $user['email'];
              $this->firstname = $user['firstname'];
              $this->lastname = $user['lastname'];
              return true;
            }
            
            else
            {   
                  return false;
            }
    }

    //DISCONNECT
public function disconnect(){
  
    if (isset($this->id)) { 
    
        $this->id = NULL;
        $this->login = NULL;
        $this->password = NULL;
        $this->email = NULL;
        $this->firstname = NULL;
        $this->lastname = NULL; 
    
    }
    
    return true;
    
    }


    }