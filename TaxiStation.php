<?php

#TaxiPark with 2 extends classes Car and Driver


class TaxiStation extends Car
{
    #Values of TaxiStation class (arrays and count[Driver/Car])
    public array $listDriver = [];
    public array $listCar = [];
    public int $countDriver = 0 ;
    public int $countCar = 0;


    #Class constructor
    public function __construct(Driver $newDriver, Car $newCar) {
        $this -> listDriver[] = $newDriver;
        $this -> listCar[] = $newCar;
    }

    #Factory pattern
    public static function getInstance ($newDriver,$newCar) {
        static $instance = null;
        if (null == $instance) {
            if (isset($newDriver)) {
                $instance = new static ($newDriver, $newCar);
            }
        }
        else {
            echo "ERROR: using existing class \n";
        }
        return $instance;
    }

    #Input info about Drivers (array)
    function inputListDriver()
    {
        echo "Count of Drivers: ";
        $countListDriver = readline();

        if ($countListDriver <= 0){
            echo "Database will be empty if count = 0 \n";
        }
        else {
            for ($i = $this->countDriver; $i < ($countListDriver + $this->countDriver); $i++) {
                echo "Input Driver [" . ($i + 1) . "] \n";
                $newDriver = new Driver();
                $newDriver->inputDriver();
                $this->listDriver[$i] = $newDriver;
            }
        }

        $this -> countDriver = $countListDriver + $this -> countDriver;
    }

    #Input info about Cars (array)
    function inputListCar()
    {
        echo "Count of Cars: ";
        $countListCar = readline();

        if ($countListCar <= 0){
            echo "Database will be empty if count = 0 \n";
        }

        for ($i = $this -> countCar; $i < ($countListCar + $this -> countCar); $i++) {
            echo "Input Car № [" . ($i+1) . "] \n";
            $newCar = new Car;
            $newCar -> inputCar();
            $this -> listCar[$i] = $newCar;
        }

        $this -> countCar = $countListCar + $this -> countCar;
    }

    #Output info about Driver (array)
    function outputListDriver()
    {
        echo "-------------- \n";
        echo "DRIVERS: " . date('r') . "\n";
        for ($i=0; $i < $this -> countDriver; $i++) {
            echo "Driver [" . ($i+1) . "] \n";
            $this -> listDriver[$i] -> outputDriver();
            echo "\n \n";
        }
    }

    #Output info about Car (array)
    function outputListCar()
    {
        echo "-------------- \n";
        echo "CARS: " . date('r') . "\n";
        for ($i=0; $i < $this -> countCar; $i++) {
            echo "Car [" . ($i+1) . "] \n";
            $this -> listCar[$i] -> outputCar();
            echo "\n \n";
        }
    }

    #Output info about Drivers and Cars (arrays)
    function outputInfo()
    {
        echo "Taxi-Park by Daniil B. \n";
        echo "CARS: " . date('r') . "\n";
        for ($i=0; $i < $this -> countCar; $i++) {
            echo "Car [" . ($i+1) . "] \n";
            $this -> listCar[$i] -> outputCar();
            echo "\n \n";
        }

        echo "DRIVERS: " . date('r') . "\n";
        for ($i=0; $i < $this -> countDriver; $i++) {
            echo "Driver [" . ($i+1) . "] \n";
            $this -> listDriver[$i] -> outputDriver();
            echo "\n \n";
        }
    }

    #Deleting info about all Drivers
    function deleteDriverInfo ()
    {
        for ($i = 0; $i < $this -> countDriver; $i++) {
            unset ($this -> listDriver[$i]);
        }

        $this -> listDriver = [];
        $this -> countDriver = 0;
    }

    #Deleting info about all Cars
    function deleteCarInfo()
    {
        for ($i = 0; $i < $this -> countCar; $i++) {
            unset ($this -> listDriver[$i]);
        }

        $this -> listCar = [];
        $this -> countCar = 0;
    }
    #unset $this -> listCar[]
}
