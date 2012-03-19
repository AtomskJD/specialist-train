<?php
	// подключение библиотек
	require "eshop_db.inc.php";
	require "eshop_lib.inc.php";
	# Получаем данные из формы и фильтруем функцией filter
	$author = filter($_POST['author']);
	$title = filter($_POST['title']);
	$pubyear = filter($_POST['pubyear'], 'i');
	$price = filter($_POST['price'], 'i');
	
	# Сохраняем товар в базу функцией save
	save($author, $title, $pubyear, $price);
	
	# Переадресация
	header("Location: add2cat.php");
	
?>