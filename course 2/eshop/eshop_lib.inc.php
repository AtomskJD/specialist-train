<?php
	function filter($str, $type = 's'){
		switch ($type){
			case 's': return mysql_real_escape_string(trim(strip_tags($str)));break;
			case 'i': return (int)$str;break;
			case 'sf': return trim(strip_tags($str));break;
		}
	}
	function save ($author, $title, $pubyear, $price){
		$insert = "INSERT INTO 
		catalog(author, title, pubyear, price)
		VALUES('$author', '$title', $pubyear, $price)";
		mysql_query($insert) or die(mysql_error());
		
	}
	# Сброс вывода в массив
	function db2array($data){
		$arr = array();//будет отдаваться массив всегда, даже если таблица эмпти
		while ($row = mysql_fetch_assoc($data)){
			$arr[] = $row;
		}
		return $arr;
	}
	# Всё содержимое каталога
	function selectAll(){
		$selectAll = "SELECT * FROM catalog";
		$result = mysql_query($selectAll) or die(mysql_error());
		return db2array($result);
	}
	
	# Добавляем товар в корзну
	function add2basket($customer, $goodsid, $quantity, $datetime){
		$ins2basket = "INSERT INTO 
		basket(customer, goodsid, quantity, datetime)
		VALUES('$customer', $goodsid, $quantity, $datetime)";
		mysql_query($ins2basket) or die(mysql_error());
	}
	
	# Показываем корзину
	function myBasket(){
		$selBasket = "SELECT author, title, pubyear, price, basket.id, goodsid, customer, quantity
		FROM catalog, basket
		WHERE customer='".session_id()."' AND catalog.id = basket.goodsid";
		$result = mysql_query($selBasket) or die(mysql_error());
		return db2array($result);
	}
	
	# Удаление из корзины
	function basketDel($id){
		$delBasket = "DELETE FROM basket WHERE id=$id";
		mysql_query($delBasket) or die(mysql_error());
	}
	
	function resave($dt){
		$goods = myBasket();
		foreach ($goods as $item){
			$insOrder = "INSERT INTO 
		orders(author, title, pubyear, price, customer, quantity, datetime)
		VALUES('{$item["author"]}', '{$item["title"]}', {$item["pubyear"]}, {$item["price"]}, '{$item["customer"]}', {$item["quantity"]}, $dt)";
		mysql_query($insOrder) or die(mysql_error());
		}
		$delBasket = "DELETE FROM basket WHERE customer='".session_id()."'";
		mysql_query($delBasket) or die(mysql_error() );
	}
	function getOrders(){
		if(!file_exists(ORDER_LOG))
			return false;
		$allorders = array();
		$orders = file(ORDER_LOG);
		foreach ($orders as $order){
			list($name, $email, $phone, $address, $customer, $dt) = explode("|", $order);
			$orderinfo = array();
				$orderinfo['name'] = $name;
				$orderinfo['email'] = $email;
				$orderinfo['phone'] = $phone;
				$orderinfo['address'] = $address;
				$orderinfo['datetime'] = $dt*1;
				$sql = "SELECT * FROM orders WHERE customer = '$customer' AND datetime = ".$orderinfo['datetime'];
				$result = mysql_query($sql) or die(mysql_error());
				$orderinfo['goods'] = db2array($result);
			
			$allorders[] = $orderinfo;
		}
		return $allorders;
	}
	/*
	ЗАДАНИЕ 7
	- Опишите функцию getOrders() для получения информации о заказах
	- Получите в виде массива $orders данные о пользователях из файла "orders.log"
	- Создайте массив $allorders для хранения информации обо всех заказах
	- В цикле foreach переберите все заказы
	- Внутри цикла foreach создайте ассоциативный массив $orderinfo для хранения информации о каждом конкретном заказе
	- Сохраните информацию о пользователе из массива $orders(name, email, phone, address, customer, date) в массиве $orderinfo
	- Опишите SQL-оператор для выборки из таблицы заказов всех товаров для конкретного покупателя
	- Получите весь результат этой выборки
	- Сохраните полученный в предыдущем пункте результат как значение
		ключа "goods" в массиве $orderinfo
	- Добавьте сформированный массив $orderinfo в виде значения очередного ключа массива $allorders
	- Функция getOrders() должна возвращать массив $allorders с информацией о всех покупателях
		и сделанных ими заказах
	*/

?>