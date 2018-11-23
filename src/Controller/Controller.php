<?php 

namespace Blog\Controller;
    
require_once '../Model/CommentManager.php';
require_once '../Model/PostManager.php';
require_once '../Model/AdminManager.php';


use Blog\Model\CommentManager as CommentManager;
use Blog\Model\PostManager as PostManager;
use Blog\Model\AdminManager as AdminManager;

 class Controller {
    
//déclarer twig pour réutiliser partout ailleurs
    
    protected $postManager;
    protected $commentManager;
    protected $adminManager;

    function __construct() {
        
        $this->postManager = new PostManager();
        $this->commentManager = new CommentManager();
        $this->adminManager = new AdminManager();
    }
    
    
}



// recupere le modele necessaire puis affiche la vue correspondante
// verifie que les infos récupérées sont valides ? (try / catch)