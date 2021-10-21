<?php

#TaxiPark with 2 extends classes Car and Driver

CONST START_COUNT_DRIVER = 0;
CONST START_COUNT_CAR = 0;

class TaxiPark extends Car
{
    public array $listDriver = [];
    public array $listCar = [];
    public int $countDriver = 0 ;
    public int $countCar = 0;

    /*  public function __construct()
      {

    */
    function inputListDriver()
    {
        echo "Count of Drivers: ";
        $countListDriver = readline();

        for ($i = START_COUNT_DRIVER; $i < ($countListDriver + $this -> countDriver); $i++) {
            echo "Input Driver [" . ($i+1) . "] \n";
            $newDriver = new Driver();
            $newDriver->inputDriver();
            $this->listDriver[$i] = $newDriver;
        }

        $this -> countDriver = $countListDriver + $this -> countDriver;
    }

    function inputListCar()
    {
        echo "Count of Cars: ";
        $countListCar = readline();

        for ($i = START_COUNT_CAR; $i < ($countListCar + $this -> countCar); $i++) {
            echo "Input Car № [" . ($i+1) . "] \n";
            $newCar = new Car;
            $newCar -> inputCar();
            $this -> listCar[$i] = $newCar;
        }

        $this -> countCar = $countListCar + $this -> countCar;
    }

    function outputListDriver()
    {
        echo "-------------- \n";
        echo "DRIVERS: " . date('r') . "\n";
        for ($i=0; $i < $this -> countDriver; $i++)
        {
            echo "Driver [" . ($i+1) . "] \n";
            $this -> listDriver[$i] -> outputDriver();
            echo "\n \n";
        }
    }

    function outputListCar()
    {
        echo "-------------- \n";
        echo "CARS: " . date('r') . "\n";
        for ($i=0; $i < $this -> countCar; $i++)
        {
            echo "Car [" . ($i+1) . "] \n";
            $this -> listCar[$i] -> outputCar();
            echo "\n \n";
        }
    }

    function outputInfo()
    {
        echo "Taxi-Park by Daniil B. \n";
        echo "CARS: " . date('r') . "\n";
        for ($i=0; $i < $this -> countCar; $i++)
        {
            echo "Car [" . ($i+1) . "] \n";
            $this -> listCar[$i] -> outputCar();
            echo "\n \n";
        }

        echo "DRIVERS: " . date('r') . "\n";
        for ($i=0; $i < $this -> countDriver; $i++)
        {
            echo "Driver [" . ($i+1) . "] \n";
            $this -> listDriver[$i] -> outputDriver();
            echo "\n \n";
        }
    }
}

/*    function outputListDriver()
    {
        echo "------------------- \n";
        echo "Info about Drivers ";
        echo date('r') . "\n";
        for ($i=START_COUNT_DRIVER; $i < $this-> )
    }*/
