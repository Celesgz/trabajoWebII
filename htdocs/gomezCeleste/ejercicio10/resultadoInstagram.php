<?php
include_once('../0nav.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Imagen</title>
    <style>

    </style>
</head>
<body>
<?php

if(isset($_GET['imagen'])) {
    $nombre_imagen = $_GET['imagen'];
    $directorio_imagenes = "../ejercicio9/imagenes/";
    $ruta_imagen = $directorio_imagenes . $nombre_imagen;

    echo '<div class="imagen-container">';
    echo '<h3 class="nombre-imagen">' . $nombre_imagen . '</h3>';
    echo '<p></p>';
    echo '<img  src="' . $ruta_imagen . '" alt="' . $nombre_imagen . '"width="300">';
    echo '</div>';
} else {
    echo "No se ha seleccionado ninguna imagen.";
}
?>
</body>
<!-- Footer -->
<?php
include_once("../0footer.php");
?>
</html>

