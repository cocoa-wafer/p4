<?php 

abstract class Manager {
    
  protected $_db; 


  public function __construct()

  {

    $this->setDb();

  }
    
    public function setDb()

  {
      try {
             $this->_db = new PDO('mysql:host=localhost;dbname=p4', 'root', ''); 
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
        echo 'success';
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
            $donnees = $q->fetch();
            echo "get réussi";
            return new $type($donnees);
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
            while ($donnees = $q->fetch())
          {

              $posts[] = new $type($donnees);
          }

          return $posts;
            
        } 
        catch (Exception $e) {
          'erreur'.$e->getMessage();
      }
    }
}