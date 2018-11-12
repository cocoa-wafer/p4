<?php 

//penser aux test vérification try / catch / throw exception pour vérif validité paramètres. 
// rempalcer require par nametags
// 1 branch pour twig 


require 'PostManager.php';
require 'Post.php';

class  PostController extends Controller {
    
  public function addPost($author,$post) { 
    $post = new Post([
        'author' => $author,
        'post' => $post
    ]);
      
    $postManager = new PostManager ; 
    $postManager->addPost($post);
    // render twig ici render view avant ajout mais avec celui en plus
    // issue: comment récup les infos précédentes pour les render ?
  }    
  public function deletePost($id) { 
    $postManager = new PostManager;
    $postManager->deletePost($id);
      
    // render view twig même que avant click sup mais sans le post en question 
    // issue : comment recup donnees utilisees dans le twig precedent ?
  }    
  public function getPost($id) { 
    $postManager = new PostManager;
    $postManager->getPost($id);
    // render view twig avec tableau constitué des valeurs setters de getPost
  }    
  public function getPostsList() { 
    $postManager = new PostManager;
    $postManager->getPostsList();
    // twig en utilsiant tableau d'objets post
  }    
  public function updatePost($id, $post) { 
    $postManager = new PostManager;
    $postManager->updatePost($id,$post);
    // render view du post modifié, en réutilisant l'id envoyée en paramètres.
  }       
    
}
