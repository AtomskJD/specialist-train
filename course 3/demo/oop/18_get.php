<?php
	class MyClass {
		$props;
		function __set($name,$value) {
			$this->props[$name] = $value;	
		}
		function __get($name) {
			return $this->props[$name];	
		}
	}
	
	$obj = new MyClass();
	$obj->title = "PHP5";
	echo $obj->title;
?>