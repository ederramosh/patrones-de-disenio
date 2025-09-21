<?php
namespace ejercicio02;

interface WindowInterface {
    public function open(string $filename): string;
}