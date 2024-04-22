<?php
include_once('../0nav.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú del Día</title>
    <style>
        iframe {
            height:325px;
            margin-bottom: 0;
        }
        input[type="checkbox"]{
            font-family: "Jersey 10";
        }
        .opciones-menu input[type="checkbox"] {
            appearance: none;
            width: 20px;
            height: 20px;
            border: 2px solid #333;
            border-radius: 4px;
            background-color: #fff;
        }
        .opciones-menu input[type="checkbox"]:checked {
            background-color:  #68ACA4;
        }
        .seccion-menu {
            display: flex;
            justify-content: center;
        }

        .opciones-menu {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
    </style>
</head>
<body>
<iframe src="../ImagenesGeneral/enunciado13.pdf" ></iframe>
<h3>MENÚ DEL DIA</h3>
<p>ELija los platos para el menu de hoy</p>
<form action="mostrarMenu.php" method="post">
    <div class="seccion-menu">
        <div class="opciones-menu">
            <label><input type="checkbox" name="pasos[]" value="entrada"> Entrada</label><br>
            <label><input type="checkbox" name="pasos[]" value="plato_principal"> Plato Principal</label><br>
            <label><input type="checkbox" name="pasos[]" value="acompaniamiento"> Acompañamiento</label><br>
            <label><input type="checkbox" name="pasos[]" value="postre"> Postre</label><br>
        </div>
    </div>
    <input type="submit" value="Ver Menú">
</form>
</body>
<!-- Footer -->
<?php
include_once("../0footer.php");
?>
</html>
