<?php
namespace ejercicio03;

interface Player {
    public function getDescription(): string;
    public function getHit(): int;
}