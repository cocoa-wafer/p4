<?php 

namespace Blog\Model\Entity;

use Blog\Model\Entity\Admin;
use Blog\Model\Entity\Post;
use Blog\Model\Entity\Comment;

abstract class Manager {
    
    protected $_db; 
    
  public function __construct()
      
  {
    $this->setDb();
  }
    
    public function setDb()
  {
      try {
             $this->_db = new \PDO('mysql:host=localhost;dbname=p4', 'root', ''); 
      }
      
      catch (Exception $e) {
          echo 'erreur'. $e->getMessage();
      }
  }
    
    //action simple
    public function insert($query,$array) {
        try{
        $q = $this->_db->prepare($query);
        $q->execute($array);
        }
      catch (Exception $e) {
          'erreur'.$e->getMessage();
      }
    }
    
        // retourne un seul objet
    public function getWithoutArray($query) {
        
        try{
            $q = $this->_db->prepare($query);
            $q ->execute();

            while ($donnees = $q->fetch())
          {
              $tableau = $donnees;
              
          }
          return $tableau;
            
        }
        
        catch (Exception $e) {
          'erreur'.$e->getMessage();
      }
        
    }
    
    // retourne un seul objet
    public function get($query,$array, $type) {
        
        try{
            $q = $this->_db->prepare($query);
            $q ->execute($array);
            
            $class = 'Blog\Model\Entity\\'.$type;
            $donnees = $q->fetch();
            return new $class($donnees);
            
        }
        
        catch (Exception $e) {
          'erreur'.$e->getMessage();
      }
        
    }
    
    
    //retourne une liste d'objets
    public function getListWithId($query,$array, $type) {
        $tableau = [];
        try {
            $q = $this->_db->prepare($query);
            $q ->execute($array);
            $class = 'Blog\Model\Entity\\'.$type;
            
            while ($donnees = $q->fetch())
          {
              $tableau[] = new $class($donnees);
              
          }
          return $tableau;
            
        } 
        catch (Exception $e) {
          'erreur'.$e->getMessage();
      }
    }
    
    //retourne une liste d'objets
    public function getList($query,$type) {
        $tableau = [];
        try {
            $q = $this->_db->prepare($query);
            $q ->execute();
            
            $class = 'Blog\Model\Entity\\'.$type;
            
            while ($donnees = $q->fetch())
          {
              $tableau[] = new $class($donnees);
          }
          return $tableau;
            
        } 
        catch (Exception $e) {
          'erreur'.$e->getMessage();
      }
    }

}