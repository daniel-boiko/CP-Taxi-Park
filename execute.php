<?php
/* 1.	Тема курсовой работы:
    «РАЗРАБОТКА ИНФОРМАЦИОННО- СПРАВОЧНОЙ СИСТЕМЫ УЧЕТА ДИСЦИПЛИН УЧЕБНОГО ПЛАНА».
Система должна предоставлять возможность:
    	формировать перечень дисциплин для конкретного направления, добавляя в имеющийся или создавая новый список,
    	получать информацию по всем дисциплинам,
    	получать информацию по дисциплинам конкретного семестра,
    	получать информацию по дисциплинам, реализуемым конкретной кафедрой.
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
*/

spl_autoload_register(function ($className){
    include $className . '.php';
});

$factory = new Factory;
$result = $factory -> build();
$result -> inputListDriver();
$result -> inputListCar();

$flagMenu = true;

while ($flagMenu == true)
{
    echo "If you want to show Taxi-Park Menu - type 'M': ";
    $menuBar = readline();

    if ($menuBar == 'M') {
        echo "Type '+D' if you want to add drivers \n";
        echo "Type '+C' if you want to add cars \n";
        echo "Type 'SD' to show info about drivers \n";
        echo "Type 'SC' to show info about cars \n";
        echo "Type 'Q' to exit the Taxi-Park program \n";
    }

    $menuBar = readline();
    if (($menuBar == "+D") or ($menuBar == "+d"))
    {
        $result -> inputListDriver();
    }
    else if (($menuBar == "+C") or ($menuBar == "+c"))
    {
        $result -> inputListCar();
    }
    else if (($menuBar == "SD") or ($menuBar == "sd"))
    {
        $result -> outputListDriver();
    }
    else if (($menuBar == "SC") or ($menuBar == "sc"))
    {
        $result -> outputListCar();
    }
    else if (($menuBar == "Q") or ($menuBar == "q"))
    {
        $flagMenu = false;
        echo "Best Wishes, by Daniil B.";
    }
    else
    {
        $flagMenu = false;
        echo "Best Wishes, by Daniil B.";
    }

}