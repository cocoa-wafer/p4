<?php 

//penser aux test vérification try / catch / throw exception pour vérif validité paramètres. 
// rempalcer require par nametags
// 1 branch pour twig 


require_once '../Model/PostManager.php';
require_once '../Model/Post.php';
require_once 'Controller.php';

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

    $this->postManager->getPostsList();
    // twig en utilsiant tableau d'objets post
  }    
  public function updatePost($id, $post) { 

    $this->postManager->updatePost($id,$post);
    // rendr view du post modifié, en réutilisant l'id envoyée en paramètres.
  }       
    
}

