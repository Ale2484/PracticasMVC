<?php
function cargarClase($nombreClase){
    require_once "controller/$nombreClase.php";
}
spl_autoload_register("cargarClase");
?>