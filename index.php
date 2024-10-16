<?php
session_start();
require_once 'autoload.php';
$uri = $_SERVER['REQUEST_URI'];
switch ($uri) {
    case '/':
        echo "/";
        break;
    case '/login':
        if(isset($_SESSION['logueado']) && $_SESSION['logueado'] == 'Si'){
            header('Location: /home');
        } else{
            $login = new loginController;
            $login->viewLogin();
        }
        break;
    case '/iniciarSession':
        $login = new loginController;
        $login->iniciarSession();
        break;
    case '/home':
        if(isset($_SESSION['logueado']) && $_SESSION['logueado'] == 'Si'){ 
            $home = new homeController;
            $home->viewHome();
        } else{
            header('Location: /login');
        }
        break;
    case '/cerrarSession':
        $login = new loginController;
        $login->cerrarSession();
        break;
    default:
        echo "No se ha encontrado";
        break;
}
?>
