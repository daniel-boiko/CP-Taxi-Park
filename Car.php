<?php

class Car extends Driver
{
    public string $typeCar;
    public string $modelCar;
    public string $colorCar;
    public string $numberCar;

    #Class constructor
    function __construct()
    {
        $this -> typeCar = "None";
        $this -> modelCar = "None";
        $this -> colorCar = "None";
        $this -> numberCar = "None";
    }

    #Input info about passenger car
    function inputPassCar ()
    {
        echo "Model of Car: ";
        $this -> modelCar = readline();
        echo "Color of Car: ";
        $this -> colorCar = readline();
        echo "Number of Car: ";
        $this -> numberCar = readline();
    }

    #Input info about truck car
    function inputTruckCar ()
    {
        echo "Model of Car: ";
        $this -> modelCar = readline();
        echo "Color of Car: ";
        $this -> colorCar = readline();
        echo "Number of Car: ";
        $this -> numberCar = readline();
    }

    #Input info about minivan car
    function inputMinivanCar ()
    {
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

    function outputPassCar ()
    {
        echo "Type: Passenger Car \n";
        echo "Model: " . $this -> modelCar . "\n";
        echo "Color: " . $this -> colorCar . "\n";
        echo "Car Number: " . $this -> numberCar . "\n";
    }

    function outputTruckCar ()
    {
        echo "Type: Truck \n";
        echo "Model: " . $this -> modelCar . "\n";
        echo "Color: " . $this -> colorCar . "\n";
        echo "Car Number: " . $this -> numberCar . "\n";
    }

    function outputMinivanCar ()
    {
        echo "Type: Minivan Car \n";
        echo "Model: " . $this -> modelCar . "\n";
        echo "Color: " . $this -> colorCar . "\n";
        echo "Car Number: " . $this -> numberCar . "\n";
    }
}