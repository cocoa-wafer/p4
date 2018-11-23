<?php 

namespace Blog\Model;

class Comment {
    
    private $id;
    private $postId;
    private $author;
    private $comment;
    private $comment_date;
    
    function __construct(array $donnees) {
        $this->hydrate($donnees);
        
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
    
    function setPostId($postId) {
        $postId = (int)$postId;
        if ($postId >0) {
            $this->postId = $postId;
        }
    }    
    
    function setAuthor($author) {
        if(is_string($author)) {
            $this->author = $author;
        }
    }
    
    function setComment($comment) {
        if(is_string($comment)) {
            $this->comment = $comment;
        }
    }        
    
    function setDate($date) {
        $this->comment_date=$date;
    }

    
    function getId() { return $this->id;}
    function getPostId() { return $this->postId;}
    function getAuthor() { return $this->author;}
    function getComment() { return $this->comment;}
    function getCommentdate() { return $this->comment_date;}    
    
}