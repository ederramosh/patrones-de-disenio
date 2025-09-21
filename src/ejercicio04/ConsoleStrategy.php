<?php
namespace ejercicio04;

class ConsoleStrategy implements OutputStrategy {
    public function show(string $message): void {
        echo "Console: " . $message . PHP_EOL;
    }
}
