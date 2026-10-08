<?php

class Dog{
    public string $name;

    public static function eat(){
       self::bark();
        return "eating";
    }

    public function bark(){
        $this->eat();
        return "Vov-vov";
    }

}


class Product{

    public static string $type = "Product";
    public static int $count = 0;

    public function __construct()
    {
             self::$count++;
    }

    public static function getType():string{
        return static::$type;
    } 

    public static function getCount():int{
        return self::$count;
    }
}

class Guruch extends Product{
    public static string $type = "Guruch";
}

class Makaron extends Product{
    public static string $type = "Makaron";
}

echo Guruch::getType();
echo "<br>";
echo Makaron::getType();


// self o'zidagi static metodda, parent - ota-onadagi static metodda!

