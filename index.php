<?php

interface Payment
{
    public function pay(float $amount): string;
}

class Uzcard implements Payment
{

    public function pay(float $amount): string
    {
        return "Uzcard orqali $amount so'm to'landi";
    }
}

class Payme implements Payment
{

    #[Override]
    public function pay(float $amount): string
    {
        return "Payme orqali $amount so'm to'landi";
    }
}

class Click implements Payment{

    public function pay(float $amount):string{
        return "Click orqali $amount so'm to'landi";
    }
}

$clikchi = new Click;

echo $clikchi->pay(50000);