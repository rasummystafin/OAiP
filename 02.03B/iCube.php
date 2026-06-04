<?php
interface iCube
{
    public function __construct($a);
    public function getVolume();
    public function getSurfaceArea();
}

class Cube implements iCube
{
    private $a;
    
    public function __construct($a)
    {
        $this->a = $a;
    }
    
    public function getVolume()
    {
        return pow($this->a, 3);
    }
    
    public function getSurfaceArea()
    {
        return 6 * pow($this->a, 2);
    }
}

$cube = new Cube(5);
echo "Объем куба " . $cube->getVolume() . "<br>";
echo "Площадь поверхности куба " . $cube->getSurfaceArea() . "<br>";
?>