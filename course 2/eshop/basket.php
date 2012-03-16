<?php
	// запуск сессии
	session_start();
	// подключение библиотек
	require "eshop_db.inc.php";
	require "eshop_lib.inc.php";
?>
<html>
<head>
	<title>Корзина пользователя</title>
</head>
<body>
<?php
if($count){
	echo "Перейти к <a href='catalog.php'>каталогу</a>";
}else {
	echo "Корзина пуста. Перейти к <a href='catalog.php'>каталогу</a>";
}
?>
<table border="0" cellpadding="5" cellspacing="0" width="100%">
<tr>
	<th>N п/п</th>
	<th>Автор</th>
	<th>Название</th>
	<th>Год издания</th>
	<th>Цена, руб.</th>
	<th>Количество</th>
	<th>Удалить</th>
</tr>
<?php
$goods = myBasket();
$index = 1;
$sum = 0;
foreach ($goods as $item){
?>
<tr>
	<td><?= $index ?></td>
	<td><?= $item['author'] ?></td>
	<td><?= $item['title'] ?></td>
	<td><?= $item['pubyear'] ?></td>
	<td><?= $item['price'] ?></td>
	<td><?= $item['quantity'] ?></td>
	<td><a href='delete_from_basket.php?id=<?= $item['id'] ?>'>Удалить</a></td>
</tr>
<?php
	$index++;
	$sum += $item['price']*$item['quantity'];
}
?>
</table>

<p>Всего товаров в корзине на сумму: <?= $sum ?> руб.

<div align="center">
	<input type="button" value="Оформить заказ!"
                      onClick="location.href='orderform.php'">
</div>

</body>
</html>







