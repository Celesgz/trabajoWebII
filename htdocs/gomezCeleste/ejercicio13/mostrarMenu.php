<?php
include_once('../0nav.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú del Día</title>
    <style>
h2{
    font-family: "Jersey 10";
    font-size: 30px;
    color: black;
    margin-top: 30px;
    text-shadow: 2px 2px 4px #f192dc;
}
p{
    font-size: 18px;
}
li{
    margin-bottom: 10px;
    list-style-type: none;
    font-size: 17px;
    font-family: "DM Mono", monospace;
}
    </style>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['pasos']) && !empty($_POST['pasos'])) {

        $menu = parse_ini_file("menu.ini");
        echo "<h2>MENÚ DEL DÍA</h2>";
        echo "<p>Tu menu es: </p>";
        echo "<ul>";
        foreach ($_POST['pasos'] as $paso) {
            if (array_key_exists($paso, $menu)) {
                echo "<li><strong>{$paso}:</strong> {$menu[$paso]}</li>";
            }
        }
        echo "</ul>";
    } else {
        echo "<p>No se ha seleccionado ningún paso del menú.</p>";
    }
}
?>
<br><br><br><br><br><br><br><br><br><br><br>
</body>
<!-- Footer -->
<?php
include_once("../0footer.php");
?>
</html>
