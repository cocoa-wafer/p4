<?php 

namespace Blog\Controller;

use Blog\Model\Post;
use Blog\Model\PostManager;
use Blog\Model\CommentManager;
use Blog\Controller\Controller;

class  PostController extends Controller {
    
    protected $postManager;
    protected $commentManager;
    
    function __construct() {

        parent::__construct(); 

        $this->postManager = new PostManager();
        $this->commentManager = new CommentManager();
    }
    
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
        return $this->twig->render('postview.twig',array(
            'post' =>  $this->postManager->getPost($id),
            'comments' => $this->commentManager->getListComments($id)
        ));

    }
    
    public function getPostsList() {
       
        // pour render les infos récup dans le index. prend le fichier destinataire depuis le chemin déclaré dans controller,  et prend un tableau variable / retour de la requete requete
        // go index pour la suite 
        return $this->twig->render('postslist.twig',array(
            'liste' =>  $this->postManager->getPostsList()
        ));
    }
  public function updatePost($id, $post) { 
    $this->postManager->updatePost($id,$post);
    // rendr view du post modifié, en réutilisant l'id envoyée en paramètres.
  }   
    
}
