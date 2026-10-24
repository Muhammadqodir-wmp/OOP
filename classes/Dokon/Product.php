<?php

namespace Dokon;

use Exception;

class Product
{
    public int $price;
    public string $name;
    private int $index=1000;
    private int $foydafoizi = 71;

    public function __construct(int $price, string $name)
    {   
        $this->name = $name;
        $this->price = $price;
    }

    public function __destruct()
    {
        echo "Ushbu $this->name obyekt yo'q qilinmoqda!!!";
    }

    public function __get(string $property): mixed {
        if($property==="index"){
            return $this->index;
        }

        if($property==="foydafoizi"){
            return $this->foydafoizi;
        }

        throw new Exception("Bunday $property mavjud emas");
    }

    public function __set(string $property, mixed $value){
        if($property ==="index"){
            $this->index = $value;
        }
        if($property==="foydafoizi"){
            $this->foydafoizi = $value;
        }
    }


    public function getInfo(): string
    {
        return "Bu do'kondagi mahsulot";
    }

    public function __toString()
    {
        return "Mahsulot nomi: " . $this->name . " Mahsulot narxi: " .$this->price;
    }
    
    public function __clone(){
        echo "Obyektdan klone olinyabdi ";
    }
}