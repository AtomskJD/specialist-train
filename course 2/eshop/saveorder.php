<?php
	// ������ ������
	session_start();
	// ����������� ���������
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
	
	������� 3
	- �������� ������� resave() ��� �������������� ��������� ������� �� �������
		� ������� orders
	*/
?>
<html>
<head>
	<title>���������� ������ ������</title>
</head>
<body>
	<p>��� ����� ������.</p>
	<p><a href="catalog.php">������� �������</a></p>
</body>
</html>