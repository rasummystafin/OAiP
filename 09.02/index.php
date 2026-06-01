<?php
require_once 'classes/Car.php';
$mycar = new car(1999, "red", 1.6);
echo "первый подключенный класс<br>";
print_r($mycar);

echo "<br>";
//подключён класс шишки
require_once 'classes/Shihka.php';
$myshihka = new shihka(60, 5);
echo "<br>";


require_once 'classes/Emloyee.php';
$employee1 = new Employee("Юсупов", 1, 17);
$employee2 = new Employee("Данила", 2, 177);

echo "Информация о рабах<br>";
$employee1->vivodInfo();
$employee2->vivodInfo();


$employee1->setName("Артемий");
$employee1->setZp(600);    
$employee1->setAge(42); 

echo "Новое имя " . $employee1->getName() . "<br>";
echo "Новая зп " . $employee1->povZp() . "<br>";
echo "Новый возраст " . $employee1->getAge() . "<br>";


?>