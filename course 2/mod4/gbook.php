<?php
/* ЗАДАНИЕ 1
- Подключитесь к серверу mySQL
- Выберите активную Базу Данных 'gbook'
- Проверьте, была ли корректным образом отправлена форма
- Если она была отправлена: отфильтруйте полученные данные,
  сформируйте SQL-оператор на вставку данных в таблицу msgs
  и выполните его. После этого выполните перезапрос страницы, чтобы избавиться от информации, переданной через форму
*/
function filter($str, $param='s'){
	if ($param=='s'){
		return trim(strip_tags($str));
	}
	else return abs((int)$str);
}
# Проводим все операции с базой
define("HOST", "localhost");
define("LOGIN", "root");
define("PASS", "pass@word1");
define("BASE", "gbook");
mysql_connect(HOST, LOGIN, PASS) or die("Error connect to db");
mysql_select_db(BASE);
mysql_query("SET NAMES 'cp1251'");



#Проверки и работа
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = filter($_POST['name']);
	$email = filter($_POST['email']);
	$msg = filter($_POST['msg']);
	$insert = "INSERT INTO msgs(name, email, msg) VALUES('$name', '$email', '$msg')";
	mysql_query($insert) or die(mysql_error());
	
header("Location:{$_SERVER['PHP_SELF']}");
exit;
}
#Удаление
elseif(($_SERVER['REQUEST_METHOD'] == "GET") AND (isset ($_GET['id'])) ){
	$ids = filter($_GET['id'], 'i');
	$delete = "DELETE FROM msgs WHERE id=$ids";
	if ($ids>0)
	mysql_query($delete) or die(mysql_error());

header("Location:{$_SERVER['PHP_SELF']}");
exit;
}

/*
ЗАДАНИЕ 3
- Проверьте, был ли запрос методом GET на удаление записи
- Если он был: отфильтруйте полученные данные,
  сформируйте SQL-оператор на удаление записи и выполните его.
  После этого выполните перезапрос страницы, чтобы избавиться от информации, переданной методом GET
*/
$select = "SELECT * FROM msgs ORDER BY id DESC";
$resultRes = mysql_query($select);
mysql_close();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Гостевая книга</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>

<h1>Гостевая книга</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

Ваше имя:<br />
<input type="text" name="name" /><br />
Ваш E-mail:<br />
<input type="text" name="email" /><br />
Сообщение:<br />
<textarea name="msg" cols="50" rows="5"></textarea><br />
<br />
<input type="submit" value="Добавить!" />

</form>

<?php

$resultRow = mysql_num_rows($resultRes);
for($row=0; $row<$resultRow; $row++){
	$resultArr = mysql_fetch_assoc($resultRes);
	echo "<hr><p style='margin-left:15px; font-weight:bold'>";
		echo "<a href=mailto:{$resultArr['email']}>{$resultArr['name']}</a></p>";
		echo "<h2 style='margin-left:30px'>".nl2br($resultArr['msg'])."</h2>";
		echo "<div align='right' style='margin-right:50px'><a href=gbook.php?id={$resultArr['id']}>Удалить</a></div>";
}
	echo "<hr>";
/*
ЗАДАНИЕ 2
- Сформируйте SQL-оператор на выборку всех данных из таблицы
  msgs в обратном порядке и выполните его. Результат выборки
  сохраните в переменной.
- Закройте соединение с БД
- Получите количество рядов результата выборки и выведите его на экран
- В цикле получите очередной ряд результата выборки в виде ассоциативного массива.
  Таким образом, используя этот цикл, выведите на экран все сообщения, а также информацию
  об авторе каждого сообщения. После каджого сообщения сформируйте ссылку для удаления этой
  записи. Информацию об идентификаторе удаляемого сообщения передавайте методом GET.
*/
?>

</body>
</html>