<?php
namespace ejercicio01;

class PlayerFactory {
    public static function createPlayer(string $playerType): Player {
        return match($playerType) {
            "Skeleton"   => new Skeleton(),
            "Zombie" => new Zombie(),
            default   => throw new \InvalidArgumentException("Personaje no válido: $playerType"),
        };
    }
}
