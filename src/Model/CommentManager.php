<?php 
//require Comment
    require_once 'Manager.php';
    require_once 'Comment.php';

class CommentManager extends Manager {
    

    
  public function createComment(Comment $comment) { 
      
    $array =(array('post_id' => $comment->postId(),'author'=>$comment->author(),'comment' => $comment->comment()));   
    $this->insert('INSERT INTO comments(post_id, author,comment,comment_date) VALUES(:post_id,:author,:comment,NOW())',$array);

  }    
  public function deleteComment($id) {
      
    $array=(array('id'=>$id));
    $this->insert('DELETE FROM comments WHERE id =:id',$array);
  
  }    
  public function getComment($id) {
      
      
    $array =(array('id'=>$id));
    $result =  $this->get('SELECT * FROM comments WHERE id=:id',$array,'Comment');
    
  }    
  public function getListComments() { 
      
    $comments = $this->getList('SELECT * FROM comments ORDER BY id','Comment');
      
  }    
    
}