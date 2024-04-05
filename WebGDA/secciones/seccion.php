<?php
    include ("conexionbdd.php");
    $conexion= conexion();


    $id= ($_REQUEST["id"] == "")?1:$_REQUEST["id"];

    $query= "SELECT * FROM secciones WHERE id=".$id; 
    $result= mysqli_query($conexion, $query);

    $row= mysqli_fetch_array($result);

    if($result === FALSE){
        die("Error en la consulta: ".mysqli_error($conexion));
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>GDA</title>
</head>
<body>
    
    <div class="imgseccion" style="background-image: url('../imagenes/<?php echo $row["fondo"]?>')";>
        <div class="titulo">
            <?php echo utf8_encode($row["titulo"])?>
        </div>
        <div class="pie">
            <div class="pieborde"></div>
            <div class="divlogo">
                <img  src="../imagenes/<?php echo $row["logo"]?>">
                <p>Empresa inscrita en el RERA con el nº 36/200</p>
            </div>

            <div class="lista">
                <?php
                    echo utf8_encode($row["contenido"]);
                ?>
            </div>

            <div class="divimgrera">
                <img class="imgrera" src="../imagenes/<?php echo $row["logo_certificado"]?>">
            </div>
            
        </div>
    </div>

</body>
</html>