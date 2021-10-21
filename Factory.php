<?php

class Factory
{
    public function build ()
    {
        $newDriver = $this -> buildDriver();
        $newCar = $this -> buildCar();
        return $this -> buildGovernment($newDriver, $newCar);
    }

    public function buildGovernment ($newPatient, $newDoctor)
    {
        return TaxiPark::getInstance($newPatient,$newDoctor);
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
