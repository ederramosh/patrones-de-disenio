<?php
namespace ejercicio03;

class AKGun extends PlayerDecorator {
    public function getDescription(): string {
        return $this->player->getDescription() . " with a AK-47";
    }

    public function getHit(): int {
        return $this->player->getHit() + rand(30,70);
    }
}
