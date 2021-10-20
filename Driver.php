<?php

class Driver extends Person
{

    private string $numberCar;

    function __construct()
    {
        parent::__construct();
        $this->numberCar= "None";
    }

    function inputNumberCar()
    {
        parent::inputPerson();
        echo "Number of his car:";
        $this -> numberCar = readline();
    }

    function printElement()
    {
        parent::printPerson();
        echo "Number of his car: " . $this -> numberCar . "\n";
    }


}

$newElem = new Driver;

