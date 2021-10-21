<?php

// Basic class
class Person
{
    protected int $age;
    protected string $name;

    function __construct()
    {
        $this -> name = "None";
        $this -> age = 0;
    }

    function inputPerson()
    {
        echo "Name: ";
        $this -> name = readline();
        echo "Age: ";
        $this -> age = setNumber();
    }

    function printPerson()
    {
        echo "Name: " . $this->name . "\n";
        echo "Age: " . $this->age . "\n";
    }

/*    function writeFilePerson($dataName)
    {
        fwrite($dataName, $this->name . " " . $this->age . " ");
    }

    function readFilePerson($fileName, $fileAge)
    {
        $this->name = $fileName;
        $this->age = $fileAge;
    }*/

}