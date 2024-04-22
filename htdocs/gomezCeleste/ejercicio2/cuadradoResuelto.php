<?php
function binomioCuadradoPerfecto_a($numeroA, $numeroB){
    $numeroA = intval($numeroA); // Convertir a entero
    $numeroB = intval($numeroB); // Convertir a entero
    $suma = $numeroA + $numeroB;
    $cuadrado = pow($suma, 2);
    return $cuadrado;
}

function binomioCuadradoPerfecto_b($numeroA, $numeroB){
    $numeroA = intval($numeroA); // Convertir a entero
    $numeroB = intval($numeroB); // Convertir a entero
    $cuadradoA = pow($numeroA, 2);
    $cuadradoB = pow($numeroB, 2);
    $suma2 = $numeroA * 2 * $numeroB;
    $resultado = $cuadradoA + $suma2 + $cuadradoB;
    return $resultado;
}
?>

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
            min-height: calc(100vh - 200px);
            padding: 10px;
            box-sizing: border-box;
            text-align: center;

        }
    </style>
</head>
<body>
<?php
require_once("../0nav.php");

// -----------------------NUMERO------------------------
echo "<h3> RESULTADO EJERCICIO 2 </h3> ";

$numeroA = isset($_POST["numeroA"]) ? $_POST["numeroA"]: "Ingrese numero A";
$numeroB = isset($_POST["numeroB"]) ? $_POST["numeroB"]: "Ingrese numero B";

$resultadoBinomio= binomioCuadradoPerfecto_a($numeroA, $numeroB);
echo "<h4> La solución utilizando (a+b)2 </h4>";
echo "<p> El resultado del binomio de $numeroA  y  $numeroB  es : <strong>$resultadoBinomio </strong></p>";


$resultadoBinomio2=binomioCuadradoPerfecto_b($numeroA, $numeroB);
echo "<h4> La solución utilizando a2 + 2*a*b + b2</h4>";
echo "<p> El resultado del binomio de $numeroA  y  $numeroB  es : <strong>$resultadoBinomio2 </strong></p>";
?>
<br><br><br><br><br><br><br><br><br>
</body>
<!-- Footer -->
<?php
include_once("../0footer.php");
?>

</html>
