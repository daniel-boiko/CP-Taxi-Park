<?php

class Driver
{
    public string $nameDriver;
    public int $ageDriver;
    public int $expDriver;

    function __construct ()
    {
        $this -> nameDriver = "None";
        $this -> ageDriver = 0;
        $this -> expDriver = 0;
    }

    function inputDriver()
    {
        echo "Name: ";
        $this -> nameDriver = readline();
        echo "Age: ";
        $this -> ageDriver = readline();
        echo "Experience: ";
        $this -> expDriver = readline();
    }

    function outputDriver()
    {
        echo "Name: " . $this -> nameDriver . "\n";
        echo "Age: " . $this -> ageDriver . "\n";
        echo "Experience: " . $this -> expDriver . "\n";
    }
}
