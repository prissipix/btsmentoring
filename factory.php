<?php

//Homework for week of 11/04 - 11/09

class Car
{
    private $vehicle_make;
    private $vehicle_model;

    public function __construct($make, $model)
    {
        $this->vehicle_make = $make;
        $this->vehicle_model = $model;
    }

    public function get_make_and_model()
    {
        return $this->vehicle_make . ' ' . $this->vehicle_model;
    }
}

class CarFactory
{
    public static function create($make, $model)
    {
        return new Car($make, $model);
    }
}

// this will create car factory object
$saturn = CarFactory::create('Saturn', 'Sky');

print_r($saturn->get_make_and_model()); 







?>