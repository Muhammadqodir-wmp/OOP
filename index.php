<?php 

require_once __DIR__ . "/autoload.php";

use Vehicle\Car;

$audi = new Car;

$audi->setModel('Audi');

echo $audi->getModel();