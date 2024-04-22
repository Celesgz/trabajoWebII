<?php
include_once('../0nav.php');

require_once ("buscar.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Palabra</title>
    <style>
        h2 {
            font-family: "Jersey 10";
        }
        textarea{
            background-color: white;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            min-height: 100px;
            border: 2px solid #C67DFD;
        }
    </style>
</head>
<body>
<h2>Buscar Palabra en Texto</h2>
<form action="" method="post">
    <label for="palabra">Palabra a buscar:</label>
    <input type="text" id="palabra" name="palabra" value="<?= $palabra ?>">
    <br> <br>
    <label for="texto">Texto:</label><br>
    <textarea id="texto" name="texto" rows="4" cols="50"><?= $texto ?></textarea>
    <br>
    <input type="submit" value="Buscar">
</form>

<?php if (!empty($resultado)): ?>
    <p>La palabra '<?= $palabra ?>' aparece <strong><?= $resultado ?></strong> veces en el texto.</p>
<?php else: ?>
    <?php if (!empty($palabra)): ?>
        <p>La palabra '<?= $palabra ?>' aparece 0 veces en el texto.</p>

    <?php endif; ?>
<?php endif; ?>


<br><br>
</body>
<!-- Footer -->
<?php
include_once("../0footer.php");
?>
</html>
