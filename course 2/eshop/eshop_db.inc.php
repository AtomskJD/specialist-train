<?php
	define("DB_HOST", "localhost");
	define("DB_LOGIN", "root");
	define("DB_PASSWORD", "pass@word1");
	define("DB_NAME", "eshop");
	define("ORDER_LOG", "orders.log");
	$count = 0;
	mysql_connect(DB_HOST, DB_LOGIN, DB_PASSWORD) or die("Ошибка соединения с базой");
	mysql_select_db(DB_NAME) or die(mysql_error());
	mysql_query("SET NAMES 'cp1251'") or die(mysql_error());
	
	# количество товаров в корзине пользователя
	$sqlCount = "SELECT count(*) FROM basket WHERE customer='".session_id()."'";
	$sqlRes = mysql_query($sqlCount) or die(mysql_error());
	$count = mysql_result($sqlRes, 0, "count(*)");
	
?>