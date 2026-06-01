<?php
class Car{
    private $age_create;
    private $color;
    private $typeEngine;
    public function __construct($age_create, $color, $typeEngine){
        $this->age_create = $age_create;
        $this->color = $color;
        $this->typeEngine = $typeEngine;
    }
}
//класс который при вызове сделает что то вроде фиксации свойств или как то так
?>