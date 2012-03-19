<?php
/*
ЗАДАНИЕ 1
- Проверьте, была ли корректно отправлена форма
- Если она была отправлена, отфильтруйте полученные значения
- В зависимости от оператора производите различные математические действия
- В случае деления, проверьте, делитель на равенство с нулем (на ноль делить нельзя)
- Сохраните полученный результат вычисления в переменной
*/
include_once('lib.inc.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$num1 = filter($_POST['num1']);
	$num2 = filter($_POST['num2']);
	$operator = filter($_POST['operator'], 's');
	$rez="<h2>$num1 $operator $num2 = ";
	switch ($operator){
		case '+': $rez .= $num1+$num2;break;
		case '-': $rez .= $num1-$num2;break;
		case '*': $rez .= $num1*$num2;break;
		case '/': if($num2 == 0) $rez='<h1>Деление на 0</h1>'; else $rez .= $num1/$num2;break;
		default: $rez = "<h1>Вы ввели какую-то хрень - $operator</h1>";
	}
	echo $rez,"</h2>";
}
?>


<h1>Калькулятор</h1>

<?php
/*
ЗАДАНИЕ 2
- Если результат существует, выведите его
*/
?>

<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">

Число 1:<br />
<input type="text" name="num1" /><br /><br />

Оператор:<br />
<input type="text" name="operator" /><br /><br />

Число 2:<br />
<input type="text" name="num2" /><br /><br />

<input type="submit" value="Считать!" />

</form>