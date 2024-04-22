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
            height:200px;
        }
        section {
            min-height: calc(100vh - 213px);
        }
    </style>
</head>
<body>
<section>
    <iframe src="../ImagenesGeneral/enunciado3.pdf" ></iframe>
    <form method="post" action="concatenacionResuelto.php">
        <label for="texto1">Ingrese un texto:</label>
        <input type="text" id="texto1" name="texto1">
        <br>
        <label for="texto2">Ingrese un texto:</label>
        <input type="text" id="texto2" name="texto2">
        <br>
        <input type="submit" value="Ver texto">
    </form>
</section>

</body>
<!-- Footer -->
<?php
include_once("../0footer.php");
?>
</html>

