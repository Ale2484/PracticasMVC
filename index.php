<?php
require_once 'autoload.php';
$uri = $_SERVER['REQUEST_URI'];
switch ($uri) {
    case '/':
        echo "/";
        break;
    case '/login':
        $login = new loginController;
        $login->viewLogin();
        break;
    case '/iniciarSession':
        $login = new loginController;
        $login->iniciarSession();
        break;
    default:
        echo "No se ha encontrado";
        break;
}
?>
