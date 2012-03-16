<?php
	// запуск сессии
	session_start();
	// подключение библиотек
	require "eshop_db.inc.php";
	require "eshop_lib.inc.php";
	
	$id = filter($_GET['id'], 'i');
	basketDel($id);
	header("Location: basket.php");
?>