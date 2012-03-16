<?php
	class MyClass {
		// Константа класса
		static $counter = 0;
		public $id;
		function __construct() {
			$this->id = ++self::$counter;	
		}
	}
	
	$obj1 = new MyClass();
	$obj2 = new MyClass();
	$obj3 = new MyClass();
	
	echo "<p>Объект \$obj1 имеет id=", $obj1->id;
	echo "<p>Объект \$obj2 имеет id=", $obj2->id;
	echo "<p>Объект \$obj3 имеет id=", $obj3->id;
	echo "<p>Всего объектов - ", MyClass::$counter;
?>