<?php
namespace ejercicio03;

class Terrorist implements Player {
    public function getDescription(): string {
        return "Terrorist";
    }

    public function getHit(): int {
        return rand(10,100);
    }
}