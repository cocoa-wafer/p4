<?php 

namespace Blog\Model;


use Blog\Model\Manager;

class AdminManager extends Manager {

    
    public function getAdmin() {
        
        $result =  $this->getWithoutArray('SELECT * FROM admin');
        return $result;
      
    }
    
    public function getModerationList() { 
    
    return $this->getList('SELECT * FROM comments WHERE attente_moderation=1     ORDER BY id','Comment');
      
  }  
    
    
    public function getId() { return $this->id;}
    public function getLogin() {return $this->login;}
    public function getPassword() {return $this->password;}
        
}