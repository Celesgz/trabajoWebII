<?php
function buscar($clave, $texto) {
    $clave = strtolower($clave);
    $texto = strtolower($texto);

    $longitud_clave = strlen($clave);
    $longitud_texto = strlen($texto);
    $ocurrencias = 0;

    for ($i = 0; $i < $longitud_texto; $i++) {
        if ($texto[$i] === $clave[0]) {
            $match = true;
            for ($j = 1; $j < $longitud_clave; $j++) {
                if ($texto[$i + $j] !== $clave[$j]) {
                    $match = false;
                    break;
                }
            }
            if ($match) {
                $ocurrencias++;
                $i += $longitud_clave - 1;
            }
        }
    }

    return $ocurrencias;
}

$palabra = isset($_POST['palabra']) ? $_POST['palabra'] : '';
$texto = isset($_POST['texto']) ? $_POST['texto'] : '';
$resultado = '';

if (!empty($palabra) && !empty($texto)) {
    $resultado = buscar($palabra, $texto);
}