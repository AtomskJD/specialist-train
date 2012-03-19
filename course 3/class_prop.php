<?php
	class A{
		private $_user;
		function __call($name, $params){
			echo "HELLO";
		}
		function __set($n, $v){
			// $this->user[$n]=$v;
			echo "private";
		}
		
		function __get($name){
			// return $this->user[$name];
		}
	}
	$a = new A();
	$a->foo();
	
?>