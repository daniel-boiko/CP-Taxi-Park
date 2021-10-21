<?php

class Car extends Driver
{
    public string $modelCar;
    public string $colorCar;
    public string $numberCar;

    function inputCar()
    {
        echo "Model of Car: ";
        $this -> modelCar = readline();
        echo "Color of Car: ";
        $this -> colorCar = readline();
        echo "Number of Car: ";
        $this -> numberCar = readline();
    }

    function outputCar()
    {
        echo "Model: " . $this -> modelCar . "\n";
        echo "Color: " . $this -> colorCar . "\n";
        echo "Car Number: " . $this -> numberCar . "\n";
    }

}