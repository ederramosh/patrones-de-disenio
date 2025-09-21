<?php
namespace ejercicio02;

class WindowSeven {
    public function openOlderDoc(string $filename): string {
        return "Se detecta un archivo antiguo de Word abierto: $filename";
    }

    public function openOlderXls(string $filename): string {
        return "Se detecta un archivo antiguo de Excel abierto: $filename";
    }

    public function openOlderPpt(string $filename): string {
        return "Se detecta un archivo antiguo de PowerPoint abierto: $filename";
    }
}
