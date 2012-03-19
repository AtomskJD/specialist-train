<?php
	// Описание класса
	class MyClass {
		// Определение свойств класса
		public $property = 1;
		// Определение методов класса	
	}
	
	// Создание экземпляра класса (объект на основе класса)
	$obj = new MyClass();
	$obj1 = new MyClass();
	
	// Вывод значения свойства
	echo $obj->property;
	echo $obj1->property;
	
	// Изменение значения свойства
	$obj->property = 2;

	// Вывод значения свойства
	echo $obj->property;
	echo $obj1->property;
?>