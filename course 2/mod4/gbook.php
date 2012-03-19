<?php
/* ������� 1
- ������������ � ������� mySQL
- �������� �������� ���� ������ 'gbook'
- ���������, ���� �� ���������� ������� ���������� �����
- ���� ��� ���� ����������: ������������ ���������� ������,
  ����������� SQL-�������� �� ������� ������ � ������� msgs
  � ��������� ���. ����� ����� ��������� ���������� ��������, ����� ���������� �� ����������, ���������� ����� �����
*/
function filter($str, $param='s'){
	if ($param=='s'){
		return trim(strip_tags($str));
	}
	else return abs((int)$str);
}
# �������� ��� �������� � �����
define("HOST", "localhost");
define("LOGIN", "root");
define("PASS", "pass@word1");
define("BASE", "gbook");
mysql_connect(HOST, LOGIN, PASS) or die("Error connect to db");
mysql_select_db(BASE);
mysql_query("SET NAMES 'cp1251'");



#�������� � ������
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = filter($_POST['name']);
	$email = filter($_POST['email']);
	$msg = filter($_POST['msg']);
	$insert = "INSERT INTO msgs(name, email, msg) VALUES('$name', '$email', '$msg')";
	mysql_query($insert) or die(mysql_error());
	
header("Location:{$_SERVER['PHP_SELF']}");
exit;
}
#��������
elseif(($_SERVER['REQUEST_METHOD'] == "GET") AND (isset ($_GET['id'])) ){
	$ids = filter($_GET['id'], 'i');
	$delete = "DELETE FROM msgs WHERE id=$ids";
	if ($ids>0)
	mysql_query($delete) or die(mysql_error());

header("Location:{$_SERVER['PHP_SELF']}");
exit;
}

/*
������� 3
- ���������, ��� �� ������ ������� GET �� �������� ������
- ���� �� ���: ������������ ���������� ������,
  ����������� SQL-�������� �� �������� ������ � ��������� ���.
  ����� ����� ��������� ���������� ��������, ����� ���������� �� ����������, ���������� ������� GET
*/
$select = "SELECT * FROM msgs ORDER BY id DESC";
$resultRes = mysql_query($select);
mysql_close();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>�������� �����</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>

<h1>�������� �����</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

���� ���:<br />
<input type="text" name="name" /><br />
��� E-mail:<br />
<input type="text" name="email" /><br />
���������:<br />
<textarea name="msg" cols="50" rows="5"></textarea><br />
<br />
<input type="submit" value="��������!" />

</form>

<?php

$resultRow = mysql_num_rows($resultRes);
for($row=0; $row<$resultRow; $row++){
	$resultArr = mysql_fetch_assoc($resultRes);
	echo "<hr><p style='margin-left:15px; font-weight:bold'>";
		echo "<a href=mailto:{$resultArr['email']}>{$resultArr['name']}</a></p>";
		echo "<h2 style='margin-left:30px'>".nl2br($resultArr['msg'])."</h2>";
		echo "<div align='right' style='margin-right:50px'><a href=gbook.php?id={$resultArr['id']}>�������</a></div>";
}
	echo "<hr>";
/*
������� 2
- ����������� SQL-�������� �� ������� ���� ������ �� �������
  msgs � �������� ������� � ��������� ���. ��������� �������
  ��������� � ����������.
- �������� ���������� � ��
- �������� ���������� ����� ���������� ������� � �������� ��� �� �����
- � ����� �������� ��������� ��� ���������� ������� � ���� �������������� �������.
  ����� �������, ��������� ���� ����, �������� �� ����� ��� ���������, � ����� ����������
  �� ������ ������� ���������. ����� ������� ��������� ����������� ������ ��� �������� ����
  ������. ���������� �� �������������� ���������� ��������� ����������� ������� GET.
*/
?>

</body>
</html>