<?php 

namespace Blog\Model\Entity;

use Blog\Model\Entity\Entity;

class Admin extends Entity {
    
    private $id;
    private $login;
    private $password;
    
    function setId($id) {
        $id = (int)$id;
        if ($id >0) {
            $this->id = $id;
        }
    }
    
    function setLogin($login) {
            $this->login = $login;
    }
    
    function setPassword($password) {
            $this->password = $password;
    }    
    
    function getId() { return $this->id;}
    function getLogin() { return $this->login;}
    function getPassword() { return $this->password;}
    
    
}
