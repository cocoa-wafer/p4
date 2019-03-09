<?php 
//todo : gérer les messages plus suppressioon de ceux ci

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

// pendant soutenance préciser que pbs avec codacy mais pas de pbs de code pr autant. 
//try/catch 
// styliser séconnexion ainsi que message bien ajouté, supprimé etc. 
// générer du faux texte 
// si temps restant, modifier les url pour que plus clair 
// regarder quand même pour le singleton 
 

switch ($cible) {
    // deconnexion
    case 'logged':
        echo $admin-> deconnexion();
        break;
    // load template creation post    
    case 'creer' :
        echo $post-> creerPost();
        break;
    //add en bdd
    case 'creation':
        $post->addPost($_POST['author'],$_POST['post'],$_POST['titre']);
        break;
    //load template avec infos post   
    case 'modifier':
        echo $post->updatePost($_GET['post']);
        break; 
    // load liste des posts
    case 'liste' : 
        echo $post->getPostsList();
        break;
    //add comment en bdd et affiche
    case 'comment' :
        if (isset($_POST['author'])) {
            $comment->addComment($_POST['author'], $_POST['comment'], $_GET['id'], $_GET['arborescence'], $_GET['comment_parent']);
        }
        break;
    // commentaire accepté
    case 'accepter' : 
        $comment->acceptComment($_GET['comment']); 
        break;
    //load post en particulier ou bien modifie un post
    case 'post' :
        if (isset($_GET['action'])) {
            $post->updatingPost($_POST['post'],$_POST['author'],$_POST['titre'],$_GET['id']);
        } else {
            echo $post->getPost(htmlspecialchars($_GET['id']));
        }
        break;
    // teste tous les cas pour savoir si connexion ou back office    
    case 'connexion' :
        if (isset($_POST['login']) && htmlspecialchars($_POST['login']) == $aConnexion['login'] && isset($_POST['password']) && htmlspecialchars($_POST['password']) == $aConnexion['password']) {
            $admin->isLogged();
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
    // suprime un post ou un commentaire
    case 'supprimer' :
        if (isset($_GET['post'])){
            $post->deletePost($_GET['post']);
        }  else if (isset($_GET['comment'])) {
            $comment->deleteComment($_GET['comment']); 
        } 
        break;
    // page d'accueil par défaut
    default :  
        echo $admin->accueil();
}  