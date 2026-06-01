<?php
class Employee {
    private $name;
    private $zp;
    private $age;
    public function __construct($name, $zp, $age) {
        $this->name = $name;
        $this->zp = $zp;
        $this->setAge($age);
    }
    public function getName(){
        return $this->name;
    }
    public function getZp(){
        return $this->zp . '$';
    }
    public function getAge() {
        return $this->age;
    }

    public function setName($name) {
        $this->name = $name;
    }
    public function setAge($age) {
        if ($age >= 0 && $age <= 120) {
            $this->age = $age;
        } else {
            echo "возраст что то ваш не сходиться<br>";
            $this->age = "errorAge";
        }
    }
    public function setZp($zp) {
        $this->zp = $zp;
    }


    public function vivodInfo() {
        echo "Имя " . $this->getName() . "<br>";
        echo "Зп " . $this->getZp() . "<br>";
        echo "Возраст " . $this->getAge() . "<br>";
        echo "<br>";
    }
    public function povZp() {
        $this->zp = $this->zp * 1.10;
        return $this->zp;
    }
}

?>