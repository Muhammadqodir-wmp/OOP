<?php
class Product

{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getInfo(): string
    {
        return "Mahsulot: " . $this->name;
    }
}

class Guruch extends Product
{
    private float $price;

    public function __construct(string $name, float $price)
    {
        parent::__construct($name);


        $this->price = $price;
    }

    public function getInfo(): string
    {
        return parent::getInfo() . " Guruch narxi: " . $this->price;
    }
}

$guruch = new Guruch("Lazer guruch", 18000);

echo $guruch->getInfo();

//self - joriy klass
//parent:: ota klass
//  static:: chaqirilyotgan klass