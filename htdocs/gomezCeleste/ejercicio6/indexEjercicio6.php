<?php
include_once('../0nav.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>TRABAJOS PRACTICOS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        iframe {
            height:300px;
        }
        section{
            min-height: calc(100vh - 212px);
        }
    </style>
</head>
<body>
<section>
    <iframe src="../ImagenesGeneral/enunciado6.pdf" ></iframe>
    <form method="post" action="nombreCompletoResuelto.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" >
        <br>
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido">
        <br>
        <input type="submit" value="Enviar">
    </form>
</section>

</body>
<!-- Footer -->
<?php
include_once("../0footer.php");
?>
</html>
