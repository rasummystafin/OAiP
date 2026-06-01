<?php

class User {
    private $name;
    private $email;
    private $age;
    
    public function __construct($name, $email, $age) {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }
    
    public function getName() {
        return $this->name;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getAge() {
        return $this->age;
    }
    

    public function setName($name) {
        $this->name = $name;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function setAge($age) {
            $this->age = $age;
        }


    public function vivodInfo() {
        echo "имя " . $this->getName() . "<br>";
        echo "почта " . $this->getEmail() . "<br>";
        echo "возраст " . $this->getAge() . "<br>";
    }
    

    public function getUserMassa() {
        return [
            'name' => $this->getName(),
            'email' => $this->getEmail(),
            'age' => $this->getAge()
        ];
    }
}
?>