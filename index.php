<?php 

namespace Blog;

session_start();
require 'vendor/autoload.php' ;

use Blog\Controller\PostController;
use Blog\Controller\CommentController;
use Blog\Controller\AdminController;

// routeur via $_GET['cible'];
$admin = new AdminController() ;
$post = new PostController() ;
$comment = new CommentController() ;

$cible = isset ($_GET['cible']) ? htmlspecialchars($_GET['cible']) : '' ;

$aConnexion = $admin->getAdmin();

switch ($cible) {
        
        case 'creer' :
        echo $post-> creerPost();
        break;
        
    case 'modifier':
        echo $post->updatePost($_GET['post']);
       break; 

    case 'updating':
        $post->updatingPost($_POST['post'],$_POST['author'],$_POST['titre'],$_GET['id']);
        echo $admin->accueilBo();
        break;
    case 'liste' : 
    echo $post->getPostsList();
        break;

    case 'post' : 
        if (isset ($_POST['author'])) {
            $comment->addComment($_POST['author'],$_POST['comment'],$_GET['id'], $_GET['arborescence'],$_GET['comment_parent']);
        }
        echo $post->getPost(htmlspecialchars($_GET['id']));

        if (isset ($_GET['signaler'])) {
            $comment->signalComment($_GET['comment']);
        }
        
        break;
        
    case 'connexion' : 
    // si logges est true, on charge la page admin, sinon on charge la connexion.

        if (isset($_POST['login']) && htmlspecialchars($_POST['login']) == $aConnexion['login'] && isset($_POST['password']) && htmlspecialchars($_POST['password']) === $aConnexion['password']) {
            $_SESSION['logged'] = 'true';
            echo $admin->accueilBo();
        }
        else if ($_SESSION['logged'] = 'true'){
            if (isset($_POST['post'])) {
                $post->addPost($_POST['author'], $_POST['post'], $_POST['titre']);

            }
            echo $admin->accueilBo();

        } else if (isset($_POST['update'])) {
            $post->updatePost();
        }

        else {
            echo $admin->connexion(); 
        }
        break;
    case 'supprimer':
    if (isset($_GET['post'])){
        $post->deletePost($_GET['post']);
        echo $admin->accueilBo();

    } else if (isset($_GET['comment'])) {
        $comment->deleteComment($_GET['comment']); 
        echo $admin->accueilBo();
    } else {
        echo $admin->accueilBo();
    }
        break;
        
    case 'accepter':
    $comment->acceptComment($_GET['comment']); 
    echo $admin->accueilBo();

 
        break;
    
    default :
        
        echo $admin->accueil();
}  