<?php 

namespace Blog\Model;

use Blog\Model\Manager;

class PostManager extends Manager {
    
    
  public function addPost(Post $post) {
      
    $array = (array('author'=>$post->getAuthor(),'post'=>$post->getPost(), 'titre'=>$post->getTitre()));  
    $this->insert('INSERT INTO posts(author,post,titre,post_date) VALUES(:author,:post,:titre,NOW())',$array);
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
      
      
  public function updatePost($post, $author, $titre,$id) { 
    $array=(array('post'=>$post,'author'=>$author,'titre'=>$titre, 'id'=>$id));
    $this->insert('UPDATE posts SET post =:post, author=:author, titre =:titre WHERE ID =:id',$array);
  }   
    
    
    
}