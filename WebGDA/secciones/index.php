<?php
    include("conexion.php");
    $conexion= conexion();

    $id= ($_REQUEST["id"] == "")?1:$_REQUEST["id"];

    $query= "SELECT * FROM secciones WHERE id= 1";
    $result= mysqli_query($conexion, $query);

    $queryDireccionEmpresa= "SELECT * FROM datos_empresa WHERE id_empresa= $id";
    $resultDatosEmpresa = mysqli_query($conexion, $queryDireccionEmpresa);

    $row= mysqli_fetch_array($result);
    $rowDireccionEmpresa= mysqli_fetch_array($resultDatosEmpresa);

    if($result === FALSE){
        die("Error en la consulta: ".mysqli_error($conexion));
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
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
                        <p style="color: gray;">Demoliciones y Gestión de Aminato, s.l.</p>
                        <p>N.I.F.: B27861699</p>
                        <p style="color: gray;">Oficina Central:</p>
                        <p><?php 
                                echo $row["calle"];
                                echo $row[" "] ;
                                echo $row["numero"];
                                echo $row[" "] ;
                                echo $row["piso"];
                                echo $row[" "] ;
                                echo $row["cp"];
                                echo $row[" "] ;
                                echo $row["ciudad"];
                            ?></p>
                        <p>Tel.: 986 289 776 · 629859946</p>
                        <p style="color: gray;">Delegación Centro:</p>
                        <p>Camino del Barco Viejo, 40</p>
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