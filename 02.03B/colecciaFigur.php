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

class FiguresCollection
{
    private $figures = [];
    
    public function addFigure(iFigure $figure)
    {
        $this->figures[] = $figure;
    }
    
    public function getTotalSquare()
    {
        $sum = 0;
        
        foreach ($this->figures as $figure) {
            $sum += $figure->getSquare();
        }
        
        return $sum;
    }
    
    public function getTotalPerimeter()
    {
        $sum = 0;
        
        foreach ($this->figures as $figure) {
            $sum += $figure->getPerimeter();
        }
        
        return $sum;
    }
}

$figuresCollection = new FiguresCollection;

$figuresCollection->addFigure(new Quadrate(2));
$figuresCollection->addFigure(new Quadrate(3));

$figuresCollection->addFigure(new Rectangle(2, 3));
$figuresCollection->addFigure(new Rectangle(3, 4));

$figuresCollection->addFigure(new Disk(5));
$figuresCollection->addFigure(new Disk(7));

echo "Общая площадь всех фигур " . $figuresCollection->getTotalSquare() . "<br>";
echo "Общий периметр всех фигур " . round($figuresCollection->getTotalPerimeter(), 2) . "<br>";
?>