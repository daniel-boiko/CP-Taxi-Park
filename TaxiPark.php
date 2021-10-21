<?php

#TaxiPark with 2 extends classes Car and Driver

CONST START_COUNT_DRIVER = 0;
CONST START_COUNT_CAR = 0;

class TaxiPark extends Car
{
    public array $listDriver = [];
    public array $listCar = [];
    public int $countDriver;
    public int $countCar;

    function inputListDriver()
    {
        echo "Count of Drivers: ";
        $countDriver = readline();

        for ($i=START_COUNT_DRIVER; $i<$countDriver; $i++)
        {
            echo "Input Driver [" . $i+1 . "] \n";
            $newDriver = new Driver();
            $newDriver -> inputDriver();
            $this -> listDriver[$i] = $newDriver;
        }
    }

    function inputListCar()
    {
        echo "Count of Cars: ";
        $countCar = readline();

        for ($i=START_COUNT_CAR; $i<$countCar; $i++)
        {
            echo "Input Car № " . $i+1 . "] \n ";
            $newCar = new Car;
            $newCar -> inputCar();
            $this -> listCar[$i] = $newCar;
        }
    }

/*    function outputListDriver()
    {
        echo "------------------- \n";
        echo "Info about Drivers ";
        echo date('r') . "\n";
        for ($i=START_COUNT_DRIVER; $i < $this->)
    } */
}
