<?php 

namespace Blog\Model;

use Blog\Model\Manager;

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
    return $this->get('SELECT * FROM posts WHERE id=:id',$array,'Post');
      
  }    

  
  public function getPostsList() { 
    return $this->getList('SELECT * FROM posts ORDER BY id','Post');
      
  }  
      
      
  public function updatePost($post,$id) { 

    $array=(array('post'=>$post,'id'=>$id));
    $this->insert('UPDATE posts SET post =:post WHERE ID =:id',$array);

  }    
    
}

    