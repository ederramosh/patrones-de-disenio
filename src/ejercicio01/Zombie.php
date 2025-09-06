<?php

namespace ejercicio01;
class Zombie extends Player {
    public function __construct() {
        parent::__construct("Zombi", "golpea", rand(10,100));
    }

    public function attack() {
        return "El {$this->name} {$this->attack}, con una fuerza de  {$this->strength}.";
    }
}
