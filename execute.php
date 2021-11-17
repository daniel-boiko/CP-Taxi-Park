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
#$result -> inputListDriver();
#$result -> inputListCar();
$flagMenu = true;

echo "Do you want to use TaxiPark app? [Y/N] \n";
$menuBar = readline();

if (($menuBar == 'Y') or ($menuBar == 'y')) {

    while ($flagMenu == true) {
        echo "Type '+D' if you want to add drivers \n";
        echo "Type '+C' if you want to add cars \n";
        echo "Type 'SD' to show info about drivers \n";
        echo "Type 'SC' to show info about cars \n";
        echo "Type 'INFO' to output all info \n";
        echo "Type 'Delete Drivers' to delete info about all/someone drivers \n";
        echo "Type 'Delete Cars' to delete info about all/something cars \n";
        echo "Type 'Q' to exit the Taxi-Park program \n";

        $menuBar = readline();
        if (($menuBar == "+D") or ($menuBar == "+d")) {
            $result -> inputListDriver();
        } else if (($menuBar == "+C") or ($menuBar == "+c")) {
            $result -> inputListCar();
        } else if (($menuBar == "SD") or ($menuBar == "sd")) {
            $result -> outputListDriver();
        } else if (($menuBar == "SC") or ($menuBar == "sc")) {

//            echo "Type 'Pass Cars' if you want to show all PASSENGER cars \n";
            echo "Type 'All Cars' if you want to show ALL cars \n";
            $showMenuCar = readline();
//            if (($showMenuCar == "Pass Cars") or ($showMenuCar == 'PASS CARS') or ($showMenuCar == 'pass cars')) {
//                $result -> outputPassengerCar();
//            }
//            else
            if (($showMenuCar == "All Cars") or ($showMenuCar == 'ALL CARS') or ($showMenuCar == 'all cars')) {
                $result -> outputListCar();
            }

        } else if (($menuBar == "INFO" or ($menuBar == "info") or $menuBar == "Info")) {
            $result -> outputInfo();
        } else if (($menuBar == "Delete Drivers" or ($menuBar == "DELETE DRIVERS") or $menuBar == "delete drivers")) {

            echo "If you want to delete info about ALL drivers - type 'Delete All' \n";
            #echo "If you want to delete info about CURRENT car - type 'Delete' \n";
            $delMenuBar = readline();

            if (($delMenuBar == 'Delete All') or ($delMenuBar == 'DELETE ALL') or ($delMenuBar == 'Delete all')) {
                $result -> deleteDriverInfo();
            }

            #else if (($delMenuBar == 'Delete') or ($delMenuBar == 'DELETE') or ($delMenuBar == 'delete')) {
            #$result -> deleteCurrentDriverInfo();
            #}

        } else if (($menuBar == "Delete Cars" or ($menuBar == "DELETE CARS") or $menuBar == "delete cars")) {

            echo "If you want to delete info about ALL cars - type 'Delete All' \n";
            #echo "If you want to delete info about CURRENT car - type 'Delete' \n";
            $delMenuBar = readline();

            if (($delMenuBar == 'Delete All') or ($delMenuBar == 'DELETE ALL') or ($delMenuBar == 'Delete all')) {
                $result -> deleteCarInfo();
            }
            #else if (($delMenuBar == 'Delete') or ($delMenuBar == 'DELETE') or ($delMenuBar == 'delete')) {
            #    $result -> deleteCurrentCarInfo();
            #}
        }

        else if (($menuBar == "Q") or ($menuBar == "q")) {
            $flagMenu = false;
            echo "Best Wishes, by Daniil B.";
        } else {
            $flagMenu = false;
            echo "Best Wishes, by Daniil B.";
        }
    }

}
else echo "Best Wishes, by Daniil B.";