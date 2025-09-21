<?php
namespace ejercicio02;

class WindowTen {
    private WindowInterface $fileHandler;

    public function __construct(WindowInterface $fileHandler) {
        $this->fileHandler = $fileHandler;
    }

    public function openFile(string $filename): void {
        echo $this->fileHandler->open($filename) . "<br>";
    }
}
