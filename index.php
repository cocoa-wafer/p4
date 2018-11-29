<?php 

namespace Blog;

//session start
require 'vendor/autoload.php' ;

use Blog\Controller\PostController;
use Blog\Controller\CommentController;
use Blog\Controller\AdminController;


//test twig.

/*$loader = new \Twig_Loader_Array(array(
    'index' => 'Hello {{ name }}!',
));
$twig = new \Twig_Environment($loader);

echo $twig->render('index', array('name' => 'Fabien')); */

$page = "home";

if (isset($_GET['p'])) {
    $page = $_GET['p'];
}


//rendu twig
$loader = new \Twig_Loader_Filesystem(__DIR__.'/src/View');

$twig = new \Twig_Environment($loader, [
    'cache' => false,
]);




switch ($page) {

    case 'home': echo $twig->render('home.twig');
        break;
    case 'contact' : echo $twig->render('contact.twig');
        break;
    default : echo $twig->render('erreur.twig');
}