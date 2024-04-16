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
    <link rel="stylesheet" href="../css/estilos.css">
    <title>GDA</title>
</head>

<body>
    <?php include("header.php")?>
    <div class="contenedor">
        <div class="fondo" style="background-image: url('../imagenes/<?php echo $row["fondo"]?>')">

            <div class="titulo">
                <h1 class="seccion">  <?php echo utf8_encode($row["titulo"])?></h1>
            </div>
            
            <div class="pie">
                <div class="pieborde"></div>
                <div class="fondo_contenido">
                    <div class="cabecera_logo">
                        <img src="../imagenes/<?php echo $row["logo"]?>" alt="Logo">
                        <p>Empresa inscrita en el RERA con el nº 36/200</p>
                    </div>
                    <hr style="width: 60%;">
                    <div class="lista">
                        <?php echo utf8_encode($row["contenido"])?>
                    </div>
                    <div class="div_img_rera">
                        <img src="../imagenes/<?php echo $row["logo_certificado"]?>" alt="Logo Certificado">
                    </div>
                </div>
            </div>
        </div>
        <?php
            switch($id) {
                case 3:
                        ?>
                    <style>
                        body {
                            overflow-y: visible;
                        }
                    </style>

                    <section class="amianto_section">
                    <?php
                    include("diag_amianto.php");
                    
                    ?>
                    
                    </section>
                    <?php include("footer.php")?>
                    <?php
                break;

                case 4:
                    ?>
                    <style>
                        body {
                            overflow-y: visible;
                        }
                    </style>

                    <section class="fibrocemento">
                    <?php
                    include("retirada_fibrocemento.php");
                    
                    ?>
                    
                    </section>
                    <?php include("footer.php")?>
                    <?php
                break;

            }
        ?>
    </div>
</body>
</html>