<?php
require_once 'classes/Admin.php';
$admin = new Admin("админов", "admin@example.com", 800);

$admin->vivodInfo(); 
echo "<br>";

$admin->cUser("Олег Монгол", "Buzov@gmail.com", 250);
$admin->cUser("Юспиков", "Spid@mail.ru", 4);
$admin->cUser("Меченый", "S.T.A.L.K.E.R@zona.vso", 1);


$admin->UserVise();


$userData1 = $admin->getUinfo(0);
echo "данные пользователя с айди 0 <br>";
print_r($userData1);


echo "<br>";
$userData2 = $admin->getUinfo(1);
echo "данные пользователя с айди 1 <br>";
print_r($userData2);
echo "<br>";


$admin->setName("расим");
echo "имя админа " . $admin->getName() . "<br>";

$admin->setAge(40);
echo "Админ молодеет " . $admin->getAge() . "<br>";
?>