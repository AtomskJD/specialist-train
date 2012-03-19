<?php
	$str='5+10*5+5';
	// $str = $_GET['nums'];
	$cur = 0;
	$len = 0;
	$var1 = 0;
	for ($pos=0; $pos<strlen($str); $pos++){
		if (($str{$pos} == '*') or ($str{$pos} == '/') or ($str{$pos} == '-') or ($str{$pos} == '+'))
		$signs[$pos] = $str{$pos}; 
	}
	$signs[strlen($str)] = 'end';
	

	print_r($signs);

?>