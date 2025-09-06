<?php

namespace ejercicio01;

abstract class Player {
    protected $name;
    protected $attack;
    protected $strength;

    public function __construct($name, $attack, $strength) {
        $this->name = $name;
        $this->attack = $attack;
        $this->strength = $strength;
    }

    public function getName() {
        return $this->name;
    }

    public function getAttack() {
        return $this->attack;
    }

    public function getStrength() {
        return $this->strength;
    }

    abstract public function attack();
}
