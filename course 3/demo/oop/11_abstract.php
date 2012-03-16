<?php
	abstract class MyClass {
		abstract function myMethod(); 
	}
	
	class NewClass extends MyClass {
		function myMethod() {
			echo 1;
		}	
	}
	
	$obj = new NewClass();
	$obj->myMethod();
?>