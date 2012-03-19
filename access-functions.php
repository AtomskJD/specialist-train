<?php 
function a()
{
	static $arg = 123;
	if(!func_num_args()){ echo $arg.">";}
	else {$arg = func_get_arg(0);
		echo $arg."<";}
}
a();
echo "<br>";
a(333);
echo "<br>";
a();
?>