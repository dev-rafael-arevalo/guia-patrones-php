<?php

// Interfaz para Personajes
interface Personaje {
    public function equipar();
}

// Personaje Base
class Guerrero implements Personaje {
    public function equipar() {
        return "Guerrero base listo para la batalla.";
    }
}

class Mago implements Personaje {
    public function equipar() {
        return "Mago base listo para conjurar.";
    }
}

// Decoradores
abstract class ArmaDecorator implements Personaje {
    protected $personaje;

    public function __construct(Personaje $personaje) {
        $this->personaje = $personaje;
    }
}

class Espada extends ArmaDecorator {
    public function equipar() {
        return $this->personaje->equipar() . " Equipado con espada.";
    }
}

class VaritaMagica extends ArmaDecorator {
    public function equipar() {
        return $this->personaje->equipar() . " Equipado con varita mágica.";
    }
}

// Uso del Decorator
$guerrero = new Guerrero();
$guerreroConEspada = new Espada($guerrero);
echo $guerreroConEspada->equipar() . PHP_EOL;

$mago = new Mago();
$magoConVarita = new VaritaMagica($mago);
echo $magoConVarita->equipar() . PHP_EOL;

?>
