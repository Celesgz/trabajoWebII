
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
echo "<h3> RESULTADO EJERCICIO 4 </h3> ";

$numero= isset($_POST["numero"]) ? $_POST["numero"]: "Ingrese un numero ";


function incrementar(&$numero)
{
    $numero++;
}

echo "<h4> El numero antes de icrementar: $numero </h4>";
incrementar($numero);
echo "<p> El numero incrementado: $numero</p>";

?>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
<?php
include_once("../0footer.php");
?>
</html>
