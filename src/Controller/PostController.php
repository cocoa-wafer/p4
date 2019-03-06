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
         return $this->twig->render('Post/postAdd.twig');
    }

  public function addPost($author,$post,$titre) { 
    $post = new Post([
        'author' => $author,
        'post' => $post,
        'titre' => $titre
    ]);
    $_SESSION['message'] = "l'article a bien été ajouté";
    $this->postManager->addPost($post);
    header("Location: index.php?cible=connexion");

  }    
  public function deletePost($id) {
    $this->postManager->deletePost($id);

  }    
    public function getPost($id) {
    if (isset ($_GET['signaler'])) {
        $this->commentManager->signalComment($_GET['comment']);
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
      return $this->twig->render('Post/postAdd.twig', array(
            "post" => $this->postManager->getPost($id)
      ));
  }  
    
    public function updatingPost($id,$post,$author,$titre) {
      $this->postManager->updatePost($id,$post,$author,$titre);
      Header ('Location:index.php?cible=connexion');
    }
    
}
