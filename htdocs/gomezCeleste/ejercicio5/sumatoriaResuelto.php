<!DOCTYPE html>
<html>
<head>
    <title>TRABAJOS PRACTICOS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
            margin-top: 50px;
            width: 100%;
            min-height: calc(100vh - 500px);
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

echo "<h3> RESULTADO EJERCICIO 5 </h3> ";
$vector_str = isset($_POST['vector']) ? $_POST["vector"] : "Ingresa valores primero";

// Convertir la cadena en un array de números
$vector = explode(",", $vector_str);
$vector = array_map('intval', $vector); // Convertir cada elemento a entero

function sumatoria_a($vector)
{
    $suma = 0;
    $longitud = count($vector);
    for ($i = 0; $i < $longitud; $i++) {
        $suma += $vector[$i];
    }
    return $suma;
}

$suma_a = sumatoria_a($vector);

function sumatoria_b($vector)
{
    $suma = 0;
    foreach ($vector as $valor) {
        $suma += $valor;
    }
    return $suma;
}

$suma_b = sumatoria_b($vector);

function sumatoria_c($vector)
{
    $suma = 0;
    $i = 0;
    $longitud = count($vector);
    while ($i < $longitud) {
        $suma += $vector[$i];
        $i++;
    }
    return $suma;
}

$suma_c = sumatoria_c($vector);

echo "<p><strong>Vector ingresado</strong>: [" . implode(', ', $vector) . "]</p>";
echo "<p>Suma utilizando <strong>for </strong>: $suma_a</p>";
echo "<p>Suma utilizando <strong>foreach</strong>: " . $suma_b . "</p>";
echo "<p>Suma utilizando <strong>while</strong>: " . $suma_c . "</p>";
?>
<br><br><br><br><br><br><br><br><br>
</body>
<!-- Footer -->
<?php
include_once("../0footer.php");
?>
</html>

