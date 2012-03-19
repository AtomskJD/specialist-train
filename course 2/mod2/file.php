<?php
/*
������� 1
- ���������� ��������� ��� �������� ����� �����
- ���������, ������������ �� ����� � ��������� �� ���������� ������ �� �����
- � ������, ���� ����� ���� ����������, ������������ ���������� ��������
- ����������� ������ ��� ������ � ����
- �������� ���������� � ������ � �������� � ���� �������������� ������
- ��������� ���������� ������� �������� (����� ���������� �� ������, ������������ ������� POST)
*/
function filter($str, $type='s'){
		if ($type == 's') return trim(strip_tags($str));
		else return $str * 1;
}
define("FILE_NAME", 'guestBook.txt');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$str = filter($_POST['fname'])."\t";
	$str .= filter($_POST['lname'])."\n";
	file_put_contents(FILE_NAME, $str, FILE_APPEND);
	header("location:file.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>������ � �������</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>

<h1>��������� �����</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

���: <input type="text" name="fname" /><br />
�������: <input type="text" name="lname" /><br />

<br />

<input type="submit" value="���������!" />

</form>

<?php
/*
������� 2
- ���������, ���������� �� ���� � ����������� � �������������
- ���� ���� ����������, �������� ��� ���������� ����� � ���� ������� �����
- � ����� �������� ��� ������ ������� ����� � ���������� ������� ������
- ����� ����� �������� ������ ����� � ������.
*/
if(file_exists(FILE_NAME)){
	$line = 1;
	foreach(file(FILE_NAME) as $var){
		echo "<h2>$line. \t $var</h2>";
		$line++;
	}
	echo "<h3>file size is ". filesize(FILE_NAME) ." bytes</h3>";
}
?>

</body>
</html>