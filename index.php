<?php 

require_once __DIR__  . "/autoload.php";

use Transport\Bus;
use Transport\Car;

$car = new Car;

echo $car->move();

echo "<br>";

$bus = new Bus;

echo $bus->move();
