<?php
class Saludar
{
    private $nombre;
    private $apellido;

    public function __construct($nombre, $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function saludoFormal($horario)
    {
        $mensaje = "";
        if ($horario >= 5 && $horario < 13) {
            $mensaje = "Buenos días";
        } elseif ($horario >= 13 && $horario < 21) {
            $mensaje = "Buenas tardes";
        } else {
            $mensaje = "Buenas noches";
        }
        return "$mensaje {$this->nombre} {$this->apellido}";
    }

    public function saludoInformal($horario)
    {
        $saludo = "";
        if ($horario >= 5 && $horario < 13) {
            $saludo = "un buen día";
        } elseif ($horario >= 13 && $horario < 21) {
            $saludo = "una buena tarde";
        } else {
            $saludo = "un buena noche";
        }
        return "¡Hola {$this->nombre} {$this->apellido}! Que tengas $saludo";
    }
}