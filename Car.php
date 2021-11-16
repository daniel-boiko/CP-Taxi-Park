<?php

class Car extends Driver
{
    public string $modelCar;
    public string $colorCar;
    public string $numberCar;
    public string $typeCar;

    #Class constructor
    function __construct()
    {
        $this -> typeCar = "None";
        $this -> modelCar = "None";
        $this -> colorCar = "None";
        $this -> numberCar = "None";
    }

    #Form to input info about Car (type, model, color)
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

    #Form to output info about Car (type, model, color)
    function outputCar()
    {
        echo "Type: " . $this -> typeCar . "\n";
        echo "Model: " . $this -> modelCar . "\n";
        echo "Color: " . $this -> colorCar . "\n";
        echo "Car Number: " . $this -> numberCar . "\n";
    }

}