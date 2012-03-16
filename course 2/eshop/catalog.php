<?php
	// запуск сессии
	session_start();
	// подключение библиотек
	require "eshop_db.inc.php";
	require "eshop_lib.inc.php";
?>
<html>
<head>
	<title>Каталог товаров</title>
</head>
<body>
<?php
	echo "Товаров в <a href='basket.php'>корзине</a> $count";
?>
<table border="1" cellpadding="5" cellspacing="0" width="100%">
<tr>
	<th>Автор</th>
	<th>Название</th>
	<th>Год издания</th>
	<th>Цена, руб.</th>
	<th>В корзину</th>
</tr>
<?php
	$goods = selectAll();
	foreach ($goods as $item){
		?>
		<tr>
			<td><?= $item['author'] ?></td>
			<td><?= $item['title'] ?></td>
			<td><?= $item['pubyear'] ?></td>
			<td><?= $item['price'] ?></td>
			<td><a href='add2basket.php?id=<?= $item['id'] ?>'>В корзину</a></td>
		</tr>
		<?php
	}
	/*
	ЗАДАНИЕ 2
	- С помощью функции selectAll() получите выборку всех товаров
	- В цикле выведите все товары на экран
	- Значение ячейки "В корзину" оформите в виде гиперссылки на
	документ add2basket.php, добавив параметр id с идентификатором(поле id) товара
	*/
?>
</table>
</body>
</html>