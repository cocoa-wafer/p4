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
    // render view twig avec tableau constitué des valeurs setters de getPost
  }    
    //PC pas AC, rien à faire là comme deletepost / comment 
    public function addPost($author,$post) {
        $post = new Post([
        'author' => $author,
        'post' => $post
        ]);
        
      return  $this->postManager->addPost($post);
    }
      
    
    public function deletePost($id) {
        
        // utiliser le manager plutot que new controller 
      return  $this->postManager->deletePost($id);
    }
    public function updatePost($id,$post) {
      return   $this->postManager->updatePost($id,$post);
    }
    public function getPost($id) {
      return  $this->postManager->getPost($id);
    }
    public function getPostsList() {
       
        // pour render les infos récup dans le index. prend le fichier destinataire depuis le chemin déclaré dans controller,  et prend un tableau variable / retour de la requete requete
        // go index pour la suite 
        return $this->twig->render('test.twig',array(
            'liste' =>  $this->postManager->getPostsList()
        ));
    }
    public function deleteComment($id) {
       return $this->commentManager->deleteComment($id);
    }
    
    public function acceptComment($id) {
       return $this->commentManager->acceptComment($id);
    }
    
    public function getModerationList() {
        
        return $this->adminManager->getModerationList();

    }
    
}