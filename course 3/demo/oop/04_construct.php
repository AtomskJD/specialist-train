<?php
	class MyClass{
		// Конструктор класса
		function __construct() {
			echo "Вызван конструктор";
		}
		
		// Деструктор
		function __destruct() {
			echo "Вызван деструктор";	
		}
	}
	
	$obj = new MyClass();
	unset($obj);
	echo "<p>Конец сценария";
?>