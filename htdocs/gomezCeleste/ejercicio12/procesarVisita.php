<?php
if(isset($_POST['nombre']) && isset($_POST['planeta'])) {
    $nombre = $_POST['nombre'];
    $planeta = $_POST['planeta'];

    $visita = array(
        'nombre' => $nombre,
        'planeta' => $planeta
    );
    $directorio_visitas = 'visitas/';

    if (!is_dir($directorio_visitas) && !mkdir($directorio_visitas)) {
        die("Error: No se puede crear el directorio de visitas.");
    }
    $nombre_archivo = time() . '.json';
    if (file_put_contents($directorio_visitas . $nombre_archivo, json_encode($visita)) !== false) {
        // Redirigir a la página de lista de visitantes
        header("Location: listaVisitas.php");
        exit;
    } else {
        echo "Error: No se pudo guardar la visita.";
    }
} else {
    echo "Error: No se han recibido los datos del formulario.";
}