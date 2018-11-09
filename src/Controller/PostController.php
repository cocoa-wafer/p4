<?php 

class  PostController extends Controller {
    
  public function addPost(Post $post) { }    
  public function deletePost(Post $post) {  }    
  public function getPost() {  }    
  public function getPosts() {  }    
  public function updatePost() {  }       
    
}


      //recup infos en Get puis les passe en paramètre à PostManager->methode() , requête revient puis envoie résultat à la vue