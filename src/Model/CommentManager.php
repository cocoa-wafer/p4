<?php 

require_once 'Manager.php';
require_once 'Comment.php';

class CommentManager extends Manager {
    
  public function createComment(Comment $comment) {
      
      try {
        
          $q=$this->_db->prepare('INSERT INTO comments(post_id,author, comment,comment_date) VALUES(:post_id,:author,:comment,NOW())');
          $q->execute(array(
            'post_id' => $comment->getPostId(),
          'author'=>$comment->getAuthor(),
          'comment'=>$comment->getComment(),
      ));
          echo 'entrée ajoutée';
        
      }
      catch (Exception $e) {
          'erreur'.$e->getMessage(); 
      }

  } 
    
  public function deleteComment($id) {
      
      try{
          $q = $this->_db->query('DELETE FROM comments WHERE id ='.$id);
          echo 'post supprimé';
      }
      catch (Exception $e) {
          echo 'Erreur' . $e->getMessage();
      }
  
  }    
    
  public function getComment($id) {
      
      try{
          $q = $this->_db->query('SELECT * FROM comments WHERE id='.$id);
          $donnees = $q->fetch();
        return new Comment($donnees);
    
  }    
      
        catch (Exception $e) {
          echo 'Erreur' . $e->getMessage();
      }
      
    }
  
      
  public function getListComments() { 
      $comments = [];
      
      try{
          $q = $this->_db->query('SELECT * FROM comments ORDER BY id');
          
          while ($donnees = $q->fetch())

          {

              $comments[] = new Comment($donnees);
          }

          return $comments;
        }
      
      catch (Exception $e) {
          echo 'Erreur' . $e->getMessage();
      }
  }  
      
      
  public function updateComment($id, $comment) { 
      
      try{
          $q = $this->_db->prepare('UPDATE comments SET comment =:comment WHERE ID ='.$id);
          $q->execute(array(
              'comment' => $comment
          ));
          echo 'mise à jour réussie <br/>';
          }
        
      catch (Exception $e) {
          echo 'Erreur' . $e->getMessage();
      }
 
  }        
    
}