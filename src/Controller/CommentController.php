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
    
    public function addComment($author,$comment, $postId) { 
        
      $comment = new Comment([
          'author' => $author,
          'comment' => $comment,
          'postId' => $postId
      ]);

    $this->commentManager->createComment($comment);
    $_SESSION['message'] = "le commentaire a bien été ajouté";
    $_SESSION['message_affiche'] = 1;
    header('Location: index.php?cible=post&id='.$postId);
  }  
    
  public function acceptComment($id) {
    $this->commentManager->acceptComment($id);
    header('Location: index.php?cible=connexion');
  }
    
  public function deleteComment($id) { 
    $this->commentManager->deleteComment($id);
    $_SESSION['message'] = "le commentaire a bien été supprimé";
    $_SESSION['message_affiche'] = 1;
    header('Location: index.php?cible=connexion');
  }    
    
  public function getComment($id) { 
    $this->commentManager->getComment($id);
  }   
    
  public function getListComments($post_id) { 
    $this->commentManager->getListComments($_post_id);
  } 
    
    public function signalComment($id) {  
        $this->commentManager->signalComment($id);
        $_SESSION['message'] = "le commentaire a bien été signalé";
        $_SESSION['message_affiche'] = 1;
        header('Location: index.php?cible=post&id='.$_GET['id']);
    }
      
}