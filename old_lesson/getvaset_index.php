<?php

require_once __DIR__.  "/autoload.php";

use Dokon\Product;


$mahsulot = new Product(20000, "Guruch");

$yangiMahsulot = clone $mahsulot;

// unset($mahsulot);

$yangiMahsulot->name = "Grechka";
$yangiMahsulot->price = 30000;

echo $yangiMahsulot->index;

echo "<br>";

function divide(int $a, int $b){

    if($b === 0){
        //  throw new Exception("Nolga bo'lish mumkin emas");
    }

    return $a / $b;

}
echo "<br>";

$yangiMahsulot->index = 10001;

echo $yangiMahsulot->foydafoizi;

$yangiMahsulot->foydafoizi = 81;

echo "<br>" . $yangiMahsulot->foydafoizi;




echo "<br> Dastur davom etmoqda...";

