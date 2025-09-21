<?php
namespace ejercicio03;

abstract class PlayerDecorator implements Player {
    protected Player $player;

    public function __construct(Player $player) {
        $this->player = $player;
    }

    public function getDescription(): string {
        return $this->player->getDescription();
    }

    public function getHit(): int {
        return $this->player->getHit();
    }
}
