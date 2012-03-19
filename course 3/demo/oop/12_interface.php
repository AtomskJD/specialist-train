<?php
	interface Int1 {
		function myMethod1(); 
	}
	interface Int2 {
		function myMethod2(); 
	}	
	
	class NewClass implements Int1,Int2 {
		function myMethod1() {
			echo 1;
		}
		function myMethod2() {
			echo 2;
		}			
	}
	
	$obj = new NewClass();
	$obj->myMethod1();
	$obj->myMethod2();
?>