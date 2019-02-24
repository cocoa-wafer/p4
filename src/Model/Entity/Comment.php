<?php 
namespace Blog\Model\Entity;

class Comment {
    
    private $id;
    private $attente_moderation;
    private $postId;
    private $author;
    private $comment;
    private $comment_date;
    private $arborescence;
    private $comment_parent;
    
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

    function setAttenteModeration($attente_moderation) {
        $this->attente_moderation =$attente_moderation;
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

    function setArborescence($arborescence) {
        $this->arborescence=$arborescence;
    }

    function setComment_parent($comment_parent) {
        $this->comment_parent=$comment_parent;
    }
    
    function getId() { return $this->id;}
    function getPostId() { return $this->postId;}
    function getAuthor() { return $this->author;}
    function getComment() { return $this->comment;}
    function getCommentdate() { return $this->comment_date;}  
    function getArborescence() { return $this->arborescence;}   
    function getCommentParent() { return $this->comment_parent;} 
    function getAttenteModeration() { return $this->attente_moderation;}  
    
}