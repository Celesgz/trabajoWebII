<?php
include_once('../0nav.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz Cuadrada</title>
    <style>
        h2{
            font-family: "Jersey 10";
        }
        .numero {
            font-family: "DM Mono", monospace;
            margin: 5px;
        }
    </style>
</head>
<body>
<?php
if(isset($_POST['dimension'])) {
    $dimension = $_POST['dimension'];
    echo "<h3>MATRIZ DE $dimension x $dimension</h3>";

    $matriz = array();
    for ($i = 0; $i < $dimension; $i++) {
        $matriz[$i] = array();
        for ($j = 0; $j < $dimension; $j++) {
            $matriz[$i][$j] = rand(1, 100);
            echo '<span class="numero">' . $matriz[$i][$j] . "</span> ";
        }
        echo "<br>";
    }

    // a) Recorrer la matriz y mostrar los valores de la diagonal principal
    echo "<h4>Diagonal Principal:</h4>";
    for ($i = 0; $i < $dimension; $i++) {
        echo $matriz[$i][$i] . " ";
    }

    // b) Recorrer la matriz y mostrar los valores de la diagonal secundaria
    echo "<h4>Diagonal Secundaria:</h4>";
    for ($i = 0; $i < $dimension; $i++) {
        echo $matriz[$i][$dimension - 1 - $i] . " ";
    }

    // c) Sumar todos los valores de la matriz
    $suma = 0;
    foreach ($matriz as $fila) {
        foreach ($fila as $valor) {
            $suma += $valor;
        }
    }
    echo "<h4>Suma de todos los valores:</h4>";
    echo $suma;
    echo "<p> </p>";
    echo "<p><br> </p>";
} else {
    echo "<p>No se proporcionó una dimensión para la matriz.</p>";
}
?>

</body>

<!-- Footer -->
<?php
include_once("../0footer.php");
?>
</html>
