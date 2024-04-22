<?php
include_once('../0nav.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanzar Dados</title>
    <style>
        iframe {
            height:325px;
        }
        select {
            padding: 8px 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            outline: none;
            margin-bottom: 10px;
        }

        input[type="number"]:focus {
            border-color: #26353B;
            box-shadow: 0 0 5px #f192dc;
        }
    </style>
</head>
<body>
<iframe src="../ImagenesGeneral/enunciado11.pdf" ></iframe>
<form action="lanzarDados.php" method="post">
    <label for="cantidad_dados">Cantidad de Dados a Lanzar:</label>
    <select name="cantidad_dados" id="cantidad_dados">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
    <br>
    <input type="submit" value="Lanzar Dados">
</form>
</body>
<!-- Footer -->
<?php
include_once("../0footer.php");
?>
</html>

