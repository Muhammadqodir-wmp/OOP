<?php 

require_once __DIR__ . "/vendor/autoload.php";

use App\Models\Product;
use App\Models\User;
use App\Services\Order;



$obj1 =  new Product(99000, "Futbolka");

$obj23 = clone $obj1;

$obj23->price = 110000;

echo $obj1->name . "-> Mahsulot nomi " . $obj1->price . "->mahsulot narxi";

echo "<br>";

echo $obj23->name . "-> Mahsulot nomi " . $obj23->price . "->mahsulot narxi";