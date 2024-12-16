<?php

// Estrategias de salida
interface EstrategiaSalida {
    public function mostrar($mensaje);
}

class ConsolaSalida implements EstrategiaSalida {
    public function mostrar($mensaje) {
        echo "Mensaje en consola: " . $mensaje . PHP_EOL;
    }
}

class JsonSalida implements EstrategiaSalida {
    public function mostrar($mensaje) {
        echo json_encode(["mensaje" => $mensaje]) . PHP_EOL;
    }
}

class ArchivoSalida implements EstrategiaSalida {
    public function mostrar($mensaje) {
        file_put_contents("salida.txt", $mensaje);
        echo "Mensaje guardado en salida.txt" . PHP_EOL;
    }
}

// Contexto que utiliza las estrategias
class Mensaje {
    private $estrategia;

    public function __construct(EstrategiaSalida $estrategia) {
        $this->estrategia = $estrategia;
    }

    public function cambiarEstrategia(EstrategiaSalida $nuevaEstrategia) {
        $this->estrategia = $nuevaEstrategia;
    }

    public function mostrar($mensaje) {
        $this->estrategia->mostrar($mensaje);
    }
}

// Uso del Strategy
$mensaje = new Mensaje(new ConsolaSalida());
$mensaje->mostrar("Hola, mundo!");

$mensaje->cambiarEstrategia(new JsonSalida());
$mensaje->mostrar("Hola, mundo!");

$mensaje->cambiarEstrategia(new ArchivoSalida());
$mensaje->mostrar("Hola, mundo!");

?>
