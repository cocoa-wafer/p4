<?php 
//todo ce soir : gérer les messages plus suppressioon de ceux ci
//todo, quand connexion, pas message tout de suite, gérer çà aussi, tout décalé

namespace Blog;

session_start();
require 'vendor/autoload.php' ;

use Blog\Controller\PostController;
use Blog\Controller\CommentController;
use Blog\Controller\AdminController;

$admin = new AdminController() ;
$post = new PostController() ;
$comment = new CommentController() ;

$cible = isset ($_GET['cible']) ? htmlspecialchars($_GET['cible']) : '' ;

$aConnexion = $admin->getAdmin();

switch ($cible) {
    case 'logged':
        $_SESSION=[];
        session_destroy();
        Header('Location:index.php');
        break;
        
    case 'creer' : //todo checker si les echo restent nécessaires
        echo $post-> creerPost();
        break;
        
    case 'modifier':
        echo $post->updatePost($_GET['post']);
        break; 

    case 'updating':
        $post->updatingPost($_POST['post'],$_POST['author'],$_POST['titre'],$_GET['id']);
        break;

    case 'creation':
        $post->addPost($_POST['author'],$_POST['post'],$_POST['titre']);
        break;

    case 'liste' : 
        echo $post->getPostsList();
        break;

    case 'comment' :
        if (isset($_POST['author'])) {
            $comment->addComment($_POST['author'], $_POST['comment'], $_GET['id'], $_GET['arborescence'], $_GET['comment_parent']);
        }
        break;

    case 'post' :
        if (isset($_GET['action'])) {
            $post->updatingPost($_POST['post'],$_POST['author'],$_POST['titre'],$_GET['id']);
            header('Location:index.php?cible=connexion');
        } else {
            echo $post->getPost(htmlspecialchars($_GET['id']));
        }
        break;
        
    case 'connexion' :
        if (isset($_POST['login']) && htmlspecialchars($_POST['login']) == $aConnexion['login'] && isset($_POST['password']) && htmlspecialchars($_POST['password']) == $aConnexion['password']) {
            echo $admin->accueilBo();
        }
        else if (isset($_SESSION['logged']) && ($_SESSION['logged'] == true)){
            echo $admin->accueilBo();
        }  
        else if (isset($_POST['update'])) {
            $post->updatePost();
        } 
        else {
            echo $admin->connexion();
        }
        break;

    case 'supprimer':
    case 'accepter':
        echo $admin->accueilBo();
        break;
    
    default :  
        echo $admin->accueil();
}  