<?php 

namespace Blog;

//session start
require 'vendor/autoload.php' ;

use Blog\Controller\PostController;
use Blog\Controller\CommentController;
use Blog\Controller\AdminController;


$page = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$test = $_SERVER['REQUEST_URI'];


$admin = new adminController();
switch ($page) {

    case 'admin' : echo $admin->getPostsList();
        break;
    default : echo $admin->getPostsList();
}




// comment utiliser twig depuis l'index.
/* $admin = new AdminController() ;
case "x": echo $admin -> methode(paramètres reçus en get) */




var_dump($page);
var_dump($test);