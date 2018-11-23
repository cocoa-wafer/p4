<?php 

namespace Blog\index;

// routeur 

// session start puis les autoload de composer 

//session start
require 'vendor/autoload.php' ;

//transformer les require en namespace
require 'PostController';
require 'CommentController';
require 'AdminController';

//test twig.
$loader = new Twig_Loader_Array(array(
    'index' => 'Hello {{ name }}!',
));
$twig = new Twig_Environment($loader);

echo $twig->render('index', array('name' => 'Fabien'));



// recup donnees qui transitent, les tester pour validité (les échapper ici ?) puis lancer controller adéquat.