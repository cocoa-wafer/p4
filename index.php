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


    case 'liste' : echo $post->getPostsList();
        break;

    case 'post' : echo $post->getPost(htmlspecialchars($_GET['id']));
        break;
        
    case 'connexion' : 
        if (isset($_POST['login']) && htmlspecialchars($_POST['login']) == $aConnexion['login'] && isset($_POST['password']) && htmlspecialchars($_POST['password']) === $aConnexion['password']) {
            echo $admin->accueilBo();
           // $_SESSION['logged'] = 'true';
        }
        else {
            echo $admin->connexion(); 
        }
        break;
    
    default :
        
        echo $admin->accueil();
}  