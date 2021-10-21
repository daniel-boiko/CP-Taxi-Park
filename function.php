<?php


function printMenu()
{
    echo "\n1. Add new drivers\n";
    echo "2. Add new cars\n";
    echo "3. Print info about all drivers\n";
    echo "4. Print info about all cars\n";
    echo "5. Exit\n";
    echo ">";
}

function menu($clinic)
{
    $chooseUser = 0;
    while ($chooseUser != 5) {
        printMenu();
        $chooseUser = setNumber();
        if ($chooseUser > 5 or $chooseUser < 1) {
            echo "Error input, try again: ";
        }
        switch ($chooseUser) {
            case 1:
                $clinic->inputListPatient();
                break;
            case 2:
                $clinic->inputListDoctor();
                break;
            case 3:
                $clinic->printListPatient();
                break;
            case 4:
                $clinic->printListDoctor();
                break;
        }
    }

}

function setNumber()
{
    $flag = false;
    while ($flag == false) {
        $number = readline();
        if (ctype_digit($number)) {
            $flag = true;
            return $number;
        } else {
            echo "\nError input, try again: \n";
        }
    }
}
