<?php 

require_once 'Manager.php';
require_once 'Post.php';

class PostManager extends Manager {
    
    
  public function addPost(Post $post) {
      
    $array = (array('author'=>$post->getAuthor(),'post'=>$post->getPost()));  
    $this->insert('INSERT INTO posts(author,post,post_date) VALUES(:author,:post,NOW())',$array);

  } 
    
  public function deletePost($id) {
      
    $array=(array('id'=>$id));
    $this->insert('DELETE FROM posts WHERE id =:id',$array);

  }    
    
  public function getPost($id) {
      
    $array =(array('id'=>$id));
    $result =  $this->get('SELECT * FROM posts WHERE id=:id',$array,'Post');
      
  }    

  
  public function getPostsList() { 
      $posts = $this->getList('SELECT * FROM posts ORDER BY id','Post');
      
  }  
      
      
  public function updatePost($id, $post_content) { 
      
      $array=(array('post'=>$post_content,'id'=>$id));
      $this->insert('UPDATE posts SET post =:post_content WHERE ID =:id',$array);
 
  }    
    
}



    