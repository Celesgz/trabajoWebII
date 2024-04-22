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
        iframe {
            height:325px;
        }
    </style>
</head>
<body>
<iframe src="../ImagenesGeneral/enunciado14.pdf" ></iframe>

    <form action="matrizResultante.php" method="post">
        <label for="dimension">Ingrese la dimensión de la matriz cuadrada:</label>
        <input type="number" id="dimension" name="dimension" required><br>
        <input type="submit" value="Crear Matriz">
    </form>
</body>
<!-- Footer -->
<?php
include_once("../0footer.php");
?>
</html>
