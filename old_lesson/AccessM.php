<?php

class Car
{
    public $model;
    protected $year;
    private $miles;

    function __construct($model, $year)
    {
        $this->model = $model;
        $this->year = $year;
    }

    function driving()
    {
        return "driving";
    }

    function getFuel()
    {
        return 'fueling';
    }

    function setModel($model)
    {
        $this->model = $model;
    }

    function getMiles($miles){
        return $this->miles = $miles - 1500;
    }

    protected function cost(){
        $cost = $this->year + $this->miles;

        return $cost;
    }
}


class Elcar extends Car
{
    public $battery;

    public function charging()
    {
        return "Zaryadlanmoqda...";
    }

    #[Override]
    public function driving()
    {
        return "Elektr moshina haydalmoqda!!!";
    }

    public function getCost(){
        return $this->cost();
    }
}

$ncar = new ElCar("Lamborghini huracan", '2025');

echo $ncar->getMiles(40000);

echo "<br>" . 'Mashina narxi: ' .$ncar->getCost();