<?php
/*
������� 1
- ��������������� ���������� ��� �������� ���������� ���������
- ���� ��������������� ������ ������������ ����� ����
  ���������� �� � ��� ����������
- ��������� ������� ���������
- ��������������� ���������� ��� �������� �������� ���������� ��������� ��������
- ���� ��������������� ������ ������������ �� ����, ������������ �� � ��������� � ��� ����������
- ���������� ��������������� ����
*/
$count = 1;
if(isset($_COOKIE['count'])){ 
	$count = $_COOKIE['count'];
	$tm = $_COOKIE['time'];
}
$count++;
	setCookie('count', $count);
	setCookie("time", date("H:i:s"));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>��������� �����</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>

<h1>��������� �����</h1>

<?php
/*
������� 2
- �������� ���������� � ���������� ��������� � ���� ���������� ���������
*/
if($count>2){
echo $_COOKIE['count']."<br>"; 
echo $_COOKIE['time'];
}
else {
echo '<h1>������ ��� ����</a></h1>';
}

?>

</body>
</html>