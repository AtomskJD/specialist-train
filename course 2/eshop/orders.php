<?php
	// ������ ������
	session_start();
	// ����������� ���������
	require "eshop_db.inc.php";
	require "eshop_lib.inc.php";
?>
<html>
<head>
	<title>����������� ������</title>
</head>
<body>
<h2>����������� ������:</h2>
<?php
$orders = getOrders();
if (is_array($orders) ){
	foreach($orders as $order){
?>
<hr>
<p><b>��������</b>: <?= $order['name'] ?></p>
<p><b>Email</b>: <?= $order['email'] ?></p>
<p><b>�������</b>: <?= $order['phone'] ?></p>
<p><b>����� ��������</b>: <?= $order['address'] ?></p>
<p><b>���� ���������� ������</b>: <?= date("d-m-Y H:i:s", $order['datetime']) ?></p>
<h3>��������� ������:</h3>
<table border="1" cellpadding="5" cellspacing="0" width="90%">
<tr>
	<th>N �/�</th>
	<th>�����</th>
	<th>��������</th>
	<th>��� �������</th>
	<th>����, ���.</th>
	<th>����������</th>
</tr>
<?php
		$index = 1;
		$sum = 0;
	foreach ($order['goods'] as $item){
		?>
			<tr>
				<th><?= $index ?></th>
				<th><?= $item['author'] ?></th>
				<th><?= $item['title'] ?></th>
				<th><?= $item['pubyear'] ?></th>
				<th><?= $item['price'] ?></th>
				<th><?= $item['quantity'] ?></th>
			</tr>
		<?php
		$index++;
		$sum += $item['price']*$item['quantity'];
	}
?>

</table>
<p>����� ������� � ������ �� �����: <?= $sum ?> ���.

<?
	}//END FIRST FOREACH
}// ENDIF
?>
</body>

</html>