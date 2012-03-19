<?php
	/*
	ЗАДАНИЕ 1
	- Создайте строковую переменную $now
	- Создайте строковую переменную $birthday
	- Присвойте переменной $now значение метки времени актуальной даты(сегодня)
	- Присвойте переменной $birthday значение метки времени Вашего дня рождения
	*/
	$now=time();
	$birthday=mktime(0,0,0,11,18,2011);
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Использование функций даты и времени</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
	<h1>Использование функций даты и времени</h1>
	<?php
	/*
	ЗАДАНИЕ 2
	- Выведите фразу "До моего дня рождения осталось "
	- Выведите количество секунд оставшееся до Вашего дня рождения
	- Закончите фразу " секунд"
	*/
	echo "<h2>до моего др осталось ".(intval(($birthday-$now)/60/60/24))." дней</h2>";
	?>
</body>
</html>
