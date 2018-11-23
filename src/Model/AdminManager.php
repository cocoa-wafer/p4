<?php 

namespace Blog\Model;

require_once 'Manager.php';

class AdminManager extends Manager {
    
    public function addAdmin(Admin $admin) {
        
        try {
        
          $q=$this->_db->prepare('INSERT INTO admin(login,password) VALUES(:login,:password');
          $q->execute(array(
          'login'=>$admin->getLogin(),
          'password'=>$admin->getPassword(),
      ));
          echo 'admin ajouté';
        
      }
      catch (Exception $e) {
          'erreur'.$e->getMessage(); 
      }
        
    }
    
    public function deleteAdmin($id) {
        
        try{
          $q = $this->_db->query('DELETE FROM admin WHERE id ='.$id);
          echo 'admin supprimé';
      }
      catch (Exception $e) {
          echo 'Erreur' . $e->getMessage();
      }
        
    }
    
    public function getAdmin($id) {
        
        try{
          $q = $this->_db->query('SELECT * FROM admin WHERE id='.$id);
          $donnees = $q->fetch();
        return new Admin($donnees);
    
  }    
      
        catch (Exception $e) {
          echo 'Erreur' . $e->getMessage();
      }
      
}
        
    }

    
    
    


