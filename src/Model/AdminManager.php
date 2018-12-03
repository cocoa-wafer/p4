<?php 

namespace Blog\Model;


use Blog\Model\Manager;

class AdminManager extends Manager {
    
    
    // si on part du principe qu'on peut ajouter des admin ou en supprimer
  /* public function addAdmin(Admin $admin) {
       
       $array =(array('login'=>$admin->getLogin(),'password' => $admin->getPassword()));   
       $this->insert('INSERT INTO admin(login,password) VALUES(:admin,:password',$array);
        
    }
    
    public function deleteAdmin($id) {
        
        $array=(array('id'=>$id));
        $this->insert('DELETE FROM admin WHERE id =:id',$array);
        
    } */
    
    // si on part du principe que admin est dans db et que zéro ajout possible
    
    public function getAdmin($login) {
        
        $array =(array('login'=>$login));
        $result =  $this->get('SELECT * FROM admin WHERE login=:login',$array,'Admin');
        return $result;
      
    }
    
    
    public function getId() { return $this->id;}
    public function getLogin() {return $this->login;}
    public function getPassword() {return $this->password;}
        
}