<?php
$directorio = "imagenes/";
$archivos = scandir($directorio);
foreach ($archivos as $archivo) {
    if ($archivo != '.' && $archivo != '..' && in_array(pathinfo($archivo, PATHINFO_EXTENSION), array('png', 'jpg', 'jpeg'))) {
        // Mostrar la imagen y su nombre de archivo
        echo '<div>';
        echo '<img src="' . $directorio . $archivo . '" alt="' . $archivo . '" width="200">';
        echo '<p>' . $archivo . '</p>';
        echo '</div>';
    }
}
