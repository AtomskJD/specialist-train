<?php
/*
ЗАДАНИЕ 1
- Инициализируйте переменную для подсчета количества посещений
- Если соответствующие данные передавались через куки
  сохраняйте их в эту переменную
- Нарастите счетчик посещений
- Инициализируйте переменную для хранения значения последнего посещения страницы
- Если соответствующие данные передавались из куки, отфильтруйте их и сохраните в эту переменную
- Установите соответствующие куки
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
	<title>Последний визит</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>

<h1>Последний визит</h1>

<?php
/*
ЗАДАНИЕ 2
- Выводите информацию о количестве посещений и дате последнего посещения
*/
if($count>2){
echo $_COOKIE['count']."<br>"; 
echo $_COOKIE['time'];
}
else {
echo '<h1>Первый раз вижу</a></h1>';
}

?>

</body>
</html>