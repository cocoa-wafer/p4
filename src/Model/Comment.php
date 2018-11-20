<?php 

class Comment {
    
    private $_id;
    private $_postId;
    private $_author;
    private $_comment;
    private $_comment_date;
    
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
            $this->_id = $id;
        }
    }
    
    function setPostId($postId) {
        $postId = (int)$postId;
        if ($postId >0) {
            $this->_postId = $postId;
        }
    }    
    
    function setAuthor($author) {
        if(is_string($author)) {
            $this->_author = $author;
        }
    }
    
    function setComment($comment) {
        if(is_string($comment)) {
            $this->_comment = $comment;
        }
    }        
    
    function setDate($date) {
        $this->_comment_date=$date;
    }

    
    function getId() { return $this->_id;}
    function getPostId() { return $this->_postId;}
    function getAuthor() { return $this->_author;}
    function getComment() { return $this->_comment;}
    function getCommentdate() { return $this->_comment_date;}    
    
}