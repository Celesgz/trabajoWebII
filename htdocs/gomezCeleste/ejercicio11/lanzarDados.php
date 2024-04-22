<?php
include_once('../0nav.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del Lanzamiento de Dados</title>
</head>
<body>

<?php
if (isset($_POST['cantidad_dados'])) {
    $cantidad_dados = $_POST['cantidad_dados'];
    $suma_puntaje = 0;
    echo "<h3>DADOS LANZADOS:</h3>";
    echo "<div>";
    for ($i = 1; $i <= $cantidad_dados; $i++) {
        $resultado_dado = rand(1, 6);
        $suma_puntaje += $resultado_dado;

        switch ($resultado_dado) {
            case 1:
                $imagen_dado = "imagenes/dado1.png";
                break;
            case 2:
                $imagen_dado = "imagenes/dado2.png";
                break;
            case 3:
                $imagen_dado = "imagenes/dado3.png";
                break;
            case 4:
                $imagen_dado = "imagenes/dado4.png";
                break;
            case 5:
                $imagen_dado = "imagenes/dado5.png";
                break;
            case 6:
                $imagen_dado = "imagenes/dado6.png";
                break;
            default:
                $imagen_dado = "imagenes/dado1.png";
        }
        echo '<img src="' . $imagen_dado . '" alt="Dado ' . $resultado_dado . '" style="width: 200px; height: 200px; margin-right: 10px;">';
    }
    echo "</div>";
    echo "<p>Puntaje total obtenido: <strong>$suma_puntaje</strong></p>";
} else {
    echo "<p>No se ha especificado la cantidad de dados a lanzar.</p>";
}
    ?>
<br><br><br>
</body>
<!-- Footer -->
<?php
include_once("../0footer.php");
?>
</html>
