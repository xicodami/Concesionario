<?php
class Conexion {

    public static function Connection() {
        $conexion = new mysqli("localhost","root","","concesionario");
        return $conexion;
    }

}
?>