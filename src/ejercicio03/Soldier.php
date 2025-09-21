<?php
namespace ejercicio03;

class Soldier implements Player {
    public function getDescription(): string {
        return "Soldier";
    }

    public function getHit(): int {
        return rand(10,100);
    }
}