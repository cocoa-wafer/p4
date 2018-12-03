<?php 

namespace Blog\Model;

use Blog\Model\Admin;
use Blog\Model\Post;
use Blog\Model\Comment;

abstract class Manager {
    
    protected $_db; 
    
   /* const POST = new Post();
    const COMMENT = new Comment();
    const ADMIN = new Admin(); */
    
  public function __construct()
      
  {
    $this->setDb();
  }
    
    public function setDb()
  {
      try {
             $this->_db = new \PDO('mysql:host=localhost;dbname=p4', 'root', ''); 
          echo 'connexion réussie';
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
        echo 'success insert';
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
            
            $class = 'Blog\Model\\'.$type;
            $donnees = $q->fetch();
            echo "get réussi";
            return new $class($donnees);
            
        }
        
        catch (Exception $e) {
          'erreur'.$e->getMessage();
      }
        
    }
    
    //retourne une liste d'objets
    public function getList($query,$type) {

        try {
            $q = $this->_db->prepare($query);
            $q ->execute();
            
            $class = 'Blog\Model\\'.$type;
            
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