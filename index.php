<?php
require_once __DIR__ . '/vendor/autoload.php';

use ejercicio01\PlayerFactory;

$playerType = "Skeleton";
$player = PlayerFactory::createPlayer($playerType);

echo "Personaje: " . $player->getName() . "<br>";
echo $player->attack();
