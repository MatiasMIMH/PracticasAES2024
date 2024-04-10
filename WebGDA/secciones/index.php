<?php
    include("conexion.php");
    $conexion= conexion();

    $id= ($_REQUEST["id"] == "")?1:$_REQUEST["id"];

    //tabla secciones
    $query= "SELECT * FROM secciones WHERE id= 1";
    $result= mysqli_query($conexion, $query);

    //tabla direccion empresa
    $queryDireccionEmpresaPrincipal= "SELECT * FROM datos_empresa INNER JOIN direccion_empresa ON id_empresa = fk_id_empresa WHERE fk_id_empresa = 1 and principal = 0";
    $resultDireccionEmpresaPrincipal = mysqli_query($conexion, $queryDireccionEmpresaPrincipal);

    $queryDireccionEmpresaDelegacion= "SELECT * FROM datos_empresa INNER JOIN direccion_empresa ON id_empresa = fk_id_empresa WHERE fk_id_empresa = 1 and principal = 1";
    $resultDireccionEmpresaDelegacion = mysqli_query($conexion, $queryDireccionEmpresaDelegacion);

    //tabla datos empresa
    $queryDatosEmpresa= "SELECT * FROM datos_empresa WHERE id_empresa= 1";
    $resultDatosEmpresa= mysqli_query($conexion, $queryDatosEmpresa);

    $row= mysqli_fetch_array($result);
    $rowDireccionEmpresaPrincipal= mysqli_fetch_array($resultDireccionEmpresaPrincipal);
    $rowDireccionEmpresaDelegacion= mysqli_fetch_array($resultDireccionEmpresaDelegacion);
    $rowDatosEmpresa= mysqli_fetch_array($resultDatosEmpresa);

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
                        <p style="color: gray;">Demoliciones y Gestión de Aminato, s.l.</p>
                        <p><?php
                                echo "N.I.F.: ";
                                echo $rowDatosEmpresa["nif"];
                            ?>
                        </p>
                        <p style="color: gray;">Oficina Central:</p>
                        <p><?php 
                                echo utf8_encode($rowDireccionEmpresaPrincipal["calle"].", ");
                                echo $rowDireccionEmpresaPrincipal["numero"].", ";
                                echo $rowDireccionEmpresaPrincipal["piso"]."º, ";
                                echo $rowDireccionEmpresaPrincipal["cp"].", ";
                                echo $rowDireccionEmpresaPrincipal["ciudad"];
                            ?>
                        </p>
                        <p><?php
                                echo "Tel.:";
                                echo $rowDatosEmpresa["num_telefono_1"]." · ";
                                echo $rowDatosEmpresa["num_movil_1"];
                            ?>
                        </p>
                        <p style="color: gray;">Delegación Centro:</p>
                        <p>
                            <?php
                                echo $rowDireccionEmpresaDelegacion["calle"].", ";
                                echo $rowDireccionEmpresaDelegacion["numero"];
                            ?>
                        </p>
                        <p>
                            <?php
                                echo $rowDireccionEmpresaDelegacion["cp"]." ";
                                echo $rowDireccionEmpresaDelegacion["ciudad"].", Madrid";
                            ?>
                        </p>
                        <p>
                            <?php
                                echo "Tel.:";
                                echo $rowDatosEmpresa["num_telefono_1"]." · ";
                                echo $rowDatosEmpresa["num_movil_1"];
                            ?>
                        </p> 
                        <p><?php
                                echo $rowDatosEmpresa["correo"];
                            ?></p>
                    </td>
                <tr>
                    <td class="td_izq">
                        <p>Empresa Inscrita en el <b  style="color: grey";>RERA</b></p>
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