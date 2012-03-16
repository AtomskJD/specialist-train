<?php
	class MyClass {
		function myMethod() {
			echo "<p>Класс - ", __CLASS__;
			echo "<p>Метод - ", __METHOD__;	
		}	
	}
	
	$obj = new MyClass();
	$obj->myMethod();
?>