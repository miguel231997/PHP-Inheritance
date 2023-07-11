<?php

class Vehicle
{
    protected $brand;

    public function __construct($brand)
    {
        $this->brand = $brand;
    }

    public function getInfoe()
    {
        return 'Brand: ' . $this->brand;
    }
}

class Car extends Vehicle
{
    private $model;

    public function __construct($brand, $model) 
    {
        parent::__construct($brand);
        $this->model = $model;
    }

    public function getInfo()
    {
        return parent::getInfoe() . ". model: " . $this->model;
    }
}

//create an instance of a car
$car = new Car("Toyota", "Camry");

//call the getInfo method on the car
echo $car->getInfo();