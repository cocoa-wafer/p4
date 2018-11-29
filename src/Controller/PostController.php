<?php 

namespace Blog\Controller;

use Blog\Model\Post;
use Blog\Model\PostManager;
use Blog\Controller\Controller;

class  PostController extends Controller {
    
  public function addPost($author,$post) { 
    $post = new Post([
        'author' => $author,
        'post' => $post
    ]);
      
    $this->postManager->addPost($post);
    // render twig ici render view avant ajout mais avec celui en plus
    // issue: comment récup les infos précédentes pour les render ? session infos ?
  }    
  public function deletePost($id) { 
    $this->postManager->deletePost($id);
      
    // render view twig même que avant click sup mais sans le post en question 
    // issue : comment recup donnees utilisees dans le twig precedent ? session infos ?
  }    
  public function getPost($id) { 
    $this->postManager->getPost($id);
    // render view twig avec tableau constitué des valeurs setters de getPost
  }    
  public function getPostsList() { 
    return $this->postManager->getPostsList();
    // twig en utilsiant tableau d'objets post
  }    
  public function updatePost($id, $post) { 
    $this->postManager->updatePost($id,$post);
    // rendr view du post modifié, en réutilisant l'id envoyée en paramètres.
  }   
    
public function Test() {
    $tableau = ["a"=>"b",
                "c"=>"d"];
    return $tableau;
}
    
}
