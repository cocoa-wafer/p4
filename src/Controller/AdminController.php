<?php 

namespace Blog\Controller;

use Blog\Model\Admin ;
use Blog\Model\AdminManager ;
use Blog\Model\CommentManager ;
use Blog\Model\PostManager ;
use Blog\Model\Post ;

class  AdminController extends Controller {
    
    protected $postManager;
    protected $commentManager;
    protected $adminManager;
    
    function __construct() {
        
        //récup constructeur parent pour twig puis execute code en dessous sans écraser le twig du coup.
        parent::__construct(); 
        
        $this->postManager = new PostManager();
        $this->commentManager = new CommentManager();
        $this->adminManager = new AdminManager();
    }
    
  public function getAdmin($login) { 
     return   $this->adminManager->getAdmin($login);
  }  

    
    public function updatePost($id,$post) {
      return   $this->postManager->updatePost($id,$post);
    }
    public function getPost($id) {
        return $this->twig->render('postview.twig',array(
            'post' =>  $this->postManager->getPost($id),
            'comments' => $this->commentManager->getListComments($id)
        ));

    }
    public function getPostsList() {
       
        // pour render les infos récup dans le index. prend le fichier destinataire depuis le chemin déclaré dans controller,  et prend un tableau variable / retour de la requete requete
        // go index pour la suite 
        return $this->twig->render('postslist.twig',array(
            'liste' =>  $this->postManager->getPostsList()
        ));
    }

    
    //legit
    public function acceptComment($id) {
       return $this->commentManager->acceptComment($id);
    }
    
    //legit
    public function getModerationList() {
        
        return $this->adminManager->getModerationList();

    }
    
    //legit
    public function accueil() {
        return $this->twig->render('layout.twig',array(
            'liste' =>  $this->postManager->getPostsList()
        ));
    }
    
}