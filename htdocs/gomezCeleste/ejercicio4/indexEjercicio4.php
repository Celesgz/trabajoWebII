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
            min-height: calc(100vh - 212px);
        }
    </style>
</head>
<body>
<section>

    <iframe src="../ImagenesGeneral/enunciado4.pdf" ></iframe>

    <form method="post" action="incrementarResuelto.php">
        <label for="numero">Ingrese un numero:</label>
        <input type="number" id="numero" name="numero">
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
