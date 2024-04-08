<?php
    function conexion(){
        $servername = "192.168.111.246";
        $nameBd = "ElementosWebGDA";
        $user = "root";
        $pass = "aesmultimedia";

        // Create connection
        $conexion = new mysqli($servername, $user, $pass, $nameBd);
    
        // Check connection
        if ($conexion->connect_error) {
            die("Conexión fallida: " . $conexion->connect_error);
        }
        return $conexion;
    }
?>