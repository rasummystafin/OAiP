<?php
trait HelperForCity{
	private $name;
	private $age;
    private $population;
		
	public function getName(){
		return $this->name;
		}
	public function getAge(){
		return $this->age;
	}
    public function getPopulation(){
		return $this->population;
		}
	}



class City{
    use HelperForCity;
	public function __construct($name, $age, $population){
		$this->name = $name;
		$this->age = $age;
        $this->population = $population;
	}
}




$yfa = new City('Yfa', 300, 2000000);
	echo $yfa->getName();
	echo "<br>";
	echo $yfa->getAge();
	echo "<br>";
	echo $yfa->getPopulation();
?>