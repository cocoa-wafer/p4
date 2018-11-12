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
}