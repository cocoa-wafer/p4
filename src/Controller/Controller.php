<?php 
require_once '../Model/CommentManager.php';
require_once '../Model/PostManager.php';
require_once '../Model/AdminManager.php';

 class Controller {
    
//déclarer twig pour réutiliser partout ailleurs
    
    protected $_postManager;
    protected $_commentManager;
    protected $_adminManager;
    
    function __construct() {
        
        $this->_postManager = new PostManager();
        $this->_commentManager = new CommentManager();
        $this->_adminManager = new AdminManager();
    }
    
    
}



// recupere le modele necessaire puis affiche la vue correspondante
// verifie que les infos récupérées sont valides ? (try / catch)