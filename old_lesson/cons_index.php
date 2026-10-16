<?php

class Product{
    public const CATEGORY = "Oziq-ovqat";
    protected string $name;


    public function __construct($name)
    {
        return $this->name;
    }

    public function getInfo():string{
        return "Mahsulot nomi: " . $this->name . " Mahsulot turi: " . self::CATEGORY;
    }

}

class Guruch extends Product{
    #[Override]
    public function getInfo(): string
    {
        return parent::getInfo() . " Guruch mahsuloti haqida";
    }


}

$xorazm = new Guruch('Xorazm guruchi');

echo $xorazm->getInfo();