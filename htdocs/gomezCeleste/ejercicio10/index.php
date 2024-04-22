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
            height:325px;
        }

        .upload-btn {
            background-color: #E17E3F;
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            border: 2px solid #C67DFD;
        }

        .upload-btn:hover {
            background-color:#FDDEE6;
            border: 2px solid #68ACA4;
            color: black;
        }
        /* Estilo para la lista */
        .lista-imagenes {
            list-style-type: none;
            padding: 0;
        }

        /* elementos de la lista */
        .lista-imagenes li {
            margin-bottom: 20px;


        }
        .imagen-link{
            padding: 5px 10px;
            text-decoration: none;
            background-color: #FDDEE6;
            border-radius: 4px;
            border: 1px solid #111111;
            color: black;
            font-family: "Jersey 10";
            font-size: 20px;
        }
        .imagen-link:hover{
            background-color: #f192dc;
            border: 1px solid #111111;
            color: black;

        }


    </style>
</head>
<body>
<section>
    <iframe src="../ImagenesGeneral/enunciado10.pdf" ></iframe>
    <?php
    $directorio = "../ejercicio9/imagenes/";
    $archivos = scandir($directorio);

    echo "<h2>Lista de Imágenes</h2>";
    echo "<ul class='lista-imagenes'>";
    foreach ($archivos as $archivo) {
        if ($archivo != '.' && $archivo != '..' && in_array(pathinfo($archivo, PATHINFO_EXTENSION), array('png', 'jpg', 'jpeg'))) {

            echo '<li><a class="imagen-link" href="resultadoInstagram.php?imagen=' . urlencode($archivo) . '">' . $archivo . '</a></li>';

        }
    }
    echo "</ul>";
    ?>
    <br><br>
    <form action="resultadoInstagram.php" method="post" enctype="multipart/form-data">
        <label for="imagen" class="upload-btn">Seleccionar archivo</label>
        <input type="file" id="imagen" name="imagen" accept=".png, .jpg, .jpeg" required style="display: none;">

        <label for="nombre"></label>
        <input type="text" name="nombre" placeholder="Nombre de la imagen" required>
        <br>
        <input type="submit" value="Subir Imagen">
    </form>
</section>
</body>
<!-- Footer -->
<?php
include_once("../0footer.php");
?>
</html>
