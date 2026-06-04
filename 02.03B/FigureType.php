<?php
interface iFigure
{
    public function getSquare();
    public function getPerimeter();
}

interface Figure3d
{
    public function getVolume();
    public function getSurfaceSquare();
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

// Объемные фигуры
class Cube implements iFigure, Figure3d
{
    private $a;
    
    public function __construct($a)
    {
        $this->a = $a;
    }
    
    public function getSquare()
    {
        return 6 * pow($this->a, 2);
    }
    
    public function getPerimeter()
    {
        return 12 * $this->a;
    }
    
    public function getVolume()
    {
        return pow($this->a, 3);
    }
    
    public function getSurfaceSquare()
    {
        return 6 * pow($this->a, 2);
    }
}

class Sphere implements Figure3d
{
    private $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function getVolume()
    {
        return (4/3) * pi() * pow($this->radius, 3);
    }
    
    public function getSurfaceSquare()
    {
        return 4 * pi() * pow($this->radius, 2);
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

// Массив с разными объектами
$arr = [
    new Quadrate(4),
    new Cube(3),
    new Rectangle(2, 5),
    new Sphere(5),
    new Disk(3),
    new User("Иван"),
    new Quadrate(7),
    new Cube(4),
    new Rectangle(3, 6),
    new Sphere(7),
    new Disk(5)
];

echo "Результаты<br>";
foreach ($arr as $obj) {
    if ($obj instanceof Figure3d) {
        echo "Объемная фигура - Площадь поверхности: " . round($obj->getSurfaceSquare(), 2) . "<br>";
    } elseif ($obj instanceof iFigure) {
        echo "Плоская фигура - Площадь: " . round($obj->getSquare(), 2) . "<br>";
    } else {
        echo "Объект " . get_class($obj) . " - не является фигурой<br>";
    }
}
?>