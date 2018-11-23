<?php 

namespace Blog\Controller;

require_once '../Model/AdminManager.php';
require_once '../Model/Admin.php';
require_once 'Controller.php';

use Blog\Model\Admin as Admin;

class  AdminController extends Controller {
    
  public function addAdmin($login,$password) { 
    $admin = new Admin([
        'login' => $login,
        'password' => $password
    ]);
      

    $this->adminManager->addAdmin($admin);
    // render twig ici render view avant ajout mais avec celui en plus
    // issue: comment récup les infos précédentes pour les render ? session infos ?
  }    
    
  public function deleteAdmin($id) { 

    $this->adminManager->deleteAdmin($id);
      
    // render view twig même que avant click sup mais sans le post en question 
    // issue : comment recup donnees utilisees dans le twig precedent ? session infos ?
  }    
  public function getAdmin($id) { 

    $this->adminManager->getAdmin($id);
    // render view twig avec tableau constitué des valeurs setters de getPost
  }    

    
}