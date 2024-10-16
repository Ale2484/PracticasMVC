<?php
session_start();
require_once 'model/loginModel.php';

class loginController{
    public function viewLogin(){
        require_once 'view/login.view.php';
    }
    public function iniciarSession(){
        $iniciarSession = new iniciarSession;
        $iniciarSession->comprobarUsuario();
        if(isset($_SESSION['logueado'] ) && $_SESSION['logueado'] == 'Si'){
            header('Location: /home');
        } else{
            header('Location: /login');
        }
    }
    public function cerrarSession(){
        session_destroy();
        header('Location: /login');
    }
}

?>