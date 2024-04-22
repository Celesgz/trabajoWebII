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
        body{
            background-image: url("../ImagenesGeneral/fondoMarciano.png");
        }
        iframe {
            height:325px;
        }
        select {
            padding: 8px 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            outline: none;
            font-family: "Jersey 10";
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<iframe src="../ImagenesGeneral/enunciado12.pdf" ></iframe>
<form action="procesarVisita.php" method="post">
    <label for="nombre">Nombre del Visitante:</label>
    <input type="text" id="nombre" name="nombre" required>
    <br>
    <label for="planeta">Planeta de Origen:</label>
    <select name="planeta" id="planeta">
        <option value="Mercurio">Mercurio</option>
        <option value="Venus">Venus</option>
        <option value="Marte">Marte</option>
        <option value="Júpiter">Júpiter</option>
        <option value="Saturno">Saturno</option>
        <option value="Urano">Urano</option>
        <option value="Neptuno">Neptuno</option>
        <option value="Plutón">Plutón</option>
        <option value="Otro">Otro</option>
    </select>
    <br>
    <input type="submit" value="Registrar Visita">
</form>
</body>
<!-- Footer -->
<?php
include_once("../0footer.php");
?>
</html>

