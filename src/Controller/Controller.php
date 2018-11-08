<?php 

abstract class Controller {
    
    function requireManager($nomManager) {
        return require $nomManager.'Manager.php' ;
    }
    
    function requireView($nomVue) {
        return require $nomVue.'View.php';
    }
    
    
    
    
}



// recupere le modele necessaire puis affiche la vue correspondante
// verifie que les infos récupérées sont valides ? (try / catch)