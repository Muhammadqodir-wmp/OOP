<?php 

require_once __DIR__ . "/vendor/autoload.php";

use App\Models\Product;
use App\Models\User;
use App\Services\Order;

$obj1 = new Product;

echo $obj1->getPrice(20000);

echo "<br>";

$obj2 = new User;

echo $obj2->getName("Muhammadqodir");


$obj4 =  $obj2;

var_dump($obj4);

echo "<br>";

$obj3 = new Order;

echo $obj3->createOrder();