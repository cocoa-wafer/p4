<?php 

//penser aux test vérification try / catch / throw exception pour vérif validité paramètres. 
// rempalcer require par nametags
// 1 branch pour twig 


require_once 'PostManager.php';
require_once 'Post.php';

class  PostController extends Controller {
    
  public function addPost($author,$post) { 
    $post = new Post([
        'author' => $author,
        'post' => $post
    ]);
      

    $_postManager->addPost($post);
    // render twig ici render view avant ajout mais avec celui en plus
    // issue: comment récup les infos précédentes pour les render ? session infos ?
  }    
  public function deletePost($id) { 

    $_postManager->deletePost($id);
      
    // render view twig même que avant click sup mais sans le post en question 
    // issue : comment recup donnees utilisees dans le twig precedent ? session infos ?
  }    
  public function getPost($id) { 

    $_postManager->getPost($id);
    // render view twig avec tableau constitué des valeurs setters de getPost
  }    
  public function getPostsList() { 

    $_postManager->getPostsList();
    // twig en utilsiant tableau d'objets post
  }    
  public function updatePost($id, $post) { 

    $_postManager->updatePost($id,$post);
    // render view du post modifié, en réutilisant l'id envoyée en paramètres.
  }       
    
}
