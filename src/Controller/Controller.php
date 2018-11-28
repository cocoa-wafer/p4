<?php 

namespace Blog\Controller;


use Blog\Model\CommentManager ;
use Blog\Model\PostManager ;
use Blog\Model\AdminManager;

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