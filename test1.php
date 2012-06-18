<?php
	$a = 777;
	$b = 1100001001;
	echo decbin($a)." bin<br>";
	echo dechex($a)." hex<br>";
	echo decoct($a)." oct<br>";
	echo bindec($b)." dec<br>";
	echo number_format(12312313123.123123123,2,".","@")." Float formated<br>";
	echo "<h1>День программера будет " .date("D-d-M-Y", mktime(0,0,0,1,256)). "</h1>";
	echo chr(rand(65,90));
	$day1 = mkTime(0,0,0);
	echo "<br>";
	$day2 = mkTime(1,0,0);
	echo mkTime(0,0,0);
	echo mkTime(1,0,0,1,1,2012);
	echo "<br>";
	echo "<br>";
	echo mkTime(0,0,0,12,03,2011);
	echo date("d/m/y H:i:s", $day1);
	echo "<br>";
	echo date("d/m/y H:i:s", $day2);
	echo "<br>";
	$day = 3;
	echo date("d/m/y H:i:s", strtotime("+$day day", mkTime(0,0,0) ) );
	
?>
<br />
<?php date('Y-m-d')?>