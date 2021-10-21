<?php

class Driver
{
    public string $nameDriver;
    public int $ageDriver;

    function inputDriver()
    {
        echo "Name: ";
        $this -> nameDriver = readline();
        echo "Age: ";
        $this -> ageDriver = readline();
    }

    function outputDriver()
    {
        echo "Name: " . $this -> nameDriver . "\n";
        echo "Age: " . $this -> ageDriver . "\n";
    }
}
