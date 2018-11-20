<?php 
require_once '../Model/CommentManager.php';
require_once '../Model/PostManager.php';
require_once '../Model/AdminManager.php';

 class Controller {
    
//déclarer twig pour réutiliser partout ailleurs
    
    protected $postManager;
    protected $commentManager;
    protected $adminManager;
    
    function __construct() {
        
        $this->postManager = new PostManager();
        $this->commentManager = new CommentManager();
        $this->adminManager = new AdminManager();
    }
    
    
}


//ajouter des conditions pour pas que trois connexion simultanées.. sélectionner un des manager au lieu de lancer les trois à instanciation. 
// recupere le modele necessaire puis affiche la vue correspondante
// verifie que les infos récupérées sont valides ? (try / catch)