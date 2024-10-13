<?php

require_once 'database.php';

class databaseModel{
    public $db;
    public function __construct(){
        $this->db = database::conexion();
    }
}

?>