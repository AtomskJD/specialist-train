<?php
	function __autoload($name){
		include "$name.class.php";
	}
	$o = new A();
?>