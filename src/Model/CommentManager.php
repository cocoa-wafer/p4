<?php 
//require Comment
    require_once 'Manager.php';
    require_once 'Comment.php';

class CommentManager extends Manager {
    

    
  public function createComment(Comment $comment) { 
      
    $array =(array('post_id' => $comment->getPostId(),'author'=>$comment->getAuthor(),'comment' => $comment->getComment()));   
    $this->insert('INSERT INTO comments(post_id, author,comment,comment_date) VALUES(:post_id,:author,:comment,NOW())',$array);

  }    
  public function deleteComment($id) {
      
    $array=(array('id'=>$id));
    $this->insert('DELETE FROM comments WHERE id =:id',$array);
  
  }    
  public function getComment($id) {
      
      
    $array =(array('id'=>$id));
    return $this->get('SELECT * FROM comments WHERE id=:id',$array,'Comment');
    
  }    
  public function getListComments() { 
      
    return $this->getList('SELECT * FROM comments ORDER BY id','Comment');
      
  }    
    
  public function signalComment($id) { 

    $array=(array('id'=>$id));
    $this->insert('UPDATE comments SET attente_moderation =TRUE WHERE ID =:id',$array);

  } 
    
}