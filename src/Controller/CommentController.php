<?php 
namespace Blog\Controller;


use Blog\Model\Manager\CommentManager ;
use Blog\Model\Entity\Comment ;
use Blog\Controller\Controller ;

class  CommentController extends Controller {
    
    private $commentManager; 
    
    
    function __construct() {
        
         parent::__construct(); 

        $this->commentManager = new CommentManager();
    }
    
    public function addComment($author,$comment, $postId,$arborescence,$comment_parent) { 
        
    $comment = new Comment([
        'author' => $author,
        'comment' => $comment,
        'postId' => $postId,
        'arborescence' => $arborescence,
        'comment_parent' => $comment_parent

    ]);
  
   return $this->commentManager->createComment($comment);
    // render twig ici render view avant ajout mais avec celui en plus
    // issue: comment récup les infos précédentes pour les render ? session infos ?
  }  
    
    public function acceptComment($id) {
       return $this->commentManager->acceptComment($id);
    }
    
  public function deleteComment($id) { 
    $this->commentManager->deleteComment($id);
      
    // render view twig même que avant click sup mais sans le post en question 
    // issue : comment recup donnees utilisees dans le twig precedent ? session infos ?
  }    
    
  public function getComment($id) { 
    $this->commentManager->getComment($id);
    // render view twig avec tableau constitué des valeurs setters de getPost
  }   
    
  public function getListComments($post_id) { 
    $this->commentManager->getListComments();
    // twig en utilsiant tableau d'objets post
  } 
    
    public function signalComment($id) {
        
        $this->commentManager->signalComment($id);
    }

    public function commentParent($comment_parent) {
      return $this->commentManager->getCommentWithParent($comment_parent);
    }
    
    
}