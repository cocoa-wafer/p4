<?php 

namespace Blog\Model\Manager;


use Blog\Model\Manager\Manager;

class AdminManager extends Manager {

    
    public function getAdmin() {
        
        $result =  $this->getWithoutArray('SELECT * FROM admin');
        return $result;
      
    }
        
}
