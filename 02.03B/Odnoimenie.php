<?php
trait Trait1 {
    public function method() {
        return 1;
    }
}
?>
<?php
trait Trait2 {
    public function method() {
        return 2;
    }
}
?>
<?php
trait Trait3 {
    public function method() {
        return 3;
    }
}
?>
<?php
class Test {
    use Trait1, Trait2, Trait3 {
        Trait1::method insteadof Trait2;
        Trait1::method insteadof Trait3;
        
        Trait2::method as method2;
        Trait3::method as method3;
    }
    public function getSum() {
        $sum = $this->method() + $this->method2() + $this->method3();
        return $sum;
    }
}


$test = new Test();
$sum = $test->getSum();
echo $sum;
?>