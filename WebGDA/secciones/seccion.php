<?php
    include("conexion.php");
    $conexion = conexion();

    $id = $_REQUEST["id"];

    $query = "SELECT * FROM secciones WHERE id = $id";
   
    $result = mysqli_query($conexion, $query);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>GDA</title>
</head>
<body>
    
    <div class="fondo" style="background-image: url('../imagenes/<?php echo $row["fondo"]?>')">
    <?php include("header.php")?>
        <div class="titulo">
            <h1 class="seccion">  <?php echo utf8_encode($row["titulo"])?></h1>
        </div>
        <div class="pie">
            <div class="pieborde"></div>
            <div class="div_logo">
                <img src="../imagenes/<?php echo $row["logo"]?>" alt="Logo">
                <p>Empresa inscrita en el RERA con el nº 36/200</p>
            </div>

            <div class="lista">
                <?php echo utf8_encode($row["contenido"])?>
            </div>

            <div class="div_img_rera">
            <img src="../imagenes/<?php echo $row["logo_certificado"]?>" alt="Logo Certificado">
            </div>
        </div>      
    </div>

</body>
</html>