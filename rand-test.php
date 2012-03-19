<?php
define('OVER9K', 6000000);
$a = time();
$finalscore = array(1=>0,0,0,0,0,0);
for ( $over9kcounter=0; $over9kcounter < OVER9K; $over9kcounter++ ){ 
	$diceSide = rand(1, 6);
	$finalscore[$diceSide]++;
}
foreach($finalscore as $k=>$v){
	echo "<h2>Сторона $k выпала $v раз </h2>";
}
$b = time();
(int)$c = $b-$a;
echo '<p> Время отработки скрипта '.$c.' сек</p>';
?>