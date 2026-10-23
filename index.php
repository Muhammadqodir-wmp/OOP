<?php

require_once __DIR__.  "/autoload.php";

use Dokon\Product;


$mahsulot = new Product(20000, "Guruch");

$yangiMahsulot = clone $mahsulot;

// unset($mahsulot);

$yangiMahsulot->name = "Grechka";
$yangiMahsulot->price = 30000;

echo $yangiMahsulot->index;

function divide(int $a, int $b){

    if($b === 0){
         throw new Exception("Nolga bo'lish mumkin emas");
    }

    return $a / $b;

}

try{
    echo divide(19,0);

}catch(Exception $e){
    echo "Xatolik: " . $e->getMessage();
}

echo "<br> Dastur davom etmoqda...";

