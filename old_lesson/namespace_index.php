<?php

require_once "classes/Dokon/Product.php";
require_once "classes/Ombor/Product.php";
require_once "classes/Payme.php";

use Dokon\Product as DokonP;
use Ombor\Product as OmborP;
use  App\Services\Payment\Payme;

$ombor = new DokonP();

$dokon = new OmborP();

$tolov = new Payme;

echo $ombor->getInfo(); 

echo "<br>";

echo $dokon->getInfo();
echo "<br>";
echo $tolov->pay();
