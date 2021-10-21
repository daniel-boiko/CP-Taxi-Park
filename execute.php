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

spl_autoload_register(function ($className)
{
    include $className. '.php';
});

/*$var1 = new Driver;
$var1 ->inputDriver();
$var1 -> outputDriver();
$var2 = new Car;
$var2 -> inputCar();
$var2 -> outputCar();*/

$var1 = new TaxiPark();
$var1->inputListDriver();
$var1->inputListCar();
$var1->outputListDriver();
$var1->outputListCar();