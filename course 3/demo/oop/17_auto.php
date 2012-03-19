<?php

	function __autoload($class_name) {
		echo "<p>Попытка создать объект несуществующего класса - ",
		$class_name;
		include($class_name.".class");
	}

	$obj = new MyClass();
?>