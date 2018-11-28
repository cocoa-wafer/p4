<?php 

namespace Blog\Model;

class Post {
    
    private $id;
    private $author;
    private $post;
    private $post_date;
    
    function __construct(array $donnees) {
        try{        $this->hydrate($donnees);}
        catch (Exception $e) {'impossible de créer lobjet';}
        
    }
    
    function hydrate(array $donnees) {
        foreach ($donnees as $key => $value) {
            $method = 'set'.ucfirst($key);  
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
        
    }
    
    function setId($id) {
        $id = (int)$id;
        if ($id >0) {
            $this->id = $id;
        }
    }
    
    function setAuthor($author) {
        if(is_string($author)) {
            $this->author = $author;
        }
    }
    
    function setPost($post) {
        if(is_string($post)) {
            $this->post = $post;
        }
    }        
    
    function setDate($date) {
        $this->post_date = $date;
    }
    
    function getId() { return $this->id;}
    function getAuthor() { return $this->author;}
    function getPost() { return $this->post;}
    function getPostdate() { return $this->post_date;}
    
    
}