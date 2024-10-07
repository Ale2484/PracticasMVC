<?php
//Controladores
require_once 'controller/login.controller.php';
$uri = $_SERVER['REQUEST_URI'];
switch ($uri) {
    case '/':
        echo "/";
        break;
    case '/login':
        $login = new loginController;
        $login->viewLogin();
        break;
    
    default:
        
        break;
}
?>
