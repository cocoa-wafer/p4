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
       return $this->postManager->getPostsList();
    }
    public function deleteComment($id) {
       return $this->commentManager->deleteComment($id);
    }
    
    public function acceptComment($id) {
       return $this->commentManager->acceptComment($id);
    }
    
    public function getModerationList() {
        
        // récup la liste des commentaires stockés dans le session (sous forme de tableau d'objets)
        // soit on rajoute un cham dans db pour signifier que en attente de moderation, soit on crée un tableau d'objets qu'on stocke dans le storage. -> champ supplémentaire dans table comments plutot. 
        // comme çà, quand clic, "modérer"-> commentManager-> signaler () { ajoute champ dans db} ensuite repris dans admin controller. dans admin controlelr,  si clic supprimer, supprime de db, sinon supprime le champ de la db.
    }
    
}