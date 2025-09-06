<?php

namespace ejercicio01;

class Skeleton extends Player {
    public function __construct() {
        parent::__construct("Esqueleto", "espada", rand(10,100));
    }

    public function attack() {
        return "El {$this->name} usa su {$this->attack} con una fuerza de {$this->strength}.";
    }
}

