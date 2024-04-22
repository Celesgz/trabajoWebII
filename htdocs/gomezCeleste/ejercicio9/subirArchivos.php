<?php
$directorio_destino = "imagenes/";

$nombre_usuario = $_POST['nombre_imagen'];
$nombre_archivo = $_FILES['imagen']['name'];

$tipo_archivo = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));
$tipos_permitidos = array('png', 'jpg', 'jpeg');

// Verificar si la extensión es permitida
if (!in_array($tipo_archivo, $tipos_permitidos)) {
    echo "<script>alert('Tipo de archivo no permitido');</script>";
    exit;
}

$ruta_archivo = $directorio_destino . $nombre_usuario . '.' . $tipo_archivo;

if (move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_archivo)) {
    echo "<script>alert('Imagen subida correctamente');</script>";
} else {
    echo "<script>alert('Error al subir la imagen');</script>";
}

header("Location: index.php");
?>
