<?php
	class MyClass {
		$props;
		function __set($name,$value) {
			$this->props[$name] = $value;	
		}
	}
	
	$obj = new MyClass();
	$obj->title = "PHP5";
?>