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
    
    public function creerPost() {
         return $this->twig->render('tiny.twig');
    }

  public function addPost($author,$post,$titre) { 
    $post = new Post([
        'author' => $author,
        'post' => $post,
        'titre' => $titre
    ]);
      
    $this->postManager->addPost($post);

  }    
  public function deletePost($id) { 
    $this->postManager->deletePost($id);

  }    
    public function getPost($id) {
        return $this->twig->render('postview.twig',
        array(
            'post' =>  $this->postManager->getPost($id),
            'comments' => $this->commentManager->getListComments($id)
        ));

    }
    
    public function getPostsList() {
       
        return $this->twig->render('postslist.twig',array(
            'liste' =>  $this->postManager->getPostsList()
        ));
    }
  public function updatePost($id) { 
      return $this->twig->render('tiny.twig', array(
            "post" => $this->postManager->getPost($id)
      ));
  }  
    
    public function updatingPost($id,$post,$author,$titre) {
      $this->postManager->updatePost($id,$post,$author,$titre);
    }
    
}
