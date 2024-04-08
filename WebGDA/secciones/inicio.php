<?php 
    include("conexion.php");
    $conexion = conexion();

    $id=($_REQUEST['id'] == "")?1:$_REQUEST['id'];

        $query = "SELECT * FROM secciones WHERE id =" .$id;
        $result = mysqli_query($conexion, $query);
    
        $row =  mysqli_fetch_array($result);


        if ($result === false) {
            die("Error en la consulta: ".mysqli_error($conexion));
        }

    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estiloshtml.css">
    <title>GDA Demoliciones Técnicas y Gestión de Amianto</title>
</head>
<body style="background-image: url('../imagenes/<?php echo $row['fondo'] ?>');">
    
</body>
</html>