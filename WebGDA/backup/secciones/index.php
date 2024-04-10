<?php
    include("conexion.php");
    $conexion= conexion();

    $id= ($_REQUEST["id"] == "")?1:$_REQUEST["id"];

    $query= "SELECT *
            FROM datos_empresa
            JOIN direccion_empresa ON datos_empresa.id_empresa = direccion_empresa.fk_id_empresa
            JOIN secciones ON datos_empresa.id_empresa = secciones.fk_id_empresa
            WHERE datos_empresa.id_empresa = $id;";
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
    <title>Inicio</title>
</head>
<body>
    
    <div class="fondo" style="background-image: url('../imagenes/<?php echo $row["fondo"]?>');">
    <?php include("header.php")?>
        <div class="cabecera">
            <table>
                <tr>
                    <td colspan="2"><div class="barra_cabecera"></div></td>
                </tr>
                <tr>
                    <td style="padding-left: 9.5%;">
                        <img src="../imagenes/logo1.png" alt="Logo" style="width: 356.8px; height: 82.4px;">
                    </td>
                    <td class="td_drch" rowspan ="2";>
                        <p style="color: gray;"><?php echo utf8_encode($row["nombre_empresa"])?></p>
                        <p>N.I.F.: <?php echo utf8_encode($row["nif"])?></p>
                        <p style="color: gray;">Oficina Central:</p>
                        <p><?php 
                                echo utf8_encode($row["calle"].", ");
                                echo utf8_encode($row["numero"]." - ");
                                echo utf8_encode($row["piso"]."&#176, ");
                                echo utf8_encode($row["cp"]." ");
                                echo utf8_encode($row["ciudad"]);
                            ?></p>
                        <p>Tel.: <?php echo utf8_encode($row["num_telefono_1"])?> · <?php echo utf8_encode($row["num_movil_1"])?></p>
                        <p style="color: gray;">Delegación Centro:</p>
                        <p><?php echo utf8_encode($row["nombre_empresa"])?></p>
                        <p>28140 Fuente el Saz, Madrid</p>
                        <p>Tel.: 915 135 643 · 647 802 225</p> 
                        <p>administracion@gdatecnica.com</p>
                    </td>
                <tr>
                    <td class="td_izq">
                        <p>Empresa Inscrita en el <b  style="color: gray;">RERA</b></p>
                        <p>(Registro Empresas con Riesgo por Amianto)</p>
                        <p>con el nº 36/200</p>
                    </td>
                </tr>
            </table>

            <div class="titulo_index">
                <h1><?php echo utf8_encode($row["titulo"])?></h1>
            </div>
    </div>
</body>
</html>