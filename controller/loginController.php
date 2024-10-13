<?php
require_once 'model/loginModel.php';
require_once 'view/login.view.php';
class loginController{
    public function viewLogin(){
        $viewLogin = new loginView;
        $viewLogin->verLogin(); 
    }
    public function iniciarSession(){
        $iniciarSession = new iniciarSession;
        $iniciarSession->comprobarUsuario();
    }
}

?>