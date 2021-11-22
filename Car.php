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
        echo "_________________________________ \n";
        if ($this -> typeCar = 1) {
            echo "| Type: Passenger Car           \n";
        }
        else if ($this -> typeCar = 2)
        {
            echo "| Type: Truck                   \n";
        }
        else if ($this -> typeCar = 3)
        {
            echo "| Type: Minivan car             \n";
        }
        echo "| Model: " . $this -> modelCar . "\n";
        echo "| Color: " . $this -> colorCar . "\n";
        echo "| Car Number: " . $this -> numberCar . "\n";
        echo "|________________________________";
    }

    function outputPassCar ()
    {
        echo "_________________________________";
        echo "| Type: Passenger Car \n";
        echo "| Model: " . $this -> modelCar . "\n";
        echo "| Color: " . $this -> colorCar . "\n";
        echo "| Car Number: " . $this -> numberCar . "\n";
        echo "|________________________________";
    }

    function outputTruckCar ()
    {
        echo "__________________________________";
        echo "| Type: Truck                   \n";
        echo "| Model:                        " . $this -> modelCar . "\n";
        echo "| Color:                        " . $this -> colorCar . "\n";
        echo "| Car Number:                   " . $this -> numberCar . "\n";
        echo "|_________________________________";
    }

    function outputMinivanCar ()
    {
        echo "__________________________________";
        echo "| Type: Minivan Car             \n";
        echo "| Model:                        " . $this -> modelCar . "\n";
        echo "| Color:                        " . $this -> colorCar . "\n";
        echo "| Car Number:                   " . $this -> numberCar . "\n";
        echo "|_________________________________";
    }
}