<?php
/*
ЗАДАНИЕ 1
- Создайте переменную $day и присвойте ей произвольное числовое значение
*/
$day = 6;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Конструкция switch</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
	<h1>Конструкция switch</h1>
	<?php
	/*
	ЗАДАНИЕ 2
	-  С помощью конструкции switch выведите фразу "Это рабочий день", если значение переменной $day попадает в диапазон чисел от 1 до 5(включительно) 
	- Выведите фразу "Это выходной день", если значение переменной $day равно числам 6 или 7
	- Выведите фразу "Неизвестный день", если значение переменной $day не попадает в диапазон чисел от 1 до 7(включительно) 
	*/
	switch($day){
		case 1:;
		case 2:;
		case 3:;
		case 4:;
		case 5: echo "Это рабочий день";break;
		case 6:;
		case 7: echo "Это выходной день";break;
		default: echo "Неизвестный день";
	}
	?>
</body>
</html>
