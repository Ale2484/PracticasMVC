<?php
class database{
    public static function conexion(){
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=mvcpracticas' , 'root' , '');
            return $conexion;
        } catch (PDOException $e) {
            echo 'No se ha podido establecer conexion con la base de datos' . $e->getMessage();
        }
    }
}

?>