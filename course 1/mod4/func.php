<?php
#ФУНКЦИИ
error_reporting(E_ALL);
function hi($name, $h){echo "<h$h>hi $name</h$h>";}
hi('Mike', 1);
hi('John', 2);
$str = 'hi';
$str('GUEST', 3); // Изврат

function statics(){
	static $a = 0;
	echo $a++;
}

statics();
statics();
statics();
statics();
echo "<br \>";
function foo(){
	// echo func_num_args();
	print_r(func_get_args());
}
foo('a',25, true);
?>