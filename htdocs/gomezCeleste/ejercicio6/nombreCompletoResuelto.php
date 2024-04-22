<!DOCTYPE html>
<html>
<head>
    <title>TRABAJOS PRACTICOS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
            margin-top: 80px;
            width: 100%;
            min-height: calc(100vh - 200px);
            padding: 10px;
            box-sizing: border-box;
            text-align: center;
        }
    </style>
</head>
<?php
require_once("../0nav.php");
?>
<body>
<?php
require_once("saludar.php");

echo "<h3> RESULTADO EJERCICIO 6</h3> ";
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
$apellido = isset($_POST['apellido']) ? $_POST['apellido'] : "";

if ($nombre !== "" && $apellido !== "") {

    // horario actual
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $hora = date('H');

    // objeto Saludar
    $saludar = new Saludar($nombre, $apellido);


    $saludoFormal = $saludar->saludoFormal($hora);
    $saludoInformal = $saludar->saludoInformal($hora);

    echo "<p> <strong> Saludo formal: </strong>$saludoFormal</p>";
    echo "<p><strong> Saludo informal: </strong>$saludoInformal</p>";
} else {
    echo "<p>Por favor, complete el nombre y el apellido en el formulario.</p>";
}
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>

<!-- Footer -->
<?php
include_once("../0footer.php");
?>
</html>
