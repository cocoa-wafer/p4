<?php 

namespace Blog;

//session start
require 'vendor/autoload.php' ;

use Blog\Controller\PostController;
use Blog\Controller\CommentController;
use Blog\Controller\AdminController;


/* tentative routeur via base_uri   
$base_uri = $_SERVER['REQUEST_URI'];
$cible = str_replace('/tests/p4/index.php','',$base_uri);
*/

// routeur via $_GET['cible'];
$admin = new AdminController() ;

$cible = isset ($_GET['cible']) ? htmlspecialchars($_GET['cible']) : '' ;


switch ($cible) {

        //affiche tous les posts devrait etre un post controller du coup ?
    case 'liste' : echo $admin->getPostsList();
        break;
        // affiche un post en particulier
        // reste a regler pb de commentaires lies a un post.
    case 'post' : echo $admin->getPost(htmlspecialchars($_GET['id']));
        break;
    
    default : echo $admin->accueil();
}  