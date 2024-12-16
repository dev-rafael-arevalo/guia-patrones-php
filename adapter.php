<?php

// Interfaz común para abrir archivos
interface Archivo {
    public function abrir();
}

// Clase para archivos de Windows 7
class ArchivoWindows7 implements Archivo {
    private $tipoArchivo;

    public function __construct($tipoArchivo) {
        $this->tipoArchivo = $tipoArchivo;
    }

    public function abrir() {
        return "Abriendo archivo {$this->tipoArchivo} en Windows 7.";
    }
}

// Adaptador para Windows 10
class AdaptadorWindows10 implements Archivo {
    private $archivoWindows7;

    public function __construct(ArchivoWindows7 $archivo) {
        $this->archivoWindows7 = $archivo;
    }

    public function abrir() {
        return "Adaptando... " . $this->archivoWindows7->abrir() . " Ahora compatible con Windows 10.";
    }
}

// Uso del Adaptador
$archivoWin7 = new ArchivoWindows7("Word");
$adaptador = new AdaptadorWindows10($archivoWin7);
echo $adaptador->abrir();

?>
