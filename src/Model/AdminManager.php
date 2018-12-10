<?php 

namespace Blog\Model;


use Blog\Model\Manager;

class AdminManager extends Manager {
    
    // si on part du principe que admin est dans db et que zéro ajout possible
    
    public function getAdmin($login) {
        
        $array =(array('login'=>$login));
        $result =  $this->get('SELECT * FROM admin WHERE login=:login',$array,'Admin');
        return $result;
      
    }
    
    public function getModerationList() { 
    
    return $this->getList('SELECT * FROM comments WHERE attente_moderation=1     ORDER BY id','Comment');
      
  }  
    
    
    public function getId() { return $this->id;}
    public function getLogin() {return $this->login;}
    public function getPassword() {return $this->password;}
        
}