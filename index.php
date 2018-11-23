<?php 

namespace Blog;

//session start

//autoload composer
require 'vendor/autoload.php' ;


/* require 'src/Controller/PostController.php';
require 'src/Controller/CommentController.php';
require 'src/Controller/AdminController.php'; */







//test twig.
$loader = new \Twig_Loader_Array(array(
    'index' => 'Hello {{ name }}!',
));
$twig = new \Twig_Environment($loader);

echo $twig->render('index', array('name' => 'Fabien'));



// recup donnees qui transitent, les tester pour validité (les échapper ici ?) puis lancer controller adéquat.