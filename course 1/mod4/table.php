<?php
	/*
	ЗАДАНИЕ 1
	- Опишите функцию getTable()
	- Задайте для функции три аргумента: $cols, $rows, $color

	ЗАДАНИЕ 2
	- Откройте файл mod3\table.php
	- Скопируйте код, который отрисовывает таблицу умножения
	- Вставьте скопированный код в тело функции getTable()
	- Измените код таким образом, чтобы таблица отрисовывалась в зависимости от входящих параметров $cols, $rows и $color
	*/
	/*
	ЗАДАНИЕ 4
	- Измените входящие параметры функции getTable() на параметры по умолчанию
	*/
	function getTable($cols = 10, $rows = 10, $color='grey'){
		static $cnt=0;
		$cnt++;
		echo "Таблица номер $cnt";
		echo "<table border='1'>\n";
		for($r=1;$r<=$rows;$r++){
			echo "<tr>\n";
			for($c=1; $c<=$cols; $c++){
				if($r==1 || $c==1){echo "\t\t<th style='background:$color'>".$r*$c."</th>\n";}
				else{echo "\t\t<td>".$r*$c."</td>\n";}
			}
			echo "</tr>";
		}
		echo "</table>";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Таблица умножения</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body> 
	<h1>Таблица умножения</h1>
	<?php
	/*
	ЗАДАНИЕ 3
	- Отрисуйте таблицу умножения вызывая функцию getTable() с различными параметрами
	*/
	/*
	ЗАДАНИЕ 5
	- Отрисуйте таблицу умножения вызывая функцию getTable() без параметров
	- Отрисуйте таблицу умножения вызывая функцию getTable() с одним параметром
	- Отрисуйте таблицу умножения вызывая функцию getTable() с двумя параметрами
	*/
	getTable(10, 5, 'CornflowerBlue');
	getTable(5, 3, 'Cornsilk');
	getTable();
	getTable(7);
	getTable(7,5);
	?>
</body>
</html>
