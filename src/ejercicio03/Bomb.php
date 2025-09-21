<?php
namespace ejercicio03;

class Bomb extends PlayerDecorator {
    public function getDescription(): string {
        return $this->player->getDescription() + " with a bomb";
    }

    public function getHit(): int {
        return $this->player->getHit() + rand(50,100);
    }
}
