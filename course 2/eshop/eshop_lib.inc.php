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
	# ����� ������ � ������
	function db2array($data){
		$arr = array();//����� ���������� ������ ������, ���� ���� ������� �����
		while ($row = mysql_fetch_assoc($data)){
			$arr[] = $row;
		}
		return $arr;
	}
	# �� ���������� ��������
	function selectAll(){
		$selectAll = "SELECT * FROM catalog";
		$result = mysql_query($selectAll) or die(mysql_error());
		return db2array($result);
	}
	
	# ��������� ����� � ������
	function add2basket($customer, $goodsid, $quantity, $datetime){
		$ins2basket = "INSERT INTO 
		basket(customer, goodsid, quantity, datetime)
		VALUES('$customer', $goodsid, $quantity, $datetime)";
		mysql_query($ins2basket) or die(mysql_error());
	}
	
	# ���������� �������
	function myBasket(){
		$selBasket = "SELECT author, title, pubyear, price, basket.id, goodsid, customer, quantity
		FROM catalog, basket
		WHERE customer='".session_id()."' AND catalog.id = basket.goodsid";
		$result = mysql_query($selBasket) or die(mysql_error());
		return db2array($result);
	}
	
	# �������� �� �������
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
	������� 7
	- ������� ������� getOrders() ��� ��������� ���������� � �������
	- �������� � ���� ������� $orders ������ � ������������� �� ����� "orders.log"
	- �������� ������ $allorders ��� �������� ���������� ��� ���� �������
	- � ����� foreach ���������� ��� ������
	- ������ ����� foreach �������� ������������� ������ $orderinfo ��� �������� ���������� � ������ ���������� ������
	- ��������� ���������� � ������������ �� ������� $orders(name, email, phone, address, customer, date) � ������� $orderinfo
	- ������� SQL-�������� ��� ������� �� ������� ������� ���� ������� ��� ����������� ����������
	- �������� ���� ��������� ���� �������
	- ��������� ���������� � ���������� ������ ��������� ��� ��������
		����� "goods" � ������� $orderinfo
	- �������� �������������� ������ $orderinfo � ���� �������� ���������� ����� ������� $allorders
	- ������� getOrders() ������ ���������� ������ $allorders � ����������� � ���� �����������
		� ��������� ��� �������
	*/

?>