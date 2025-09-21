<?php
namespace ejercicio04;

class TxtStrategy implements OutputStrategy {
    public function show(string $message): void {
        file_put_contents("output.txt", $message . PHP_EOL, FILE_APPEND);
        echo "Message saved in output.txt" . PHP_EOL;
    }
}
