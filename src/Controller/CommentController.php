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
  
   $this->commentManager->createComment($comment);
   $_SESSION['message'] = "le commentaire a bien été ajouté";
   Header('Location: index.php?cible=post&id='.$postId);
  }  
    
    public function acceptComment($id) {
       return $this->commentManager->acceptComment($id);
    }
    
  public function deleteComment($id) { 
    $this->commentManager->deleteComment($id);
    $_SESSION['message'] = "le commentaire a bien été supprimé";
  }    
    
  public function getComment($id) { 
    $this->commentManager->getComment($id);
  }   
    
  public function getListComments($post_id) { 
    $this->commentManager->getListComments($_post_id);
  } 
    
    public function signalComment($id) {
        
        $this->commentManager->signalComment($id);
    }

    public function commentParent($comment_parent) {
      return $this->commentManager->getCommentWithParent($comment_parent);
    }
    
    
}