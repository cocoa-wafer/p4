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

    public function deconnexion() {
        $_SESSION=[];
        session_destroy();
        header('Location: index.php');
    }
    
    public function accueilBo() {
        if ($_SESSION['message_affiche']) {
            unset($_SESSION['message']);
            $_SESSION['message_affiche'] = 0;
          } 
        return $this->twig->render('Admin/accueil_bo.twig',array(
            "posts" => $this->postManager->getPostsList(),
            "comments" => $this->commentManager->getSignaledComments()

        ));
    }

    public function isLogged() {
        $_SESSION['logged'] = true;
        header('Location: index.php?cible=connexion');
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
    
    public function mentionsLegales() {
        return $this->twig->render('Admin/mentions.twig');
    }
    
}
