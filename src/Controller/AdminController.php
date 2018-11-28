<?php 

namespace Blog\Controller;

use Blog\Model\Admin ;
use Blog\Model\AdminManager ;
use Blog\Controller\Controller ;
use Blog\Controller\CommentController ;
use Blog\Controller\PostController ;

class  AdminController extends Controller {
    
    protected $postController;
    protected $commentController;
    
    function __construct() {
        $this->postController = new PostController();
        $this->commentController = new CommentController();
    }
    
  public function getAdmin($login) { 
        $this->adminManager->getAdmin($login);
    // render view twig avec tableau constitué des valeurs setters de getPost
  }    
    public function addPost($author,$post) {
        
        $this->postController->addPost($author,$post);
    }
    public function deletePost($id) {
        
        $this->postController->deletePost($id);
    }
    public function updatePost($id,$post) {
        $this->postController->updatePost($id,$post);
    }
    public function getPost($id) {
        $this->postController->getPost($id);
    }
    public function getPostsList() {
        $this->postController->getPostsList();
    }
    public function deleteComment($id) {
        $this->commentController->deleteComment($id);
    }
    
    public function acceptComment($id) {
        $this->commentController->acceptComment($id);
    }
    
    public function getModerationList() {
        
        // récup la liste des commentaires stockés dans le session (sous forme de tableau d'objets)
        // soit on rajoute un cham dans db pour signifier que en attente de moderation, soit on crée un tableau d'objets qu'on stocke dans le storage. -> champ supplémentaire dans table comments plutot. 
        // comme çà, quand clic, "modérer"-> commentManager-> signaler () { ajoute champ dans db} ensuite repris dans admin controller. dans admin controlelr,  si clic supprimer, supprime de db, sinon supprime le champ de la db.
    }
    
}