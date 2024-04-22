<?php
require_once("../0nav.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>TRABAJOS PRACTICOS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        iframe {
            height:325px;
        }
        section {
            min-height: calc(100vh - 212px);
        }
    </style>
</head>
<body>
<section>

    <iframe src="../ImagenesGeneral/enunciado2.pdf" ></iframe>
    <form method="post" action="cuadradoResuelto.php">
        <label for="numeroA">Ingrese el primer número:</label>
        <input type="number" id="numeroA" name="numeroA">
        <br>
        <label for="numeroB">Ingrese el segundo número:</label>
        <input type="number" id="numeroB" name="numeroB">
        <br>
        <input type="submit" value="Ver resultado">
    </form>
</section>

</body>
<!-- Footer -->
<?php
include_once("../0footer.php");
?>
</html>

