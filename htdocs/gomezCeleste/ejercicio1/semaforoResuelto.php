
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
    <?php
    require_once("../0nav.php");
    ?>
    <body>
    <?php
// -----------------------COLOR------------------------
// Acceso al color usando $_POST y verifico que contenga algo
$colorUsuario = isset($_POST['color']) ? $_POST['color'] : "INGRESE UN COLOR";


// Funciones para determinar el estado del semáforo
echo "<h3> RESULTADO EJERCICIO 1 </h3> ";
$estado= semaforo_a($colorUsuario);
echo "<h4> La solución utilizando if else </h4>";
echo "<p>El estado del semáforo es: <strong>$estado</strong></p>";

$estado= semaforo_b($colorUsuario);
echo "<h4> La solución utilizando if inline </h4>";
echo "<p>El estado del semáforo es: <strong>$estado</strong></p>";

$estado= semaforo_c($colorUsuario);
echo "<h4> La solución utilizando swtich </h4>";
echo "<p>El estado del semáforo es: <strong>$estado</strong></p>";

    function semaforo_a($colorUsuario)
    {
        $colorUsuario = strtolower($colorUsuario);
        if ($colorUsuario === "rojo") {
            return "frene";
        } else if ($colorUsuario === "amarillo") {
            return "precaución";
        } else if ($colorUsuario === "verde") {
            return "avance";
        } else {
            return "estado desconocido";
        }
    }

    function semaforo_b($colorUsuario)
    {
        $colorUsuario = strtolower($colorUsuario);
        switch ($colorUsuario) {
            case "rojo":
                return "frene";
                break;
            case "amarillo":
                return "precaución";
                break;
            case "verde":
                return "avance";
                break;
            default:
                return "estado desconocido";
        }
    }

    function semaforo_c($colorUsuario)
    {
        $colorUsuario = strtolower($colorUsuario);
        if ($colorUsuario === "rojo") {
            $estado = "frene";
        } else if ($colorUsuario === "amarillo") {
            $estado = "precaución";
        } else if ($colorUsuario === "verde") {
            $estado = "avance";
        } else {
            $estado = "estado desconocido";
        }

        return $estado;
    }

?>
    <br> <br> <br> <br>
</body>
    <!-- Footer -->
<?php
include_once("../0footer.php");
?>
</html>
