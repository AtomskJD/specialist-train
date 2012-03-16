<?php
	class MyClass {
		$props;
		function __call($name,$params) {
			echo "Вызван метод $name с параметрами";
			echo "<pre>";
			print_r($params);	
			echo "</pre>";
		}
	}
	
	$obj = new MyClass();
	$obj->foo(1,2,3);
?>