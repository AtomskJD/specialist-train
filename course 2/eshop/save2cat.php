<?php
	// ����������� ���������
	require "eshop_db.inc.php";
	require "eshop_lib.inc.php";
	# �������� ������ �� ����� � ��������� �������� filter
	$author = filter($_POST['author']);
	$title = filter($_POST['title']);
	$pubyear = filter($_POST['pubyear'], 'i');
	$price = filter($_POST['price'], 'i');
	
	# ��������� ����� � ���� �������� save
	save($author, $title, $pubyear, $price);
	
	# �������������
	header("Location: add2cat.php");
	
?>