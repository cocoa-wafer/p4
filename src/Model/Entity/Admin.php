<?php 

namespace Blog\Model\Entity;

class Admin {
    
    private $id;
    private $login;
    private $password;
    
    function __construct(array $donnees) {
        $this->hydrate($donnees);
    }
    
    function hydrate(array $donnees) {
        foreach ($donnees as $key => $value) {
            $method = 'set'.ucfirst($key);  
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
    
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