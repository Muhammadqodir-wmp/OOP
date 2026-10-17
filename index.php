<?php 

require_once "savdo/Customer.php";
require_once "savdo/Product.php";

use App\Models\Product;
use App\Users\Customer;

$obj1 = new Product;

echo $obj1->getInfo() . "    ";

$obj2 = new Customer;

echo $obj2->getInfo();