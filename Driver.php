<?php

class Driver
{
    public string $nameDriver;
    public int $ageDriver;
    public int $expDriver;

    #Class constructor
    function __construct ()
    {
        $this -> nameDriver = "None";
        $this -> ageDriver = 0;
        $this -> expDriver = 0;
    }

    #Form to input info about Driver (name, age, exp)
    function inputDriver()
    {
        echo "Name: ";
        $this -> nameDriver = readline();
        echo "Age: ";
        $this -> ageDriver = readline();
        echo "Experience: ";
        $this -> expDriver = readline();
    }

    #Form to output info about Driver (name, age, exp)
    function outputDriver()
    {
        echo "Name: " . $this -> nameDriver . "\n";
        echo "Age: " . $this -> ageDriver . "\n";
        echo "Experience: " . $this -> expDriver . "\n";
    }
}
