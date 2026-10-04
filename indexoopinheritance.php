<?php

class Car
{
    public $model;
    public $year;

    function __construct($model, $year)
    {
        $this->model = $model;
        $this->year = $year;
    }

    function driving()
    {
        return "driving";
    }

    function getFuel(){
        return 'fueling';
    }

    function setModel($model){
        $this->model = $model;
    }
}

// $ncar = Car("Lamborghini huracan", '2025');

 class Elcar extends Car{
    public $battery;

    public function charging(){
        return "Zaryadlanmoqda...";
    }

    #[Override]
    public function driving()
    {
        return "Elektr moshina haydalmoqda!!!";
    }
 }


 class RaceCar extends Car{
    //
 }

 class PuCar extends Car{
    //
 }

$tesla = new Elcar('Tesla X908', 2026);

$tesla->battery = '30000mah';

echo $tesla->driving();