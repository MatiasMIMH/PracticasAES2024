
<?php 
    include("conexion.php");
    include("realizarQuery.php");
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/estilos.css">
        <title>GDA Demoliciones Técnicas y Gestión de Amianto</title>
    </head>
            
    <body background="../imagenes/<?php queryImagenes($conexion = conexion(), 1, "url") ?>">
        <header>
            <h1></h1>
        </header>
        
    </body>

</html>