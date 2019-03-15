<?php 

namespace Blog\Controller;

use Blog\Model\Entity\Post;
use Blog\Model\Manager\PostManager;
use Blog\Model\Manager\CommentManager;
use Blog\Controller\Controller;

class  PostController extends Controller {
    
    protected $postManager;
    protected $commentManager;
    
    function __construct() {

        parent::__construct(); 

        $this->postManager = new PostManager();
        $this->commentManager = new CommentManager();
    }
    
    public function creerPost() {
        if (isset($_SESSION['logged']) && ($_SESSION['logged'] == true)){
            return $this->twig->render('Post/postAdd.twig');
        } else {
            header("Location: index.php");
        }
    }

  public function addPost($author,$post,$titre) { 
    $post = new Post([
        'author' => $author,
        'post' => $post,
        'titre' => $titre
    ]);
      if (isset($_SESSION['logged']) && ($_SESSION['logged'] == true)){
        $this->postManager->addPost($post);
        $_SESSION['message'] = "l'article a bien été ajouté";
        $_SESSION['message_affiche'] = 1;
        header("Location: index.php?cible=connexion");
      } else {
          header('Location: index.php');
      }

  }  

  public function deletePost($id) {
      if (isset($_SESSION['logged']) && ($_SESSION['logged'] == true)){
          $this->postManager->deletePost($id);
          $_SESSION['message'] = "l'article a bien été supprimé"; 
          $_SESSION['message_affiche'] = 1;
          header("Location: index.php?cible=connexion");
      } else {
          header("Location: index.php"); 
      }

  }    

    public function getPost($id) {
      if ($_SESSION['message_affiche']) {
        unset($_SESSION['message']);
        $_SESSION['message_affiche'] = 0;
      } 

      return $this->twig->render('Post/postview.twig',
        array(
            'post' =>  $this->postManager->getPost($id),
            'comments' => $this->commentManager->getListComments($id)
       ));

     }
    
    public function getPostsList() {
        return $this->twig->render('Post/postslist.twig',array(
            'liste' =>  $this->postManager->getPostsList()
        ));
    }

  public function updatePost($id) { 
    if (isset($_SESSION['logged']) && ($_SESSION['logged'] == true)){
      return $this->twig->render('Post/postAdd.twig', array(
            "post" => $this->postManager->getPost($id)
      )); }
      else {
          header("Location: index.php"); 
      }
  }  
    
    public function updatingPost($id,$post,$author,$titre) {
      $this->postManager->updatePost($id,$post,$author,$titre);
      header ('Location: index.php?cible=connexion');
    }
    
}
