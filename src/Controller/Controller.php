<?php 

namespace Blog\Controller;
use Twig_Environment;
use Twig_Loader_Filesystem;
use Twig_Extension_Debug;
    
 class Controller {
     
     protected $twig;
     
     
     public function __construct() {
           // on crée un environnement twig  qui prend en compte le dossier ou sont les vues, et un tableau d'options à passer en true en prod. 
         // on déclare aussi les deux autres pr péter les bugs et afficher les variables superglobales session, post, et get.
         // go admin controller pour la suire 
         
         $this->twig = new Twig_Environment(
             new Twig_Loader_Filesystem(array('./src/View')), 
             array( 
                'cache' => false, 
                'debug' => true, 
            ) 
         );
         
        $this->twig->addExtension(new Twig_Extension_Debug());
        $this->twig->addGlobal("_session",$_SESSION);
        $this->twig->addGlobal("_post",$_POST);
        $this->twig->addGlobal("_get",$_GET);
     } 

}