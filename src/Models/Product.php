<?php

namespace App\Models;

class Product{
    public function getInfo():string{
        return "Bu product mahsuloti";
    }

    public function getPrice(float $amount):string{
        return " $amount - bu mahsulot narxi ";
    }
}