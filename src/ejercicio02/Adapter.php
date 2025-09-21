<?php
namespace ejercicio02;

// El adaptador que convierte archivos viejos a formato compatible
class Adapter implements WindowInterface {
    private WindowSeven $windowSeven;

    public function __construct(WindowSeven $windowSeven) {
        $this->windowSeven = $windowSeven;
    }

    public function open(string $filename): string {
        $extension = pathinfo($filename, PATHINFO_EXTENSION);

        return match($extension) {
            "doc"  => $this->windowSeven->openOlderDoc($filename),
            "xls"  => $this->windowSeven->openOlderXls($filename),
            "ppt"  => $this->windowSeven->openOlderPpt($filename),
            default => "Se detecta un file no soportado del sistema antiguo",
        };
    }
}
