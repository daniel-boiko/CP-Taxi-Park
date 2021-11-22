<?php
/*1.	Тема курсовой работы:
«РАЗРАБОТКА ИНФОРМАЦИОННО- СПРАВОЧНОЙ СИСТЕМЫ УЧЕТА ТРАНСПОРТНЫХ СРЕДСТВ АВТОКОМБИНАТА».
Система должна предоставлять возможность:
    	формировать список транспортных средств, добавляя в имеющийся или создавая новый список,
    	получать информацию по всем транспортным средствам,
    	просматривать информацию по легковым автомобилям,
    	определять водителя конкретного транспортного средства.
2.	Требования, предъявляемые к разработке системы:
    	результаты выполнения программы должны отображаться в табличном виде;
    	среда программирования –  Visual Studio 2005, 2008.
3.	 Пояснительная записка (ПЗ) должна содержать следующие разделы основной части:
    	описание функциональных требований, предъявляемых к программной системе (техническое задание –ТЗ-на разработку),
    	краткое описание метода решения поставленной задачи,
    	описание структуры данных,
    	алгоритм работы программной системы,
    	текст программы,
    	скриншоты работы системы при различных данных,
    	руководство пользователя по работе с программной системой (установка системы, работа в системе).
    К защите предоставляются следующие материалы
3.1.	 Пояснительная записка (см. Метод. указания).
3.2.	 Компьютерные версии: ПЗ (см. Метод. указания), доклад, презентация доклада, работающая программа.
Допуск к защите курсовой работы осуществляется только после предварительной сдачи преподавателю всего набора файлов и утвержденной пояснительной записки.*/

spl_autoload_register(function ($className){
    include $className . '.php';
});

echo "
 _____               _    ___               _    
/__   \  __ _ __  __(_)  / _ \  __ _  _ __ | | __
  / /\/ / _` |\ \/ /| | / /_)/ / _` || '__|| |/ /
 / /   | (_| | >  < | |/ ___/ | (_| || |   |   < 
 \/     \__,_|/_/\_\|_|\/      \__,_||_|   |_|\_\ \n \n";

$factory = new Factory;
$result = $factory -> build();
$flagMenu = true;

echo "Do you want to use TaxiPark app? [Y/N] \n";
$menuBar = readline();

if (($menuBar == 'Y') or ($menuBar == 'y')) {

    while ($flagMenu == true) {
        echo "_____________________________________________________________\n";
        echo "| '+D' if you want to add drivers                           |\n";
        echo "| '+C' if you want to add cars                              |\n";
        echo "| 'SD' to show info about drivers                           |\n";
        echo "| 'SC' to show info about cars                              |\n";
        echo "| 'INFO' to output all info                                 |\n";
        echo "| 'Delete Drivers' to delete info about all/someone drivers |\n";
        echo "| 'Delete Cars' to delete info about all/something cars     |\n";
        echo "| 'Q' to exit the Taxi-Park program                         |\n";
        echo "|___________________________________________________________|\n";

        echo "Run: ";
        $menuBar = readline();

        if (($menuBar == "+D") or ($menuBar == "+d")) {
            $result -> inputListDriver();
        }
        else if (($menuBar == "+C") or ($menuBar == "+c")) {
            $result -> inputListCar();
        }
        else if (($menuBar == "SD") or ($menuBar == "sd")) {
            $result -> outputListDriver();
        }
        else if (($menuBar == "SC") or ($menuBar == "sc")) {
            echo "_______________________________________________________\n";
            echo "| 'All Cars' if you want to show ALL cars             |\n";
            echo "| 'Pass Cars' if you want to show all PASSENGER cars  |\n";
            echo "| 'Truck Cars' if you want to show all TRUCK cars     |\n";
            echo "| 'Minivan Cars' if you want to show all MINIVAN cars |\n";
            echo "|_____________________________________________________|\n";
            $showMenuCar = readline();

            if (($showMenuCar == "All Cars") or ($showMenuCar == 'ALL CARS') or ($showMenuCar == 'all cars')) {
                $result -> outputListCar();
            }
            else if (($showMenuCar == 'Pass Cars') or ($showMenuCar == 'PASS CARS') or ($showMenuCar == 'pass cars')) {
                $result -> outputListPassCar();
            }
            else if (($showMenuCar == 'Truck Cars') or ($showMenuCar == 'TRUCK CARS') or ($showMenuCar == 'truck cars')) {
                $result -> outputListTruckCar();
            }
            else if (($showMenuCar == 'Minivan Cars') or ($showMenuCar == 'MINIVAN CARS') or ($showMenuCar == 'minivan cars')) {
                $result -> outputListMinivanCar();
            }
        }
        else if (($menuBar == "INFO" or ($menuBar == "info") or $menuBar == "Info")) {
            $result -> outputInfo();
        }
        else if (($menuBar == "Delete Drivers" or ($menuBar == "DELETE DRIVERS") or $menuBar == "delete drivers")) {
            $result -> deleteDriverInfo();
        }
        else if (($menuBar == "Delete Cars" or ($menuBar == "DELETE CARS") or $menuBar == "delete cars")) {
            $result -> deleteCarInfo();
        }
        else {
            $flagMenu = false;
            echo "Best Wishes, by Daniil B.";
        }
    }
}