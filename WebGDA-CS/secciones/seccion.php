<?php
<<<<<<< Updated upstream
    include ("conexionbdd.php");
    $conexion= conexion();


    $id= ($_REQUEST["id"] == "")?1:$_REQUEST["id"];

    $query= "SELECT * FROM secciones WHERE id=".$id; 
    $result= mysqli_query($conexion, $query);

    $row= mysqli_fetch_array($result);

    if($result === FALSE){
        die("Error en la consulta: ".mysqli_error($conexion));
    }

=======
    include("conexion.php");
    $conexion = conexion();

    $id= ($_REQUEST["id"] == "")?1:$_REQUEST["id"];

    $query = "SELECT * FROM secciones WHERE id = $id";
   
    $result = mysqli_query($conexion, $query);
    $row = mysqli_fetch_array($result);
>>>>>>> Stashed changes
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< Updated upstream
    <link rel="stylesheet" href="../css/estilos.css">
=======
    <link rel="stylesheet" href="../css/estilo.css">
>>>>>>> Stashed changes
    <title>GDA</title>
</head>
<body>
    
<<<<<<< Updated upstream
    <div class="imgseccion" style="background-image: url('../imagenes/<?php echo $row["fondo"]?>')";>
        <div class="titulo">
            <?php echo utf8_encode($row["titulo"])?>
        </div>
        <div class="pie">
            <div class="pieborde"></div>
            <div class="divlogo">
                <img  src="../imagenes/<?php echo $row["logo"]?>">
=======
    <div class="fondo" style="background-image: url('../imagenes/<?php echo $row["fondo"]?>')">
    <?php include("header.php")?>
        <div class="titulo">
            <h1 class="seccion">  <?php echo utf8_encode($row["titulo"])?></h1>
        </div>
        <div class="pie">
            <div class="pieborde"></div>
            <div class="div_logo">
                <img src="../imagenes/<?php echo $row["logo"]?>" alt="Logo">
>>>>>>> Stashed changes
                <p>Empresa inscrita en el RERA con el nº 36/200</p>
            </div>

            <div class="lista">
<<<<<<< Updated upstream
                <?php
                    echo utf8_encode($row["contenido"]);
                ?>
            </div>

            <div class="divimgrera">
                <img class="imgrera" src="../imagenes/<?php echo $row["logo_certificado"]?>">
            </div>
            
=======
                <?php echo utf8_encode($row["contenido"])?>
            </div>

            <div class="div_img_rera">
            <img src="../imagenes/<?php echo $row["logo_certificado"]?>" alt="Logo Certificado">
            </div>
>>>>>>> Stashed changes
        </div>
    </div>

</body>
</html>