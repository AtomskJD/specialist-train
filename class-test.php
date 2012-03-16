<?php
	class Main{
		protected $var1 = 1;
		function __construct(){
			echo get_class($this);
		}
	}
	class subMain extends Main{
		private $var2 = 2;
		function __construct(){
			parent::__construct();
		}
		public function getVar1(){
			echo $this->var1 . "<br>";
		}
		public function getVar2(){
			echo $this->var2 . "<br>";
		}
	}
	// $run = new Main;
	$run = new subMain;
	$run->getVar1();
	$run->getVar2();
?>