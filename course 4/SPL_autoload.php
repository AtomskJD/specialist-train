<?php 
function myAuto1($name)
{
	echo $name."<br>";
}
spl_autoload_extensions(".php");
spl_autoload_register("myAuto1");
spl_autoload_register();

$obj = new SomeObject();
?>