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

$cube = new Cube(5);
echo "Объем куба " . $cube->getVolume() . "<br>";
echo "Площадь поверхности куба " . $cube->getSurfaceSquare() . "<br>";
echo "Проверка: cube instanceof Figure3d - " . (($cube instanceof Figure3d) ? 'true' : 'false') . "<br>";
echo "Проверка: cube instanceof iFigure - " . (($cube instanceof iFigure) ? 'true' : 'false') . "<br>";
?>