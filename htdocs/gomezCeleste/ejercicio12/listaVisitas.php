<?php
include_once('../0nav.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Visitantes Interplanetarios</title>
    <style>
        body{
            background-image: url("../ImagenesGeneral/fondoMarciano.png");
        }
        .lista-visitas {
            list-style-type: none;
            padding: 0;
        }

        .visita-item {
            margin-bottom: 10px;
            font-size: 18px;
            font-family: "DM Mono", monospace;
        }

        .total-no-terrestres {
            font-weight: bold;
            font-size: 20px;
            color: black;
        }
    </style>
</head>
<body>
<h3>LISTA DE VISITANTES INTERPLANETARIOS</h3>
<?php
$directorio_visitas = 'visitas/';
$contador_no_terrestres = 0;

if ($handle = opendir($directorio_visitas)) {
    echo "<ul class='lista-visitas'>";

    while (false !== ($archivo = readdir($handle))) {
        if ($archivo != "." && $archivo != "..") {
            $ruta_archivo = $directorio_visitas . $archivo;
            $visita = json_decode(file_get_contents($ruta_archivo), true);
            echo "<li class='visita-item'>{$visita['nombre']} - {$visita['planeta']}</li>";
            if ($visita['planeta'] != "Tierra") {
                $contador_no_terrestres++;
            }
        }
    }
    echo "</ul>";

    echo "<p class='total-no-terrestres'>Total de visitantes no terrestres: $contador_no_terrestres</p>";

    closedir($handle);
} else {
    echo "Error: No se puede abrir el directorio de visitas.";
}
?>
<br><br><br><br><br><br><br><br><br><br><br>
</body>
<!-- Footer -->
<?php
include_once("../0footer.php");
?>
</html>
