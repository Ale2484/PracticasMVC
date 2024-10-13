<?php
require_once 'model/databaseModel.php';

class iniciarSession extends databaseModel{
    public function comprobarUsuario(){
        if($this->db){
            echo "Si funciona";
        } else{
            echo "No funciona";
        }
    }
}

?>