<?php 

// routeur 

// session start puis les autoload de composer 

require 'vendor/autoload.php' ;



$loader = new Twig_Loader_Array(array(
    'index' => 'Hello {{ name }}!',
));
$twig = new Twig_Environment($loader);

echo $twig->render('index', array('name' => 'Fabien'));


// $db = new PDO()