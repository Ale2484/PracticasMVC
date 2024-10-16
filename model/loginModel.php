<?php
session_start();
require_once 'model/databaseModel.php';

class iniciarSession extends databaseModel{
    public function comprobarUsuario(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = $this->db->prepare('SELECT * FROM usuarios WHERE username = :username AND password = :password');
        $sql->bindParam(':username', $username);
        $sql->bindParam(':password', $password);
        $sql->execute();
        $resultado = $sql->fetch();
        if($resultado){
            $_SESSION['logueado'] = 'Si';
        } else{
            $_SESSION['logueado'] = 'Incorrecto';
        }
    }
}

?>