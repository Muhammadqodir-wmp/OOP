<?php

namespace Vehicle;

class Car
{
    protected string $model;
    protected int $year;

    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel(string $value)
    {
        $this->model = $value;
    }

    public function getYear():int{
        return $this->year;
    }

    public function setYear(int $value){
        $this->year = $value;
    }

}
