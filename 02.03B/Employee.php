<?php
interface iUserInt
{
    public function getName();
    public function setName($name);
    public function getAge();
    public function setAge($age);
}

interface iEmployeeInt extends iUserInt
{
    public function getSalary();
    public function setSalary($salary);
}

class Employee implements iEmployeeInt
{
    private $name;
    private $age;
    private $salary;
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getAge()
    {
        return $this->age;
    }
    
    public function setAge($age)
    {
        $this->age = $age;
    }
    
    public function getSalary()
    {
        return $this->salary;
    }
    
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}

$employee = new Employee();
$employee->setName("Сергей");
$employee->setAge(40);
$employee->setSalary(75000);

echo "Имя: " . $employee->getName() . "<br>";
echo "Возраст: " . $employee->getAge() . "<br>";
echo "Зарплата: " . $employee->getSalary() . "<br>";
?>