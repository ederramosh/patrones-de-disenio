<?php
namespace ejercicio04;

interface OutputStrategy {
    public function show(string $message): void;
}
