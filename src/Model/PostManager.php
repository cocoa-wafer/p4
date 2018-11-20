<?php 

require_once 'Manager.php';
require_once 'Post.php';

class PostManager extends Manager {
    
    
  public function addPost(Post $post) {
      
      try {
        
          $q=$this->_db->prepare('INSERT INTO posts(author,post,post_date) VALUES(:author,:post,NOW())');
          $q->execute(array(
          'author'=>$post->getAuthor(),
          'post'=>$post->getPost(),
      ));
          echo 'entrée ajoutée';
        
      }
      catch (Exception $e) {
          'erreur'.$e->getMessage(); 
      }

  } 
    
  public function deletePost($id) {
      
      try{
          $q = $this->_db->query('DELETE FROM posts WHERE id ='.$id);
          echo 'post supprimé';
      }
      catch (Exception $e) {
          echo 'Erreur' . $e->getMessage();
      }
  
  }    
    
  public function getPost($id) {
      
      try{
          $q = $this->_db->query('SELECT * FROM posts WHERE id='.$id);
          $donnees = $q->fetch();
        return new Post($donnees);
    
  }    
      
        catch (Exception $e) {
          echo 'Erreur' . $e->getMessage();
      }
      
    }
  
      
  public function getPostsList() { 
      $posts = [];
      
      try{
          $q = $this->_db->query('SELECT * FROM posts ORDER BY id');
          
          while ($donnees = $q->fetch())

          {

              $posts[] = new Post($donnees);
          }

          return $posts;
        }
      
      catch (Exception $e) {
          echo 'Erreur' . $e->getMessage();
      }
  }  
      
      
  public function updatePost($id, $post_content) { 
      
      try{
          $q = $this->_db->prepare('UPDATE posts SET post =:post_content WHERE ID ='.$id);
          $q->execute(array(
              'post' => $post_content
          ));
          echo 'mise à jour réussie <br/>';
          }
        
      catch (Exception $e) {
          echo 'Erreur' . $e->getMessage();
      }
 
  }    
    
}


    