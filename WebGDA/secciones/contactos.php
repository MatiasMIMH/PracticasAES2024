<?php
    include("conexion.php");
    $conexion= conexion();

    $id= ($_REQUEST["id"] == "")?1:$_REQUEST["id"];

    $query= "SELECT * FROM secciones WHERE id=11";
    $result= mysqli_query($conexion, $query);

    $queryDatosEmpresa= "SELECT * FROM datos_empresa WHERE id_empresa=1";
    $resultDatosEmpresa = mysqli_query($conexion, $queryDatosEmpresa);

   
    $row= mysqli_fetch_array($result);
    $rowDatosEmpresa= mysqli_fetch_array($resultDatosEmpresa);

    if($result === FALSE){
        die("Error en la consulta: ".mysqli_error($conexion));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Contactos</title>
</head>
<body class="contactos">

    <div class="fondopantalla" style="background-image: url('../imagenes/<?php echo $row["fondo"]?>')"></div>
    <?php include("header.php");?>
    <div class="imglogo"><img src="../imagenes/<?php echo $row["logo"]?>"></div>

    <div class="textorera">
        <p>Empresa inscrita en el RERA<br> (Registro Empresas con Riesgo por Amianto)<br> con el nº 36/200</p>
    </div>

    <div  class="contacto">
        <h2>Solicite más informaci&oacute;n<br> llamando al 
            <?php 
            echo $rowDatosEmpresa["num_telefono_2"]; 
            echo " / ";echo $rowDatosEmpresa["num_telefono_1"]?><br> o en <?php echo $rowDatosEmpresa["correo"]
            ?>
        </h2>
    </div>
    
</body>
</html>