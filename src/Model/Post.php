<?php 

class Post {
    
    private $_id;
    private $_author;
    private $_post;
    private $_post_date;
    
    function __construct(array $donnees) {
        $this->hydrate($donnees)
        
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
            $this->_id = $id;
        }
    }
    
    function setAuthor($author) {
        if(is_string($author)) {
            $this->_author = $author;
        }
    }
    
    function setPost($post) {
        if(is_string($post)) {
            $this->_post = $post;
        }
    }        
    
    function setDate($date) {}

    
    function id() { return $this->_id}
    function author() { return $this->_author}
    function post() { return $this->_post}
    function postdate() { return $this->_post_date}
    
    
}