<?php
	// Описание класса
	class MyClass {
		// Определение свойств класса
		public $property = 1;	
	}
	
	// Создание экземпляра класса (объект на основе класса)
	$obj1 = new MyClass();
	$obj2 = clone $obj1;
	$obj1->property = 2;
	
	// Вывод значения свойства
	echo $obj1->property;
	echo $obj2->property;
?>