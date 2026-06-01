<?php
require_once 'chisla.php';

class Test {
    use Trait1, Trait2, Trait3;
    
    public function getSum() {
        $sum = $this->method1() + $this->method2() + $this->method3();
        return $sum;
    }
}


$test = new Test();
$result = $test->getSum();

echo $result . "<br>";
?>