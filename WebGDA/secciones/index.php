
<?php 
    include("conexion.php");
    $conexion = conexion();

    function realizarQuery($conexion, $tabla) {
        $query = "SELECT * FROM imagenes WHERE fk_num_seccion = 1";
        $result = mysqli_query($conexion, $query);
    
        $row =  mysqli_fetch_array($result);

        $id = $row[0];
        $fk_num_seccion = $row[1];
        $url = $row[2];

        if ($result === false) {
            die("Error en la consulta: ".mysqli_error($conexion));
        }
    }
    
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/estilos.css">
        <title>GDA Demoliciones Técnicas y Gestión de Amianto</title>
    </head>
            
    <body background="../imagenes/<?php echo $url ?>">
        <header>
            <h1></h1>
        </header>
        
    </body>

</html>