<?php
abstract class A{
	public $poo;
	abstract function foo();
}
interface Db{
	function db_conn();
}
class B extends A{
	function foo(){}
}
$o1 = new B();

?>