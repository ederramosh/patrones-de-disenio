<?php
require_once __DIR__ . '/vendor/autoload.php';

use ejercicio01\PlayerFactory;

use ejercicio02\WindowSeven;
use ejercicio02\Adapter;
use ejercicio02\WindowTen;

use ejercicio03\Soldier;
use ejercicio03\Terrorist;
use ejercicio03\Gun;
use ejercicio03\AKGun;
use ejercicio03\Bomb;

$playerType = "Skeleton";
$player = PlayerFactory::createPlayer($playerType);

echo "Personaje: " . $player->getName() . "<br>";
echo $player->attack();

echo "<br><br>";

$windowSeven = new WindowSeven();

$adapter = new Adapter($windowSeven);

$windows10 = new WindowTen($adapter);

$windows10->openFile("Design Patterns in PHP.doc");
$windows10->openFile("My Budget 2026.xls");
$windows10->openFile("Principios Solid.ppt");

$soldier = new Soldier();
$soldierWithGun = new Gun(new AKGun($soldier));

echo $soldierWithGun->getDescription() . "\n"; 
echo "Total damage: " . $soldierWithGun->getHit() . "\n\n";


$terrorist = new Terrorist();
$terroristWithBomb = new Bomb($terrorist);

echo $terroristWithBomb->getDescription() . "\n";
echo "Total damage: " . $terroristWithBomb->getHit() . "\n";