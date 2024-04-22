
<!DOCTYPE html>
<html>
<head>
    <title>TRABAJOS PRACTICOS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{

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
?>

<?php
// -----------------------CONCATENACION------------------------
echo "<h3> RESULTADO EJERCICIO 3 </h3> ";
$texto1 = isset($_POST["texto1"]) ? $_POST["texto1"] : "Ingrese texto 1";
$texto2 = isset($_POST["texto2"]) ? $_POST["texto2"] : "Ingrese texto 2";

$textoConcatenado= concatenar($texto1, $texto2);
echo $textoConcatenado ;

function concatenar($texto1, $texto2)
{
    return $texto1 . " " . $texto2;
}
?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!-- Footer -->
<?php
include_once("../0footer.php");
?>
</body>
</html>
