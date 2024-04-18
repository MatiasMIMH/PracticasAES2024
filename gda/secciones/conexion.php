<?php
  function conexion() {
    $servidor = "192.168.111.250";
    $nombreBd = "gda";
    $usuario = "gestnet";
    $pass = "Aesmultimedia:1";
    $conexion = mysqli_connect($servidor,$usuario,$pass,$nombreBd);
      $conexion->query("SET NAMES utf8mb4");
      $conexion->set_charset('UTF-8');
    if ($conexion -> connect_error) {
      die("No se pudo conectar ");
    } else {
        return $conexion;
    }
  }

?>