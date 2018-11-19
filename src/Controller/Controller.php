<?php 

abstract class Controller {
    
//déclarer twig pour réutiliser partout ailleurs
    
    private $_postManager;
    private $_commentManager;
    private $_adminManager;
    
    function __construct() {
        
        $postManager = new postManager();
        $commentManager = new commentManager();
        $adminManager = new adminManager();
    }
    
    
}



// recupere le modele necessaire puis affiche la vue correspondante
// verifie que les infos récupérées sont valides ? (try / catch)