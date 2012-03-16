<?php
class A{
	final function foo(){}
}
class B extends A{
	function foo();
}
$o1 = new B();

?>