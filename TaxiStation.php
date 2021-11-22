<?php

#TaxiPark with 2 extends classes Car and Driver

class TaxiStation extends Car
{
    #Values of TaxiStation class (arrays and count[Driver/Car])
    public array $listDriver = [];
    public array $listCar = [];
    public array $listPassCar = [];
    public array $listTruckCar = [];
    public array $listMinivanCar = [];
    public int $countDriver = 0;
    public int $countCar = 0;
    public int $countPassCar = 0;
    public int $countTruckCar = 0;
    public int $countMinivanCar = 0;


    #Class constructor
    public function __construct(Driver $newDriver, Car $newCar) {
        $this -> listDriver[] = $newDriver;
        $this -> listCar[] = $newCar;
        $this -> listPassCar[] = $newCar;
        $this -> countCar = 0;
        $this -> countDriver = 0;
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
    function inputListDriver() {
        echo "Count of Drivers: ";
        $countListDriver = readline();

        if ($countListDriver <= 0) {
            echo "Be careful! Database will be empty if you type 0 \n";
        }
        else {
                for ($i = $this->countDriver; $i < ($countListDriver + $this->countDriver); $i++) {
                        echo "Input Driver [" . ($i + 1) . "] \n";
                        $newDriver = new Driver();
                        $newDriver -> inputDriver();
                        $this -> listDriver[$i] = $newDriver;
                }
        }

        $this -> countDriver = $countListDriver + $this -> countDriver;
    }

    #Input info about Cars (array)
    function inputListCar()
    {
        echo "Count of Cars: ";
        $countListCar = readline();

        if ($countListCar <= 0) {
            echo "Be careful! Database will be empty if you type 0 \n";
        }

        for ($i = $this -> countCar; $i < ($countListCar + $this -> countCar); $i++) {
            echo "Choose what type of car you want to add: ";
            $chooseType = readline();

            echo "Input Car № [" . ($i + 1) . "] \n";

            if ($chooseType == 1) {
                $newCar = new Car;
                $newCar->inputPassCar();
                $this->listCar[$i] = $newCar;
                $this->listPassCar[$i] = $newCar;
                $this->countPassCar = $this->countPassCar + 1;
            } else if ($chooseType == 2) {
                $newCar = new Car;
                $newCar->inputTruckCar();
                $this->listCar[$i] = $newCar;
                $this->listTruckCar[$i] = $newCar;
                $this->countTruckCar = $this->countTruckCar + 1;
            } else if ($chooseType == 3) {
                $newCar = new Car;
                $newCar->inputMinivanCar();
                $this->listCar[$i] = $newCar;
                $this->listMinivanCar[$i] = $newCar;
                $this->countMinivanCar = $this->countMinivanCar + 1;
            }
        }
        $this -> countCar = $countListCar + $this -> countCar;
    }

    #Output info about Driver (array)
    function outputListDriver()
    {
        echo "\n";
        echo "DRIVERS: " . date('r') . "\n";
        for ($i = 0; $i < $this -> countDriver; $i++) {
            echo "__________________________________ \n";
            echo "| Driver [" . ($i+1) . "] \n";
            $this -> listDriver[$i] -> outputDriver();
            echo "\n \n";
        }
    }

    #Output info about Car (array)
    function outputListCar ()
    {
        echo "\n";
        echo "CARS: " . date('r') . "\n";
        echo "__________________________________ \n";
        for ($i = 0; $i < $this -> countCar; $i++) {
            echo "__________________________________ \n";
            echo "| Car [" . ($i+1) . "] \n";
            $this -> listCar[$i] -> outputCar();
            echo "\n \n";
        }
    }

    #Output only passenger cars (array)
    function outputListPassCar ()
    {
        echo "\n";
        echo "PASSENGER CARS: " . date('r') . "\n";
        for ($i = 0; $i < $this -> countPassCar; $i++) {
            echo "__________________________________ \n";
            echo "| Car [" . ($i+1) . "] \n";
            $this -> listPassCar[$i] -> outputPassCar();
            echo "\n \n";
        }
    }

    #Output only truck cars (array)
    function outputListTruckCar ()
    {
        echo "\n";
        echo "TRUCK CARS: " . date('r') . "\n";
        for ($i = 0; $i < $this -> countTruckCar; $i++) {
            echo "__________________________________ \n";
            echo "| Car [" . ($i + 1) . "] \n";
            $this -> listTruckCar[$i] -> outputTruckCar();
            echo "\n \n";
        }
    }

    #Output only  minivan cars (array)
    function outputListMinivanCar()
    {
        echo "\n";
        echo "MINIVAN CARS: " . date('r') . "\n";
        for ($i = 0; $i < $this -> countMinivanCar; $i++) {
            echo "__________________________________ \n";
            echo "| Car [" . ($i + 1) . "] \n";
            $this -> listMinivanCar[$i] -> outputMinivanCar();
            echo "\n \n";

        }
    }

    #Output info about Drivers and Cars (arrays)
    function outputInfo()
    {
        echo "| Taxi-Park by Daniil B. \n";
        echo "| CARS: " . date('r') . "\n";
        for ($i = 0; $i < $this -> countCar; $i++) {
            echo "__________________________________ \n";
            echo "| Car [" . ($i+1) . "] \n";
            $this -> listCar[$i] -> outputCar();
            echo "\n \n";
        }

        echo "| DRIVERS: " . date('r') . "\n";
        for ($i = 0; $i < $this -> countDriver; $i++) {
            echo "__________________________________ \n";
            echo "| Driver [" . ($i+1) . "] \n";
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
            unset ($this -> listCar[$i]);
            unset ($this -> listPassCar[$i]);
        }

        $this -> listCar = [];
        $this -> listPassCar = [];
        $this -> countCar = 0;
    }

    #Deleting info about current driver
    function deleteCurrentDriverInfo()
    {
        echo "Choose a driver you want to delete [0 - " . $this -> countCar . "]";
        $delKey = readline();
        unset ($this -> listDriver[$delKey]);
    }

    function deleteCurrentCarInfo()
    {
        echo "Choose a car you want to delete [0 - ". $this -> countCar . "]";
        $delKey = readline();
        unset ($this -> listCar[$delKey]);
    }
}
