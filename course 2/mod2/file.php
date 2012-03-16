<?php
/*
ЗАДАНИЕ 1
- Установите константу для хранения имени файла
- Проверьте, отправлялась ли форма и корректно ли отправлены данные из формы
- В случае, если форма была отправлена, отфильтруйте полученные значения
- Сформируйте строку для записи с файл
- Откройте соединение с файлом и запишите в него сформированную строку
- Выполните перезапрос текущей страницы (чтобы избавиться от данных, отправленных методом POST)
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
	<title>Работа с файлами</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>

<h1>Заполните форму</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

Имя: <input type="text" name="fname" /><br />
Фамилия: <input type="text" name="lname" /><br />

<br />

<input type="submit" value="Отправить!" />

</form>

<?php
/*
ЗАДАНИЕ 2
- Проверьте, существует ли файл с информацией о пользователях
- Если файл существует, получите все содержимое файла в виде массива строк
- В цикле выведите все строки данного файла с порядковым номером строки
- После этого выведите размер файла в байтах.
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