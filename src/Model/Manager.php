<?php 

abstract class Manager {
    
  protected $_db; 


  public function __construct()

  {

    $this->setDb($db);

  }
    
    public function setDb(/PDO $db)

  {

    $this->_db = $db;

  }
}

//gere connexion base de donnees 