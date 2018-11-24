<?php 

// routeur 

// session start puis les autoload de composer 

//session start
require 'vendor/autoload.php' ;

//transformer les require en nametags
/* require 'PostController';
require 'CommentController';
require 'AdminController'; */

//test twig.
/* $loader = new Twig_Loader_Array(array(
    'index' => 'Hello {{ name }}!',
));
$twig = new Twig_Environment($loader);

echo $twig->render('index', array('name' => 'Fabien')); */

// recup donnees qui transitent, les tester pour validité (les échapper ici ?) puis lancer controller adéquat.


$page = 'home';

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
    default : echo 'page introuvable';
}