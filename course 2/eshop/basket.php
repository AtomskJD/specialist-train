<?php
	// ������ ������
	session_start();
	// ����������� ���������
	require "eshop_db.inc.php";
	require "eshop_lib.inc.php";
?>
<html>
<head>
	<title>������� ������������</title>
</head>
<body>
<?php
if($count){
	echo "������� � <a href='catalog.php'>��������</a>";
}else {
	echo "������� �����. ������� � <a href='catalog.php'>��������</a>";
}
?>
<table border="0" cellpadding="5" cellspacing="0" width="100%">
<tr>
	<th>N �/�</th>
	<th>�����</th>
	<th>��������</th>
	<th>��� �������</th>
	<th>����, ���.</th>
	<th>����������</th>
	<th>�������</th>
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
	<td><a href='delete_from_basket.php?id=<?= $item['id'] ?>'>�������</a></td>
</tr>
<?php
	$index++;
	$sum += $item['price']*$item['quantity'];
}
?>
</table>

<p>����� ������� � ������� �� �����: <?= $sum ?> ���.

<div align="center">
	<input type="button" value="�������� �����!"
                      onClick="location.href='orderform.php'">
</div>

</body>
</html>







