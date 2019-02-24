<?php 

namespace Blog\Controller;

use Blog\Model\Entity\Admin ;
use Blog\Model\Manager\AdminManager ;
use Blog\Model\Manager\PostManager ;
use Blog\Model\Manager\CommentManager ;
use Blog\Controller\Controller;

class  AdminController extends Controller {

    protected $adminManager;
    protected $postManager;
    protected $commentManager;
    
    function __construct() {
        
        //récup constructeur parent pour twig puis execute code en dessous sans écraser le twig du coup.
        parent::__construct(); 

        $this->adminManager = new AdminManager();
        $this->postManager = new PostManager();
        $this->commentManager = new CommentManager();

    }
    
  public function getAdmin() { 
     return   $this->adminManager->getAdmin();
  }  
    
    public function connexion() {
        return $this->twig->render('Admin/connexion.twig');
    }
    
    public function accueilBo() {
        return $this->twig->render('Admin/accueil_bo.twig',array(
            "posts" => $this->postManager->getPostsList(),
            "comments" => $this->commentManager->getSignaledComments()

        ));
    }


    public function acceptComment($id) {
       return $this->commentManager->acceptComment($id);
    }
    
    
    public function getModerationList() {
        
        return $this->adminManager->getModerationList();

    }
    
   public function accueil() {
        return $this->twig->render('Admin/accueil.twig', array(
            "accueil" => $this->postManager->getPostsList()
        ));
    } 
    
}