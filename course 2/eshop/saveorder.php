<?php
	// запуск сессии
	session_start();
	// подключение библиотек
	require "eshop_db.inc.php";
	require "eshop_lib.inc.php";
	
	$name = filter($_POST['name'], 'sf');
	$email = filter($_POST['email'], 'sf');
	$phone = filter($_POST['phone'], 'sf');
	$address = filter($_POST['address'], 'sf');
	$customer = session_id();
	$dt = time();
	
	$order = "$name|$email|$phone|$address|$customer|$dt\n";
	
	file_put_contents(ORDER_LOG, $order, FILE_APPEND);
	
	resave($dt);
	/*
	
	ЗАДАНИЕ 3
	- вызовите функцию resave() для пересохранения купленных товаров из корзины
		в таблицу orders
	*/
?>
<html>
<head>
	<title>Сохранение данных заказа</title>
</head>
<body>
	<p>Ваш заказ принят.</p>
	<p><a href="catalog.php">Каталог товаров</a></p>
</body>
</html>