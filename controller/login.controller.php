<?php
require_once 'view/login.view.php';
class loginController{
    public function viewLogin(){
        $viewLogin = new loginView;
        $viewLogin->verLogin(); 
    }
}
?>