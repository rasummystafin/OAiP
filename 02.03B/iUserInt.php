<?php
interface iUserInt
{
    public function getName();
    public function setName($name);
    public function getAge();
    public function setAge($age);
}

// Демонстрация работы
$user = new class implements iUserInt {
    private $name;
    private $age;
    
    public function getName() { return $this->name; }
    public function setName($name) { $this->name = $name; }
    public function getAge() { return $this->age; }
    public function setAge($age) { $this->age = $age; }
};

$user->setName("Иван");
$user->setAge(25);
echo "Имя: " . $user->getName() . "<br>";
echo "Возраст: " . $user->getAge() . "<br>";
?>