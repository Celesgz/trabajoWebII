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

    </style>
</head>
<body>
<section>
    <iframe src="imagenes/enunciado9.pdf" ></iframe>
    <?php
    require_once ("mostrarGaleria.php");
    ?>
    <br><br>
    <form action="subirArchivos.php" method="post" enctype="multipart/form-data">
        <label for="imagen" class="upload-btn">Seleccionar archivo</label>
        <input type="file" id="imagen" name="imagen" accept=".png, .jpg, .jpeg" required style="display: none;">

        <label for="nombre_imagen"></label>
        <input type="text" name="nombre_imagen" placeholder="Nombre de la imagen" required>
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
