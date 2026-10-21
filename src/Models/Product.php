<?php

namespace App\Models;

class Product{

    public float $price;
    public string $name;

    public function __construct(float $price, string $name){
        $this->price = $price;
        $this->name = $name;
    }

    // public function getInfo():string{
    //     return $this->$name  +"mahsulot nomi . $this->$price -";
    // }

    public function getPrice(float $amount):string{
        return " $amount - bu mahsulot narxi ";
    }

    public function __clone()
    {
        return $this->name .=' (Nusxa)';
    }
}