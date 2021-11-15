<?php

class Car extends Driver
{
    public string $modelCar;
    public string $colorCar;
    public string $numberCar;
    public string $typeCar;

    function __construct()
    {
        $this -> typeCar = "None";
        $this -> modelCar = "None";
        $this -> colorCar = "None";
        $this -> numberCar = "None";
    }

    function inputCar()
    {
        echo "Type of Car: ";
        $this -> typeCar = readline();
        echo "Model of Car: ";
        $this -> modelCar = readline();
        echo "Color of Car: ";
        $this -> colorCar = readline();
        echo "Number of Car: ";
        $this -> numberCar = readline();
    }

    function outputCar()
    {
        echo "Type: " . $this -> typeCar . "\n";
        echo "Model: " . $this -> modelCar . "\n";
        echo "Color: " . $this -> colorCar . "\n";
        echo "Car Number: " . $this -> numberCar . "\n";
    }

}