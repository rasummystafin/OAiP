<?php
trait Trait1 {
    private function method1() {
        return 1;
    }
}
?>

<?php
trait Trait2 {
    private function method2() {
        return 2;
    }
}
?>

<?php
trait Trait3 {
    private function method3() {
        return 3;
    }
}
?>

<?php
class Chisla {
    use Trait1, Trait2, Trait3;
    public function get1() {
        return $this->method1(); 
    }
    public function get2() {
        return $this->method2(); 
    }
    public function get3() {
        return $this->method3();
    }
}
?>

<?php
$chisla = new chisla();

echo $chisla->get1() . "<br>";
echo $chisla->get2() . "<br>";
echo $chisla->get3() . "<br>";
?>