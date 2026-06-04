<?php
interface Figure
{
    public function getSquare();
    public function getPerimeter();
}

class Disk implements Figure
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
$disk = new Disk(7);
echo "Площадь круга: " . round($disk->getSquare(), 2) . "<br>";
echo "Длина окружности: " . round($disk->getPerimeter(), 2) . "<br>";
?>