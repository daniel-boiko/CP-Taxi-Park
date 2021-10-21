<?php

spl_autoload_register(function ($className)
{
    include $className. '.php';
});

/*$var1 = new Driver;
$var1 ->inputDriver();
$var1 -> outputDriver();
$var2 = new Car;
$var2 -> inputCar();
$var2 -> outputCar();*/

$var1 = new TaxiPark();
$var1 ->inputListDriver();
$var1 ->inputListCar();