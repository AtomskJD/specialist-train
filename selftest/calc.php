<?php
function result($text){
	$posS = strspn($text, '0123456789');
	$var1 = substr($text, 0, $posS);
	$var2 = substr($text, $posS+1);
	//func 1
	switch ($text{$posS}){
		case '+': return $var1 + $var2;break;
		case '-': return $var1 - $var2;break;
		case '*': return $var1 * $var2;break;
		case '/':  if($var2!=0)return $var1 / $var2;break;
	}
}
function cutter($str){
	$count = 0;
	for ($pos=0; $pos<strlen($str); $pos++){
		if (($str{$pos} == '*') or ($str{$pos} == '/') or ($str{$pos} == '-') or ($str{$pos} == '+')or ($pos+1 == strlen($str) ) )
		$count++;
		if ($count == 2) {
			$var = result(substr($str, 0, $pos) );
			$GLOBALS['str'] = $var . substr($str, $pos);
			echo "{$GLOBALS['str']} <br>";
			cutter($GLOBALS['str']);
			break;
		}
	}
	// return $pos;
}

	// echo substr_replace($text, $var1+$var2, 0, 7);

$str = "111+2+222";
cutter($str);
?>
<pre><?= print_r($GLOBALS) ?></pre>
