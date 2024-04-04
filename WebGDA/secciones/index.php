
<?php 
    include("conexion.php");
    $conexion = conexion();

        $query = "SELECT * FROM imagenes WHERE fk_num_seccion = 1";
        $result = mysqli_query($conexion, $query);

        if (!$result) {
            die("Error en la consulta: ".mysqli_error($conexion));
        }
        $row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/estilos.css">
        <title>GDA Demoliciones Técnicas y Gestión de Amianto</title>
    </head>
            
    <body >
    
        <header>
            <h1></h1>
        </header>
        
    </body>

</html>
