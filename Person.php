<?php

class Person
{
    protected int $age;
    protected string $name;

    function __construct()
    {
        $this -> age = 0;
        $this -> name= "None";
    }

    function inputPerson ()
    {
        echo "Enter the age: ";
        $this -> age = readline();
        echo "Enter the name: ";
        $this -> name = readline();
    }

    function printPerson ()
    {
        echo "Age: " . $this -> age . "\n";
        echo "Name: " . $this -> name . "\n";
    }
}