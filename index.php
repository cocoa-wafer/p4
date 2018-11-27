<?php 

namespace Blog;

//session start

//autoload composer
require 'vendor/autoload.php' ;


use Blog\Controller\PostController;
use Blog\Controller\CommentController;
use Blog\Controller\AdminController;




//test twig.
/* $loader = new \Twig_Loader_Array(array(
    'index' => 'Hello {{ name }}!',
));
$twig = new \Twig_Environment($loader);

echo $twig->render('index', array('name' => 'Fabien')); */



// recup donnees qui transitent, les tester pour validité (les échapper ici ?) puis lancer controller adéquat.