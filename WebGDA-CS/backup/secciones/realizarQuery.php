<?php
echo "hola";
    function queryImagenes($conexion, $idSeccion, $salida) {
        echo "dentro";
        $query = "SELECT * FROM imagenes WHERE fk_num_seccion = $idSeccion";
        $result = mysqli_query($conexion, $query);
    
        $row =  mysqli_fetch_array($result);

        switch($salida) {
            case "id":
                return $row[0];
            case "fk_num_seccion":
                return $row[1];
            case "url":
                return $row[2];
        }

        if ($result === false) {
            die("Error en la consulta: ".mysqli_error($conexion));
        }
    }
?>