<?php
	class MyClass {
		// Общедоступное свойство
		public $public = 1;	
		final function myMethod() {
			echo $this->public;	
		}
	}
	
	class NewClass extends MyClass {
		function myMethod() {
			echo "2";
		}	
	}
?>