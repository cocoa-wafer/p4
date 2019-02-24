<?php 
namespace Blog\Model\Manager;

use Blog\Model\Entity\Manager;

class CommentManager extends Manager {
    
    
  public function createComment(Comment $comment) { 
    $array =(array('post_id' => $comment->getPostId(),
                   'author'=>$comment->getAuthor(),
                   'comment' => $comment->getComment(),
                   'arborescence' => $comment->getArborescence(),
                   'comment_parent' => $comment->getCommentParent()
                  )); 
      
  return $this->insert('INSERT INTO comments(post_id, author,comment,comment_date,arborescence,comment_parent) VALUES(:post_id,:author,:comment,NOW(),:arborescence,:comment_parent)',$array);
  }    
    
  public function deleteComment($id) {
    $array=(array('id'=>$id));
   return  $this->insert('DELETE FROM comments WHERE id =:id',$array);
  }   
    
  public function getComment($id) {
    $array =(array('id'=>$id));
    return $this->get('SELECT * FROM comments WHERE id=:id',$array,'Comment');
    
  }  

  public function getCommentWithParent($comment_parent) {
    $array =(array('comment_parent'=>$comment_parent));
    return $this->get('SELECT * FROM comments WHERE comment_parent=:comment_parent',$array,'Comment');

  }
    
    // à modifier pour arobrescence todo
  public function getListComments($post_id) { 
      $array =(array('post_id'=>$post_id));
    return $this->getListWithId('SELECT * FROM comments WHERE post_id=:post_id',$array, 'Comment');   
  }    
    
  public function signalComment($id) { 
    $array=(array('id'=>$id));
   return $this->insert('UPDATE comments SET attente_moderation =1 WHERE ID =:id',$array);
  } 
    
    public function acceptComment($id) {    
    $array=(array('id'=>$id));
   return $this->insert('UPDATE comments SET attente_moderation =0 WHERE ID =:id',$array);    
    }
    
    public function getSignaledComments() {  
     return $this->getList('SELECT * FROM comments WHERE attente_moderation = 1','Comment');    
      }
}