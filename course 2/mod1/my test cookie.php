<?php
// $arr = array(
			// "one"=>1,
			// 2=>"two",
			// 3=>true
			// );
	// echo serialize($arr);
setcookie("name","John", time()+60);
//setcookie("name","");
if(isset($_COOKIE['name']))
	echo $_COOKIE['name'];
?>