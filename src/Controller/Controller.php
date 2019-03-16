<?php 

namespace Blog\Controller;

use Twig_Environment;
use Twig_Loader_Filesystem;
use Twig_Extension_Debug;
use \Twig_Extensions_Extension_Text;
    
 class Controller {
     
     protected $twig;
     
     
     public function __construct() {
         
         $this->twig = new Twig_Environment(
             new Twig_Loader_Filesystem(array('./src/View')), 
             array( 
                'cache' => false, 
                'debug' => true, 
            ) 
         );
         
        $this->twig->addExtension(new Twig_Extension_Debug());  
        $this->twig->addExtension(new \Twig_Extensions_Extension_Text());
        $this->twig->addGlobal("_session",$_SESSION);
        $this->twig->addGlobal("_post",$_POST);
        $this->twig->addGlobal("_get",$_GET);
     } 

} 
