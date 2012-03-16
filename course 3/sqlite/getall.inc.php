<?php
$all = $gbook->getAll();
$all = array_reverse($all);
if (!is_array($all)) die("Не массив");
echo "<p>Всего записей в книге ".count($all)."</p>";
foreach($all as $var){
	$id = $var['id'];
	$name = $var['name'];
	$email = $var['email'];
	$msg = nl2br($var['msg']);
	$ip = $var['ip'];
	$datatime = date("d-m-Y  H:i:s",$var['datetime']);
	//echo "$var  :::   $key<br>";
	echo <<<LABEL
	<hr>
	<p align="right"><a href="gbook.php?del=$id">Удалить</a></p>
	<p>
		<a href="mailto:$email">$name</a> from [$ip] @ $datatime
		<br> $msg
	</p>
LABEL;
}

/* ЗАДАНИЕ 2
- После вызова метода getAll проверьте, был ли запрос успешным?
- Если НЕТ, то присвойте переменной $errMsg строковое значение "Произошла ошибка при выводе записей"
*/
?>