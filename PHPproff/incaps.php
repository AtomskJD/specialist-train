<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>Template</title>
	<meta content="text/html; charset=UTF-8" />
	<style type="text/css">
		body{
			background: #DDD;
			}
	</style>	
	<script type="text/javascript">
		
	</script>
</head>
<body>
	 <h2>
	<?php 
		class A {
			public $name = "IS name";

		}
		class B {
			protected static $name = "IS same";
			function name()
			{
				return self::$name;
			}
		}
		class C extends B {
			function __construct()
			{
				self::$name = "NOT same";
			}
		}


		$objectA = new A;
		$objectB = new B;
		$objectC = new C;
		echo "A - ".$objectA->name.";";
		echo "<br>";
		echo "B - ".$objectB->name().";";
		echo "<br>";
		echo "C - ".$objectC->name().";";
		echo "<br>";
	 ?>
	 </h2>
</body>
</html>