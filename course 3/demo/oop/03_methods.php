<?php
	// Описание класса
	class MyClass {
		// Определение свойств класса
		public $property = 1;
		// Определение методов класса	
		function myMethod() {
			echo $this->property;	
		}
	}
	
	// Создание экземпляра класса (объект на основе класса)
	$obj = new MyClass();
	
	// Вызов метода
	$obj->myMethod();
?>