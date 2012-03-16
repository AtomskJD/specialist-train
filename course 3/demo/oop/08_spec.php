<?php
	class MyClass {
		// Общедоступное свойство
		public $public = 1;	
		// Защищенное свойство
		protected $protected = 2;
		// Частные свойства
		private $private = 3;
		public function myMethod() {
			echo $this->protected;	
		}
	}
	
	class NewClass extends MyClass {
		function newMethod() {
			echo $this->private;
		}	
	}
	
	$obj = new MyClass();
	echo $obj->public;
	$obj->myMethod();
	//echo $obj->protected;
	$obj1 = new NewClass();
	$obj1->newMethod();