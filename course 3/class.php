<?php
/*
//////// IN 4 PHP ///////////////
$obj1 = $obj2;//copy
$obj2 = &$obj1;//link
/////// IN 5 PHP ////////////////
$obj1 = $obj2;//link
$obj2 = clone obj1;//copy
$obj1 = $obj2;//in 4 PHP - copy
*/
class Car{
	public $year = "2011";
	public $speed;
	public $model;
	
	//function Car($num)
	function __construct($num){
		echo "Object $num created!";
	}
	function __destruct(){
		echo "Object deleted!";
	}
	function __clone(){
		echo "Object cloned!";
	}
	
	public function getSpeed(){
		$this->foo();
	}
	function foo(){
		echo 'Скорость = '. $this->speed;
	}
	
}

$car1 = new Car(1);
$car1->speed = 160;
$car1->model = "Model one";
$car1->getSpeed();
$car3 = clone $car1;
unset($car1);

$car2 = new Car(2);
$car2->speed = 180;
$car2->model = "Model two";
?>