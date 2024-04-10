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
    <div class="fondo">
        <?php include("header.php")?>
            <img class="imgFondo" src="../imagenes/<?php echo $row["fondo"]?>">
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
                <img src="../imagenes/<?php echo $row["logo_certificado"]?>" alt="Logo Certificado"></div>
            </div>
    </div>
    <div class="slider">
        <ul>
            <li>
                <img src="../imagenes/seccion2.jpg">
            </li>
            <li>
                <img src="../imagenes/seccion3.jpg">
            </li>
            <li>
                <img src="../imagenes/seccion4.jpg">
            </li>
            <li>
                <img src="../imagenes/seccion5.jpg">
            </li>
        </ul>
    </div>
    <h1>Identificación de amianto</h1>
        <div class="textos">
            <div class="texto">
                <p>Esto es una prueba del texto que se va a introducir Esto es una prueba del texto que se va a introducir</p>
                <p>Esto es una prueba del texto que se va a introducir Esto es una prueba del texto que se va a introducir</p>
                <p>Esto es una prueba del texto que se va a introducir Esto es una prueba del texto que se va a introducir</p>
                <p>Esto es una prueba del texto que se va a introducir </p>
            </div>

            <h2>¿Qué dice la legislacion sobre la identificación del amianto?</h2>

            <div class="texto2">
                <p>Esto es una prueba del texto que se va a introducir</p>
                <p>Esto es una prueba del texto que se va a introducir</p>
                <p>Esto es una prueba del texto que se va a introducir Esto es una prueba del texto que se va a introducir</p>
                <p>Esto es una prueba del texto que se va a introducir Esto es una prueba del texto que se va a introducir</p>
                <p>Esto es una prueba del texto que se va a introducir Esto es una prueba del texto que se va a introducir</p>
                <p>Esto es una prueba del texto que se va a introducir</p><br>
                <p>Esto es una prueba del texto que se va a introducir</p>
                <p>Esto es una prueba del texto que se va a introducir</p>
            </div>

            <h2>¿Por qué hay que realizar una inspeccion de amianto?</h2>
            
            <div class="texto3">
                <p>Esto es una prueba del texto que se va a introducir</p><br>
                <p>Esto es una prueba del texto que se va a introducir</p>
                <p>Esto es una prueba del texto que se va a introducir</p>
                <p>Esto es una prueba del texto que se va a introducir</p>
                <p>Esto es una prueba del texto que se va a introducir</p>
                <p>Esto es una prueba del texto que se va a introducir</p>
                <p>Esto es una prueba del texto que se va a introducir</p>
                <p>Esto es una prueba del texto que se va a introducir</p>
            </div>
        </div>
</body>
</html>