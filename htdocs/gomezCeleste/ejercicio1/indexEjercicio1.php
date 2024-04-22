<?php
require_once("../0nav.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>TRABAJOS PRACTICOS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,300;0,400;0,500;0,800;1,600&family=DM+Mono:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=Graduate&family=Jersey+10&family=Jersey+10+Charted&family=Merriweather:wght@300;400&family=Roboto:wght@300&display=swap" rel="stylesheet">
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
<section id="semaforo">
    <iframe src="../ImagenesGeneral/enunciado1.pdf" ></iframe>
    <form method="post" action="semaforoResuelto.php">
        <label for="color">Ingrese el color <strong>(rojo- amarillo- verde): </strong></label>
        <input type="text" id="color" name="color">
        <br>
        <input type="submit" value="Ver estado">
    </form>
</section>
</body>
<!-- Footer -->
<?php
include_once("../0footer.php");
?>
</html>
