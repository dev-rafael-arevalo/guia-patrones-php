<?php

// Interfaz para los personajes
interface Personaje {
    public function atacar();
    public function velocidad();
}

// Clase Esqueleto
class Esqueleto implements Personaje {
    public function atacar() {
        return "Esqueleto ataca con flechas.";
    }

    public function velocidad() {
        return "Esqueleto se mueve lentamente.";
    }
}

// Clase Zombi
class Zombi implements Personaje {
    public function atacar() {
        return "Zombi ataca con mordidas.";
    }

    public function velocidad() {
        return "Zombi se mueve rápidamente.";
    }
}

// Factory para la creación de personajes
class PersonajeFactory {
    public static function crearPersonaje($nivel) {
        if ($nivel === "fácil") {
            return new Esqueleto();
        } elseif ($nivel === "difícil") {
            return new Zombi();
        }
        throw new Exception("Nivel no válido.");
    }
}

// Uso del Factory
$nivel = "fácil"; // Cambia a "difícil" para probar el Zombi
$personaje = PersonajeFactory::crearPersonaje($nivel);
echo $personaje->atacar() . PHP_EOL;
echo $personaje->velocidad() . PHP_EOL;

?>
