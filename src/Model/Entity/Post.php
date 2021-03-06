<?php 

namespace Blog\Model\Entity;

use Blog\Model\Entity\Entity;

class Post extends Entity {
    
    private $id;
    private $author;
    private $post;
    private $post_date;
    private $img;
    private $titre;
    
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

    function setTitre($titre) {
        $this->titre = $titre;
    }

    function setImg($img) {
        $this->img = $img;
    }
    
    function getId() { return $this->id;}
    function getAuthor() { return $this->author;}
    function getPost() { return $this->post;}
    function getPostdate() { return $this->post_date;}
    function getTitre() { return $this->titre;}
    function getImg() { return $this->img;}
    
    
}
