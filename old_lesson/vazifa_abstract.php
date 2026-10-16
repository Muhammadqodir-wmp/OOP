<?php


abstract class Employee
{
    abstract protected function work();
}

class Programmer extends Employee
{
    public function work()
    {
        return "Dasturchi kod yozmoqda...";
    }
}

class Designer extends Employee
{
    #[Override]
    public function work()
    {
        return "Dizayner maket tayyorlamoqda...";
    }
}

class Manager extends Employee
{
    function work()
    {
        return "Manager jamoani boshqarmoqdaa...";
    }
}


$dasturchi = new Programmer();

echo $dasturchi->work() . "<br>";

$designer = new Designer();

echo $designer->work() . "<br>";

$manager = new Manager;

echo $manager->work() . "<br>";

abstract class Payment{
    protected float $balance;

    public function __construct($balance)
    {
        $this->balance = $balance;
    }

    abstract public function pay($amount);

    public function getBalance(){
        return $this->balance;
    }
}

class Payme extends Payment{
    #[Override]
    public function pay($amount)
    {
        return $this->balance=$this->balance - $amount;
    }
}

class Click extends Payment{
    public function pay($amount){
        return $this->balance=$this->balance-$amount;
    }
}

class Uzcard extends Payment{
    public function pay($amount){
        return $this->balance=$this->balance-$amount;
    }
}

$tolov = new Payme(30000);
$tolov->pay(2000);

echo $tolov->getBalance();