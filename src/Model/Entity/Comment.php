<?php 
namespace Blog\Model\Entity;

use Blog\Model\Entity\Entity;

class Comment extends Entity {
    
    private $id;
    private $attente_moderation;
    private $postId;
    private $author;
    private $comment;
    private $comment_date;
    
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

    
    function getId() { return $this->id;}
    function getPostId() { return $this->postId;}
    function getAuthor() { return $this->author;}
    function getComment() { return $this->comment;}
    function getCommentdate() { return $this->comment_date;}   
    function getAttenteModeration() { return $this->attente_moderation;}  
    
}
