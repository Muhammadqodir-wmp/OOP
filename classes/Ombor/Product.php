<?php

namespace Ombor;

class Product
{
    public float $tanNarx;
    public string $name;

    public function getInfo(): string
    {
        return "Bu ombordagi mahsulot";
    }

    
}