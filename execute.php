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
    	скрин-шоты работы системы при различных данных,
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
        echo "Type 'Delete Drivers' to delete info about \n";
        echo "Type 'Q' to exit the Taxi-Park program \n";

        $menuBar = readline();
        if (($menuBar == "+D") or ($menuBar == "+d")) {
            $result -> inputListDriver();
        } else if (($menuBar == "+C") or ($menuBar == "+c")) {
            $result -> inputListCar();
        } else if (($menuBar == "SD") or ($menuBar == "sd")) {
            $result -> outputListDriver();
        } else if (($menuBar == "SC") or ($menuBar == "sc")) {
            $result -> outputListCar();
        } else if (($menuBar == "Delete Drivers" or ($menuBar == "DELETE DRIVERS") or $menuBar == "delete drivers")) {
            $result -> deleteDriverInfo();
        } else if (($menuBar == "Delete Cars" or ($menuBar == "DELETE CARS") or $menuBar == "delete cars")) {
            $result  -> deleteCarInfo();
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