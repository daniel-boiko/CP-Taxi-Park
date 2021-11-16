<?php

class Factory
{
    public function build ()
    {
        $newDriver = $this -> buildDriver();
        $newCar = $this -> buildCar();
        return $this -> buildTaxiStation($newDriver, $newCar);
    }

    public function buildTaxistation ($newDriver, $newCar)
    {
        return TaxiStation::getInstance($newDriver,$newCar);
    }

    public function buildDriver ():Driver
    {
        return new Driver();
    }

    public function buildCar ():Car
    {
        return new Car();
    }
}
