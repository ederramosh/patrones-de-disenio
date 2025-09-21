<?php
namespace ejercicio04;

class JsonStrategy implements OutputStrategy {
    public function show(string $message): void {
        echo json_encode(["mensaje" => $message], JSON_PRETTY_PRINT) . PHP_EOL;
    }
}
