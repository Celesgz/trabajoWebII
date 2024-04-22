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
    <iframe src="../ImagenesGeneral/enunciado5.pdf" ></iframe>
    <form method="post" action="sumatoriaResuelto.php">
        <label for="vector" >Ingrese los valores <strong>(separados por coma)</strong> </label>
        <input type="text" id="vector" name="vector" placeholder="Ej: 1,2,3,4,5"><br>
        <input type="submit" value="Calcular suma">
    </form>
</section>

</body>
<!-- Footer -->
<?php
include_once("../0footer.php");
?>
</html>

