<?php
	// запуск сессии
	session_start();
	// подключение библиотек
	require "eshop_db.inc.php";
	require "eshop_lib.inc.php";
	$customerid = session_id();
	$goodsid = filter($_GET['id'], 'i');
	$quantity = 1;
	$datetime = time();
	add2basket($customerid, $goodsid, $quantity, $datetime);
	
	header("Location: catalog.php");

?>