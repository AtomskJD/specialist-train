<?php
	/*
	ЗАДАНИЕ 1
	- Создайте две числовые переменные $cols и $rows
	- Присвойте созданным переменным произвольные значения в диапазоне от 1 до 10
	*/
	$cols = rand(5,15); //td
	$rows = rand(5,15); //tr
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
	ЗАДАНИЕ 2
	- Используя циклы отрисуйте таблицу умножения в виде HTML-таблицы на следующих условиях
		- Число столбцов должно быть равно значению переменной $cols
		- Число строк должно быть равно значению переменной $rows
		-  Ячейки на пересечении столбцов и строк должны содержать значения, являющиеся произведением порядковых номеров столбца и строки
	- Рекомендуется использовать цикл for	
	
	ЗАДАНИЕ 3
	- Значения в ячейках первой строки и первого столбца должны быть отрисованы полужирным шрифтом и выровнены по центру ячейки
	- Фоновый цвет ячеек первой строки и первого столбца должен быть отличным от фонового цвета таблицы
	*/
	echo "<table border='1'>";
	for($r=1;$r<=$rows;$r++){
		echo "<tr>";
		for($c=1, $color='CornflowerBlue', $align='center', $weight='bold';$c<=$cols;$c++){
			echo "<td bgcolor=$color align=$align style=font-weight:$weight>".$r*$c."</td>";
			if($r>1){$color='white'; $align='right'; $weight='normal';}
		}
		echo "</tr>";
	}
	echo "</table>";
	?>
</body>
</html>
