<?php
interface iFigure
{
    public function getSquare();
    public function getPerimeter();
}

class Quadrate implements iFigure
{
    private $a;
    
    public function __construct($a)
    {
        $this->a = $a;
    }
    
    public function getSquare()
    {
        return $this->a * $this->a;
    }
    
    public function getPerimeter()
    {
        return 4 * $this->a;
    }
}

class Rectangle implements iFigure
{
    private $a;
    private $b;
    
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    
    public function getSquare()
    {
        return $this->a * $this->b;
    }
    
    public function getPerimeter()
    {
        return 2 * ($this->a + $this->b);
    }
}

class Disk implements iFigure
{
    private $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function getSquare()
    {
        return pi() * $this->radius * $this->radius;
    }
    
    public function getPerimeter()
    {
        return 2 * pi() * $this->radius;
    }
}

class User
{
    private $name;
    
    public function __construct($name)
    {
        $this->name = $name;
    }
}

$arr = [
    new Quadrate(4),
    new Rectangle(2, 5),
    new Disk(3),
    new User("Иван"),
    new Quadrate(7),
    new Rectangle(3, 6),
    new User("Петр"),
    new Disk(5)
];

echo "Площади объектов, реализующих iFigure<br>";
foreach ($arr as $obj) {
    if ($obj instanceof iFigure) {
        echo "Площадь: " . $obj->getSquare() . "<br>";
    }
}
?>