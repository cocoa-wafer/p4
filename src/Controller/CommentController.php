<?php 

namespace Blog\Controller;

/* require_once '../Model/CommentManager.php';
require_once '../Model/Comment.php';
require_once 'Controller.php'; */

use Blog\Model\CommentManager ;
use Blog\Model\Comment ;
use Blog\Controller\Controller ;

class  CommentController extends Controller {
    
    
    public function addComment($author,$comment, $postId) { 
    $comment = new Comment([
        'author' => $author,
        'comment' => $comment,
        'postId' => $postId
    ]);
      

    $this->commentManager->createComment($comment);
    // render twig ici render view avant ajout mais avec celui en plus
    // issue: comment récup les infos précédentes pour les render ? session infos ?
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
  public function getListComments() { 

    $this->commentManager->getListComments();
    // twig en utilsiant tableau d'objets post
  } 
    
    public function signalComment($id) {
        
        $this->commentManager->signalComment($id);
    }
    
    
}
