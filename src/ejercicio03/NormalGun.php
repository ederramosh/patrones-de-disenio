<?php
namespace ejercicio03;

class NormalGun extends PlayerDecorator {
    public function getDescription(): string {
        return $this->player->getDescription() . " with a  gun";
    }

    public function getHit(): int {
        return $this->player->getHit() + rand(20,50);
    }
}
